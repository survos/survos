<?php

namespace App\Controller;

use App\Entity\Official;
use App\Form\OfficialType;
use App\Repository\OfficialRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/congress')]
class CongressController extends AbstractController
{
    #[Route('/', name: 'app_congress_index', methods: ['GET'])]
    public function index(OfficialRepository $officialRepository): Response
    {
        return $this->render('congress/index.html.twig', [
            'officials' => $officialRepository->findAll(),
        ]);
    }

    #[Route('/browse', name: 'app_congress_browse', methods: ['GET'])]
    public function browse(OfficialRepository $officialRepository): Response
    {
        return $this->render('congress/browse.html.twig', [
            'officialClass' => Official::class,
        ]);
    }

    #[Route('/new', name: 'app_congress_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OfficialRepository $officialRepository): Response
    {
        $official = new Official();
        $form = $this->createForm(OfficialType::class, $official);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $officialRepository->add($official, true);

            return $this->redirectToRoute('app_congress_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('congress/new.html.twig', [
            'official' => $official,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_congress_show', methods: ['GET'], options: ['expose' => true])]
    public function show(Official $official): Response
    {
        return $this->render('congress/show.html.twig', [
            'official' => $official,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_congress_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Official $official, OfficialRepository $officialRepository): Response
    {
        $form = $this->createForm(OfficialType::class, $official);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $officialRepository->add($official, true);

            return $this->redirectToRoute('app_congress_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('congress/edit.html.twig', [
            'official' => $official,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_congress_delete', methods: ['POST'])]
    public function delete(Request $request, Official $official, OfficialRepository $officialRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $official->getId(), $request->request->get('_token'))) {
            $officialRepository->remove($official, true);
        }

        return $this->redirectToRoute('app_congress_index', [], Response::HTTP_SEE_OTHER);
    }
}
