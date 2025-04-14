<?php

namespace Survos\WorkflowBundle\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class Place
{
    public function __construct(
        public bool $initial=false,
        public array $metadata=[],
        public ?string $info=null,
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
