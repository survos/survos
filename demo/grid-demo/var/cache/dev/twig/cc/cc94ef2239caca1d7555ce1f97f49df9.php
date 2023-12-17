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

/* @SurvosBootstrap/sneat/_navbar_example.html.twig */
class __TwigTemplate_37afa0613eb930b5e80e246c5d99cd8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_navbar_example.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_navbar_example.html.twig"));

        // line 1
        echo "

<nav
        class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
        id=\"layout-navbar\"
>
    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
            <i class=\"bx bx-menu bx-sm\"></i>
        </a>
    </div>

    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input
                        type=\"text\"
                        class=\"form-control border-0 shadow-none\"
                        placeholder=\"Search...\"
                        aria-label=\"Search...\"
                />
            </div>
        </div>
        <!-- /Search -->

        ";
        // line 28
        echo twig_include($this->env, $context, "@SurvosBootstrap/sneat/_navbar_auth_example.html.twig");
        echo "
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/_navbar_example.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<nav
        class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
        id=\"layout-navbar\"
>
    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
            <i class=\"bx bx-menu bx-sm\"></i>
        </a>
    </div>

    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
        <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
            <div class=\"nav-item d-flex align-items-center\">
                <i class=\"bx bx-search fs-4 lh-0\"></i>
                <input
                        type=\"text\"
                        class=\"form-control border-0 shadow-none\"
                        placeholder=\"Search...\"
                        aria-label=\"Search...\"
                />
            </div>
        </div>
        <!-- /Search -->

        {{ include('@SurvosBootstrap/sneat/_navbar_auth_example.html.twig') }}
    </div>
</nav>
", "@SurvosBootstrap/sneat/_navbar_example.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/sneat/_navbar_example.html.twig");
    }
}
