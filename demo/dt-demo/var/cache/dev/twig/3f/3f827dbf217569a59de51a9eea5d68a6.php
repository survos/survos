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

/* app/grid.html.twig */
class __TwigTemplate_84796ece75740b026086be314745eca8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'demo' => [$this, 'block_demo'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/grid.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
";
        // line 17
        echo "    Some Grid Demos

    ";
        // line 19
        $context["url"] = "https://jsonplaceholder.typicode.com/posts";
        // line 20
        echo "    ";
        $context["data"] = $this->env->getFunction('request_data')->getCallable()((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 20, $this->source); })()));
        // line 21
        echo "
    ";
        // line 22
        $context["columns"] = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22));
        // line 23
        echo "    ";
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("grid", twig_to_array(["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "tableId" => "example", "columns" => (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 23, $this->source); })()), "useDatatables" => "false"]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("grid", twig_to_array(["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "tableId" => "example", "columns" => (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 23, $this->source); })()), "useDatatables" => "false"]), $context, "app/grid.html.twig", 2374464461);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            if (!isset($embeddedContext["outerBlocks"])) {
                $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
            }
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 2374464461);
            $this->loadTemplate("app/grid.html.twig", "app/grid.html.twig", 23, "2374464461")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 28
        echo "
    ";
        // line 29
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("grid", twig_to_array(["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "columns" => twig_reverse_filter($this->env, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 29, $this->source); })())), "useDatatables" => "true"]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("grid", twig_to_array(["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "columns" => twig_reverse_filter($this->env, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 29, $this->source); })())), "useDatatables" => "true"]), $context, "app/grid.html.twig", 40088893921);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            if (!isset($embeddedContext["outerBlocks"])) {
                $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
            }
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 40088893921);
            $this->loadTemplate("app/grid.html.twig", "app/grid.html.twig", 29, "40088893921")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 34
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_demo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "demo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "demo"));

        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["primary", "warning"]);
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 40
            echo "        ";
            $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("button", twig_to_array(["color" => $context["color"]]));
            if (null !== $preRendered) {
                echo $preRendered;
            } else {
                $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("button", twig_to_array(["color" => $context["color"]]), $context, "app/grid.html.twig", 32456588981);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                if (!isset($embeddedContext["outerBlocks"])) {
                    $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
                }
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 32456588981);
                $this->loadTemplate("app/grid.html.twig", "app/grid.html.twig", 40, "32456588981")->display($embeddedContext, $embeddedBlocks);
                $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
            }
            // line 44
            echo "
        ";
            // line 45
            $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("button", twig_to_array(["color" => $context["color"]]));
            if (null !== $preRendered) {
                echo $preRendered;
            } else {
                $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("button", twig_to_array(["color" => $context["color"]]), $context, "app/grid.html.twig", 29715434531);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                if (!isset($embeddedContext["outerBlocks"])) {
                    $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
                }
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 29715434531);
                $this->loadTemplate("app/grid.html.twig", "app/grid.html.twig", 45, "29715434531")->display($embeddedContext, $embeddedBlocks);
                $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
            }
            // line 48
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", ["_controller"], "method", false, false, false, 51));
        echo "\">
        ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "attributes", [], "any", false, false, false, 52), "get", ["_controller"], "method", false, false, false, 52), "html", null, true);
        echo "
    </a>


