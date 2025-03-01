<?php

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\OriginalImage;
use App\Event\RowEvent;
use App\Metadata\ITableAndKeys;

use Survos\PixieBundle\Service\SqliteService;
use Doctrine\ORM\EntityManagerInterface;
use JsonMachine\Items;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;
use Survos\PixieBundle\Repository\CoreRepository;
use Survos\CoreBundle\Service\SurvosUtils;
use Survos\PixieBundle\Event\ImportFileEvent;
use Survos\PixieBundle\Event\StorageBoxEvent;
use Survos\PixieBundle\Service\PixieImportService;
use Survos\PixieBundle\Service\PixieService;
use Survos\PixieBundle\StorageBox;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Zenstruck\Console\Attribute\Argument;
use Zenstruck\Console\Attribute\Option;
use Zenstruck\Console\InvokableServiceCommand;
use Zenstruck\Console\IO;
use Zenstruck\Console\RunsCommands;
use Zenstruck\Console\RunsProcesses;

#[AsCommand('pixie:import', 'Import csv to Entity, a file or directory of files"', aliases: ['import', 'p:imp'])]
final class PixieImportCommand extends InvokableServiceCommand
{
    use RunsCommands;
    use RunsProcesses;

    private bool $initialized = false; // so the event listener can be called from outside the command
    private ?ProgressBar $progressBar=null;
    private $total = 0; // hack to bypass count for large JSON files, e.g. smk

    public function __construct(
        private LoggerInterface                            $logger,
        private ParameterBagInterface                      $bag,
        private readonly PixieService                      $pixieService,
        private EntityManagerInterface                     $pixieEntityManager,
        private EventDispatcherInterface                   $eventDispatcher,
        #[Autowire('%env(SITE_BASE_URL)%')] private string $baseUrl,
        private CoreRepository $coreRepository,
        private readonly SqliteService $sqliteService,
    )
    {

        parent::__construct();
        $this->setHelp(sprintf(<<<EOL
import /json files into Row entities with _raw data and label.  
dispatches PixieImportEvent with _raw
does not create relations
creates raw stats
EOL
        ));

    }

