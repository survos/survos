<?php

declare(strict_types=1);

namespace Survos\ImportBridge\Model;


use App\Entity\CategoryType;
use App\Entity\Instance;
use App\Entity\RelationType;

class InstanceData
{

    public function __construct(
        private array $data=['db' => [], 'cat' => [], 'rel' => []])
    {

    }

    public function setDbField($dbField, $value) {
        $this->data['db'][$dbField] = $value;
    }

    /**
     * @return array
     */
    public function getDb(string $dbField): ?string
    {
        return $this->data['db'][$dbField] ?? null;
    }
    public function getCat(string $catField): ?string
    {
        return $this->data['cat'][$catField] ?? null;
    }
    public function getRel(string $relField): ?array
    {
        return $this->data['rel'][$relField] ?? null;
    }

    public function getDbArray(): ?array
    {
        return $this->data['db'] ?? null;
    }

    public function setCategory(CategoryType $categoryType, $value)
    {
        $this->data['cat'][$categoryType->getCode()] = $value;
    }

    public function addRelation(RelationType $relationType, $value)
    {
        $this->data['rel'][$relationType->getRCode()][] = $value;
    }

    public function addReference(array $reference) // eventually we'll need more than this.
    {
        $this->data['references'] = $reference;
    }

    public function addAttribute(string $var, mixed $value)
    {
        $this->data['a'][$var][] = $value;
    }

    public function getCode(): ?string
    {
        return $this->getDb(Instance::DB_CODE_FIELD);
    }
    public function setCode(string $code): self
    {
        $this->setDbField(Instance::DB_CODE_FIELD, $code);
        return $this;
    }

    public function getNormalizedData()
    {
        return $this->data;
    }



}

