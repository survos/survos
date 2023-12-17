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

/* congress/show.html.twig */
class __TwigTemplate_7e12979e81f75bf443e04dca530d1360 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "congress/show.html.twig", 1);
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

        echo "Official";
        
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
        echo "    <h1>Official</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 20, $this->source); })()), "lastName", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>OfficialName</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 24, $this->source); })()), "officialName", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 28, $this->source); })()), "birthday", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 28, $this->source); })()), "birthday", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 32, $this->source); })()), "gender", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 37
$props = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->embeddedContext("grid", twig_to_array(["data" => twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["official"]) || array_key_exists("official", $context) ? $context["official"] : (function () { throw new RuntimeError('Variable "official" does not exist.', 38, $this->source); })()), "terms", [], "any", false, false, false, 38), "columns" => [0 => "type", 1 => "party", 2 => ["name" => "stateAbbreviation", "title" => "State"], 3 => "district", 4 => ["name" => "startDatex"], 5 => ["name" => "endDatex"]]]), $context);
        $this->loadTemplate("congress/show.html.twig", "congress/show.html.twig", 37, "1571749214")->display($props);
        // line 57
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "congress/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  140 => 38,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Official{% endblock %}

{% block body %}
    <h1>Official</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ official.id }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ official.firstName }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ official.lastName }}</td>
            </tr>
            <tr>
                <th>OfficialName</th>
                <td>{{ official.officialName }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{{ official.birthday ? official.birthday|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ official.gender }}</td>
            </tr>
        </tbody>
    </table>

    {% component grid with {
        data: official.terms,
        columns: [
            'type',
            'party',
            {name: 'stateAbbreviation', title: 'State' },
            'district',
            {name: 'startDatex'},
            {name: 'endDatex'}
        ]
    } %}
        {% block startDatex %}
            {{ row.startDate|date('Y-m-d') }}
        {% endblock %}
        {% block endDatex %}
            {{ row.endDate|date('Y-m-d') }}
        {% endblock %}


    {% endcomponent %}

{% endblock %}
", "congress/show.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/templates/congress/show.html.twig");
    }
}


/* congress/show.html.twig */
class __TwigTemplate_7e12979e81f75bf443e04dca530d1360___1571749214 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'startDatex' => [$this, 'block_startDatex'],
            'endDatex' => [$this, 'block_endDatex'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 37
        return "@SurvosGrid/components/grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/show.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosGrid/components/grid.html.twig", "congress/show.html.twig", 37);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 48
    public function block_startDatex($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "startDatex"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "startDatex"));

        // line 49
        echo "            ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 49, $this->source); })()), "startDate", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_endDatex($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "endDatex"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "endDatex"));

        // line 52
        echo "            ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 52, $this->source); })()), "endDate", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "congress/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 52,  300 => 51,  287 => 49,  277 => 48,  254 => 37,  143 => 57,  140 => 38,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Official{% endblock %}

{% block body %}
    <h1>Official</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ official.id }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ official.firstName }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ official.lastName }}</td>
            </tr>
            <tr>
                <th>OfficialName</th>
                <td>{{ official.officialName }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{{ official.birthday ? official.birthday|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ official.gender }}</td>
            </tr>
        </tbody>
    </table>

    {% component grid with {
        data: official.terms,
        columns: [
            'type',
            'party',
            {name: 'stateAbbreviation', title: 'State' },
            'district',
            {name: 'startDatex'},
            {name: 'endDatex'}
        ]
    } %}
        {% block startDatex %}
            {{ row.startDate|date('Y-m-d') }}
        {% endblock %}
        {% block endDatex %}
            {{ row.endDate|date('Y-m-d') }}
        {% endblock %}


    {% endcomponent %}

{% endblock %}
", "congress/show.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/templates/congress/show.html.twig");
    }
}
