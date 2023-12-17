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

/* @SurvosBootstrap/_navbar.html.twig */
class __TwigTemplate_0a153227522d30e1e7c52b838ab5a03d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/_navbar.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getTemplateName(), "html", null, true);
        echo "
";
        // line 3
        echo "
    ";
        // line 4
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("survos_navbar_menu", [], ["some_option" => "my_value"]);
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        $context["menuHtml"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 7, $this->source); })()), ["template" => "@SurvosBootstrap/knp_top_menu.html.twig", "style" => "navbar"]);
        // line 10
        echo "
<nav class=\"navbar navbar-expand-lg bg-light\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            ";
        // line 19
        echo (isset($context["menuHtml"]) || array_key_exists("menuHtml", $context) ? $context["menuHtml"] : (function () { throw new RuntimeError('Variable "menuHtml" does not exist.', 19, $this->source); })());
        echo "
            <form class=\"d-flex\" role=\"search\">
                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
            </form>
        </div>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  68 => 17,  66 => 16,  64 => 15,  58 => 10,  55 => 7,  52 => 5,  50 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ _self }}
{#  second arg is the branch of the menu we want #}

    {% set menu = knp_menu_get('survos_navbar_menu', [], {'some_option': 'my_value'}) %}

    {#https://getbootstrap.com/docs/5.2/components/navbar/#}
    {% set menuHtml = knp_menu_render(menu, {
        template: '@SurvosBootstrap/knp_top_menu.html.twig',
        style: 'navbar'}) %}

<nav class=\"navbar navbar-expand-lg bg-light\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">Navbar</a>
        {#            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">#}
        {#                <span class=\"navbar-toggler-icon\"></span>#}
        {#            </button>#}
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            {{ menuHtml|raw }}
            <form class=\"d-flex\" role=\"search\">
                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
            </form>
        </div>
    </div>
</nav>
", "@SurvosBootstrap/_navbar.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/_navbar.html.twig");
    }
}
