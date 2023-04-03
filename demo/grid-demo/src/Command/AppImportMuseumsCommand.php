<?php

namespace App\Command;

use App\Service\ImportService;
use Symfony\Component\Console\Attribute\AsCommand;
use Zenstruck\Console\Attribute\Argument;
use Zenstruck\Console\Attribute\Option;
use Zenstruck\Console\ConfigureWithAttributes;
use Zenstruck\Console\IO;
use Zenstruck\Console\InvokableServiceCommand;
use Zenstruck\Console\RunsCommands;
use Zenstruck\Console\RunsProcesses;

#[AsCommand('app:import-museums', '')]
final class AppImportMuseumsCommand extends InvokableServiceCommand
{
    use ConfigureWithAttributes, RunsCommands, RunsProcesses;

    public function __invoke(
        IO  $io,
        ImportService $importService,
        #[Argument(description: '(int)')]
        int $limit = 5,


    ): void
    {
        $importService->importMuseums($limit);

        $io->success('app:import-museums success.');
    }

}
