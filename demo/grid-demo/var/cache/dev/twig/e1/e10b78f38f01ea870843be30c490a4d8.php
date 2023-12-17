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

/* @SurvosMaker/skeleton/class/_method.php.twig */
class __TwigTemplate_c3d9d6d593ce14d21bfb6f98df991dcc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/class/_method.php.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/class/_method.php.twig"));

        // line 1
        echo "public function ";
        echo twig_escape_filter($this->env, (isset($context["methodName"]) || array_key_exists("methodName", $context) ? $context["methodName"] : (function () { throw new RuntimeError('Variable "methodName" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "(
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 2, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["param"], "attributes", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 4
                echo "            [#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 4), "html", null, true);
                echo "]
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->source, $context["param"], "optional", [], "any", false, false, false, 6)) ? ("?") : (""));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["param"], "type", [], "any", false, false, false, 6), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["param"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "
        ";
            // line 7
            echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 7)) ? (",") : (""));
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "): ";
        echo twig_escape_filter($this->env, (isset($context["returnType"]) || array_key_exists("returnType", $context) ? $context["returnType"] : (function () { throw new RuntimeError('Variable "returnType" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "

{
// test
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/class/_method.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 9,  87 => 7,  79 => 6,  70 => 4,  65 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("public function {{ methodName }}(
    {% for param in params %}
        {% for a in param.attributes %}
            [#{{ a.name }}]
            {% endfor %}
        {{ param.optional ? '?' }}{{ param.type }} {{ param.name }}
        {{ not loop.last ? ',' }}
    {% endfor %}
): {{ returnType }}

{
// test
}
", "@SurvosMaker/skeleton/class/_method.php.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/class/_method.php.twig");
    }
}
