<?php
// src/Entity/StrTranslation.php
namespace Survos\PixieBundle\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'pixie_str_translation')]
#[ORM\UniqueConstraint(name: 'uniq_str_locale', columns: ['str_id','locale'])]
#[ORM\Index(name: 'idx_locale', columns: ['locale'])]
class StrTranslation
{
    #[ORM\Id, ORM\Column(type: Types::STRING, options: ['length' => 35])]
    private string $code;

    #[ORM\ManyToOne(targetEntity: Str::class)]
    #[ORM\JoinColumn(name: 'str_id', nullable: false, onDelete: 'CASCADE')]
    private Str $str;

    #[ORM\Column(length: 12)]
    private string $locale; // e.g. 'en', 'es-MX'

    #[ORM\Column(type: 'text')]
    private string $value;

    // Optional quality/status fields
    #[ORM\Column(length: 32, options: ['default' => 'verified'])]
    private string $status = 'verified';

    #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private \DateTimeImmutable $updatedAt;

    public function __construct() { $this->updatedAt = new \DateTimeImmutable(); }

    // Property hook-ish convenience (PHP 8.4) – keep it simple:
    public function setValue(string $value): self {
        $this->value = $value;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    // getters/setters omitted for brevity
}
