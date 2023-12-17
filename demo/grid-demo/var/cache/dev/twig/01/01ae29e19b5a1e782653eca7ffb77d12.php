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

/* @SurvosBootstrap/components/carousel.html.twig */
class __TwigTemplate_d654fc0d36d0daa10809a5df8b027ebd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/carousel.html.twig"));

        // line 1
        echo "<div";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ">
    <!-- component html -->
</div>

<div id=\"carouselExample\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["slide"]) {
            // line 8
            echo "        <li data-bs-target=\"#carouselExample\" data-bs-slide-to=\"";
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "active", [], "any", false, false, false, 8)) ? ("active") : (""));
            echo "\"></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ol>
    <div class=\"carousel-inner\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["slide"]) {
            // line 13
            echo "            <div class=\"carousel-item ";
            echo ((twig_get_attribute($this->env, $this->source, $context["slide"], "active", [], "any", false, false, false, 13)) ? ("active") : (""));
            echo "\">
                <img class=\"d-block w-100\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "src", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
                     alt=\"slide #";
            // line 15
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h3>#";
            // line 17
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "src", [], "any", false, false, false, 17), "html", null, true);
            echo "</h3>
                    <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "caption", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    </div>

    <a class=\"carousel-control-prev\" href=\"#carouselExample\" role=\"button\" data-bs-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExample\" role=\"button\" data-bs-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Next</span>
    </a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  96 => 18,  90 => 17,  85 => 15,  81 => 14,  76 => 13,  72 => 12,  68 => 10,  57 => 8,  53 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes }}>
    <!-- component html -->
</div>

<div id=\"carouselExample\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        {% for idx, slide in slides %}
        <li data-bs-target=\"#carouselExample\" data-bs-slide-to=\"{{ idx }}\" class=\"{{ slide.active ? 'active' }}\"></li>
        {% endfor %}
    </ol>
    <div class=\"carousel-inner\">
        {% for idx, slide in slides %}
            <div class=\"carousel-item {{ slide.active ? 'active' }}\">
                <img class=\"d-block w-100\" src=\"{{ slide.src }}\"
                     alt=\"slide #{{ idx }}\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h3>#{{ idx }} {{ slide.src }}</h3>
                    <p>{{ slide.caption }}</p>
                </div>
            </div>
        {% endfor %}

    </div>

    <a class=\"carousel-control-prev\" href=\"#carouselExample\" role=\"button\" data-bs-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExample\" role=\"button\" data-bs-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Next</span>
    </a>
</div>
", "@SurvosBootstrap/components/carousel.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/components/carousel.html.twig");
    }
}
