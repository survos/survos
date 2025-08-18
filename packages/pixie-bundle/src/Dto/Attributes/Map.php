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
 * - priority: mapping weight for auto DTO selection (default 10)
 * - when:   restrict mapping to these pixie codes (array of strings)
 * - except: exclude mapping for these pixie codes (array of strings)
 * - translatable: if true, this field is a translatable text
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Map
{
    /**
     * @param ?string $source
     * @param ?string $regex
     * @param ?string $if
     * @param ?string $delim
     * @param int $priority
     * @param array<string> $when
     * @param array<string> $except
     * @param bool $translatable
     */
    public function __construct(
        public ?string $source = null,
        public ?string $regex  = null,
        public ?string $if     = null,
        public ?string $delim  = null,
        public int $priority   = 10,
        public array $when     = [],
        public array $except   = [],
        public bool $translatable = false,
    ) {}
}
