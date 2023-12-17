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

/* @SurvosBootstrap/macros/widgets.html.twig */
class __TwigTemplate_279aa9f719897fb386b40478c250cc04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/widgets.html.twig"));

        // line 1
        echo "
";
        // line 5
        echo "
";
        // line 14
        echo "
";
        // line 23
        echo "
";
        // line 27
        echo "
";
        // line 32
        echo "
";
        // line 41
        echo "
";
        // line 50
        echo "
";
        // line 59
        echo "
";
        // line 67
        echo "
";
        // line 72
        echo "
";
        // line 77
        echo "
";
        // line 85
        echo "
";
        // line 92
        echo "
";
        // line 110
        echo "
";
        // line 129
        echo "
";
        // line 144
        echo "
";
        // line 159
        echo "
";
        // line 168
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function macro_page_header($__title__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page_header"));

            // line 3
            echo "    <h2 class=\"page-header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })())), "html", null, true);
            echo "</h2>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 6
    public function macro_label_visible($__visible__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "visible" => $__visible__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_visible"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_visible"));

            // line 7
            echo "    ";
            $macros["macro"] = $this;
            // line 8
            echo "    ";
            if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () { throw new RuntimeError('Variable "visible" does not exist.', 8, $this->source); })())) {
                // line 9
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", ["badge.visible", "success"], 9, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 11
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", ["badge.invisible", "warning"], 11, $context, $this->getSourceContext());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_label_role($__role__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "role" => $__role__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_role"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_role"));

            // line 16
            echo "    ";
            $macros["macro"] = $this;
            // line 17
            echo "    ";
            if (((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 17, $this->source); })()) == "ROLE_SUPER_ADMIN")) {
                // line 18
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 18, $this->source); })()), "danger"], 18, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 20
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [(isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 20, $this->source); })()), "primary"], 20, $context, $this->getSourceContext());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_username($__user__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "username"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "username"));

            // line 25
            echo "    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "alias", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "alias", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25))) : (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25))), "html", null, true);
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_label_user($__user__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_user"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_user"));

            // line 29
            echo "    ";
            $macros["macro"] = $this;
            // line 30
            echo "    ";
            echo twig_call_macro($macros["macro"], "macro_label", [twig_call_macro($macros["macro"], "macro_username", [(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })())], 30, $context, $this->getSourceContext()), "primary"], 30, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
    public function macro_label_activity($__activity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "activity" => $__activity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_activity"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_activity"));

            // line 34
            echo "    ";
            $macros["macro"] = $this;
            // line 35
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 35, $this->source); })()), "visible", [], "any", false, false, false, 35) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 35, $this->source); })()), "project", [], "any", false, false, false, 35), "visible", [], "any", false, false, false, 35)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 35, $this->source); })()), "project", [], "any", false, false, false, 35), "customer", [], "any", false, false, false, 35), "visible", [], "any", false, false, false, 35))) {
                // line 36
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "primary", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 36, $this->source); })()), "project", [], "any", false, false, false, 36), "customer", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 36, $this->source); })()), "project", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36))], 36, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 38
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "warning", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 38, $this->source); })()), "project", [], "any", false, false, false, 38), "customer", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 38, $this->source); })()), "project", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38))], 38, $context, $this->getSourceContext());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_label_project($__project__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "project" => $__project__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_project"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_project"));

            // line 43
            echo "    ";
            $macros["macro"] = $this;
            // line 44
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 44, $this->source); })()), "visible", [], "any", false, false, false, 44) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 44, $this->source); })()), "customer", [], "any", false, false, false, 44), "visible", [], "any", false, false, false, 44))) {
                // line 45
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "primary", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 45, $this->source); })()), "customer", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45)], 45, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 47
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "warning", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 47, $this->source); })()), "customer", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 51
    public function macro_label_customer($__customer__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "customer" => $__customer__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_customer"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_customer"));

            // line 52
            echo "    ";
            $macros["macro"] = $this;
            // line 53
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 53, $this->source); })()), "visible", [], "any", false, false, false, 53)) {
                // line 54
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "primary"], 54, $context, $this->getSourceContext());
                echo "
    ";
            } else {
                // line 56
                echo "        ";
                echo twig_call_macro($macros["macro"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "warning"], 56, $context, $this->getSourceContext());
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 60
    public function macro_badge_counter($__count__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "count" => $__count__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_counter"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge_counter"));

            // line 61
            echo "    ";
            if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\"><span class=\"badge bg-blue\">";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "</span></a>
    ";
            } else {
                // line 64
                echo "        <span class=\"badge bg-blue\">";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 64, $this->source); })()), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 68
    public function macro_label($__title__ = null, $__type__ = null, $__tooltip__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "tooltip" => $__tooltip__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label"));

            // line 69
            echo "    ";
            // line 70
            echo "    <span ";
            if ((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 70, $this->source); })())) {
                echo "title=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 70, $this->source); })()), "html", null, true);
                echo "\" ";
            }
            echo "class=\"label label-";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 70, $this->source); })()), "success")) : ("success")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 70, $this->source); })())), "html", null, true);
            echo "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 73
    public function macro_badge($__title__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            // line 74
            echo "    ";
            // line 75
            echo "    <span class=\"badge bg-";
            echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 75, $this->source); })()), "red")) : ("red")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 75, $this->source); })())), "html", null, true);
            echo "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 78
    public function macro_alert($__type__ = null, $__description__ = null, $__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "description" => $__description__,
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            // line 79
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 79, $this->source); })()), "danger")) : ("danger")), "html", null, true);
            echo " alert-dismissible\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 81
            if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 81, $this->source); })())) {
                echo "<h4><i class=\"icon fa fa-";
                echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 81, $this->source); })()), "ban")) : ("ban")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 81, $this->source); })())), "html", null, true);
                echo "</h4>";
            }
            // line 82
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 82, $this->source); })())), "html", null, true);
            echo "
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 86
    public function macro_callout($__type__ = null, $__description__ = null, $__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "description" => $__description__,
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "callout"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "callout"));

            // line 87
            echo "    <div class=\"callout callout-";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 87, $this->source); })()), "danger")) : ("danger")), "html", null, true);
            echo " lead\">
        ";
            // line 88
            if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 88, $this->source); })())) {
                echo "<h4>";
                if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 88, $this->source); })())) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 88, $this->source); })()), "html", null, true);
                    echo "\">";
                }
                echo "</i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 88, $this->source); })())), "html", null, true);
                echo "</h4>";
            }
            // line 89
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 89, $this->source); })())), "html", null, true);
            echo "</p>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 93
    public function macro_info_box_counter($__title__ = null, $__amount__ = null, $__icon__ = null, $__color__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "amount" => $__amount__,
            "icon" => $__icon__,
            "color" => $__color__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info_box_counter"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info_box_counter"));

            // line 94
            echo "<div class=\"info-box\">
    <span class=\"info-box-icon bg-";
            // line 95
            echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 95, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 95, $this->source); })()), "box_color", [], "any", false, false, false, 95))) : (twig_get_attribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 95, $this->source); })()), "box_color", [], "any", false, false, false, 95))), "html", null, true);
            echo "\"><i class=\"fa fa-";
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 95, $this->source); })()), "flag-o")) : ("flag-o")), "html", null, true);
            echo "\"></i></span>

    <div class=\"info-box-content\">
        ";
            // line 99
            echo "        ";
            if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 99, $this->source); })())) {
                // line 100
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 100, $this->source); })()), "html", null, true);
                echo "\" class=\"small-box-footer\">
        ";
            }
            // line 102
            echo "        <span class=\"info-box-text\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 102, $this->source); })())), "html", null, true);
            echo "</span>
        <span class=\"info-box-number\">";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "</span>
        ";
            // line 104
            if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 104, $this->source); })())) {
                // line 105
                echo "            </a>
        ";
            }
            // line 107
            echo "    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 111
    public function macro_info_box_progress($__title__ = null, $__description__ = null, $__amount__ = null, $__percentage__ = null, $__icon__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "description" => $__description__,
            "amount" => $__amount__,
            "percentage" => $__percentage__,
            "icon" => $__icon__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info_box_progress"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info_box_progress"));

            // line 112
            echo "    <div class=\"info-box bg-";
            echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 112, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 112, $this->source); })()), "box_color", [], "any", false, false, false, 112))) : (twig_get_attribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 112, $this->source); })()), "box_color", [], "any", false, false, false, 112))), "html", null, true);
            echo "\">
        <span class=\"info-box-icon\"><i class=\"fa fa-";
            // line 113
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 113, $this->source); })()), "thumbs-o-up")) : ("thumbs-o-up")), "html", null, true);
            echo "\"></i></span>

        <div class=\"info-box-content\">
            <span class=\"info-box-text\">";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 116, $this->source); })())), "html", null, true);
            echo "</span>
            <span class=\"info-box-number\">";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 117, $this->source); })()), "html", null, true);
            echo "</span>

            <div class=\"progress\">
                <div class=\"progress-bar\" style=\"width: ";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "%\"></div>
            </div>
            <span class=\"progress-description\">
                    ";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "
            </span>
        </div>
        <!-- /.info-box-content -->
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 130
    public function macro_info_box_more($__title__ = null, $__amount__ = null, $__unit__ = null, $__url__ = null, $__icon__ = null, $__color__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "amount" => $__amount__,
            "unit" => $__unit__,
            "url" => $__url__,
            "icon" => $__icon__,
            "color" => $__color__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info_box_more"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "info_box_more"));

            // line 131
            echo "    <div class=\"small-box bg-";
            echo twig_escape_filter($this->env, ((array_key_exists("color", $context)) ? (_twig_default_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 131, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 131, $this->source); })()), "box_color", [], "any", false, false, false, 131))) : (twig_get_attribute($this->env, $this->source, (isset($context["kimai_context"]) || array_key_exists("kimai_context", $context) ? $context["kimai_context"] : (function () { throw new RuntimeError('Variable "kimai_context" does not exist.', 131, $this->source); })()), "box_color", [], "any", false, false, false, 131))), "html", null, true);
            echo "\">
        <div class=\"inner\">
            <h3>";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "<sup style=\"font-size: 20px\">";
            echo twig_escape_filter($this->env, ((array_key_exists("unit", $context)) ? (_twig_default_filter((isset($context["unit"]) || array_key_exists("unit", $context) ? $context["unit"] : (function () { throw new RuntimeError('Variable "unit" does not exist.', 133, $this->source); })()), "")) : ("")), "html", null, true);
            echo "</sup></h3>
            <p>";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 134, $this->source); })())), "html", null, true);
            echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa fa-";
            // line 137
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 137, $this->source); })()), "bar-chart")) : ("bar-chart")), "html", null, true);
            echo "\"></i>
        </div>
        <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 139, $this->source); })()), "html", null, true);
            echo "\" class=\"small-box-footer\">
            ";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more.info.link"), "html", null, true);
            echo " <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 145
    public function macro_button_group_dropdown($__title__ = null, $__actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_group_dropdown"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_group_dropdown"));

            // line 146
            echo "    <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-default\">";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 147, $this->source); })())), "html", null, true);
            echo "</button>
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.toggle_dropdown"), "html", null, true);
            echo "</span>
        </button>
        <ul class=\"dropdown-menu\" role=\"menu\">
            ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 153, $this->source); })()));
            foreach ($context['_seq'] as $context["url"] => $context["entry"]) {
                // line 154
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["entry"]), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['url'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "        </ul>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 160
    public function macro_button_group($__actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_group"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_group"));

            // line 161
            echo "    ";
            $macros["macro"] = $this;
            // line 162
            echo "    <div class=\"btn-group\">
        ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["icon"] => $context["url"]) {
                // line 164
                echo "            ";
                echo twig_call_macro($macros["macro"], "macro_button_action", [$context["icon"], $context["url"]], 164, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['icon'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 169
    public function macro_button_action($__icon__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_action"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button_action"));

            // line 170
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 170, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-";
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 170, $this->source); })()), "html", null, true);
            echo "\">
        <i class=\"fa fa-";
            // line 171
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 171, $this->source); })()), "html", null, true);
            echo "\"></i>
    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/macros/widgets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1091 => 171,  1084 => 170,  1064 => 169,  1048 => 166,  1039 => 164,  1035 => 163,  1032 => 162,  1029 => 161,  1010 => 160,  993 => 156,  982 => 154,  978 => 153,  972 => 150,  966 => 147,  963 => 146,  943 => 145,  924 => 140,  920 => 139,  915 => 137,  909 => 134,  903 => 133,  897 => 131,  873 => 130,  852 => 123,  846 => 120,  840 => 117,  836 => 116,  830 => 113,  825 => 112,  801 => 111,  784 => 107,  780 => 105,  778 => 104,  774 => 103,  769 => 102,  763 => 100,  760 => 99,  752 => 95,  749 => 94,  726 => 93,  707 => 89,  695 => 88,  690 => 87,  668 => 86,  649 => 82,  641 => 81,  635 => 79,  613 => 78,  593 => 75,  591 => 74,  571 => 73,  545 => 70,  543 => 69,  522 => 68,  503 => 64,  495 => 62,  492 => 61,  472 => 60,  453 => 56,  447 => 54,  444 => 53,  441 => 52,  422 => 51,  403 => 47,  397 => 45,  394 => 44,  391 => 43,  372 => 42,  353 => 38,  347 => 36,  344 => 35,  341 => 34,  322 => 33,  304 => 30,  301 => 29,  282 => 28,  264 => 25,  245 => 24,  226 => 20,  220 => 18,  217 => 17,  214 => 16,  195 => 15,  176 => 11,  170 => 9,  167 => 8,  164 => 7,  145 => 6,  127 => 3,  108 => 2,  97 => 168,  94 => 159,  91 => 144,  88 => 129,  85 => 110,  82 => 92,  79 => 85,  76 => 77,  73 => 72,  70 => 67,  67 => 59,  64 => 50,  61 => 41,  58 => 32,  55 => 27,  52 => 23,  49 => 14,  46 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro page_header(title) %}
    <h2 class=\"page-header\">{{ title|trans }}</h2>
{% endmacro %}

