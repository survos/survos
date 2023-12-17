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

/* @SurvosBootstrap/components/alert.html.twig */
class __TwigTemplate_b8806341d6c3e625b16891d8aa38118a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/alert.html.twig"));

        // line 1
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " ";
        echo (((isset($context["dismissible"]) || array_key_exists("dismissible", $context) ? $context["dismissible"] : (function () { throw new RuntimeError('Variable "dismissible" does not exist.', 1, $this->source); })())) ? ("alert-dismissible") : (""));
        echo "\" role=\"alert\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "
    ";
        // line 3
        if ((isset($context["dismissible"]) || array_key_exists("dismissible", $context) ? $context["dismissible"] : (function () { throw new RuntimeError('Variable "dismissible" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    ";
        }
        // line 6
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 4,  54 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"alert alert-{{ type }} {{ dismissible ? 'alert-dismissible' }}\" role=\"alert\">
    {{ message }}
    {% if dismissible %}
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    {% endif %}

</div>
", "@SurvosBootstrap/components/alert.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/components/alert.html.twig");
    }
}
