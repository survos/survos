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

/* @SurvosBootstrap/macros/toolbar.html.twig */
class __TwigTemplate_2ff7d243bcbd160713367568b7974f24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/toolbar.html.twig"));

        // line 1
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function macro_toolbar($__form__ = null, $__tools__ = null, $__toolsRight__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "tools" => $__tools__,
            "toolsRight" => $__toolsRight__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toolbar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toolbar"));

            // line 3
            echo "    <div class=\"box-header\">
        ";
            // line 4
            if ((isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 4, $this->source); })())) {
                // line 5
                echo "            <div class=\"btn-group tools-left no-print\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 6, $this->source); })()));
                foreach ($context['_seq'] as $context["icon"] => $context["url"]) {
                    // line 7
                    echo "                    <a class=\"btn btn-default\" href=\"";
                    echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                    echo "\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
                    echo "\"></i></a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['icon'], $context['url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "            </div>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            if ((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })())) {
                // line 13
                echo "            <div class=\"box-title toolbar no-print\">
                ";
                // line 14
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), ["form/toolbar-theme.html.twig"], true);
                // line 15
                echo "                ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
                echo "
                ";
                // line 16
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
                echo "
                ";
                // line 17
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
                echo "
            </div>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["toolsRight"]) || array_key_exists("toolsRight", $context) ? $context["toolsRight"] : (function () { throw new RuntimeError('Variable "toolsRight" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "            <div class=\"box-tools\">
                <div class=\"btn-group\">
                    ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 24, $this->source); })()));
                foreach ($context['_seq'] as $context["icon"] => $context["url"]) {
                    // line 25
                    echo "                        <a class=\"btn btn-default\" href=\"";
                    echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                    echo "\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
                    echo "\"></i></a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['icon'], $context['url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                </div>
            </div>
        ";
            }
            // line 30
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@SurvosBootstrap/macros/toolbar.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  156 => 30,  151 => 27,  140 => 25,  136 => 24,  132 => 22,  130 => 21,  127 => 20,  121 => 17,  117 => 16,  112 => 15,  110 => 14,  107 => 13,  105 => 12,  102 => 11,  98 => 9,  87 => 7,  83 => 6,  80 => 5,  78 => 4,  75 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro toolbar(form, tools, toolsRight) %}
    <div class=\"box-header\">
        {% if tools %}
            <div class=\"btn-group tools-left no-print\">
                {% for icon,url in tools  %}
                    <a class=\"btn btn-default\" href=\"{{ url }}\"><i class=\"fa fa-{{ icon }}\"></i></a>
                {% endfor %}
            </div>
        {% endif %}

        {% if form %}
            <div class=\"box-title toolbar no-print\">
                {% form_theme form 'form/toolbar-theme.html.twig' %}
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>
        {% endif %}

        {% if toolsRight %}
            <div class=\"box-tools\">
                <div class=\"btn-group\">
                    {% for icon,url in tools  %}
                        <a class=\"btn btn-default\" href=\"{{ url }}\"><i class=\"fa fa-{{ icon }}\"></i></a>
                    {% endfor %}
                </div>
            </div>
        {% endif %}
    </div>
{% endmacro %}
", "@SurvosBootstrap/macros/toolbar.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/macros/toolbar.html.twig");
    }
}