";
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["@survos/grid-bundle/grid"]);
        foreach ($context['_seq'] as $context["_key"] => $context["_sc"]) {
            // line 59
            echo "    <h3>";
            echo twig_escape_filter($this->env, $context["_sc"], "html", null, true);
            echo "</h3>
     <table class=\"datatables\"
             ";
            // line 61
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController($context["_sc"]);
            echo "
     >
        <thead>
        <tr>
            <th>abbr</th>
            <th>name</th>
            <th>number</th>
        </thead>
        <tbody>
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 71
                echo "            <tr>
                <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_format_filter($this->env, $context["j"], (("2023-" . $context["j"]) . "-01")), "M"), "html", null, true);
                echo "</td>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_format_filter($this->env, $context["j"], (("2023-" . $context["j"]) . "-01")), "F"), "html", null, true);
                echo "</td>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </tbody>
    </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_sc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "app/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 77,  240 => 74,  236 => 73,  232 => 72,  229 => 71,  225 => 70,  213 => 61,  207 => 59,  202 => 58,  195 => 52,  191 => 51,  188 => 50,  181 => 48,  166 => 45,  163 => 44,  147 => 40,  142 => 39,  132 => 38,  120 => 34,  105 => 29,  102 => 28,  86 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  72 => 17,  69 => 13,  59 => 12,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block javascripts %}#}
{#    {{ importmap('app') }}#}
{#    <script type=\"module\">#}
{#        import DataTable from 'https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.mjs'#}
{#        let el=document.getElementById('example');#}
{#        let dt=new DataTable(el);#}
{#    </script>#}
{#{% endblock %}#}

{% block body %}

{#    <div {{ stimulus_controller('hello') }}>#}
{#        Hola#}
{#    </div>#}
    Some Grid Demos

    {% set url = 'https://jsonplaceholder.typicode.com/posts' %}
    {% set data = request_data(url) %}

    {% set columns = data[0]|keys %}
    {% component 'grid' with { data: data, tableId: 'example', columns: columns, useDatatables: 'false' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}

    {% component 'grid' with { data: data, columns: columns|reverse, useDatatables: 'true' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}


{% endblock %}

{% block demo %}
    {% for color in ['primary','warning'] %}
        {% component 'button' with { color: color } %}
            {% block content %}the color is
            {{ color }}
        {% endblock %}{% endcomponent %}

        {% component 'button' with { color: color } %}
            {% block content %}extra content
        {% endblock %}{% endcomponent %}

    {% endfor %}

    <a href=\"{{ path(app.request.attributes.get(\"_controller\")) }}\">
        {{ app.request.attributes.get(\"_controller\") }}
    </a>


{#    {% for _sc in ['@survos/datatables-bundle/table', '@survos/grid-bundle/grid'] %}#}
{#    {% for _sc in ['@survos/datatables-bundle/table'] %}#}
    {% for _sc in ['@survos/grid-bundle/grid'] %}
    <h3>{{ _sc }}</h3>
     <table class=\"datatables\"
             {{ stimulus_controller(_sc) }}
     >
        <thead>
        <tr>
            <th>abbr</th>
            <th>name</th>
            <th>number</th>
        </thead>
        <tbody>
        {% for j in 1..12 %}
            <tr>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('M') }}</td>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('F') }}</td>
                <td>{{ j }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endfor %}
{% endblock %}
", "app/grid.html.twig", "/home/tac/ca/survos/demo/dt-demo/templates/app/grid.html.twig");
    }
}


/* app/grid.html.twig */
class __TwigTemplate_84796ece75740b026086be314745eca8___2374464461 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'id' => [$this, 'block_id'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 23, $this->source); })()), "app/grid.html.twig", 23);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "id"));

        // line 25
        echo "            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "app/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 25,  426 => 24,  387 => 23,  249 => 77,  240 => 74,  236 => 73,  232 => 72,  229 => 71,  225 => 70,  213 => 61,  207 => 59,  202 => 58,  195 => 52,  191 => 51,  188 => 50,  181 => 48,  166 => 45,  163 => 44,  147 => 40,  142 => 39,  132 => 38,  120 => 34,  105 => 29,  102 => 28,  86 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  72 => 17,  69 => 13,  59 => 12,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block javascripts %}#}
{#    {{ importmap('app') }}#}
{#    <script type=\"module\">#}
{#        import DataTable from 'https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.mjs'#}
{#        let el=document.getElementById('example');#}
{#        let dt=new DataTable(el);#}
{#    </script>#}
{#{% endblock %}#}

{% block body %}

{#    <div {{ stimulus_controller('hello') }}>#}
{#        Hola#}
{#    </div>#}
    Some Grid Demos

    {% set url = 'https://jsonplaceholder.typicode.com/posts' %}
    {% set data = request_data(url) %}

    {% set columns = data[0]|keys %}
    {% component 'grid' with { data: data, tableId: 'example', columns: columns, useDatatables: 'false' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}

    {% component 'grid' with { data: data, columns: columns|reverse, useDatatables: 'true' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}


{% endblock %}

{% block demo %}
    {% for color in ['primary','warning'] %}
        {% component 'button' with { color: color } %}
            {% block content %}the color is
            {{ color }}
        {% endblock %}{% endcomponent %}

        {% component 'button' with { color: color } %}
            {% block content %}extra content
        {% endblock %}{% endcomponent %}

    {% endfor %}

    <a href=\"{{ path(app.request.attributes.get(\"_controller\")) }}\">
        {{ app.request.attributes.get(\"_controller\") }}
    </a>


{#    {% for _sc in ['@survos/datatables-bundle/table', '@survos/grid-bundle/grid'] %}#}
{#    {% for _sc in ['@survos/datatables-bundle/table'] %}#}
    {% for _sc in ['@survos/grid-bundle/grid'] %}
    <h3>{{ _sc }}</h3>
     <table class=\"datatables\"
             {{ stimulus_controller(_sc) }}
     >
        <thead>
        <tr>
            <th>abbr</th>
            <th>name</th>
            <th>number</th>
        </thead>
        <tbody>
        {% for j in 1..12 %}
            <tr>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('M') }}</td>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('F') }}</td>
                <td>{{ j }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endfor %}
{% endblock %}
", "app/grid.html.twig", "/home/tac/ca/survos/demo/dt-demo/templates/app/grid.html.twig");
    }
}


/* app/grid.html.twig */
class __TwigTemplate_84796ece75740b026086be314745eca8___40088893921 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'id' => [$this, 'block_id'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 29, $this->source); })()), "app/grid.html.twig", 29);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "id"));

        // line 31
        echo "            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "app/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 31,  610 => 30,  571 => 29,  436 => 25,  426 => 24,  387 => 23,  249 => 77,  240 => 74,  236 => 73,  232 => 72,  229 => 71,  225 => 70,  213 => 61,  207 => 59,  202 => 58,  195 => 52,  191 => 51,  188 => 50,  181 => 48,  166 => 45,  163 => 44,  147 => 40,  142 => 39,  132 => 38,  120 => 34,  105 => 29,  102 => 28,  86 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  72 => 17,  69 => 13,  59 => 12,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block javascripts %}#}
{#    {{ importmap('app') }}#}
{#    <script type=\"module\">#}
{#        import DataTable from 'https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.mjs'#}
{#        let el=document.getElementById('example');#}
{#        let dt=new DataTable(el);#}
{#    </script>#}
{#{% endblock %}#}

{% block body %}

{#    <div {{ stimulus_controller('hello') }}>#}
{#        Hola#}
{#    </div>#}
    Some Grid Demos

    {% set url = 'https://jsonplaceholder.typicode.com/posts' %}
    {% set data = request_data(url) %}

    {% set columns = data[0]|keys %}
    {% component 'grid' with { data: data, tableId: 'example', columns: columns, useDatatables: 'false' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}

    {% component 'grid' with { data: data, columns: columns|reverse, useDatatables: 'true' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}


{% endblock %}

{% block demo %}
    {% for color in ['primary','warning'] %}
        {% component 'button' with { color: color } %}
            {% block content %}the color is
            {{ color }}
        {% endblock %}{% endcomponent %}

        {% component 'button' with { color: color } %}
            {% block content %}extra content
        {% endblock %}{% endcomponent %}

    {% endfor %}

    <a href=\"{{ path(app.request.attributes.get(\"_controller\")) }}\">
        {{ app.request.attributes.get(\"_controller\") }}
    </a>


{#    {% for _sc in ['@survos/datatables-bundle/table', '@survos/grid-bundle/grid'] %}#}
{#    {% for _sc in ['@survos/datatables-bundle/table'] %}#}
    {% for _sc in ['@survos/grid-bundle/grid'] %}
    <h3>{{ _sc }}</h3>
     <table class=\"datatables\"
             {{ stimulus_controller(_sc) }}
     >
        <thead>
        <tr>
            <th>abbr</th>
            <th>name</th>
            <th>number</th>
        </thead>
        <tbody>
        {% for j in 1..12 %}
            <tr>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('M') }}</td>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('F') }}</td>
                <td>{{ j }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endfor %}
{% endblock %}
", "app/grid.html.twig", "/home/tac/ca/survos/demo/dt-demo/templates/app/grid.html.twig");
    }
}


/* app/grid.html.twig */
class __TwigTemplate_84796ece75740b026086be314745eca8___32456588981 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 40
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 40, $this->source); })()), "app/grid.html.twig", 40);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "the color is
            ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "app/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 42,  794 => 41,  755 => 40,  620 => 31,  610 => 30,  571 => 29,  436 => 25,  426 => 24,  387 => 23,  249 => 77,  240 => 74,  236 => 73,  232 => 72,  229 => 71,  225 => 70,  213 => 61,  207 => 59,  202 => 58,  195 => 52,  191 => 51,  188 => 50,  181 => 48,  166 => 45,  163 => 44,  147 => 40,  142 => 39,  132 => 38,  120 => 34,  105 => 29,  102 => 28,  86 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  72 => 17,  69 => 13,  59 => 12,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block javascripts %}#}
{#    {{ importmap('app') }}#}
{#    <script type=\"module\">#}
{#        import DataTable from 'https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.mjs'#}
{#        let el=document.getElementById('example');#}
{#        let dt=new DataTable(el);#}
{#    </script>#}
{#{% endblock %}#}

{% block body %}

{#    <div {{ stimulus_controller('hello') }}>#}
{#        Hola#}
{#    </div>#}
    Some Grid Demos

    {% set url = 'https://jsonplaceholder.typicode.com/posts' %}
    {% set data = request_data(url) %}

    {% set columns = data[0]|keys %}
    {% component 'grid' with { data: data, tableId: 'example', columns: columns, useDatatables: 'false' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}

    {% component 'grid' with { data: data, columns: columns|reverse, useDatatables: 'true' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}


{% endblock %}

{% block demo %}
    {% for color in ['primary','warning'] %}
        {% component 'button' with { color: color } %}
            {% block content %}the color is
            {{ color }}
        {% endblock %}{% endcomponent %}

        {% component 'button' with { color: color } %}
            {% block content %}extra content
        {% endblock %}{% endcomponent %}

    {% endfor %}

    <a href=\"{{ path(app.request.attributes.get(\"_controller\")) }}\">
        {{ app.request.attributes.get(\"_controller\") }}
    </a>


{#    {% for _sc in ['@survos/datatables-bundle/table', '@survos/grid-bundle/grid'] %}#}
{#    {% for _sc in ['@survos/datatables-bundle/table'] %}#}
    {% for _sc in ['@survos/grid-bundle/grid'] %}
    <h3>{{ _sc }}</h3>
     <table class=\"datatables\"
             {{ stimulus_controller(_sc) }}
     >
        <thead>
        <tr>
            <th>abbr</th>
            <th>name</th>
            <th>number</th>
        </thead>
        <tbody>
        {% for j in 1..12 %}
            <tr>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('M') }}</td>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('F') }}</td>
                <td>{{ j }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endfor %}
{% endblock %}
", "app/grid.html.twig", "/home/tac/ca/survos/demo/dt-demo/templates/app/grid.html.twig");
    }
}


/* app/grid.html.twig */
class __TwigTemplate_84796ece75740b026086be314745eca8___29715434531 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 45
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 45, $this->source); })()), "app/grid.html.twig", 45);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/grid.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_outer__block_fallback($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "extra content
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "app/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  979 => 46,  940 => 45,  806 => 42,  794 => 41,  755 => 40,  620 => 31,  610 => 30,  571 => 29,  436 => 25,  426 => 24,  387 => 23,  249 => 77,  240 => 74,  236 => 73,  232 => 72,  229 => 71,  225 => 70,  213 => 61,  207 => 59,  202 => 58,  195 => 52,  191 => 51,  188 => 50,  181 => 48,  166 => 45,  163 => 44,  147 => 40,  142 => 39,  132 => 38,  120 => 34,  105 => 29,  102 => 28,  86 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  72 => 17,  69 => 13,  59 => 12,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block javascripts %}#}
{#    {{ importmap('app') }}#}
{#    <script type=\"module\">#}
{#        import DataTable from 'https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.mjs'#}
{#        let el=document.getElementById('example');#}
{#        let dt=new DataTable(el);#}
{#    </script>#}
{#{% endblock %}#}

{% block body %}

{#    <div {{ stimulus_controller('hello') }}>#}
{#        Hola#}
{#    </div>#}
    Some Grid Demos

    {% set url = 'https://jsonplaceholder.typicode.com/posts' %}
    {% set data = request_data(url) %}

    {% set columns = data[0]|keys %}
    {% component 'grid' with { data: data, tableId: 'example', columns: columns, useDatatables: 'false' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}

    {% component 'grid' with { data: data, columns: columns|reverse, useDatatables: 'true' } %}
        {% block id %}
            {{ row.id }}
        {% endblock %}
    {% endcomponent %}


{% endblock %}

{% block demo %}
    {% for color in ['primary','warning'] %}
        {% component 'button' with { color: color } %}
            {% block content %}the color is
            {{ color }}
        {% endblock %}{% endcomponent %}

        {% component 'button' with { color: color } %}
            {% block content %}extra content
        {% endblock %}{% endcomponent %}

    {% endfor %}

    <a href=\"{{ path(app.request.attributes.get(\"_controller\")) }}\">
        {{ app.request.attributes.get(\"_controller\") }}
    </a>


{#    {% for _sc in ['@survos/datatables-bundle/table', '@survos/grid-bundle/grid'] %}#}
{#    {% for _sc in ['@survos/datatables-bundle/table'] %}#}
    {% for _sc in ['@survos/grid-bundle/grid'] %}
    <h3>{{ _sc }}</h3>
     <table class=\"datatables\"
             {{ stimulus_controller(_sc) }}
     >
        <thead>
        <tr>
            <th>abbr</th>
            <th>name</th>
            <th>number</th>
        </thead>
        <tbody>
        {% for j in 1..12 %}
            <tr>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('M') }}</td>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('F') }}</td>
                <td>{{ j }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endfor %}
{% endblock %}
", "app/grid.html.twig", "/home/tac/ca/survos/demo/dt-demo/templates/app/grid.html.twig");
    }
}
