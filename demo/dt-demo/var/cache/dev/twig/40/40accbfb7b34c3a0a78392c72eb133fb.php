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

/* @SurvosBootstrap/sneat/_navbar_auth.html.twig */
class __TwigTemplate_9e7584163f4994ab6bff0842ea71685b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'profile_avatar' => [$this, 'block_profile_avatar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_navbar_auth.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_navbar_auth.html.twig"));

        // line 1
        echo "<ul class=\"navbar-nav flex-row align-items-center ms-auto\">
    <!-- Place this tag where you want the button to render. -->
";
        // line 14
        echo "
    <!-- User -->
    <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">

        ";
        // line 18
        $context["imageUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/survosbootstrap/sneat/img/avatars/1.png");
        // line 19
        echo "        ";
        $this->displayBlock('profile_avatar', $context, $blocks);
        // line 31
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown\">\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">
                    Sign In<span class=\"caret\"></span>
                </a>

                <div class=\"dropdown-menu\" id=\"formLogin\">
                    <div class=\"row\">
                        <div class=\"container-fluid\">
                            <form class=\"\">
                                <div class=\"form-group\">
                                    <label class=\"\">Username</label>
                                    <input class=\"form-control\" name=\"username\" id=\"username\" type=\"text\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"\">Password</label>
                                    <input class=\"form-control\" name=\"password\" id=\"password\" type=\"password\">
                                    <br class=\"\">
                                </div>
                                <button type=\"submit\" id=\"btnLogin\" class=\"btn btn-success btn-sm\">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modalRegister\" class=\"\">Register</a>
            </li>
        </ul>

        ";
        // line 60
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["type" => "top_auth"]);
        echo "

        <ul class=\"dropdown-menu dropdown-menu-end\">
            ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "            <li>
                <a class=\"dropdown-item\" href=\"#\">

                    <div class=\"d-flex\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"avatar avatar-online\">
                                <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 70, $this->source); })()), "html", null, true);
            echo "\" alt class=\"w-px-40 h-auto rounded-circle\"/>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">

                                    <span class=\"fw-semibold d-block\">                                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "userIdentifier", [], "any", false, false, false, 75), "html", null, true);
            echo "
</span>
                            <small class=\"text-muted\">";
            // line 77
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "roles", [], "any", false, false, false, 77), ","), "html", null, true);
            echo "</small>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <div class=\"dropdown-divider\"></div>
            </li>
            ";
        }
        // line 86
        echo "
            <li>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bx bx-user me-2\"></i>
                    <span class=\"align-middle\">My Profile</span>
                </a>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bx bx-cog me-2\"></i>
                    <span class=\"align-middle\">Settings</span>
                </a>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"#\">
                        <span class=\"d-flex align-items-center align-middle\">
                          <i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
                          <span class=\"flex-grow-1 align-middle\">Billing</span>
                          <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
                        </span>
                </a>
            </li>
            <li>
                <div class=\"dropdown-divider\"></div>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getFilter('route_alias')->getCallable()("logout"));
        echo "\">
                    <i class=\"bx bx-power-off me-2\"></i>
                    <span class=\"align-middle\">Log Out</span>
                </a>
            </li>
        </ul>
    </li>
    <!--/ User -->
</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_profile_avatar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_avatar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profile_avatar"));

        // line 20
        echo "            <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "userIdentifier", [], "any", false, false, false, 22), "html", null, true);
            echo "
                <div class=\"avatar avatar-online\">
";
            // line 25
            echo "                </div>
                ";
        } else {
            // line 27
            echo "                    Login/Register
                ";
        }
        // line 29
        echo "            </a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/_navbar_auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 29,  204 => 27,  200 => 25,  194 => 22,  192 => 21,  189 => 20,  179 => 19,  159 => 112,  131 => 86,  119 => 77,  114 => 75,  106 => 70,  98 => 64,  96 => 63,  90 => 60,  59 => 31,  56 => 19,  54 => 18,  48 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav flex-row align-items-center ms-auto\">
    <!-- Place this tag where you want the button to render. -->
{#    <li class=\"nav-item lh-1 me-3\">#}
{#        <a#}
{#                class=\"github-button\"#}
{#                href=\"https://github.com/themeselection/sneat-html-admin-template-free\"#}
{#                data-icon=\"octicon-star\"#}
{#                data-size=\"large\"#}
{#                data-show-count=\"true\"#}
{#                aria-label=\"Star themeselection/sneat-html-admin-template-free on GitHub\"#}
{#        >Star</a#}
{#        >#}
{#    </li>#}

    <!-- User -->
    <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">

        {% set imageUrl = asset('/bundles/survosbootstrap/sneat/img/avatars/1.png') %}
        {% block profile_avatar %}
            <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
                {% if app.user %}
                {{ app.user.userIdentifier }}
                <div class=\"avatar avatar-online\">
{#                    <img src=\"{{ imageUrl }}\" alt class=\"w-px-40 h-auto rounded-circle\"/>#}
                </div>
                {% else %}
                    Login/Register
                {% endif %}
            </a>
        {% endblock %}

        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown\">\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">
                    Sign In<span class=\"caret\"></span>
                </a>

                <div class=\"dropdown-menu\" id=\"formLogin\">
                    <div class=\"row\">
                        <div class=\"container-fluid\">
                            <form class=\"\">
                                <div class=\"form-group\">
                                    <label class=\"\">Username</label>
                                    <input class=\"form-control\" name=\"username\" id=\"username\" type=\"text\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"\">Password</label>
                                    <input class=\"form-control\" name=\"password\" id=\"password\" type=\"password\">
                                    <br class=\"\">
                                </div>
                                <button type=\"submit\" id=\"btnLogin\" class=\"btn btn-success btn-sm\">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modalRegister\" class=\"\">Register</a>
            </li>
        </ul>

        {{ component('menu', {type: 'top_auth'}) }}

        <ul class=\"dropdown-menu dropdown-menu-end\">
            {% if app.user %}
            <li>
                <a class=\"dropdown-item\" href=\"#\">

                    <div class=\"d-flex\">
                        <div class=\"flex-shrink-0 me-3\">
                            <div class=\"avatar avatar-online\">
                                <img src=\"{{ imageUrl }}\" alt class=\"w-px-40 h-auto rounded-circle\"/>
                            </div>
                        </div>
                        <div class=\"flex-grow-1\">

                                    <span class=\"fw-semibold d-block\">                                        {{ app.user.userIdentifier }}
</span>
                            <small class=\"text-muted\">{{ app.user.roles|join(',') }}</small>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <div class=\"dropdown-divider\"></div>
            </li>
            {% endif %}

            <li>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bx bx-user me-2\"></i>
                    <span class=\"align-middle\">My Profile</span>
                </a>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bx bx-cog me-2\"></i>
                    <span class=\"align-middle\">Settings</span>
                </a>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"#\">
                        <span class=\"d-flex align-items-center align-middle\">
                          <i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
                          <span class=\"flex-grow-1 align-middle\">Billing</span>
                          <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
                        </span>
                </a>
            </li>
            <li>
                <div class=\"dropdown-divider\"></div>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"{{ path('logout'|route_alias) }}\">
                    <i class=\"bx bx-power-off me-2\"></i>
                    <span class=\"align-middle\">Log Out</span>
                </a>
            </li>
        </ul>
    </li>
    <!--/ User -->
</ul>
", "@SurvosBootstrap/sneat/_navbar_auth.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/sneat/_navbar_auth.html.twig");
    }
}
