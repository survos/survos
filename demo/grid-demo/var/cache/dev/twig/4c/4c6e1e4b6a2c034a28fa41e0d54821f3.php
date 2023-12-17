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

/* @SurvosMaker/skeleton/crud/templates/browse.tpl.php */
class __TwigTemplate_39f92ce77f9678c6f96534c6c1cd99a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "<?= \$route_name ?>/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/templates/browse.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/templates/browse.tpl.php"));

        $this->parent = $this->loadTemplate("<?= \$route_name ?>/base.html.twig", "@SurvosMaker/skeleton/crud/templates/browse.tpl.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $macros["card_widget"] = $this->loadTemplate("@SurvosBase/macros/cards.html.twig", "@SurvosMaker/skeleton/crud/templates/browse.tpl.php", 7)->unwrap();
        // line 8
        echo "
";
        // line 9
        $context["_controller"] = "videos";
        // line 10
        echo "
<h3>Youtube Videos</h3>
<div ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, (isset($context["_controller"]) || array_key_exists("_controller", $context) ? $context["_controller"] : (function () { throw new RuntimeError('Variable "_controller" does not exist.', 12, $this->source); })()), ["class" =>         // line 13
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 13, $this->source); })()), "api_call" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->apiCollectionRoute(        // line 14
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 14, $this->source); })())), "sortableFields" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->sortableFields(        // line 15
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 15, $this->source); })())), "filter" =>         // line 16
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 16, $this->source); })())]);
        // line 17
        echo ">

    ";
        // line 19
        echo twig_call_macro($macros["card_widget"], "macro_entityTable", [["stimulusController" =>         // line 20
(isset($context["_controller"]) || array_key_exists("_controller", $context) ? $context["_controller"] : (function () { throw new RuntimeError('Variable "_controller" does not exist.', 20, $this->source); })())]], 19, $context, $this->getSourceContext());
        // line 21
        echo "
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/crud/templates/browse.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  113 => 20,  112 => 19,  108 => 17,  106 => 16,  105 => 15,  104 => 14,  103 => 13,  102 => 12,  98 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"<?= \$route_name ?>/base.html.twig\" %}

{% block title %}{{  class }}{% endblock %}

{% block body %}

{% import \"@SurvosBase/macros/cards.html.twig\" as card_widget %}

{% set _controller = 'videos' %}

<h3>Youtube Videos</h3>
<div {{ stimulus_controller(_controller, {
     class: class,
     api_call: api_route(class),
     sortableFields: sortable_fields(class),
     filter: filter,
     }) }}>

    {{ card_widget.entityTable({
    stimulusController: _controller
    }) }}
</div>


{% endblock %}
", "@SurvosMaker/skeleton/crud/templates/browse.tpl.php", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/crud/templates/browse.tpl.php");
    }
}
