<?php

namespace Survos\GeoapifyBundle\Tests;

use PHPUnit\Framework\TestCase;
use Survos\GeoapifyBundle\Service\GeoapifyService;
use Survos\GeoapifyBundle\Tests\Service\GeoapifyBundleClientTestKernel;

class ClientTest extends TestCase
{
    public function testGetWords(): void
    {
        $kernel = new GeoapifyBundleClientTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        $client = $container->get('survos_geoapify_service');
//        $client = $container->get(GeoapifyService::class);
        $this->assertInstanceOf(GeoapifyService::class, $client);

        $x = $client->reverseGeocode(0.0, 0.0);
        self::assertSame('abc', $x);

        return;

        $client->getTeamsForVereniging('ckl9m4l');
        $client->getTeam('ckl9m4l-hs-1');
        $client->getSporthallenForVereniging('ckl9m4l');
        $client->getVereniging('ckl9m4l');
        $client->getPouleIndelingen('regio-west-h1f-7');
        $client->getWedstrijdenForPoule('regio-west-h1f-7');
        $client->getWedstrijdenForVereniging('ckl9m4l');
        $client->getWedstrijdResultaatForVereniging('ckl9m4l');
        $client->getWedstrijdProgrammaForVereniging('ckl9m4l');
    }
}
