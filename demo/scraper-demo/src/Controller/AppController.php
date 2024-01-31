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
        $data = $scraper->fetchData('https://jsonplaceholder.typicode.com/albums', asData: 'object');
//        $data = $scraper->fetchData('https://theunitedstates.io/congress-legislators/legislators-current.json', asData: 'object');
        return $this->render('app/index.html.twig', [
            'albums' => $data,
        ]);
    }
}
