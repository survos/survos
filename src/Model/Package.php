<?php

declare(strict_types=1);

namespace App\Model;


use HaydenPierce\ClassFinder\ClassFinder;
//use Symplify\ComposerJsonManipulator\ValueObject\ComposerJson;

class Package implements \Stringable
{
    public function __construct(
        public string $packageCode,
        public string $packageDir,
        public string $namespace,
//        public ComposerJson $composerJson
    )
    {
    }

    /**
     * @return string
     */
    public function getPackageCode(): string
    {
        return $this->packageCode;
    }

    /**
     * @return string
     */
    public function getPackageDir(): string
    {
        return $this->packageDir;
    }

    public function getClasses(bool $recursive = false): array
    {

        ClassFinder::disablePSR4Support(); // otherwise it tries to load it twice and fails
        return ClassFinder::getClassesInNamespace($this->getNamespace(), $recursive ? ClassFinder::RECURSIVE_MODE: ClassFinder::STANDARD_MODE);
    }

    public function getShortName()
    {
        return $this->getComposerJson()->getShortName();
    }


    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @return ComposerJson
     */
    public function getComposerJson(): ComposerJson
    {
        return $this->composerJson;
    }

    public function __toString()
    {
        return $this->getPackageCode();
    }


}

