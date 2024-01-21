<?php

namespace PhenxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Survos\PhenxBundle\Traits\PhenxBaseTrait;

/**
 * Protocol
 *
 * @ORM\Table(name="phenx_protocol")
 * @ORM\Entity(repositoryClass="PhenxBundle\Repository\PhenxProtocolRepository")
 */

class PhenxProtocol
{

    use PhenxBaseTrait;
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="PhenxBundle\Entity\Variable", mappedBy="protocol")
     * @ORM\OrderBy({"orderIdx" = "ASC"})
     */
    private $variables;


    public function getType()
    {
        return 'protocol';
    }

    /**
     * @var Measure
     *
     * @ORM\ManyToOne(targetEntity="PhenxBundle\Entity\Measure", inversedBy="protocols", fetch="EAGER")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="phenx_id", nullable=false, onDelete="CASCADE")
     */
    private $measure;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $subTitle;



    /**
     * Set subTitle
     *
     * @param string $subTitle
     *
     * @return PhenxProtocol
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * Get subTitle
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    public function getMetaFields()
    {
        return ['Content', 'Instructions', 'Source', 'Personnel', 'Equipment', 'LiteratureReferences', 'Rationale', 'Description', 'ProtocolText'];
    }



    /**
     * Set measure.
     *
     * @param \PhenxBundle\Entity\Measure $measure
     *
     * @return PhenxProtocol
     */
    public function setMeasure(\PhenxBundle\Entity\Measure $measure)
    {
        $this->measure = $measure;

        return $this;
    }

    public function getId() {
        return $this->getPhenxId();
    }

    public function getDisplay() {
        return $this->getTitle();
    }

    public function menuRoute() {
        return 'phenx_protocol_show';
    }

    /**
     * Get measure.
     *
     * @return \PhenxBundle\Entity\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    public function getDomain()
    {
        return $this->getMeasure()->getDomain();
    }

    /**
     * @deprecated
     * */
    public function getPhenxUrl()
    {
        return $this->getSourceUrl();
    }

    /**
     * Get title
     *
     * @return string
     */
    public function createTitle()
    {
        return sprintf("%s %s", $this->getMeasure() ? $this->getMeasure()->getTitle(): 'no measure', $this->getTitle());
    }

    public function __toString()
    {
        return $this->getTitle();
    }

    /**
     * Get variables
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Get variable count
     *
     * @return int
     */
    public function getVariableCount(): int
    {
        return $this->getVariables()->count();
    }



}
