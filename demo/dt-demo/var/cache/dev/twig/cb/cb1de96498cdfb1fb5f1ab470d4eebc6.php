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

/* @SurvosBootstrap/macros/flash_messages.html.twig */
class __TwigTemplate_d8e672fade1b1c8f19dc9923efbc886a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/flash_messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/flash_messages.html.twig"));

        // line 22
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function macro_flash($__type__ = null, $__message__ = null, $__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "message" => $__message__,
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flash"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flash"));

            // line 6
            echo "    ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })()) == "fos_user_success")) {
                // line 7
                echo "        ";
                $context["type"] = "success";
                // line 8
                echo "    ";
            } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()) == "error")) {
                // line 9
                echo "        ";
                $context["type"] = "danger";
                // line 10
                echo "    ";
            }
            // line 11
            echo "    <div class=\"alert";
            (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 11, $this->source); })())) ? (print (twig_escape_filter($this->env, (" alert-" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 11, $this->source); })())), "html", null, true))) : (print ("")));
            echo " ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 11, $this->source); })()), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new RuntimeError('Variable "close" does not exist.', 11, $this->source); })()), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
        ";
            // line 12
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new RuntimeError('Variable "close" does not exist.', 12, $this->source); })()), false)) : (false))) {
                // line 13
                echo "            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        ";
            }
            // line 15
            echo "        ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) || array_key_exists("use_raw", $context) ? $context["use_raw"] : (function () { throw new RuntimeError('Variable "use_raw" does not exist.', 15, $this->source); })()), false)) : (false))) {
                // line 16
                echo "            ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 16, $this->source); })()), [], ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 16, $this->source); })()), "AdminLTEBundle")) : ("AdminLTEBundle")));
                echo "
        ";
            } else {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 18, $this->source); })()), [], ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 18, $this->source); })()), "AdminLTEBundle")) : ("AdminLTEBundle"))), "html", null, true);
                echo "
        ";
            }
            // line 20
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
    public function macro_session_flash($__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "session_flash"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "session_flash"));

            // line 24
            echo "    ";
            $macros["flash_messages"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "flashbag", [], "any", false, false, false, 26), "peekAll", [], "any", false, false, false, 26)) > 0)) {
                // line 27
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "flashbag", [], "any", false, false, false, 27), "all", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 28
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 29
                        echo "                ";
                        echo twig_call_macro($macros["flash_messages"], "macro_flash", [$context["type"], $context["message"], (isset($context["close"]) || array_key_exists("close", $context) ? $context["close"] : (function () { throw new RuntimeError('Variable "close" does not exist.', 29, $this->source); })()), (isset($context["use_raw"]) || array_key_exists("use_raw", $context) ? $context["use_raw"] : (function () { throw new RuntimeError('Variable "use_raw" does not exist.', 29, $this->source); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 29, $this->source); })()), (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new RuntimeError('Variable "domain" does not exist.', 29, $this->source); })())], 29, $context, $this->getSourceContext());
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/macros/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 32,  190 => 31,  181 => 29,  176 => 28,  171 => 27,  169 => 26,  166 => 25,  163 => 24,  141 => 23,  125 => 20,  119 => 18,  113 => 16,  110 => 15,  106 => 13,  104 => 12,  93 => 11,  90 => 10,  87 => 9,  84 => 8,  81 => 7,  78 => 6,  54 => 5,  43 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
the following code is based on KevinPabst's AdminLteBundle, which was based on phiamo/MopaBootstrapBundle
https://github.com/phiamo/MopaBootstrapBundle/blob/88b104b3efd4c3c3bfff1df4525a53bc3596010b/Resources/views/flash.html.twig
#}
{% macro flash(type, message, close, use_raw, class, domain) %}
    {% if type == 'fos_user_success' %}
        {% set type = 'success' %}
    {% elseif type == 'error' %}
        {% set type = 'danger' %}
    {% endif %}
    <div class=\"alert{{ type ? ' alert-'~type : '' }} {{ class|default('') }} {% if close|default(false) %}alert-dismissible{% endif %}\">
        {% if close|default(false) %}
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        {% endif %}
        {% if use_raw|default(false) %}
            {{ message|trans({}, domain|default('AdminLTEBundle'))|raw }}
        {% else %}
            {{ message|trans({}, domain|default('AdminLTEBundle')) }}
        {% endif %}
    </div>
{% endmacro %}

{% macro session_flash(close, use_raw, class, domain) %}
    {% import _self as flash_messages %}

    {% if app.session.flashbag.peekAll|length > 0 %}
        {% for type, messages in app.session.flashbag.all %}
            {% for message in messages %}
                {{ flash_messages.flash(type, message, close, use_raw, class, domain) }}
            {% endfor %}
        {% endfor %}
    {% endif %}
{% endmacro %}
", "@SurvosBootstrap/macros/flash_messages.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/macros/flash_messages.html.twig");
    }
}
