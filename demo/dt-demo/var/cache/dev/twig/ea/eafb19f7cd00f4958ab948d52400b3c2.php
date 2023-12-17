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

/* @SurvosBootstrap/bs5/base.html.twig */
class __TwigTemplate_950a6146970e7ddbff9736fca2860770 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_content' => [$this, 'block_body_content'],
            'sidebar_logo' => [$this, 'block_sidebar_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'page_menu' => [$this, 'block_page_menu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'footer_menu' => [$this, 'block_footer_menu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SurvosBootstrap/bs5/bootstrap_5_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/bs5/bootstrap_5_layout.html.twig", "@SurvosBootstrap/bs5/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_content"));

        // line 4
        echo "    <div class=\"layout-wrapper layout-content-navbar\" xmlns:twig=\"http://www.w3.org/1999/html\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                ";
        // line 8
        $this->displayBlock('sidebar_logo', $context, $blocks);
        // line 42
        echo "                <div class=\"menu-inner-shadow\"></div>

                ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 48
        echo "            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                ";
        // line 53
        $this->displayBlock('navbar', $context, $blocks);
        // line 57
        echo "
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        <div class=\"d-print-none\">
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 64
            echo "                                ";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("alert", ["message" => $context["flash"]]);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </div>
                        ";
        // line 68
        echo "                        ";
        // line 69
        echo "                            ";
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 74
        echo "
                            ";
        // line 75
        $this->displayBlock('page_menu', $context, $blocks);
        // line 80
        echo "
                        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "                    </div>

                    ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>

            ";
        // line 106
        echo "            ";
        // line 107
        echo "            ";
        // line 108
        echo "            ";
        // line 109
        echo "            ";
        if ($this->env->getFunction('hasOffcanvas')->getCallable()()) {
            // line 110
            echo "                ";
            $context["hincludeUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl($this->env->getFilter('route_alias')->getCallable()("offcanvas"));
            // line 111
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 111, $this->source); })()), "html", null, true);
            echo "</a>

                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSettings\"
                     aria-labelledby=\"offcanvasSettings\">
                    <div class=\"offcanvas-header\">
                        <h5 id=\"offcanvasEndLabel\" class=\"offcanvas-title\">Offcanvas End</h5>
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                        <p class=\"text-center\">
                            ";
            // line 123
            echo "                            ";
            // line 124
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 124, $this->source); })()), ["default" => ("Loading..." . (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 124, $this->source); })()))]);
            echo "
                        </p>
                        <button type=\"button\" class=\"btn btn-primary mb-2 d-grid w-100\">Continue</button>
                        <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\"
                                data-bs-dismiss=\"offcanvas\">
                            Cancel
                        </button>
                        <div>
                            This form was loaded via hinclude.
                            Even better would be to not load it until requested, see
                            https://www.stimulus-components.com/docs/stimulus-content-loader/
                        </div>
                    </div>
                </div>
            ";
        }
        // line 139
        echo "
        </div>

        <!-- / Layout page -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_sidebar_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_logo"));

        // line 9
        echo "                    <div class=\"app-brand demo\">
                        ";
        // line 10
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link"]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link"]), $context, "bs5/base.html.twig", 26522368351);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            if (!isset($embeddedContext["outerBlocks"])) {
                $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
            }
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 26522368351);
            $this->loadTemplate("@SurvosBootstrap/bs5/base.html.twig", "@SurvosBootstrap/bs5/base.html.twig", 10, "26522368351")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 17
        echo "                        ";
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->extensionPreCreateForRender("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link", "body" => "Home"]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $preRenderEvent = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->startEmbeddedComponentRender("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link", "body" => "Home"]), $context, "bs5/base.html.twig", 74366721);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            if (!isset($embeddedContext["outerBlocks"])) {
                $embeddedContext["outerBlocks"] = new \Symfony\UX\TwigComponent\BlockStack();
            }
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 74366721);
            $this->loadTemplate("@SurvosBootstrap/bs5/base.html.twig", "@SurvosBootstrap/bs5/base.html.twig", 17, "74366721")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 35
        echo "
                        <a href=\"javascript:void(0);\"
                           class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                        </a>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 46
        echo "                    ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["type" => "sidebar"]);
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 54
        echo "                    ";
        $this->loadTemplate("@SurvosBootstrap/bs5/base.html.twig", "@SurvosBootstrap/bs5/base.html.twig", 54, "1339124251")->display($context);
        // line 56
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 70
        echo "                                ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu_breadcrumb", ["wrapperClass" => "fw-bold py-3 mb-4 d-print-none", "type" => "sidebar"]);
        // line 72
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_page_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_menu"));

        // line 76
        echo "                                ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["wrapperClass" => "fw-bold py-3 mb-4 d-print-none", "type" => "top_page"]);
        // line 78
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 86
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 87
        echo "                    <footer class=\"c\">
                            ";
        // line 88
        $this->displayBlock('footer_menu', $context, $blocks);
        // line 97
        echo "                    </footer>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_footer_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_menu"));

        // line 89
        echo "                                ";
        // line 90
        echo "                                ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["type" => "footer", "wrapperClass" => "content-footer footer bg-footer-theme fixed-bottom ", "options" => []]);
        // line 95
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/bs5/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 95,  430 => 90,  428 => 89,  418 => 88,  407 => 97,  405 => 88,  402 => 87,  392 => 86,  381 => 82,  371 => 81,  360 => 78,  357 => 76,  347 => 75,  336 => 72,  333 => 70,  323 => 69,  313 => 56,  310 => 54,  300 => 53,  287 => 46,  277 => 44,  261 => 35,  245 => 17,  230 => 10,  227 => 9,  217 => 8,  202 => 139,  183 => 124,  181 => 123,  164 => 111,  161 => 110,  158 => 109,  156 => 108,  154 => 107,  152 => 106,  144 => 99,  142 => 86,  138 => 84,  136 => 81,  133 => 80,  131 => 75,  128 => 74,  125 => 69,  123 => 68,  120 => 66,  111 => 64,  107 => 63,  99 => 57,  97 => 53,  90 => 48,  88 => 44,  84 => 42,  82 => 8,  76 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/bs5/bootstrap_5_layout.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\" xmlns:twig=\"http://www.w3.org/1999/html\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
                                <span class=\"app-brand-logo demo\">
                                    (logo)

              </span>
                                <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">
                                {% block logo_mini %}
                                    {{ appShortName|default('appShortName') }}
                                {% endblock %}
                    </span>

                            {% endblock %}
                        {% endcomponent %}

                        <a href=\"javascript:void(0);\"
                           class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                        </a>
                    </div>
                {% endblock %}
                <div class=\"menu-inner-shadow\"></div>

                {% block sidebar %}
{#                    {{ include('@SurvosBootstrap/bs5/_sidebar.html.twig') }}#}
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}
                    {% embed('@SurvosBootstrap/bs5/_navbar.html.twig') %}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'sidebar'}) }}
                            {% endblock %}

                            {% block page_menu %}
                                {{ component('menu', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'top_page'}) }}
                            {% endblock %}

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                    <footer class=\"c\">
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    wrapperClass: 'content-footer footer bg-footer-theme fixed-bottom ',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                    </footer>
                    {% endblock %}

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>

            {#        {{ hasOffcanvas() ? 'OC!' : 'no!' }} #}
            {#        {{ theme_option('offcanvas') }} #}
            {#        {{ 'offcanvas'|route_alias }} #}
            {#        {% if theme_option('offcanvas') %} #}
            {% if hasOffcanvas() %}
                {% set hincludeUrl = url('offcanvas'|route_alias) %}
                <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a>

                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSettings\"
                     aria-labelledby=\"offcanvasSettings\">
                    <div class=\"offcanvas-header\">
                        <h5 id=\"offcanvasEndLabel\" class=\"offcanvas-title\">Offcanvas End</h5>
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                        <p class=\"text-center\">
                            {#                    {{ c_link(href: , text: 'x') }} #}
                            {#                    <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a> #}
                            {{ render_hinclude(hincludeUrl, {default: 'Loading...' ~ hincludeUrl}) }}
                        </p>
                        <button type=\"button\" class=\"btn btn-primary mb-2 d-grid w-100\">Continue</button>
                        <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\"
                                data-bs-dismiss=\"offcanvas\">
                            Cancel
                        </button>
                        <div>
                            This form was loaded via hinclude.
                            Even better would be to not load it until requested, see
                            https://www.stimulus-components.com/docs/stimulus-content-loader/
                        </div>
                    </div>
                </div>
            {% endif %}

        </div>

        <!-- / Layout page -->
    </div>
{% endblock %}
", "@SurvosBootstrap/bs5/base.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/bs5/base.html.twig");
    }
}


/* @SurvosBootstrap/bs5/base.html.twig */
class __TwigTemplate_950a6146970e7ddbff9736fca2860770___26522368351 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 10, $this->source); })()), "@SurvosBootstrap/bs5/base.html.twig", 10);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/bs5/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 15,  669 => 14,  630 => 10,  433 => 95,  430 => 90,  428 => 89,  418 => 88,  407 => 97,  405 => 88,  402 => 87,  392 => 86,  381 => 82,  371 => 81,  360 => 78,  357 => 76,  347 => 75,  336 => 72,  333 => 70,  323 => 69,  313 => 56,  310 => 54,  300 => 53,  287 => 46,  277 => 44,  261 => 35,  245 => 17,  230 => 10,  227 => 9,  217 => 8,  202 => 139,  183 => 124,  181 => 123,  164 => 111,  161 => 110,  158 => 109,  156 => 108,  154 => 107,  152 => 106,  144 => 99,  142 => 86,  138 => 84,  136 => 81,  133 => 80,  131 => 75,  128 => 74,  125 => 69,  123 => 68,  120 => 66,  111 => 64,  107 => 63,  99 => 57,  97 => 53,  90 => 48,  88 => 44,  84 => 42,  82 => 8,  76 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/bs5/bootstrap_5_layout.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\" xmlns:twig=\"http://www.w3.org/1999/html\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
                                <span class=\"app-brand-logo demo\">
                                    (logo)

              </span>
                                <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">
                                {% block logo_mini %}
                                    {{ appShortName|default('appShortName') }}
                                {% endblock %}
                    </span>

                            {% endblock %}
                        {% endcomponent %}

                        <a href=\"javascript:void(0);\"
                           class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                        </a>
                    </div>
                {% endblock %}
                <div class=\"menu-inner-shadow\"></div>

                {% block sidebar %}
{#                    {{ include('@SurvosBootstrap/bs5/_sidebar.html.twig') }}#}
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}
                    {% embed('@SurvosBootstrap/bs5/_navbar.html.twig') %}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'sidebar'}) }}
                            {% endblock %}

                            {% block page_menu %}
                                {{ component('menu', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'top_page'}) }}
                            {% endblock %}

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                    <footer class=\"c\">
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    wrapperClass: 'content-footer footer bg-footer-theme fixed-bottom ',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                    </footer>
                    {% endblock %}

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>

            {#        {{ hasOffcanvas() ? 'OC!' : 'no!' }} #}
            {#        {{ theme_option('offcanvas') }} #}
            {#        {{ 'offcanvas'|route_alias }} #}
            {#        {% if theme_option('offcanvas') %} #}
            {% if hasOffcanvas() %}
                {% set hincludeUrl = url('offcanvas'|route_alias) %}
                <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a>

                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSettings\"
                     aria-labelledby=\"offcanvasSettings\">
                    <div class=\"offcanvas-header\">
                        <h5 id=\"offcanvasEndLabel\" class=\"offcanvas-title\">Offcanvas End</h5>
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                        <p class=\"text-center\">
                            {#                    {{ c_link(href: , text: 'x') }} #}
                            {#                    <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a> #}
                            {{ render_hinclude(hincludeUrl, {default: 'Loading...' ~ hincludeUrl}) }}
                        </p>
                        <button type=\"button\" class=\"btn btn-primary mb-2 d-grid w-100\">Continue</button>
                        <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\"
                                data-bs-dismiss=\"offcanvas\">
                            Cancel
                        </button>
                        <div>
                            This form was loaded via hinclude.
                            Even better would be to not load it until requested, see
                            https://www.stimulus-components.com/docs/stimulus-content-loader/
                        </div>
                    </div>
                </div>
            {% endif %}

        </div>

        <!-- / Layout page -->
    </div>
{% endblock %}
", "@SurvosBootstrap/bs5/base.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/bs5/base.html.twig");
    }
}


/* @SurvosBootstrap/bs5/base.html.twig */
class __TwigTemplate_950a6146970e7ddbff9736fca2860770___74366721 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'body' => [$this, 'block_body'],
            'logo_mini' => [$this, 'block_logo_mini'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return $this->loadTemplate((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 17, $this->source); })()), "@SurvosBootstrap/bs5/base.html.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "                                <span class=\"app-brand-logo demo\">
                                    (logo)

              </span>
                                <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">
                                ";
        // line 28
        $this->displayBlock('logo_mini', $context, $blocks);
        // line 31
        echo "                    </span>

                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_logo_mini($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        // line 29
        echo "                                    ";
        echo twig_escape_filter($this->env, ((array_key_exists("appShortName", $context)) ? (_twig_default_filter((isset($context["appShortName"]) || array_key_exists("appShortName", $context) ? $context["appShortName"] : (function () { throw new RuntimeError('Variable "appShortName" does not exist.', 29, $this->source); })()), "appShortName")) : ("appShortName")), "html", null, true);
        echo "
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/bs5/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  956 => 29,  946 => 28,  934 => 31,  932 => 28,  925 => 23,  915 => 22,  876 => 17,  679 => 15,  669 => 14,  630 => 10,  433 => 95,  430 => 90,  428 => 89,  418 => 88,  407 => 97,  405 => 88,  402 => 87,  392 => 86,  381 => 82,  371 => 81,  360 => 78,  357 => 76,  347 => 75,  336 => 72,  333 => 70,  323 => 69,  313 => 56,  310 => 54,  300 => 53,  287 => 46,  277 => 44,  261 => 35,  245 => 17,  230 => 10,  227 => 9,  217 => 8,  202 => 139,  183 => 124,  181 => 123,  164 => 111,  161 => 110,  158 => 109,  156 => 108,  154 => 107,  152 => 106,  144 => 99,  142 => 86,  138 => 84,  136 => 81,  133 => 80,  131 => 75,  128 => 74,  125 => 69,  123 => 68,  120 => 66,  111 => 64,  107 => 63,  99 => 57,  97 => 53,  90 => 48,  88 => 44,  84 => 42,  82 => 8,  76 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/bs5/bootstrap_5_layout.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\" xmlns:twig=\"http://www.w3.org/1999/html\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
                                <span class=\"app-brand-logo demo\">
                                    (logo)

              </span>
                                <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">
                                {% block logo_mini %}
                                    {{ appShortName|default('appShortName') }}
                                {% endblock %}
                    </span>

                            {% endblock %}
                        {% endcomponent %}

                        <a href=\"javascript:void(0);\"
                           class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                        </a>
                    </div>
                {% endblock %}
                <div class=\"menu-inner-shadow\"></div>

                {% block sidebar %}
{#                    {{ include('@SurvosBootstrap/bs5/_sidebar.html.twig') }}#}
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}
                    {% embed('@SurvosBootstrap/bs5/_navbar.html.twig') %}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'sidebar'}) }}
                            {% endblock %}

                            {% block page_menu %}
                                {{ component('menu', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'top_page'}) }}
                            {% endblock %}

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                    <footer class=\"c\">
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    wrapperClass: 'content-footer footer bg-footer-theme fixed-bottom ',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                    </footer>
                    {% endblock %}

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>

            {#        {{ hasOffcanvas() ? 'OC!' : 'no!' }} #}
            {#        {{ theme_option('offcanvas') }} #}
            {#        {{ 'offcanvas'|route_alias }} #}
            {#        {% if theme_option('offcanvas') %} #}
            {% if hasOffcanvas() %}
                {% set hincludeUrl = url('offcanvas'|route_alias) %}
                <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a>

                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSettings\"
                     aria-labelledby=\"offcanvasSettings\">
                    <div class=\"offcanvas-header\">
                        <h5 id=\"offcanvasEndLabel\" class=\"offcanvas-title\">Offcanvas End</h5>
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                        <p class=\"text-center\">
                            {#                    {{ c_link(href: , text: 'x') }} #}
                            {#                    <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a> #}
                            {{ render_hinclude(hincludeUrl, {default: 'Loading...' ~ hincludeUrl}) }}
                        </p>
                        <button type=\"button\" class=\"btn btn-primary mb-2 d-grid w-100\">Continue</button>
                        <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\"
                                data-bs-dismiss=\"offcanvas\">
                            Cancel
                        </button>
                        <div>
                            This form was loaded via hinclude.
                            Even better would be to not load it until requested, see
                            https://www.stimulus-components.com/docs/stimulus-content-loader/
                        </div>
                    </div>
                </div>
            {% endif %}

        </div>

        <!-- / Layout page -->
    </div>
{% endblock %}
", "@SurvosBootstrap/bs5/base.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/bs5/base.html.twig");
    }
}


/* @SurvosBootstrap/bs5/base.html.twig */
class __TwigTemplate_950a6146970e7ddbff9736fca2860770___1339124251 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 54
        return "@SurvosBootstrap/bs5/_navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/base.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/bs5/_navbar.html.twig", "@SurvosBootstrap/bs5/base.html.twig", 54);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/bs5/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1153 => 54,  956 => 29,  946 => 28,  934 => 31,  932 => 28,  925 => 23,  915 => 22,  876 => 17,  679 => 15,  669 => 14,  630 => 10,  433 => 95,  430 => 90,  428 => 89,  418 => 88,  407 => 97,  405 => 88,  402 => 87,  392 => 86,  381 => 82,  371 => 81,  360 => 78,  357 => 76,  347 => 75,  336 => 72,  333 => 70,  323 => 69,  313 => 56,  310 => 54,  300 => 53,  287 => 46,  277 => 44,  261 => 35,  245 => 17,  230 => 10,  227 => 9,  217 => 8,  202 => 139,  183 => 124,  181 => 123,  164 => 111,  161 => 110,  158 => 109,  156 => 108,  154 => 107,  152 => 106,  144 => 99,  142 => 86,  138 => 84,  136 => 81,  133 => 80,  131 => 75,  128 => 74,  125 => 69,  123 => 68,  120 => 66,  111 => 64,  107 => 63,  99 => 57,  97 => 53,  90 => 48,  88 => 44,  84 => 42,  82 => 8,  76 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/bs5/bootstrap_5_layout.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\" xmlns:twig=\"http://www.w3.org/1999/html\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
                                <span class=\"app-brand-logo demo\">
                                    (logo)

              </span>
                                <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">
                                {% block logo_mini %}
                                    {{ appShortName|default('appShortName') }}
                                {% endblock %}
                    </span>

                            {% endblock %}
                        {% endcomponent %}

                        <a href=\"javascript:void(0);\"
                           class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                            <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                        </a>
                    </div>
                {% endblock %}
                <div class=\"menu-inner-shadow\"></div>

                {% block sidebar %}
{#                    {{ include('@SurvosBootstrap/bs5/_sidebar.html.twig') }}#}
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}
                    {% embed('@SurvosBootstrap/bs5/_navbar.html.twig') %}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'sidebar'}) }}
                            {% endblock %}

                            {% block page_menu %}
                                {{ component('menu', {
                                    wrapperClass: 'fw-bold py-3 mb-4 d-print-none',
                                    type: 'top_page'}) }}
                            {% endblock %}

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                    <footer class=\"c\">
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    wrapperClass: 'content-footer footer bg-footer-theme fixed-bottom ',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                    </footer>
                    {% endblock %}

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>

            {#        {{ hasOffcanvas() ? 'OC!' : 'no!' }} #}
            {#        {{ theme_option('offcanvas') }} #}
            {#        {{ 'offcanvas'|route_alias }} #}
            {#        {% if theme_option('offcanvas') %} #}
            {% if hasOffcanvas() %}
                {% set hincludeUrl = url('offcanvas'|route_alias) %}
                <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a>

                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSettings\"
                     aria-labelledby=\"offcanvasSettings\">
                    <div class=\"offcanvas-header\">
                        <h5 id=\"offcanvasEndLabel\" class=\"offcanvas-title\">Offcanvas End</h5>
                        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"
                                aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body my-auto mx-0 flex-grow-0\">
                        <p class=\"text-center\">
                            {#                    {{ c_link(href: , text: 'x') }} #}
                            {#                    <a href=\"{{ hincludeUrl }}\">{{ hincludeUrl }}</a> #}
                            {{ render_hinclude(hincludeUrl, {default: 'Loading...' ~ hincludeUrl}) }}
                        </p>
                        <button type=\"button\" class=\"btn btn-primary mb-2 d-grid w-100\">Continue</button>
                        <button type=\"button\" class=\"btn btn-outline-secondary d-grid w-100\"
                                data-bs-dismiss=\"offcanvas\">
                            Cancel
                        </button>
                        <div>
                            This form was loaded via hinclude.
                            Even better would be to not load it until requested, see
                            https://www.stimulus-components.com/docs/stimulus-content-loader/
                        </div>
                    </div>
                </div>
            {% endif %}

        </div>

        <!-- / Layout page -->
    </div>
{% endblock %}
", "@SurvosBootstrap/bs5/base.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/bs5/base.html.twig");
    }
}
