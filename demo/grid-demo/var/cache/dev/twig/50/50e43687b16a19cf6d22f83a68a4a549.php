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

/* @SurvosBootstrap/sidebar-nav-accordion.html.twig */
class __TwigTemplate_19d12a0d680112c804d6cb8c3b10d38c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sidebar-nav-accordion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sidebar-nav-accordion.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"keywords\" content=\"htmlcss bootstrap aside menu, vertical, sidebar nav menu CSS examples\" />
<meta name=\"description\" content=\"Bootstrap 5 sidebar navigation menu example\" />  

<title>Demo - Bootstrap 5 sidebar vertical menu sample. html code example </title>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\"crossorigin=\"anonymous\"></script>

<!-- ======= Icons used for dropdown (you can use your own) ======== -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">

<style type=\"text/css\">

.sidebar li .submenu{ 
\tlist-style: none; 
\tmargin: 0; 
\tpadding: 0; 
\tpadding-left: 1rem; 
\tpadding-right: 1rem;
}
.sidebar .nav-link {
    font-weight: 500;
    color: var(--bs-dark);
}
.sidebar .nav-link:hover {
    color: var(--bs-primary);
}

</style>


</head>
<body class=\"bg-light\">

<header class=\"section-header py-3\">
<div class=\"container\">
\t<h2>Demo page </h2> 
</div>
</header> <!-- section-header.// -->

<div class=\"container\">

<section class=\"section-content py-3\">
\t<div class=\"row\">
\t\t<aside class=\"col-lg-3\"> 
<!-- ============= COMPONENT ============== -->
<nav class=\"sidebar card py-2 mb-4\">
<ul class=\"nav flex-column\" id=\"nav_accordion\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Link name </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" data-bs-target=\"#menu_item1\" href=\"#\"> Submenu links <i class=\"bi small bi-caret-down-fill\"></i> </a>
\t\t<ul id=\"menu_item1\" class=\"submenu collapse\" data-bs-parent=\"#nav_accordion\">
\t\t\t<li><a class=\"nav-link\" href=\"#\">Submenu item 1 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 2 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 3 </a> </li>
\t\t</ul>

\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" data-bs-target=\"#menu_item2\" href=\"#\"> More menus <i class=\"bi small bi-caret-down-fill\"></i> </a>
\t\t<ul id=\"menu_item2\" class=\"submenu collapse\" data-bs-parent=\"#nav_accordion\">
\t\t\t<li><a class=\"nav-link\" href=\"#\">Submenu item 4 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 5 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 6 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 6 </a></li>
\t\t</ul>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Another page </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Demo link </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Menu item </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Something </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Other link </a>
\t</li>
</ul>
</nav>
<!-- ============= COMPONENT END// ============== -->\t
\t\t</aside>
\t\t<main class=\"col-lg-9\">

<h6>Demo for sidebar nav menu links. <br> Based on Bootstrap 5 CSS framework.  </h6>
<p>For this demo page you should connect to the internet to receive files from CDN  like Bootstrap5 CSS, Bootstrap5 JS</p>

<p class=\"text-muted\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

<a href=\"https://bootstrap-menu.com/detail-sidebar-nav-collapse.html\" class=\"btn btn-success\"> &laquo Back to tutorial or Download code</a>

\t\t</main>
\t</div>
</section>

</div><!-- container //  -->

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@SurvosBootstrap/sidebar-nav-accordion.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"keywords\" content=\"htmlcss bootstrap aside menu, vertical, sidebar nav menu CSS examples\" />
<meta name=\"description\" content=\"Bootstrap 5 sidebar navigation menu example\" />  

<title>Demo - Bootstrap 5 sidebar vertical menu sample. html code example </title>

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\"crossorigin=\"anonymous\"></script>

<!-- ======= Icons used for dropdown (you can use your own) ======== -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css\">

<style type=\"text/css\">

.sidebar li .submenu{ 
\tlist-style: none; 
\tmargin: 0; 
\tpadding: 0; 
\tpadding-left: 1rem; 
\tpadding-right: 1rem;
}
.sidebar .nav-link {
    font-weight: 500;
    color: var(--bs-dark);
}
.sidebar .nav-link:hover {
    color: var(--bs-primary);
}

</style>


</head>
<body class=\"bg-light\">

<header class=\"section-header py-3\">
<div class=\"container\">
\t<h2>Demo page </h2> 
</div>
</header> <!-- section-header.// -->

<div class=\"container\">

<section class=\"section-content py-3\">
\t<div class=\"row\">
\t\t<aside class=\"col-lg-3\"> 
<!-- ============= COMPONENT ============== -->
<nav class=\"sidebar card py-2 mb-4\">
<ul class=\"nav flex-column\" id=\"nav_accordion\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Link name </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" data-bs-target=\"#menu_item1\" href=\"#\"> Submenu links <i class=\"bi small bi-caret-down-fill\"></i> </a>
\t\t<ul id=\"menu_item1\" class=\"submenu collapse\" data-bs-parent=\"#nav_accordion\">
\t\t\t<li><a class=\"nav-link\" href=\"#\">Submenu item 1 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 2 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 3 </a> </li>
\t\t</ul>

\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-bs-toggle=\"collapse\" data-bs-target=\"#menu_item2\" href=\"#\"> More menus <i class=\"bi small bi-caret-down-fill\"></i> </a>
\t\t<ul id=\"menu_item2\" class=\"submenu collapse\" data-bs-parent=\"#nav_accordion\">
\t\t\t<li><a class=\"nav-link\" href=\"#\">Submenu item 4 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 5 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 6 </a></li>
\t\t    <li><a class=\"nav-link\" href=\"#\">Submenu item 6 </a></li>
\t\t</ul>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Another page </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Demo link </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Menu item </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Something </a>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" href=\"#\"> Other link </a>
\t</li>
</ul>
</nav>
<!-- ============= COMPONENT END// ============== -->\t
\t\t</aside>
\t\t<main class=\"col-lg-9\">

<h6>Demo for sidebar nav menu links. <br> Based on Bootstrap 5 CSS framework.  </h6>
<p>For this demo page you should connect to the internet to receive files from CDN  like Bootstrap5 CSS, Bootstrap5 JS</p>

<p class=\"text-muted\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

<a href=\"https://bootstrap-menu.com/detail-sidebar-nav-collapse.html\" class=\"btn btn-success\"> &laquo Back to tutorial or Download code</a>

\t\t</main>
\t</div>
</section>

</div><!-- container //  -->

</body>
</html>", "@SurvosBootstrap/sidebar-nav-accordion.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/sidebar-nav-accordion.html.twig");
    }
}
