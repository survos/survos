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

/* @SurvosBootstrap/Partials/_control-sidebar.html.twig */
class __TwigTemplate_fd7c731782abf6c207ab8451f806776f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/Partials/_control-sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/Partials/_control-sidebar.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", true, true, false, 1) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 1, $this->source); })()), "control_sidebar", [], "any", false, false, false, 1)))) {
            // line 2
            echo "<aside class=\"control-sidebar control-sidebar-dark\">
    ";
            // line 3
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 3, $this->source); })()), "control_sidebar", [], "any", false, false, false, 3)) > 1)) {
                // line 4
                echo "    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "control_sidebar", [], "any", false, false, false, 5));
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
                foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                    // line 6
                    echo "            <li";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) {
                        echo " class=\"active\"";
                    }
                    echo "><a href=\"#control-sidebar-";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "-tab\" data-toggle=\"tab\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 6), "html", null, true);
                    echo "\"></i></a></li>
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
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "    </ul>
    <div class=\"tab-content\">
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 10, $this->source); })()), "control_sidebar", [], "any", false, false, false, 10));
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
                foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                    // line 11
                    echo "            <div class=\"tab-pane ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 11)) {
                        echo "active";
                    }
                    echo "\" id=\"control-sidebar-";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "-tab\">
                ";
                    // line 12
                    if (twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", true, true, false, 12)) {
                        // line 13
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller(twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", false, false, false, 13), ["originalRequest" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13)]));
                        echo "
                ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 14
$context["tab"], "template", [], "any", true, true, false, 14)) {
                        // line 15
                        echo "                    ";
                        $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["tab"], "template", [], "any", false, false, false, 15), "@SurvosBootstrap/Partials/_control-sidebar.html.twig", 15)->display($context);
                        // line 16
                        echo "                ";
                    }
                    // line 17
                    echo "            </div>
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
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    </div>
    ";
            } else {
                // line 21
                echo "        <div class=\"p-3 control-sidebar-content\">
        ";
                // line 22
                $context["tab"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 22, $this->source); })()), "control_sidebar", [], "any", false, false, false, 22));
                // line 23
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "controller", [], "any", true, true, false, 23)) {
                    // line 24
                    echo "            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller(twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 24, $this->source); })()), "controller", [], "any", false, false, false, 24), ["originalRequest" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24)]));
                    echo "
        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 25
($context["tab"] ?? null), "template", [], "any", true, true, false, 25)) {
                    // line 26
                    echo "            ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 26, $this->source); })()), "template", [], "any", false, false, false, 26), "@SurvosBootstrap/Partials/_control-sidebar.html.twig", 26)->display($context);
                    // line 27
                    echo "        ";
                }
                // line 28
                echo "        </div>
    ";
            }
            // line 30
            echo "</aside>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@SurvosBootstrap/Partials/_control-sidebar.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  182 => 30,  178 => 28,  175 => 27,  172 => 26,  170 => 25,  165 => 24,  162 => 23,  160 => 22,  157 => 21,  153 => 19,  138 => 17,  135 => 16,  132 => 15,  130 => 14,  125 => 13,  123 => 12,  114 => 11,  97 => 10,  93 => 8,  70 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if admin_lte_context.control_sidebar is defined and admin_lte_context.control_sidebar is not empty %}
<aside class=\"control-sidebar control-sidebar-dark\">
    {% if admin_lte_context.control_sidebar|length > 1 %}
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        {% for name, tab in admin_lte_context.control_sidebar %}
            <li{% if loop.first %} class=\"active\"{% endif %}><a href=\"#control-sidebar-{{ name }}-tab\" data-toggle=\"tab\"><i class=\"{{ tab.icon }}\"></i></a></li>
        {% endfor %}
    </ul>
    <div class=\"tab-content\">
        {% for name, tab in admin_lte_context.control_sidebar %}
            <div class=\"tab-pane {% if loop.first %}active{% endif %}\" id=\"control-sidebar-{{ name }}-tab\">
                {% if tab.controller is defined %}
                    {{ render(controller(tab.controller, {'originalRequest': app.request})) }}
                {% elseif tab.template is defined %}
                    {% include tab.template %}
                {% endif %}
            </div>
        {% endfor %}
    </div>
    {% else %}
        <div class=\"p-3 control-sidebar-content\">
        {% set tab = admin_lte_context.control_sidebar|first %}
        {% if tab.controller is defined %}
            {{ render(controller(tab.controller, {'originalRequest': app.request})) }}
        {% elseif tab.template is defined %}
            {% include tab.template %}
        {% endif %}
        </div>
    {% endif %}
</aside>
{% endif %}
", "@SurvosBootstrap/Partials/_control-sidebar.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/Partials/_control-sidebar.html.twig");
    }
}
