<?php

namespace App\Controller;

use HaydenPierce\ClassFinder\ClassFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class AppController extends AbstractController
{
    public function __construct(
        #[Autowire('%kernel.project_dir%/')]
        private $projectDir,

        private ComposerJsonFactory $composerJsonFactory)
    {
    }

    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        $packages = [];
        $composerJson = $this->composerJsonFactory->createFromFilePath($this->projectDir  .  'composer.json');

        foreach ($composerJson->getAutoload()['psr-4'] as $nameSpace => $packagePath) {
            if (str_contains($packagePath, 'packages')) {
                $packageComposerJson = $this->composerJsonFactory->createFromFilePath($this->projectDir . '/' . $packagePath  .  '/../composer.json');
//                dd($packageComposerJson);

                try {
                    $packages[$nameSpace] = [
                        'composerJson' => $packageComposerJson,
                        'name' => $packageComposerJson->getName(),
                        'packagePath' => $packagePath,
                        'classes' => ClassFinder::getClassesInNamespace($nameSpace, ClassFinder::RECURSIVE_MODE),
                    ];

                } catch (\Exception $exception) {
                    // not in vendor? in bundles.php?
                }
            }
        }

        return $this->render('app/index.html.twig', [
            'packages' => $packages,
            'composerJson' => $composerJson,
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

}
