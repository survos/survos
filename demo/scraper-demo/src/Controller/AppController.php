<?php

namespace App\Controller;

use Survos\Scraper\Service\ScraperService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app_app')]
    public function index(ScraperService $scraper): Response
    {
//        $json = $scraper->fetchUrl('https://theunitedstates.io/congress-legislators/legislators-current.json');
//        $data = json_decode($json);
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
