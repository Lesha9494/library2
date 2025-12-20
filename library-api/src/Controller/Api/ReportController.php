<?php

namespace App\Controller\Api;

use App\Repository\BookRepository;
use App\Repository\ReaderRepository;
use App\Repository\AuthorRepository;
use App\Repository\LoanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

#[Route('/api/reports')]
class ReportController extends AbstractController
{
    public function __construct(
        private BookRepository $bookRepository,
        private ReaderRepository $readerRepository,
        private AuthorRepository $authorRepository,
        private LoanRepository $loanRepository
    ) {}

    #[Route('/popular-books', name: 'api_report_popular_books', methods: ['GET'])]
    public function popularBooks(Request $request): JsonResponse
    {
        $limit = (int) $request->query->get('limit', 10);
        $limit = max(1, min($limit, 100)); // Ограничиваем от 1 до 100

        try {
            $popularBooks = $this->bookRepository->getMostPopularBooks($limit);

            return $this->json([
                'success' => true,
                'message' => 'Самые популярные книги',
                'data' => $popularBooks,
                'metadata' => [
                    'limit' => $limit,
                    'total' => count($popularBooks),
                    'generated_at' => date('Y-m-d H:i:s')
                ]
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Ошибка при получении данных',
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/debtors', name: 'api_report_debtors', methods: ['GET'])]
    public function debtors(): JsonResponse
    {
        try {
            $debtors = $this->readerRepository->getDebtors();

            foreach ($debtors as &$debtor) {
                $debtor['overdue_details'] = $this->getOverdueDetails($debtor['reader_id']);
            }

            $totalOverdueBooks = array_sum(array_column($debtors, 'overdue_books_count'));

            return $this->json([
                'success' => true,
                'message' => 'Список должников',
                'data' => $debtors,
                'statistics' => [
                    'total_debtors' => count($debtors),
                    'total_overdue_books' => $totalOverdueBooks,
                    'generated_at' => date('Y-m-d H:i:s')
                ]
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Ошибка при получении данных',
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/author-ranking', name: 'api_report_author_ranking', methods: ['GET'])]
    public function authorRanking(): JsonResponse
    {
        try {
            $ranking = $this->authorRepository->getAuthorRanking();

            // Добавляем позиции и форматируем данные
            $position = 1;
            $totalLoans = 0;

            foreach ($ranking as &$author) {
                $author['position'] = $position++;
                $author['total_loans'] = (int)$author['total_loans'];
                $totalLoans += $author['total_loans'];

                // Добавляем проценты
                if ($totalLoans > 0) {
                    $author['percentage'] = round(($author['total_loans'] / $totalLoans) * 100, 2);
                }
            }

            return $this->json([
                'success' => true,
                'message' => 'Рейтинг авторов по числу выданных книг',
                'data' => $ranking,
                'metadata' => [
                    'total_authors' => count($ranking),
                    'total_loans' => $totalLoans,
                    'generated_at' => date('Y-m-d H:i:s')
                ]
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Ошибка при получении данных',
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/library-stats', name: 'api_report_library_stats', methods: ['GET'])]
    public function libraryStats(): JsonResponse
    {
        try {
            // Основная статистика
            $stats = [
                'books' => $this->getBookStats(),
                'readers' => $this->getReaderStats(),
                'loans' => $this->getLoanStats(),
                'authors' => $this->getAuthorStats(),
                'generated_at' => date('Y-m-d H:i:s')
            ];

            // Топ 5 популярных книг
            $stats['top_books'] = $this->bookRepository->getMostPopularBooks(5);

            // Топ 5 авторов
            $stats['top_authors'] = array_slice($this->authorRepository->getAuthorRanking(), 0, 5);

            // Должники
            $stats['debtors_summary'] = [
                'count' => count($this->readerRepository->getDebtors()),
                'last_updated' => date('Y-m-d H:i:s')
            ];

            return $this->json([
                'success' => true,
                'message' => 'Общая статистика библиотеки',
                'data' => $stats
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Ошибка при получении статистики',
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Детали просрочек для конкретного читателя
     */
    private function getOverdueDetails(int $readerId): array
    {
        $conn = $this->loanRepository->getEntityManager()->getConnection();

        $sql = "
            SELECT 
                l.id as loan_id,
                b.title as book_title,
                a.full_name as author_name,
                l.due_date,
                DATEDIFF(NOW(), l.due_date) as days_overdue,
                (DATEDIFF(NOW(), l.due_date) * 50) as potential_fine
            FROM loan l
            LEFT JOIN book_copy bc ON l.book_copy_id = bc.id
            LEFT JOIN book b ON bc.book_id = b.id
            LEFT JOIN author a ON b.author_id = a.id
            WHERE l.reader_id = :readerId
            AND l.return_date IS NULL
            AND l.due_date < NOW()
            ORDER BY days_overdue DESC
        ";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['readerId' => $readerId]);

        return $result->fetchAllAssociative();
    }

    /**
     * Статистика по книгам
     */
    private function getBookStats(): array
    {
        $conn = $this->bookRepository->getEntityManager()->getConnection();

        $sql = "
            SELECT 
                COUNT(DISTINCT b.id) as total_books,
                COUNT(DISTINCT bc.id) as total_copies,
                SUM(CASE WHEN bc.status = 'available' THEN 1 ELSE 0 END) as available_copies,
                SUM(CASE WHEN bc.status = 'borrowed' THEN 1 ELSE 0 END) as borrowed_copies
            FROM book b
            LEFT JOIN book_copy bc ON b.id = bc.book_id
        ";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();

        return $result->fetchAssociative();
    }

    /**
     * Статистика по читателям
     */
    private function getReaderStats(): array
    {
        $conn = $this->readerRepository->getEntityManager()->getConnection();

        $sql = "
            SELECT 
                COUNT(DISTINCT id) as total_readers,
                COUNT(DISTINCT CASE WHEN id IN (
                    SELECT DISTINCT reader_id FROM loan WHERE return_date IS NULL
                ) THEN id END) as active_readers
            FROM reader
        ";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();

        return $result->fetchAssociative();
    }

    /**
     * Статистика по выдачам
     */
    private function getLoanStats(): array
    {
        $conn = $this->loanRepository->getEntityManager()->getConnection();

        $sql = "
            SELECT 
                COUNT(DISTINCT id) as total_loans,
                COUNT(DISTINCT CASE WHEN return_date IS NULL THEN id END) as active_loans,
                COUNT(DISTINCT CASE WHEN return_date IS NOT NULL THEN id END) as returned_loans,
                COUNT(DISTINCT CASE WHEN return_date IS NULL AND due_date < NOW() THEN id END) as overdue_loans,
                AVG(DATEDIFF(return_date, issue_date)) as avg_loan_duration
            FROM loan
        ";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();

        return $result->fetchAssociative();
    }

    /**
     * Статистика по авторам
     */
    private function getAuthorStats(): array
    {
        $conn = $this->authorRepository->getEntityManager()->getConnection();

        $sql = "
            SELECT 
                COUNT(DISTINCT id) as total_authors,
                COUNT(DISTINCT country) as countries_count
            FROM author
        ";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();

        return $result->fetchAssociative();
    }

    #[Route('/cached/{type}', name: 'api_report_cached', methods: ['GET'])]
    public function getCachedReport(string $type, CacheInterface $cache): JsonResponse
    {
        $data = $cache->get('report_' . $type, function (ItemInterface $item) {
            $item->expiresAfter(30);
            return ['error' => 'Отчет еще не сгенерирован', 'status' => 'pending'];
        });

        return $this->json([
            'success' => true,
            'report_type' => $type,
            'data' => $data,
            'source' => 'redis_cache'
        ]);
    }
}
