<?php

declare(strict_types=1);

namespace Survos\Ip2LocationBundle\Service;

use IP2LocationIO\DomainWhois;

class Ip2LocationService
{
    public function __construct(private ?string $apiKey=null)
    {
    }

    public function domainWhoIs()
    {
        $config = new \IP2LocationIO\Configuration($this->apiKey);
        dd($config);
        $ip2locationio = new DomainWhois($config);
    }


}
