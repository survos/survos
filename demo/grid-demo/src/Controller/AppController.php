<?php

namespace App\Controller;

use App\Repository\OfficialRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_apage')]
    public function index(OfficialRepository $officialRepository): Response
    {
        return $this->render('congress/index.html.twig', [
            'officials' => $officialRepository->findAll(),
        ]);
    }


}
