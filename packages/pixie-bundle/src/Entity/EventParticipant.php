<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Survos\PixieBundle\Repository\EventParticipantRepository;

#[ORM\Entity(repositoryClass: EventParticipantRepository::class)]
#[ORM\Table(name: 'pixie_event_participant')]
#[ORM\UniqueConstraint(name: 'uniq_event_role_actor', columns: ['event_id','role_code','actor_row_id'])]
#[ORM\Index(name: 'idx_actor_role', columns: ['actor_row_id','role_code'])]
class EventParticipant
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column] private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Event::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private Event $event;

    #[ORM\Column(length: 80)]
    private string $roleCode;

    #[ORM\ManyToOne(targetEntity: Row::class)]
    #[ORM\JoinColumn(name: 'actor_row_id', nullable: false, onDelete: 'CASCADE')]
    private Row $actor;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $certain = true;

    public function __construct(Event $event, string $roleCode, Row $actor, bool $certain = true)
    {
        $this->event = $event;
        $this->roleCode = $roleCode;
        $this->actor = $actor;
        $this->certain = $certain;
    }
}
