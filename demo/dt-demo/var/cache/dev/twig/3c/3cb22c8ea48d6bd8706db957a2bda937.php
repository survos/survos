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

/* term_crud/show.html.twig */
class __TwigTemplate_42252ab99f83a097a7fe954eecbe01f2 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "term_crud/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "term_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "term_crud/show.html.twig", 1);
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

        echo "Term";
        
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
        echo "    <h1>Term</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>StateAbbreviation</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 20, $this->source); })()), "stateAbbreviation", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Party</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 24, $this->source); })()), "party", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>District</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 28, $this->source); })()), "district", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>StartDate</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 32, $this->source); })()), "startDate", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 32, $this->source); })()), "startDate", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>EndDate</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 36, $this->source); })()), "endDate", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 36, $this->source); })()), "endDate", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_term_crud_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_term_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["term"]) || array_key_exists("term", $context) ? $context["term"] : (function () { throw new RuntimeError('Variable "term" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "term_crud/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "term_crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Term{% endblock %}

{% block body %}
    <h1>Term</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ term.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ term.type }}</td>
            </tr>
            <tr>
                <th>StateAbbreviation</th>
                <td>{{ term.stateAbbreviation }}</td>
            </tr>
            <tr>
                <th>Party</th>
                <td>{{ term.party }}</td>
            </tr>
            <tr>
                <th>District</th>
                <td>{{ term.district }}</td>
            </tr>
            <tr>
                <th>StartDate</th>
                <td>{{ term.startDate ? term.startDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>EndDate</th>
                <td>{{ term.endDate ? term.endDate|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_term_crud_index') }}\">back to list</a>

    <a href=\"{{ path('app_term_crud_edit', {'id': term.id}) }}\">edit</a>

    {{ include('term_crud/_delete_form.html.twig') }}
{% endblock %}
", "term_crud/show.html.twig", "/home/tac/ca/survos/demo/dt-demo/templates/term_crud/show.html.twig");
    }
}
