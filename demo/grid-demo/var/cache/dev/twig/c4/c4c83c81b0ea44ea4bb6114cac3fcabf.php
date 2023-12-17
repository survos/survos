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

/* @SurvosMaker/skeleton/crud/templates/index.tpl.php */
class __TwigTemplate_e302d4afbec43d58f7b059073da756b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/templates/index.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/templates/index.tpl.php"));

        // line 1
        echo "<?= \$helper->getHeadPrintCode(\$entity_class_name . ' index'); ?>


";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1><?= \$entity_class_name ?> index</h1>

    ";
        // line 7
        $this->loadTemplate("<?= \$entity_twig_var_singular ?>/_table.html.twig", "@SurvosMaker/skeleton/crud/templates/index.tpl.php", 7)->display($context);
        // line 8
        echo "
    <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("<?= \$route_name ?>_new");
        echo "\"><span class=\"fas fa-plus\"></span>New  <?= \$entity_class_name ?></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/crud/templates/index.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  74 => 8,  72 => 7,  68 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \$helper->getHeadPrintCode(\$entity_class_name . ' index'); ?>


{% block body %}
    <h1><?= \$entity_class_name ?> index</h1>

    {% include \"<?= \$entity_twig_var_singular ?>/_table.html.twig\" %}

    <a class=\"btn btn-primary\" href=\"{{ path('<?= \$route_name ?>_new') }}\"><span class=\"fas fa-plus\"></span>New  <?= \$entity_class_name ?></a>
{% endblock %}
", "@SurvosMaker/skeleton/crud/templates/index.tpl.php", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/crud/templates/index.tpl.php");
    }
}
