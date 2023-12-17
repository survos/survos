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

/* @SurvosBootstrap/base.html.twig */
class __TwigTemplate_a3f2d0e7fe3bcbb4c95ee44d668b81e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_start' => [$this, 'block_html_start'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body_start_tag' => [$this, 'block_body_start_tag'],
            'body_start' => [$this, 'block_body_start'],
            'after_body_start' => [$this, 'block_after_body_start'],
            'navbar' => [$this, 'block_navbar'],
            'sidebar' => [$this, 'block_sidebar'],
            'logo_path' => [$this, 'block_logo_path'],
            'logo_mini' => [$this, 'block_logo_mini'],
            'sidebar_user' => [$this, 'block_sidebar_user'],
            'sidebar_nav' => [$this, 'block_sidebar_nav'],
            'back_link' => [$this, 'block_back_link'],
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_content_before' => [$this, 'block_page_content_before'],
            'page_navigation' => [$this, 'block_page_navigation'],
            'page_content_class' => [$this, 'block_page_content_class'],
            'page_content_start' => [$this, 'block_page_content_start'],
            'page_content' => [$this, 'block_page_content'],
            'page_content_end' => [$this, 'block_page_content_end'],
            'page_content_after' => [$this, 'block_page_content_after'],
            'footer' => [$this, 'block_footer'],
            'control_sidebar' => [$this, 'block_control_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html";
        $this->displayBlock('html_start', $context, $blocks);
        echo ">
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "

</head>
";
        // line 34
        $this->displayBlock('body_start_tag', $context, $blocks);
        // line 37
        $this->displayBlock('after_body_start', $context, $blocks);
        // line 38
        echo "<div class=\"wrapper\">


    ";
        // line 41
        $this->displayBlock('navbar', $context, $blocks);
        // line 135
        echo "
    ";
        // line 136
        $this->displayBlock('sidebar', $context, $blocks);
        // line 181
        echo "
    <div class=\"content-wrapper\">
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-9\">
                        <h1 class=\"m-0 text-dark\">
                            ";
        // line 188
        $this->displayBlock('back_link', $context, $blocks);
        // line 189
        echo "                            ";
        $this->displayBlock('page_title', $context, $blocks);
        // line 190
        echo "                        </h1>
                        ";
        // line 191
        if (        $this->hasBlock("page_subtitle", $context, $blocks)) {
            echo "<small>";
            $this->displayBlock("page_subtitle", $context, $blocks);
            echo "</small>";
        }
        // line 192
        echo "                    </div>
                    <div class=\"col-sm-3\">
                        ";
        // line 194
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 198
        echo "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 203
        $this->displayBlock('page_content_before', $context, $blocks);
        // line 237
        echo "
        <section class=\"";
        // line 238
        $this->displayBlock('page_content_class', $context, $blocks);
        echo "\">
            <div class=\"container-fluid\">
                ";
        // line 240
        $this->displayBlock('page_content_start', $context, $blocks);
        // line 243
        echo "
                ";
        // line 244
        $this->displayBlock('page_content', $context, $blocks);
        // line 247
        echo "
                ";
        // line 248
        $this->displayBlock('page_content_end', $context, $blocks);
        // line 249
        echo "            </div>
        </section>

        ";
        // line 252
        $this->displayBlock('page_content_after', $context, $blocks);
        // line 253
        echo "    </div>

    ";
        // line 255
        $this->displayBlock('footer', $context, $blocks);
        // line 258
        echo "
    ";
        // line 259
        $this->displayBlock('control_sidebar', $context, $blocks);
        // line 267
        echo "        ";
        // line 274
        echo "
</div>


</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_html_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayBlock("page_title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "

";
        // line 18
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_body_start_tag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start_tag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start_tag"));

        // line 35
        echo "<body ";
        $this->displayBlock('body_start', $context, $blocks);
        echo " class=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "skin", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "skin", [], "any", false, false, false, 35), "")) : ("")), "html", null, true);
        echo " \">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_after_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_body_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "after_body_start"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 43
        echo "
        ";
        // line 45
        echo "        ";
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("survos_navbar_menu", [], ["some_option" => "my_value"]);
        // line 46
        echo "        ";
        // line 47
        echo "        ";
        $context["menuHtml"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 47, $this->source); })()), ["template" => "@SurvosBootstrap/knp_top_menu.html.twig", "style" => "navbar"]);
        // line 50
        echo "
        <nav class=\"navbar navbar-expand-lg bg-light\">
            <div class=\"container-fluid\">

                <a class=\"navbar-brand\" href=\"#\">Navbar</a>

                            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">


                    ";
        // line 62
        echo (isset($context["menuHtml"]) || array_key_exists("menuHtml", $context) ? $context["menuHtml"] : (function () { throw new RuntimeError('Variable "menuHtml" does not exist.', 62, $this->source); })());
        echo "


                    <form class=\"d-flex\" role=\"search\">
                        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                    </form>
                </div>
            </div>
        </nav>


