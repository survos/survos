<?php

declare (strict_types=1);
namespace Rector\ValueObject;

use Rector\ChangesReporting\Output\ConsoleOutputFormatter;
use RectorPrefix202411\Webmozart\Assert\Assert;
final class Configuration
{
    /**
     * @readonly
     */
    private bool $isDryRun = \false;
    /**
     * @readonly
     */
    private bool $showProgressBar = \true;
    /**
     * @readonly
     */
    private bool $shouldClearCache = \false;
    /**
     * @readonly
     */
    private string $outputFormat = ConsoleOutputFormatter::NAME;
    /**
     * @var string[]
     * @readonly
     */
    private array $fileExtensions = ['php'];
    /**
     * @var string[]
     * @readonly
     */
    private array $paths = [];
    /**
     * @readonly
     */
    private bool $showDiffs = \true;
    /**
     * @readonly
     * @var string|null
     */
    private $parallelPort = null;
    /**
     * @readonly
     * @var string|null
     */
    private $parallelIdentifier = null;
    /**
     * @readonly
     */
    private bool $isParallel = \false;
    /**
     * @readonly
     * @var string|null
     */
    private $memoryLimit = null;
    /**
     * @readonly
     */
    private bool $isDebug = \false;
    /**
     * @readonly
     */
    private bool $reportingWithRealPath = \false;
    /**
     * @param string[] $fileExtensions
     * @param string[] $paths
     */
    public function __construct(bool $isDryRun = \false, bool $showProgressBar = \true, bool $shouldClearCache = \false, string $outputFormat = ConsoleOutputFormatter::NAME, array $fileExtensions = ['php'], array $paths = [], bool $showDiffs = \true, ?string $parallelPort = null, ?string $parallelIdentifier = null, bool $isParallel = \false, ?string $memoryLimit = null, bool $isDebug = \false, bool $reportingWithRealPath = \false)
    {
        $this->isDryRun = $isDryRun;
        $this->showProgressBar = $showProgressBar;
        $this->shouldClearCache = $shouldClearCache;
        $this->outputFormat = $outputFormat;
        $this->fileExtensions = $fileExtensions;
        $this->paths = $paths;
        $this->showDiffs = $showDiffs;
        $this->parallelPort = $parallelPort;
        $this->parallelIdentifier = $parallelIdentifier;
        $this->isParallel = $isParallel;
        $this->memoryLimit = $memoryLimit;
        $this->isDebug = $isDebug;
        $this->reportingWithRealPath = $reportingWithRealPath;
    }
    public function isDryRun() : bool
    {
        return $this->isDryRun;
    }
    public function shouldShowProgressBar() : bool
    {
        return $this->showProgressBar;
    }
    public function shouldClearCache() : bool
    {
        return $this->shouldClearCache;
    }
    /**
     * @return string[]
     */
    public function getFileExtensions() : array
    {
        Assert::notEmpty($this->fileExtensions);
        return $this->fileExtensions;
    }
    /**
     * @return string[]
     */
    public function getPaths() : array
    {
        return $this->paths;
    }
    public function getOutputFormat() : string
    {
        return $this->outputFormat;
    }
    public function shouldShowDiffs() : bool
    {
        return $this->showDiffs;
    }
    public function getParallelPort() : ?string
    {
        return $this->parallelPort;
    }
    public function getParallelIdentifier() : ?string
    {
        return $this->parallelIdentifier;
    }
    public function isParallel() : bool
    {
        return $this->isParallel;
    }
    public function getMemoryLimit() : ?string
    {
        return $this->memoryLimit;
    }
    public function isDebug() : bool
    {
        return $this->isDebug;
    }
    public function isReportingWithRealPath() : bool
    {
        return $this->reportingWithRealPath;
    }
}