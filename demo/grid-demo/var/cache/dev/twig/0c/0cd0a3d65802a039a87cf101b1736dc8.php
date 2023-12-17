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

/* @SurvosBootstrap/components/MiniCard.html.twig */
class __TwigTemplate_697fa2c8f55681682ec9c5db355f0ffa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/MiniCard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/MiniCard.html.twig"));

        // line 1
        echo "<div class=\"card card-sm\" ";
        echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ">
    <div class=\"card-body\">
        <div class=\"row align-items-center\">
            <div class=\"col-auto\">
                <i class=\"ti ti-air-traffic-control\"></i>
                ";
        // line 6
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->preRender("tabler:icon", twig_to_array(["bgColor" => "red", "icon" => (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 6, $this->source); })())]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $embeddedContext = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->embeddedContext("tabler:icon", twig_to_array(["bgColor" => "red", "icon" => (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 6, $this->source); })())]), $context, "components/MiniCard.html.twig", 10438986641);
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 10438986641);
            $this->loadTemplate("@SurvosBootstrap/components/MiniCard.html.twig", "@SurvosBootstrap/components/MiniCard.html.twig", 6, "10438986641")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 9
        echo "
                            <span class=\"bg-";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["bgColor"]) || array_key_exists("bgColor", $context) ? $context["bgColor"] : (function () { throw new RuntimeError('Variable "bgColor" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " text-";
        echo twig_escape_filter($this->env, (isset($context["textColor"]) || array_key_exists("textColor", $context) ? $context["textColor"] : (function () { throw new RuntimeError('Variable "textColor" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " avatar\">
                                ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "
";
        // line 13
        echo "                            </span>

            </div>
            <div class=\"col\">
                <div class=\"font-weight-medium\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "
                </div>
                <div class=\"text-secondary\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["tagline"]) || array_key_exists("tagline", $context) ? $context["tagline"] : (function () { throw new RuntimeError('Variable "tagline" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div>
            ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "
";
        // line 28
        echo "            ";
        $this->displayBlock("content", $context, $blocks);
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/MiniCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  96 => 26,  88 => 21,  82 => 18,  75 => 13,  71 => 11,  65 => 10,  62 => 9,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card card-sm\" {{ attributes }}>
    <div class=\"card-body\">
        <div class=\"row align-items-center\">
            <div class=\"col-auto\">
                <i class=\"ti ti-air-traffic-control\"></i>
                {% component 'tabler:icon' with { bgColor: 'red', icon: icon } %}

                {% endcomponent %}

                            <span class=\"bg-{{ bgColor }} text-{{ textColor }} avatar\">
                                {{ icon }}
{#                {{ tabler_icon(icon) }}#}
                            </span>

            </div>
            <div class=\"col\">
                <div class=\"font-weight-medium\">
                    {{ msg }}
                </div>
                <div class=\"text-secondary\">
                    {{ tagline }}
                </div>
            </div>
        </div>
        <div>
            {{ icon }}
{#            {{ tabler_icon(icon)|raw }}#}
            {{ block('content') }}
        </div>
    </div>
</div>
", "@SurvosBootstrap/components/MiniCard.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/components/MiniCard.html.twig");
    }
}


/* @SurvosBootstrap/components/MiniCard.html.twig */
class __TwigTemplate_697fa2c8f55681682ec9c5db355f0ffa___10438986641 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "@SurvosBootstrap/components/tabler/icon.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/MiniCard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/MiniCard.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/components/tabler/icon.html.twig", "@SurvosBootstrap/components/MiniCard.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/MiniCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 6,  100 => 28,  96 => 26,  88 => 21,  82 => 18,  75 => 13,  71 => 11,  65 => 10,  62 => 9,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card card-sm\" {{ attributes }}>
    <div class=\"card-body\">
        <div class=\"row align-items-center\">
            <div class=\"col-auto\">
                <i class=\"ti ti-air-traffic-control\"></i>
                {% component 'tabler:icon' with { bgColor: 'red', icon: icon } %}

                {% endcomponent %}

                            <span class=\"bg-{{ bgColor }} text-{{ textColor }} avatar\">
                                {{ icon }}
{#                {{ tabler_icon(icon) }}#}
                            </span>

            </div>
            <div class=\"col\">
                <div class=\"font-weight-medium\">
                    {{ msg }}
                </div>
                <div class=\"text-secondary\">
                    {{ tagline }}
                </div>
            </div>
        </div>
        <div>
            {{ icon }}
{#            {{ tabler_icon(icon)|raw }}#}
            {{ block('content') }}
        </div>
    </div>
</div>
", "@SurvosBootstrap/components/MiniCard.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/components/MiniCard.html.twig");
    }
}
