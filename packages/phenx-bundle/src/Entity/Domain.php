<?php

namespace PhenxBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Survos\PhenxBundle\Traits\PhenxBaseTrait;

/**
 * Domain
 */
#[ORM\Entity(repositoryClass: \Survos\PhenxBundle\Repository\DomainRepository::class)]
#[ORM\Table(name: 'domain')]
class Domain
{
    use PhenxBaseTrait;

    /**
     * @var Collection|Measure[]
     */
    #[ORM\OneToMany(targetEntity: \PhenxBundle\Entity\Measure::class, mappedBy: 'domain')]
    private $measures;

    public function __construct()
    {
        $this->measures = new ArrayCollection();
    }

    public function getType()
    {
        return 'domain';
    }

    /**
     * @return Collection|Measure[]
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * @param Collection|Measure[] $measures
     * @return self
     */
    public function setMeasures($measures)
    {
        $this->measures = $measures;

        return $this;
    }

    /**
     * @param Measure $measure
     * @return self
     */
    public function addMeasure(Measure $measure)
    {
        $this->measures[] = $measure;

        return $this;
    }
}
