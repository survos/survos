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

/* @SurvosBootstrap/sneat/base.html.twig */
class __TwigTemplate_0d3cdd4f9cf951340bcab565bd8ab7a3 extends Template
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
            'top_navbar_menu' => [$this, 'block_top_navbar_menu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SurvosBootstrap/sneat/shell.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/sneat/shell.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 1);
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
        echo "    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                ";
        // line 8
        $this->displayBlock('sidebar_logo', $context, $blocks);
        // line 95
        echo "                <div class=\"menu-inner-shadow\"></div>


                ";
        // line 98
        $this->displayBlock('sidebar', $context, $blocks);
        // line 101
        echo "            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                ";
        // line 106
        $this->displayBlock('navbar', $context, $blocks);
        // line 112
        echo "
                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "flashes", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 118
            echo "                            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                ";
            // line 119
            echo twig_escape_filter($this->env, twig_join_filter($context["messages"], ","), "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
                        <div class=\"d-print-none\">
                            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 125
            echo "                                ";
            echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("alert", ["message" => $context["flash"]]);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                        </div>
                        ";
        // line 129
        echo "                        ";
        // line 130
        echo "                        <h4 class=\"fw-bold py-3 mb-4 d-print-none\">
                            ";
        // line 131
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 134
        echo "                        </h4>

                        <div class=\"fw-bold py-3 mb-4 d-print-none\">
                            ";
        // line 137
        $this->displayBlock('top_navbar_menu', $context, $blocks);
        // line 140
        echo "                        </div>

                        ";
        // line 142
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "                    </div>

                    ";
        // line 147
        $this->displayBlock('footer', $context, $blocks);
        // line 159
        echo "
                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>

            ";
        // line 166
        echo "            ";
        // line 167
        echo "            ";
        // line 168
        echo "            ";
        // line 169
        echo "            ";
        if ($this->env->getFunction('hasOffcanvas')->getCallable()()) {
            // line 170
            echo "                ";
            $context["hincludeUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl($this->env->getFilter('route_alias')->getCallable()("offcanvas"));
            // line 171
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 171, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 171, $this->source); })()), "html", null, true);
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
            // line 183
            echo "                            ";
            // line 184
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("hinclude", (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 184, $this->source); })()), ["default" => ("Loading..." . (isset($context["hincludeUrl"]) || array_key_exists("hincludeUrl", $context) ? $context["hincludeUrl"] : (function () { throw new RuntimeError('Variable "hincludeUrl" does not exist.', 184, $this->source); })()))]);
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
        // line 199
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
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->preRender("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link"]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $embeddedContext = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->embeddedContext("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link"]), $context, "sneat/base.html.twig", 23728858081);
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 23728858081);
            $this->loadTemplate("@SurvosBootstrap/sneat/base.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 10, "23728858081")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 19
        echo "                        ";
        $preRendered = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->preRender("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link", "body" => "Home"]));
        if (null !== $preRendered) {
            echo $preRendered;
        } else {
            $embeddedContext = $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->embeddedContext("link", twig_to_array(["path" => $this->env->getFilter('route_alias')->getCallable()("home"), "class" => "app-brand-link", "body" => "Home"]), $context, "sneat/base.html.twig", 41054304201);
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 41054304201);
            $this->loadTemplate("@SurvosBootstrap/sneat/base.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 19, "41054304201")->display($embeddedContext, $embeddedBlocks);
            $this->extensions["Symfony\\UX\\TwigComponent\\Twig\\ComponentExtension"]->finishEmbeddedComponentRender();
        }
        // line 88
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

    // line 98
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                    ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["type" => "sidebar"]);
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 107
        echo "
                    ";
        // line 108
        $this->loadTemplate("@SurvosBootstrap/sneat/base.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 108, "618644473")->display($context);
        // line 111
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 132
        echo "                                ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu_breadcrumb", ["type" => "sidebar"]);
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_top_navbar_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_navbar_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_navbar_menu"));

        // line 138
        echo "                                ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["type" => "top_page"]);
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 142
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 143
        echo "                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 148
        echo "                        ";
        $this->loadTemplate("@SurvosBootstrap/sneat/base.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 148, "1554933075")->display($context);
        // line 158
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 158,  418 => 148,  408 => 147,  397 => 143,  387 => 142,  374 => 138,  364 => 137,  351 => 132,  341 => 131,  331 => 111,  329 => 108,  326 => 107,  316 => 106,  303 => 99,  293 => 98,  277 => 88,  266 => 19,  256 => 10,  253 => 9,  243 => 8,  228 => 199,  209 => 184,  207 => 183,  190 => 171,  187 => 170,  184 => 169,  182 => 168,  180 => 167,  178 => 166,  170 => 159,  168 => 147,  164 => 145,  162 => 142,  158 => 140,  156 => 137,  151 => 134,  149 => 131,  146 => 130,  144 => 129,  141 => 127,  132 => 125,  128 => 124,  124 => 122,  115 => 119,  110 => 118,  106 => 117,  99 => 112,  97 => 106,  90 => 101,  88 => 98,  83 => 95,  81 => 8,  75 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/sneat/shell.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                                {# where should translation be? #}
                                {{ 'home'|route_alias }}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
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
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}

                    {% embed('@SurvosBootstrap/sneat/_navbar.html.twig') %}
                        {#            {{ include('@SurvosBootstrap/_navbar.html.twig') }} #}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        {% for type, messages in app.flashes %}
                            <div class=\"alert alert-{{ type }}\">
                                {{ messages|join(',') }}
                            </div>
                        {% endfor %}

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                        <h4 class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {type: 'sidebar'}) }}
                            {% endblock %}
                        </h4>

                        <div class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block top_navbar_menu %}
                                {{ component('menu', {type: 'top_page'}) }}
                            {% endblock %}
                        </div>

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                        {% embed('@SurvosBootstrap/sneat/_footer.html.twig') %}
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                        {% endembed %}
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
", "@SurvosBootstrap/sneat/base.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/sneat/base.html.twig");
    }
}


