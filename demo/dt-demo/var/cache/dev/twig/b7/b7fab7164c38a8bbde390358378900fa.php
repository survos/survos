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

/* @SurvosAuth/_social_media_login_buttons.html.twig */
class __TwigTemplate_1f6b034d0cfbf95fcbe2406bcb9f98cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosAuth/_social_media_login_buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosAuth/_social_media_login_buttons.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "environment", [], "any", false, false, false, 2) == "dev")) {
            // line 3
            echo "    <a class=\"btn btn-warning\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oauth_providers");
            echo "\"><i class=\"fas fa-cogs\"></i> Configure OAuth</a>
";
        }
        // line 5
        echo "<hr />

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("clientKeys", $context)) ? (_twig_default_filter((isset($context["clientKeys"]) || array_key_exists("clientKeys", $context) ? $context["clientKeys"] : (function () { throw new RuntimeError('Variable "clientKeys" does not exist.', 7, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["clientKey"]) {
            // line 8
            echo "<button>
    <a xxclass=\"btn btn-lg\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oauth_connect_start", ["clientKey" => $context["clientKey"]]), "html", null, true);
            echo "\"><i class=\"fab fa-";
            echo twig_escape_filter($this->env, $context["clientKey"], "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["clientKey"]), "html", null, true);
            echo "</a>
</button>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clientKey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 24
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosAuth/_social_media_login_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  78 => 12,  65 => 9,  62 => 8,  58 => 7,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if app.environment == 'dev' %}
    <a class=\"btn btn-warning\" href=\"{{ path('oauth_providers') }}\"><i class=\"fas fa-cogs\"></i> Configure OAuth</a>
{% endif %}
<hr />

{% for clientKey in clientKeys|default([]) %}
<button>
    <a xxclass=\"btn btn-lg\" href=\"{{ path('oauth_connect_start', {clientKey: clientKey}) }}\"><i class=\"fab fa-{{clientKey}}\"></i>{{ clientKey|title }}</a>
</button>
{% endfor %}

{#
<div class=\"login-social-set text-center\">
    <span>Sign in with:</span>
    <a title=\"Login with GitHub\" href=\"https://symfonycasts.com/login/github\"><i class=\"fab fa-github knp-color-light-black\"></i></a>

    <a title=\"Login with Twitter\" href=\"https://symfonycasts.com/login/twitter\"><i class=\"fab fa-twitter-square\"></i></a>

    <a title=\"Login with Facebook\" href=\"https://symfonycasts.com/login/facebook\"><i class=\"fab fa-facebook-square\"></i></a>
    <a title=\"Login with Google\" href=\"https://symfonycasts.com/login/facebook\"><i class=\"fab fa-google-plus\"></i></a>
</div>
#}

{#
<button>
    <a class=\"btn\" href=\"{{ path('connect_github_start', {clientCode: 'github'}) }}\"><i class=\"fab fa-github fa-3x\"></i> Login with Github, using AUTH</a>
</button>

<button>
    <a class=\"btn\" href=\"{{ path('connect_google_start') }}\"><i class=\"fab fa-google fa-3x\"></i> Login with Google</a>
</button>
#}
", "@SurvosAuth/_social_media_login_buttons.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/auth-bundle/templates/_social_media_login_buttons.html.twig");
    }
}
