<?php

namespace Survos\PixieBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Survos\PixieBundle\Entity\Str;

class StrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Str::class);
    }

    /**
     * Iterate all Str rows in stable order. Keeps memory flat.
     * @return \Generator<Str>
     */
    public function iterateAll(int $batchSize = 1000): \Generator
    {
        $qb = $this->createQueryBuilder('s')
            ->orderBy('s.code', 'ASC');

        $first = 0;
        while (true) {
            $query = $qb->setFirstResult($first)->setMaxResults($batchSize)->getQuery();
            $rows  = $query->toIterable(); // no buffering

            $count = 0;
            foreach ($rows as $str) {
                $count++;
                yield $str;
            }
            if ($count === 0) {
                break;
            }
            $first += $batchSize;
            $this->_em->clear(); // important for memory!
        }
    }

    public function totalCount(): int
    {
        return (int)$this->createQueryBuilder('s')
            ->select('COUNT(s.code)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}
