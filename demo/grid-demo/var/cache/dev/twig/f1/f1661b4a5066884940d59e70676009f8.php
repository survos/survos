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

/* @SurvosBootstrap/components/card.html.twig */
class __TwigTemplate_00cd859991ead7506a4469e38894a155 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'text' => [$this, 'block_text'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'links' => [$this, 'block_links'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/card.html.twig"));

        // line 1
        echo "<div class=\"card ";
        (((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 1, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_sprintf("h-%s", (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 1, $this->source); })())), "html", null, true))) : (print ("")));
        echo "\">
    ";
        // line 2
        if ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        <img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\"/>
    ";
        }
        // line 5
        echo "
    <div class=\"card-body\">
        <h5 class=\"card-title\">
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "        </h5>
        <p class=\"card-text\">
            ";
        // line 13
        $this->displayBlock('text', $context, $blocks);
        // line 16
        echo "        </p>
    </div>
    <ul class=\"list-group list-group-flush\">
        ";
        // line 20
        echo "        ";
        // line 21
        echo "    </ul>
    <div class=\"card-body\">
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    </div>
    <div class=\"card-footer\">
        ";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "    </div>
    ";
        // line 32
        $this->displayBlock('links', $context, $blocks);
        // line 36
        echo "</div>

";
        // line 62
        echo "
";
        // line 71
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text"));

        // line 14
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "links"));

        // line 33
        echo "        <a href=\"javascript:void(0)\" class=\"card-link\">Card link</a>
        <a href=\"javascript:void(0)\" class=\"card-link\">Another link</a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 33,  210 => 32,  197 => 29,  187 => 28,  174 => 24,  164 => 23,  151 => 14,  141 => 13,  128 => 9,  118 => 8,  107 => 71,  104 => 62,  100 => 36,  98 => 32,  95 => 31,  93 => 28,  89 => 26,  87 => 23,  83 => 21,  81 => 20,  76 => 16,  74 => 13,  70 => 11,  68 => 8,  63 => 5,  55 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card {{ h ? 'h-%s'|format(h) }}\">
    {% if image %}
        <img class=\"card-img-top\" src=\"{{ image }}\" alt=\"{{ alt }}\"/>
    {% endif %}

    <div class=\"card-body\">
        <h5 class=\"card-title\">
            {% block title %}
                {{ title }}
            {% endblock %}
        </h5>
        <p class=\"card-text\">
            {% block text %}
                {{ text }}
            {% endblock %}
        </p>
    </div>
    <ul class=\"list-group list-group-flush\">
        {#        <li class=\"list-group-item\">{{ sentences(3) }}</li> #}
        {#        <li class=\"list-group-item\">Vestibulum at eros</li> #}
    </ul>
    <div class=\"card-body\">
        {% block body %}
            {{ body }}
        {% endblock %}
    </div>
    <div class=\"card-footer\">
        {% block footer %}
            {{ footer }}
        {% endblock %}
    </div>
    {% block links %}
        <a href=\"javascript:void(0)\" class=\"card-link\">Card link</a>
        <a href=\"javascript:void(0)\" class=\"card-link\">Another link</a>
    {% endblock %}
</div>

{# <div class=\"col-12 px-0 mb-4\"> #}
{#    <div class=\"card border-light shadow-sm\"> #}
{#        <div class=\"card-body\"> #}
{#            <h2 class=\"h5\">Acquisition</h2> #}
{#            <p>Tells you where your visitors originated from, such as search engines, social networks or website referrals.</p> #}
{#            <div class=\"d-block\"> #}
{#                <div class=\"d-flex align-items-center pt-3 me-5\"> #}
{#                    <div class=\"icon icon-shape icon-sm icon-shape-danger rounded me-3\"><span class=\"fas fa-chart-bar\"></span></div> #}
{#                    <div class=\"d-block\"> #}
{#                        <label class=\"mb-0\">Bounce Rate</label> #}
{#                        <h4 class=\"mb-0\">33.50%</h4> #}
{#                    </div> #}
{#                </div> #}
{#                <div class=\"d-flex align-items-center pt-3\"> #}
{#                    <div class=\"icon icon-shape icon-sm icon-shape-quaternary rounded me-3\"><span class=\"fas fa-chart-area\"></span></div> #}
{#                    <div class=\"d-block\"> #}
{#                        <label class=\"mb-0\">Sessions</label> #}
{#                        <h4 class=\"mb-0\">9,567</h4> #}
{#                    </div> #}
{#                </div> #}
{#            </div> #}
{#        </div> #}
{#    </div> #}
{# </div> #}

{# <div class=\"col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2\"> #}
{#    <div class=\"card flex-fill w-100\"> #}
{#        <div class=\"card-header\"> #}
{#            <div class=\"card-actions float-end\"> #}
{#                <div class=\"dropdown position-relative\"> #}
{#                    <a href=\"#\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\"> #}
{#                        <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> #}
{#                    </a> #}

{#                    <div class=\"dropdown-menu dropdown-menu-end\"> #}
{#                        {% for link in links|default([]) %} #}
{#                            <a class=\"dropdown-item\" href=\"{{ link.url|default('#') }}\">{{ link.text }}</a> #}
{#                        {% endfor %} #}
{#                    </div> #}
{#                </div> #}
{#            </div> #}
{#            <h5 class=\"card-title mb-0\">{{ title|raw }}</h5> #}
{#        </div> #}
{#        <div class=\"card-body px-4\"> #}
{#            {{ card_content|raw }} #}
{#            #}{#            <div id=\"world_map\" style=\"height:350px;\"></div> #}
{#        </div> #}
{#        <div class=\"card-footer\"> #}
{#            {{ card_footer|raw }} #}
{#        </div> #}
{#    </div> #}
{# </div> #}
", "@SurvosBootstrap/components/card.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/components/card.html.twig");
    }
}
