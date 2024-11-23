<?php

namespace Survos\SeoBundle\Tests\Functional;
use Survos\SeoBundle\Service\SeoService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\Container;

class FunctionalTest extends KernelTestCase
{
    private Container $container;
    private static array $events;

    public function testSomething(): void
    {
        $this->assertNull(null);
        // 1 and 2 are from symfony docs: https://symfony.com/doc/current/testing.html

        // (1) boot the Symfony kernel
        self::bootKernel([
            'environment' => 'test',
            'debug' => false,
        ]);

        // (2) use static::getContainer() to access the service container
        $this->container = static::getContainer();

        /** @var SeoService $seoService */
        $seoService = $this->container->get(SeoService::class);
        $this->assertNotNull($seoService);
    }

//https://marceichenseher.de/de/hintergrund/php-symfony-und-phpunit-test-code-or-tested-code-did-not-remove-its-own-exception-handlers-aufloesen/

    protected static function ensureKernelShutdown(): void
    {
        $wasBooted = static::$booted;
        parent::ensureKernelShutdown();

        if ($wasBooted) {
            restore_exception_handler();
        }
    }

}
