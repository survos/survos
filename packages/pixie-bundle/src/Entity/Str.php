<?php

namespace Survos\PixieBundle\Entity;

use App\Repository\Pixie\TranslateTextRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TranslateTextRepository::class)]
class Str
{
    #[ORM\Column(type: Types::JSON, nullable: true, options: ['jsonb' => true])]
    private array $t = [];

    #[ORM\Column(nullable: true, options: ['jsonb' => true])]
    private ?array $extra = null;


    /**
     * @param string|null $code
     * @param string|null $locale
     * @param string|null $original
     */
    public function __construct(
        #[ORM\Column(type: Types::TEXT)]
        private ?string $original = null,

        #[ORM\Column(length: 2)]
        #[Assert\Length(min: 2, max: 2)]
        #[Assert\Locale]
        private ?string $locale = null,

        #[ORM\Column(length: 32)]
        #[ORM\Id]
        private ?string $code = null,
    )
    {
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    public function getT(): ?object
    {
        return $this->t;
    }

    public function setT(?object $t): static
    {
        $this->t = $t;

        return $this;
    }

    public function getOriginal(): ?string
    {
        return $this->original;
    }

    public function setOriginal(string $original): static
    {
        $this->original = $original;

        return $this;
    }

    public function getExtra(): ?array
    {
        return $this->extra;
    }

    public function setExtra(?array $extra): static
    {
        $this->extra = $extra;

        return $this;
    }
}