/* @SurvosBootstrap/sneat/base.html.twig */
class __TwigTemplate_0d3cdd4f9cf951340bcab565bd8ab7a3___23728858081 extends Template
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
        return "@SurvosBootstrap/components/link.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/components/link.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 10);
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

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "                                ";
        // line 16
        echo "                                ";
        echo twig_escape_filter($this->env, $this->env->getFilter('route_alias')->getCallable()("home"), "html", null, true);
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  729 => 16,  727 => 15,  717 => 14,  677 => 10,  421 => 158,  418 => 148,  408 => 147,  397 => 143,  387 => 142,  374 => 138,  364 => 137,  351 => 132,  341 => 131,  331 => 111,  329 => 108,  326 => 107,  316 => 106,  303 => 99,  293 => 98,  277 => 88,  266 => 19,  256 => 10,  253 => 9,  243 => 8,  228 => 199,  209 => 184,  207 => 183,  190 => 171,  187 => 170,  184 => 169,  182 => 168,  180 => 167,  178 => 166,  170 => 159,  168 => 147,  164 => 145,  162 => 142,  158 => 140,  156 => 137,  151 => 134,  149 => 131,  146 => 130,  144 => 129,  141 => 127,  132 => 125,  128 => 124,  124 => 122,  115 => 119,  110 => 118,  106 => 117,  99 => 112,  97 => 106,  90 => 101,  88 => 98,  83 => 95,  81 => 8,  75 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/sneat/shell.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                                {# where should translation be? #}
                                {{ 'home'|route_alias }}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
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
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}

                    {% embed('@SurvosBootstrap/sneat/_navbar.html.twig') %}
                        {#            {{ include('@SurvosBootstrap/_navbar.html.twig') }} #}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        {% for type, messages in app.flashes %}
                            <div class=\"alert alert-{{ type }}\">
                                {{ messages|join(',') }}
                            </div>
                        {% endfor %}

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                        <h4 class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {type: 'sidebar'}) }}
                            {% endblock %}
                        </h4>

                        <div class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block top_navbar_menu %}
                                {{ component('menu', {type: 'top_page'}) }}
                            {% endblock %}
                        </div>

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                        {% embed('@SurvosBootstrap/sneat/_footer.html.twig') %}
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                        {% endembed %}
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
", "@SurvosBootstrap/sneat/base.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/sneat/base.html.twig");
    }
}


