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
class __TwigTemplate_ef649359e1ec9109e79675586e0d0c2b extends Template
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
        // line 16
        echo "
<div ";
        // line 17
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "stimulusController", [], "any", false, false, false, 17), ["class" => twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 18, $this->source); })()), "class", [], "any", false, false, false, 18), "searchBuilderFields" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "searchBuilderFields", [], "any", false, false, false, 19), "sortableFields" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->sortableFields(twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "class", [], "any", false, false, false, 20)), "searchableFields" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->searchableFields(twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "class", [], "any", false, false, false, 21)), "api_call" => $this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->apiCollectionRoute(twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "class", [], "any", false, false, false, 22)), "searchPanesDataUrl" => ((twig_get_attribute($this->env, $this->source,         // line 23
($context["this"] ?? null), "searchPanesDataUrl", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "searchPanesDataUrl", [], "any", false, false, false, 23), null)) : (null)), "locale" => ((twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 24, $this->source); })()), "locale", [], "any", false, false, false, 24)) ? (twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 24, $this->source); })()), "locale", [], "any", false, false, false, 24)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24)) : ("xx")))), "columnConfiguration" => json_encode(        // line 25
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 25, $this->source); })())), "dom" => ((twig_get_attribute($this->env, $this->source,         // line 26
($context["this"] ?? null), "dom", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "dom", [], "any", false, false, false, 26), false)) : (false)), "pageLength" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 27, $this->source); })()), "pageLength", [], "any", false, false, false, 27), "filter" => twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 28, $this->source); })()), "filter", [], "any", false, false, false, 28)]);
        // line 29
        echo ">

    ";
        // line 31
        $this->displayBlock('modal', $context, $blocks);
        // line 42
        echo "

    <table class=\"table table-striped responsive\" ";
        // line 44
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusTarget($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "stimulusController", [], "any", false, false, false, 44), "table");
        echo ">
    </table>

</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 32
        echo "        ";
        echo twig_include($this->env, $context, "@SurvosGrid/_modal.html.twig", ["formUrl" => "/", "aaController" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "stimulusController", [], "any", false, false, false, 34), "modalController" => "modal-form", "modalClass" => "modal-md", "modalTitle" => twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 37, $this->source); })()), "caller", [], "any", false, false, false, 37), "buttonLabel" => "Show MODAL", "modalContent" => "really should load with ajax"]);
        // line 40
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
        return array (  111 => 40,  109 => 37,  108 => 34,  106 => 32,  96 => 31,  80 => 44,  76 => 42,  74 => 31,  70 => 29,  68 => 28,  67 => 27,  66 => 26,  65 => 25,  64 => 24,  63 => 23,  62 => 22,  61 => 21,  60 => 20,  59 => 19,  58 => 18,  57 => 17,  54 => 16,  51 => 13,  49 => 4,  47 => 3,  44 => 2,);
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
{# {{ dump('sortable', sortable_fields(this.class)) }}#}

<div {{ stimulus_controller(this.stimulusController, {
    class: this.class,
    searchBuilderFields: this.searchBuilderFields,
    sortableFields: sortable_fields(this.class),
    searchableFields: searchable_fields(this.class),
    api_call:  api_route(this.class),
    searchPanesDataUrl:  this.searchPanesDataUrl|default(null),
    locale: this.locale ?: (app.request.locale ?: 'xx'),
    columnConfiguration: columns|json_encode,
    dom: this.dom|default(false),
    pageLength: this.pageLength,
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
