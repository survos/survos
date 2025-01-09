<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


use Survos\Providence\XmlModel\XmlAttributesTrait;
use Survos\Providence\XmlModel\XmlProfile;

#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile extends SurvosBaseEntity
{
    use XmlAttributesTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $filename;

    #[ORM\Column(type: 'string', length: 255, unique: true)]
    private $name;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\Column(type: Types::JSON, nullable: true, options: ['jsonb' => true])]
    private $rawData = null;

    #[ORM\Column(type: 'text')]
    private $xml;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $mdeCount;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $uiCount;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $listCount;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $infoUrl;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $displayCount;

    public ?XmlProfile $xmlProfile = null;

    public function getXmlProfile(): XmlProfile
    {
        return $this->xmlProfile;
    }

    public function setXmlProfile(?XmlProfile $xmlProfile): self
    {
        $this->xmlProfile = $xmlProfile;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRawData(): ?array
    {
        return $this->rawData;
    }

    public function setRawData(?array $rawData): self
    {
        $this->rawData = $rawData;

        return $this;
    }

    public function getXml(): ?string
    {
        return $this->xml;
    }

    public function setXml(string $xml): self
    {
        $this->xml = $xml;

        return $this;
    }

    public function getUniqueIdentifiers(): array
    {
        return [
            'profileId' => $this->getFilename(),
        ];
    }

    public function getMdeCount(): ?int
    {
        return $this->mdeCount;
    }

    public function setMdeCount(?int $mdeCount): self
    {
        $this->mdeCount = $mdeCount;

        return $this;
    }

    public function getUiCount(): ?int
    {
        return $this->uiCount;
    }

    public function setUiCount(?int $uiCount): self
    {
        $this->uiCount = $uiCount;

        return $this;
    }

    public function getListCount(): ?int
    {
        return $this->listCount;
    }

    public function setListCount(?int $listCount): self
    {
        $this->listCount = $listCount;

        return $this;
    }

    public function getInfoUrl(): ?string
    {
        return $this->infoUrl;
    }

    public function setInfoUrl(?string $infoUrl): self
    {
        $this->infoUrl = $infoUrl;

        return $this;
    }

    public function getDisplayCount(): ?int
    {
        return $this->displayCount;
    }

    public function setDisplayCount(?int $displayCount): self
    {
        $this->displayCount = $displayCount;

        return $this;
    }
}
