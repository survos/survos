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

/* @SurvosGrid/components/api_grid.html.twig */
class __TwigTemplate_7717c576bc1be5dd92161b50cf34c75f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/components/api_grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/components/api_grid.html.twig"));

        // line 2
        echo "
";
        // line 13
        echo "
";
        // line 17
        echo "
";
        // line 27
        echo "
";
        // line 39
        echo "

";
        // line 43
        echo "
";
        // line 45
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosGrid/components/api_grid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 45,  59 => 43,  55 => 39,  52 => 27,  49 => 17,  46 => 13,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/components/datatable.html.twig #}

{#{% set columns = this.normalizedColumns %}#}
{#{% set templates = [] %}#}
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

{#<div {{ stimulus_controller(this.stimulusController, {#}
{#    class: this.class,#}
{#    searchBuilderFields: search_builder_fields(this.class, columns),#}
{#    sortableFields: sortable_fields(this.class),#}
{#    searchableFields: searchable_fields(this.class),#}
{#    api_call:  api_route(this.class),#}
{#    columnConfiguration: columns|json_encode,#}
{#    filter: this.filter#}
{#}) }}>#}

{#    {% block modal %}#}
{#        {{ include('@SurvosGrid/_modal.html.twig', {#}
{#            formUrl: '/',#}
{#            aaController: this.stimulusController,#}
{#            modalController: 'modal-form',#}
{#            modalClass: 'modal-md',#}
{#            modalTitle: this.caller,#}
{#            buttonLabel: 'Show MODAL',#}
{#            modalContent: 'really should load with ajax'#}
{#        }) }}#}
{#    {% endblock %}#}


{#    <table class=\"table\" {{ stimulus_target(this.stimulusController, 'table') }}>#}
{#    </table>#}

{#</div>#}

", "@SurvosGrid/components/api_grid.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/grid-bundle/templates/components/api_grid.html.twig");
    }
}
