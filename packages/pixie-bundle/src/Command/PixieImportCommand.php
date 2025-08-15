<?php

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\OriginalImage;
use Survos\PixieBundle\Entity\Str;
use App\Metadata\ITableAndKeys;
use Survos\PixieBundle\Entity\Owner;
use Survos\PixieBundle\Event\RowEvent;
use Survos\PixieBundle\Model\Translation;
use Survos\PixieBundle\Repository\TableRepository;
use Survos\PixieBundle\Service\CoreService;
use Survos\PixieBundle\Service\ImportHandler;
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
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\Attribute\Target;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsCommand('pixie:import', 'Import csv to Row Entities, a file or directory of files"', aliases: ['import', 'p:imp'])]
final class PixieImportCommand extends Command
{
    private SymfonyStyle $io; // for use in methods without passing $io
    private bool $initialized = false; // so the event listener can be called from outside the command
    private ?ProgressBar $progressBar = null;
    private $total = 0; // hack to bypass count for large JSON files, e.g. smk

    public function __construct(
        private LoggerInterface                            $logger,
        private ParameterBagInterface                      $bag,
        private readonly PixieService                      $pixieService,
        #[Target('pixieEntityManager')]
        private EntityManagerInterface                     $pixieEntityManager,
        private EventDispatcherInterface                   $eventDispatcher,
        #[Autowire('%env(SITE_BASE_URL)%')] private string $baseUrl,
        private CoreRepository                             $coreRepository,
        private PixieImportService                         $pixieImportService,
        private ImportHandler                              $importHandler,
        private readonly SqliteService                     $sqliteService,
        private readonly CoreService                       $coreService,
        private readonly TableRepository                   $tableRepository,
    )
    {
        parent::__construct();

        $this->setHelp(sprintf(<<<EOL
import /json files into Row entities with _raw data and label.  
dispatches PixieImportEvent with _raw
creates relations (?)
creates strings for translation
creates images

creates raw stats

The next step is to process the rows (map the raw values to fields) with 

    ./c workflow:iterate row --marking=new --transition=process
EOL
        ));

    }

