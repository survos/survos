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

/* @SurvosBootstrap/bs5/_sidebar.html.twig */
class __TwigTemplate_90d2dd594a73db98d15e73ba0f540440 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/bs5/_sidebar.html.twig"));

        // line 1
        echo "<div class=\"flex-shrink-0 p-3\" style=\"width: 280px;\">
    <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom\">
        <svg class=\"bi pe-none me-2\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"/></svg>
        <span class=\"fs-5 fw-semibold\">Collapsible</span>
    </a>
    <ul class=\"list-unstyled ps-0\">
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#home-collapse\" aria-expanded=\"true\">
                Home
            </button>
            <div class=\"collapse show\" id=\"home-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Overview</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Updates</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Reports</a></li>
                </ul>
            </div>
        </li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard-collapse\" aria-expanded=\"false\">
                Dashboard
            </button>
            <div class=\"collapse\" id=\"dashboard-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Overview</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Weekly</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Monthly</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Annually</a></li>
                </ul>
            </div>
        </li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#orders-collapse\" aria-expanded=\"false\">
                Orders
            </button>
            <div class=\"collapse\" id=\"orders-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Processed</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Shipped</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Returned</a></li>
                </ul>
            </div>
        </li>
        <li class=\"border-top my-3\"></li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#account-collapse\" aria-expanded=\"false\">
                Account
            </button>
            <div class=\"collapse\" id=\"account-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New...</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Profile</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Settings</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Sign out</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/bs5/_sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex-shrink-0 p-3\" style=\"width: 280px;\">
    <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom\">
        <svg class=\"bi pe-none me-2\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"/></svg>
        <span class=\"fs-5 fw-semibold\">Collapsible</span>
    </a>
    <ul class=\"list-unstyled ps-0\">
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#home-collapse\" aria-expanded=\"true\">
                Home
            </button>
            <div class=\"collapse show\" id=\"home-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Overview</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Updates</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Reports</a></li>
                </ul>
            </div>
        </li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard-collapse\" aria-expanded=\"false\">
                Dashboard
            </button>
            <div class=\"collapse\" id=\"dashboard-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Overview</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Weekly</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Monthly</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Annually</a></li>
                </ul>
            </div>
        </li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#orders-collapse\" aria-expanded=\"false\">
                Orders
            </button>
            <div class=\"collapse\" id=\"orders-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Processed</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Shipped</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Returned</a></li>
                </ul>
            </div>
        </li>
        <li class=\"border-top my-3\"></li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#account-collapse\" aria-expanded=\"false\">
                Account
            </button>
            <div class=\"collapse\" id=\"account-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New...</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Profile</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Settings</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Sign out</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
", "@SurvosBootstrap/bs5/_sidebar.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/bs5/_sidebar.html.twig");
    }
}
