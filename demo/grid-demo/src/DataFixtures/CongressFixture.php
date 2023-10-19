<?php

namespace App\DataFixtures;

use App\Entity\Congress;
use App\Entity\Official;
use App\Entity\Term;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Contracts\Cache\CacheInterface;

class CongressFixture extends Fixture
{
    public function __construct(
        private CacheInterface $cache,
        private ValidatorInterface $validator,
    )
    {
    }

    public function load(ObjectManager $manager): void
    {

    }
}