/* @SurvosBootstrap/sneat/base.html.twig */
class __TwigTemplate_0d3cdd4f9cf951340bcab565bd8ab7a3___41054304201 extends Template
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
        // line 19
        return "@SurvosBootstrap/components/link.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/components/link.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 19);
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

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "                                <span class=\"app-brand-logo demo\">
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
                                <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">
                                ";
        // line 81
        $this->displayBlock('logo_mini', $context, $blocks);
        // line 84
        echo "                    </span>

                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_logo_mini($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        // line 82
        echo "                                    ";
        echo twig_escape_filter($this->env, ((array_key_exists("appShortName", $context)) ? (_twig_default_filter((isset($context["appShortName"]) || array_key_exists("appShortName", $context) ? $context["appShortName"] : (function () { throw new RuntimeError('Variable "appShortName" does not exist.', 82, $this->source); })()), "appShortName")) : ("appShortName")), "html", null, true);
        echo "
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1121 => 82,  1111 => 81,  1099 => 84,  1097 => 81,  1039 => 25,  1029 => 24,  989 => 19,  729 => 16,  727 => 15,  717 => 14,  677 => 10,  421 => 158,  418 => 148,  408 => 147,  397 => 143,  387 => 142,  374 => 138,  364 => 137,  351 => 132,  341 => 131,  331 => 111,  329 => 108,  326 => 107,  316 => 106,  303 => 99,  293 => 98,  277 => 88,  266 => 19,  256 => 10,  253 => 9,  243 => 8,  228 => 199,  209 => 184,  207 => 183,  190 => 171,  187 => 170,  184 => 169,  182 => 168,  180 => 167,  178 => 166,  170 => 159,  168 => 147,  164 => 145,  162 => 142,  158 => 140,  156 => 137,  151 => 134,  149 => 131,  146 => 130,  144 => 129,  141 => 127,  132 => 125,  128 => 124,  124 => 122,  115 => 119,  110 => 118,  106 => 117,  99 => 112,  97 => 106,  90 => 101,  88 => 98,  83 => 95,  81 => 8,  75 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/sneat/shell.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                                {# where should translation be? #}
                                {{ 'home'|route_alias }}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
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
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}

                    {% embed('@SurvosBootstrap/sneat/_navbar.html.twig') %}
                        {#            {{ include('@SurvosBootstrap/_navbar.html.twig') }} #}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        {% for type, messages in app.flashes %}
                            <div class=\"alert alert-{{ type }}\">
                                {{ messages|join(',') }}
                            </div>
                        {% endfor %}

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                        <h4 class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {type: 'sidebar'}) }}
                            {% endblock %}
                        </h4>

                        <div class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block top_navbar_menu %}
                                {{ component('menu', {type: 'top_page'}) }}
                            {% endblock %}
                        </div>

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                        {% embed('@SurvosBootstrap/sneat/_footer.html.twig') %}
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                        {% endembed %}
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
", "@SurvosBootstrap/sneat/base.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/sneat/base.html.twig");
    }
}


/* @SurvosBootstrap/sneat/base.html.twig */
class __TwigTemplate_0d3cdd4f9cf951340bcab565bd8ab7a3___618644473 extends Template
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
        // line 108
        return "@SurvosBootstrap/sneat/_navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/sneat/_navbar.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 108);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1378 => 108,  1121 => 82,  1111 => 81,  1099 => 84,  1097 => 81,  1039 => 25,  1029 => 24,  989 => 19,  729 => 16,  727 => 15,  717 => 14,  677 => 10,  421 => 158,  418 => 148,  408 => 147,  397 => 143,  387 => 142,  374 => 138,  364 => 137,  351 => 132,  341 => 131,  331 => 111,  329 => 108,  326 => 107,  316 => 106,  303 => 99,  293 => 98,  277 => 88,  266 => 19,  256 => 10,  253 => 9,  243 => 8,  228 => 199,  209 => 184,  207 => 183,  190 => 171,  187 => 170,  184 => 169,  182 => 168,  180 => 167,  178 => 166,  170 => 159,  168 => 147,  164 => 145,  162 => 142,  158 => 140,  156 => 137,  151 => 134,  149 => 131,  146 => 130,  144 => 129,  141 => 127,  132 => 125,  128 => 124,  124 => 122,  115 => 119,  110 => 118,  106 => 117,  99 => 112,  97 => 106,  90 => 101,  88 => 98,  83 => 95,  81 => 8,  75 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/sneat/shell.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                                {# where should translation be? #}
                                {{ 'home'|route_alias }}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
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
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}

                    {% embed('@SurvosBootstrap/sneat/_navbar.html.twig') %}
                        {#            {{ include('@SurvosBootstrap/_navbar.html.twig') }} #}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        {% for type, messages in app.flashes %}
                            <div class=\"alert alert-{{ type }}\">
                                {{ messages|join(',') }}
                            </div>
                        {% endfor %}

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                        <h4 class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {type: 'sidebar'}) }}
                            {% endblock %}
                        </h4>

                        <div class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block top_navbar_menu %}
                                {{ component('menu', {type: 'top_page'}) }}
                            {% endblock %}
                        </div>

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                        {% embed('@SurvosBootstrap/sneat/_footer.html.twig') %}
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                        {% endembed %}
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
", "@SurvosBootstrap/sneat/base.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/sneat/base.html.twig");
    }
}


