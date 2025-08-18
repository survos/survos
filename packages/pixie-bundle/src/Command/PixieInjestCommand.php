<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\Core;
use Survos\PixieBundle\Entity\Owner;
use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Import\Ingest\JsonIngestor;
use Survos\PixieBundle\Import\Ingest\CsvIngestor;
use Survos\PixieBundle\Service\DtoMapper;
use Survos\PixieBundle\Service\DtoRegistry;
use Survos\PixieBundle\Service\PixieService;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('pixie:injest', 'Import JSON/NDJSON/CSV into Rows (file or directory).')]
final class PixieInjestCommand
{
    public function __construct(
        private readonly PixieService $pixie,
        private readonly JsonIngestor $json,
        private readonly ?CsvIngestor $csv = null,
        private readonly ?DtoMapper $dtoMapper = null,
        private readonly ?DtoRegistry $dtoRegistry = null,
    ) {}

    public function __invoke(
        SymfonyStyle $io,
        #[Argument(description: 'Pixie code (e.g., larco, immigration)')]
        string $pixieCode,
        #[Option(name: 'file', description: 'Path to a JSON/JSONL/CSV file')]
        ?string $file = null,
        #[Option(name: 'dir', description: 'Directory with *.json, *.jsonl, *.csv')]
        ?string $dir = null,
        #[Option(name: 'core', description: 'Core code to import into')]
        string $core = 'obj',
        #[Option(name: 'pk', description: 'Primary key in the source record')]
        string $pk = 'id',
        #[Option(name: 'label-field', description: 'Fallback label field in the raw source')]
        ?string $labelField = null,
        #[Option(name: 'dto', description: 'DTO FQCN to normalize rows (first-match wins if --dto-auto is off)')]
        ?string $dto = null,
        #[Option(name: 'dto-auto', description: 'Auto-select DTO from the registry (uses Mapper priority/when/except)')]
        bool $dtoAuto = false,
        #[Option(name: 'batch', description: 'Flush batch size')] int $batch = 1000,
        #[Option(name: 'limit', description: 'Max records per file (0 = all)')] int $limit = 0,
        // Back-compat:
        #[Option(name: 'dto-class', description: 'Alias of --dto (back-compat)')]
        ?string $dtoClass = null,
    ): int {
        $dto = $dto ?? $dtoClass;

        $ctx   = $this->pixie->getReference($pixieCode); // switch DB + ensure schema
        $owner = $ctx->ownerRef;
        $em    = $ctx->em;

        // Sources
        $sources = [];
        if ($file) {
            $sources = [$file];
        } else {
            $dir ??= getcwd() . "/data/$pixieCode/json";
            if (!is_dir($dir)) {
                $io->error("Directory not found: $dir (pass --file or --dir)");
                return 1;
            }
            $sources = array_merge(
                glob(rtrim($dir, '/') . '/*.json') ?: [],
                glob(rtrim($dir, '/') . '/*.jsonl') ?: [],
                glob(rtrim($dir, '/') . '/*.csv') ?: []
            );
            if (!$sources) {
                $io->warning("No *.json/*.jsonl/*.csv in $dir");
                return 0;
            }
        }

        $io->title(sprintf('Injest %s core=%s pk=%s dto=%s auto=%s',
            $pixieCode, $core, $pk, $dto ?? 'none', $dtoAuto ? 'yes' : 'no'
        ));
        $coreEntity = $this->pixie->getCore($core, $owner);
        $coreId = $coreEntity->id;
        $ownerId = $ctx->ownerRef->id;

        $seen = []; $total = 0;

        foreach ($sources as $path) {
            $i = 0;
            $ext = strtolower(pathinfo($path, \PATHINFO_EXTENSION));
            $io->section(basename($path));

            $iter = match ($ext) {
                'json','jsonl' => $this->json->iterate($path),
                'csv' => $this->requireCsv()->iterate($path, null),
                default => null
            };
            if (!$iter) { $io->warning("Skipping unsupported file: $path"); continue; }

            foreach ($iter as $record) {
                if (!\is_array($record)) continue;

                $idWithinCore = (string)($record[$pk] ?? '');
                if ($idWithinCore === '' || isset($seen[$idWithinCore])) continue;
                $seen[$idWithinCore] = true;

                // choose DTO: explicit > auto registry > none
                $chosen = $dto;
                if (!$chosen && $dtoAuto && $this->dtoRegistry) {
                    $sel = $this->dtoRegistry->select($pixieCode, $core, $record);
                    $chosen = $sel['class'] ?? null;
                }

                // normalize
                $normalized = $record;
                if ($chosen && $this->dtoMapper) {
                    try {
                        $dtoObj  = $this->dtoMapper->mapRecord($record, $chosen, ['pixie'=>$pixieCode,'core'=>$core]);
                        $normalized = $this->dtoMapper->toArray($dtoObj);
                    } catch (\Throwable $e) {
                        $io->warning("DTO mapping failed for id=$idWithinCore: ".$e->getMessage());
                    }
                }

                // Upsert Row
                $rowId = Row::RowIdentifier($coreEntity, $idWithinCore);
                /** @var Row|null $row */
                if (!$row = $ctx->repo(Row::class)->find($rowId)) {
                    $row = new Row($coreEntity, $idWithinCore);
                    $em->persist($row);
                }

                // label
                $label = $normalized['label'] ?? ($normalized['name'] ?? ($normalized['title'] ?? null));
                if (!$label && $labelField && isset($record[$labelField])) {
                    $label = (string)$record[$labelField];
                }
                $row->setLabel($label ?: ("row $core:$idWithinCore"));

                // store raw + normalized
                $row->raw = $record;
                $row->setData($normalized);

                if ((++$i % $batch) === 0) {
                    $em->flush();
                    $em->clear();
                    $ownerRef   = $em->getReference(Owner::class, $ownerId);
                    $coreEntity = $em->getReference(Core::class,  $coreId);

                    // (optional) if you need $ctx->ownerRef in the rest of the loop
                    $ctx->ownerRef = $ownerRef;
                }
                if ($limit && $i >= $limit) break;
            }

            $em->flush();
            $total += $i;
            $io->writeln("Imported $i from " . basename($path));
        }

        $io->success("Done. Imported $total rows to core=$core. " . $ctx->repo(Row::class)->count());
        return 0;
    }

    private function requireCsv(): CsvIngestor
    {
        if (!$this->csv) {
            throw new \RuntimeException('CsvIngestor not available. Install league/csv and wire CsvIngestor.');
        }
        return $this->csv;
    }
}
