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

/* @SurvosAuth/oauth/provider.html.twig */
class __TwigTemplate_0f6cc422ba4c5c9c44c08e7ac5356b94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(["base.html.twig", "SurvosBaseBundle::base.html.twig"], "@SurvosAuth/oauth/provider.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosAuth/oauth/provider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosAuth/oauth/provider.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
    .input {width: 400px}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/survos/base-/loader.js"), "html", null, true);
        echo "\"></script>

    <script>
        console.log('add click handler');
        document.getElementById(\"copyButton\").addEventListener(\"click\", function() {
            console.log('copy clicked');
            copyToClipboard(document.getElementById(\"copyTarget\"));
        });

        function copyToClipboard(elem) {
            // create hidden text element, if it doesn't already exist
            var targetId = \"_hiddenCopyText_\";
            var isInput = elem.tagName === \"INPUT\" || elem.tagName === \"TEXTAREA\";
            console.log('copying to clipboard');
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement(\"textarea\");
                    target.style.position = \"absolute\";
                    target.style.left = \"-9999px\";
                    target.style.top = \"0\";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                succeed = document.execCommand(\"copy\");
            } catch(e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === \"function\") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = \"\";
            }
            return succeed;
        }
    function jQuerycopyToClipboard(element) {
            let \$ = window.\$;
        var \$temp = \$(\"<input>\");
        \$(\"body\").append(\$temp);
        \$temp.val(\$(element).text()).select();
        document.execCommand(\"copy\");
        \$temp.remove();
    }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Provider " . twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 82, $this->source); })()), "type", [], "any", false, false, false, 82)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "
    <input type=\"text\" id=\"copyTarget\" value=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"> <button id=\"copyButton\">Copy Homepage</button><br><br>
    <input type=\"text\" placeholder=\"Click here and press Ctrl-V to see clipboard contents\">
    <hr />
    <p id=\"p1\">P1: I am paragraph 1</p>
    <p id=\"p2\">P2: I am a second paragraph</p>
    <p id=\"p3\">composer req ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 90, $this->source); })()), "library", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>
    Need copy.js
    <input type=\"text\" class=\"input-md\" value=\"\" />


    <button onclick=\"jQuerycopyToClipboard('#p1')\">Copy Homepage</button>
    <button onclick=\"jQuerycopyToClipboard('#p2')\">Copy Redirect</button>
    <button onclick=\"jQuerycopyToClipboard('#p3')\">Copy Composer</button>

    <br/><br/><input type=\"text\" placeholder=\"Paste here for test\" />

    ";
        // line 101
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 101, $this->source); })()), "clients", [], "any", false, false, false, 101))) {
            // line 102
            echo "    <h3>Configured Clients</h3>
    <ul class=\"list inline-list\">
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 104, $this->source); })()), "clients", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["clientKey"] => $context["client"]) {
                // line 105
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oauth_connect_start", ["clientKey" => $context["clientKey"]]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                Login With ";
                // line 106
                echo twig_escape_filter($this->env, $context["clientKey"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clientKey'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "    </ul>
    ";
        }
        // line 111
        echo "

    <h3>Install the provider library</h3>

    ";
        // line 115
        if ((isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 115, $this->source); })())) {
            // line 116
            echo "        <i class=\"far fa-check-square text-success\"></i>
        Installed.
    ";
        }
        // line 119
        echo "
    <h3>Setup your environment (.env)</h3>
    <textarea cols=\"80\" rows=\"2\">";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 121, $this->source); })()), "env_vars", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            echo twig_escape_filter($this->env, $context["var"], "html", null, true);
            echo "=~
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "</textarea>

    <h3>Install and register the client in config/packages/knpu_oauth_clients.yaml</h3>

    <label>
<textarea cols=\"80\" rows=\"";
        // line 127
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 127, $this->source); })()), "comments", [], "any", false, false, false, 127), "
")) + 1), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 127, $this->source); })()), "comments", [], "any", false, false, false, 127), "html", null, true);
        echo "