{% macro label_visible(visible) %}
    {% import _self as macro %}
    {% if visible %}
        {{ macro.label('badge.visible', 'success') }}
    {% else %}
        {{ macro.label('badge.invisible', 'warning') }}
    {% endif %}
{% endmacro %}

{% macro label_role(role) %}
    {% import _self as macro %}
    {% if role == 'ROLE_SUPER_ADMIN' %}
        {{ macro.label(role, 'danger') }}
    {% else %}
        {{ macro.label(role, 'primary') }}
    {% endif %}
{% endmacro %}

{% macro username(user) %}
    {{ user.alias|default(user.username) }}
{% endmacro %}

{% macro label_user(user) %}
    {% import _self as macro %}
    {{ macro.label(macro.username(user), 'primary') }}
{% endmacro %}

{% macro label_activity(activity) %}
    {% import _self as macro %}
    {% if activity.visible and activity.project.visible and activity.project.customer.visible %}
        {{ macro.label(activity.name, 'primary', activity.project.customer.name ~ ': ' ~ activity.project.name) }}
    {% else %}
        {{ macro.label(activity.name, 'warning', activity.project.customer.name ~ ': ' ~ activity.project.name) }}
    {% endif %}
{% endmacro %}

{% macro label_project(project) %}
    {% import _self as macro %}
    {% if project.visible and project.customer.visible %}
        {{ macro.label(project.name, 'primary', project.customer.name) }}
    {% else %}
        {{ macro.label(project.name, 'warning', project.customer.name) }}
    {% endif %}
{% endmacro %}

