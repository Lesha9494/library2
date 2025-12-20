<?php

namespace App\Controller\Api;

use App\Service\ImportExport\BookImportService;
use App\Service\ImportExport\ReportExportService;
use App\Repository\BookRepository;
use App\Repository\ReaderRepository;
use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\StreamedResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

#[Route('/api')]
final class ImportExportController extends AbstractController
{
    #[Route('/import/books/csv', name: 'api_import_books_csv', methods: ['POST'])]
    public function importBooksCsv(
        Request $request,
        BookImportService $importService
    ): JsonResponse {
        $file = $request->files->get('file');

        if (!$file || $file->getClientOriginalExtension() !== 'csv') {
            return $this->json([
                'success' => false,
                'message' => 'Загрузите CSV файл'
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $importService->importFromCsv($file->getPathname());

        return $this->json([
            'success' => true,
            'message' => 'Импорт завершен',
            'data' => $result
        ]);
    }

    #[Route('/import/books/json', name: 'api_import_books_json', methods: ['POST'])]
    public function importBooksJson(
        Request $request,
        BookImportService $importService
    ): JsonResponse {
        /** @var UploadedFile|null $file */
        $file = $request->files->get('file');

        if (!$file || $file->getClientOriginalExtension() !== 'json') {
            return $this->json([
                'success' => false,
                'message' => 'Загрузите JSON файл'
            ], Response::HTTP_BAD_REQUEST);
        }

        $result = $importService->importFromJson($file->getPathname());

        return $this->json([
            'success' => true,
            'message' => 'Импорт завершен',
            'data' => $result
        ]);
    }

    #[Route('/export/books/excel', name: 'api_export_books_excel', methods: ['GET'])]
    public function exportBooksExcel(
        BookRepository $bookRepository,
        ReportExportService $exportService
    ): Response {
        $books = $bookRepository->getMostPopularBooks(50);

        return $exportService->exportPopularBooks($books);
    }

    #[Route('/export/debtors/excel', name: 'api_export_debtors_excel', methods: ['GET'])]
    public function exportDebtorsExcel(
        ReaderRepository $readerRepository,
        ReportExportService $exportService
    ): Response {
        $debtors = $readerRepository->getDebtors();

        return $exportService->exportDebtors($debtors);
    }

    #[Route('/export/authors/excel', name: 'api_export_authors_excel', methods: ['GET'])]
    public function exportAuthorsExcel(
        AuthorRepository $authorRepository,
        ReportExportService $exportService
    ): Response {
        $authors = $authorRepository->getAuthorRanking();

        return $exportService->exportAuthorRanking($authors);
    }

    #[Route('/export/library-stats', name: 'api_export_library_stats', methods: ['GET'])]
    public function exportLibraryStats(
        BookRepository $bookRepository,
        ReaderRepository $readerRepository,
        AuthorRepository $authorRepository,
        ReportExportService $exportService
    ): Response {

        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $spreadsheet->removeSheetByIndex(0);

        $booksSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Популярные книги');
        $spreadsheet->addSheet($booksSheet);


        $debtorsSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Должники');
        $spreadsheet->addSheet($debtorsSheet);


        $authorsSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Рейтинг авторов');
        $spreadsheet->addSheet($authorsSheet);


        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        return new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="library_report.xlsx"',
                'Cache-Control' => 'max-age=0'
            ]
        );
    }
}
