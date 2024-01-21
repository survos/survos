<?php

namespace App\Controller;

use App\Entity\Official;
use App\Form\OfficialType;
use App\Repository\OfficialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/official')]
class OfficialController extends AbstractController
{
    #[Route('/', name: 'app_official_index', methods: ['GET'])]
    public function index(OfficialRepository $officialRepository): Response
    {
        return $this->render('official/index.html.twig', [
            'officials' => $officialRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_official_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $official = new Official();
        $form = $this->createForm(OfficialType::class, $official);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($official);
            $entityManager->flush();

            return $this->redirectToRoute('app_official_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('official/new.html.twig', [
            'official' => $official,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_official_show', methods: ['GET'])]
    public function show(Official $official): Response
    {
        return $this->render('official/show.html.twig', [
            'official' => $official,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_official_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Official $official, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OfficialType::class, $official);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_official_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('official/edit.html.twig', [
            'official' => $official,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_official_delete', methods: ['POST'])]
    public function delete(Request $request, Official $official, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$official->getId(), $request->request->get('_token'))) {
            $entityManager->remove($official);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_official_index', [], Response::HTTP_SEE_OTHER);
    }
}