{% macro label_customer(customer) %}
    {% import _self as macro %}
    {% if customer.visible %}
        {{ macro.label(customer.name, 'primary') }}
    {% else %}
        {{ macro.label(customer.name, 'warning') }}
    {% endif %}
{% endmacro %}

{% macro badge_counter(count, url) %}
    {% if url %}
        <a href=\"{{ url }}\"><span class=\"badge bg-blue\">{{ count }}</span></a>
    {% else %}
        <span class=\"badge bg-blue\">{{ count }}</span>
    {% endif %}
{% endmacro %}

{% macro label(title, type, tooltip) %}
    {# success, warning, danger, primary #}
    <span {%  if tooltip %}title=\"{{ tooltip }}\" {% endif %}class=\"label label-{{ type|default('success') }}\">{{ title|trans }}</span>
{% endmacro %}

{% macro badge(title, color) %}
    {# black, green, blue, yellow #}
    <span class=\"badge bg-{{ color|default('red') }}\">{{ title|trans }}</span>
{% endmacro %}

{% macro alert(type, description, title, icon) %}
    <div class=\"alert alert-{{ type|default('danger') }} alert-dismissible\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {% if title %}<h4><i class=\"icon fa fa-{{ icon|default('ban') }}\"></i> {{ title|trans }}</h4>{% endif %}
        {{ description|trans }}
    </div>
{% endmacro %}

{% macro callout(type, description, title, icon) %}
    <div class=\"callout callout-{{ type|default('danger') }} lead\">
        {% if title %}<h4>{% if icon %}<i class=\"fa fa-{{ icon }}\">{% endif %}</i> {{ title|trans }}</h4>{% endif %}
        <p>{{ description|trans }}</p>
    </div>
{% endmacro %}

{% macro info_box_counter(title, amount, icon, color, url) %}
<div class=\"info-box\">
    <span class=\"info-box-icon bg-{{ color|default(kimai_context.box_color) }}\"><i class=\"fa fa-{{ icon|default('flag-o') }}\"></i></span>

    <div class=\"info-box-content\">
        {# this is a ugly hack, make me look nicely (dashboard widget with link) #}
        {% if url %}
            <a href=\"{{ url }}\" class=\"small-box-footer\">
        {% endif %}
        <span class=\"info-box-text\">{{ title|trans }}</span>
        <span class=\"info-box-number\">{{ amount }}</span>
        {% if url %}
            </a>
        {% endif %}
    </div>
</div>
{% endmacro %}

{% macro info_box_progress(title, description, amount, percentage, icon, color) %}
    <div class=\"info-box bg-{{ color|default(kimai_context.box_color) }}\">
        <span class=\"info-box-icon\"><i class=\"fa fa-{{ icon|default('thumbs-o-up') }}\"></i></span>

        <div class=\"info-box-content\">
            <span class=\"info-box-text\">{{ title|trans }}</span>
            <span class=\"info-box-number\">{{ amount }}</span>

            <div class=\"progress\">
                <div class=\"progress-bar\" style=\"width: {{ percentage }}%\"></div>
            </div>
            <span class=\"progress-description\">
                    {{ description }}
            </span>
        </div>
        <!-- /.info-box-content -->
    </div>
{% endmacro %}

{% macro info_box_more(title, amount, unit, url, icon, color) %}
    <div class=\"small-box bg-{{ color|default(kimai_context.box_color) }}\">
        <div class=\"inner\">
            <h3>{{ amount }}<sup style=\"font-size: 20px\">{{ unit|default('') }}</sup></h3>
            <p>{{ title|trans }}</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa fa-{{ icon|default('bar-chart') }}\"></i>
        </div>
        <a href=\"{{ url }}\" class=\"small-box-footer\">
            {{ 'more.info.link'|trans }} <i class=\"fa fa-arrow-circle-right\"></i>
        </a>
    </div>
{% endmacro %}

{% macro button_group_dropdown(title, actions) %}
    <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-default\">{{ title|trans }}</button>
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">{{ 'label.toggle_dropdown'|trans }}</span>
        </button>
        <ul class=\"dropdown-menu\" role=\"menu\">
            {% for url, entry in actions %}
                <li><a href=\"{{ url }}\">{{ entry|trans }}</a></li>
            {% endfor %}
        </ul>
    </div>
{% endmacro %}

{% macro button_group(actions) %}
    {% import _self as macro %}
    <div class=\"btn-group\">
        {% for icon, url in actions %}
            {{ macro.button_action(icon, url) }}
        {% endfor %}
    </div>
{% endmacro %}

{% macro button_action(icon, url) %}
    <a href=\"{{ url }}\" class=\"btn btn-default btn-{{ icon }}\">
        <i class=\"fa fa-{{ icon }}\"></i>
    </a>
{% endmacro %}
", "@SurvosBootstrap/macros/widgets.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/macros/widgets.html.twig");
    }
}
