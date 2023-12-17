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

/* @SurvosAuth/oauth/providers.html.twig */
class __TwigTemplate_5495c0d37e6b539f3cc1a9c93051089e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(["base.html.twig", "SurvosBaseBundle::base.html.twig"], "@SurvosAuth/oauth/providers.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosAuth/oauth/providers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosAuth/oauth/providers.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "OAuth Providers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 7
        echo "    SiteURL: <input value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_homepage");
        echo "\" /><br />

    <table class=\"table js-datatable\">
        <thead>
        <tr>
            <th>Key</th>
            <th>Client ID</th>
            <th>Apps Url</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["providerKey"] => $context["providerData"]) {
            // line 19
            echo "            <tr>
                <td><a class=\"btn btn-primary btn-sm\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oauth_provider", ["providerKey" => $context["providerKey"]]), "html", null, true);
            echo "\">
                        Configure ";
            // line 21
            echo twig_escape_filter($this->env, $context["providerKey"], "html", null, true);
            echo "</a>
                </td>

                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["providerData"], "client_id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td><a target=\"_blank\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["providerData"], "apps_url", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["providerData"], "apps_url", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></td>
                <td>
                    ";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["providerData"], "clients", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["providerData"], "clients", [], "any", false, false, false, 27)), "html", null, true))) : (print ("")));
            echo "
                </td>
                <td>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["providerData"], "clients", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["clientKey"] => $context["client"]) {
                // line 31
                echo "                    ";
                $context["callback"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("oauth_connect_check", ["clientKey" => $context["clientKey"]], true);
                // line 32
                echo "                    <input value=\"";
                echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "\" /><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fas fa-external-link\"></i></a> </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clientKey'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
            $context["config"] = $context["providerData"];
            // line 35
            echo "                <td><a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "admin_url", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "admin_url", [], "any", false, false, false, 35), "html", null, true);
            echo "</a></td>
                <td><a target=\"_blank\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "user_url", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "user_url", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['providerKey'], $context['providerData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    <ul>

        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["providerKey"] => $context["providerData"]) {
            // line 44
            echo "            <h3>";
            echo twig_escape_filter($this->env, $context["providerKey"], "html", null, true);
            echo "</h3>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['providerKey'], $context['providerData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        ";
        // line 57
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosAuth/oauth/providers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 57,  197 => 46,  188 => 44,  184 => 43,  178 => 39,  167 => 36,  160 => 35,  157 => 34,  146 => 32,  143 => 31,  139 => 30,  133 => 27,  126 => 25,  122 => 24,  116 => 21,  112 => 20,  109 => 19,  105 => 18,  90 => 7,  87 => 5,  77 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ['base.html.twig', \"SurvosBaseBundle::base.html.twig\"] %}

{% block title 'OAuth Providers' %}
{% block body %}

{# this isn't good!  We need to make that URL or route configuable in config/packages/survos_auth #}
    SiteURL: <input value=\"{{ url('app_homepage') }}\" /><br />

    <table class=\"table js-datatable\">
        <thead>
        <tr>
            <th>Key</th>
            <th>Client ID</th>
            <th>Apps Url</th>
        </tr>
        </thead>
        <tbody>
        {% for providerKey, providerData in clients %}
            <tr>
                <td><a class=\"btn btn-primary btn-sm\" href=\"{{ path('oauth_provider', {providerKey:providerKey}) }}\">
                        Configure {{ providerKey }}</a>
                </td>

                <td>{{ providerData.client_id }}</td>
                <td><a target=\"_blank\" href=\"{{ providerData.apps_url }}\">{{ providerData.apps_url }}</a></td>
                <td>
                    {{ providerData.clients ? providerData.clients|length }}
                </td>
                <td>
                    {% for clientKey, client in providerData.clients %}
                    {% set callback = url('oauth_connect_check', {clientKey: clientKey}, true)   %}
                    <input value=\"{{ callback}}\" /><a href=\"{{ callback }}\" target=\"_blank\"><i class=\"fas fa-external-link\"></i></a> </td>
                    {% endfor %}
                {% set config = providerData %}
                <td><a target=\"_blank\" href=\"{{ config.admin_url }}\">{{ config.admin_url }}</a></td>
                <td><a target=\"_blank\" href=\"{{ config.user_url }}\">{{ config.user_url }}</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>

        {% for providerKey, providerData in clients %}
            <h3>{{ providerKey }}</h3>
        {% endfor %}

        {#
    {% for key, clientInfo in clients %}
    {% set project = clientInfo.provider %}
        {% set client = clientInfo.client %}
        <li>{{ key }}:

        <a href=\"{{ path('oauth_connect_check', {clientKey: key}) }}\">redirect</a>
        {% endfor %}
    </ul>
    #}

{% endblock %}
", "@SurvosAuth/oauth/providers.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/auth-bundle/templates/oauth/providers.html.twig");
    }
}
