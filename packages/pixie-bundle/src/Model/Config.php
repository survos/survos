<?php

namespace Survos\PixieBundle\Model;

use Symfony\Component\Yaml\Yaml;

class Config
{
    public function __construct(
        private readonly string $filename,
        private array           $data=[],
        public ?string $dataDir = null, // set in service, kinda hacky
        public ?string $pixieFilename = null // set in service, kinda hacky
    )
    {
        $this->data = Yaml::parseFile($this->filename);
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function getIgnored(): array
    {
        $ignore =  $this->data["source"]["ignore"]??[];
        return is_string($ignore) ? [$ignore] : $ignore;
    }
    public function getInclude(): array
    {
        $include = $this->data["source"]["include"]??[];
        return is_string($include) ? [$include] : $include;
    }

    public function getFileToTableMap(): array
    {
        return $this->data["files"]??[];
    }

    public function getSourceFilesDir(): ?string
    {
        return $this->data['source']['dir']??null;
    }

    public function getTables(): array
    {
        return $this->data['tables']??[];
    }

    public function getTableRules($tableName): array
    {
        return $this->data['tables'][$tableName]['rules']??[];
    }

    public function getVersion(): ?string
    {
        return $this->data['version']??null;

    }


}