<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\Package;
use HaydenPierce\ClassFinder\ClassFinder;
use Nadar\PhpComposerReader\AutoloadSection;
use Nadar\PhpComposerReader\ComposerReader;
use Nadar\PhpComposerReader\RequireSection;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Finder\Finder;

class PackageService
{
    public function __construct(
        #[Autowire('%kernel.project_dir%')] private $projectDir,
    ) {
    }

    /*
     * return the psr-4 registered packages
     * @return <int, Package[]>
     */
    public function getPackages(bool $recursive = false): array
    {
        $reader = new ComposerReader($this->projectDir . '/composer.json');

        if (!$reader->canRead()) {
            throw new \Exception("Unable to read the JSON file.");
        }

        if (!$reader->canWrite()) {
            throw new \Exception("Unable to write to the JSON file.");
        }

        $autoLoad = new AutoloadSection($reader);

        $packages = [];
        $bundles = [];
        foreach ((new Finder())->in($this->projectDir . '/packages')->depth(0)->directories() as $directory) {
            $packageComposer = new ComposerReader($composerPath = $directory->getRealPath() . '/composer.json');
            if (!file_exists($composerPath)) {
                // e.g. recipes
                continue;
            }
            $bundleData = $packageComposer->getContent();
            $bundles[$bundleData['name']] = $bundleData;
            $section = new RequireSection($reader);

//            foreach ($section as $package) {
//                echo $package->name . ' with ' . $package->constraint;
//                // Check if the package version is greater than a given version constraint.
//                if ($package->greaterThan('^6.5')) {
//                    echo "Numerous releases available!";
//                }
//            }

            // this builds up a global list of what all our packages require
            $requires = $packageComposer->contentSection('require', []);
        }
        return $bundles;
    }

    public function getProjectComposerJson(): ComposerReader
    {
        return new ComposerReader($this->projectDir . '/composer.json');
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