/* @SurvosBootstrap/sneat/base.html.twig */
class __TwigTemplate_0d3cdd4f9cf951340bcab565bd8ab7a3___1554933075 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'footer_menu' => [$this, 'block_footer_menu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 148
        return "@SurvosBootstrap/sneat/_footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/base.html.twig"));

        $this->parent = $this->loadTemplate("@SurvosBootstrap/sneat/_footer.html.twig", "@SurvosBootstrap/sneat/base.html.twig", 148);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 149
    public function block_footer_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer_menu"));

        // line 150
        echo "                                ";
        // line 151
        echo "                                ";
        echo $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("menu", ["type" => "footer", "options" => []]);
        // line 155
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1684 => 155,  1681 => 151,  1679 => 150,  1669 => 149,  1646 => 148,  1378 => 108,  1121 => 82,  1111 => 81,  1099 => 84,  1097 => 81,  1039 => 25,  1029 => 24,  989 => 19,  729 => 16,  727 => 15,  717 => 14,  677 => 10,  421 => 158,  418 => 148,  408 => 147,  397 => 143,  387 => 142,  374 => 138,  364 => 137,  351 => 132,  341 => 131,  331 => 111,  329 => 108,  326 => 107,  316 => 106,  303 => 99,  293 => 98,  277 => 88,  266 => 19,  256 => 10,  253 => 9,  243 => 8,  228 => 199,  209 => 184,  207 => 183,  190 => 171,  187 => 170,  184 => 169,  182 => 168,  180 => 167,  178 => 166,  170 => 159,  168 => 147,  164 => 145,  162 => 142,  158 => 140,  156 => 137,  151 => 134,  149 => 131,  146 => 130,  144 => 129,  141 => 127,  132 => 125,  128 => 124,  124 => 122,  115 => 119,  110 => 118,  106 => 117,  99 => 112,  97 => 106,  90 => 101,  88 => 98,  83 => 95,  81 => 8,  75 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@SurvosBootstrap/sneat/shell.html.twig\" %}

{% block body_content %}
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

                {% block sidebar_logo %}
                    <div class=\"app-brand demo\">
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link'
                        } %}
                            {% block body %}
                                {# where should translation be? #}
                                {{ 'home'|route_alias }}
                            {% endblock %}
                        {% endcomponent %}
                        {% component link with {
                            path: 'home'|route_alias,
                            class: 'app-brand-link',
                            body: 'Home'
                        } %}
                            {% block body %}
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
                    {{ component('menu', {type: 'sidebar'}) }}
                {% endblock %}
            </aside>

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->
                {% block navbar %}

                    {% embed('@SurvosBootstrap/sneat/_navbar.html.twig') %}
                        {#            {{ include('@SurvosBootstrap/_navbar.html.twig') }} #}
                    {% endembed %}
                {% endblock %}

                <div class=\"content-wrapper\">
                    <!-- Content -->
                    <div class=\"container-xxl flex-grow-1 container-p-y\">

                        {% for type, messages in app.flashes %}
                            <div class=\"alert alert-{{ type }}\">
                                {{ messages|join(',') }}
                            </div>
                        {% endfor %}

                        <div class=\"d-print-none\">
                            {% for flash in app.flashes %}
                                {{ component('alert', {message: flash}) }}
                            {% endfor %}
                        </div>
                        {#                    {% set breadcrumbs = knp_menu_get_breadcrumbs_array(knp_menu_get_current_item(menuItem)) %} #}
                        {#                    {% set breadcrumbs = [] %} #}
                        <h4 class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block breadcrumbs %}
                                {{ component('menu_breadcrumb', {type: 'sidebar'}) }}
                            {% endblock %}
                        </h4>

                        <div class=\"fw-bold py-3 mb-4 d-print-none\">
                            {% block top_navbar_menu %}
                                {{ component('menu', {type: 'top_page'}) }}
                            {% endblock %}
                        </div>

                        {% block body %}
                            Body goes here.  In the sneat pages, it appears to always begin with class=row.
                        {% endblock %}
                    </div>

                    {% block footer %}
                        {% embed('@SurvosBootstrap/sneat/_footer.html.twig') %}
                            {% block footer_menu %}
                                {# dispatch a menu event to populate the footer menu.  Overwrite this block to customize with options or a custom menu event #}
                                {{ component('menu', {
                                    type: 'footer',
                                    options: {
                                    }
                                }) }}
                            {% endblock %}
                        {% endembed %}
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
", "@SurvosBootstrap/sneat/base.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/sneat/base.html.twig");
    }
}
