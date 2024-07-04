<?php

namespace Survos\PixieBundle\Model;

class Table
{
    public function __construct(
        private ?string $name=null,
        // keyed by regex
        private array $rules=[],
        /**
         * @var array<Column>
         */
        private array $columns=[],
        /**
         * @var array<string>
         */
        private array $properties=[],
        private ?string $pkName=null,
    )
    {

    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Table
    {
        $this->name = $name;
        return $this;
    }

    public function getRules(): array
    {
        return $this->rules;
    }

    public function setRules(array $rules): Table
    {
        $this->rules = $rules;
        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function setColumns(array $columns): Table
    {
        $this->columns = $columns;
        return $this;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function setProperties(array $properties): Table
    {
        $this->properties = $properties;
        return $this;
    }

    public function getPkName(): ?string
    {
        return $this->pkName;
    }

    public function setPkName(?string $pkName): Table
    {
        $this->pkName = $pkName;
        return $this;
    }


}
