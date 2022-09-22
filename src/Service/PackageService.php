<?php

declare(strict_types=1);

namespace App\Service;


use App\Model\Package;
use HaydenPierce\ClassFinder\ClassFinder;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpKernel\KernelInterface;
use Symplify\ComposerJsonManipulator\ComposerJsonFactory;
use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;

class PackageService
{
    public function __construct(
        #[Autowire('%kernel.project_dir%/')]
        private $projectDir,
        private KernelInterface $kernel,

        private ComposerJsonFactory $composerJsonFactory)
    {
    }

/*
 * return the psr-4 registered packages
 */
    public function getPackages(bool $recursive=false): array
    {
        $composerJson = $this->composerJsonFactory->createFromFilePath($this->projectDir  .  'composer.json');
        $packages = [];

//        dd($this->kernel->getBundles());

        foreach ($composerJson->getAutoload()['psr-4'] as $nameSpace => $packagePath) {
            if (str_contains($packagePath, 'packages')) {
                $packages[$nameSpace] = $this->getPackage($packagePath, $nameSpace, $recursive);
            }
        }
        return $packages;
    }

    public function getProjectComposerJson(): ComposerJson
    {
        return $this->composerJsonFactory->createFromFilePath($this->projectDir . '/composer.json');
    }

    public function getPackage(string $packagePath, string $nameSpace, bool $recursive=false)
    {
        $packageComposerJson = $this->composerJsonFactory->createFromFilePath($this->projectDir . '/' . $packagePath  .  '/../composer.json');
//                dd($packageComposerJson);

        $package = new Package($packagePath, $nameSpace, $packageComposerJson);

        return $package;
//        try {
//            $packages[$nameSpace] = [
//                'composerJson' => $packageComposerJson,
//                'name' => $packageComposerJson->getName(),
//                'packagePath' => $packagePath,
//                'classes' =>
//            ];
//
//        } catch (\Exception $exception) {
//            // not in vendor? in bundles.php?
//        }

    }

}

