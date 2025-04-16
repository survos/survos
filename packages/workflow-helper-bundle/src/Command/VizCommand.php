<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Survos\WorkflowBundle\Command;

use Roave\BetterReflection\BetterReflection;
use Roave\BetterReflection\Reflection\ReflectionMethod;
use Survos\WorkflowBundle\Service\SurvosGraphVizDumper;
use Survos\WorkflowBundle\Service\SurvosStateMachineGraphVizDumper;
use Survos\WorkflowBundle\Service\WorkflowHelperService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Completion\CompletionInput;
use Symfony\Component\Console\Completion\CompletionSuggestions;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Symfony\Component\Workflow\Dumper\GraphvizDumper;
use Symfony\Component\Workflow\Dumper\MermaidDumper;
use Symfony\Component\Workflow\Dumper\PlantUmlDumper;
use Symfony\Component\Workflow\Dumper\StateMachineGraphvizDumper;
use Symfony\Component\Workflow\Marking;
use Symfony\Component\Workflow\StateMachine;
use Symfony\Component\Workflow\WorkflowInterface;
use Twig\Environment;
use function Symfony\Component\String\s;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @final
 */
#[AsCommand(name: 'survos:workflow:viz', description: 'Vizualize a workflow')]
class VizCommand extends Command
{
    private const DUMP_FORMAT_OPTIONS = [
        'puml',
        'mermaid',
        'dot',
    ];

    public function __construct(
        /** @var WorkflowInterface[] */
        private iterable                                                         $workflows,
        #[Autowire('%kernel.project_dir%')] private ?string                       $projectDir,
        private Environment $twig,
private WorkflowHelperService $workflowHelper,
//        private ServiceLocator $workflows,
//        #[AutowireIterator('%kernel.event_listener%')] private readonly iterable $messageHandlers

    )
    {
        parent::__construct();
    }


    protected function configure(): void
    {
        $this
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'A workflow name'),
                new InputArgument('marking', InputArgument::IS_ARRAY, 'A marking (a list of places)'),
                new InputOption('label', 'l', InputOption::VALUE_REQUIRED, 'Label a graph'),
                new InputOption('with-metadata', null, InputOption::VALUE_NONE, 'Include the workflow\'s metadata in the dumped graph', null),
                new InputOption('dump-format', null, InputOption::VALUE_REQUIRED, 'The dump format [' . implode('|', self::DUMP_FORMAT_OPTIONS) . ']', 'dot'),
            ])
            ->setHelp(<<<'EOF'
The <info>%command.name%</info> command dumps the graphical representation of a
workflow in different formats

<info>DOT</info>:  %command.full_name% <workflow name> | dot -Tpng > workflow.png
<info>PUML</info>: %command.full_name% <workflow name> --dump-format=puml | java -jar plantuml.jar -p > workflow.png
<info>MERMAID</info>: %command.full_name% <workflow name> --dump-format=mermaid | mmdc -o workflow.svg
EOF
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $eventFilename = 'var/cache/workflow-events.json';
        assert(file_exists($eventFilename), "$eventFilename does not exist, run bin/console debug:event --format=json workflow > var/cache/workflow-events.json");
        $events = json_decode(file_get_contents($eventFilename), false, 512, JSON_THROW_ON_ERROR);
        $ee = [];
        foreach ($this->workflows as $workflow) {
//            $this->workflowHelper->workflowDiagram();
        }
        foreach ($events as $code => $event) {
            $parts = explode('.', str_replace('workflow.', '', $code));
            $workflowName = array_shift($parts);
            $action = array_shift($parts);
            $transition = array_shift($parts);
//            dd(wf: $workflowName, action: $action, transition: $transition);//, $parts, $code);


            foreach ($event as $e) {
                $reflectionMethod = new \ReflectionMethod($e->class, $e->name);

                $classInfo = (new BetterReflection())
                    ->reflector()
                    ->reflectClass($e->class);
                $method = $classInfo->getMethod($e->name);
//                $source = $method->getLocatedSource()->getSource();
                $source = explode("\n", $classInfo->getLocatedSource()->getSource());
                $methodSource = array_slice($source, $method->getStartLine(), $method->getEndLine() - $method->getStartLine());

//                dd($e->class, $source, $classInfo, $method, $reflectionMethod);
//                $m = ReflectionMethod::createFromName(MediaWorkflow::class, $e->name);
//                $m = ReflectionMethod::createFromName($e->class, $e->name);
                $reflectionClass = new \ReflectionClass($e->class);
                $fn = str_replace($this->projectDir, 'blob/main', $reflectionClass->getFileName());
                $ee[$workflowName][$action][$transition][] = [
                    'file' => $classInfo->getFileName(),
//                    'lines' => $e->extra['line'],
                    'link' => sprintf('%s#L%d-%d', $fn, $reflectionMethod->getStartLine(), $reflectionMethod->getEndLine()),
                    'source' => join("\n", array_slice($methodSource, 0, 8))
                ];

            }
        }

        foreach ($ee as $wf=>$events) {
            $md = $this->twig->render('@SurvosWorkflow/md/workflows.html.twig', [
                'events' => $events,
                'workflowName' => $wf,
            ]);
            file_put_contents(sprintf('doc/%s.md', $wf), $md);
            dump($md);
        }

        return self::SUCCESS;

        dd($events);

//        foreach ($this->messageHandlers as $messageHandler) {
//            dd($messageHandler);
//        }

        $workflowName = $input->getArgument('name');
        foreach ($this->workflows as $workflow) {
            if ($workflowName && ($w->getName() !== $workflowName)) {
                continue;
            }
            $type = $workflow instanceof StateMachine ? 'state_machine' : 'workflow';
            $definition = $workflow->getDefinition();

            switch ($input->getOption('dump-format')) {
                case 'puml':
                    $transitionType = 'workflow' === $type ? PlantUmlDumper::WORKFLOW_TRANSITION : PlantUmlDumper::STATEMACHINE_TRANSITION;
                    $dumper = new PlantUmlDumper($transitionType);
                    break;

                case 'mermaid':
                    $transitionType = 'workflow' === $type ? MermaidDumper::TRANSITION_TYPE_WORKFLOW : MermaidDumper::TRANSITION_TYPE_STATEMACHINE;
                    $dumper = new MermaidDumper($transitionType);
                    break;

                case 'dot':
                default:
                    $dumper = new SurvosGraphVizDumper();
            }

            $marking = new Marking();

            foreach ($input->getArgument('marking') as $place) {
                $marking->mark($place);
            }

            $options = [
                'name' => $workflowName,
                'with-metadata' => $input->getOption('with-metadata'),
                'nofooter' => true,
                'label' => $input->getOption('label'),
            ];
            $output->writeln($dumper->dump($definition, $marking, $options));

            // now run dot and create the svg
        }

        return 0;
    }

    public function complete(CompletionInput $input, CompletionSuggestions $suggestions): void
    {
        if ($input->mustSuggestArgumentValuesFor('name')) {
            $suggestions->suggestValues(array_keys($this->workflows->getProvidedServices()));
        }

        if ($input->mustSuggestOptionValuesFor('dump-format')) {
            $suggestions->suggestValues(self::DUMP_FORMAT_OPTIONS);
        }
    }
}
