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

/* @SurvosBootstrap/components/button.html.twig */
class __TwigTemplate_97e6eefda49b1f3f3660a8b7b2ff2185 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/button.html.twig"));

        // line 1
        echo "<button type=\"button\"
        class=\"btn ";
        // line 2
        (((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 2, $this->source); })())) ? (print (twig_escape_filter($this->env, ("btn-" . (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 2, $this->source); })())), "html", null, true))) : (print ("")));
        echo "
        btn";
        // line 3
        echo (((isset($context["outline"]) || array_key_exists("outline", $context) ? $context["outline"] : (function () { throw new RuntimeError('Variable "outline" does not exist.', 3, $this->source); })())) ? ("-outline") : (""));
        (((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 3, $this->source); })())) ? (print (twig_escape_filter($this->env, ("-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 3, $this->source); })())), "html", null, true))) : (print ("")));
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 4
        if ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 4, $this->source); })())) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 4, $this->source); })()), "href", [], "any", false, false, false, 4), "html", null, true);
            echo "\" ";
            ((twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 4, $this->source); })()), "target", [], "any", false, false, false, 4)) ? (print (twig_escape_filter($this->env, twig_sprintf("target=%s", twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 4, $this->source); })()), "target", [], "any", false, false, false, 4)), "html", null, true))) : (print ("")));
            echo "> ";
        }
        // line 5
        echo "    ";
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "            <span class=\"";
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"></span>&nbsp;
    ";
        }
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
    ";
        // line 9
        if ((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        </a>
    ";
        }
        // line 12
        echo "</button>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  81 => 10,  79 => 9,  74 => 8,  68 => 6,  65 => 5,  57 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button type=\"button\"
        class=\"btn {{ size ? 'btn-'~size }}
        btn{{ outline ? '-outline' }}{{ color ? '-' ~ color }} {{ style }}\">
    {% if a %}<a href=\"{{ a.href }}\" {{ a.target ? \"target=%s\"|format(a.target) }}> {% endif %}
    {% if icon %}
            <span class=\"{{ icon }}\"></span>&nbsp;
    {% endif %}
        {{ label }}
    {% if a %}
        </a>
    {% endif %}
</button>

", "@SurvosBootstrap/components/button.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/components/button.html.twig");
    }
}
