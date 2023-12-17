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

/* @SurvosBootstrap/sneat/body_content.html.twig */
class __TwigTemplate_dfa2243ee16155148f97f8ccf465a2e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sidebar_logo' => [$this, 'block_sidebar_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/body_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/body_content.html.twig"));

        // line 1
        echo "<div class=\"layout-wrapper layout-content-navbar\">
    <div class=\"layout-container\">
        <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

            ";
        // line 5
        $this->displayBlock('sidebar_logo', $context, $blocks);
        // line 71
        echo "            <div class=\"menu-inner-shadow\"></div>

            ";
        // line 73
        $this->displayBlock('sidebar', $context, $blocks);
        // line 82
        echo "        </aside>

        <!-- Layout container -->
        <div class=\"layout-page\">
            <!-- Navbar -->
            ";
        // line 87
        echo twig_include($this->env, $context, "@SurvosBootstrap/sneat/_navbar.html.twig");
        echo "

            <div class=\"content-wrapper\">
                <!-- Content -->

                ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "            </div>
            <div class=\"content-backdrop fade\"></div>
            ";
        // line 97
        $this->displayBlock('footer', $context, $blocks);
        // line 100
        echo "        </div>
        <!-- Content wrapper -->
    </div>


    <!-- / Layout page -->
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_sidebar_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_logo"));

        // line 6
        echo "                <div class=\"app-brand demo\">
                    <a href=\"index.html\" class=\"app-brand-link\">
              <span class=\"app-brand-logo demo\">
                <svg
                        width=\"25\"
                        viewBox=\"0 0 25 42\"
                        version=\"1.1\"
                        xmlns=\"http://www.w3.org/2000/svg\"
                        xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                >
                  <defs>
                    <path
                            d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                            id=\"path-1\"
                    ></path>
                    <path
                            d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                            id=\"path-3\"
                    ></path>
                    <path
                            d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                            id=\"path-4\"
                    ></path>
                    <path
                            d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                            id=\"path-5\"
                    ></path>
                  </defs>
                  <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                      <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                        <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                          <mask id=\"mask-2\" fill=\"white\">
                            <use xlink:href=\"#path-1\"></use>
                          </mask>
                          <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                          <g id=\"Path-3\" mask=\"url(#mask-2)\">
                            <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                          </g>
                          <g id=\"Path-4\" mask=\"url(#mask-2)\">
                            <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                          </g>
                        </g>
                        <g
                                id=\"Triangle\"
                                transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \"
                        >
                          <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                          <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
                        <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">";
        // line 63
        echo twig_escape_filter($this->env, ((array_key_exists("appShortName", $context)) ? (_twig_default_filter((isset($context["appShortName"]) || array_key_exists("appShortName", $context) ? $context["appShortName"] : (function () { throw new RuntimeError('Variable "appShortName" does not exist.', 63, $this->source); })()), "appShortName")) : ("appShortName")), "html", null, true);
        echo "</span>
                    </a>

                    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                        <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                    </a>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 74
        echo "                ";
        echo twig_include($this->env, $context, "@SurvosBootstrap/sneat/render_sidebar_menu.html.twig", ["debug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "get", ["debug", false], "method", false, false, false, 75), "menuCode" => "survos_sidebar_menu"]);
        // line 78
        echo "

                ";
        // line 81
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "                    Body goes here.
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 98
        echo "            ";
        echo twig_include($this->env, $context, "@SurvosBootstrap/sneat/_footer.html.twig");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/body_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 98,  237 => 97,  226 => 93,  216 => 92,  206 => 81,  202 => 78,  200 => 75,  198 => 74,  188 => 73,  170 => 63,  111 => 6,  101 => 5,  84 => 100,  82 => 97,  78 => 95,  76 => 92,  68 => 87,  61 => 82,  59 => 73,  55 => 71,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"layout-wrapper layout-content-navbar\">
    <div class=\"layout-container\">
        <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

            {% block sidebar_logo %}
                <div class=\"app-brand demo\">
                    <a href=\"index.html\" class=\"app-brand-link\">
              <span class=\"app-brand-logo demo\">
                <svg
                        width=\"25\"
                        viewBox=\"0 0 25 42\"
                        version=\"1.1\"
                        xmlns=\"http://www.w3.org/2000/svg\"
                        xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                >
                  <defs>
                    <path
                            d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                            id=\"path-1\"
                    ></path>
                    <path
                            d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                            id=\"path-3\"
                    ></path>
                    <path
                            d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                            id=\"path-4\"
                    ></path>
                    <path
                            d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                            id=\"path-5\"
                    ></path>
                  </defs>
                  <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                      <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                        <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                          <mask id=\"mask-2\" fill=\"white\">
                            <use xlink:href=\"#path-1\"></use>
                          </mask>
                          <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                          <g id=\"Path-3\" mask=\"url(#mask-2)\">
                            <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                          </g>
                          <g id=\"Path-4\" mask=\"url(#mask-2)\">
                            <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                          </g>
                        </g>
                        <g
                                id=\"Triangle\"
                                transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \"
                        >
                          <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                          <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
                        <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">{{ appShortName|default('appShortName') }}</span>
                    </a>

                    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                        <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                    </a>
                </div>
            {% endblock %}
            <div class=\"menu-inner-shadow\"></div>

            {% block sidebar %}
                {{ include('@SurvosBootstrap/sneat/render_sidebar_menu.html.twig',  {
                    debug: app.request.get('debug', false),
                    menuCode: 'survos_sidebar_menu'
                }
                ) }}

                {#            {{ include('_sidebar.html.twig') }} #}
            {% endblock %}
        </aside>

        <!-- Layout container -->
        <div class=\"layout-page\">
            <!-- Navbar -->
            {{ include('@SurvosBootstrap/sneat/_navbar.html.twig') }}

            <div class=\"content-wrapper\">
                <!-- Content -->

                {% block body %}
                    Body goes here.
                {% endblock %}
            </div>
            <div class=\"content-backdrop fade\"></div>
            {% block footer %}
            {{ include('@SurvosBootstrap/sneat/_footer.html.twig') }}
            {% endblock %}
        </div>
        <!-- Content wrapper -->
    </div>


    <!-- / Layout page -->
</div>
", "@SurvosBootstrap/sneat/body_content.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/sneat/body_content.html.twig");
    }
}
