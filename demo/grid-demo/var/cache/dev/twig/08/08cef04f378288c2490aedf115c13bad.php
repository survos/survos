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

/* @SurvosBootstrap/sneat/_navbar.html.twig */
class __TwigTemplate_31fdbf16443cd5625d05a50ef9cee0e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'brand' => [$this, 'block_brand'],
            'top_navbar_menu' => [$this, 'block_top_navbar_menu'],
            'search' => [$this, 'block_search'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_navbar.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 10
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5\">
    <div class=\"container-fluid\">
        ";
        // line 13
        $this->displayBlock('brand', $context, $blocks);
        // line 16
        echo "        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
";
        // line 21
        echo "            ";
        $this->displayBlock('top_navbar_menu', $context, $blocks);
        // line 24
        echo "            ";
        $this->displayBlock('search', $context, $blocks);
        // line 30
        echo "        </div>
    </div>

    ";
        // line 33
        if ($this->env->getFunction('theme_option')->getCallable()("allow_login")) {
            // line 34
            echo "    ";
            echo twig_include($this->env, $context, "@SurvosBootstrap/sneat/_navbar_auth.html.twig");
            echo "
    ";
        }
        // line 36
        echo "
    ";
        // line 38
        echo "
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "brand"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "brand"));

        // line 14
        echo "            ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("link", ["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "body" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home")]);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_top_navbar_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_navbar_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_navbar_menu"));

        // line 22
        echo "            ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["type" => "top_navbar"]);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 25
        echo "            <form class=\"d-flex\" onsubmit=\"return false\">
                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-primary\" type=\"submit\">Search</button>
            </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 25,  145 => 24,  132 => 22,  122 => 21,  109 => 14,  99 => 13,  87 => 38,  84 => 36,  78 => 34,  76 => 33,  71 => 30,  68 => 24,  65 => 21,  59 => 16,  57 => 13,  52 => 10,  49 => 4,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#https://getbootstrap.com/docs/5.2/components/navbar/#}

{#    {% set menu = knp_menu_get('survos_navbar_menu', [], {'some_option': 'my_value'}) %}#}

{#someday we can use these and have just one menu renderer#}
{#template: '@SurvosBootstrap/sneat/knp_menu.html.twig',#}
{#branch_class: 'nav-item dropdown',#}
{#leaf_class: 'nav-item',#}
{#link_class: 'nav-link',#}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5\">
    <div class=\"container-fluid\">
        {% block brand %}
            {{ component('link', {path: 'home'|route_alias, body: 'home'|trans}) }}
        {% endblock %}
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
{#            {{ menuHtml|raw }}#}
            {% block top_navbar_menu %}
            {{ component('menu', {type: 'top_navbar'}) }}
            {% endblock %}
            {% block search %}
            <form class=\"d-flex\" onsubmit=\"return false\">
                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-primary\" type=\"submit\">Search</button>
            </form>
            {% endblock %}
        </div>
    </div>

    {% if theme_option('allow_login') %}
    {{ include('@SurvosBootstrap/sneat/_navbar_auth.html.twig') }}
    {% endif %}

    {#    {{ include('@SurvosBootstrap/sneat/_navbar_auth_example.html.twig') }}#}

</nav>
", "@SurvosBootstrap/sneat/_navbar.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/sneat/_navbar.html.twig");
    }
}
