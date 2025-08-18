<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Dto\Attributes;

use Attribute;

/**
 * Map a DTO property from a source payload.
 * - source: exact key in source
 * - regex:  PCRE to match a key (first match wins)
 * - if:     'isset' => only set if found
 * - delim:  split to array when property type is array (e.g. '|', ',')
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Map
{
    public function __construct(
        public ?string $source = null,
        public ?string $regex  = null,
        public ?string $if     = null,
        public ?string $delim  = null,
    ) {}
}
