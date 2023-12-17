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

/* congress/index.html.twig */
class __TwigTemplate_ca42a4228ffa8e2345656469576373c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "congress/index.html.twig", 1);
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
        echo "    <h1>Official index </h1>
    <p>
        This page uses the <code>grid</code> component, and generates HTML from the query.
    </p>

    ";
        // line 11
        $context["columns"] = ["id", "firstName", "lastName", ["name" => "actions", "condition" => $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")], "officialName", "birthday", "terms"];
        // line 21
        echo "
    ";
        // line 22
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->preRender("grid", twig_to_array(["data" => (isset($context["officials"]) || array_key_exists("officials", $context) ? $context["officials"] : (function () { throw new RuntimeError('Variable "officials" does not exist.', 22, $this->source); })()), "columns" => (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 22, $this->source); })())]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $embeddedContext = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->embeddedContext("grid", twig_to_array(["data" => (isset($context["officials"]) || array_key_exists("officials", $context) ? $context["officials"] : (function () { throw new RuntimeError('Variable "officials" does not exist.', 22, $this->source); })()), "columns" => (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 22, $this->source); })())]), $context, "congress/index.html.twig", 20494932171);
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 20494932171);
            $this->loadTemplate("congress/index.html.twig", "congress/index.html.twig", 22, "20494932171")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        // line 44
        echo "
    ";
        // line 46
        echo "
    ";
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        // line 52
        echo "
    ";
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        // line 60
        echo "
    ";
        // line 62
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "congress/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  143 => 60,  141 => 59,  139 => 58,  136 => 56,  134 => 55,  132 => 54,  129 => 52,  127 => 51,  125 => 50,  123 => 49,  121 => 48,  118 => 46,  115 => 44,  113 => 43,  110 => 41,  100 => 22,  97 => 21,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Official index{% endblock %}

{% block body %}
    <h1>Official index </h1>
    <p>
        This page uses the <code>grid</code> component, and generates HTML from the query.
    </p>

    {% set columns =
        [
            'id',
            'firstName',
            'lastName',
            {name: 'actions', condition: is_granted('ROLE_ADMIN')},
            'officialName',
            'birthday',
            'terms'
        ] %}

    {% component 'grid' with { data: officials, columns: columns } %}

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

    {#    {% component grid with { #}
    {#        data: officials, #}

    {#    } %} #}

    {#        {% block officialName %} #}
    {#            <a href=\"{{ path('app_congress_show', {'id': row.id}) }}\"> #}
    {#                {{ row.officialName }} #}
    {#            </a> #}
    {#        {% endblock %} #}

    {#        {% block birthday %} #}
    {#            {{ row.birthday|date('Y-m-d') }} #}
    {#        {% endblock %} #}

    {#        {% block actions %} #}
    {#            <a href=\"{{ path('app_congress_edit', {'id': row.id}) }}\">edit</a> #}
    {#        {% endblock %} #}

    {#    {% endcomponent %} #}

{% endblock %}
", "congress/index.html.twig", "/home/tac/ca/survos/demo/grid-demo/templates/congress/index.html.twig");
    }
}


/* congress/index.html.twig */
class __TwigTemplate_ca42a4228ffa8e2345656469576373c4___20494932171 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'officialName' => [$this, 'block_officialName'],
            'birthday' => [$this, 'block_birthday'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return "@SurvosGrid/components/grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "congress/index.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosGrid/components/grid.html.twig", "congress/index.html.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_officialName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "officialName"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "officialName"));

        // line 25
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_congress_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "officialName", [], "any", false, false, false, 26), "html", null, true);
        echo "
            </a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_birthday($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday"));

        // line 31
        echo "            ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "birthday", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 36
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_congress_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">edit</a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "congress/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 36,  355 => 35,  342 => 31,  332 => 30,  319 => 26,  314 => 25,  304 => 24,  264 => 22,  146 => 62,  143 => 60,  141 => 59,  139 => 58,  136 => 56,  134 => 55,  132 => 54,  129 => 52,  127 => 51,  125 => 50,  123 => 49,  121 => 48,  118 => 46,  115 => 44,  113 => 43,  110 => 41,  100 => 22,  97 => 21,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Official index{% endblock %}

{% block body %}
    <h1>Official index </h1>
    <p>
        This page uses the <code>grid</code> component, and generates HTML from the query.
    </p>

    {% set columns =
        [
            'id',
            'firstName',
            'lastName',
            {name: 'actions', condition: is_granted('ROLE_ADMIN')},
            'officialName',
            'birthday',
            'terms'
        ] %}

    {% component 'grid' with { data: officials, columns: columns } %}

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

    {#    {% component grid with { #}
    {#        data: officials, #}

    {#    } %} #}

    {#        {% block officialName %} #}
    {#            <a href=\"{{ path('app_congress_show', {'id': row.id}) }}\"> #}
    {#                {{ row.officialName }} #}
    {#            </a> #}
    {#        {% endblock %} #}

    {#        {% block birthday %} #}
    {#            {{ row.birthday|date('Y-m-d') }} #}
    {#        {% endblock %} #}

    {#        {% block actions %} #}
    {#            <a href=\"{{ path('app_congress_edit', {'id': row.id}) }}\">edit</a> #}
    {#        {% endblock %} #}

    {#    {% endcomponent %} #}

{% endblock %}
", "congress/index.html.twig", "/home/tac/ca/survos/demo/grid-demo/templates/congress/index.html.twig");
    }
}
