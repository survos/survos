<?php

namespace App\Controller;

use App\Service\PackageService;
use HaydenPierce\ClassFinder\ClassFinder;
use Nadar\PhpComposerReader\Package;
use Nadar\PhpComposerReader\RequireDevSection;
use Nadar\PhpComposerReader\RequireSection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class AppController extends AbstractController
{
    public function __construct(private PackageService $packageService) {

    }

    #[Route('/', name: 'app_homepage')]
    public function index(PackageService $packageService): Response
    {
        $composerReader = $packageService->getProjectComposerJson();
        $data = $composerReader->getContent();
        $scripts = $data['scripts'];
        $scripts['phpstan'] = 'vendor/bin/phpstan';
        $data['scripts'] = $scripts;
        $composerReader->writeContent($data);
        $composerReader->writeContent($data);
        $composerReader->runCommand('normalize');
        $composerReader->runCommand('c:c');
        dd($composerReader->file);

        dd($composerReader, $composerReader->getContent(), get_class_methods($composerReader));
        $packages = $packageService->getPackages();
        $requires = new RequireDevSection($composerReader);
        $new = new Package($composerReader, 'survos/installer', '^1.5');
        $requires->add($new);


        return $this->render('app/index.html.twig', [
            'packages' => $packages,
            'requires' => $requires->assignIteratorData(),
            'composerJson' => $composerReader,
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

    #[Route('/package/{packageCode}', name: 'app_package')]
    public function package(string $packageCode): Response
    {

        return $this->render('app/package.html.twig', [
            'package' => $this->packageService->getPackage($packageCode),
            'controller_name' => 'AppController',
        ]);
    }

}
