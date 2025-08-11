<?php

namespace Survos\WorkflowBundle\Command;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Survos\CoreBundle\Traits\QueryBuilderHelperInterface;
use Survos\WorkflowBundle\Event\RowEvent;
use Survos\WorkflowBundle\Message\TransitionMessage;
use Survos\WorkflowBundle\Service\WorkflowHelperService;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\TransportNamesStamp;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Workflow\Transition;
use Symfony\Component\Workflow\WorkflowInterface;
use Zenstruck\Alias;
use Zenstruck\Messenger\Monitor\Stamp\DescriptionStamp;
use Zenstruck\Messenger\Monitor\Stamp\TagStamp;

#[AsCommand('workflow:iterate', 'Iterate a Doctrine entity and dispatch workflow transitions.', aliases: ['iterate'])]
final class IterateCommand extends Command
{
    public function __construct(
        private LoggerInterface $logger,
        private WorkflowHelperService $workflowHelperService,
        private EventDispatcherInterface $eventDispatcher,
        private MessageBusInterface $bus,
        private EntityManagerInterface $entityManager,
        private ManagerRegistry $doctrine,
        private PropertyAccessorInterface $propertyAccessor,
        #[Autowire('%env(DEFAULT_TRANSPORT)%')] private ?string $defaultTransport = null,
    ) {
        parent::__construct();
    }

    public function __invoke(
        SymfonyStyle $io,

        // ARGUMENTS — description first
        #[Argument('FQCN or short name of the Doctrine entity')] ?string $className = null,

        // OPTIONS — description first, then shortcut (single char)
        #[Option('Messenger transport name', 'p')] ?string $transport = null,
        #[Option('Workflow transition name', 't')] ?string $transition = null,
        #[Option('Comma-separated marking(s) to filter', 'm')] ?string $marking = null,
        #[Option('Workflow name/code if multiple on class', 'w')] ?string $workflowName = null,
        #[Option('Comma-separated tags for listeners', 'g')] string $tags = '',
        #[Option('Comma-separated property paths to dump for each row', 'd')] string $dump = '',
        #[Option('grid:index after flush?')] ?bool $indexAfterFlush = null,
        #[Option('Show counts per marking and exit', 's')] ?bool $stats = null,
        #[Option('Process at most this many items', 'x')] int $max = 0,
        #[Option('[deprecated] Use --max instead')] int $limit = 0,
        #[Option('Use this count for progress bar', 'c')] int $count = 0,
    ): int {
        // --limit shim
        if ($limit) {
            $io->warning('--limit is deprecated; use --max.');
            $max = $limit;
        }

        // Resolve/select entity class
        $doctrineEntitiesFqcn = $this->getAllDoctrineEntitiesFqcn();
        if (!$doctrineEntitiesFqcn) {
            $io->error('No Doctrine entities found. Create some first, then run again.');
            return Command::FAILURE;
        }

        if (!$className) {
            $className = $io->choice('Which Doctrine entity are you going to iterate?', array_values($doctrineEntitiesFqcn));
        } else {
            if (isset($doctrineEntitiesFqcn[$className])) {
                $className = $doctrineEntitiesFqcn[$className];
            }
            if (!class_exists($className) && class_exists('App\\Entity\\' . $className)) {
                $className = 'App\\Entity\\' . $className;
            }
            if (!class_exists($className) && class_exists(Alias::class)) {
                $className = Alias::classFor($className);
            }
        }

        if (!class_exists($className)) {
            $io->error("Entity class not found: {$className}");
            return Command::FAILURE;
        }

        /** @var QueryBuilderHelperInterface $repo */
        $repo = $this->entityManager->getRepository($className);

        // Determine workflow (if any) for this class
        $workflow = null;
        $availableTransitions = [];

        $grouped = $this->workflowHelperService->getWorkflowsGroupedByClass();
        if (isset($grouped[$className][0])) {
            $workflowName ??= $grouped[$className][0];
            $workflow = $this->workflowHelperService->getWorkflowByCode($workflowName);

            // Build from->transitions map and list of places
            $places = array_values($workflow->getDefinition()->getPlaces());
            foreach ($workflow->getDefinition()->getTransitions() as $t) {
                foreach ($t->getFroms() as $from) {
                    $availableTransitions[$from][] = $t;
                }
            }

            if ($stats) {
                $this->showStats($io, $className, $availableTransitions, $workflow);
                return Command::SUCCESS;
            }

            // Pick marking(s)
            if ($marking) {
                $selected = array_values(array_filter(array_map('trim', explode(',', $marking))));
                foreach ($selected as $m) {
                    if (!in_array($m, $places, true)) {
                        $io->error("Invalid marking: {$m}\nValid markings are:\n - " . implode("\n - ", $places));
                        return Command::FAILURE;
                    }
                }
            } else {
                $question = new ChoiceQuestion('From which marking?', $places);
                $marking = $io->askQuestion($question);
            }

            // Pick transition (if not provided)
            $transitions = [];
            foreach (
