<?php

namespace App\Entity;

use App\Repository\OfficialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OfficialRepository::class)]
class Official
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $birthday = null;

    #[ORM\Column(length: 48)]
    private ?string $officialName = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOfficialName(): ?string
    {
        return $this->officialName;
    }

    public function setOfficialName(string $officialName): static
    {
        $this->officialName = $officialName;

        return $this;
    }

    public function getBirthday(): ?\DateTimeImmutable
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeImmutable $birthday): static
    {
        $this->birthday = $birthday;

        return $this;
    }
}
