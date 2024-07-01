<?php

namespace Survos\Bundle\MakerBundle\Maker;

use Knp\Menu\ItemInterface;
use Survos\BootstrapBundle\Event\KnpMenuEvent;
use Survos\BootstrapBundle\Menu\MenuBuilder;
use Survos\BootstrapBundle\Service\MenuService;
use Survos\BootstrapBundle\Traits\KnpMenuHelperInterface;
use Survos\BootstrapBundle\Traits\KnpMenuHelperTrait;
use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\Maker\AbstractMaker;
use Symfony\Bundle\MakerBundle\MakerInterface;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Bundle\MakerBundle\Util\UseStatementGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Twig\Extension\AbstractExtension;

final class MakeMenu extends AbstractMaker implements MakerInterface
{
    public function __construct(
        private Generator $generator,
        private RouterInterface $router,
        private string $templatePath
    ) {
    }

    public static function getCommandDescription(): string
    {
        return 'Generate a Menu listener';
    }

    public static function getCommandName(): string
    {
        return 'survos:make:menu';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig)
    {
        $command
            ->addArgument('menuClassName', InputArgument::OPTIONAL, 'Menu Class Name', '')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Overwrite if it already exists.')
            ->addOption('fake', null, InputOption::VALUE_NONE, 'Create fake links')
            ->addOption('mode', null, InputOption::VALUE_REQUIRED, 'empty (no items), fake (a few example items)', 'fake')
        ;
    }

    public function interact(InputInterface $input, ConsoleStyle $io, Command $command): void
    {
        $io->success('Add component("menu") to a twig file to render.');
    }

    public function configureDependencies(DependencyBuilder $dependencies): void
    {
        $dependencies->addClassDependency(
            AbstractExtension::class,
            'twig'
        );
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator)
    {
        $shortName = $input->getArgument('menuClassName');
        $classNameDetails = $generator->createClassNameDetails(
            $shortName,
            'EventListener\\',
            'MenuEventListener'
        );

        $useStatements = new UseStatementGenerator([
            EventSubscriberInterface::class,
            KnpMenuHelperTrait::class,
            ItemInterface::class,
            MenuBuilder::class,
            KnpMenuEvent::class,
            Autowire::class,
            AsEventListener::class,
            Security::class,
            MenuService::class,
            KnpMenuHelperInterface::class,
            OptionsResolver::class,
            AuthorizationCheckerInterface::class,
        ]);

        foreach ($this->router->getRouteCollection() as $routeName => $route) {
            //
//            dd($routeName, $route);
        }

        $generatedFilename = $this->generator->generateClass(
            $classNameDetails->getFullName(),
            __DIR__ . '/../../templates/skeleton/Menu/MenuEventListener.tpl.twig',
            $v = [
                'entity_full_class_name' => $classNameDetails->getFullName(),
                'fake' => $input->getOption('fake'),
                'use_statements' => $useStatements,
            ]
        );

        //        unlink($generatedFilename); // we need a --force flag
        $generator->writeChanges();
        //        print file_get_contents($generatedFilename);

        $this->writeSuccessMessage($io);

        $io->text([
            'Next: Open your new menu class and start customizing it.',
        ]);
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement @method string getCommandDescription()
    }
}