    public function __invoke(
        IO                                                                                            $io,
        PixieService                                                                                  $pixieService,
        PixieImportService                                                                            $pixieImportService,
        #[Argument(description: 'config code')] ?string                                               $configCode,
        #[Argument(description: 'sub code, e.g. musdig inst id')] ?string                             $subCode = null,
        #[Option(description: 'conf directory, default to directory name of first argument')] ?string $dir = null,
        #[Option(description: "max number of records per table to import")] ?int                      $limit = null,
        #[Option(description: "overwrite records if they already exist")] bool                        $overwrite = false,
        #[Option(description: "queue 'source' strings in translation db")] ?bool                      $populate = false,
        #[Option(description: "dispatch translation requests")] ?bool                                 $translate = false,
        #[Option(description: "persist images to -images.pixie.db (pixie:media?)")] ?bool             $persist = false,
        #[Option(description: "index after import (default: true)")] ?bool                            $index = null,
        #[Option(description: "purge db file first")] bool                                            $reset = false,
        #[Option(description: "Batch size for commit")] int                                           $batch = 500,
        #[Option(description: "total if known (slow to calc)")] int                                   $total = 0,
        #[Option('start', description: "starting at (offset)")] int                                   $startingAt = 0,
        #[Option(description: "table search pattern")] string                                         $pattern = '',
        #[Option(description: 'tags (for listeners)')] ?string                                        $tags = null,

    ): int
    {
        $this->initialized = true;
        // in bash:  export PIXIE_CODE=aust
        $configCode ??= getenv('PIXIE_CODE');
        $envLimit = getenv('IMPORT_LIMIT'); // use export IMPORT_LIMIT
        $populate ??= true;
        $translate ??= false;
        $index = is_null($index) ? false : $index;

        $config = $pixieService->getConfig($configCode);
        assert($config, "Missing $configCode");
        $sourceDir = $pixieService->getSourceFilesDir($configCode, subCode: $subCode);
        assert(is_dir($sourceDir), "Invalid source dir: $sourceDir");


//        dump($configData, $config->getVersion());
//        dd($dirOrFilename, $config, $configFilename, $pixieService->getPixieFilename($configCode));

//        if (!is_dir($dir)) {
//            $io->error("$dir does not exist.  set the directory in config or pass it as the first argument");
//            return self::FAILURE;
//        }

//        if (!file_exists($configFilename) && (file_exists($configWithCsv = $dirOrFilename . "/$config"))) {
//            $config = $configWithCsv;
//        }
//
//        if (!file_exists($config) && (file_exists($configInPackages = $this->bag->get('kernel.project_dir') . "/config/packages/Entity/$config"))) {
//            $config = $configInPackages;
//        }
//
//        if (!file_exists($config)) {
//            $config = $dirOrFilename . "/$config";
//        }

        $pixieDbName = $pixieService->getPixieFilename($configCode, $subCode);

        // new database
        $pixieEm = $this->sqliteService->getPixieEntityManager($configCode);

        if (!file_exists($dirName = pathinfo($pixieDbName, PATHINFO_DIRNAME))) {
            mkdir($dirName, 0777, true);
        }
        $io->title(sprintf("Reading %s, writing %s", $sourceDir, $pixieDbName));

        if ($reset) {
            $this->pixieService->destroy($pixieDbName);
        }
        $this->total = $total;
        if ($limit && !$this->total) {
            $this->total = $limit;
        }
        if ($config->getSource()->total) {
            $this->total = $config->getSource()->total;
        }

        $limit = $this->pixieService->getLimit($limit);
        if ($envLimit && (($limit == 0) || $envLimit < $limit)) {
            $limit = $envLimit;
        }
        $this->progressBar = SurvosUtils::createProgressBar($io, $limit ?: $this->total);
//        $progressBar = SurvosUtils::createProgressBar($this->io(), null);

//        dd($limit, $envLimit);
        // ack, what is the different between createKv and getStorageBox()?
        $pixieImportService->import($configCode, $subCode, null,
            limit: $limit,
            startingAt: $startingAt,
            context: [
                'tags' => $tags ? explode(",", $tags) : [],
            ],
            overwrite: $overwrite, pattern: $pattern,
            callback: function ($row, \Survos\PixieBundle\Model\Table $table, $idx, StorageBox $kv) use ($batch, $limit, $pixieEm) {
            $this->progressBar->advance();
                $this->pixieEntityManager->flush();

            // moved to importService
//                if (!$core = $pixieEm->getRepository(Core::class)->find($coreCode = $table->getName())) {
//                    $core = new Core($coreCode);
//                    $pixieEm->persist($core);
//                }
//                $instanceCode = $row[$table->getPkName()];
//                if (!$instance = $pixieEm->getRepository(Instance::class)->findOneBy(['code' => $instanceCode])) {
//                    $instance = new Instance($core, $instanceCode);
//                    $pixieEm->persist($instance);
//                }
//                $core->addInstance($instance);
//                $instance->setLabel($row['label']);


                $finished = $limit ? $idx > ($limit) : false;
//                dd($limit, $idx, $finished, $batch);
                if ($finished || (($idx % $batch) == 0)) {
//                    $this->logger->info("Saving $batch, now at $idx of $limit");
                    if ($kv->inTransaction()) {
                        $kv->commit();
                        $kv->beginTransaction();
                    }

                    $this->pixieEntityManager->flush();
//                    $this->pixieEntityManager->clear();
                };
//                return true; // return true to continue
                return $limit ? !$finished : true; // break if we've hit the limit
            });


        $pixieEm->flush();
        $kv = $this->pixieService->getStorageBox($configCode, $subCode);

        $consoleTable = new Table($io);
        $consoleTable->setHeaders(['table', 'count']);
        // these counts should match up with the meili facet counts

        foreach ($config->getTables() as $table) {
            $count = $kv->count($table->getName());
//            $kv->beginTransaction();
//            $kv->set([
//                'id' => $table->getName(),
//                'count' => $count
//            ], '_tables');
//            $kv->commit();
            $consoleTable->addRow([$table->getName(), $count]);
        }
        $io->title($kv->getFilename());
        $consoleTable->render();
        $io->success($this->getName() . ' success ' . $pixieDbName);

        // this is queuing the source strings to 'source', not the translations
        if ($index) {
            $this->runIndex($configCode, $subCode);
        }
        // this only queues source translations, so unrelated to indexing
        if ($populate) {
            $cli = "pixie:translate --queue $configCode";
            $this->io()->warning('bin/console ' . $cli);
            $this->runCommand($cli);
        }
        if ($translate) {
            $cli = "pixie:translate $configCode";
            $this->io()->warning('bin/console ' . $cli);
            $this->runCommand($cli);
        }

        // hyperlink syntax: <href=THE_LINK_URL> THE_LINK_TEXT </>
        $locale = $config->getSource()->locale;
        $url = str_replace('https://', 'https://' . $locale . '.', $this->baseUrl);
        $url .= "/$configCode";
        $this->io()->writeln(sprintf("<href=%s>%s</>", $url, $url));
        $kv->close();

        $this->pixieEntityManager->flush();

        $iKv = $this->eventDispatcher->dispatch(new StorageBoxEvent($configCode, mode: ITableAndKeys::PIXIE_IMAGE))->getStorageBox();
        $iKv->select(ITableAndKeys::IMAGE_TABLE);
        $this->io()->writeln("Images in iKv: " . $iKv->count(ITableAndKeys::IMAGE_TABLE));
        $this->io()->writeln("Images in image db: " . $this->pixieEntityManager->getRepository(OriginalImage::class)->count());
        return self::SUCCESS;
    }


