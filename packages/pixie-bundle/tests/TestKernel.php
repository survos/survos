<?php

namespace Survos\PixieBundle\Tests;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class TestKernel extends Kernel
{
    public function registerBundles(): iterable
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new TwigBundle(),
            new DoctrineBundle(),
//            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Survos\PixieBundle\SurvosPixieBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        $loader->load(__DIR__.'/config/survos_pixie.yaml');
    }

    public function getProjectDir(): string
    {
        return __DIR__ . '/project-dir';
    }
}
