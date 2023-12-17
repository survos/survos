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

/* @SurvosSimpleDatatables/components/grid.html.twig */
class __TwigTemplate_898ffbeef5f161c8bea454a3b1a49acb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosSimpleDatatables/components/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosSimpleDatatables/components/grid.html.twig"));

        // line 2
        if ((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    ";
            $context["columns"] = twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "normalizedColumns", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            // line 5
            echo "        <table ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "tableId", [], "any", false, false, false, 5)) ? (twig_sprintf("id=\"%s\"", twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "tableId", [], "any", false, false, false, 5))) : (""));
            echo "

                ";
            // line 7
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 7, $this->source); })()), "stimulusController", [], "any", false, false, false, 7)) ? ($this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 7, $this->source); })()), "stimulusController", [], "any", false, false, false, 7), ["useDatatables" => twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 8, $this->source); })()), "useDatatables", [], "any", false, false, false, 8), "search" => twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "search", [], "any", false, false, false, 9), "perPage" => twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "perPage", [], "any", false, false, false, 10), "scrollY" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 11, $this->source); })()), "scrollY", [], "any", false, false, false, 11), "dom" => twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 12, $this->source); })()), "dom", [], "any", false, false, false, 12), "info" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "info", [], "any", false, false, false, 13)])) : (""));
            // line 14
            echo "

                class=\"table table table-striped responsivexx ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "tableClasses", [], "any", false, false, false, 16), "html", null, true);
            echo "\"
                ";
            // line 17
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "stimulusController", [], "any", false, false, false, 17)) ? ($this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget(twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "stimulusController", [], "any", false, false, false, 17), "table")) : (""));
            echo ">
            <thead>
            <tr>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 21
                echo "                    <th class=\"
                        ";
                // line 22
                echo ((twig_get_attribute($this->env, $this->source, $context["c"], "inSearchPane", [], "any", false, false, false, 22)) ? ("in-search-pane") : (""));
                echo "
                        \"
                    >
                        ";
                // line 25
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "trans", [], "any", false, false, false, 25)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 25))) : (twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 25))), "html", null, true);
                echo "
                    </th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </tr>
            </thead>
            <tbody>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()));
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
                // line 32
                echo "                <tr class=\"align-top\">
                    ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 33, $this->source); })()));
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
                    // line 34
                    echo "                    <td>

                        ";
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
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosSimpleDatatables/components/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 76,  257 => 73,  242 => 71,  240 => 70,  238 => 69,  236 => 68,  234 => 67,  232 => 66,  230 => 65,  227 => 64,  221 => 62,  215 => 59,  210 => 58,  207 => 57,  204 => 56,  201 => 55,  198 => 54,  195 => 53,  192 => 52,  189 => 51,  186 => 50,  180 => 48,  177 => 47,  174 => 46,  168 => 44,  159 => 43,  157 => 42,  154 => 41,  151 => 40,  148 => 38,  146 => 37,  142 => 34,  125 => 33,  122 => 32,  105 => 31,  100 => 28,  91 => 25,  85 => 22,  82 => 21,  78 => 20,  72 => 17,  68 => 16,  64 => 14,  62 => 13,  61 => 12,  60 => 11,  59 => 10,  58 => 9,  57 => 8,  56 => 7,  50 => 5,  48 => 4,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/components/datatable.html.twig #}
{% if condition %}
    {% set columns = this.normalizedColumns %}
        {# <table class=\"table\"> #}
        <table {{ this.tableId ? 'id=\"%s\"'|format(this.tableId)|raw }}

                {{ this.stimulusController ? stimulus_controller(this.stimulusController, {
                    useDatatables: this.useDatatables,
                    search: this.search,
                    perPage: this.perPage,
                    scrollY: this.scrollY,
                    dom: this.dom,
                    info: this.info,
                }) }}

                class=\"table table table-striped responsivexx {{ this.tableClasses }}\"
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
{% endif %}
", "@SurvosSimpleDatatables/components/grid.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/simple-datatables-bundle/templates/components/grid.html.twig");
    }
}