";
        // line 84
        echo "
";
        // line 97
        echo "
";
        // line 100
        echo "
";
        // line 104
        echo "

";
        // line 107
        echo "
";
        // line 109
        echo "
";
        // line 122
        echo "
";
        // line 124
        echo "
";
        // line 134
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 136
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 137
        echo "        <aside class=\"main-sidebar sidebar-dark-primary elevation-4 d-print-none\">
            <a href=\"";
        // line 138
        $this->displayBlock('logo_path', $context, $blocks);
        echo "\" class=\"brand-link \">
                ";
        // line 139
        $this->displayBlock('logo_mini', $context, $blocks);
        // line 144
        echo "            </a>

            <div class=\"sidebar\">
                ";
        // line 147
        $this->displayBlock('sidebar_user', $context, $blocks);
        // line 152
        echo "
";
        // line 154
        echo "

                ";
        // line 156
        $this->displayBlock('sidebar_nav', $context, $blocks);
        // line 178
        echo "            </div>
        </aside>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 138
    public function block_logo_path($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_path"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_path"));

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getFilter('route_alias')->getCallable()("home"));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_logo_mini($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_mini"));

        // line 141
        echo "                    <span class=\"brand-text font-weight-light\">";
        echo twig_escape_filter($this->env, ((array_key_exists("logo_mini", $context)) ? (_twig_default_filter((isset($context["logo_mini"]) || array_key_exists("logo_mini", $context) ? $context["logo_mini"] : (function () { throw new RuntimeError('Variable "logo_mini" does not exist.', 141, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.title"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.title"))), "html", null, true);
        echo "</span>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_sidebar_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_user"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_user"));

        // line 148
        echo "                    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 150
            echo "                    ";
        }
        // line 151
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_sidebar_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_nav"));

        // line 157
        echo "                    ";
        $context["menuCode"] = "survos_sidebar_menu";
        // line 158
        echo "                    ";
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get((isset($context["menuCode"]) || array_key_exists("menuCode", $context) ? $context["menuCode"] : (function () { throw new RuntimeError('Variable "menuCode" does not exist.', 158, $this->source); })()), [], ["option" => true]);
        // line 163
        echo "                    ";
        $context["html"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 163, $this->source); })()), ["menu_code" =>         // line 164
(isset($context["menuCode"]) || array_key_exists("menuCode", $context) ? $context["menuCode"] : (function () { throw new RuntimeError('Variable "menuCode" does not exist.', 164, $this->source); })()), "currentClass" => "active show", "ancestorClass" => "ancestor-active current_ancestor", "branch_class" => "sidebar-header", "leaf_class" => "sidebar-item", "allow_safe_labels" => true]);
        // line 172
        echo "                    ";
        if (((array_key_exists("debug", $context)) ? (_twig_default_filter((isset($context["debug"]) || array_key_exists("debug", $context) ? $context["debug"] : (function () { throw new RuntimeError('Variable "debug" does not exist.', 172, $this->source); })()), false)) : (false))) {
            // line 173
            echo "                        \"template\"      : \"@SurvosBootstrap/knp_menu.html.twig\",
                        <pre>";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 174, $this->source); })()), "html");
            echo "</pre>
                    ";
        }
        // line 176
        echo "                    ";
        echo (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 176, $this->source); })());
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 188
    public function block_back_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "back_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "back_link"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 189
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.title"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 194
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 195
        echo "                            breadcrumbs here
                             include '@SurvosBootstrapBundle/Breadcrumb/knp-breadcrumb.html.twig'
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 203
    public function block_page_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_before"));

        // line 204
        echo "            ";
        $this->displayBlock('page_navigation', $context, $blocks);
        // line 236
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 204
    public function block_page_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_navigation"));

        // line 205
        echo "                Page menu..
                ";
        // line 206
        $context["knp_menu_options"] = ["template" => "@SurvosBase/knp_menu_adminkit.html.twig", "currentClass" => "active show", "ancestorClass" => "ancestor-active current_ancestor", "branch_class" => "sidebar-header", "leaf_class" => "sidebar-item", "allow_safe_labels" => true];
        // line 214
        echo "
                ";
        // line 215
        $context["old_knp_menu_options"] = ["xxtemplate" => "@SurvosBase/knp_menu.html.twig", "attributes" => "mt-2 navbar navbar-expand navbar-white navbar-light float-right", "style" => "navbar", "currentClass" => "active", "ancestorClass" => "active", "branch_class" => "nav-link branch ", "firstClass" => "", "lastClass" => "", "leaf_class" => "nav-link", "allow_safe_labels" => true];
        // line 227
        echo "
                ";
        // line 229
        echo "                PAGE MENU HERE
