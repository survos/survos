<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Survos\PixieBundle\Repository\EventRoleDefinitionRepository;

#[ORM\Entity(repositoryClass: EventRoleDefinitionRepository::class)]
#[ORM\Table(name: 'pixie_event_role_definition')]
#[ORM\UniqueConstraint(name: 'uniq_event_role', columns: ['event_definition_id','role_code'])]
class EventRoleDefinition
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column] private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: EventDefinition::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private EventDefinition $eventDefinition;

    #[ORM\Column(length: 80)]
    private string $roleCode;    // e.g. 'creator'

    #[ORM\Column(length: 64)]
    private string $targetCore;  // e.g. 'per'

    #[ORM\Column(length: 8, options: ['default' => 'MANY'])]
    private string $cardinality = 'MANY'; // ONE|MANY

    public function __construct(EventDefinition $def, string $roleCode, string $targetCore)
    {
        $this->eventDefinition = $def;
        $this->roleCode = $roleCode;
        $this->targetCore = $targetCore;
    }
}
