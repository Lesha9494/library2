<?php

namespace App\Controller\Api;

use App\Entity\Loan;
use App\Entity\Reader;
use App\Entity\BookCopy;
use App\Entity\Fine;
use App\Enum\ActionType;
use App\Service\ActionLogger;
use App\Repository\LoanRepository;
use App\Repository\ReaderRepository;
use App\Repository\BookCopyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class LoanController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private ValidatorInterface $validator,
        private ActionLogger $logger
    ) {}

    #[Route('/api/loans', name: 'api_loan_index', methods: ['GET'])]
    public function index(Request $request, LoanRepository $loanRepository): JsonResponse
    {   
        $status = $request->query->get('status', 'all');
        $readerId = $request->query->get('reader_id');

        $qb = $loanRepository->createQueryBuilder('l')
            ->leftJoin('l.reader', 'r')
            ->leftJoin('l.bookCopy', 'bc')
            ->leftJoin('bc.book', 'b')
            ->addSelect('r')
            ->addSelect('bc')
            ->addSelect('b');

        if ($status === 'active') {
            $qb->andWhere('l.returnDate IS NULL');
        } elseif ($status === 'returned') {
            $qb->andWhere('l.returnDate IS NOT NULL');
        }

        if ($readerId) {
            $qb->andWhere('r.id = :readerId')
               ->setParameter('readerId', $readerId);
        }

        $loans = $qb->getQuery()->getResult();

        $data = [];
        foreach ($loans as $loan) {
            $data[] = $this->formatLoanData($loan);
        }

        return $this->json([
            'success' => true,
            'message' => 'Список выдач получен',
            'data' => $data,
            'count' => count($data)
        ]);
    }

    #[Route('/api/loans/{id}', name: 'api_loan_show', methods: ['GET'])]
    public function show(int $id, LoanRepository $loanRepository): JsonResponse
    {
        $loan = $loanRepository->find($id);

        if (!$loan) {
            return $this->json([
                'success' => false,
                'message' => 'Выдача не найдена'
            ], Response::HTTP_NOT_FOUND);
        }

        return $this->json([
            'success' => true,
            'message' => 'Данные выдачи получены',
            'data' => $this->formatLoanData($loan)
        ]);
    }

    #[Route('/api/loans/borrow', name: 'api_loan_borrow', methods: ['POST'])]
    public function borrow(
        Request $request,
        ReaderRepository $readerRepository,
        BookCopyRepository $bookCopyRepository
    ): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json([
                'success' => false,
                'message' => 'Неверный формат JSON данных'
            ], Response::HTTP_BAD_REQUEST);
        }

        if (empty($data['reader_id']) || empty($data['book_copy_id'])) {
            return $this->json([
                'success' => false,
                'message' => 'ID читателя и ID экземпляра книги обязательны'
            ], Response::HTTP_BAD_REQUEST);
        }

        $reader = $readerRepository->find($data['reader_id']);
        if (!$reader) {
            return $this->json([
                'success' => false,
                'message' => 'Читатель не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        $bookCopy = $bookCopyRepository->find($data['book_copy_id']);
        if (!$bookCopy) {
            return $this->json([
                'success' => false,
                'message' => 'Экземпляр книги не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        // Проверка доступности книги
        if ($bookCopy->getStatus() !== 'available') {
            return $this->json([
                'success' => false,
                'message' => 'Книга недоступна для выдачи'
            ], Response::HTTP_BAD_REQUEST);
        }

        // Создание выдачи
        $loan = new Loan();
        $loan->setReader($reader);
        $loan->setBookCopy($bookCopy);
        $loan->setIssueDate(new \DateTime());
        
        // Срок возврата (14 дней)
        $dueDate = new \DateTime();
        $dueDate->modify('+14 days');
        $loan->setDueDate($dueDate);

        // Меняем статус книги
        $bookCopy->setStatus('borrowed');

        $errors = $this->validator->validate($loan);
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }
            
            return $this->json([
                'success' => false,
                'message' => 'Ошибки валидации',
                'errors' => $errorMessages
            ], Response::HTTP_BAD_REQUEST);
        }

        $this->em->persist($loan);
        
        // Логирование
        $this->logger->log(
            ActionType::CHECKOUT,
            'Loan',
            $loan->getId(),
            null,
            [
                'reader_id' => $reader->getId(),
                'reader_name' => $reader->getFullName(),
                'book_copy_id' => $bookCopy->getId(),
                'book_title' => $bookCopy->getBook()->getTitle(),
                'issue_date' => $loan->getIssueDate()->format('Y-m-d H:i:s'),
                'due_date' => $loan->getDueDate()->format('Y-m-d')
            ],
            'Выдача книги читателю: ' . $reader->getFullName()
        );

        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Книга успешно выдана',
            'data' => $this->formatLoanData($loan)
        ], Response::HTTP_CREATED);
    }

    #[Route('/api/loans/{id}/return', name: 'api_loan_return', methods: ['POST'])]
    public function return(int $id, LoanRepository $loanRepository): JsonResponse
    {
        $loan = $loanRepository->find($id);

        if (!$loan) {
            return $this->json([
                'success' => false,
                'message' => 'Выдача не найдена'
            ], Response::HTTP_NOT_FOUND);
        }

        if ($loan->getReturnDate()) {
            return $this->json([
                'success' => false,
                'message' => 'Книга уже возвращена'
            ], Response::HTTP_BAD_REQUEST);
        }

        // Возврат книги
        $loan->setReturnDate(new \DateTime());
        $loan->getBookCopy()->setStatus('available');

        $isOverdue = $loan->getDueDate() < new \DateTime();
        $overdueDays = 0;
        $fineAmount = 0;

        if ($isOverdue) {
            $overdueDays = $loan->getDueDate()->diff(new \DateTime())->days;
            $fineAmount = $overdueDays * 50; // 50 руб/день

            $fine = new Fine();
            $fine->setReader($loan->getReader());
            $fine->setAmount($fineAmount);
            $fine->setReason('Просрочка возврата книги: ' . $loan->getBookCopy()->getBook()->getTitle());
            $fine->setPaid(false);
            $fine->setCreatedAt(new \DateTime());
            
            $this->em->persist($fine);
            
            // Логирование штрафа
            $this->logger->log(
                ActionType::FINE,
                'Fine',
                $fine->getId(),
                null,
                [
                    'reader_id' => $loan->getReader()->getId(),
                    'loan_id' => $loan->getId(),
                    'amount' => $fineAmount,
                    'overdue_days' => $overdueDays,
                    'reason' => 'Просрочка возврата'
                ],
                'Начислен штраф за просрочку: ' . $fineAmount . ' руб.'
            );
        }

        // Логирование возврата
        $this->logger->log(
            ActionType::RETURN,
            'Loan',
            $loan->getId(),
            null,
            [
                'return_date' => $loan->getReturnDate()->format('Y-m-d H:i:s'),
                'is_overdue' => $isOverdue,
                'overdue_days' => $overdueDays,
                'fine_amount' => $fineAmount
            ],
            $isOverdue ? 
                'Возврат с просрочкой ' . $overdueDays . ' дней. Штраф: ' . $fineAmount . ' руб.' :
                'Книга возвращена вовремя'
        );

        $this->em->flush();

        $response = [
            'success' => true,
            'message' => 'Книга успешно возвращена',
            'data' => $this->formatLoanData($loan)
        ];

        if ($isOverdue) {
            $response['fine'] = [
                'amount' => $fineAmount,
                'overdue_days' => $overdueDays,
                'message' => 'Начислен штраф за просрочку'
            ];
        }

        return $this->json($response);
    }

    #[Route('/api/loans/{id}/extend', name: 'api_loan_extend', methods: ['POST'])]
    public function extend(int $id, LoanRepository $loanRepository): JsonResponse
    {
        $loan = $loanRepository->find($id);

        if (!$loan) {
            return $this->json([
                'success' => false,
                'message' => 'Выдача не найдена'
            ], Response::HTTP_NOT_FOUND);
        }

        if ($loan->getReturnDate()) {
            return $this->json([
                'success' => false,
                'message' => 'Нельзя продлить уже возвращенную книгу'
            ], Response::HTTP_BAD_REQUEST);
        }

        if ($loan->getExtended()) {
            return $this->json([
                'success' => false,
                'message' => 'Книга уже была продлена ранее'
            ], Response::HTTP_BAD_REQUEST);
        }

        // Сохраняем старую дату возврата
        $oldDueDate = clone $loan->getDueDate();
        
        // Продление на 7 дней
        $newDueDate = clone $loan->getDueDate();
        $newDueDate->modify('+7 days');
        $loan->setDueDate($newDueDate);
        $loan->setExtended(true);

        // Логирование продления
        $this->logger->log(
            ActionType::RENEW,
            'Loan',
            $loan->getId(),
            ['old_due_date' => $oldDueDate->format('Y-m-d')],
            ['new_due_date' => $newDueDate->format('Y-m-d')],
            'Продление срока на 7 дней'
        );

        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Срок возврата продлен на 7 дней',
            'data' => $this->formatLoanData($loan),
            'extension_details' => [
                'old_due_date' => $oldDueDate->format('Y-m-d'),
                'new_due_date' => $newDueDate->format('Y-m-d'),
                'extended_days' => 7
            ]
        ]);
    }

    #[Route('/api/loans/{id}', name: 'api_loan_delete', methods: ['DELETE'])]
    public function delete(int $id, LoanRepository $loanRepository): JsonResponse
    {
        $loan = $loanRepository->find($id);

        if (!$loan) {
            return $this->json([
                'success' => false,
                'message' => 'Выдача не найдена'
            ], Response::HTTP_NOT_FOUND);
        }

        // Сохраняем данные для лога
        $loanData = $this->formatLoanData($loan);
        $bookTitle = $loan->getBookCopy()?->getBook()?->getTitle() ?? 'Неизвестная книга';
        $readerName = $loan->getReader()?->getFullName() ?? 'Неизвестный читатель';

        // Логирование удаления
        $this->logger->log(
            ActionType::DELETE,
            'Loan',
            $loan->getId(),
            $loanData,
            null,
            'Удалена выдача книги: ' . $bookTitle . ' для читателя: ' . $readerName
        );

        $this->em->remove($loan);
        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Выдача успешно удалена'
        ], Response::HTTP_NO_CONTENT);
    }

    private function formatLoanData(Loan $loan): array
    {
        $bookCopy = $loan->getBookCopy();
        $book = $bookCopy ? $bookCopy->getBook() : null;
        $reader = $loan->getReader();

        $data = [
            'id' => $loan->getId(),
            'reader' => $reader ? [
                'id' => $reader->getId(),
                'fullName' => $reader->getFullName() ?? 'Не указано',
                'ticketNumber' => $reader->getTicketNumber() ?? 'Не указан'
            ] : null,
            'bookCopyId' => $bookCopy ? $bookCopy->getId() : null,
            'status' => $loan->getReturnDate() ? 'возвращена' : 'на руках',
            'extended' => $loan->isExtended() ?? false,
        ];

        if ($loan->getIssueDate()) {
            $data['issueDate'] = $loan->getIssueDate()->format('Y-m-d H:i:s');
            $data['issueDateFormatted'] = $loan->getIssueDate()->format('d.m.Y');
        }
        
        if ($loan->getDueDate()) {
            $data['dueDate'] = $loan->getDueDate()->format('Y-m-d');
            $data['dueDateFormatted'] = $loan->getDueDate()->format('d.m.Y');
            $data['isOverdue'] = !$loan->getReturnDate() && $loan->getDueDate() < new \DateTime();
        }
        
        if ($loan->getReturnDate()) {
            $data['returnDate'] = $loan->getReturnDate()->format('Y-m-d H:i:s');
            $data['returnDateFormatted'] = $loan->getReturnDate()->format('d.m.Y');
        }

        if ($book) {
            $data['book'] = [
                'id' => $book->getId(),
                'title' => $book->getTitle() ?? 'Без названия',
                'isbn' => $book->getIsbn() ?? 'Не указан'
            ];
            
            if ($book->getAuthor()) {
                $author = $book->getAuthor();
                if (method_exists($author, 'getName')) {
                    $data['book']['author'] = $author->getFullName();
                } elseif (method_exists($author, 'getFullName')) {
                    $data['book']['author'] = $author->getFullName();
                } else {
                    $data['book']['author'] = 'Не указан';
                }
                $data['book']['author_id'] = $author->getId();
            } else {
                $data['book']['author'] = 'Не указан';
            }
        }

        return $data;
    }
}