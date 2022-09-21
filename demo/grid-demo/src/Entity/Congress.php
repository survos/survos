<?php

namespace App\Entity;

use ApiPlatform\Core\Util\ResponseTrait;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\CongressRepository;
use Doctrine\ORM\Mapping as ORM;
use Survos\CoreBundle\Entity\RouteParametersInterface;
use Survos\CoreBundle\Entity\RouteParametersTrait;

#[ORM\Entity(repositoryClass: CongressRepository::class)]
class Congress implements RouteParametersInterface
{
    use RouteParametersTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $firstName;

    #[ORM\Column(type: 'string', length: 32)]
    private $lastName;

    #[ORM\Column(type: 'string', length: 48)]
    private $officialName;

    #[ORM\Column(type: 'json', nullable: true)]
    private $data = [];

    #[ORM\Column(type: 'date_immutable', nullable: true)]
    private $birthday;

    #[ORM\Column(type: 'string', length: 1, nullable: true)]
    private $gender;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getOfficialName(): ?string
    {
        return $this->officialName;
    }

    public function setOfficialName(string $officialName): self
    {
        $this->officialName = $officialName;
        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getBirthday(): ?\DateTimeImmutable
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeImmutable $birthday): self
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    public function getUniqueIdentifiers(): array
    {
        return ['congressId' => $this->getId()];
    }
}
