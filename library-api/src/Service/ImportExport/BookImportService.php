<?php

namespace App\Service\ImportExport;

use App\Entity\Book;
use App\Entity\Author;
use Doctrine\ORM\EntityManagerInterface;

class BookImportService
{
    public function __construct(
        private EntityManagerInterface $em
    ) {}

    public function importFromCsv(string $filePath): array
    {
        $rows = array_map('str_getcsv', file($filePath));
        $header = array_shift($rows);

        $imported = 0;
        $errors = [];

        foreach ($rows as $i => $row) {
            try {
                $data = array_combine($header, $row);

                $author = $this->em->getRepository(Author::class)->findOneBy([
                    'fullName' => $data['author'] ?? ''
                ]);

                if (!$author) {
                    $author = new Author();
                    $author->setFullName($data['author'] ?? 'Неизвестный');
                    $this->em->persist($author);
                }

                $book = new Book();
                $book->setTitle($data['title'] ?? '');
                $book->setIsbn($data['isbn'] ?? '');
                $book->setYear($data['year'] ?? null);
                $book->setAuthor($author);

                $this->em->persist($book);
                $imported++;
            } catch (\Exception $e) {
                $errors[] = "Строка " . ($i + 2) . ": " . $e->getMessage();
            }
        }

        $this->em->flush();

        return [
            'imported' => $imported,
            'errors' => $errors,
            'total_rows' => count($rows)
        ];
    }

    public function importFromJson(string $filePath): array
    {
        $json = file_get_contents($filePath);
        $data = json_decode($json, true);

        if (!$data) {
            return ['error' => 'Невалидный JSON файл'];
        }

        $imported = 0;
        $errors = [];

        foreach ($data as $i => $item) {
            try {
                $author = $this->em->getRepository(Author::class)->findOneBy([
                    'fullName' => $item['author'] ?? ''
                ]);

                if (!$author) {
                    $author = new Author();
                    $author->setFullName($item['author'] ?? 'Неизвестный');
                    $author->setCountry($item['country'] ?? null);
                    $this->em->persist($author);
                }

                $book = new Book();
                $book->setTitle($item['title'] ?? '');
                $book->setIsbn($item['isbn'] ?? '');
                $book->setYear($item['year'] ?? null);
                $book->setAuthor($author);

                $this->em->persist($book);
                $imported++;
            } catch (\Exception $e) {
                $errors[] = "Запись " . ($i + 1) . ": " . $e->getMessage();
            }
        }

        $this->em->flush();

        return [
            'imported' => $imported,
            'errors' => $errors,
            'total_records' => count($data)
        ];
    }
}
