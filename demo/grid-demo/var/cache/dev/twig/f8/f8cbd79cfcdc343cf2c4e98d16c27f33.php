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

/* @SurvosApiGrid/components/api_grid.html.twig */
class __TwigTemplate_6597b7e50bf16c59570987f808f6a641 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'modal' => [$this, 'block_modal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosApiGrid/components/api_grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosApiGrid/components/api_grid.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["columns"] = twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "normalizedColumns", [], "any", false, false, false, 3);
        // line 4
        $context["templates"] = [];
        // line 13
        echo "
";
        // line 17
        echo "
<div ";
        // line 18
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 18, $this->source); })()), "stimulusController", [], "any", false, false, false, 18), ["class" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "class", [], "any", false, false, false, 19), "searchBuilderFields" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->searchBuilderFields(twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "class", [], "any", false, false, false, 20), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 20, $this->source); })())), "sortableFields" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->sortableFields(twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "class", [], "any", false, false, false, 21)), "searchableFields" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->searchableFields(twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "class", [], "any", false, false, false, 22)), "api_call" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->apiCollectionRoute(twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "class", [], "any", false, false, false, 23)), "columnConfiguration" => json_encode(        // line 24
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 24, $this->source); })())), "filter" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "filter", [], "any", false, false, false, 25)]);
        // line 26
        echo ">

    ";
        // line 28
        $this->displayBlock('modal', $context, $blocks);
        // line 39
        echo "

    <table class=\"table table-striped responsive\" ";
        // line 41
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusTarget($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "stimulusController", [], "any", false, false, false, 41), "table");
        echo ">
    </table>

</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 29
        echo "        ";
        echo twig_include($this->env, $context, "@SurvosGrid/_modal.html.twig", ["formUrl" => "/", "aaController" => twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "stimulusController", [], "any", false, false, false, 31), "modalController" => "modal-form", "modalClass" => "modal-md", "modalTitle" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "caller", [], "any", false, false, false, 34), "buttonLabel" => "Show MODAL", "modalContent" => "really should load with ajax"]);
        // line 37
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosApiGrid/components/api_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  105 => 34,  104 => 31,  102 => 29,  92 => 28,  76 => 41,  72 => 39,  70 => 28,  66 => 26,  64 => 25,  63 => 24,  62 => 23,  61 => 22,  60 => 21,  59 => 20,  58 => 19,  57 => 18,  54 => 17,  51 => 13,  49 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/components/datatable.html.twig #}

{% set columns = this.normalizedColumns %}
{% set templates = [] %}
{#    {% if block(c.name) is defined %} #}
{#        {% set templates[c.name] = block(c.name) %} #}
{#        {% with {row: row} %} #}
{#            {{ block(c.name) }} #}
{#        {% endwith %} #}
{#    {% else %} #}
{#        {{ attribute(row, c.name)|default() }} #}
{#    {% endif %} #}

{# <code>{{ this.stimulusController }}</code> #}
{#    {{ dump(search_builder_fields(this.class, columns)) }} #}
{# {{ dump('sortable', sortable_fields(this.class)) }} #}

<div {{ stimulus_controller(this.stimulusController, {
    class: this.class,
    searchBuilderFields: search_builder_fields(this.class, columns),
    sortableFields: sortable_fields(this.class),
    searchableFields: searchable_fields(this.class),
    api_call:  api_route(this.class),
    columnConfiguration: columns|json_encode,
    filter: this.filter
}) }}>

    {% block modal %}
        {{ include('@SurvosGrid/_modal.html.twig', {
            formUrl: '/',
            aaController: this.stimulusController,
            modalController: 'modal-form',
            modalClass: 'modal-md',
            modalTitle: this.caller,
            buttonLabel: 'Show MODAL',
            modalContent: 'really should load with ajax'
        }) }}
    {% endblock %}


    <table class=\"table table-striped responsive\" {{ stimulus_target(this.stimulusController, 'table') }}>
    </table>

</div>

", "@SurvosApiGrid/components/api_grid.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/api-grid-bundle/templates/components/api_grid.html.twig");
    }
}
