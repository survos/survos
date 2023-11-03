<?php

namespace App\DataFixtures;

use App\Entity\{Official,Term};
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Contracts\Cache\CacheInterface;

class AppFixtures extends Fixture
{

    public function __construct(private CacheInterface $cache,
    private ValidatorInterface $validator
    ) {

    }
    public function load(ObjectManager $manager): void
    {
        $url = 'https://theunitedstates.io/congress-legislators/legislators-current.json';
        $json = $this->cache->get(md5($url), fn(CacheItem $cacheItem) => file_get_contents($url));
        foreach (json_decode($json) as $record) {
            $name = $record->name; // an object with name parts
            $bio = $record->bio; // a bio with gender, etc.
            $official = (new Official())
                ->setBirthday(new \DateTimeImmutable($bio->birthday))
                ->setGender($bio->gender)
                ->setFirstName($name->first)
                ->setLastName($name->last)
                ->setOfficialName($name->official_full ?? "$name->first $name->last");
            $manager->persist($official);

            foreach ($record->terms as $t) {
                $term = (new Term())
                    ->setType($t->type)
                    ->setStateAbbreviation($t->state)
                    ->setParty($t->party ?? null)
                    ->setDistrict($t->district ?? null)
                    ->setStartDate(new \DateTimeImmutable($t->start))
                    ->setEndDate(new \DateTimeImmutable($t->end));
                $manager->persist($term);
                $official->addTerm($term);
                $errors = $this->validator->validate($term);
                if (count($errors)) {
                    dd($errors);
                }
            }
        }
        $manager->flush();
    }
}