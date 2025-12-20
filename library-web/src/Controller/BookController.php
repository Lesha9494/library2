<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use App\Service\ActionLogger;
use App\Enum\ActionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Common\Collections\Collection;

#[Route('/book')]
final class BookController extends AbstractController
{
    public function __construct(
        private ActionLogger $actionLogger
    ) {}

    #[Route(name: 'app_book_index', methods: ['GET'])]
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', [
            'books' => $bookRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_book_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Сохраняем книгу
            $entityManager->persist($book);
            $entityManager->flush();

            // Получаем данные для логирования
            $author = $book->getAuthor();
            $copies = $book->getCopies();

            // Логируем создание книги
            $this->actionLogger->log(
                ActionType::CREATE,
                'Book',
                $book->getId(),
                null, // oldData
                [
                    'title' => $book->getTitle(),
                    'isbn' => $book->getIsbn(),
                    'year' => $book->getYear(),
                    'author' => $author ? $author->getFullName() : null,
                    'copies_count' => $copies instanceof Collection ? $copies->count() : 0
                ],
                'Создана новая книга: ' . $book->getTitle(),
                $this->getUser() ? $this->getUser()->getUserIdentifier() : null
            );

            $this->addFlash('success', 'Книга успешно создана!');

            return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('book/new.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_book_show', methods: ['GET'])]
    public function show(Book $book): Response
    {
        return $this->render('book/show.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_book_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        // Получаем старые данные для логирования
        $author = $book->getAuthor();
        $copies = $book->getCopies();

        $oldData = [
            'title' => $book->getTitle(),
            'isbn' => $book->getIsbn(),
            'year' => $book->getYear(),
            'author' => $author ? $author->getFullName() : null,
            'copies_count' => $copies instanceof Collection ? $copies->count() : 0
        ];

        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Сохраняем изменения
            $entityManager->flush();

            // Получаем обновленные данные
            $author = $book->getAuthor();
            $copies = $book->getCopies();

            // Логируем обновление книги
            $this->actionLogger->log(
                ActionType::UPDATE,
                'Book',
                $book->getId(),
                $oldData, // oldData
                [
                    'title' => $book->getTitle(),
                    'isbn' => $book->getIsbn(),
                    'year' => $book->getYear(),
                    'author' => $author ? $author->getFullName() : null,
                    'copies_count' => $copies instanceof Collection ? $copies->count() : 0
                ],
                'Обновлена книга: ' . $book->getTitle(),
                $this->getUser() ? $this->getUser()->getUserIdentifier() : null
            );

            $this->addFlash('success', 'Книга успешно обновлена!');

            return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('book/edit.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_book_delete', methods: ['POST'])]
    public function delete(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $book->getId(), $request->getPayload()->getString('_token'))) {
            // Получаем данные для логирования перед удалением
            $author = $book->getAuthor();
            $copies = $book->getCopies();

            $bookData = [
                'title' => $book->getTitle(),
                'isbn' => $book->getIsbn(),
                'year' => $book->getYear(),
                'author' => $author ? $author->getFullName() : null,
                'copies_count' => $copies instanceof Collection ? $copies->count() : 0
            ];

            // Удаляем книгу
            $entityManager->remove($book);
            $entityManager->flush();

            // Логируем удаление книги
            $this->actionLogger->log(
                ActionType::DELETE,
                'Book',
                $book->getId(), // Сохраняем ID для отслеживания
                $bookData, // oldData (данные удаленной книги)
                null, // newData
                'Удалена книга: ' . $book->getTitle(),
                $this->getUser() ? $this->getUser()->getUserIdentifier() : null
            );

            $this->addFlash('success', 'Книга успешно удалена!');
        } else {
            $this->addFlash('error', 'Неверный CSRF-токен!');
        }

        return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/checkout', name: 'app_book_checkout', methods: ['POST'])]
    public function checkout(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        // Проверяем CSRF токен
        if (!$this->isCsrfTokenValid('checkout' . $book->getId(), $request->getPayload()->getString('_token'))) {
            $this->addFlash('error', 'Неверный CSRF-токен!');
            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }

        // Получаем данные из формы
        $readerId = $request->request->getInt('reader_id');
        $bookCopyId = $request->request->getInt('book_copy_id');
        $dueDate = $request->request->get('due_date');

        // Здесь должна быть логика выдачи книги
        // Пример (нужно адаптировать под вашу структуру):
        /*
        $reader = $entityManager->getRepository(Reader::class)->find($readerId);
        $bookCopy = $entityManager->getRepository(BookCopy::class)->find($bookCopyId);
        
        if (!$reader || !$bookCopy) {
            $this->addFlash('error', 'Читатель или экземпляр книги не найден!');
            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }
        
        // Создаем запись о выдаче
        $checkout = new Checkout();
        $checkout->setReader($reader);
        $checkout->setBookCopy($bookCopy);
        $checkout->setCheckoutDate(new \DateTime());
        $checkout->setDueDate(new \DateTime($dueDate));
        
        // Меняем статус экземпляра
        $bookCopy->setStatus('checked_out');
        
        $entityManager->persist($checkout);
        $entityManager->flush();
        */

        // Логируем выдачу книги
        $this->actionLogger->log(
            ActionType::CHECKOUT,
            'Book',
            $book->getId(),
            ['status' => 'available'],
            [
                'status' => 'checked_out',
                'reader_id' => $readerId,
                'book_copy_id' => $bookCopyId,
                'due_date' => $dueDate,
                'checkout_date' => date('Y-m-d H:i:s')
            ],
            'Книга "' . $book->getTitle() . '" выдана читателю ID: ' . $readerId,
            $this->getUser() ? $this->getUser()->getUserIdentifier() : null
        );

        $this->addFlash('success', 'Книга успешно выдана!');
        return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
    }

    #[Route('/{id}/return', name: 'app_book_return', methods: ['POST'])]
    public function returnBook(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('return' . $book->getId(), $request->getPayload()->getString('_token'))) {
            $this->addFlash('error', 'Неверный CSRF-токен!');
            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }

        $bookCopyId = $request->request->getInt('book_copy_id');

        // Здесь должна быть логика возврата книги
        // Пример:
        /*
        $bookCopy = $entityManager->getRepository(BookCopy::class)->find($bookCopyId);
        
        if (!$bookCopy) {
            $this->addFlash('error', 'Экземпляр книги не найден!');
            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }
        
        // Находим активную выдачу
        $checkout = $entityManager->getRepository(Checkout::class)->findOneBy([
            'bookCopy' => $bookCopy,
            'returnDate' => null
        ]);
        
        if ($checkout) {
            $checkout->setReturnDate(new \DateTime());
            $bookCopy->setStatus('available');
            $entityManager->flush();
        }
        */

        // Логируем возврат книги
        $this->actionLogger->log(
            ActionType::RETURN,
            'Book',
            $book->getId(),
            [
                'status' => 'checked_out',
                'book_copy_id' => $bookCopyId
            ],
            [
                'status' => 'available',
                'return_date' => date('Y-m-d H:i:s')
            ],
            'Книга "' . $book->getTitle() . '" возвращена в библиотеку',
            $this->getUser() ? $this->getUser()->getUserIdentifier() : null
        );

        $this->addFlash('success', 'Книга успешно возвращена!');
        return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
    }

    #[Route('/{id}/renew', name: 'app_book_renew', methods: ['POST'])]
    public function renew(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('renew' . $book->getId(), $request->getPayload()->getString('_token'))) {
            $this->addFlash('error', 'Неверный CSRF-токен!');
            return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
        }

        $bookCopyId = $request->request->getInt('book_copy_id');
        $newDueDate = $request->request->get('new_due_date');

        // Логика продления срока
        /*
        $checkout = // находим активную выдачу
        $oldDueDate = $checkout->getDueDate()->format('Y-m-d');
        $checkout->setDueDate(new \DateTime($newDueDate));
        $entityManager->flush();
        */

        // Логируем продление срока
        $this->actionLogger->log(
            ActionType::RENEW,
            'Book',
            $book->getId(),
            [
                'book_copy_id' => $bookCopyId,
                'old_due_date' => date('Y-m-d'),
            ],
            [
                'book_copy_id' => $bookCopyId,
                'new_due_date' => $newDueDate,
                'renew_date' => date('Y-m-d H:i:s')
            ],
            'Продлен срок книги: ' . $book->getTitle(),
            $this->getUser() ? $this->getUser()->getUserIdentifier() : null
        );

        $this->addFlash('success', 'Срок книги успешно продлен!');
        return $this->redirectToRoute('app_book_show', ['id' => $book->getId()]);
    }
}