";
        // line 232
        echo "
                ";
        // line 235
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 238
    public function block_page_content_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_class"));

        echo "content";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 240
    public function block_page_content_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_start"));

        // line 241
        echo "                    ";
        echo twig_include($this->env, $context, "@SurvosBootstrap/Partials/_flash_messages.html.twig");
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 244
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 245
        echo "                    ";
        $this->displayBlock("body", $context, $blocks);
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 248
    public function block_page_content_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_end"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 252
    public function block_page_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 255
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 256
        echo "         ";
        $this->loadTemplate("@SurvosBootstrap/Partials/_footer.html.twig", "@SurvosBootstrap/base.html.twig", 256)->display($context);
        // line 257
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 259
    public function block_control_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "control_sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "control_sidebar"));

        // line 264
        echo "
";
        // line 266
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@SurvosBootstrap/base.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  881 => 266,  878 => 264,  868 => 259,  858 => 257,  855 => 256,  845 => 255,  827 => 252,  809 => 248,  796 => 245,  786 => 244,  773 => 241,  763 => 240,  744 => 238,  734 => 235,  731 => 232,  728 => 229,  725 => 227,  723 => 215,  720 => 214,  718 => 206,  715 => 205,  705 => 204,  695 => 236,  692 => 204,  682 => 203,  670 => 195,  660 => 194,  641 => 189,  623 => 188,  610 => 176,  605 => 174,  602 => 173,  599 => 172,  597 => 164,  595 => 163,  592 => 158,  589 => 157,  579 => 156,  569 => 151,  566 => 150,  563 => 148,  553 => 147,  540 => 141,  530 => 139,  511 => 138,  499 => 178,  497 => 156,  493 => 154,  490 => 152,  488 => 147,  483 => 144,  481 => 139,  477 => 138,  474 => 137,  464 => 136,  454 => 134,  451 => 124,  448 => 122,  445 => 109,  442 => 107,  438 => 104,  435 => 100,  432 => 97,  429 => 84,  414 => 62,  400 => 50,  397 => 47,  395 => 46,  392 => 45,  389 => 43,  379 => 41,  361 => 37,  329 => 35,  319 => 34,  306 => 21,  296 => 20,  286 => 18,  280 => 12,  270 => 11,  251 => 9,  238 => 5,  228 => 4,  210 => 1,  193 => 274,  191 => 267,  189 => 259,  186 => 258,  184 => 255,  180 => 253,  178 => 252,  173 => 249,  171 => 248,  168 => 247,  166 => 244,  163 => 243,  161 => 240,  156 => 238,  153 => 237,  151 => 203,  144 => 198,  142 => 194,  138 => 192,  132 => 191,  129 => 190,  126 => 189,  124 => 188,  115 => 181,  113 => 136,  110 => 135,  108 => 41,  103 => 38,  101 => 37,  99 => 34,  94 => 23,  92 => 20,  89 => 19,  87 => 11,  81 => 9,  79 => 4,  74 => 2,  69 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html{% block html_start %}{% endblock %}>
<html lang=\"{{ app.request.locale }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    {% endblock %}
    <title>{% block title %}{{ block('page_title') }}{% endblock %}</title>

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}