    #[AsEventListener(event: ImportFileEvent::class)]
    public function startImport(ImportFileEvent $event): void
    {
        if (!$this->initialized) {
            return;
        }
        $this->io()->title(sprintf("%s -> %s", $event->filename, $event->pixieDbName));
//        dd($count, $this->total);
        if (!$this->total) {

            if ($event->getType() == 'json') {
                // faster to get the first record and filesize and divide, for a rough estimate.
                $iterator = Items::fromFile($event->filename)->getIterator();
                $first = $iterator->current();
//                $pointer = $iterator->getCurrentJsonPointer();
                $size = filesize($event->filename);

                $guess = (int)($size / strlen(json_encode($first, JSON_PRETTY_PRINT)));
                $count = $guess;
                assert($guess, "no objects in $event->filename");
//                dd($count, $size);
                $iterator->rewind();

//                dd("plz set total in config");
//                    halaxa/json-machine
//                try {
//                    $count =  iterator_count(Items::fromFile($event->filename));
//                    dd($count, $guess);
//                } catch (\Exception $e) {
//                    $this->logger->error($e->getMessage() . "\n" . $event->filename);
//                    throw $e;
//                }
            } else {
                $count = $this->lineCount($event->filename);
            }
        }

        $count= $count??$this->total??0;
//        $this->io()->writeln("Init progressBar with " . $count);
//        $this->progressBar = new ProgressBar($this->io()->output(), $count);
//        $this->progressBar->setProgress(0);
//        $this->progressBar->setFormat(OutputInterface::VERBOSITY_VERBOSE);
//        $this->progressBar->start();
//        $this->progressBar->start($count);
    }

    private function lineCount(string $filename)
    {
//        return count(file($filename));
        $lines_command = sprintf('wc -l %s', $filename);
        $lines = system($lines_command);
        return (int)$lines;
    }


    #[AsEventListener(event: RowEvent::class)]
    public function importRow(RowEvent $event): void
    {
        switch ($event->type) {
            case $event::PRE_LOAD:
                if (empty($this->progressBar)) {
                    $this->progressBar->setMaxSteps($event->context['count']);
//                    $this->progressBar = new ProgressBar($this->io()->output());
                }
                break;
            case $event::LOAD:
                $this->progressBar?->advance();
                if (($event->index % 1000) == 0) {

//                    dump($this->progressBar->getProgress(), $this->progressBar->getMaxSteps());
//                    $this->io()->writeln(sprintf("pause %d %d",
//                        $this->progressBar?->getProgress(),
//                        $this->progressBar?->getMaxSteps()
//                    ));
//                    usleep(100000);
//                    $this->progressBar->finish();
//                    dd();
                }
                break;
            case $event::POST_LOAD:
                $this->progressBar?->finish();
                break;
        }
//        $this->initialized && $event->isRowLoad() && $this->progressBar->advance();
    }

    public function runIndex(string $pixieCode, ?string $subCode = null): void
    {
        $cli = "pixie:index $pixieCode $subCode";
        $this->io()->warning('bin/console ' . $cli);
        $this->runCommand($cli);
    }

}
