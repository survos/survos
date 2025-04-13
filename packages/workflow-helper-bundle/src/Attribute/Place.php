<?php

namespace Survos\WorkflowBundle\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class Place
{
    public function __construct(
        public bool $initial=false,
        public ?string $info=null,
        public array $metadata=[],
  ) {
        if ($this->info) {
            $this->metadata['description'] = $this->info;
        }

    }

    public function getIsInitial(): bool
    {
        return $this->initial;
    }
}
