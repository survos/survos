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

/* @SurvosGrid/_html_table.html.twig */
class __TwigTemplate_520c11de1db3c18d1ab501195da8cb5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/_html_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/_html_table.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    ";
        echo twig_escape_filter($this->env, $this->getTemplateName(), "html", null, true);
        echo " content

";
        // line 4
        $context["_controller"] = "@survos/grid-bundle/datatables";
        // line 5
        echo "<div
        ";
        // line 6
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController((isset($context["_controller"]) || array_key_exists("_controller", $context) ? $context["_controller"] : (function () { throw new RuntimeError('Variable "_controller" does not exist.', 6, $this->source); })()));
        echo "
>
    <div         ";
        // line 8
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["_controller"]) || array_key_exists("_controller", $context) ? $context["_controller"] : (function () { throw new RuntimeError('Variable "_controller" does not exist.', 8, $this->source); })()), "modal");
        echo ">Modal</div>

    <table class=\"table\" ";
        // line 10
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["_controller"]) || array_key_exists("_controller", $context) ? $context["_controller"] : (function () { throw new RuntimeError('Variable "_controller" does not exist.', 10, $this->source); })()), "table");
        echo ">
        <thead>
        <tr>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 14
            echo "                ";
            $context["columnName"] = ((twig_test_iterable($context["c"])) ? (((twig_get_attribute($this->env, $this->source, $context["c"], "data", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["c"], "data", [], "any", false, false, false, 14), false)) : (false))) : ($context["c"]));
            // line 15
            echo "                ";
            $context["title"] = ((twig_test_iterable($context["c"])) ? (((twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 15), twig_title_string_filter($this->env, (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 15, $this->source); })())))) : (twig_title_string_filter($this->env, (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 15, $this->source); })()))))) : (twig_title_string_filter($this->env, (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 15, $this->source); })()))));
            // line 16
            echo "                <th>
                    ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "
                </th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "            <tr>
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 25, $this->source); })()));
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
                // line 26
                echo "                ";
                $context["blockName"] = ((twig_test_iterable($context["c"])) ? (((twig_get_attribute($this->env, $this->source, $context["c"], "blockName", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["c"], "blockName", [], "any", false, false, false, 26), false)) : (false))) : ($context["c"]));
                // line 27
                echo "                ";
                $context["columnName"] = ((twig_test_iterable($context["c"])) ? (((twig_get_attribute($this->env, $this->source, $context["c"], "data", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["c"], "data", [], "any", false, false, false, 27), false)) : (false))) : ($context["c"]));
                // line 28
                echo "<td>


    ";
                // line 31
                if (                $this->hasBlock((isset($context["blockName"]) || array_key_exists("blockName", $context) ? $context["blockName"] : (function () { throw new RuntimeError('Variable "blockName" does not exist.', 31, $this->source); })()), $context, $blocks)) {
                    // line 32
                    echo "        ";
                    $__internal_compile_0 = $context;
                    $__internal_compile_1 = ["row" => $context["row"]];
                    if (!twig_test_iterable($__internal_compile_1)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 32, $this->getSourceContext());
                    }
                    $__internal_compile_1 = twig_to_array($__internal_compile_1);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                    // line 33
                    echo "                ";
                    $this->displayBlock((isset($context["blockName"]) || array_key_exists("blockName", $context) ? $context["blockName"] : (function () { throw new RuntimeError('Variable "blockName" does not exist.', 33, $this->source); })()), $context, $blocks);
                    echo "
        ";
                    $context = $__internal_compile_0;
                    // line 35
                    echo "        ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 36, $this->source); })()), [], "any", false, false, false, 36), "html", null, true);
                    echo "
    ";
                }
                // line 38
                echo "                ";
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
            // line 39
            echo "</td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>

    </table>
</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosGrid/_html_table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 42,  205 => 39,  191 => 38,  185 => 36,  182 => 35,  176 => 33,  167 => 32,  165 => 31,  160 => 28,  157 => 27,  154 => 26,  137 => 25,  134 => 24,  117 => 23,  112 => 20,  103 => 17,  100 => 16,  97 => 15,  94 => 14,  90 => 13,  84 => 10,  79 => 8,  74 => 6,  71 => 5,  69 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    {{ _self}} content

{% set _controller = '@survos/grid-bundle/datatables' %}
<div
        {{ stimulus_controller(_controller) }}
>
    <div         {{ stimulus_target(_controller, 'modal') }}>Modal</div>

    <table class=\"table\" {{ stimulus_target(_controller, 'table') }}>
        <thead>
        <tr>
            {% for c in columns %}
                {% set columnName = c is iterable ? c.data|default(false) : c %}
                {% set title = c is iterable ? c.title|default(columnName|title) : columnName|title %}
                <th>
                    {{ title }}
                </th>
            {% endfor %}
        </tr>
        </thead>
        <tbody>
        {% for row in data %}
            <tr>
                {% for c in columns %}
                {% set blockName = c is iterable ? c.blockName|default(false) : c %}
                {% set columnName = c is iterable ? c.data|default(false) : c %}
<td>


    {% if block(blockName) is defined %}
        {% with {row: row} %}
                {{ block(blockName) }}
        {% endwith %}
        {% else %}
            {{ attribute(row, columnName)  }}
    {% endif %}
                {% endfor %}
</td>
            </tr>
        {% endfor %}
        </tbody>

    </table>
</div>
    {% endblock %}
", "@SurvosGrid/_html_table.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/grid-bundle/templates/_html_table.html.twig");
    }
}
