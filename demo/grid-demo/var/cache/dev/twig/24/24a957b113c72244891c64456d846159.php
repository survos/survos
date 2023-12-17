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

/* @SurvosCrawler/results.html.twig */
class __TwigTemplate_e5dbbbb157862ffed6fbdf57e53bdc71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosCrawler/results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosCrawler/results.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@SurvosCrawler/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/simple-datatables@8.0.0/dist/column_filter.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <script type=\"module\">
        import {DataTable} from 'https://cdn.jsdelivr.net/npm/simple-datatables@8.0.0/+esm'
        // import {DataTable} from \"simple-datatables\"
        document.querySelectorAll(\".simple-datatables\").forEach(table => {
            new DataTable(table, {
                searchable: true,
                fixedHeight: true,
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crawldata"]) || array_key_exists("crawldata", $context) ? $context["crawldata"] : (function () { throw new RuntimeError('Variable "crawldata" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["header"] => $context["data"]) {
            // line 24
            echo "        <h3>";
            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
            echo "</h3>
        <table class=\"simple-datatables\">
            <thead>
            <tr>
                <th>URL</th>
                <th>route</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 34
                echo "                <tr>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "path", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "route", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['header'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        // line 62
        echo "

";
        // line 67
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosCrawler/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  176 => 62,  173 => 42,  165 => 39,  156 => 36,  152 => 35,  149 => 34,  145 => 33,  132 => 24,  128 => 23,  125 => 22,  115 => 21,  95 => 10,  85 => 9,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/simple-datatables@8.0.0/dist/column_filter.min.css\">
{% endblock %}

{% block javascripts %}
    <script type=\"module\">
        import {DataTable} from 'https://cdn.jsdelivr.net/npm/simple-datatables@8.0.0/+esm'
        // import {DataTable} from \"simple-datatables\"
        document.querySelectorAll(\".simple-datatables\").forEach(table => {
            new DataTable(table, {
                searchable: true,
                fixedHeight: true,
            });
        });
    </script>
{% endblock %}
{% block body %}

    {% for header, data in crawldata %}
        <h3>{{ header }}</h3>
        <table class=\"simple-datatables\">
            <thead>
            <tr>
                <th>URL</th>
                <th>route</th>
            </tr>
            </thead>
            <tbody>
            {% for d in data %}
                <tr>
                    <td>{{ d.path }}</td>
                    <td>{{ d.route }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}

{#    {% for header, data in crawldata %}#}
{#        <h3>{{ header }}</h3>#}
{#        <div class=\"row\">#}
{#            {% component grid with {#}
{#                data: data,#}
{#                caller: _self,#}
{#                columns: [#}
{#                    {name: 'path'},#}
{#                    'route',#}
{#                    'statusCode',#}
{#                    'rp'#}
{#                ]#}
{#            } %}#}
{#                {% block path %}#}
{#                    {{ row.path }}#}
{#                {% endblock %}#}
{#                {% block rp %}#}
{#                    {{ row.rp|json_encode }}#}
{#                {% endblock %}#}


{#            {% endcomponent %}#}
{#        </div>#}
{#    {% endfor %}#}


{% endblock %}
", "@SurvosCrawler/results.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/crawler-bundle/templates/results.html.twig");
    }
}