    public function __invoke(
        SymfonyStyle                                                         $io,
        #[Argument('config code')] ?string                                   $configCode = null,
        #[Argument('sub code, e.g. musdig inst id')] ?string                 $subCode = null,
        #[Option('conf directory, default to directory name of first argument')]
        ?string                                                              $dir = null,
        #[Option("max number of records per table to import")] ?int          $limit = null,
        #[Option("overwrite records if they already exist")] bool            $overwrite = false,
        #[Option("queue 'source' strings in translation db")] ?bool          $populate = null,
        #[Option("dispatch translation requests")] ?bool                     $translate = null,
        #[Option("persist images to -images.pixie.db (pixie:media?)")] ?bool $persist = null,
        #[Option("index after import (default: true)")] ?bool                $index = null,
        #[Option("purge db file first")] ?bool                               $reset = null,
        #[Option("Batch size for commit")] int                               $batch = 500,
        #[Option("total if known (slow to calc)")] int                       $total = 0,
        #[Option("dump the n-th record and stop")] ?int                      $dump = null,
        #[Option("starting at (offset)", name: 'start')] int                 $startingAt = 0,
        #[Option("table search pattern")] ?string                            $pattern = null,
        #[Option('tags (for listeners)')] ?string                            $tags = null,

    ): int
    {
        $this->io = $io;

        $this->initialized = true;
        // in bash:  export PIXIE_CODE=aust
        $configCode ??= getenv('PIXIE_CODE');
        $envLimit = getenv('IMPORT_LIMIT'); // use export IMPORT_LIMIT
        $populate ??= true;
        $translate ??= false;
        $index = is_null($index) ? false : $index;

        if (!$configCode) {
            $configCode = $io->askQuestion(new ChoiceQuestion("Config?",
                array_keys($this->pixieService->getConfigFiles())));
        }

        $pixieService = $this->pixieService;

        $ctx  = $pixieService->getReference($configCode);
        $em   = $ctx->em;
        $core = $pixieService->getCore('row', $configCode);
        $config = $ctx->config;
//        dd(count($core->rows), $ctx->ownerRef->name, $config);
// ... persist rows, etc.
//        $em->flush();

//        $config = $pixieService->selectConfig($configCode);
        // make sure the local owner is set.

//        assert($config, "Missing $configCode");
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

        $config = $this->pixieService->selectConfig($configCode);

//        if (!file_exists($dirName = pathinfo($pixieDbName, PATHINFO_DIRNAME))) {
//            mkdir($dirName, 0777, true);
//        }
        $io->title(sprintf("Reading %s, writing %s", $sourceDir, $pixieDbName));

        if ($reset) {
            // hmm, how do do this now?  Maybe in migrate?
            $this->io->error("Reset is no longer supported.");
            return self::FAILURE;
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
//        $progressBar = SurvosUtils::createProgressBar($this->io, null);

//        dd($limit, $envLimit);
        // ack, what is the different between createKv and getStorageBox()?
        $this->pixieImportService->import($configCode, $subCode, null,
            limit: $limit,
            startingAt: $startingAt,
            context: [
                'tags' => $tags ? explode(",", $tags) : [],
            ],
            overwrite: $overwrite, pattern: $pattern,
            callback: function ($row, \Survos\PixieBundle\Model\Table $table, $idx, StorageBox $kv) use ($batch, $limit, $dump) {
                $this->progressBar->advance();
                if ($dump && $idx === $dump) {
                    dump($row);
                }
//                dd($row);
//                dd($this->progressBar->getProgress(), $this->progressBar->getMaxSteps());
                // testing only
//                $this->pixieEntityManager->flush();

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
//                    if ($kv->inTransaction()) {
//                        $kv->commit();
//                        $kv->beginTransaction();
//                    }

                    $this->pixieEntityManager->flush();
//                    $this->pixieEntityManager->clear();
                };
//                return true; // return true to continue
                return $limit ? !$finished : true; // break if we've hit the limit
            });


        $this->pixieEntityManager->flush();
        $kv = $this->pixieService->getStorageBox($configCode, $subCode);

        $consoleTable = new Table($io);
        $consoleTable->setHeaders(['table', 'count', 'url']);
        // these counts should match up with the meili facet counts


        // ack
        $owner = $this->pixieEntityManager->find(Owner::class, $configCode);
        foreach ($config->getTables() as $table) {
            $core = $this->pixieService->getCore($table->getName(), $owner);
            $count = $core->rowCount;
//            $count = -3; // $kv->count($table->getName());
            $url = sprintf("%s://%s", $configCode, $subCode);
            // table? Or core?
//            $this->tableRepository->
//            $kv->beginTransaction();
//            $kv->set([
//                'id' => $table->getName(),
//                'count' => $count
//              ], '_tables');
//            $kv->commit();
            $consoleTable->addRow([$table->getName(), $count]);
        }
        $io->title($kv->getFilename());
        $consoleTable->render();
        $io->success($this->getName() . ' success ' . $pixieDbName);

        // this is queuing the source strings to 'source', not the translations
        if ($index) {
            $this->runIndex($configCode, $subCode, $io);
        }
        // this only queues source translations, so unrelated to indexing
        if ($populate) {
            $cli = "pixie:translate  $configCode";
            $this->io->warning('bin/console ' . $cli);
//            $this->runCommand($cli);
        }
        if ($translate) {
            $cli = "pixie:translate $configCode";
            $this->io->warning('bin/console ' . $cli);
            $this->runCommand($cli);
        }

        // hyperlink syntax: <href=THE_LINK_URL> THE_LINK_TEXT </>
        $locale = $config->getSource()->locale;
        $url = str_replace('https://', 'https://' . $locale . '.', $this->baseUrl);
        $url .= "/$configCode";
        $this->io->writeln(sprintf("<href=%s>%s</>", $url, $url));
//        $kv->close();

        $this->pixieEntityManager->flush();

//        $iKv = $this->eventDispatcher->dispatch(new StorageBoxEvent($configCode, mode: ITableAndKeys::PIXIE_IMAGE))->getStorageBox();
//        $iKv->select(ITableAndKeys::IMAGE_TABLE);
//        $this->io->writeln("Images in iKv: " . $iKv->count(ITableAndKeys::IMAGE_TABLE));

        $this->io->writeln("Images in image db: " .
            $this->pixieEntityManager->getRepository(OriginalImage::class)->count());
        $this->io->writeln("Translations: " .
            $this->pixieEntityManager->getRepository(Str::class)->count());
        return Command::SUCCESS;
    }


    #[AsEventListener(event: ImportFileEvent::class)]
    public function startImport(ImportFileEvent $event): void
    {
        if (!$this->initialized) {
            return;
        }
        $this->io->title(sprintf("%s -> %s", $event->filename, $event->pixieDbName));
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

        $count = $count ?? $this->total ?? 0;
//        $this->io->writeln("Init progressBar with " . $count);
//        $this->progressBar = new ProgressBar($this->io->output(), $count);
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
        // @todo: inject the handler based on the configCode
        // https://symfonycasts.com/screencast/dependency-injection-attributes

        switch ($event->type) {
            case $event::PRE_LOAD:
                if (!empty($this->progressBar)) {
                    $this->progressBar->setMaxSteps($event->context['count']);
//                    $this->progressBar = new ProgressBar($this->io->output());
                }
                break;
            case $event::LOAD:
//                $row = $this->importHandler->prepare($event->configCode, $event->row);
//                dd($this->importHandler);


                $this->progressBar?->advance();
                if (($event->index % 1000) == 0) {

//                    dump($this->progressBar->getProgress(), $this->progressBar->getMaxSteps());
//                    $this->io->writeln(sprintf("pause %d %d",
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

    public function runIndex(string $pixieCode, ?string $subCode = null, $output): void
    {

        $greetInput = new ArrayInput([
            // the command name is passed as first argument
            'command' => 'pixie:index',
            'configCode' => $pixieCode,
//            '--yell'  => true,
        ]);

        // disable interactive behavior for the greet command
        $greetInput->setInteractive(false);
        $returnCode = $this->getApplication()->doRun($greetInput, $output);
        dd($returnCode);


        $cli = "pixie:index $pixieCode $subCode";
        $this->io->warning('bin/console ' . $cli);
        $this->runCommand($cli);
    }

}
