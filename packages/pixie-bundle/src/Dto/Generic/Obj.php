<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Dto\Generic;

use Survos\PixieBundle\Dto\BaseObj;
use Survos\PixieBundle\Dto\Attributes\Map;
use Survos\PixieBundle\Dto\Attributes\Mapper;

/**
 * Generic mapper for common museum/object fields.
 */
#[Mapper(priority: 0)]
class Obj extends BaseObj
{
    #[Map(regex: '/\b(label|name|nombre|title|titulo|título)\b/i', priority: 100, translatable: true)]
    public ?string $label = null;

    #[Map(regex: '/\b(description|descripcion|descripción|desc|tombstone)\b/i', priority: 90, translatable: true)]
    public ?string $description = null;

    #[Map(regex: '/\b(image|img|imagen|thumbnail|thumb)\b/i', priority: 50)]
    public ?string $imageUrl = null;

    #[Map(regex: '/\b(wikidata|wd|wikidata_id|wdid)\b/i', priority: 40)]
    public ?string $wikidata = null;

    #[Map(regex: '/\b(year|año|ano|date|fecha)\b/i', priority: 30, except: ['immigration'])]
    public ?int $year = null;

    public function afterMap(array &$norm, array $src): void
    {
        if (isset($norm['year']) && is_string($norm['year'])) {
            if (preg_match('/\b(\d{4})\b/', $norm['year'], $m)) {
                $norm['year'] = (int)$m[1];
                $this->year   = (int)$m[1];
            }
        }
    }
}
