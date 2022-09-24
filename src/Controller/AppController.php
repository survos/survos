<?php

namespace App\Controller;

use App\Service\PackageService;
use HaydenPierce\ClassFinder\ClassFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class AppController extends AbstractController
{

    #[Route('/', name: 'app_homepage')]
    public function index(PackageService $packageService): Response
    {
        $packages = $packageService->getPackages();

        return $this->render('app/index.html.twig', [
            'packages' => $packages,
            'composerJson' => $packageService->getProjectComposerJson(),
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/bundle/{bundlePrefix}', name: 'app_bundle')]
    public function bundle(string $bundlePrefix): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    #[Route('/package/{packageCode}', name: 'app_bundle')]
    public function package(string $packageCode): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

}
