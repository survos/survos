<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Survos\PixieBundle\Repository\EventRepository;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'pixie_event')]
#[ORM\Index(name: 'idx_event_subject', columns: ['subject_row_id','event_definition_id'])]
#[ORM\Index(name: 'idx_event_place', columns: ['place_row_id'])]
class Event
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column] private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Row::class)]
    #[ORM\JoinColumn(name: 'subject_row_id', nullable: false, onDelete: 'CASCADE')]
    private Row $subject;

    #[ORM\ManyToOne(targetEntity: EventDefinition::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private EventDefinition $definition;

    #[ORM\ManyToOne(targetEntity: Row::class)]
    #[ORM\JoinColumn(name: 'place_row_id', nullable: true, onDelete: 'SET NULL')]
    private ?Row $place = null;

    #[ORM\Column(type: Types::STRING, nullable: true)] private ?string $timeLabel = null;
    #[ORM\Column(type: Types::STRING, nullable: true)] private ?string $timeStart = null;
    #[ORM\Column(type: Types::STRING, nullable: true)] private ?string $timeEnd = null;

    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => true])]  private bool $timeCertain = true;
    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => true])] private bool $placeCertain = true;

    #[ORM\Column(type: Types::STRING, nullable: true)] private ?string $note = null;

    #[ORM\Column(type: Types::STRING, length: 191, nullable: true, unique: false)]
    private ?string $identityHash = null;

    public function __construct(Row $subject, EventDefinition $def)
    {
        $this->subject = $subject;
        $this->definition = $def;
    }

    public function setTime(?string $label, ?string $start, ?string $end, bool $certain = true): void
    {
        $this->timeLabel = $label;
        $this->timeStart = $start;
        $this->timeEnd   = $end;
        $this->timeCertain = $certain;
    }

    public function setPlace(?Row $place, bool $certain = true): void
    {
        $this->place = $place;
        $this->placeCertain = $certain;
    }

    public function setNote(?string $note): void { $this->note = $note; }
    public function setIdentityHash(?string $h): void { $this->identityHash = $h; }
}
