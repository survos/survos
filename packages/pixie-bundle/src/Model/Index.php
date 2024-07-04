<?php

namespace Survos\PixieBundle\Model;

class Index
{
    public function __construct(
        public string $propertyName,
        public string $type = 'TEXT', // property type, this was from the dexie-link config and isn't needed by the index
        public bool $isPrimary = false,
        public bool $isUnique = false
    )
    {
        $this->type = strtoupper($this->type);

    }

}
