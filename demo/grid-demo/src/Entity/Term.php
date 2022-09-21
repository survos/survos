<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\TermRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity(repositoryClass: TermRepository::class)]
class Term
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Official::class, inversedBy: 'terms')]
    #[ORM\JoinColumn(nullable: false)]
    private $offical;

    #[ORM\Column(type: 'string', length: 16, nullable: true)]
    private $type;

    #[ORM\Column(type: 'string', length: 2, nullable: true)]
    private $stateAbbreviation;

    #[ORM\Column(type: 'string', length: 16, nullable: true)]
    private $party;

    #[ORM\Column(type: 'string', length: 8, nullable: true)]
    private $district;

    #[ORM\Column(type: 'date_immutable', nullable: true)]
    private $startDate;

    #[ORM\Column(type: 'date_immutable', nullable: true)]
    private $endDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOffical(): ?Official
    {
        return $this->offical;
    }

    public function setOffical(?Official $offical): self
    {
        $this->offical = $offical;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getStateAbbreviation(): ?string
    {
        return $this->stateAbbreviation;
    }

    public function setStateAbbreviation(?string $stateAbbreviation): self
    {
        $this->stateAbbreviation = $stateAbbreviation;
        return $this;
    }

    public function getParty(): ?string
    {
        return $this->party;
    }

    public function setParty(?string $party): self
    {
        $this->party = $party;
        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeImmutable $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeImmutable $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }
}
