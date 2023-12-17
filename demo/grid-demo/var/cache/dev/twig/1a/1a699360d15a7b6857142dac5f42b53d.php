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

/* @SurvosBootstrap/sneat/_footer.html.twig */
class __TwigTemplate_10457fba3f34de0cb3f52106332b7819 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer_menu' => [$this, 'block_footer_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/_footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
";
        // line 5
        echo "

<footer class=\"content-footer footer bg-footer-theme fixed-bottom \">
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "

    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">

        <div class=\"mb-2 mb-md-0\">
            ";
        // line 28
        echo "                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href=\"https://themeselection.com\" target=\"_blank\" class=\"footer-link fw-bolder\">ThemeSelection</a>
                    </div>
                    <div>
            ";
        // line 37
        echo "            ";
        // line 38
        echo "
            ";
        // line 54
        echo "                        ";
        $this->displayBlock('footer_menu', $context, $blocks);
        // line 57
        echo "        </div>

        ";
        // line 59
        if ($this->env->getFunction('hasOffcanvas')->getCallable()()) {
            // line 60
            echo "            <button class=\"btn btn-primary \" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSettings\" aria-controls=\"offcanvasSettings\">
                <span class=\"bx bx-filter\"></span>
            </button>
        ";
        }
        // line 64
        echo "




    </div>
</footer>
<!-- / Footer -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 54
    public function block_footer_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_menu"));

        // line 56
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 56,  133 => 54,  115 => 64,  109 => 60,  107 => 59,  103 => 57,  100 => 54,  97 => 38,  95 => 37,  85 => 28,  78 => 22,  76 => 21,  74 => 20,  72 => 19,  70 => 18,  68 => 17,  66 => 16,  64 => 15,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  52 => 9,  47 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
{# <nav class=\"navbar fixed-bottom navbar-light bg-light\"> #}
{#    <a class=\"navbar-brand\" href=\"#\">Fixed bottom</a> #}
{# </nav> #}


<footer class=\"content-footer footer bg-footer-theme fixed-bottom \">
    {#    <ul class=\"nav justify-content-end\"> #}
    {#        <li class=\"nav-item\"> #}
    {#            <a class=\"nav-link active\" href=\"#\">Active</a> #}
    {#        </li> #}
    {#        <li class=\"nav-item\"> #}
    {#            <a class=\"nav-link\" href=\"#\">Link</a> #}
    {#        </li> #}
    {#        <li class=\"nav-item\"> #}
    {#            <a class=\"nav-link\" href=\"#\">Link</a> #}
    {#        </li> #}
    {#        <li class=\"nav-item\"> #}
    {#            <a class=\"nav-link disabled\" href=\"#\">Disabled</a> #}
    {#        </li> #}
    {#    </ul> #}


    <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">

        <div class=\"mb-2 mb-md-0\">
            {#  sb an unstyled list, or just spans #}
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href=\"https://themeselection.com\" target=\"_blank\" class=\"footer-link fw-bolder\">ThemeSelection</a>
                    </div>
                    <div>
            {#            <a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a> #}
            {#            <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a> #}

            {#
            <a
                    href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/\"
                    target=\"_blank\"
                    class=\"footer-link me-4\"
            >Documentation</a
            >

            <a
                    href=\"https://github.com/themeselection/sneat-html-admin-template-free/issues\"
                    target=\"_blank\"
                    class=\"footer-link me-4\"
            >Support</a
            >
            #}
                        {% block footer_menu %}
{#            {{ component('menu', {type: 'footer'}) }}#}
                        {% endblock %}
        </div>

        {% if hasOffcanvas() %}
            <button class=\"btn btn-primary \" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSettings\" aria-controls=\"offcanvasSettings\">
                <span class=\"bx bx-filter\"></span>
            </button>
        {% endif %}





    </div>
</footer>
<!-- / Footer -->
", "@SurvosBootstrap/sneat/_footer.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/sneat/_footer.html.twig");
    }
}
