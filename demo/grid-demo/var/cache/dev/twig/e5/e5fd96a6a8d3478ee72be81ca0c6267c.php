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

/* congress/browse.html.twig */
class __TwigTemplate_cec03ca1e53c9851cb1607c9c5351358 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/browse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/browse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "congress/browse.html.twig", 1);
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

        echo "Official index";
        
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
        echo "    <h1>Browse Elected Officials</h1>
    <p>
        This page uses the <code>api_grid</code> component, and the datatable's AJAX call using API Platform.
    </p>

    ";
        // line 11
        $context["class"] = "App\\Entity\\Official";
        // line 12
        echo "
    ";
        // line 13
$props = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->embeddedContext("api_grid", twig_to_array(["class" =>         // line 14
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 14, $this->source); })()), "caller" =>         // line 15
$this->getTemplateName(), "columns" => twig_array_merge([0 => "id", 1 => "firstName", 2 => "lastName", 3 => "officialName"], (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ([0 => "actions"]) : ([0 => "birthday"])))]), $context);
        $this->loadTemplate("congress/browse.html.twig", "congress/browse.html.twig", 13, "1331148022")->display($props);
        // line 37
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "congress/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  102 => 15,  101 => 14,  100 => 13,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Official index{% endblock %}

{% block body %}
    <h1>Browse Elected Officials</h1>
    <p>
        This page uses the <code>api_grid</code> component, and the datatable's AJAX call using API Platform.
    </p>

    {% set class = 'App\\\\Entity\\\\Official' %}

    {% component api_grid with {
        class: class,
        caller: _self,
        columns: ['id',
            'firstName',
            'lastName',
            'officialName']|merge(is_granted('ROLE_ADMIN')?['actions']:['birthday'])
    } %}

        {% block officialName %}
        <a href=\"{{ path('app_congress_show', {'id': row.id}) }}\">
            {{ row.officialName }}
        </a>
        {% endblock %}

        {% block birthday %}
            {{ row.birthday|date('Y-m-d') }}
        {% endblock %}

        {% block actions %}
            <a href=\"{{ path('app_congress_edit', {'id': row.id}) }}\">edit</a>
        {% endblock %}

    {% endcomponent %}

{% endblock %}
", "congress/browse.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/templates/congress/browse.html.twig");
    }
}


/* congress/browse.html.twig */
class __TwigTemplate_cec03ca1e53c9851cb1607c9c5351358___1331148022 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'officialName' => [$this, 'block_officialName'],
            'birthday' => [$this, 'block_birthday'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return "@SurvosApiGrid/components/api_grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/browse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/browse.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosApiGrid/components/api_grid.html.twig", "congress/browse.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_officialName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "officialName"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "officialName"));

        // line 23
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_congress_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">
            ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 24, $this->source); })()), "officialName", [], "any", false, false, false, 24), "html", null, true);
        echo "
        </a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_birthday($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday"));

        // line 29
        echo "            ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "birthday", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 33
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_congress_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">edit</a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "congress/browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 33,  271 => 32,  258 => 29,  248 => 28,  235 => 24,  230 => 23,  220 => 22,  197 => 13,  105 => 37,  102 => 15,  101 => 14,  100 => 13,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Official index{% endblock %}

{% block body %}
    <h1>Browse Elected Officials</h1>
    <p>
        This page uses the <code>api_grid</code> component, and the datatable's AJAX call using API Platform.
    </p>

    {% set class = 'App\\\\Entity\\\\Official' %}

    {% component api_grid with {
        class: class,
        caller: _self,
        columns: ['id',
            'firstName',
            'lastName',
            'officialName']|merge(is_granted('ROLE_ADMIN')?['actions']:['birthday'])
    } %}

        {% block officialName %}
        <a href=\"{{ path('app_congress_show', {'id': row.id}) }}\">
            {{ row.officialName }}
        </a>
        {% endblock %}

        {% block birthday %}
            {{ row.birthday|date('Y-m-d') }}
        {% endblock %}

        {% block actions %}
            <a href=\"{{ path('app_congress_edit', {'id': row.id}) }}\">edit</a>
        {% endblock %}

    {% endcomponent %}

{% endblock %}
", "congress/browse.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/templates/congress/browse.html.twig");
    }
}
