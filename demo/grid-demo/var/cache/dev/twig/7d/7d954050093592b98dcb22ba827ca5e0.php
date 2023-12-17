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

/* @SurvosBootstrap/components/menu.html.twig */
class __TwigTemplate_8f20449765b79592d5ece8529ffc32d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/menu.html.twig"));

        // line 3
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()) == "sidebar")) {
            // line 4
            echo "        ";
            echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 4, $this->source); })()), ["template" => "@SurvosBootstrap/sneat/knp_menu.html.twig", "debug" => ((            // line 6
array_key_exists("debug", $context)) ? (_twig_default_filter((isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 6, $this->source); })()), false)) : (false)), "currentAsLink" => true, "firstClass" => "first", "currentClass" => "active", "listAttributes" => ["class" => "menu-inner py-1"], "ancestorClass" => "menu-item nav-item menu-open open", "branch_class" => "menu-item nav-item ", "leaf_class" => "menu-item leaf nav-item", "link_class" => "menu-link nav-link", "allow_safe_labels" => true, "comment" => "This is an custom option passed in knp_menu_render. Only used by our custom renderer.", "rootAttributes" => ["class" => "menu-inner py-1", "role" => "menu"]]);
            // line 25
            echo "

    ";
        } elseif (twig_in_filter(        // line 27
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()), [0 => "footer"])) {
            // line 28
            echo "
        ";
            // line 29
            echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 29, $this->source); })()), ["template" => "@SurvosBootstrap/knp_top_menu.html.twig", "leaf_class" => "list-group-item footer-link me-4", "rootAttributes" => ["class" => "nav nav-justify-end list-group list-group-horizontal dropup"], "style" => "footer", "something_else" => "test render!!"]);
            // line 37
            echo "


    ";
        } elseif (twig_in_filter(        // line 40
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()), [0 => "top_auth"])) {
            // line 41
            echo "        ";
            $context["menuHtml"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 41, $this->source); })()), ["attributes" => "dropdown-menu dropdown-menu-end", "template" => "@SurvosBootstrap/knp_top_menu.html.twig", "style" => "dropdown"]);
            // line 45
            echo "        ";
            echo (isset($context["menuHtml"]) || array_key_exists("menuHtml", $context) ? $context["menuHtml"] : (function () { throw new RuntimeError('Variable "menuHtml" does not exist.', 45, $this->source); })());
            echo "

    ";
        } elseif (twig_in_filter(        // line 47
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 47, $this->source); })()), [0 => "top_navbar", 1 => "top_page"])) {
            // line 48
            echo "        ";
            echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 48, $this->source); })()), ["rootAttributes" => ["class" => "navbar-nav me-auto mb-2 mb-lg-0 list-group-horizontal"], "currentClass" => "active", "template" => "@SurvosBootstrap/knp_top_menu.html.twig", "style" => "navbar"]);
            // line 55
            echo "
    ";
        } else {
            // line 57
            echo "        <div class=\"text-danger\">Invalid menu type: ";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "</div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 57,  82 => 55,  79 => 48,  77 => 47,  71 => 45,  68 => 41,  66 => 40,  61 => 37,  59 => 29,  56 => 28,  54 => 27,  50 => 25,  48 => 6,  46 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{#  this fires an event, all listeners/subscribers will respond.  use A #}
{#    {% set menuItem = knp_menu_get(menuAlias, path, options) %}#}
    {% if type == 'sidebar' %}
        {{ knp_menu_render(menuItem, {
            \"template\"      : \"@SurvosBootstrap/sneat/knp_menu.html.twig\",
            \"debug\": debug|default(false),
            currentAsLink: true,
            firstClass: 'first',
            currentClass  : \"active\",
            \"listAttributes\": {
                \"class\": \"menu-inner py-1\",
            } ,
            \"ancestorClass\" : \"menu-item nav-item menu-open open\",
            \"branch_class\"  : \"menu-item nav-item \",
            'leaf_class'    : 'menu-item leaf nav-item',
            'link_class'    : 'menu-link nav-link',
            \"allow_safe_labels\": true,

            'comment': \"This is an custom option passed in knp_menu_render. Only used by our custom renderer.\",
            rootAttributes: {
                class: 'menu-inner py-1',
                role: 'menu'
            },

        }) }}

    {% elseif type in ['footer']  %}

        {{ knp_menu_render(menuItem, {
            template: '@SurvosBootstrap/knp_top_menu.html.twig',
            leaf_class: \"list-group-item footer-link me-4\",
            rootAttributes: {
                class:\"nav nav-justify-end list-group list-group-horizontal dropup\"
            },
            style: 'footer',
            something_else: 'test render!!'
        }) }}


    {% elseif type in ['top_auth']  %}
        {% set menuHtml = knp_menu_render(menuItem, {
            attributes: \"dropdown-menu dropdown-menu-end\",
            template: '@SurvosBootstrap/knp_top_menu.html.twig',
            style: 'dropdown'}) %}
        {{ menuHtml|raw }}

    {% elseif type in ['top_navbar', 'top_page'] %}
        {{ knp_menu_render(menuItem, {
            rootAttributes: {
                class:\"navbar-nav me-auto mb-2 mb-lg-0 list-group-horizontal\"
            },
            currentClass  : \"active\",

            template: '@SurvosBootstrap/knp_top_menu.html.twig',
            style: 'navbar'}) }}
    {% else %}
        <div class=\"text-danger\">Invalid menu type: {{ type }}</div>
    {% endif %}
{#    { #}
{#    debug: app.request.get('debug', false), #}
{#    menuItem: menuItem, #}
{#    project: project, #}
{#    title: project.code #}
{#    } #}
", "@SurvosBootstrap/components/menu.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/components/menu.html.twig");
    }
}
