<?php

namespace App\Controller\Api;

use App\Entity\Reader;
use App\Repository\ReaderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ReaderController extends AbstractController
{
    public function __construct(private EntityManagerInterface $em) {}

    #[Route('/api/readers', name: 'reader_index', methods: ['GET'])]
    public function index(Request $request, ReaderRepository $readerRepository): JsonResponse
    {   
        $query = $request->query->get('q');

        $qb = $readerRepository->createQueryBuilder('r');

        if ($query) {
            $qb->andWhere(
                'r.fullName LIKE :query OR r.ticketNumber LIKE :query OR r.contacts LIKE :query'
            )
            ->setParameter('query', '%' . $query . '%');
        }

        $readers = $qb->getQuery()->getResult();

        $data = [];
        foreach ($readers as $reader) {
            $data[] = $this->formatReaderData($reader);
        }

        return $this->json([
            'success' => true,
            'message' => 'Список читателей получен',
            'data' => $data,
            'count' => count($data)
        ]);
    }

    #[Route('/api/readers', name: 'reader_create', methods: ['POST'])]
    public function create(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $reader = new Reader();

        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json([
                'success' => false,
                'message' => 'Неверный формат JSON данных'
            ], Response::HTTP_BAD_REQUEST);
        }

        if (empty($data['fullName'])) {
            return $this->json([
                'success' => false,
                'message' => 'ФИО читателя обязательно для заполнения'
            ], Response::HTTP_BAD_REQUEST);
        }

        $reader->setFullName($data['fullName']);
        $reader->setTicketNumber($data['ticketNumber'] ?? null);
        $reader->setContacts($data['contacts'] ?? null);

        $errors = $validator->validate($reader);

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

        $this->em->persist($reader);
        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Читатель успешно создан',
            'data' => $this->formatReaderData($reader)
        ], Response::HTTP_CREATED);
    }

    #[Route('/api/readers/{id}', name: 'reader_show', methods: ['GET'])]
    public function show(int $id, ReaderRepository $readerRepository): JsonResponse
    {
        $reader = $readerRepository->find($id);

        if (!$reader) {
            return $this->json([
                'success' => false,
                'message' => 'Читатель не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        return $this->json([
            'success' => true,
            'message' => 'Данные читателя получены',
            'data' => $this->formatReaderData($reader)
        ]);
    }

    #[Route('/api/readers/{id}', name: 'reader_update', methods: ['PUT'])]
    public function update(int $id, Request $request, ReaderRepository $readerRepository, ValidatorInterface $validator): JsonResponse
    {
        $reader = $readerRepository->find($id);

        if (!$reader) {
            return $this->json([
                'success' => false,
                'message' => 'Читатель не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json([
                'success' => false,
                'message' => 'Неверный формат JSON данных'
            ], Response::HTTP_BAD_REQUEST);
        }

        if (isset($data['fullName'])) {
            $reader->setFullName($data['fullName']);
        }
        if (isset($data['ticketNumber'])) {
            $reader->setTicketNumber($data['ticketNumber']);
        }
        if (isset($data['contacts'])) {
            $reader->setContacts($data['contacts']);
        }

        $errors = $validator->validate($reader);

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
            'message' => 'Данные читателя успешно обновлены',
            'data' => $this->formatReaderData($reader)
        ]);
    }

    #[Route('/api/readers/{id}', name: 'reader_delete', methods: ['DELETE'])]
    public function delete(int $id, ReaderRepository $readerRepository): JsonResponse
    {
        $reader = $readerRepository->find($id);

        if (!$reader) {
            return $this->json([
                'success' => false,
                'message' => 'Читатель не найден'
            ], Response::HTTP_NOT_FOUND);
        }

        $this->em->remove($reader);
        $this->em->flush();

        return $this->json([
            'success' => true,
            'message' => 'Читатель успешно удален'
        ], Response::HTTP_NO_CONTENT);
    }

    private function formatReaderData(Reader $reader): array
{
    return [
        'id' => $reader->getId(),
        'fullName' => $reader->getFullName(),
        'ticketNumber' => $reader->getTicketNumber() ?? 'Не указан',
        'contacts' => $reader->getContacts() ?? 'Не указаны',
    ];
}
}