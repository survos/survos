<?php

namespace Survos\GridGroupBundle\Tests;

use League\Csv\Reader;
use PHPUnit\Framework\TestCase;
use Survos\GridGroupBundle\CsvSchema\Parser;
use Symfony\Component\Yaml\Yaml;

use function PHPUnit\Framework\assertEquals;

class ParserTest extends TestCase
{
    /**
     * @dataProvider csvTests
     */
    public function testParser(array $test)
    {
        $data = $test['source'] ?? null;
        $csvString = $test['source'];
        $csvReader = Reader::createFromString($csvString)->setHeaderOffset(0);
        $schema = Parser::createSchemaFromMap($test['map']??[], $csvReader->getHeader());

        $parser = new Parser([
            'schema' => $schema
        ]);

        $expectsJson = $test['expects'] ?? null;

        foreach ($parser->fromString($data) as $actual) {
            $expects = json_decode($expectsJson, true);
            assert($expects, "invalid json string: " . $expectsJson);
            $this->assertSame($expects, $actual);
            assert($expects, "invalid json: " . $test['expects']);
        }
    }

    public static function csvTests()
    {
        $data = Yaml::parseFile(__DIR__ . '/parser-test.yaml');
        foreach ($data['tests'] as $key => $test) {
            yield [$key => $test];
        }
    }
}
