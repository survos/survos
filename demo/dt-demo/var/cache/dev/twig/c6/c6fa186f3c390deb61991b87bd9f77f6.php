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

/* @SurvosBootstrap/components/accordion.html.twig */
class __TwigTemplate_5db4b9e051ef7b2b0a815d151defbb5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'accordion_body' => [$this, 'block_accordion_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/accordion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/accordion.html.twig"));

        // line 1
        echo "<h2 class=\"accordion-header\" id=\"heading";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" aria-expanded=\"true\" aria-controls=\"accordion";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
    </button>
</h2>

<div id=\"accordion";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" class=\"accordion-collapse collapse ";
        echo (((isset($context["open"]) || array_key_exists("open", $context) ? $context["open"] : (function () { throw new RuntimeError('Variable "open" does not exist.', 7, $this->source); })())) ? ("show") : (""));
        echo "\" ";
        (((isset($context["bsParent"]) || array_key_exists("bsParent", $context) ? $context["bsParent"] : (function () { throw new RuntimeError('Variable "bsParent" does not exist.', 7, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_sprintf("data-bs-parent=\"%s\"", (isset($context["bsParent"]) || array_key_exists("bsParent", $context) ? $context["bsParent"] : (function () { throw new RuntimeError('Variable "bsParent" does not exist.', 7, $this->source); })())), "html", null, true))) : (print ("")));
        echo ">
    <div class=\"accordion-body\">
        ";
        // line 9
        $this->displayBlock('accordion_body', $context, $blocks);
        // line 12
        echo "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_accordion_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_body"));

        // line 10
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["accordion_body"]) || array_key_exists("accordion_body", $context) ? $context["accordion_body"] : (function () { throw new RuntimeError('Variable "accordion_body" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 10,  85 => 9,  73 => 12,  71 => 9,  62 => 7,  55 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"accordion-header\" id=\"heading{{ id }}\">
    <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#accordion{{ id }}\" aria-expanded=\"true\" aria-controls=\"accordion{{ id }}\">
        {{ header }}
    </button>
</h2>

<div id=\"accordion{{ id }}\" class=\"accordion-collapse collapse {{ open ? 'show' }}\" {{ bsParent ? 'data-bs-parent=\"%s\"'|format(bsParent) }}>
    <div class=\"accordion-body\">
        {% block accordion_body %}
        {{ accordion_body }}
        {% endblock %}
    </div>
</div>
", "@SurvosBootstrap/components/accordion.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/components/accordion.html.twig");
    }
}
