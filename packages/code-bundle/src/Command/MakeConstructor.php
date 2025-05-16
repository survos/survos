<?php

namespace Survos\CodeBundle\Command;

use Nette\PhpGenerator\ClassType;
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

use PhpParser\ParserFactory;
use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter\Standard;
use PhpParser\Node;
use PhpParser\Node\Param;

use PhpParser\Node\Stmt\Class_;

use PhpParser\NodeTraverser;
use PhpParser\NodeVisitorAbstract;

use PhpParser\Error;
use PhpParser\Node\Name;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Expr\PropertyFetch;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\Use_;
use PhpParser\Node\Stmt\UseUse;

// removed until nullable string options are allowed again
#[AsCommand('survos:make:constructor', 'inject dependencies into a constructor')]
// class must exist before the method.
//
final class MakeConstructor
{
    private PhpNamespace $phpNamespace;
    private ClassType $phpClass;
    private Method $constructorMethod;
    //filename
    private string $filename;
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
        $this->phpNamespace = new PhpNamespace($namespace);

        $class = $namespace.'\\'.$shortClassName;

        $path = $this->generatorService->namespaceToPath($namespace, $this->projectDir);
         
        
        $filename = $path . '/' . $shortClassName . '.php';
        $this->filename = $filename;
        // foreach (explode(':', $filename) as $part) {
        //     $filename .= u($part)->title();
        // }
        //$filename .= '.php';
        //dd($path,$class,$shortClassName,$filename);
        assert(file_exists($filename), "File $filename does not exist");
        //dd($filename);

       
    
//        $this->phpClass = $this->phpNamespace->addClass($class);
//        $this->constructorMethod = $this->phpClass->addMethod('__construct');

        // fetch the existing dependencies
        $method  = (new \ReflectionClass($class))->getMethod('__construct');
        // really only the ones marked as 'private' are injected in the modern way
        foreach ($method->getParameters() as $name => $param) {
            $io->writeln(sprintf("%s $%s", $param->getType(), $param->getName()));
        }
        
        //dd($method);

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

        $this->updateConstructorFile($io, 'repo', $entityClass); //
        // $io->warning("@todo: add the entity to the Uses and the repo to the constructor for " . $entityClass);
        return [];
    }

    private function updateConstructorFile(SymfonyStyle $io, string $var, string $type): mixed
    {
        $code = file_get_contents($this->filename);
        $parser = (new ParserFactory)->createForNewestSupportedVersion();
        $ast = $parser->parse($code);
        $factory = new BuilderFactory();

        $printer = new Standard();
        
        //$injectedVar = 'logger';
        $injectedVar = $var;
        //$injectedType = 'Psr\Log\LoggerInterface';
        $injectedType = $type;
        //$shortType = 'LoggerInterface'; // used in type hint, use() will handle import
        $shortType = (new \ReflectionClass($type))->getShortName();

        $traverser = new NodeTraverser();

        // 1. Add the constructor parameter if it doesn't exist
        $traverser->addVisitor(new class($injectedVar, $shortType) extends NodeVisitorAbstract {
            private string $var;
            private string $type;

            public function __construct(string $var, string $type)
            {
                $this->var = $var;
                $this->type = $type;
            }

            public function enterNode(Node $node)
            {
                if (!$node instanceof Class_) {
                    return null;
                }

                foreach ($node->getMethods() as $method) {
                    if ($method->name->toString() === '__construct') {
                        foreach ($method->params as $param) {
                            if ($param->var->name === $this->var) {
                                return null; // already injected
                            }
                        }

                        // Inject parameter
                        $method->params[] = new Param(
                            var: new Variable($this->var),
                            type: new Name($this->type),
                            flags: Class_::MODIFIER_PRIVATE | Class_::MODIFIER_READONLY
                        );

                        return null;
                    }
                }

                // If no constructor exists, create one
                $constructor = new Node\Stmt\ClassMethod('__construct', [
                    'flags' => Class_::MODIFIER_PUBLIC,
                    'params' => [
                        new Param(
                            var: new Variable($this->var),
                            type: new Name($this->type),
                            flags: Class_::MODIFIER_PRIVATE | Class_::MODIFIER_READONLY
                        ),
                    ],
                    'stmts' => [],
                ]);

                $node->stmts[] = $constructor;

                return null;
            }
        });

        // 2. Add the use statement if missing
        $traverser->addVisitor(new class($injectedType) extends NodeVisitorAbstract {
            private string $fqcn;
            private bool $alreadyUsed = false;

            public function __construct(string $fqcn)
            {
                $this->fqcn = $fqcn;
            }

            public function enterNode(Node $node)
            {
                if ($node instanceof Use_) {
                    foreach ($node->uses as $use) {
                        if ($use->name->toString() === $this->fqcn) {
                            $this->alreadyUsed = true;
                        }
                    }
                }
            }

            public function afterTraverse(array $nodes): ?array
            {
                if ($this->alreadyUsed) {
                    return null;
                }

                $useStmt = new Use_([
                    new UseUse(new Name($this->fqcn))
                ]);

                foreach ($nodes as $node) {
                    if ($node instanceof Node\Stmt\Namespace_) {
                        array_unshift($node->stmts, $useStmt);
                        return $nodes;
                    }
                }

                array_unshift($nodes, $useStmt);
                return $nodes;
            }
        });

        $modifiedAst = $traverser->traverse($ast);
        $printer = new Standard();
        $newCode = $printer->prettyPrintFile($modifiedAst);

        file_put_contents($this->filename,$newCode);

        return $newCode;
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

        $this->phpNamespace->addUse($type);
        // we have the namespace already, we just want to update the constructor and add the type to $use
        //
        $method = new Method('__construct');

        //dd($var);

        $parameter = $method->addPromotedParameter($var, null);
        $parameter->setVisibility('private');
        $parameter->setType($type);
//        $this->phpClass->addMethod($method);
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
