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

/* @SurvosMaker/skeleton/Workflow/config/_workflow.tpl.php */
class __TwigTemplate_efd3bd85caaba3ed43e6cd90dd68ff5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Workflow/config/_workflow.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Workflow/config/_workflow.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

use function Symfony\\Component\\String\\u;
use Symfony\\Config\\FrameworkConfig;

use <?= \$entity_full_class_name ?>;


<?php \$initialPlace = \$places[0]; ?>
return static function (FrameworkConfig \$framework) {
    \$tracking = \$framework->workflows()->workflows('<?= strtolower(\$entityName) ?>');
    \$tracking
        ->type('state_machine') // or 'state_machine'
        ->supports([<?= \$entityName ?>::class])
        ->initialMarking([<?= \$entityName ?>::<?= \$initialPlace ?>]);

    \$tracking->auditTrail()->enabled(true);
    \$tracking->markingStore()
        ->type('method')
        ->property('marking');

    <?php foreach (\$places as \$place) { ?>
        \$tracking->place()->name(<?= \$entityName ?>::<?= \$place ?>);
    <?php } ?>

    <?php foreach (\$transitions as \$idx => \$transition) { ?>
    \$tracking->transition()
        ->name(<?= \$entityName ?>::<?= \$transition ?>)
        ->from([<?= \$entityName ?>::<?= \$initialPlace ?>])
        ->to([<?= \$entityName ?>::<?= \$places[\$idx % count(\$places)] ?>]);
    <?php } ?>


};
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/Workflow/config/_workflow.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

use function Symfony\\Component\\String\\u;
use Symfony\\Config\\FrameworkConfig;

use <?= \$entity_full_class_name ?>;


<?php \$initialPlace = \$places[0]; ?>
return static function (FrameworkConfig \$framework) {
    \$tracking = \$framework->workflows()->workflows('<?= strtolower(\$entityName) ?>');
    \$tracking
        ->type('state_machine') // or 'state_machine'
        ->supports([<?= \$entityName ?>::class])
        ->initialMarking([<?= \$entityName ?>::<?= \$initialPlace ?>]);

    \$tracking->auditTrail()->enabled(true);
    \$tracking->markingStore()
        ->type('method')
        ->property('marking');

    <?php foreach (\$places as \$place) { ?>
        \$tracking->place()->name(<?= \$entityName ?>::<?= \$place ?>);
    <?php } ?>

    <?php foreach (\$transitions as \$idx => \$transition) { ?>
    \$tracking->transition()
        ->name(<?= \$entityName ?>::<?= \$transition ?>)
        ->from([<?= \$entityName ?>::<?= \$initialPlace ?>])
        ->to([<?= \$entityName ?>::<?= \$places[\$idx % count(\$places)] ?>]);
    <?php } ?>


};
", "@SurvosMaker/skeleton/Workflow/config/_workflow.tpl.php", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/Workflow/config/_workflow.tpl.php");
    }
}
