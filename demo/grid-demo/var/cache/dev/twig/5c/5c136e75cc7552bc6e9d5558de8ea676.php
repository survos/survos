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

/* @SurvosBootstrap/Partials/_flash_messages.html.twig */
class __TwigTemplate_ee9c9b282400952bbc66b6c311b685e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/Partials/_flash_messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/Partials/_flash_messages.html.twig"));

        // line 1
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@SurvosBootstrap/macros/flash_messages.html.twig", "@SurvosBootstrap/Partials/_flash_messages.html.twig", 1)->unwrap();
        // line 2
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "started", [], "any", false, false, false, 2)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "flashbag", [], "any", false, false, false, 2), "peekAll", [], "any", false, false, false, 2)) > 0))) {
            // line 3
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
            // line 5
            echo twig_call_macro($macros["macro"], "macro_session_flash", [((array_key_exists("adminlte_close_alert", $context)) ? (_twig_default_filter((isset($context["adminlte_close_alert"]) || array_key_exists("adminlte_close_alert", $context) ? $context["adminlte_close_alert"] : (function () { throw new RuntimeError('Variable "adminlte_close_alert" does not exist.', 5, $this->source); })()), true)) : (true)), false, "", "flashmessages"], 5, $context, $this->getSourceContext());
            echo "
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/Partials/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SurvosBootstrap/macros/flash_messages.html.twig\" as macro %}
{% if app.session and app.session.started and app.session.flashbag.peekAll|length > 0 %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ macro.session_flash(adminlte_close_alert|default(true), false, '', 'flashmessages') }}
        </div>
    </div>
{% endif %}
", "@SurvosBootstrap/Partials/_flash_messages.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/Partials/_flash_messages.html.twig");
    }
}
