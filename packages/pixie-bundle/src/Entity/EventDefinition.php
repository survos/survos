<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Survos\PixieBundle\Repository\EventDefinitionRepository;

#[ORM\Entity(repositoryClass: EventDefinitionRepository::class)]
#[ORM\Table(name: 'pixie_event_definition')]
#[ORM\UniqueConstraint(name: 'uniq_owner_code', columns: ['owner_code','code'])]
class EventDefinition
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column] private ?int $id = null;

    #[ORM\Column(length: 64)]
    private string $ownerCode;

    #[ORM\Column(length: 80)]
    private string $code;

    #[ORM\Column(length: 160)]
    private string $label;

    #[ORM\Column(length: 64)]
    private string $subjectCore; // e.g. 'obj'

    #[ORM\Column(length: 64, nullable: true)]
    private ?string $placeCore = 'loc';

    #[ORM\Column(length: 32, options: ['default' => 'interval'])]
    private string $timeModel = 'interval'; // 'instant'|'interval'

    public function __construct(string $ownerCode, string $code, string $label, string $subjectCore)
    {
        $this->ownerCode = $ownerCode;
        $this->code = $code;
        $this->label = $label;
        $this->subjectCore = $subjectCore;
    }

    public function getId(): ?int { return $this->id; }
    public function getOwnerCode(): string { return $this->ownerCode; }
    public function getCode(): string { return $this->code; }
    public function getLabel(): string { return $this->label; }
    public function getSubjectCore(): string { return $this->subjectCore; }
}
