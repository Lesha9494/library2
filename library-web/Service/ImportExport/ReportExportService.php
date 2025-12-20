<?php

namespace App\Service\ImportExport;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportExportService
{

    public function exportPopularBooks(array $booksData): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Позиция');
        $sheet->setCellValue('B1', 'Название книги');
        $sheet->setCellValue('C1', 'Автор');
        $sheet->setCellValue('D1', 'Выдано раз');

        $row = 2;
        foreach ($booksData as $index => $book) {
            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $book['title'] ?? '');
            $sheet->setCellValue('C' . $row, $book['author'] ?? '');
            $sheet->setCellValue('D' . $row, $book['times_borrowed'] ?? 0);
            $row++;
        }

        $sheet->getStyle('A1:D1')->getFont()->setBold(true);

        return $this->createExcelResponse($spreadsheet, 'popular_books.xlsx');
    }

    public function exportDebtors(array $debtorsData): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Читатель');
        $sheet->setCellValue('B1', 'Номер билета');
        $sheet->setCellValue('C1', 'Просроченных книг');
        $sheet->setCellValue('D1', 'Email');

        $row = 2;
        foreach ($debtorsData as $debtor) {
            $sheet->setCellValue('A' . $row, $debtor['full_name'] ?? '');
            $sheet->setCellValue('B' . $row, $debtor['ticket_number'] ?? '');
            $sheet->setCellValue('C' . $row, $debtor['overdue_books_count'] ?? 0);
            $sheet->setCellValue('D' . $row, $debtor['email'] ?? '');
            $row++;
        }

        $sheet->getStyle('A1:D1')->getFont()->setBold(true);

        return $this->createExcelResponse($spreadsheet, 'debtors.xlsx');
    }

    public function exportAuthorRanking(array $authorsData): StreamedResponse
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Место');
        $sheet->setCellValue('B1', 'Автор');
        $sheet->setCellValue('C1', 'Количество выдач');
        $sheet->setCellValue('D1', 'Процент от общего');

        $row = 2;
        $totalLoans = array_sum(array_column($authorsData, 'total_loans'));

        foreach ($authorsData as $index => $author) {
            $percentage = $totalLoans > 0 ? ($author['total_loans'] / $totalLoans) * 100 : 0;

            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $author['full_name'] ?? '');
            $sheet->setCellValue('C' . $row, $author['total_loans'] ?? 0);
            $sheet->setCellValue('D' . $row, round($percentage, 2) . '%');
            $row++;
        }

        $sheet->getStyle('A1:D1')->getFont()->setBold(true);

        return $this->createExcelResponse($spreadsheet, 'author_ranking.xlsx');
    }

    private function createExcelResponse(Spreadsheet $spreadsheet, string $filename): StreamedResponse
    {
        $writer = new Xlsx($spreadsheet);

        return new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Cache-Control' => 'max-age=0'
            ]
        );
    }
}
