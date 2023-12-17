<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SurvosMaker/skeleton/bundle/src/Bundle.tpl.php */
class __TwigTemplate_5ecf2c7c7808de5ce22fb8de7668020b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/bundle/src/Bundle.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/bundle/src/Bundle.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?= \$use_statements; ?>


class <?= \$class_name ?> extends AbstractBundle
{
    public function loadExtension(array \$config, ContainerConfigurator \$container, ContainerBuilder \$builder): void
    {
        // \$builder->setParameter('survos_workflow.direction', \$config['direction']);

        // twig classes

/*
\$definition = \$builder
->autowire('survos.barcode_twig', BarcodeTwigExtension::class)
->addTag('twig.extension');

\$definition->setArgument('\$widthFactor', \$config['widthFactor']);
\$definition->setArgument('\$height', \$config['height']);
\$definition->setArgument('\$foregroundColor', \$config['foregroundColor']);
*/

    }

    public function configure(DefinitionConfigurator \$definition): void
    {
        \$definition->rootNode()
            ->children()
            ->scalarNode('direction')->defaultValue('LR')->end()
            ->scalarNode('base_layout')->defaultValue('base.html.twig')->end()
            ->arrayNode('entities')
            ->scalarPrototype()
            ->end()->end()
            ->booleanNode('enabled')->defaultTrue()->end()
//            ->integerNode('min_sunshine')->defaultValue(3)->end()
            ->end();
    }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/bundle/src/Bundle.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?= \$use_statements; ?>


class <?= \$class_name ?> extends AbstractBundle
{
    public function loadExtension(array \$config, ContainerConfigurator \$container, ContainerBuilder \$builder): void
    {
        // \$builder->setParameter('survos_workflow.direction', \$config['direction']);

        // twig classes

/*
\$definition = \$builder
->autowire('survos.barcode_twig', BarcodeTwigExtension::class)
->addTag('twig.extension');

\$definition->setArgument('\$widthFactor', \$config['widthFactor']);
\$definition->setArgument('\$height', \$config['height']);
\$definition->setArgument('\$foregroundColor', \$config['foregroundColor']);
*/

    }

    public function configure(DefinitionConfigurator \$definition): void
    {
        \$definition->rootNode()
            ->children()
            ->scalarNode('direction')->defaultValue('LR')->end()
            ->scalarNode('base_layout')->defaultValue('base.html.twig')->end()
            ->arrayNode('entities')
            ->scalarPrototype()
            ->end()->end()
            ->booleanNode('enabled')->defaultTrue()->end()
//            ->integerNode('min_sunshine')->defaultValue(3)->end()
            ->end();
    }

}
", "@SurvosMaker/skeleton/bundle/src/Bundle.tpl.php", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/bundle/src/Bundle.tpl.php");
    }
}
