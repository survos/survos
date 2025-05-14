<?php

namespace Survos\CodeBundle\Command;

use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\Type;
use Survos\Bundle\MakerBundle\Service\MakerService;
use Survos\CodeBundle\Service\GeneratorService;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\Attribute\Target;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use function Symfony\Component\String\u;

// removed until nullable string options are allowed again
#[AsCommand('survos:make:constructor', 'inject dependencies into a constructor')]
// class must exist before the method.
//
final class MakeConstructor
{
    public function __construct(
        private GeneratorService $generatorService,
        #[Autowire('%kernel.project_dir%')] private string $projectDir,
    )
    {
    }

    public function __invoke(
        SymfonyStyle     $io,
        #[Argument(description: "filename of the EXISTING class, e.g. TestCommand")]
        string $shortClassName,

        #[Argument(description: "initial category, e.g. em")]
        string $category='',

        #[Option(description: 'namespace to use (detect based on name, e.g. TextCommand = App\\Command)', shortcut: 'ns')]
        string $namespace = '',

        #[Option(description: "Overwrite the file if it exists")]
        bool   $force = false
    ): int
    {
        if (!$namespace) {
            $namespace = match (true) {
                str_ends_with($shortClassName, 'Command') => 'App\\Command',
                str_ends_with($shortClassName, 'Controller') => 'App\\Controller',
                default => throw new \Exception("namespace must be explicitly passed.")
            };
        }

        $class = $namespace.'\\'.$shortClassName;

        // fetch the existing dependencies
        $method  = (new \ReflectionClass($class))->getMethod('__construct');
        // really only the ones marked as 'private' are injected in the modern way
        foreach ($method->getParameters() as $name => $param) {
            $io->writeln(sprintf("%s $%s", $param->getType(), $param->getName()));
        }
//        dd($method);

        $categories = new ChoiceQuestion('What type of dependencies do you want to inject?', [
            'em' => 'em/repos',
            'app' => 'application services',
            'workflows' => 'workflows',
            'data' => 'data manipulation (csv, json)',
            '' => "exit"
        ]);

        while ($category || ($category = $io->askQuestion($categories))) {
            $this->$category($io);
            $io->success($category . ' now.');
            $category = null;
        }


        return Command::SUCCESS;
    }
    private function em(SymfonyStyle $io): mixed
    {
        $entityClass = $io->askQuestion(new ChoiceQuestion("please select",
            iterator_to_array($this->generatorService->getRepositories())));
        // of course, it shouldn't be $repo, but rather based on the class name,

        $this->updateConstructor($io, 'repo', $entityClass); //
        $io->warning("@todo: add the entity to the Uses and the repo to the constructor for " . $entityClass);
        return [];
    }

    private function workflows(SymfonyStyle $io): mixed
    {
        $entityClass = $io->askQuestion(new ChoiceQuestion("select a workflow class",
            iterator_to_array($this->generatorService->getWorkflows())));
        $io->warning("@todo: add the #[Target] parameter to the constructor " . $entityClass);
        return [];
    }

    private function updateConstructor(SymfonyStyle $io, string $var, string $type): mixed
    {
        //
        $method = new Method('__construct');

        $parameter = $method->addPromotedParameter($var, null);
        $parameter->setVisibility('private');
        $parameter->setType($type);
        // for workflow only.
//        $parameter->addAttribute(Target::class, []);
        $io->writeln((string)$method);
        return $method;

    }

    private function askEntities(): array
    {
        return $this->generatorService->getAllDoctrineEntitiesFqcn();
    }



}
