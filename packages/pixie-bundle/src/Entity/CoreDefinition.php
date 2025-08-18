<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Survos\PixieBundle\Repository\CoreDefinitionRepository;

#[ORM\Entity(repositoryClass: CoreDefinitionRepository::class)]
#[ORM\Table(name: 'pixie_core_definition')]
class CoreDefinition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column] private ?int $id = null;

    #[ORM\Column(length: 64)] private string $ownerCode;
    #[ORM\Column(length: 64)] private string $core;
    #[ORM\Column(length: 64)] private string $pk;
    #[ORM\Column(length: 16)] private string $schemaVersion = 'v1';

    public function __construct(string $ownerCode, string $core, string $pk, string $schemaVersion = 'v1')
    {
        $this->ownerCode = $ownerCode;
        $this->core = $core;
        $this->pk = $pk;
        $this->schemaVersion = $schemaVersion;
    }
    public function getOwnerCode(): string { return $this->ownerCode; }
    public function getCore(): string { return $this->core; }
    public function getPk(): string { return $this->pk; }
    public function getSchemaVersion(): string { return $this->schemaVersion; }
    public function setSchemaVersion(string $v): void { $this->schemaVersion = $v; }
}
