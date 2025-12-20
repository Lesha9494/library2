<?php

namespace App\Controller\Api;

use App\Entity\Author;
use App\Repository\AuthorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class AuthorController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private ValidatorInterface $validator
    ) {}

    #[Route('/api/authors', name: 'api_author_index', methods: ['GET'])]
    public function index(Request $request, AuthorRepository $authorRepository): JsonResponse
    {   
        $query = $request->query->get('q');

        $qb = $authorRepository->createQueryBuilder('a');

        if ($query) {
            $qb->andWhere(
                'a.name LIKE :query OR a.country LIKE :query'
            )
            ->setParameter('query', '%' . $query . '%');
        }

        $authors = $qb->getQuery()->getResult();

        $data = [];
        foreach ($authors as $author) {
            $data[] = $this->formatAuthorData($author);
        }

        return $this->json([
            'success' => true,
            'message' => 'Список авторов получен',
            'data' => $data,
            'count' => count($data)
        ]);
    }

    #[Route('/api/authors/{id}', name: 'api_author_show', methods: ['GET'])]
    public function show(int $id, AuthorRepository $authorRepository): JsonResponse
    {
        $author = $authorRepository->find($id);

        if (!$author) {
            return $this->json([
                'success' => false,
                'message' => 'Автор не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        return $this->json([
            'success' => true,
            'message' => 'Данные автора получены',
            'data' => $this->formatAuthorData($author)
        ]);
    }

    #[Route('/api/authors', name: 'api_author_create', methods: ['POST'])]
    public function create(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $author = new Author();

        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json([
                'success' => false,
                'message' => 'Неверный формат JSON данных'
            ], Response::HTTP_BAD_REQUEST);
        }

        if (empty($data['name'])) {
            return $this->json([
                'success' => false,
                'message' => 'Имя автора обязательно для заполнения'
            ], Response::HTTP_BAD_REQUEST);
        }

        if (isset($data['name'])) {
            $author->setFullName($data['name']);
        }

        if (isset($data['country'])) {
            $author->setCountry($data['country']);
        }

        if (isset($data['biography'])) {
            $author->setBiography($data['biography']);
        }

        $errors = $this->validator->validate($author);

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

        $this->em->persist($author);
        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Автор успешно создан',
            'data' => $this->formatAuthorData($author)
        ], Response::HTTP_CREATED);
    }

    #[Route('/api/authors/{id}', name: 'api_author_update', methods: ['PUT'])]
    public function update(int $id, Request $request, AuthorRepository $authorRepository, ValidatorInterface $validator): JsonResponse
    {
        $author = $authorRepository->find($id);

        if (!$author) {
            return $this->json([
                'success' => false,
                'message' => 'Автор не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json([
                'success' => false,
                'message' => 'Неверный формат JSON данных'
            ], Response::HTTP_BAD_REQUEST);
        }

        if (isset($data['name'])) {
            $author->setFullName($data['name']);
        }

        if (isset($data['country'])) {
            $author->setCountry($data['country']);
        }

        if (isset($data['biography'])) {
            $author->setBiography($data['biography']);
        }

        $errors = $this->validator->validate($author);

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

        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Данные автора успешно обновлены',
            'data' => $this->formatAuthorData($author)
        ]);
    }

    #[Route('/api/authors/{id}', name: 'api_author_delete', methods: ['DELETE'])]
    public function delete(int $id, AuthorRepository $authorRepository): JsonResponse
    {
        $author = $authorRepository->find($id);

        if (!$author) {
            return $this->json([
                'success' => false,
                'message' => 'Автор не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        $this->em->remove($author);
        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Автор успешно удален'
        ], Response::HTTP_NO_CONTENT);
    }

    private function formatAuthorData(Author $author): array
    {
        $data = [
            'id' => $author->getId(),
        ];

        $data['name'] = $author->getFullName() ?? 'Не указано';

        $data['country'] = $author->getCountry() ?? 'Не указана';

        $data['biography'] = $author->getBiography() ?? 'Не указана';

        $data['booksCount'] = $author->getBooks()->count();

        return $data;
    }
}