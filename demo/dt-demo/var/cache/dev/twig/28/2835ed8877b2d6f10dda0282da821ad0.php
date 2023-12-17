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

/* @SurvosBootstrap/components/divider.html.twig */
class __TwigTemplate_4528cc35f1d7c85cdcd3b1e77a45a280 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/divider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/divider.html.twig"));

        // line 1
        echo "
<div class=\"divider ";
        // line 2
        (((isset($context["alignment"]) || array_key_exists("alignment", $context) ? $context["alignment"] : (function () { throw new RuntimeError('Variable "alignment" does not exist.', 2, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_sprintf("text-%s", (isset($context["alignment"]) || array_key_exists("alignment", $context) ? $context["alignment"] : (function () { throw new RuntimeError('Variable "alignment" does not exist.', 2, $this->source); })())), "html", null, true))) : (print ("")));
        echo "  ";
        (((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 2, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_sprintf("divider-%s", (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 2, $this->source); })())), "html", null, true))) : (print ("")));
        echo " ";
        (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 2, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_sprintf("divider-%s", (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 2, $this->source); })())), "html", null, true))) : (print ("")));
        echo "\">
    <div class=\"divider-text\">";
        // line 3
        if (((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()) != "")) {
            echo "<i>";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</i>";
        }
        echo "</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/divider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"divider {{ alignment ? 'text-%s'|format(alignment) }}  {{ color ?'divider-%s'|format(color) }} {{ style ?'divider-%s'|format(style) }}\">
    <div class=\"divider-text\">{% if message != '' %}<i>{{ message }}</i>{% endif %}</div>
</div>
", "@SurvosBootstrap/components/divider.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/components/divider.html.twig");
    }
}
