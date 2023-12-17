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
class __TwigTemplate_6d0cf946a84c4f2c01ad34fd1a9aebab extends Template
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
        $context["theme"] = $this->env->getFunction('theme_option')->getCallable()("theme");
        // line 4
        echo "

    ";
        // line 6
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })()) == "sidebar")) {
            // line 7
            echo "        ";
            // line 8
            echo "        ";
            echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 8, $this->source); })()), ["template" => "@SurvosBootstrap/sneat/knp_menu.html.twig", "debug" => ((            // line 10
array_key_exists("debug", $context)) ? (_twig_default_filter((isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 10, $this->source); })()), false)) : (false)), "currentAsLink" => true, "firstClass" => "first", "currentClass" => "active", "listAttributes" => ["class" => "menu-inner py-1"], "ancestorClass" => "menu-item nav-item menu-open open", "branch_class" => "menu-item nav-item ", "leaf_class" => "menu-item leaf nav-item", "link_class" => "menu-link nav-link", "allow_safe_labels" => true, "comment" => "This is an custom option passed in knp_menu_render. Only used by our custom renderer.", "rootAttributes" => ["class" => "menu-inner py-1", "role" => "menu"]]);
            // line 29
            echo "

    ";
        } elseif (twig_in_filter(        // line 31
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 31, $this->source); })()), ["footer"])) {
            // line 32
            echo "
        ";
            // line 33
            $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 33, $this->source); })()));
            // line 34
            echo "        ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 34, $this->source); })()), "children", [], "any", false, false, false, 34))) {
                // line 35
                echo "            ";
                if (((array_key_exists("wrapperClass", $context)) ? (_twig_default_filter((isset($context["wrapperClass"]) || array_key_exists("wrapperClass", $context) ? $context["wrapperClass"] : (function () { throw new RuntimeError('Variable "wrapperClass" does not exist.', 35, $this->source); })()), false)) : (false))) {
                    echo "<div class=\"";
                    echo twig_escape_filter($this->env, (isset($context["wrapperClass"]) || array_key_exists("wrapperClass", $context) ? $context["wrapperClass"] : (function () { throw new RuntimeError('Variable "wrapperClass" does not exist.', 35, $this->source); })()), "html", null, true);
                    echo "\">";
                }
                // line 36
                echo "
            ";
                // line 37
                echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 37, $this->source); })()), ["template" => "@SurvosBootstrap/knp_top_menu.html.twig", "leaf_class" => "list-group-item footer-link me-4", "rootAttributes" => ["class" => "nav nav-justify-end list-group list-group-horizontal dropup"], "style" => "footer", "something_else" => "test render!!"]);
                // line 45
                echo "
            ";
                // line 46
                if (((array_key_exists("wrapperClass", $context)) ? (_twig_default_filter((isset($context["wrapperClass"]) || array_key_exists("wrapperClass", $context) ? $context["wrapperClass"] : (function () { throw new RuntimeError('Variable "wrapperClass" does not exist.', 46, $this->source); })()), false)) : (false))) {
                    echo "</div>";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "

    ";
        } elseif (twig_in_filter(        // line 50
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })()), ["top_auth"])) {
            // line 51
            echo "        ";
            $context["menuHtml"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 51, $this->source); })()), ["attributes" => "dropdown-menu dropdown-menu-end", "template" => "@SurvosBootstrap/knp_top_menu.html.twig", "style" => "dropdown"]);
            // line 55
            echo "        ";
            echo (isset($context["menuHtml"]) || array_key_exists("menuHtml", $context) ? $context["menuHtml"] : (function () { throw new RuntimeError('Variable "menuHtml" does not exist.', 55, $this->source); })());
            echo "

    ";
        } elseif (twig_in_filter(        // line 57
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 57, $this->source); })()), ["top_navbar", "top_page"])) {
            // line 58
            echo "        ";
            $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 58, $this->source); })()));
            // line 59
            echo "        ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 59, $this->source); })()), "children", [], "any", false, false, false, 59))) {
                // line 60
                echo "            ";
                if (((array_key_exists("wrapperClass", $context)) ? (_twig_default_filter((isset($context["wrapperClass"]) || array_key_exists("wrapperClass", $context) ? $context["wrapperClass"] : (function () { throw new RuntimeError('Variable "wrapperClass" does not exist.', 60, $this->source); })()), false)) : (false))) {
                    echo "<div class=\"";
                    echo twig_escape_filter($this->env, (isset($context["wrapperClass"]) || array_key_exists("wrapperClass", $context) ? $context["wrapperClass"] : (function () { throw new RuntimeError('Variable "wrapperClass" does not exist.', 60, $this->source); })()), "html", null, true);
                    echo "\">";
                }
                // line 61
                echo "            ";
                echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 61, $this->source); })()), ["rootAttributes" => ["class" => "navbar-nav me-auto mb-2 mb-lg-0 list-group-horizontal"], "currentClass" => "active", "template" => "@SurvosBootstrap/knp_top_menu.html.twig", "style" => "navbar"]);
                // line 67
                echo "
            ";
                // line 68
                if (((array_key_exists("wrapperClass", $context)) ? (_twig_default_filter((isset($context["wrapperClass"]) || array_key_exists("wrapperClass", $context) ? $context["wrapperClass"] : (function () { throw new RuntimeError('Variable "wrapperClass" does not exist.', 68, $this->source); })()), false)) : (false))) {
                    echo "</div>";
                }
                // line 69
                echo "        ";
            }
            // line 70
            echo "    ";
        } else {
            // line 71
            echo "        <div class=\"text-danger\">Invalid menu type: ";
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()), "html", null, true);
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
        return array (  139 => 71,  136 => 70,  133 => 69,  129 => 68,  126 => 67,  123 => 61,  116 => 60,  113 => 59,  110 => 58,  108 => 57,  102 => 55,  99 => 51,  97 => 50,  93 => 48,  90 => 47,  86 => 46,  83 => 45,  81 => 37,  78 => 36,  71 => 35,  68 => 34,  66 => 33,  63 => 32,  61 => 31,  57 => 29,  55 => 10,  53 => 8,  51 => 7,  49 => 6,  45 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{#  this fires an event, all listeners/subscribers will respond.  use A #}
{#    {% set menuItem = knp_menu_get(menuAlias, path, options) %} #}
{% set theme = theme_option('theme') %}


    {% if type == 'sidebar' %}
        {#        \"template\"      : \"@SurvosBootstrap/knp_sidebar_menu.html.twig\", #}
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

    {% elseif type in ['footer'] %}

        {% set menu = knp_menu_get(menuItem) %}
        {% if menu.children|length %}
            {% if wrapperClass|default(false) %}<div class=\"{{ wrapperClass }}\">{% endif %}

            {{ knp_menu_render(menuItem, {
                template: '@SurvosBootstrap/knp_top_menu.html.twig',
                leaf_class: \"list-group-item footer-link me-4\",
                rootAttributes: {
                    class:\"nav nav-justify-end list-group list-group-horizontal dropup\"
                },
                style: 'footer',
                something_else: 'test render!!'
            }) }}
            {% if wrapperClass|default(false) %}</div>{% endif %}
        {% endif %}


    {% elseif type in ['top_auth'] %}
        {% set menuHtml = knp_menu_render(menuItem, {
            attributes: \"dropdown-menu dropdown-menu-end\",
            template: '@SurvosBootstrap/knp_top_menu.html.twig',
            style: 'dropdown'}) %}
        {{ menuHtml|raw }}

    {% elseif type in ['top_navbar', 'top_page'] %}
        {% set menu = knp_menu_get(menuItem) %}
        {% if menu.children|length %}
            {% if wrapperClass|default(false) %}<div class=\"{{ wrapperClass }}\">{% endif %}
            {{ knp_menu_render(menuItem, {
                rootAttributes: {
                    class:\"navbar-nav me-auto mb-2 mb-lg-0 list-group-horizontal\"
                },
                currentClass  : \"active\",
                template: '@SurvosBootstrap/knp_top_menu.html.twig',
                style: 'navbar'}) }}
            {% if wrapperClass|default(false) %}</div>{% endif %}
        {% endif %}
    {% else %}
        <div class=\"text-danger\">Invalid menu type: {{ type }}</div>
    {% endif %}
{#    { #}
{#    debug: app.request.get('debug', false), #}
{#    menuItem: menuItem, #}
{#    project: project, #}
{#    title: project.code #}
{#    } #}
", "@SurvosBootstrap/components/menu.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/components/menu.html.twig");
    }
}
