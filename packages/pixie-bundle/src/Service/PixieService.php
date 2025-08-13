<?php

namespace Survos\PixieBundle\Service;

// see https://github.com/bungle/web.php/blob/master/sqlite.php for a wrapper without PDO

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Psr\Log\LoggerInterface;
use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Survos\PixieBundle\CsvSchema\Parser;
use Survos\PixieBundle\Debug\TraceableStorageBox;
use Survos\PixieBundle\Entity\Core;
use Survos\PixieBundle\Entity\Owner;
use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Event\StorageBoxEvent;
use Survos\PixieBundle\Message\PixieTransitionMessage;
use Survos\PixieBundle\Meta\PixieInterface;
use Survos\PixieBundle\Model\Config;
use Survos\PixieBundle\Model\Item;
use Survos\PixieBundle\Model\PixieContext;
use Survos\PixieBundle\Model\Property;
use Survos\PixieBundle\Model\Source;
use Survos\PixieBundle\Model\Table;
use Survos\PixieBundle\Repository\CoreRepository;
use Survos\PixieBundle\StorageBox;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Stopwatch\Stopwatch;
use Symfony\Component\Yaml\Yaml;
use Survos\WorkflowBundle\Service\WorkflowHelperService;


class PixieService
{
    const PIXIE_TRANSLATION = 'translation';
    // cache, indexed by filename
    private array $storageBoxes = [];

    public function __construct(
//        #[Autowire('%kernel.debug%')] private readonly bool                                        $isDebug,

        private EntityManagerInterface                           $pixieEntityManager,
        private SqliteService                                    $sqliteService,
        private readonly CoreRepository                          $coreRepository,
        private readonly bool                                    $isDebug = false,
        private array                                            $data = [],
        private readonly string                                  $extension = "db",
        private readonly string                                  $dbDir = 'pixie',
        private readonly string                                  $dataRoot = 'data', //
        private readonly string                                  $configDir = 'config/packages/pixie',
        private array                                            $bundleConfig = [],
        #[Autowire('%env(DATABASE_PIXIE_URL)%')] private ?string $pixieTemplateUrl = null,
        #[Autowire('%kernel.project_dir%')]
        private readonly ?string                                 $projectDir = null,
        private readonly ?LoggerInterface                        $logger = null,
        private readonly ?Stopwatch                              $stopwatch = null,
        private readonly ?PropertyAccessorInterface              $accessor = null,
        private readonly ?SerializerInterface                    $serializer = null,
        private readonly ?WorkflowHelperService                  $workflowHelperService = null,
        private ?Config                                          $config = null,
//        private ?DenormalizerInterface                      $denormalizer = null,
    )
    {
//        dd($this->isDebug);
//        dd($this->serializer->denormalize($this->data, Config::class));
//        assert($this->logger);
//        $this->denormalizer = $this->serializer; // ->denormalize($this->data, DenormalizerInterface::class);
    }


    /**
     * if null, use the value in survos_pixie.yaml, so dev can be less
     *
     * @param int|null $limit
     * @return int|null
     */
    public function getLimit(?int $limit = null): ?int
    {
        return is_null($limit) ? $this->bundleConfig['limit'] : $limit;

    }

    public function getPixieEntityManager(): EntityManagerInterface
    {
        return $this->pixieEntityManager;

    }

