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

/* @SurvosMaker/skeleton/Menu/InvokableCommand.tpl.twig */
class __TwigTemplate_b78cc9b4ccc861cc65c4a4ee994d648d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Menu/InvokableCommand.tpl.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Menu/InvokableCommand.tpl.twig"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?= \$use_statements; ?>

#[AsCommand('<?= \$commandName ?>', '<?= \$commandDescription ?>')]
final class <?= \$class_name ?> extends InvokableServiceCommand<?= \"\\n\" ?>
{
use ConfigureWithAttributes, RunsCommands, RunsProcesses;

public function __invoke(
IO \$io,

// custom injections
// UserRepository \$repo,

// expand the arguments and options
<?php foreach (\$args as \$argName=>\$arg) { ?>
#[Argument(description: '<?= \$arg['description'] ?><?= \$arg['default'] ? sprintf(\", default:%s\", \$arg['default']) : '' ?>')]
<?= \$arg['phpType'] ?> \$<?= \$argName ?>,
<?php } ?>

<?php foreach (\$options as \$optionName=>\$option) { ?>
#[Option(description:'<?= \$option['description'] ?>'<?= \$option['shortCut'] ? sprintf(\", shortcut:'%s'\", \$option['shortCut']) : '' ?>)]
<?= \$option['phpType'] ?> \$<?= \$optionName ?> <?= \$option['default'] ? sprintf(\"=%s\", \$option['default']) : '' ?>,
<?php } ?>

): void {

\$io->success('<?= \$commandName ?> success.');
}

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/Menu/InvokableCommand.tpl.twig";
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

#[AsCommand('<?= \$commandName ?>', '<?= \$commandDescription ?>')]
final class <?= \$class_name ?> extends InvokableServiceCommand<?= \"\\n\" ?>
{
use ConfigureWithAttributes, RunsCommands, RunsProcesses;

public function __invoke(
IO \$io,

// custom injections
// UserRepository \$repo,

// expand the arguments and options
<?php foreach (\$args as \$argName=>\$arg) { ?>
#[Argument(description: '<?= \$arg['description'] ?><?= \$arg['default'] ? sprintf(\", default:%s\", \$arg['default']) : '' ?>')]
<?= \$arg['phpType'] ?> \$<?= \$argName ?>,
<?php } ?>

<?php foreach (\$options as \$optionName=>\$option) { ?>
#[Option(description:'<?= \$option['description'] ?>'<?= \$option['shortCut'] ? sprintf(\", shortcut:'%s'\", \$option['shortCut']) : '' ?>)]
<?= \$option['phpType'] ?> \$<?= \$optionName ?> <?= \$option['default'] ? sprintf(\"=%s\", \$option['default']) : '' ?>,
<?php } ?>

): void {

\$io->success('<?= \$commandName ?> success.');
}

}
", "@SurvosMaker/skeleton/Menu/InvokableCommand.tpl.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/Menu/InvokableCommand.tpl.twig");
    }
}