</textarea>
    </label>

    <h3>Client ID and Secret</h3>
    Register your app, making sure to set your callback url in the configuration:<br />
    ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 133, $this->source); })()), "apps_url", [], "any", false, false, false, 133)) {
            // line 134
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 134, $this->source); })()), "apps_url", [], "any", false, false, false, 134), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-primary\"><i class=\"fas fa-external-link\"></i> ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 134, $this->source); })()), "type", [], "any", false, false, false, 134)), "html", null, true);
            echo " Apps</a>
    ";
        } else {
            // line 136
            echo "        Sorry, we don't yet have the url for the ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 136, $this->source); })()), "type", [], "any", false, false, false, 136)), "html", null, true);
            echo " Apps Page.
    ";
        }
        // line 138
        echo "
    ";
        // line 139
        $context["clientKey"] = twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 139, $this->source); })()), "type", [], "any", false, false, false, 139);
        // line 140
        echo "
    ";
        // line 142
        echo "    ";
        $context["callback"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("oauth_connect_check", ["clientKey" => (isset($context["clientKey"]) || array_key_exists("clientKey", $context) ? $context["clientKey"] : (function () { throw new RuntimeError('Variable "clientKey" does not exist.', 142, $this->source); })())]);
        // line 143
        echo "    <textarea cols=\"90\" rows=\"1\">";
        echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "</textarea>
    <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fas fa-external-link\"></i></a>


    <h3>Configure live keys (.env.local)</h3>
<textarea cols=\"80\" rows=\"2\">";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 148, $this->source); })()), "env_vars", [], "any", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            echo twig_escape_filter($this->env, $context["var"], "html", null, true);
            echo "=
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "</textarea>

    <h3>Add the field to your user class</h3>


    use ";
        // line 154
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 154, $this->source); })()), "type", [], "any", false, false, false, 154)), "html", null, true);
        echo "Trait;


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosAuth/oauth/provider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 154,  359 => 149,  348 => 148,  341 => 144,  336 => 143,  333 => 142,  330 => 140,  328 => 139,  325 => 138,  319 => 136,  311 => 134,  309 => 133,  297 => 127,  290 => 122,  279 => 121,  275 => 119,  270 => 116,  268 => 115,  262 => 111,  258 => 109,  249 => 106,  244 => 105,  240 => 104,  236 => 102,  234 => 101,  220 => 90,  212 => 85,  209 => 84,  199 => 83,  180 => 82,  100 => 12,  95 => 10,  85 => 9,  70 => 4,  60 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ['base.html.twig', \"SurvosBaseBundle::base.html.twig\"] %}

{% block stylesheets %}
{{ parent() }}
<style>
    .input {width: 400px}
</style>
{% endblock  %}
{% block javascripts %}
    {{ parent() }}
    {# the JS file lives at \"public/bundles/acme/js/loader.js\" #}
    <script src=\"{{ asset('bundles/survos/base-/loader.js') }}\"></script>

    <script>
        console.log('add click handler');
        document.getElementById(\"copyButton\").addEventListener(\"click\", function() {
            console.log('copy clicked');
            copyToClipboard(document.getElementById(\"copyTarget\"));
        });

        function copyToClipboard(elem) {
            // create hidden text element, if it doesn't already exist
            var targetId = \"_hiddenCopyText_\";
            var isInput = elem.tagName === \"INPUT\" || elem.tagName === \"TEXTAREA\";
            console.log('copying to clipboard');
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement(\"textarea\");
                    target.style.position = \"absolute\";
                    target.style.left = \"-9999px\";
                    target.style.top = \"0\";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                succeed = document.execCommand(\"copy\");
            } catch(e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === \"function\") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = \"\";
            }
            return succeed;
        }
    function jQuerycopyToClipboard(element) {
            let \$ = window.\$;
        var \$temp = \$(\"<input>\");
        \$(\"body\").append(\$temp);
        \$temp.val(\$(element).text()).select();
        document.execCommand(\"copy\");
        \$temp.remove();
    }
    </script>
{% endblock %}

{% block title 'Provider ' ~ provider.type %}
{% block body %}

    <input type=\"text\" id=\"copyTarget\" value=\"{{ path('app_homepage') }}\"> <button id=\"copyButton\">Copy Homepage</button><br><br>
    <input type=\"text\" placeholder=\"Click here and press Ctrl-V to see clipboard contents\">
    <hr />
    <p id=\"p1\">P1: I am paragraph 1</p>
    <p id=\"p2\">P2: I am a second paragraph</p>
    <p id=\"p3\">composer req {{ provider.library }}</p>
    Need copy.js
    <input type=\"text\" class=\"input-md\" value=\"\" />


    <button onclick=\"jQuerycopyToClipboard('#p1')\">Copy Homepage</button>
    <button onclick=\"jQuerycopyToClipboard('#p2')\">Copy Redirect</button>
    <button onclick=\"jQuerycopyToClipboard('#p3')\">Copy Composer</button>

    <br/><br/><input type=\"text\" placeholder=\"Paste here for test\" />

    {% if provider.clients|length %}
    <h3>Configured Clients</h3>
    <ul class=\"list inline-list\">
        {% for clientKey, client in provider.clients %}
            <li><a href=\"{{ path('oauth_connect_start', {clientKey: clientKey}) }}\" class=\"btn btn-primary\">
                Login With {{ clientKey }}</a>
            </li>
        {% endfor %}
    </ul>
    {% endif %}


    <h3>Install the provider library</h3>

    {% if package %}
        <i class=\"far fa-check-square text-success\"></i>
        Installed.
    {% endif %}

    <h3>Setup your environment (.env)</h3>
    <textarea cols=\"80\" rows=\"2\">{% for var in provider.env_vars %}{{ var }}=~
{% endfor %}</textarea>

    <h3>Install and register the client in config/packages/knpu_oauth_clients.yaml</h3>

    <label>
<textarea cols=\"80\" rows=\"{{ provider.comments|split(\"\\n\")|length + 1 }}\">{{ provider.comments }}
</textarea>
    </label>

    <h3>Client ID and Secret</h3>
    Register your app, making sure to set your callback url in the configuration:<br />
    {% if provider.apps_url %}
    <a href=\"{{ provider.apps_url }}\" target=\"_blank\" class=\"btn btn-primary\"><i class=\"fas fa-external-link\"></i> {{ provider.type|title }} Apps</a>
    {% else %}
        Sorry, we don't yet have the url for the {{ provider.type|title }} Apps Page.
    {% endif %}

    {% set clientKey = provider.type %}

    {# https://stackoverflow.com/questions/22581345/click-button-copy-to-clipboard-using-jquery #}
    {% set callback = url('oauth_connect_check', {clientKey: clientKey})   %}
    <textarea cols=\"90\" rows=\"1\">{{ callback }}</textarea>
    <a href=\"{{ callback }}\" target=\"_blank\"><i class=\"fas fa-external-link\"></i></a>


    <h3>Configure live keys (.env.local)</h3>
<textarea cols=\"80\" rows=\"2\">{% for var in provider.env_vars %}{{ var }}=
{% endfor %}</textarea>

    <h3>Add the field to your user class</h3>


    use {{ provider.type|title }}Trait;


{% endblock %}
", "@SurvosAuth/oauth/provider.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/auth-bundle/templates/oauth/provider.html.twig");
    }
}