    public function getPixieFilename(string $pixieCode, ?string $filename = null, bool $autoCreateDir = false): string
    {
        if (!$filename) {
            $filename = $pixieCode;
        }
        $dir = $this->getPixieDbDir(); // no longer nested . "/$pixieCode";
        if ($autoCreateDir && !is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $filename = $dir . "/$filename.{$this->extension}";

        if (file_exists($filename)) {
            $filename = realpath($filename);
        }
        return $filename;

    }

    public static function getMeiliIndexName(string $pixieCode, ?string $subCode, ?string $tableName)
    {
        return 'px_' . $pixieCode . ($subCode ? ('_' . $subCode) : '') . '_' . $tableName;

    }

    private function resolveFilename($filename, ?string $type = null): ?string
    {

        if ($type && ($filename && !file_exists($filename))) {
            $root = match ($type) {
                'db' => $this->dbDir,
                'config' => $this->configDir,
                'data' => $this->dataRoot,
            };
            $filename = $root . "/$filename";
            if (!file_exists($filename)) {
                $filename = $this->projectDir . "/$filename";
            }
        }
        return ($filename && file_exists($filename)) ? $filename : null;
    }

    // fetch via an event, rather than injecting the service
    #[AsEventListener(event: StorageBoxEvent::class, priority: 50)]
    public function storageBoxListener(StorageBoxEvent $event): void
    {
        $mode = $event->getMode();
//        if ($event->isTranslation()) {
//            $mode = PixieInterface::PIXIE_TRANSLATION;
//        }
//        assert(!$event->isTranslation(), "use mode");
        $filename = $this->getPixieFilename($event->getPixieCode());
        if ($suffix = match ($mode) {
            'data' => null,
//            'translation' => PixieInterface::PIXIE_TRANSLATION_SUFFIX,
            'image' => PixieInterface::PIXIE_IMAGE_SUFFIX
        }) {
            $filename = str_replace('.pixie.db', '-' . $suffix . '.pixie.db', $filename);
        }

        $kv = $this->getStorageBox(
            $suffix ?? $event->getPixieCode(),
            filename: $suffix ? $filename : null,
        );
//        dd($kv);
        $event->setStorageBox($kv);
    }

    function getStorageBox(string  $pixieCode,
                           ?string $subCode = null,
                           ?string $filename = null, // since files can share a config?
                           bool    $destroy = false,
                           bool    $createFromConfig = false,
                           ?Config $config = null,
    ): StorageBox
    {
        // ideally we could drop this and get the configuration data without the file
        // this selects the proper database so when others access the em it is the right one
        assert(!str_contains($pixieCode, "/"), "pass in pixieCode, not filename");
//        assert($filename, $pixieCode . " $filename ");

        if (!$filename) {
            $filename = $this->getPixieFilename($pixieCode, $subCode);
        }
        if ($createFromConfig && !$config) {
            $config = $this->selectConfig($pixieCode);
        }
        // always parse config so we have it.  certainly could be optimized
//        if ($createFromConfig)
        {
            if (!$config) {
//                assert(false, "Pass in config for now.");
                // filename? Or code???  ugh,
                $config = $this->selectConfig($pixieCode);

            }
            // the array! someday the model.
//            $tables = $config->getTables();
//            foreach ($config->getTables() as $tableName => $table) {
//                dd($tableName, $table);
//            }
        }
        $destroy && $this->destroy($filename);
        if (!$kv = $this->storageBoxes[$filename] ?? false) {
            $class = $this->isDebug ? TraceableStorageBox::class : StorageBox::class;
            $kv = new $class($filename,
                $this->data, // for debug
                $config,
                pixieCode: $pixieCode,
                accessor: $this->accessor,
                logger: $this->logger,
                stopwatch: $this->stopwatch,
                templates: $this->getTemplates()
            );
            $this->storageBoxes[$filename] = $kv;
        }
//        dump($filename, storageBoxes: array_keys($this->storageBoxes));
        return $kv;
    }

//    function getStringBox(string $filename, array $tables=[]): StorageBox
//    {
//        return new StorageBox($filename, $tables, valueType: 'string', logger: $this->logger);
//    }

    function destroy(string $filename): void
    {
        $filename = $this->resolveFilename($filename);
        if ($filename && file_exists($filename)) {
            unlink($filename);
        }
    }

    /** @internal used in the DataCollector class */
    public function getData(): array
    {
        return $this->data;
        foreach ($this->storageBoxes as $filename => $storageBox) {
            $this->data[$filename] = $storageBox->getData();
        }
        return $this->data;
    }

    public function getConfig(string $pixieCode): Config
    {
        return $this->getConfigFiles()[$pixieCode];

    }

    /**
     * @return array<Config>
     */
    public function getConfigFiles(?string $q = null, ?string $pixieCode = null, int $limit = 0): array
    {

        $configs = [];
        foreach ($this->bundleConfig['pixies'] as $code => $pixie) {
            if ($q && !str_contains((string)$code, $q)) {
                continue;
            }
            if ($pixieCode && $code !== $pixieCode) {
                continue;
            }

//            https://www.strangebuzz.com/en/snippets/converting-an-array-into-an-object-with-the-symfony-serializer
//            $code=='auur' && dd($pixie['tables']['obj']);
            // insert the name so we don't have to fix it manually later
            foreach ($pixie['tables'] as $tableName => $tableData) {
                $pixie['tables'][$tableName]['name'] = $tableName;
            }
            $config = $this->serializer->denormalize($pixie, Config::class);
            $config->setPixieFilename($this->getPixieFilename($code));


            // eh.
            $resolvedDataPath = $this->resolveFilename($config->getSourceFilesDir(), 'data');
            $config->dataDir = $resolvedDataPath;

            $configs[$code] = $config;
        }
        return $configs;

        $finder = new Finder();
        $finder->depth("<1");
        $configs = [];
        $pattern = $pixieCode ?: ($q ?: '*');
        // this is only the configs in the configDir.
        foreach ($finder->files()->name("$pattern.yaml")
                     ->in($this->getConfigDir())->sortByName()->reverseSorting() as $file) {
            // we can optimize later...
            $code = $file->getFilenameWithoutExtension();
            $config = $this->selectConfig($code);
            assert($config, "invalid config $code");

            $resolvedDataPath = $this->resolveFilename($config->getSourceFilesDir(), 'data');
            $config->dataDir = $resolvedDataPath;
//            dd($config);
            // hacky!  configs can belong to more than one filename
            $config->setPixieFilename($this->getPixieFilename($code));
            assert($config->getPixieFilename(), "Missing pixie filename for $code");
            $configs[$code] = $config;
        }
        return $configs;
//        // we could parse these, though then we should cache them.  Since they're in config, we could cache them at compile-time
//        return glob($this->getConfigDir() . '/*.yaml');

    }

    public function getTemplates(): array
    {
        $templates = [];
        foreach ($this->bundleConfig['templates'] as $code => $template) {
            $templates[$code] = $this->serializer->denormalize($template, Table::class);
        }
        return $templates;

    }

    /**
     * @return array(<string, Property>)
     */
    public function getInternalProperties(): array
    {
        $templates = [];
        foreach ($this->bundleConfig['templates']['internal'] as $code => $property) {
            dd($code, $property);
        }
        return $templates;

    }

    public function importConfigToCore(Config $config): void
    {
        $coreCode = $config->getCode();
        if (!$this->coreRepository)
            // map config to core fields, then only use Core/Fields and not Table/Columns
            dd($config);


    }


    /** @return list<class-string> */
    private function pixieEntityClasses(EntityManagerInterface $em): array
    {
        $out = [];
        foreach ($em->getMetadataFactory()->getAllMetadata() as $m) {
            $name = $m->getName();
            if (str_starts_with($name, 'Survos\\PixieBundle\\Entity\\')) {
                $out[] = $name;
            }
        }
        sort($out);
        return $out;
    }

//    public function getCoreOLD(string $tableName, ?Owner $owner=null): Core
//    {
//        // switch the database
//        $this->getConfig($owner->pixieCode);
//        $coreRepository = $this->pixieEntityManager->getRepository(Core::class);
//        $ownerCode = $owner?->code;
//        // this doesn't pass the smell test.
//        if ( empty($owner) || empty($this->cores[$owner->code])) {
//            foreach ($coreRepository->findAll() as $core) {
////                assert($core->getOwner(), "Missing owner in core");
////                if ($core->getOwner() !== $owner) {
////                    dd($core->getOwner(), $owner);
////                }
////                assert($core->getOwner() === $owner);
//                $this->cores[$ownerCode][$core->code] = $core;
//            }
//        }
//
////        if (!$core = $this->coreRepository->find($tableName)) {
////        if (!$core = $this->cores[$owner->code][$tableName]??null) {
//        if (!$core = $coreRepository->findOneBy(['code' => $tableName])) {
////            dump($this->cores);
////            dd("Shouldn't $tableName already be in core?");
//            $core = new Core($tableName, $tableName, $owner);
//            $owner->addCore($core);
//
////            foreach ($this->coreRepository->findAll() as $existingCore) {
////                dump($existingCore->get   Code(), $existingCore);
////            }
//            assert($owner, "owner required when creating core");
//            $this->pixieEntityManager->persist($core);
//            assert($this->pixieEntityManager->contains($core));
//            $this->cores[$ownerCode][$tableName] = $core;
////            dump($tableName, array_keys($this->cores));
//        }
//        if (!$this->pixieEntityManager->contains($core)) {
//            dd($core, $this->cores);
//        }
////        dd($this->serializer->serialize($core, 'json', ['groups' => 'core.read']));
//        return $core;
//
//    }

// PixieService.php
    public function getCoreInContext(PixieContext $ctx, string $tableName): Core
    {
        $em       = $ctx->em;
        $coreRepo = $em->getRepository(Core::class);

        // Make sure we have a managed Owner proxy now
        if (!$ctx->ownerRef) {
            // Owner must already exist; error out if not.
            $exists = (bool)$em->getConnection()->fetchOne(
                'SELECT 1 FROM owner WHERE id = ?', [$ctx->pixieCode]
            );
            if (!$exists) {
                throw new \RuntimeException("Owner '{$ctx->pixieCode}' not found in current pixie DB.");
            }
            $ctx->ownerRef = $em->getReference(Owner::class, $ctx->pixieCode);
        }

        $core = $coreRepo->findOneBy(['code' => $tableName]);
        if (!$core) {
            $core = new Core($tableName, $tableName);
            $core->owner = $ctx->ownerRef;             // owning side
            $em->persist($core);
        } elseif ($core->owner === null) {
            $core->owner = $ctx->ownerRef;             // repair if missing
        }

        return $core;
    }

    public function getCore(string $tableName, string|Owner $ownerInput): Core
    {
        $ownerCode = \is_string($ownerInput) ? $ownerInput : (string)$ownerInput->code;

        $ctx      = $this->getReference($ownerCode);
        $em       = $ctx->em;
        $coreRepo = $em->getRepository(Core::class);

        // Core codes are globally unique in your schema (unique index on code),
        // so scoping by owner is not required; if you later scope by owner, add it here.
        $core = $coreRepo->findOneBy(['code' => $tableName]);
        if (!$core) {
            $core = new Core($tableName, $tableName); // don’t pass Owner here
            $core->owner = $ctx->ownerRef;            // set owning side; no $owner->addCore() needed
            $em->persist($core);
        }

        return $core;
    }

    public function getCoreXX(string $tableName, string|Owner $ownerInput): Core
    {
        // 1) Resolve owner code/id (don’t trust cross-EM objects)
        $ownerCode = is_string($ownerInput) ? $ownerInput : (string)$ownerInput->code;
        $ownerId   = is_string($ownerInput)
            ? $ownerInput                       // if your PK == code
            : (property_exists($ownerInput, 'id') ? (string)$ownerInput->id : (string)$ownerInput->code);

        // 2) Switch DB/EM for this owner
        $this->getConfig($ownerCode);           // sets $this->pixieEntityManager to the right EM
        $em       = $this->pixieEntityManager;
        $coreRepo = $em->getRepository(Core::class);

        // 3) Get a MANAGED Owner reference in THIS EM
        $ownerRef = $em->getReference(Owner::class, $ownerId); // lightweight, no SELECT unless needed

        // (Optional) sanity: ensure the owner row exists in this DB
        // $exists = (bool)$em->getConnection()->fetchOne('SELECT 1 FROM owner WHERE id = ?', [$ownerId]);
        // if (!$exists) { throw new \RuntimeException("Owner '$ownerId' not found in current DB"); }

        // 4) Find Core by code (code is unique). Prefer also scoping by owner if code isn’t truly global.
        $core = $coreRepo->findOneBy(['code' => $tableName]);
        if (!$core) {
            // Constructor should be side-effect free; don’t pass $owner here
            $core = new Core($tableName, $tableName);
            $core->owner = $ownerRef;           // set the owning side; no addCore() needed
            $em->persist($core);
        }

        return $core;
    }

// ...

    /**
     * Switch the sqlite connection to `$pixieCode`, return:
     *  - the normalized Config for that pixie,
     *  - the (current) pixie EM,
     *  - a MANAGED Owner proxy for `$pixieCode`.
     *
     * Never pass Owner objects across calls; always re-acquire via this method.
     */
// PixieService.php
// PixieService.php
    public function getReference(string $pixieCode): PixieContext
    {
        // switch the EM/connection to this pixie
        $this->selectConfig($pixieCode);
        $em = $this->pixieEntityManager;

        // stable Config object for this pixie
        $config = $this->selectConfigNEW($pixieCode, $em);

        // only set ownerRef if the row already exists
        $ownerRef = null;
        if ((bool)$em->getConnection()->fetchOne(
            'SELECT 1 FROM owner WHERE id = ?', [$pixieCode]
        )) {
            $ownerRef = $em->getReference(Owner::class, $pixieCode);
        }

        return new PixieContext($pixieCode, $config, $em, $ownerRef);
    }

    /** If you REALLY need a managed Owner later (and only after you persist it) */
    public function attachOwnerRef(PixieContext $ctx): void
    {
        $exists = (bool) $ctx->em->getConnection()
            ->fetchOne('SELECT 1 FROM owner WHERE id = ?', [$ctx->pixieCode]);
        $ctx->ownerRef = $exists ? $ctx->em->getReference(Owner::class, $ctx->pixieCode) : null;
    }



    public function selectConfigNEW(string $pixieCode, ?EntityManagerInterface $em = null): ?Config
    {
        static $configCache = null;

        if ($configCache === null) {
            $configCache = $this->getConfigFiles();
        }

        $config = $configCache[$pixieCode] ?? null;
        if (!$config) {
            return null;
        }

        // Expand templates, etc.
        $config = StorageBox::fix($config, $this->getTemplates());

        // Optionally hydrate Owner from the passed EM (correct pixie DB)
        if (false && $em) {
            try {
                $owner = $em->getRepository(Owner::class)->find($pixieCode);
                $config->setOwner($owner);
            } catch (\Throwable $e) {
                $this->logger->warning("Unable to load Owner($pixieCode): " . $e->getMessage());
            }
        }

        return $config;
    }

    /**
     * Return the normalized (template-expanded) Config for a pixie.
     * Does NOT touch the database/EM. Cached per pixieCode.
     */
    public function getConfigSnapshot(string $pixieCode): Config
    {
        static $fixed = []; // cache of fixed configs

        if (!isset($fixed[$pixieCode])) {
            $all = $this->getConfigFiles();                 // your existing cache/loader
            $raw = $all[$pixieCode] ?? null;
            if (!$raw) {
                throw new \RuntimeException("Unknown pixieCode '$pixieCode'.");
            }

            // Clone to avoid cross-call mutations, then expand templates, set paths.
            $cfg = clone $raw;
            $cfg = StorageBox::fix($cfg, $this->getTemplates());
            $cfg->setPixieFilename($this->getPixieFilename($pixieCode));
            $cfg->dataDir = $this->resolveFilename($cfg->getSourceFilesDir(), 'data');

            // Important: avoid putting a MANAGED entity into Config (cross-EM trouble)
            $cfg->setOwner(null);

            $fixed[$pixieCode] = $cfg;
        }
        return $fixed[$pixieCode];
    }

    // @todo: add custom dataDir, etc.
// PixieService.php

// PixieService.php

    public function selectConfig(string $pixieCode): ?\Survos\PixieBundle\Model\Config
    {
        // 1) Load and normalize Config (from bundle config)
        $configs = $this->getConfigFiles(pixieCode: $pixieCode);
        $config  = $configs[$pixieCode] ?? null;
        if (!$config) {
            return null;
        }

        // Expand templates / normalize tables & properties
        $config = \Survos\PixieBundle\StorageBox::fix($config, $this->getTemplates());

        // Ensure filenames/dirs are set
        if (!$config->getPixieFilename()) {
            $config->setPixieFilename($this->getPixieFilename($pixieCode));
        }
        if (!$config->getDataDir()) {
            $resolved = $this->resolveFilename($config->getSourceFilesDir(), 'data');
            $config->dataDir = $resolved;
        }

        // 2) SWITCH the EM/connection to this pixie DB if not already
        $em     = $this->pixieEntityManager;
        $conn   = $em->getConnection();

        $params       = $conn->getParams();
        $currentPath  = $params['path'] ?? null;                 // current sqlite path
        $targetPath   = $this->dbName($pixieCode);               // desired sqlite path for this pixie

        if ($currentPath !== $targetPath) {
            // Finish any pending work on the old DB, then switch
            try { $em->flush(); } catch (\Throwable $ignore) {}
            $em->clear();
            $conn->selectDatabase($targetPath);
        }

        // 3) Optionally attach Owner (if present in this pixie DB)
        try {
            $owner = $em->getRepository(\Survos\PixieBundle\Entity\Owner::class)->find($pixieCode);
            if ($owner) {
                $config->setOwner($owner);
            }
        } catch (\Throwable $e) {
            $this->logger?->warning("selectConfig($pixieCode): owner lookup failed: ".$e->getMessage());
        }

        return $config;
    }


    public function getConfigFilename(string $pixieCode): string
    {
        // @todo: handle non-standard locations
        return $this->getConfigDir() . "/$pixieCode.yaml";
    }

    public function getConfigDir(bool $autoCreate = false): string
    {
        assert(!$autoCreate);
        $dir = $this->configDir;
        if (!file_exists($dir) && !str_starts_with($dir, "/")) {
            $dir = $this->projectDir . "/$dir";
        }

        if ($autoCreate && !is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        return $dir;

    }

    public function getDataRoot(): string
    {
        return $this->addProjectDir($this->dataRoot);
    }

    public function getPixieDbDir()
    {
        return $this->addProjectDir($this->dbDir);
    }

    public function addProjectDir(string $s): string
    {
        if (!file_exists($s) && !str_starts_with($s, "/")) {
            $s = $this->projectDir . "/$s";
        }
        return $s;
    }

    public function removeProjectDir(string $s): string
    {
        return str_replace($this->projectDir . '/', '', $s);
    }


    public function getSourceFilesDir(?string $pixieCode = null,
                                      ?Config $config = null,
                                      bool    $autoCreate = false,
                                      bool    $throwErrorIfMissing = true,
                                      ?string $dir = null,
                                      ?string $subCode = null
    ): ?string
    {
        assert(!$autoCreate);
        if (!$config) {
            if (!$config = $this->selectConfig($pixieCode)) {
                return null;
            }

        }

        if (!$dir) {
            if (!$dir = $config->getSourceFilesDir()) {
                $dir = $this->dataRoot . "/$pixieCode";
            }
        }
        if ($subCode) {
            $dir .= "/$subCode";
        }

        $dir = $this->addProjectDir($dir);
        if ($autoCreate && !is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        if ($throwErrorIfMissing) {
            assert(file_exists($dir), "Missing source files dir $dir");
        }
        return file_exists($dir) ? realpath($dir) : null;


    }

    #[AsMessageHandler]
    public function handleTransition(PixieTransitionMessage $message)
    {
        $flowName = $message->workflow;
        $transition = $message->transition;
        $kv = $this->getStorageBox($message->pixieCode);
        $row = $kv->get($message->key, $message->table);
        $workflow = $this->workflowHelperService->getWorkflow($row, $flowName);
        if (!$workflow->can($row, $transition)) {
            return; //
        }

        $tableName = $message->table;
        $key = $message->key;
        $workflow = $this->workflowHelperService->getWorkflow($row, $flowName);
        if ($workflow->can($row, $transition)) {
            $marking = $workflow->apply($row, $transition, [
                'kv' => $kv
            ]);
            $context = $marking->getContext();
            $markingString = array_key_first($marking->getPlaces());
            $data = $context['data'] ?? null;
            $mode = $context['mode'] ?? StorageBox::MODE_NOOP;
            $kv->beginTransaction();
            if ($mode !== StorageBox::MODE_NOOP) {
                if ($data) {
                    $data['marking'] = $markingString;
                    //                $row->setMarking($markingString);
                    //                dd($row);
                    //                dd($marking->getPlaces());
                    $x = $kv->set($data, $tableName, key: $key, mode: $mode);
//                    $current = $kv->get($key, $tableName);
                } else {
                    dd($context, $transition, $row);
                }
            } else {
                // update marking for no-op
                $kv->set([
                    'marking' => $markingString,
                ],
                    tableName: $message->table,
                    key: $key, mode: StorageBox::MODE_PATCH);
            }
            $this->logger->info("Transition $transition  $tableName.$key to $markingString");
            $kv->commit();

            // dispatch the FIRST valid next transition
            foreach ($context['nextTransitions'] ?? [] as $transition) {
                if ($workflow->can($row, $transition)) {
                    // apply it? Or dispatch it?  or recursively call this?
                    // since it's been saved (above), we will refetch it when this is recursively called
                    $this->handleTransition(new PixieTransitionMessage(
                        $message->pixieCode,
                        $message->key,
                        $message->table,
                        $transition,
                        $message->workflow
                    ));
//                    $marking = $workflow->apply($row, $transition, [
//                        'kv' => $kv
//                    ]);
//                    dd($marking, $row, $message, $transition);
                } else {
//                    dd($row, $transition, $context);
                }
            }

        } else {
            // no biggie, we can't transition, but the message itself doesn't fail.
            $marking = $row->getMarking();
            $this->logger->info("cannot transition from $marking to $transition");
        }

    }

    public function getCountsByCore(): array
    {
        $countsByCore = $this->pixieEntityManager->getRepository(Row::class)->createQueryBuilder('s')
            ->join('s.core', 'core')
            ->groupBy('core.code')
            ->select(["core.id as coreCode, count(s) as count"])
            ->getQuery()
            ->getArrayResult();
//        dd($countsByCore);
        foreach ($countsByCore as $x) {
            $data[$x['coreCode']] = $x;
        }
        return $data;
    }

    public function populateRecordWithRelations(Row $item, Config $config): Row
    {
        return $item;
        $table = $config->getTables()[$item->getTableName()];
        $properties = $table->getProperties();
        $data = (array)$item->getData();
        foreach ($properties as $property) {
            $propertyName = $property->getCode();
            if (!$relatedTable = $property->getSubType()) {
                continue;
            }
            {
                // get the related item from the PK stored in the item, replace it with the actual record, but without the _id?
                if (!$relatedId = $data[$propertyName] ?? null) {
                    continue;
                }
                // json from sqlite is stored as a string.
                if (is_string($relatedId) && json_validate($relatedId)) {
                    $relatedId = json_decode($relatedId);
                }
                // the subtype table needs to exist!
                if ($config->getTable($property->getSubType())) {
                    // publish these properties as flickr tags, including label and description
//                    if ($property->getCode() == 'classification') {
//                        dd($relatedId, $propertyName, $relatedName, $property);
//                    }
                    if ($relatedId) {
                        // @todo: get many-to-many right, e.g. walters coll
                        if (is_array($relatedId)) {
                            $data[$propertyName] = [];
                            foreach ($relatedId as $code) {
                                // during dev, relations may not be loaded, walters has 4000 creators
                                if ($relatedItem = $kv->get($code, $property->getSubType())) {
//                                    dd($data, $propertyName, $relatedItem);
                                    $data[$propertyName][] = $relatedItem;
//                                        $data[$propertyName][] = $relatedItem->label();
                                } // subtype is related table
                            }
                        } else {
                            assert(!is_iterable($relatedId), json_encode($relatedId));
                            $relatedItem = $kv->get($relatedId, $property->getSubType()); // subtype is related table
                            $relatedName = str_replace('_id', '', $propertyName);
                            // @todo: list or 1-many
                            $data[$relatedName] = $relatedItem;
//                            if ($propertyName == 'classification') dd($data, $relatedName);
                        }
                    }
                }
            }
        }
        // need to be selective about when we save this.
        $item->setData($data);
        return $item;
    }

    public function dbName(string $code, bool $throwErrorIfMissing = false): string
    {
        //dd($this->pixieTemplateUrl);
        $params = $this->pixieEntityManager->getConnection()->getParams();
        //$dbName = str_replace('pixie_template', $code, $params['path']);
        $dbName = str_replace(pathinfo($params['path'], PATHINFO_FILENAME), $code, $params['path']);
        if ($throwErrorIfMissing) {
            assert(file_exists($dbName), $dbName);
        }
        return $dbName;

    }

    public function migrateDatabase(
        Config $config)
    {
        // get the template first (./c d:sch:update --force --em=pixie)
        $pixieConn = $this->pixieEntityManager->getConnection();
        $databasePlatform = $pixieConn->getDatabasePlatform();
        $templateName = $this->dbName('pixie_template', true);
//        $conn->selectDatabase($templateName);
        try {
            $fromSchemaManager = $pixieConn->createSchemaManager();
            $fromSchema = $fromSchemaManager->introspectSchema();
        } catch (\Exception $e) {
            dd($e->getMessage(), $config->getCode());
        }

        //        $conn->selectDatabase($dbName);
        $toDbName = $this->dbName($config->getCode(), false);
//        dd($toDbName, $templateName);
        $schemaTool = new SchemaTool($this->pixieEntityManager);
        // now prep for the new database

        // from doctrine:schema:update
//        $classes = $this->pixieEntityManager->getMetadataFactory()->getAllMetadata();
//        $toSchema   = $schemaTool->getSchemaFromMetadata($classes);
//        $sqls = $schemaTool->getUpdateSchemaSql($classes);
//        dd($sqls);
//        $fromSchema = $schemaTool->createSchemaForComparison($toSchema);
//        return $this->platform->getAlterSchemaSQL($schemaDiff);
        $comparator = $fromSchemaManager->createComparator();
        $ctx = $this->getReference($config->getCode());
//        $this->selectConfig($config->getCode());
        $toConnection = $this->pixieEntityManager->getConnection();
//        $toConnection = DriverManager::getConnection(['path' => $toDbName, 'driver' => 'pdo_sqlite']);
//        $toConnection->selectDatabase($toDbName);
        // https://til.simonwillison.net/sqlite/enabling-wal-mode
        // https://www.powersync.com/blog/sqlite-optimizations-for-ultra-high-performance
        foreach ([
                     'pragma journal_mode = WAL',
                     'pragma synchronous = normal',
                     'pragma journal_size_limit = 6144000'
                 ] as $pragma) {
            $toConnection->executeQuery($pragma);

            // @todo: PRAGMA journal_mode=delete; to turn off, maybe before export or something
        }

        $toSchemaMananger = $toConnection->createSchemaManager();
        $toSchema = $toSchemaMananger->introspectSchema();
//        $fromSchemaManager = $fromConnection->createSchemaManager();
//        $fromSchema = $fromSchemaManager->introspectSchema();

        assert($toSchema !== $fromSchema);
        $schemaDiff = $comparator->compareSchemas($toSchema, $fromSchema);
        $queries = $databasePlatform->getAlterSchemaSQL($schemaDiff);
        foreach ($queries as $query) {
            try {
//            dump(diffSql: $diffSql, q: $queries);
                $toConnection->executeQuery($query);
            } catch (\Exception $exception) {
                dd($exception->getMessage());
                // it already exists.
            }
        }

        // templates?
        $config = StorageBox::fix($config);
        $views = [];
        $actualFields = ['label', 'code', 'id'];
        foreach ($tables = $config->getTables() as $table) {
            $fieldNames = array_map(fn(Property $property) => $property->getCode(),
                iterator_to_array($table->getProperties()));

            $fields = array_map(fn(Property $property) => in_array($property->getCode(), $actualFields)
                ? "row." . $property->getCode()
                : sprintf("json_extract(data, '$.%s') as %s",
                    $property->getCode(),
                    $property->getCode()
                ),
                iterator_to_array($table->getProperties()));
//            foreach ($actualFields as $actualField) {
//                $fieldNames[] = $actualField;
//                $fields[] = $actualField;
//            }

            $view = 'v_' . $table->getName();
            $views[] = "DROP view if exists $view";
//             $x = "select json_extract(_data, '\$.$label') as label from row";
            $views[] = sprintf("CREATE VIEW $view (%s) AS
                SELECT %s
                 from row where core_id = '%s'",
                implode(', ', $fieldNames),
                implode(', ', $fields),
                $table->getName());
//                 from row inner join core on (row.core_id = core.id) where core.id = '%s'",

            foreach ($table->getProperties() as $property) {
            }
        }
        foreach ($views as $view) {
            try {
                $toConnection->executeQuery($view);
            } catch (\Exception $exception) {
                dd($exception->getMessage(), $view);
            }
        }
        return $toConnection;
        $tables = [];
        foreach ($fromSchema->getTables() as $table) {
            $columns = [];
            foreach ($table->getColumns() as $column) {
                $tables[$table->getName()]['columns'][] = $column->getName();
            }
        }
        // @todo: use our Model tables
//        try {
//        } catch (\Exception $exception) {
//            dd($exception, $sourceReferences);
//        }


//        $queries = $schemaDiff->toSql($databasePlatform); // queries to get from one to another schema.

        // now do a diff so we can keep the dbs in sync
//            $diffSql = join(';', $queries);
//            dump(diffSql: $diffSql);
//            $conn->executeQuery($diffSql);
//        try {
//        } catch (\Exception $exception) {
//            // it already exists.
//        }
        $sc = $conn->createSchemaManager();
//        dd($sc->listTables(), $queries);


        $schema = new \Doctrine\DBAL\Schema\Schema();
        $myTable = $schema->createTable("my_table");
        $myTable->addColumn("id", "integer", ["unsigned" => true]);
        $myTable->addColumn("username", "string", ["length" => 32]);
        $myTable->addColumn("age", "integer");
        $myTable->setPrimaryKey(["id"]);
        $myTable->addUniqueIndex(["username"]);
        $myTable->setComment('Some comment');

        $myForeign = $schema->createTable("my_foreign");
        $myForeign->addColumn("id", "integer");
        $myForeign->addColumn("user_id", "integer");
//        $myForeign->addForeignKeyConstraint($myTable, ["user_id"], ["id"], ["onUpdate" => "CASCADE"]);


        $queries = $schema->toSql($conn->getDatabasePlatform()); // get queries to create this schema.

        $schemaManager = $conn->createSchemaManager();
        $comparator = $schemaManager->createComparator();
        $schemaDiff = $comparator->compareSchemas($fromSchema, $schema);

        $databasePlatform = $conn->getDatabasePlatform();
        $diffs = $databasePlatform->getAlterSchemaSQL($schemaDiff);

        $sc->introspectSchema();
        $newSchema = $fromSchemaManager->introspectSchema();
        foreach ($newSchema->getTables() as $table) {
            $columns = [];
            foreach ($table->getColumns() as $column) {
                $tables[$table->getName()]['columns'][] = $column->getName();
            }
        }


        return [$tables, $diffs];

//        foreach ($schemaDiff->toSql($databasePlatform) as $sql) {
//            dump($sql);
//            $conn->executeQuery($sql);
//        }
//        try {
//        } catch (\Exception $exception) {
//            // it already exists.
//        }
//        dd($fromSchema);

    }

}
