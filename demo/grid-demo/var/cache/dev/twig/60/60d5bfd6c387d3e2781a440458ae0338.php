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

/* @SurvosBootstrap/macros/datatables.html.twig */
class __TwigTemplate_cf19d690da2ab686e41c9e880183e9a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/datatables.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/datatables.html.twig"));

        // line 1
        echo "
";
        // line 28
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function macro_data_table_header($__entries__ = null, $__form__ = null, $__tools__ = null, $__toolsRight__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entries" => $__entries__,
            "form" => $__form__,
            "tools" => $__tools__,
            "toolsRight" => $__toolsRight__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_header"));

            // line 3
            echo "<div class=\"box data_table\">
    ";
            // line 4
            if ((((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()) || (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 4, $this->source); })())) || (isset($context["toolsRight"]) || array_key_exists("toolsRight", $context) ? $context["toolsRight"] : (function () { throw new RuntimeError('Variable "toolsRight" does not exist.', 4, $this->source); })()))) {
                // line 5
                echo "        ";
                $macros["macro"] = $this->loadTemplate("macros/toolbar.html.twig", "@SurvosBootstrap/macros/datatables.html.twig", 5)->unwrap();
                // line 6
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_toolbar", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 6, $this->source); })()), (isset($context["toolsRight"]) || array_key_exists("toolsRight", $context) ? $context["toolsRight"] : (function () { throw new RuntimeError('Variable "toolsRight" does not exist.', 6, $this->source); })())], 6, $context, $this->getSourceContext());
                echo "
    ";
            }
            // line 8
            echo "    <div class=\"box-body no-padding\">
        <div class=\"dataTables_wrapper form-inline dt-bootstrap\">
            <div class=\"row\">
                <div class=\"col-sm-6\"></div>
                <div class=\"col-sm-6\"></div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <table class=\"table table-striped table-hover dataTable\" role=\"grid\">
                        <thead>
                        <tr>
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["title"] => $context["class"]) {
                // line 20
                echo "                            <th";
                if ($context["class"]) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "\"";
                }
                echo ">
                                ";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["title"]), "html", null, true);
                echo "
                            </th>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        </tr>
                        </thead>
                        <tbody>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_data_table_footer($__entries__ = null, $__route__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entries" => $__entries__,
            "route" => $__route__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_footer"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_footer"));

            // line 30
            echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
            // line 46
            echo "        </div>
    </div>
</div>

<div class=\"navigation text-center no-print\">
    pagerfanta(entries, 'twitter_bootstrap3_translated', { routeName: route })
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/macros/datatables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  166 => 30,  146 => 29,  128 => 24,  119 => 21,  110 => 20,  106 => 19,  93 => 8,  87 => 6,  84 => 5,  82 => 4,  79 => 3,  57 => 2,  46 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro data_table_header(entries, form, tools, toolsRight) %}
<div class=\"box data_table\">
    {% if form or tools or toolsRight %}
        {% import \"macros/toolbar.html.twig\" as macro %}
        {{ macro.toolbar(form, tools, toolsRight) }}
    {% endif %}
    <div class=\"box-body no-padding\">
        <div class=\"dataTables_wrapper form-inline dt-bootstrap\">
            <div class=\"row\">
                <div class=\"col-sm-6\"></div>
                <div class=\"col-sm-6\"></div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <table class=\"table table-striped table-hover dataTable\" role=\"grid\">
                        <thead>
                        <tr>
                            {% for title, class in entries %}
                            <th{% if class %} class=\"{{ class }}\"{% endif %}>
                                {{ title|trans }}
                            </th>
                            {% endfor %}
                        </tr>
                        </thead>
                        <tbody>
{% endmacro %}

{% macro data_table_footer(entries, route) %}
                        </tbody>
                    </table>
                </div>
            </div>
            {#<div class=\"row\">
                <div class=\"col-sm-5\">
                    {#<div class=\"dataTables_info\" id=\"example2_info\" role=\"status\" aria-live=\"polite\">
                        {{ 'datatables.entry_counter'|trans({'%from%': '1', '%to%': '10', '%total%': entries.count}) }}
                    </div># }
                </div>
                <div class=\"col-sm-7\">
                    <div class=\"dataTables_paginate paging_simple_numbers\">
                        {{ pagerfanta(entries, 'twitter_bootstrap3_translated', { routeName: route }) }}
                    </div>
                </div>
            </div>#}
        </div>
    </div>
</div>

<div class=\"navigation text-center no-print\">
    pagerfanta(entries, 'twitter_bootstrap3_translated', { routeName: route })
</div>
{% endmacro %}
", "@SurvosBootstrap/macros/datatables.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/macros/datatables.html.twig");
    }
}
