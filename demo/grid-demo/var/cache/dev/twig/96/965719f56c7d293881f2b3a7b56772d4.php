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

/* @SurvosGrid/components/grid.html.twig */
class __TwigTemplate_7c6e48149039518444cd776210d7b717 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/components/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/components/grid.html.twig"));

        // line 2
        if ((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    ";
            $context["columns"] = twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "normalizedColumns", [], "any", false, false, false, 3);
            // line 4
            echo "    <div
            ";
            // line 5
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "stimulusController", [], "any", false, false, false, 5)) ? ($this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "stimulusController", [], "any", false, false, false, 5), ["useDatatables" => twig_get_attribute($this->env, $this->source,             // line 6
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 6, $this->source); })()), "useDatatables", [], "any", false, false, false, 6), "search" => twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 7, $this->source); })()), "search", [], "any", false, false, false, 7), "scrollY" => twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 8, $this->source); })()), "scrollY", [], "any", false, false, false, 8), "info" => twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "info", [], "any", false, false, false, 9)])) : (""));
            // line 10
            echo ">
        ";
            // line 12
            echo "        <table ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 12, $this->source); })()), "tableId", [], "any", false, false, false, 12)) ? (twig_sprintf("id=\"%s\"", twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 12, $this->source); })()), "tableId", [], "any", false, false, false, 12))) : (""));
            echo "
                class=\"table table table-striped responsive ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "tableClasses", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
                ";
            // line 14
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "stimulusController", [], "any", false, false, false, 14)) ? ($this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusTarget($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "stimulusController", [], "any", false, false, false, 14), "table")) : (""));
            echo ">
            <thead>
            <tr>
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 18
                echo "                    <th>
                        ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 19), "html", null, true);
                echo "
                    </th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </tr>
            </thead>
            <tbody>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()));
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
                // line 26
                echo "                <tr class=\"align-top\">
                    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 27, $this->source); })()));
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
                    // line 28
                    echo "                    <td>

                        ";
                    // line 31
                    echo "                        ";
                    // line 32
                    echo "                        ";
                    // line 33
                    echo "
                        ";
                    // line 35
                    echo "                        ";
                    $context["templateName"] = ((twig_get_attribute($this->env, $this->source, $context["c"], "twigTemplate", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["c"], "twigTemplate", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 35))) : (twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 35)));
                    // line 36
                    echo "
                        ";
                    // line 37
                    if (                    $this->hasBlock((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 37, $this->source); })()), $context, $blocks)) {
                        // line 38
                        echo "                            ";
                        $__internal_compile_0 = $context;
                        $__internal_compile_1 = ["row" => $context["row"], "column" => $context["c"], "c" => $context["c"]];
                        if (!twig_test_iterable($__internal_compile_1)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 38, $this->getSourceContext());
                        }
                        $__internal_compile_1 = twig_to_array($__internal_compile_1);
                        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                        // line 39
                        echo "                                ";
                        $this->displayBlock((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 39, $this->source); })()), $context, $blocks);
                        echo "
                            ";
                        $context = $__internal_compile_0;
                        // line 41
                        echo "                        ";
                    } else {
                        // line 42
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["c"], "twigTemplate", [], "any", false, false, false, 42)) {
                            // line 43
                            echo "                                <span class=\"text-danger\">";
                            echo twig_escape_filter($this->env, (isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 43, $this->source); })()), "html", null, true);
                            echo " is not defined.</span>
                            ";
                        }
                        // line 45
                        echo "                            ";
                        $context["label"] = ((twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 45), [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 45), [], "any", false, false, false, 45))) : (""));
                        // line 46
                        echo "                            ";
                        if (twig_test_iterable((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 46, $this->source); })()))) {
                            // line 47
                            echo "                                ";
                            $context["label"] = twig_length_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 47, $this->source); })()));
                            // line 48
                            echo "                            ";
                        }
                        // line 49
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["c"], "route", [], "any", false, false, false, 49)) {
                            // line 50
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["c"], "route", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, $context["row"], "rp", [], "any", false, false, false, 50)), "html", null, true);
                            echo "\">
                                    ";
                            // line 51
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 51, $this->source); })()), "html", null, true);
                            echo "
                                </a>
                            ";
                        } else {
                            // line 54
                            echo "                                ";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 54, $this->source); })()), "html", null, true);
                            echo "
                            ";
                        }
                        // line 56
                        echo "                        ";
                    }
                    // line 57
                    echo "                        ";
                    // line 58
                    echo "                        ";
                    // line 59
                    echo "                        ";
                    // line 60
                    echo "                        ";
                    // line 61
                    echo "                        ";
                    // line 62
                    echo "                        ";
                    // line 63
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                    </td>
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
            // line 68
            echo "            </tbody>

        </table>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosGrid/components/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 68,  241 => 65,  226 => 63,  224 => 62,  222 => 61,  220 => 60,  218 => 59,  216 => 58,  214 => 57,  211 => 56,  205 => 54,  199 => 51,  194 => 50,  191 => 49,  188 => 48,  185 => 47,  182 => 46,  179 => 45,  173 => 43,  170 => 42,  167 => 41,  161 => 39,  152 => 38,  150 => 37,  147 => 36,  144 => 35,  141 => 33,  139 => 32,  137 => 31,  133 => 28,  116 => 27,  113 => 26,  96 => 25,  91 => 22,  82 => 19,  79 => 18,  75 => 17,  69 => 14,  65 => 13,  60 => 12,  57 => 10,  55 => 9,  54 => 8,  53 => 7,  52 => 6,  51 => 5,  48 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/components/datatable.html.twig #}
{% if condition %}
    {% set columns = this.normalizedColumns %}
    <div
            {{ this.stimulusController ? stimulus_controller(this.stimulusController, {
                useDatatables: this.useDatatables,
                search: this.search,
                scrollY: this.scrollY,
                info: this.info,
            }) }}>
        {# <table class=\"table\"> #}
        <table {{ this.tableId ? 'id=\"%s\"'|format(this.tableId)|raw }}
                class=\"table table table-striped responsive {{ this.tableClasses }}\"
                {{ this.stimulusController ? stimulus_target(this.stimulusController, 'table') }}>
            <thead>
            <tr>
                {% for c in columns %}
                    <th>
                        {{ c.title }}
                    </th>
                {% endfor %}
            </tr>
            </thead>
            <tbody>
            {% for row in data %}
                <tr class=\"align-top\">
                    {% for c in columns %}
                    <td>

                        {#                {% if c.templateName and block(c.templateName) is defined %} #}
                        {#                {{ dump(c) }} #}
                        {#                {% endif %} #}

                        {# use a different template than the name.  We need common templates. #}
                        {% set templateName = c.twigTemplate|default(c.name) %}

                        {% if block(templateName) is defined %}
                            {% with {row: row, column: c, c:c } %}
                                {{ block(templateName) }}
                            {% endwith %}
                        {% else %}
                            {% if c.twigTemplate %}
                                <span class=\"text-danger\">{{ templateName }} is not defined.</span>
                            {% endif %}
                            {% set label = attribute(row, c.name)|default() %}
                            {% if label is iterable %}
                                {% set label = label|length %}
                            {% endif %}
                            {% if c.route %}
                                <a href=\"{{ path(c.route, row.rp) }}\">
                                    {{ label }}
                                </a>
                            {% else %}
                                {{ label }}
                            {% endif %}
                        {% endif %}
                        {#                    {% set _block = block(c)|default(false) %} #}
                        {#                    {% if _block is not empty %} #}
                        {#                        {{ _block|raw }} #}
                        {#                    {% else %} #}
                        {#                        {{ attribute(row, c) }} #}
                        {#                    {% endif %} #}

                        {% endfor %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>

        </table>
    </div>
{% endif %}
", "@SurvosGrid/components/grid.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/grid-bundle/templates/components/grid.html.twig");
    }
}
