<?php

namespace Survos\CommandBundle\Tests;

use Survos\CommandBundle\Command\DumpTranslationsCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class DumpTranslationsCommandTest extends KernelTestCase
{
    public function testExecute()
    {
        $kernel = self::bootKernel();

        $application = new Application($kernel);
        $application->add(new DumpTranslationsCommand($kernel, ['survos']));

        $command = $application->find('survos:command:dump-as-messages');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            '--namespace' => 'app'
        ]);

        $commandTester->assertCommandIsSuccessful();
    }
}
