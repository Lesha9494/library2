<?php

namespace App\Controller;

use App\Entity\Reader;
use App\Form\ReaderType;
use App\Repository\ReaderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/reader')]
final class ReaderController extends AbstractController
{
    #[Route('/', name: 'app_reader_index', methods: ['GET'])]
    public function index(ReaderRepository $readerRepository): Response
    {
        return $this->render('reader/index.html.twig', [
            'readers' => $readerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reader_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $reader = new Reader();
        $form = $this->createForm(ReaderType::class, $reader);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Обработка пароля
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $hashedPassword = $passwordHasher->hashPassword($reader, $plainPassword);
                $reader->setPassword($hashedPassword);
            }

            $entityManager->persist($reader);
            $entityManager->flush();

            $this->addFlash('success', 'Читатель успешно создан.');

            return $this->redirectToRoute('app_reader_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reader/new.html.twig', [
            'reader' => $reader,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reader_show', methods: ['GET'])]
    public function show(Reader $reader): Response
    {
        return $this->render('reader/show.html.twig', [
            'reader' => $reader,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reader_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Reader $reader,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $form = $this->createForm(ReaderType::class, $reader);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Обработка пароля (только если введен новый)
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $hashedPassword = $passwordHasher->hashPassword($reader, $plainPassword);
                $reader->setPassword($hashedPassword);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Данные читателя обновлены.');

            return $this->redirectToRoute('app_reader_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reader/edit.html.twig', [
            'reader' => $reader,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reader_delete', methods: ['POST'])]
    public function delete(Request $request, Reader $reader, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reader->getId(), $request->getPayload()->getString('_token'))) {

            // Проверка на наличие выданных книг
            $activeLoans = 0;
            foreach ($reader->getLoans() as $loan) {
                if (!$loan->getReturnDate()) {
                    $activeLoans++;
                }
            }

            if ($activeLoans > 0) {
                $this->addFlash('error', 'Нельзя удалить читателя, у которого есть не возвращенные книги.');
                return $this->redirectToRoute('app_reader_show', ['id' => $reader->getId()], Response::HTTP_SEE_OTHER);
            }

            $entityManager->remove($reader);
            $entityManager->flush();

            $this->addFlash('success', 'Читатель удален.');
        }

        return $this->redirectToRoute('app_reader_index', [], Response::HTTP_SEE_OTHER);
    }
}
