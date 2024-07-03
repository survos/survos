<?php

namespace Survos\PixieBundle\Model;

class Table
{
    public function __construct(
        public ?string $name=null,
        // keyed by regex
        public array $rules=[],
        /**
         * @var array<Column>
         */
        public array $columns=[],
        /**
         * @var array<string>
         */
        public array $properties=[],
        public ?string $pkName=null,
    )
    {

    }

    public function getPkName(): ?string
    {
        return $this->pkName;
    }

//    public function setPkName(?string $pkName): void
//    {
//        $this->pkName = $pkName;
//    }

}
