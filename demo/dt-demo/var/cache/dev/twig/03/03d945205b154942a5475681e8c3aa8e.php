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

/* @Stenope/sitemap.xml.twig */
class __TwigTemplate_e3367a0fd1fc1879c58a432f9f659255 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Stenope/sitemap.xml.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Stenope/sitemap.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\" ?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitemap"]) || array_key_exists("sitemap", $context) ? $context["sitemap"] : (function () { throw new RuntimeError('Variable "sitemap" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 4
            echo "        <url>
            <loc>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "location", [], "any", false, false, false, 5), "html", null, true);
            echo "</loc>
            ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["url"], "lastModified", [], "any", true, true, false, 6)) {
                echo "<lastmod>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "lastModified", [], "any", false, false, false, 6), "c"), "html", null, true);
                echo "</lastmod>";
            }
            // line 7
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", true, true, false, 7)) {
                echo "<priority>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", false, false, false, 7), "html", null, true);
                echo "</priority>";
            }
            // line 8
            echo "            <changefreq>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["url"], "frequency", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["url"], "frequency", [], "any", false, false, false, 8), "monthly")) : ("monthly")), "html", null, true);
            echo "</changefreq>
        </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</urlset>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Stenope/sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  71 => 8,  64 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\" ?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    {% for url in sitemap %}
        <url>
            <loc>{{ url.location }}</loc>
            {% if url.lastModified is defined %}<lastmod>{{ url.lastModified|date('c') }}</lastmod>{% endif %}
            {% if url.priority is defined %}<priority>{{ url.priority  }}</priority>{% endif %}
            <changefreq>{{ url.frequency|default('monthly')  }}</changefreq>
        </url>
    {% endfor %}
</urlset>
", "@Stenope/sitemap.xml.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/stenope/stenope/templates/sitemap.xml.twig");
    }
}
