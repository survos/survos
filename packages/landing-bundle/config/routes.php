<?php

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Survos\LandingBundle\Controller\LandingController;

return function (RoutingConfigurator $routes) {
    $routes->add('survos_bundle_browse', '/bundles')
        ->controller([LandingController::class, 'bundles']);
};
