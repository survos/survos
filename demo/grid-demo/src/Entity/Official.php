<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\Repository\OfficialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Survos\ApiGrid\Api\Filter\MultiFieldSearchFilter;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
    operations: [
        new Get(),
        new GetCollection()
    ],
    openapiContext: ["description" => 'Elected congressional officials', "example" => "Clinton, Hillary"],
    normalizationContext: ['groups' => ['official.read', 'rp']])]

#[ApiFilter(OrderFilter::class,
    properties: ['firstName', 'lastName','gender','birthDay'])]
#[ApiFilter(SearchFilter::class,
    properties: [
        'firstName' => 'exact',
        'lastName' => 'partial'
    ])]
#[ApiFilter(RangeFilter::class, properties: ['birthday'])]
#[ApiFilter(MultiFieldSearchFilter::class,
    properties: ["lastName", 'firstName'], arguments: ["searchParameterName" => "search"])]

#[ORM\Entity(repositoryClass: OfficialRepository::class)]
class Official
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['official.read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 16, nullable: true)]
    #[Groups(['official.read'])]
    private $firstName;

    #[ORM\Column(type: 'string', length: 32)]
    #[Groups(['official.read'])]
    private $lastName;

    #[ORM\Column(type: 'string', length: 48)]
    #[Groups(['official.read'])]
    private $officialName;

    #[ORM\Column(type: 'date_immutable', nullable: true)]
    #[Groups(['official.read'])]
    private $birthday;

    #[ORM\Column(type: 'string', length: 1, nullable: true)]
    #[Groups(['official.read'])]
    #[ApiFilter(SearchFilter::class, strategy: 'exact')]
    private $gender;

    #[ORM\OneToMany(mappedBy: 'offical', targetEntity: Term::class, orphanRemoval: true)]
    private $terms;

    public function __construct()
    {
        $this->terms = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Term>
     */
    public function getTerms(): Collection
    {
        return $this->terms;
    }

    public function addTerm(Term $term): self
    {
        if (!$this->terms->contains($term)) {
            $this->terms[] = $term;
            $term->setOffical($this);
        }
        return $this;
    }

    public function removeTerm(Term $term): self
    {
        if ($this->terms->removeElement($term)) {
            // set the owning side to null (unless already changed)
            if ($term->getOffical() === $this) {
                $term->setOffical(null);
            }
        }
        return $this;
    }
}
