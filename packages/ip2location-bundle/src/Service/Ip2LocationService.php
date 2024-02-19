<?php

declare(strict_types=1);

namespace Survos\Ip2LocationBundle\Service;

use IP2LocationIO\DomainWhois;

class Ip2LocationService
{
    public function __construct(private ?string $apiKey=null)
    {
    }

    public function domainWhoIs(string $domain)
    {
        $config = new \IP2LocationIO\Configuration($this->apiKey);
        dd($config, $this->apiKey);
        $ip2locationio = new DomainWhois($config);
    }


}
