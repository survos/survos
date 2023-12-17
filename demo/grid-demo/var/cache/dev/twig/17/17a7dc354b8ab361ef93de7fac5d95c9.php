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

/* @SurvosBootstrap/components/menu_breadcrumb.html.twig */
class __TwigTemplate_c3bc275b7f68406407bc98b0bb5b8206 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/menu_breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/menu_breadcrumb.html.twig"));

        // line 1
        $context["currentItem"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->getCurrentItem((isset($context["menuItem"]) || array_key_exists("menuItem", $context) ? $context["menuItem"] : (function () { throw new RuntimeError('Variable "menuItem" does not exist.', 1, $this->source); })()));
        // line 2
        $context["breadcrumbs"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->getBreadcrumbsArray((isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 2, $this->source); })()));
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 3, $this->source); })()), 1));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 4)) {
                // line 5
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "uri", [], "any", false, false, false, 5), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 5), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 7
                echo "                            ";
                echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 7)) ? ("/") : (""));
                echo "
                            <span class=\"text-muted fw-light\">";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 8), "html", null, true);
                echo " /</span>
                        ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/menu_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 8,  75 => 7,  67 => 5,  64 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentItem = knp_menu_get_current_item(menuItem) %}
{% set breadcrumbs = knp_menu_get_breadcrumbs_array(currentItem) %}
{% for breadcrumb in breadcrumbs|slice(1) %}
                        {% if loop.last %}
                            <a href=\"{{ breadcrumb.uri }}\">{{ breadcrumb.label }}</a>
                        {% else %}
                            {{ not loop.first ? '/' }}
                            <span class=\"text-muted fw-light\">{{ breadcrumb.label }} /</span>
                        {% endif %}
{% endfor %}
", "@SurvosBootstrap/components/menu_breadcrumb.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/components/menu_breadcrumb.html.twig");
    }
}
