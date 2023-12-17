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
class __TwigTemplate_90e30f1a82f610ed089ba1fd1c873d9a extends Template
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
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 8, $this->source); })()), "scrollY", [], "any", false, false, false, 8), "dom" => twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "dom", [], "any", false, false, false, 9), "searchPanesColumns" => twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "searchPanesColumns", [], "any", false, false, false, 10), "info" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 11, $this->source); })()), "info", [], "any", false, false, false, 11)])) : (""));
            // line 12
            echo ">
        ";
            // line 14
            echo "        <table ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "tableId", [], "any", false, false, false, 14)) ? (twig_sprintf("id=\"%s\"", twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "tableId", [], "any", false, false, false, 14))) : (""));
            echo "
                class=\"table table table-striped responsive ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 15, $this->source); })()), "tableClasses", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
                ";
            // line 16
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "stimulusController", [], "any", false, false, false, 16)) ? ($this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusTarget($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "stimulusController", [], "any", false, false, false, 16), "table")) : (""));
            echo ">
            <thead>
            <tr>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 20
                echo "                    <th class=\"
                        ";
                // line 21
                echo ((twig_get_attribute($this->env, $this->source, $context["c"], "inSearchPane", [], "any", false, false, false, 21)) ? ("in-search-pane") : (""));
                echo "
                        \"
                    >
                        ";
                // line 24
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 24, $this->source); })()), "trans", [], "any", false, false, false, 24)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 24))) : (twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 24))), "html", null, true);
                echo "
                    </th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tr>
            </thead>
            <tbody>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()));
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
                // line 31
                echo "                <tr class=\"align-top\">
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 32, $this->source); })()));
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
                    // line 33
                    echo "                    <td>

                        ";
                    // line 36
                    echo "                        ";
                    // line 37
                    echo "                        ";
                    // line 38
                    echo "
                        ";
                    // line 40
                    echo "                        ";
                    $context["templateName"] = ((twig_get_attribute($this->env, $this->source, $context["c"], "twigTemplate", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["c"], "twigTemplate", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 40))) : (twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 40)));
                    // line 41
                    echo "
                        ";
                    // line 42
                    if (                    $this->hasBlock((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 42, $this->source); })()), $context, $blocks)) {
                        // line 43
                        echo "                            ";
                        $__internal_compile_0 = $context;
                        $__internal_compile_1 = ["field_name" => twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 43), "row" => $context["row"], "column" => $context["c"], "c" => $context["c"]];
                        if (!twig_test_iterable($__internal_compile_1)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 43, $this->getSourceContext());
                        }
                        $__internal_compile_1 = twig_to_array($__internal_compile_1);
                        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                        // line 44
                        echo "                                ";
                        $this->displayBlock((isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 44, $this->source); })()), $context, $blocks);
                        echo "
                            ";
                        $context = $__internal_compile_0;
                        // line 46
                        echo "                        ";
                    } else {
                        // line 47
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["c"], "twigTemplate", [], "any", false, false, false, 47)) {
                            // line 48
                            echo "                                <span class=\"text-danger\">";
                            echo twig_escape_filter($this->env, (isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 48, $this->source); })()), "html", null, true);
                            echo " is not defined.</span>
                            ";
                        }
                        // line 50
                        echo "                            ";
                        $context["label"] = ((twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 50), [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 50), [], "any", false, false, false, 50))) : (""));
                        // line 51
                        echo "                            ";
                        if (twig_test_iterable((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 51, $this->source); })()))) {
                            // line 52
                            echo "                                ";
                            $context["label"] = twig_length_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 52, $this->source); })()));
                            // line 53
                            echo "                            ";
                        }
                        // line 54
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["c"], "translateValue", [], "any", false, false, false, 54)) {
                            // line 55
                            echo "                                ";
                            $context["label"] = ((twig_get_attribute($this->env, $this->source, $context["c"], "domain", [], "any", false, false, false, 55)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 55, $this->source); })()), array(), twig_get_attribute($this->env, $this->source, $context["c"], "domain", [], "any", false, false, false, 55))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 55, $this->source); })()))));
                            // line 56
                            echo "                            ";
                        }
                        // line 57
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["c"], "route", [], "any", false, false, false, 57)) {
                            // line 58
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["c"], "route", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, $context["row"], "rp", [], "any", false, false, false, 58)), "html", null, true);
                            echo "\">
                                    ";
                            // line 59
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 59, $this->source); })()), "html", null, true);
                            echo "
                                </a>
                            ";
                        } else {
                            // line 62
                            echo "                                ";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 62, $this->source); })()), "html", null, true);
                            echo "
                            ";
                        }
                        // line 64
                        echo "                        ";
                    }
                    // line 65
                    echo "                        ";
                    // line 66
                    echo "                        ";
                    // line 67
                    echo "                        ";
                    // line 68
                    echo "                        ";
                    // line 69
                    echo "                        ";
                    // line 70
                    echo "                        ";
                    // line 71
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
                // line 73
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
            // line 76
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
        return array (  274 => 76,  258 => 73,  243 => 71,  241 => 70,  239 => 69,  237 => 68,  235 => 67,  233 => 66,  231 => 65,  228 => 64,  222 => 62,  216 => 59,  211 => 58,  208 => 57,  205 => 56,  202 => 55,  199 => 54,  196 => 53,  193 => 52,  190 => 51,  187 => 50,  181 => 48,  178 => 47,  175 => 46,  169 => 44,  160 => 43,  158 => 42,  155 => 41,  152 => 40,  149 => 38,  147 => 37,  145 => 36,  141 => 33,  124 => 32,  121 => 31,  104 => 30,  99 => 27,  90 => 24,  84 => 21,  81 => 20,  77 => 19,  71 => 16,  67 => 15,  62 => 14,  59 => 12,  57 => 11,  56 => 10,  55 => 9,  54 => 8,  53 => 7,  52 => 6,  51 => 5,  48 => 4,  45 => 3,  43 => 2,);
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
                dom: this.dom,
                searchPanesColumns: this.searchPanesColumns,
                info: this.info,
            }) }}>
        {# <table class=\"table\"> #}
        <table {{ this.tableId ? 'id=\"%s\"'|format(this.tableId)|raw }}
                class=\"table table table-striped responsive {{ this.tableClasses }}\"
                {{ this.stimulusController ? stimulus_target(this.stimulusController, 'table') }}>
            <thead>
            <tr>
                {% for c in columns %}
                    <th class=\"
                        {{ c.inSearchPane ? 'in-search-pane' }}
                        \"
                    >
                        {{ this.trans ? c.title|trans : c.title }}
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
                            {% with {field_name: c.name, row: row, column: c, c:c } %}
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
                            {% if c.translateValue %}
                                {% set label = c.domain ? label|trans(domain=c.domain) : label|trans %}
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