{#        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('apple-touch-icon.png') }}\">#}
{#        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon-32x32.png') }}\">#}
{#        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon-16x16.png') }}\">#}
{#        <link rel=\"manifest\" href=\"{{ asset('site.webmanifest') }}\">#}
    {% endblock %}

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}


</head>
{#
Apply one of the following classes for the skin:
skin-blue, skin-black, skin-purple, skin-yellow, skin-red, skin-green

Apply one or more of the following classes for the layout options:
fixed, layout-boxed, layout-top-nav, sidebar-collapse, sidebar-mini

#}
{% block body_start_tag %}
<body {% block body_start %}{% endblock %} class=\"{{ admin_lte_context.skin|default(\"\") }} \">
{% endblock %}
{% block after_body_start %}{% endblock %}
<div class=\"wrapper\">


    {% block navbar %}
{#        {{ include('@SurvosBootstrap/_navbar.html.twig') }}#}

        {#  second arg is the branch of the menu we want #}
        {% set menu = knp_menu_get('survos_navbar_menu', [], {'some_option': 'my_value'}) %}
        {#https://getbootstrap.com/docs/5.2/components/navbar/#}
        {% set menuHtml = knp_menu_render(menu, {
            template: '@SurvosBootstrap/knp_top_menu.html.twig',
            style: 'navbar'}) %}

        <nav class=\"navbar navbar-expand-lg bg-light\">
            <div class=\"container-fluid\">

                <a class=\"navbar-brand\" href=\"#\">Navbar</a>

                            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">


                    {{ menuHtml|raw }}


                    <form class=\"d-flex\" role=\"search\">
                        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                    </form>
                </div>
            </div>
        </nav>


{#        <nav class=\"main-header navbar navbar-expand fixed-top navbar-dark\">#}
{#            <ul class=\"navbar-nav\">#}
{#                {% block navbar_toggle %}#}
{#                    <li class=\"nav-item\">#}
{#                        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\">#}
{#                            <i class=\"fas fa-bars\"></i>#}
{#                            <span class=\"sr-only\">{{ 'Toggle navigation'|trans({}, 'AdminLTEBundle')  }}</span>#}
{#                        </a>#}
{#                    </li>#}
{#                {% endblock %}#}

{#                {% block navbar_links %}#}
{#                    #}{# TODO document me #}
{#                    #}{##}
{#                    <li class=\"nav-item d-none d-sm-inline-block\">#}
{#                        <a href=\"../../index3.html\" class=\"nav-link\">Home</a>#}
{#                    </li>#}
{#                    <li class=\"nav-item d-none d-sm-inline-block\">#}
{#                        <a href=\"#\" class=\"nav-link\">Contact</a>#}
{#                    </li>#}
{#                    #}
{#                {% endblock %}#}
{#            </ul>#}

{#            {% block navbar_search %}#}
{#                {% block sidebar_search %}#}

{#                    {{ 0 and render(controller('KevinPapst\\\\AdminLTEBundle\\\\Controller\\\\SidebarController::searchFormAction')) }}#}
{#                {% endblock %}#}
{#            {% endblock %}#}


{#            <ul class=\"navbar-nav ml-auto\">#}

{#                {% block navbar_start %}{% endblock %}#}

{#                {% block navbar_user %}#}
{#                    {% if admin_context_is_enabled('allow_login') %}#}
{#                    {% if not is_granted('ROLE_USER') %}#}
{#                        <ul class=\"nav\">#}
{#                            <li class=\"nav-item\">#}
{#                                <a href=\"{{ path('app_login'|route_alias) }}\">Login</a>#}
{#                            </li>#}
{#                        </ul>#}
{#                    {% endif %}#}
{#                    {% endif %}#}
{#                    {{ render(controller('KevinPapst\\\\AdminLTEBundle\\\\Controller\\\\NavbarController::userAction')) }}#}
{#                {% endblock %}#}

{#                {% block navbar_end %}{% endblock %}#}

{#                {% block navbar_control_sidebar_toggle %}#}
{#                    {% if admin_lte_context.control_sidebar is defined and admin_lte_context.control_sidebar is not empty %}#}
{#                        <li class=\"nav-item\">#}
{#                            <a href=\"#\" class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\"><i class=\"fas fa-th-large\"></i></a>#}
{#                        </li>#}
{#                    {% endif %}#}
{#                {% endblock %}#}
{#            </ul>#}
{#        </nav>#}
    {% endblock %}

    {% block sidebar %}
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4 d-print-none\">
            <a href=\"{% block logo_path %}{{ path('home'|route_alias) }}{% endblock %}\" class=\"brand-link \">
                {% block logo_mini %}
{#                    <img src=\"{{ asset('favicon-32x32.png')  }}\" alt=\"Logo\" class=\"brand-image elevation-3\" >#}
                    <span class=\"brand-text font-weight-light\">{{ logo_mini|default('home.title'|trans)}}</span>
                {% endblock %}
{#                {% block logo_large %} {{ logo_large|default('home.title'|trans)}} {% endblock %}#}
            </a>

            <div class=\"sidebar\">
                {% block sidebar_user %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
{#                         render(controller('KevinPapst\\\\AdminLTEBundle\\\\Controller\\\\SidebarController::userPanelAction'))#}
                    {% endif %}
                {% endblock %}

{#                {% block sidebar_user '@todo: user info' %}#}


                {% block sidebar_nav %}
                    {% set menuCode = 'survos_sidebar_menu' %}
                    {% set menu = knp_menu_get(menuCode, {
                }, {
                        'option': true
                    }
                    ) %}
                    {% set html = knp_menu_render(menu, {
                        'menu_code'     : menuCode,
                        \"currentClass\"  : \"active show\",
                        \"ancestorClass\" : \"ancestor-active current_ancestor\",
                        \"branch_class\"  : \"sidebar-header\",
                        'leaf_class'    : 'sidebar-item',
                        \"allow_safe_labels\": true,
                    })
                    %}
                    {% if debug|default(false) %}
                        \"template\"      : \"@SurvosBootstrap/knp_menu.html.twig\",
                        <pre>{{ html|escape('html') }}</pre>
                    {% endif %}
                    {{ html|raw }}
                {% endblock %}
            </div>
        </aside>
    {% endblock %}

    <div class=\"content-wrapper\">
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-9\">
                        <h1 class=\"m-0 text-dark\">
                            {% block back_link %}{% endblock %}
                            {% block page_title 'home.title'|trans %}
                        </h1>
                        {% if block('page_subtitle') is defined %}<small>{{ block('page_subtitle') }}</small>{% endif %}
                    </div>
                    <div class=\"col-sm-3\">
                        {% block breadcrumb %}
                            breadcrumbs here
                             include '@SurvosBootstrapBundle/Breadcrumb/knp-breadcrumb.html.twig'
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>

        {% block page_content_before %}
            {% block page_navigation %}
                Page menu..
                {% set knp_menu_options =  {
                    \"template\"      : \"@SurvosBase/knp_menu_adminkit.html.twig\",
                    \"currentClass\"  : \"active show\",
                    \"ancestorClass\" : \"ancestor-active current_ancestor\",
                    \"branch_class\"  : \"sidebar-header\",
                    'leaf_class'    : 'sidebar-item',
                    \"allow_safe_labels\": true,
                } %}

                {% set old_knp_menu_options = {
                    \"xxtemplate\"      : \"@SurvosBase/knp_menu.html.twig\",
                    \"attributes\"    : \"mt-2 navbar navbar-expand navbar-white navbar-light float-right\",
                    \"style\"         : \"navbar\",
                    \"currentClass\"  : \"active\",
                    \"ancestorClass\" : \"active\",
                    \"branch_class\"  : \"nav-link branch \",
                    'firstClass'    : '',
                    'lastClass'     : '',
                    'leaf_class'    : 'nav-link',
                    \"allow_safe_labels\": true}
                %}

                {# second arg is the path to the menu, if we just want a subset. #}
                PAGE MENU HERE
{#                {% set page_menu = knp_menu_get('survos_page_menu', [], {title: page_title} ) %}#}
{#                {{  knp_menu_render(page_menu, old_knp_menu_options) }}#}

                {# emit page events populated by the top menu subscriber #}
{#                {% include '@SurvosBootstrap/render_page_menu.html.twig' with {page_title: block('page_title')} %}#}
            {% endblock %}
        {% endblock %}

        <section class=\"{% block page_content_class %}content{% endblock %}\">
            <div class=\"container-fluid\">
                {% block page_content_start %}
                    {{ include('@SurvosBootstrap/Partials/_flash_messages.html.twig') }}
                {% endblock %}

                {% block page_content %}
                    {{ block('body') }}
                {% endblock %}

                {% block page_content_end %}{% endblock %}
            </div>
        </section>

        {% block page_content_after %}{% endblock %}
    </div>

    {% block footer %}
         {% include '@SurvosBootstrap/Partials/_footer.html.twig'  %}
    {% endblock %}

    {% block control_sidebar %}
{#        <h1>Control_sidebar {{ _self }}</h1>#}
{#        {% if admin_lte_context.control_sidebar %}#}
{#             include '@SurvosBootstrap/Partials/_control-sidebar.html.twig'#}
{#        {% endif %}#}

{#         hinclude '@SurvosBootstrapBundle/Partials/_footer.html.twig'#}
    {% endblock %}
        {# @todo: get this working!  It's pretty cool
    {% block control_sidebar %}
        {% if admin_lte_context.control_sidebar %}
            {% include '@SurvosBootstrapBundle/Partials/_control-sidebar.html.twig' %}
        {% endif %}
    {% endblock %}
        #}

</div>


</body>
</html>

", "@SurvosBootstrap/base.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/base.html.twig");
    }
}
