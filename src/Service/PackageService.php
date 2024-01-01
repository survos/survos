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
        private                     $projectDir,
//        private KernelInterface $kernel,
//        private ComposerJsonFactory $composerJsonFactory
    )
    {
    }

    /*
     * return the psr-4 registered packages
     * @return <int, Package[]>
     */
    public function getPackages(bool $recursive = false): array
    {
        // @todo: refactor to use plain json
        $composerJson = $this->composerJsonFactory->createFromFilePath($this->projectDir . 'composer.json');
        $packages = [];

//        dd($this->kernel->getBundles());

        foreach ($composerJson->getAutoload()['psr-4'] as $nameSpace => $packagePath) {
            if (!str_contains($packagePath, 'packages')) {
                continue;
            }
            // overkill, but load it here until we need to optimize.
            $packageComposerJson = $this->composerJsonFactory->createFromFilePath($this->projectDir . $packagePath . '../composer.json');
//                $packages[$nameSpace] = $this->getPackage($packagePath, $nameSpace, $recursive);
            $package = new Package($packageComposerJson->getShortName(), $packagePath, $nameSpace, $packageComposerJson);
            $packages[$package->getShortName()] = $package;
        }
        return $packages;
    }

    public function getProjectComposerJson(): ComposerJson
    {
        return $this->composerJsonFactory->createFromFilePath($this->projectDir . '/composer.json');
    }

    public function getPackage(string $packageCode)
    {
        return $this->getPackages()[$packageCode];
//        $packageComposerJson = $this->composerJsonFactory->createFromFilePath($this->projectDir . 'packages/' . $packagePath . '/composer.json');
//                dd($packageComposerJson);


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

