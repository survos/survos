<?php

namespace Survos\PixieBundle\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Survos\PixieBundle\Repository\OriginalImageRepository;
use Survos\SaisBundle\Service\SaisClientService;
use Symfony\Component\Serializer\Attribute\Groups;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity(repositoryClass: OriginalImageRepository::class)]
class OriginalImage
{
    use TimestampableEntity;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $thumbUrl = null;

//    #[ORM\Column]
//    #[Gedmo\Timestampable(on:"create")]
//    private ?\DateTimeImmutable $createdAt;

//    public function getCreatedAt(): ?\DateTimeImmutable
//    {
//        return $this->createdAt;
//    }

    #[ORM\ManyToOne(inversedBy: 'images')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Row $row = null;

    /**
     * @param string|null $url
     * @param string|null $code
     */
    public function __construct(
        #[ORM\Column(type: Types::TEXT)]
        #[Groups(['row.read'])]
        private ?string $url = null,

        #[ORM\Column(length: 32)]
        #[ORM\Id]
        #[Groups(['row.read'])]
        private ?string $code = null,

        #[ORM\Column(length: 32)]
        private ?string $root = null,
    )
    {
        $isValid = filter_var($this->url, FILTER_VALIDATE_URL);
        $calc = SaisClientService::calculateCode($this->url, $this->root);
        if (empty($this->code)) {
            $this->code = $calc;
        } else {
//            $this->code = $code;
//            assert()
        }
//        $this->createdAt = new \DateTimeImmutable();
        $this->createdAt = new \DateTime();
    }

    public
    function getId(): ?int
    {
        return $this->id;
    }

    public
    function getUrl(): ?string
    {
        return $this->url;
    }

    public
    function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public
    function getCode(): ?string
    {
        return $this->code;
    }

    public
    function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    #[Groups(['row.read'])]
    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    public
    function setThumbUrl(?string $thumbUrl): static
    {
        $this->thumbUrl = $thumbUrl;

        return $this;
    }

    public function getRow(): ?Row
    {
        return $this->row;
    }

    public function setRow(?Row $row): static
    {
        $this->row = $row;

        return $this;
    }
}
