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

/* @SurvosGrid/components/item.html.twig */
class __TwigTemplate_a5963070fbc8032f8dbb2e90933d6525 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/components/item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/components/item.html.twig"));

        // line 2
        $context["columns"] = twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 2, $this->source); })()), "normalizedColumns", [], "any", false, false, false, 2);
        // line 3
        echo "<div ";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "stimulusController", [], "any", false, false, false, 3)) ? ($this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "stimulusController", [], "any", false, false, false, 3))) : (""));
        echo ">
    <div class=\"m-4\">
        <dl class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 6, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 7
            echo "                <dt class=\"col-sm-3\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "
                </dt>
                <dd class=\"col-md-9\">
                    ";
            // line 11
            if (            $this->hasBlock(twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 11), $context, $blocks)) {
                // line 12
                echo "                        ";
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })())];
                if (!twig_test_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 12, $this->getSourceContext());
                }
                $__internal_compile_1 = twig_to_array($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                // line 13
                echo "                            ";
                $this->displayBlock(twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 13), $context, $blocks);
                echo "
                        ";
                $context = $__internal_compile_0;
                // line 15
                echo "                    ";
            } else {
                // line 16
                echo "                        ";
                // line 17
                echo "                        ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 17), [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 17), [], "any", false, false, false, 17))) : ("")), "html", null, true);
                echo "
                    ";
            }
            // line 19
            echo "                </dd>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        </dl>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosGrid/components/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 21,  106 => 19,  100 => 17,  98 => 16,  95 => 15,  89 => 13,  80 => 12,  78 => 11,  72 => 8,  69 => 7,  52 => 6,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/components/datatable.html.twig #}
{% set columns = this.normalizedColumns %}
<div {{ this.stimulusController ? stimulus_controller(this.stimulusController) }}>
    <div class=\"m-4\">
        <dl class=\"row\">
            {% for c in columns %}
                <dt class=\"col-sm-3\">
                    {{ c.title }}
                </dt>
                <dd class=\"col-md-9\">
                    {% if block(c.name) is defined %}
                        {% with {data: data} %}
                            {{ block(c.name) }}
                        {% endwith %}
                    {% else %}
                        {# handle bools #}
                        {{ attribute(data, c.name)|default() }}
                    {% endif %}
                </dd>
            {% endfor %}

        </dl>
    </div>
</div>
", "@SurvosGrid/components/item.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/grid-bundle/templates/components/item.html.twig");
    }
}
