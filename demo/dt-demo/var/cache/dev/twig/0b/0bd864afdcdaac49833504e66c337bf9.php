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

/* @SurvosBootstrap/components/dropdown.html.twig */
class __TwigTemplate_ee6014b7f16890420f4ad0178ae2a32d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/dropdown.html.twig"));

        // line 1
        echo "<div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
    <button type=\"button\" class=\"btn btn-icon btn-topbar btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\"
            aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class='";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["widgetIcon"]) || array_key_exists("widgetIcon", $context) ? $context["widgetIcon"] : (function () { throw new RuntimeError('Variable "widgetIcon" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "'></i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end\">
        <div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
            <div class=\"row align-items-center\">
                <div class=\"col\">
                    <h6 class=\"m-0 fw-semibold fs-15\"> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " </h6>
                </div>
                <div class=\"col-auto\">
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["viewAllLink"]) || array_key_exists("viewAllLink", $context) ? $context["viewAllLink"] : (function () { throw new RuntimeError('Variable "viewAllLink" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-soft-info\">";
        echo twig_escape_filter($this->env, (isset($context["viewAllLabel"]) || array_key_exists("viewAllLabel", $context) ? $context["viewAllLabel"] : (function () { throw new RuntimeError('Variable "viewAllLabel" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "
                        <i class=\"ri-arrow-right-s-line align-middle\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"p-2\">
            <div class=\"row g-0\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["components"]) || array_key_exists("components", $context) ? $context["components"] : (function () { throw new RuntimeError('Variable "components" does not exist.', 21, $this->source); })()));
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
            // line 22
            echo "                <div class=\"col col-4\">

                    ";
            // line 25
            echo "                    ";
            $context["pc"] = twig_get_attribute($this->env, $this->source, $context["c"], "pc", [], "any", false, false, false, 25);
            // line 26
            if ((isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "                    ";
                echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("link", ["if" => twig_get_attribute($this->env, $this->source,                 // line 29
(isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 29, $this->source); })()), "typeCount", [], "any", false, false, false, 29), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("core_show", twig_get_attribute($this->env, $this->source,                 // line 30
(isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 30, $this->source); })()), "rp", [["categoryTypeId" => "type"]], "method", false, false, false, 30)), "body" => ((twig_get_attribute($this->env, $this->source,                 // line 31
(isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 31, $this->source); })()), "typeCount", [], "any", false, false, false, 31)) ? ("<span class='fas fa-sm fa-gear'></span> ") : (""))]);
                // line 33
                echo "

                    ";
                // line 36
                echo "                        <span class=\"badge badge-info\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pc"]) || array_key_exists("pc", $context) ? $context["pc"] : (function () { throw new RuntimeError('Variable "pc" does not exist.', 37, $this->source); })()), "instanceCount", [], "any", false, false, false, 37), "html", null, true);
                echo "C
                        </span>
";
            }
            // line 41
            echo "                    <div class=\"\">
                        <a class=\"dropdown-icon-item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                            ";
            // line 43
            echo $this->extensions['Survos\BootstrapBundle\Twig\TwigExtension']->icon(twig_get_attribute($this->env, $this->source, $context["c"], "icon", [], "any", false, false, false, 43));
            echo "
                            <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "label", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                        </a>

                    </div>

                </div>
                ";
            // line 50
            if (((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50) % 3) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 50))) {
                // line 51
                echo "            </div><!-- end of row -->
            <div class=\"row g-0\">
                ";
            }
            // line 54
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
        // line 56
        echo "            </div><!-- end of final row -->

        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 56,  148 => 54,  143 => 51,  141 => 50,  132 => 44,  128 => 43,  124 => 42,  121 => 41,  115 => 37,  112 => 36,  108 => 33,  106 => 31,  105 => 30,  104 => 29,  102 => 27,  100 => 26,  97 => 25,  93 => 22,  76 => 21,  63 => 13,  57 => 10,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dropdown topbar-head-dropdown ms-1 header-item\">
    <button type=\"button\" class=\"btn btn-icon btn-topbar btn-ghost-secondary rounded-circle\" data-bs-toggle=\"dropdown\"
            aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class='{{ widgetIcon }}'></i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end\">
        <div class=\"p-3 border-top-0 border-start-0 border-end-0 border-dashed border\">
            <div class=\"row align-items-center\">
                <div class=\"col\">
                    <h6 class=\"m-0 fw-semibold fs-15\"> {{ title }} </h6>
                </div>
                <div class=\"col-auto\">
                    <a href=\"{{ viewAllLink }}\" class=\"btn btn-sm btn-soft-info\">{{ viewAllLabel }}
                        <i class=\"ri-arrow-right-s-line align-middle\"></i></a>
                </div>
            </div>
        </div>

        <div class=\"p-2\">
            <div class=\"row g-0\">
                {% for c in components %}
                <div class=\"col col-4\">

                    {# temp! #}
                    {% set pc = c.pc %}
{% if pc %}
                    {{ component('link',
                        {
                            if: pc.typeCount,
                            href: path('core_show', pc.rp({categoryTypeId: 'type'})),
                            body: pc.typeCount ? \"<span class='fas fa-sm fa-gear'></span> \"
                        }
                    ) }}

                    {#                    <div class=\"float-start\">#}
                        <span class=\"badge badge-info\">
                            {{ pc.instanceCount  }}C
                        </span>
{#                    </div>#}
{% endif %}
                    <div class=\"\">
                        <a class=\"dropdown-icon-item\" href=\"{{ c.url }}\">
                            {{ c.icon|icon }}
                            <span>{{ c.label }}</span>
                        </a>

                    </div>

                </div>
                {% if loop.index is divisible by 3 and not loop.last %}
            </div><!-- end of row -->
            <div class=\"row g-0\">
                {% endif %}

                {% endfor %}
            </div><!-- end of final row -->

        </div>
    </div>
</div>
", "@SurvosBootstrap/components/dropdown.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/components/dropdown.html.twig");
    }
}
