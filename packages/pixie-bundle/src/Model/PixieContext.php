<?php
namespace Survos\PixieBundle\Model;

use Doctrine\ORM\EntityManagerInterface;
use Survos\PixieBundle\Entity\Owner;
use Survos\PixieBundle\Model\Config;

final class PixieContext
{
    public function __construct(
        public string $pixieCode,
        public Config $config,
        public EntityManagerInterface $em,
        public ?Owner $ownerRef=null, // managed reference (proxy) for this pixieCode
    ) {}
}
