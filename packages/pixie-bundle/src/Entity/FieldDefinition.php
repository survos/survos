<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Survos\PixieBundle\Repository\FieldDefinitionRepository;

#[ORM\Entity(repositoryClass: FieldDefinitionRepository::class)]
#[ORM\Table(name: 'pixie_field_definition')]
#[ORM\UniqueConstraint(name: 'uniq_owner_core_header', columns: ['owner_code','core','incoming_header'])]
class FieldDefinition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column] private ?int $id = null;

    #[ORM\Column(length: 64)]  private string $ownerCode;
    #[ORM\Column(length: 64)]  private string $core;
    #[ORM\Column(length: 128)] private string $incomingHeader;

    #[ORM\Column(length: 128)] private string $code;
    #[ORM\Column(length: 32)]  private string $kind;
    #[ORM\Column(length: 64, nullable: true)] private ?string $targetCore = null;
    #[ORM\Column(length: 8,  nullable: true)] private ?string $delim = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])] private bool $translatable = false;
    #[ORM\Column(type: 'integer', options: ['default' => 0])]     private int  $position     = 0;

    public function __construct(
        string $ownerCode, string $core, string $incomingHeader,
        string $code, string $kind, ?string $targetCore = null, ?string $delim = null,
        bool $translatable = false, int $position = 0
    ) {
        $this->ownerCode = $ownerCode;
        $this->core = $core;
        $this->incomingHeader = $incomingHeader;
        $this->code = $code;
        $this->kind = $kind;
        $this->targetCore = $targetCore;
        $this->delim = $delim;
        $this->translatable = $translatable;
        $this->position = $position;
    }

    public function getIncomingHeader(): string { return $this->incomingHeader; }
    public function getCode(): string { return $this->code; }
    public function getKind(): string { return $this->kind; }
    public function getTargetCore(): ?string { return $this->targetCore; }
    public function getDelim(): ?string { return $this->delim; }
    public function isTranslatable(): bool { return $this->translatable; }
}
