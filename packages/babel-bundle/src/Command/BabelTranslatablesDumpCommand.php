<?php
declare(strict_types=1);

namespace Survos\BabelBundle\Command;

use Survos\BabelBundle\Service\TranslationStore;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('babel:translatables:dump', 'Dump the translatable index produced by the compiler pass')]
final class BabelTranslatablesDumpCommand
{
    public function __construct(private readonly TranslationStore $store) {}

    public function __invoke(SymfonyStyle $io): int
    {
        $rp = new \ReflectionProperty($this->store, 'translatableIndex');
        $rp->setAccessible(true);
        /** @var array<string, array> $index */
        $index = $rp->getValue($this->store);

        if (!$index) {
            $io->warning('Index is empty. Try: bin/console cache:clear');
            return 0;
        }

        foreach ($index as $class => $cfg) {
            $io->section($class);
            $io->definitionList(
                ['localeProp' => $cfg['localeProp'] ?? '(none)'],
                ['hasTCodes' => !empty($cfg['hasTCodes']) ? 'yes' : 'no'],
                ['needsHooks' => !empty($cfg['needsHooks']) ? 'YES' : 'no']
            );
            $fields = array_keys($cfg['fields'] ?? []);
            $io->writeln('Fields: ' . ($fields ? implode(', ', $fields) : '(none)'));
            if (!empty($cfg['fieldsNeedingHooks'])) {
                $io->writeln('Fields needing hooks: ' . implode(', ', (array)$cfg['fieldsNeedingHooks']));
            }
            $io->newLine();
        }
        return 0;
    }
}
