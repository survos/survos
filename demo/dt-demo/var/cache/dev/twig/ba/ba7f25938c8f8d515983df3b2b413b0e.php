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

/* @SurvosBootstrap/components/brand.html.twig */
class __TwigTemplate_bc34887caeb4372ffe5625537fed3cce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/brand.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/brand.html.twig"));

        // line 1
        echo "<!-- LOGO -->
<div class=\"navbar-brand-box\">
    ";
        // line 3
        if ( !(isset($context["lightImage"]) || array_key_exists("lightImage", $context) ? $context["lightImage"] : (function () { throw new RuntimeError('Variable "lightImage" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <button class=\"logo-text btn-large btn-warning\">";
            echo (isset($context["lgLogoHtml"]) || array_key_exists("lgLogoHtml", $context) ? $context["lgLogoHtml"] : (function () { throw new RuntimeError('Variable "lgLogoHtml" does not exist.', 4, $this->source); })());
            echo "</button>
    ";
        }
        // line 6
        echo "    <!-- Dark Logo-->
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\"
       class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                ";
        // line 10
        if ((isset($context["smImage"]) || array_key_exists("smImage", $context) ? $context["smImage"] : (function () { throw new RuntimeError('Variable "smImage" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["smImage"]) || array_key_exists("smImage", $context) ? $context["smImage"] : (function () { throw new RuntimeError('Variable "smImage" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["smImage"]) || array_key_exists("smImage", $context) ? $context["smImage"] : (function () { throw new RuntimeError('Variable "smImage" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\">
                ";
        }
        // line 13
        echo "                <span class=\"logo-text\">";
        echo (isset($context["smLogoHtml"]) || array_key_exists("smLogoHtml", $context) ? $context["smLogoHtml"] : (function () { throw new RuntimeError('Variable "smLogoHtml" does not exist.', 13, $this->source); })());
        echo "</span>

            </span>
        <span class=\"logo-lg\">
            ";
        // line 17
        if ((isset($context["darkImage"]) || array_key_exists("darkImage", $context) ? $context["darkImage"] : (function () { throw new RuntimeError('Variable "darkImage" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["darkImage"]) || array_key_exists("darkImage", $context) ? $context["darkImage"] : (function () { throw new RuntimeError('Variable "darkImage" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" alt=\"\">
                ";
        } else {
            // line 20
            echo "            ";
        }
        // line 21
        echo "
                <button class=\"logo-text btn-large btn-warning\">";
        // line 22
        echo (isset($context["lgLogoHtml"]) || array_key_exists("lgLogoHtml", $context) ? $context["lgLogoHtml"] : (function () { throw new RuntimeError('Variable "lgLogoHtml" does not exist.', 22, $this->source); })());
        echo "</button>
            </span>
    </a>
    <!-- Light Logo-->
    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\"
       class=\"logo logo-light\">
            <span class=\"logo-sm\">

                ";
        // line 30
        if ((isset($context["smImage"]) || array_key_exists("smImage", $context) ? $context["smImage"] : (function () { throw new RuntimeError('Variable "smImage" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["smImage"]) || array_key_exists("smImage", $context) ? $context["smImage"] : (function () { throw new RuntimeError('Variable "smImage" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\" alt=\"\" height=\"22\">
                ";
        }
        // line 33
        echo "                <span class=\"logo-text\">";
        echo (isset($context["smLogoHtml"]) || array_key_exists("smLogoHtml", $context) ? $context["smLogoHtml"] : (function () { throw new RuntimeError('Variable "smLogoHtml" does not exist.', 33, $this->source); })());
        echo "</span>
            </span>
        <span class=\"logo-lg logo-text\">
            ";
        // line 36
        if ((isset($context["lightImage"]) || array_key_exists("lightImage", $context) ? $context["lightImage"] : (function () { throw new RuntimeError('Variable "lightImage" does not exist.', 36, $this->source); })())) {
            // line 38
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["lightImage"]) || array_key_exists("lightImage", $context) ? $context["lightImage"] : (function () { throw new RuntimeError('Variable "lightImage" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "\" alt=\"\" height=\"21\" width=\"80\">
            ";
        }
        // line 41
        echo "            </span>
    </a>
    <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\"
            id=\"vertical-hover\">
        <i class=\"ri-record-circle-line\"></i>
    </button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/brand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  127 => 38,  125 => 36,  118 => 33,  112 => 31,  110 => 30,  103 => 26,  96 => 22,  93 => 21,  90 => 20,  84 => 18,  82 => 17,  74 => 13,  66 => 11,  64 => 10,  58 => 7,  55 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- LOGO -->
<div class=\"navbar-brand-box\">
    {% if not lightImage %}
    <button class=\"logo-text btn-large btn-warning\">{{ lgLogoHtml|raw }}</button>
    {% endif %}
    <!-- Dark Logo-->
    <a href=\"{{ logoLink }}\"
       class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                {% if smImage %}
                <img src=\"{{ smImage }}\" alt=\"{{ smImage }}\">
                {% endif %}
                <span class=\"logo-text\">{{ smLogoHtml|raw }}</span>

            </span>
        <span class=\"logo-lg\">
            {% if darkImage %}
                <img src=\"{{ darkImage }}\" alt=\"\">
                {% else %}
            {% endif %}

                <button class=\"logo-text btn-large btn-warning\">{{ lgLogoHtml|raw }}</button>
            </span>
    </a>
    <!-- Light Logo-->
    <a href=\"{{ logoLink }}\"
       class=\"logo logo-light\">
            <span class=\"logo-sm\">

                {% if smImage %}
                    <img src=\"{{ smImage }}\" alt=\"\" height=\"22\">
                {% endif %}
                <span class=\"logo-text\">{{ smLogoHtml|raw }}</span>
            </span>
        <span class=\"logo-lg logo-text\">
            {% if lightImage %}
{#                <img src=\"{{ lightImage }}\" alt=\"\" >#}
                <img src=\"{{ lightImage }}\" alt=\"\" height=\"21\" width=\"80\">
            {% endif %}
{#                <span class=\"logo-text\">{{ lgLogoHtml|raw }}</span>#}
            </span>
    </a>
    <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\"
            id=\"vertical-hover\">
        <i class=\"ri-record-circle-line\"></i>
    </button>
</div>
", "@SurvosBootstrap/components/brand.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/components/brand.html.twig");
    }
}
