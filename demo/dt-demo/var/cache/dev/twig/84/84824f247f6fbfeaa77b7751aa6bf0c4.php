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
class __TwigTemplate_b5467e98f0e69d5c8d426faf64ea952d extends Template
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
        // line 15
        echo "
";
        // line 16
        $context["locale"] = ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "locale", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "locale", [], "any", false, false, false, 16)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16)) : ("xx"))));
        // line 17
        echo "
";
        // line 18
        $context["apiCall"] = ((twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "apiGetCollectionUrl", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "apiGetCollectionUrl", [], "any", false, false, false, 18), false)) : (false));
        // line 19
        if ( !(isset($context["apiCall"]) || array_key_exists("apiCall", $context) ? $context["apiCall"] : (function () { throw new RuntimeError('Variable "apiCall" does not exist.', 19, $this->source); })())) {
            // line 20
            $context["apiCall"] = ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "class", [], "any", false, false, false, 20)) ? ($this->extensions['Survos\InspectionBundle\Twig\TwigExtension']->apiCollectionRoute(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "class", [], "any", false, false, false, 20))) : ("meilisearch"));
        }
        // line 22
        echo "
<div ";
        // line 23
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "stimulusController", [], "any", false, false, false, 23), ["schema" =>         // line 24
(isset($context["schema"]) || array_key_exists("schema", $context) ? $context["schema"] : (function () { throw new RuntimeError('Variable "schema" does not exist.', 24, $this->source); })()), "globals" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "globals", [], "any", false, false, false, 25), "api_call" =>         // line 26
(isset($context["apiCall"]) || array_key_exists("apiCall", $context) ? $context["apiCall"] : (function () { throw new RuntimeError('Variable "apiCall" does not exist.', 26, $this->source); })()), "searchPanesDataUrl" => ((twig_get_attribute($this->env, $this->source,         // line 27
($context["this"] ?? null), "searchPanesDataUrl", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "searchPanesDataUrl", [], "any", false, false, false, 27), null)) : (null)), "locale" =>         // line 28
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 28, $this->source); })()), "globals" =>         // line 29
(isset($context["globals"]) || array_key_exists("globals", $context) ? $context["globals"] : (function () { throw new RuntimeError('Variable "globals" does not exist.', 29, $this->source); })()), "columnConfiguration" => json_encode(        // line 30
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 30, $this->source); })())), "dom" => ((twig_get_attribute($this->env, $this->source,         // line 31
($context["this"] ?? null), "dom", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "dom", [], "any", false, false, false, 31), false)) : (false)), "style" => twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 32, $this->source); })()), "style", [], "any", false, false, false, 32), "index" => ((twig_get_attribute($this->env, $this->source,         // line 33
($context["this"] ?? null), "index", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "index", [], "any", false, false, false, 33), false)) : (false)), "pageLength" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "pageLength", [], "any", false, false, false, 34), "filter" => twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 35, $this->source); })()), "filter", [], "any", false, false, false, 35)]);
        // line 36
        echo ">

    ";
        // line 38
        $this->displayBlock('modal', $context, $blocks);
        // line 49
        echo "

    <div class=\"\" ";
        // line 51
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 51, $this->source); })()), "stimulusController", [], "any", false, false, false, 51), "message");
        echo ">
    </div>


    <table class=\"table table-striped responsive\" ";
        // line 55
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 55, $this->source); })()), "stimulusController", [], "any", false, false, false, 55), "table");
        echo ">
    </table>

</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 39
        echo "        ";
        echo twig_include($this->env, $context, "@SurvosGrid/_modal.html.twig", ["formUrl" => "/", "aaController" => twig_get_attribute($this->env, $this->source,         // line 41
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "stimulusController", [], "any", false, false, false, 41), "modalController" => "modal-form", "modalClass" => "modal-md", "modalTitle" => twig_get_attribute($this->env, $this->source,         // line 44
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "caller", [], "any", false, false, false, 44), "buttonLabel" => "Show MODAL", "modalContent" => "really should load with ajax"]);
        // line 47
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
        return array (  134 => 47,  132 => 44,  131 => 41,  129 => 39,  119 => 38,  103 => 55,  96 => 51,  92 => 49,  90 => 38,  86 => 36,  84 => 35,  83 => 34,  82 => 33,  81 => 32,  80 => 31,  79 => 30,  78 => 29,  77 => 28,  76 => 27,  75 => 26,  74 => 25,  73 => 24,  72 => 23,  69 => 22,  66 => 20,  64 => 19,  62 => 18,  59 => 17,  57 => 16,  54 => 15,  51 => 13,  49 => 4,  47 => 3,  44 => 2,);
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

{% set locale = this.locale ?: (app.request.locale ?: 'xx') %}

{% set apiCall = this.apiGetCollectionUrl|default(false) %}
{% if not apiCall %}
{% set apiCall = this.class ? api_route(this.class) : 'meilisearch' %}
{% endif %}

<div {{ stimulus_controller(this.stimulusController, {
    schema: schema,
    globals: this.globals,
    api_call:  apiCall,
    searchPanesDataUrl:  this.searchPanesDataUrl|default(null),
    locale: locale,
    globals: globals,
    columnConfiguration: columns|json_encode,
    dom: this.dom|default(false),
    style: this.style,
    index: this.index|default(false),
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


    <div class=\"\" {{ stimulus_target(this.stimulusController, 'message') }}>
    </div>


    <table class=\"table table-striped responsive\" {{ stimulus_target(this.stimulusController, 'table') }}>
    </table>

</div>

", "@SurvosApiGrid/components/api_grid.html.twig", "/home/tac/ca/survos/packages/api-grid-bundle/templates/components/api_grid.html.twig");
    }
}
