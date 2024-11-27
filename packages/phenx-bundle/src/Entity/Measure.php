<?php

namespace PhenxBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Survos\PhenxBundle\Traits\PhenxBaseTrait;

/**
 * Measure
 */
#[ORM\Entity(repositoryClass: \Survos\PhenxBundle\Repository\MeasureRepository::class)]
#[ORM\Table(name: 'measure')]
class Measure
{
    use PhenxBaseTrait;

    /**
     * @var Domain
     */
    #[ORM\ManyToOne(targetEntity: \PhenxBundle\Entity\Domain::class, inversedBy: 'measures', fetch: 'EAGER')]
    #[ORM\JoinColumn(name: 'parent_id', referencedColumnName: 'phenx_id', nullable: false, onDelete: 'CASCADE')]
    private $domain;

    /**
     * @var Collection|PhenxProtocol[]
     */
    #[ORM\OneToMany(targetEntity: \PhenxBundle\Entity\PhenxProtocol::class, mappedBy: 'measure')]
    private $protocols;


    public function __construct()
    {
        $this->protocols = new ArrayCollection();
    }

    public function getType()
    {
        return 'measure';
    }

    public function getMetaFields()
    {
        return ['Content', 'Measure Release Date', 'Definition', 'Purpose', 'Keywords'];
    }

    /**
     * Set domain.
     *
     * @param \PhenxBundle\Entity\Domain $domain
     *
     * @return Measure
     */
    public function setDomain(\PhenxBundle\Entity\Domain $domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain.
     *
     * @return \PhenxBundle\Entity\Domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return Collection|PhenxProtocol[]
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    /**
     * @param Collection|PhenxProtocol[] $protocols
     */
    public function setProtocols($protocols)
    {
        $this->protocols = $protocols;
    }

    /**
     * @param PhenxProtocol $protocol
     */
    public function addProtocol(PhenxProtocol $protocol)
    {
        $this->protocols[] = $protocol;
    }

    public function __toString()
    {
        return $this->getPhenxId() . ' / '. $this->getTitle();
    }

}
