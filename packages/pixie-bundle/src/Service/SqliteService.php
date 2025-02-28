<?php

/**
 * This is the basis of a migration tool, as it compares the existing database to some schema.
 *
 *
 */
declare(strict_types=1);


namespace Survos\PixieBundle\Service;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\Persistence\ManagerRegistry;
use \PDO;
use Survos\PixieBundle\Model\Config;
use Survos\PixieBundle\StorageBox;
use Survos\PixieBundle\Model\Property;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class SqliteService
{
    public function __construct(
        private EntityManagerInterface $pixieEntityManager,
        private readonly ManagerRegistry $managerRegistry,
        #[Autowire('%kernel.project_dir%')] private string $projectDir,
        #[Autowire('%env(DATABASE_PIXIE_URL)%')] private readonly string $pixieTemplateFilename
    )
    {
    }

    public function dbName(string $code, bool $throwErrorIfMissing=true): string
    {
        $params = $this->pixieEntityManager->getConnection()->getParams();
        $dbName = str_replace('pixie_template', $code, $params['path']);
        if ($throwErrorIfMissing) {
            assert(file_exists($dbName), $dbName);
        }
        return $dbName;


        $path = pathinfo($params['path'], PATHINFO_DIRNAME);
        $withoutRoot = str_replace($this->projectDir, '', $path);

        $dbName = $this->projectDir  . $withoutRoot . '/' . $code . '.db';
//        dd($path, $dbName, $code);
//        dump($dbName, $this->pixieTemplateFilename);
//        $fullDbName = $this->projectDir . '/' . pathinfo($dbName, PATHINFO_BASENAME);

//        assert(!str_contains($code, '.db'), $code);
//        return $code . '.db';
    }

    public function getPixieEntityManager(string $code): EntityManagerInterface
    {
        $conn = $this->pixieEntityManager->getConnection();
        $params = $conn->getParams();
        $conn->selectDatabase($this->dbName($code));
        return $this->pixieEntityManager;
    }

    public function migrateDatabase(
//        string $dbName,
        Config $config)
    {
        // get the template first (./c d:sch:update --force --em=pixie)
        $conn = $this->pixieEntityManager->getConnection();

        $fromSchemaManager = $conn->createSchemaManager();
        $fromSchema = $fromSchemaManager->introspectSchema();

        //        $conn->selectDatabase($dbName);
        $toDbName = $this->dbName($config->code, false);
        $schemaTool = new SchemaTool($this->pixieEntityManager);
        // now prep for the new database
//        $em = $this->getPixieEntityManager($config->code);

        // from doctrine:schema:update
//        $classes = $this->pixieEntityManager->getMetadataFactory()->getAllMetadata();
//        $toSchema   = $schemaTool->getSchemaFromMetadata($classes);
//        $sqls = $schemaTool->getUpdateSchemaSql($classes);

//        dd($sqls);
//        $fromSchema = $schemaTool->createSchemaForComparison($toSchema);
//        return $this->platform->getAlterSchemaSQL($schemaDiff);

        $toConnection = DriverManager::getConnection( ['path' => $toDbName, 'driver' => 'pdo_sqlite'] );
        $toSchemaMananger = $toConnection->createSchemaManager();
        $toSchema = $toSchemaMananger->introspectSchema();
//        $fromSchemaManager = $fromConnection->createSchemaManager();
//        $fromSchema = $fromSchemaManager->introspectSchema();

        $comparator = $fromSchemaManager->createComparator();
        $schemaDiff = $comparator->compareSchemas( $toSchema, $fromSchema);
        $myPlatform = $conn->getDatabasePlatform();
        $queries = $myPlatform->getAlterSchemaSQL($schemaDiff);
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
        foreach ($tables = $config->getTables() as $table) {
            $fieldNames = array_map(fn(Property $property) => $property->getCode(),
                iterator_to_array($table->getProperties()));

            $fields = array_map(fn(Property $property) =>
            sprintf("json_extract(data, '$.%s') as %s",
                $property->getCode(),
                $property->getCode()
            ),
                iterator_to_array($table->getProperties()));

            $view = 'v_' . $table->getName();
            $views[] = "DROP view if exists $view";
//             $x = "select json_extract(_data, '\$.$label') as label from row";
            $views[] = sprintf("CREATE VIEW $view (%s) AS
                SELECT %s
                 from row where core_id = '%s'",
                implode(', ', $fieldNames),
                implode(', ', $fields),
                $table->getName())
            ;

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

//        dd($schemaDiff, $schemaDiff->isEmpty());
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


//        $queries = $schemaDiff->toSql($myPlatform); // queries to get from one to another schema.

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

        $myPlatform = $conn->getDatabasePlatform();
        $diffs = $myPlatform->getAlterSchemaSQL($schemaDiff);

        $sc->introspectSchema();
        $newSchema = $fromSchemaManager->introspectSchema();
        foreach ($newSchema->getTables() as $table) {
            $columns = [];
            foreach ($table->getColumns() as $column) {
                $tables[$table->getName()]['columns'][] = $column->getName();
            }
        }


        return [$tables, $diffs];

//        foreach ($schemaDiff->toSql($myPlatform) as $sql) {
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
