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

/* @Stenope/rss.xml.twig */
class __TwigTemplate_65bb5f24bc6c43b8b228ff65d20e873e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Stenope/rss.xml.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Stenope/rss.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</title>
        <description>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</description>
        <language>";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 6, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6))), "html", null, true);
        echo "</language>
        <link>";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 7, $this->source); })()), (isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 7, $this->source); })()))) : ((isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 7, $this->source); })()))), "html", null, true);
        echo "</link>
        <atom:link href=\"";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 8, $this->source); })()), (isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 8, $this->source); })()))) : ((isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 8, $this->source); })()))), "html", null, true);
        echo "\" rel=\"self\" type=\"application/rss+xml\" />
        ";
        // line 9
        if ((((twig_get_attribute($this->env, $this->source, ($context["webmaster"] ?? null), "email", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["webmaster"] ?? null), "email", [], "any", false, false, false, 9), null)) : (null)) && ((twig_get_attribute($this->env, $this->source, ($context["webmaster"] ?? null), "name", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["webmaster"] ?? null), "name", [], "any", false, false, false, 9), null)) : (null)))) {
            // line 10
            echo "            <webMaster>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["webmaster"]) || array_key_exists("webmaster", $context) ? $context["webmaster"] : (function () { throw new RuntimeError('Variable "webmaster" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["webmaster"]) || array_key_exists("webmaster", $context) ? $context["webmaster"] : (function () { throw new RuntimeError('Variable "webmaster" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            echo ")</webMaster>
        ";
        }
        // line 12
        echo "        ";
        $context["pubDate"] = ((array_key_exists("pubDate", $context)) ? (_twig_default_filter((isset($context["pubDate"]) || array_key_exists("pubDate", $context) ? $context["pubDate"] : (function () { throw new RuntimeError('Variable "pubDate" does not exist.', 12, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())), "pubDate", [], "any", false, false, false, 12))) : (twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })())), "pubDate", [], "any", false, false, false, 12)));
        // line 13
        echo "        ";
        if ((isset($context["pubDate"]) || array_key_exists("pubDate", $context) ? $context["pubDate"] : (function () { throw new RuntimeError('Variable "pubDate" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "            <pubDate>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["pubDate"]) || array_key_exists("pubDate", $context) ? $context["pubDate"] : (function () { throw new RuntimeError('Variable "pubDate" does not exist.', 14, $this->source); })()), twig_constant("DateTime::RFC2822")), "html", null, true);
            echo "</pubDate>
        ";
        }
        // line 16
        echo "        ";
        if (((array_key_exists("copyright", $context)) ? (_twig_default_filter((isset($context["copyright"]) || array_key_exists("copyright", $context) ? $context["copyright"] : (function () { throw new RuntimeError('Variable "copyright" does not exist.', 16, $this->source); })()), null)) : (null))) {
            // line 17
            echo "            <copyright>";
            echo twig_escape_filter($this->env, (isset($context["copyright"]) || array_key_exists("copyright", $context) ? $context["copyright"] : (function () { throw new RuntimeError('Variable "copyright" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "</copyright>
        ";
        }
        // line 19
        echo "        ";
        if (((array_key_exists("image", $context)) ? (_twig_default_filter((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 19, $this->source); })()), null)) : (null))) {
            // line 20
            echo "        <image>
            <url>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 21, $this->source); })()), "url", [], "any", false, false, false, 21), "html", null, true);
            echo "</url>
            <title>";
            // line 22
            echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()))) : ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()))), "html", null, true);
            echo "</title>
            <link>";
            // line 23
            echo twig_escape_filter($this->env, ((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 23, $this->source); })()), (isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 23, $this->source); })()))) : ((isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 23, $this->source); })()))), "html", null, true);
            echo "</link>
            <description>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</description>
            <width>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 25, $this->source); })()), "width", [], "any", false, false, false, 25), "html", null, true);
            echo "</width>
            <height>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 26, $this->source); })()), "height", [], "any", false, false, false, 26), "html", null, true);
            echo "</height>
        </image>
        ";
        }
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "        <item>
            <title>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</title>
            <link>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 32), "html", null, true);
            echo "</link>
            <description>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</description>
            ";
            // line 34
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "guid", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 34), null)) : (null))) {
                // line 35
                echo "                <guid>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 35), "html", null, true);
                echo "</guid>
            ";
            }
            // line 37
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, $context["item"], "pubDate", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "pubDate", [], "any", false, false, false, 37), null)) : (null))) {
                // line 38
                echo "                <pubDate>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "pubDate", [], "any", false, false, false, 38), twig_constant("DateTime::RFC2822")), "html", null, true);
                echo "</pubDate>
            ";
            }
            // line 40
            echo "        </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </channel>
</rss>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Stenope/rss.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 42,  168 => 40,  162 => 38,  159 => 37,  153 => 35,  151 => 34,  147 => 33,  143 => 32,  139 => 31,  136 => 30,  131 => 29,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  105 => 21,  102 => 20,  99 => 19,  93 => 17,  90 => 16,  84 => 14,  81 => 13,  78 => 12,  70 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
    <channel>
        <title>{{ title }}</title>
        <description>{{ description }}</description>
        <language>{{ language|default(app.request.locale) }}</language>
        <link>{{ link|default(canonical) }}</link>
        <atom:link href=\"{{ link|default(canonical) }}\" rel=\"self\" type=\"application/rss+xml\" />
        {% if webmaster.email|default(null) and webmaster.name|default(null) %}
            <webMaster>{{ webmaster.email }} ({{ webmaster.name }})</webMaster>
        {% endif %}
        {% set pubDate = pubDate|default((items|first).pubDate) %}
        {% if pubDate %}
            <pubDate>{{ pubDate|date(constant('DateTime::RFC2822')) }}</pubDate>
        {% endif %}
        {% if copyright|default(null) %}
            <copyright>{{ copyright }}</copyright>
        {% endif %}
        {% if image|default(null) %}
        <image>
            <url>{{ image.url }}</url>
            <title>{{ title|default(title) }}</title>
            <link>{{ link|default(canonical) }}</link>
            <description>{{ description }}</description>
            <width>{{ image.width }}</width>
            <height>{{ image.height }}</height>
        </image>
        {% endif %}
        {% for item in items %}
        <item>
            <title>{{ item.title }}</title>
            <link>{{ item.link }}</link>
            <description>{{ item.description }}</description>
            {% if item.guid|default(null) %}
                <guid>{{ item.guid }}</guid>
            {% endif %}
            {% if item.pubDate|default(null) %}
                <pubDate>{{ item.pubDate|date(constant('DateTime::RFC2822')) }}</pubDate>
            {% endif %}
        </item>
        {% endfor %}
    </channel>
</rss>
", "@Stenope/rss.xml.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/stenope/stenope/templates/rss.xml.twig");
    }
}
