<?php

namespace App\Controller\Api;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/books')]
class BookController extends AbstractController
{
    #[Route('', name: 'api_book_index', methods: ['GET'])]
    public function index(BookRepository $bookRepository): JsonResponse
    {
        $books = $bookRepository->findAll();
        
        $data = [];
        foreach ($books as $book) {
            $data[] = [
                'id' => $book->getId(),
                'title' => $book->getTitle(),
                'isbn' => $book->getIsbn(),
                'year' => $book->getYear(),
                'author' => $book->getAuthor() ? [
                    'id' => $book->getAuthor()->getId(),
                    'name' => $book->getAuthor()->getFullName()
                ] : null
            ];
        }
        
        return $this->json([
            'success' => true,
            'data' => $data,
            'count' => count($data)
        ]);
    }

    #[Route('/{id}', name: 'api_book_show', methods: ['GET'])]
    public function show(Book $book): JsonResponse
    {
        return $this->json([
            'success' => true,
            'data' => [
                'id' => $book->getId(),
                'title' => $book->getTitle(),
                'isbn' => $book->getIsbn(),
                'year' => $book->getYear(),
                'author' => $book->getAuthor() ? [
                    'id' => $book->getAuthor()->getId(),
                    'name' => $book->getAuthor()->getFullName()
                ] : null
            ]
        ]);
    }

    // 3. POST создать новую книгу
    #[Route('', name: 'api_book_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        // Валидация
        if (empty($data['title'])) {
            return $this->json([
                'success' => false,
                'error' => 'Title is required'
            ], Response::HTTP_BAD_REQUEST);
        }
        
        $book = new Book();
        $book->setTitle($data['title']);
        $book->setIsbn($data['isbn'] ?? null);
        $book->setYear($data['year'] ?? null);
        
        // Если передан author_id
        if (!empty($data['author_id'])) {
            $author = $em->getRepository(\App\Entity\Author::class)->find($data['author_id']);
            if ($author) {
                $book->setAuthor($author);
            }
        }
        
        $em->persist($book);
        $em->flush();
        
        return $this->json([
            'success' => true,
            'message' => 'Book created successfully',
            'data' => [
                'id' => $book->getId(),
                'title' => $book->getTitle()
            ]
        ], Response::HTTP_CREATED);
    }

    // 4. PUT обновить книгу
    #[Route('/{id}', name: 'api_book_update', methods: ['PUT'])]
    public function update(Request $request, Book $book, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        if (isset($data['title'])) {
            $book->setTitle($data['title']);
        }
        if (isset($data['isbn'])) {
            $book->setIsbn($data['isbn']);
        }
        if (isset($data['year'])) {
            $book->setYear($data['year']);
        }
        
        $em->flush();
        
        return $this->json([
            'success' => true,
            'message' => 'Book updated successfully',
            'data' => [
                'id' => $book->getId(),
                'title' => $book->getTitle()
            ]
        ]);
    }

    #[Route('/{id}', name: 'api_book_delete', methods: ['DELETE'])]
    public function delete(Book $book, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($book);
        $em->flush();
        
        return $this->json([
            'success' => true,
            'message' => 'Book deleted successfully'
        ], Response::HTTP_NO_CONTENT);
    }
}