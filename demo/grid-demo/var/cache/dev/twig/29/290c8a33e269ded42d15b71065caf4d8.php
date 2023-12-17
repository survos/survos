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

/* @SurvosBootstrap/sneat/knp_menu.html.twig */
class __TwigTemplate_27307ecbb03c598049c489699961865d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'linkElement' => [$this, 'block_linkElement'],
            'icon' => [$this, 'block_icon'],
            'item' => [$this, 'block_item'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
            'badge' => [$this, 'block_badge'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@KnpMenu/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/knp_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/sneat/knp_menu.html.twig"));

        // line 2
        $context["debug"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "debug", [], "array", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "debug", [], "array", false, false, false, 2), false)) : (false));
        // line 1
        $this->parent = $this->loadTemplate("@KnpMenu/menu.html.twig", "@SurvosBootstrap/sneat/knp_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    <!-- ";
        echo twig_escape_filter($this->env, $this->getTemplateName(), "html", null, true);
        echo " -->
    ";
        // line 5
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 5);
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 19
        echo "    ";
        $context["depth"] = ((array_key_exists("depth", $context)) ? (((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 19, $this->source); })()) + 1)) : (0));
        // line 20
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "hasChildren", [], "any", false, false, false, 20) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "depth", [], "any", false, false, false, 20) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "displayChildren", [], "any", false, false, false, 20))) {
            // line 21
            echo "        ";
            $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/sneat/knp_menu.html.twig", 21)->unwrap();
            // line 22
            echo "
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 23, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })())], "method", false, false, false, 23)) {
                // line 24
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 24, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 24), "")) : ("")))]);
            }
            // line 26
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "isRoot", [], "any", false, false, false, 26)) {
                // line 27
                $context["listAttributes"] = ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "isRoot", [], "any", false, false, false, 27)) ? (twig_get_attribute($this->env, $this->source,                 // line 28
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 28, $this->source); })()), "rootAttributes", [], "array", false, false, false, 28)) : (twig_trim_filter(twig_array_merge(                // line 29
(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 29, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 29), "")) : ("")) . " ")]))));
            }
            // line 32
            echo "        ";
            if (((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 32, $this->source); })()) > 0)) {
                // line 33
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 33, $this->source); })()), ["class" => " menu-sub"]);
                // line 34
                echo "        ";
            }
            // line 35
            echo "        <ul";
            echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
            echo ">
            ";
            // line 36
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
        ";
            // line 38
            $context["depth"] = ((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new RuntimeError('Variable "depth" does not exist.', 38, $this->source); })()) - 1);
            // line 39
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 43
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/sneat/knp_menu.html.twig", 43)->unwrap();
        // line 44
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "attribute", [0 => "class"], "method", false, false, false, 44))) ? ([0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "attribute", [0 => "class"], "method", false, false, false, 44), 1 => " menu-link"]) : ([0 => " menu-link"]));
        // line 45
        echo "    <!-- linkElement -->";
        // line 47
        $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "linkAttributes", [], "any", false, false, false, 47);
        // line 48
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 48, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })())], "method", false, false, false, 48)) {
            // line 49
            $context["classes"] = twig_array_merge(((array_key_exists("classes", $context)) ? (_twig_default_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 49, $this->source); })()), [])) : ([])), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 49, $this->source); })()), "currentClass", [], "any", false, false, false, 49)]);
            // line 50
            echo "        ";
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 50, $this->source); })()), ["class" => ((twig_join_filter(((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 50), [])) : ([])), " ") . " ") . twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 50, $this->source); })()), "currentClass", [], "any", false, false, false, 50))]);
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    ";
        // line 54
        echo "    ";
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 54, $this->source); })()), ["class" => ((twig_join_filter(((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 54), [])) : ([])), " ") . " ") . ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link_class", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "link_class", [], "any", false, false, false, 54), "")) : ("")))]);
        // line 55
        echo "
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "uri", [], "any", false, false, false, 56), "html", null, true);
        echo "\" ";
        echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 56, $this->source); })())], 56, $context, $this->getSourceContext());
        echo ">
        ";
        // line 57
        $this->displayBlock("icon", $context, $blocks);
        echo "
";
        // line 62
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        // line 67
        echo "<!-- icon -->
<i class=\"menu-icon ";
        // line 68
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "attribute", [0 => "data-icon"], "method", false, false, false, 68))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "attribute", [0 => "data-icon"], "method", false, false, false, 68), "html", null, true))) : (print ("fas fa-circle")));
        echo "\"></i>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 72
        $context["is_collapsable"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 72, $this->source); })()), "hasChildren", [], "any", false, false, false, 72);
        echo " ";
        // line 73
        echo "
    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), "displayed", [], "any", false, false, false, 74)) {
            // line 75
            echo "        ";
            // line 76
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 76, $this->source); })()), "attribute", [0 => "class"], "method", false, false, false, 76))) ? ([0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 76, $this->source); })()), "attribute", [0 => "class"], "method", false, false, false, 76)]) : ([]));
            // line 77
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 77, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })())], "method", false, false, false, 77)) {
                // line 78
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 78, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 78, $this->source); })()), "currentClass", [], "any", false, false, false, 78)]);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 79
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 79, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 79, $this->source); })()), "matchingDepth", [], "any", false, false, false, 79)], "method", false, false, false, 79)) {
                // line 80
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 80, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 80, $this->source); })()), "ancestorClass", [], "any", false, false, false, 80)]);
            }
            // line 82
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "actsLikeFirst", [], "any", false, false, false, 82)) {
                // line 83
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 83, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 83, $this->source); })()), "firstClass", [], "any", false, false, false, 83)]);
            }
            // line 85
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "actsLikeLast", [], "any", false, false, false, 85)) {
                // line 86
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 86, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 86, $this->source); })()), "lastClass", [], "any", false, false, false, 86)]);
            }
            // line 88
            echo "
        ";
            // line 90
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 90, $this->source); })()), "hasChildren", [], "any", false, false, false, 90) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 90, $this->source); })()), "depth", [], "any", false, false, false, 90) === 0))) {
                // line 91
                echo "            ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 91, $this->source); })()), "branch_class", [], "any", false, false, false, 91)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "displayChildren", [], "any", false, false, false, 91))) {
                    // line 92
                    echo "                <!-- branch, has leaves (";
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 92, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 92, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 92, $this->source); })()), "matchingDepth", [], "any", false, false, false, 92)], "method", false, false, false, 92)) ? ("open") : ("closed"));
                    echo ") -->
                ";
                    // line 93
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 93, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 93, $this->source); })()), "branch_class", [], "any", false, false, false, 93)]);
                    // line 94
                    echo "            ";
                }
                // line 95
                echo "        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 95, $this->source); })()), "leaf_class", [], "any", false, false, false, 95))) {
                // line 96
                echo "            <!-- has leaf_class -->";
                // line 97
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 97, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 97, $this->source); })()), "leaf_class", [], "any", false, false, false, 97)]);
            }
            // line 100
            $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 100, $this->source); })()), "attributes", [], "any", false, false, false, 100);
            // line 101
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 101, $this->source); })()))) {
                // line 102
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 102, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 102, $this->source); })()), " ")]);
            }
            // line 104
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 104, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 104, $this->source); })()), "matchingDepth", [], "any", false, false, false, 104)], "method", false, false, false, 104)) {
                // line 105
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 105, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 105, $this->source); })()), " menu.item.open open active ")]);
                // line 106
                echo "            ";
            }
            // line 108
            echo "        ";
            // line 109
            echo "        ";
            $macros["knp_menu"] = $this;
            // line 110
            echo "        <li";
            echo twig_call_macro($macros["knp_menu"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 110, $this->source); })())], 110, $context, $this->getSourceContext());
            echo " >
            ";
            // line 112
            echo "            ";
            $context["ulId"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 112, $this->source); })()), "name", [], "any", false, false, false, 112);
            // line 113
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 113, $this->source); })()), "uri", [], "any", false, false, false, 113)) && ( !twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 113, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 113, $this->source); })())], "method", false, false, false, 113) || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 113, $this->source); })()), "currentAsLink", [], "any", false, false, false, 113)))) {
                // line 114
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 116
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 116, $this->source); })()), "hasChildren", [], "any", false, false, false, 116)) {
                    // line 117
                    echo "                    ";
                    // line 118
                    echo "                    ";
                    // line 119
                    echo "                    ";
                    // line 120
                    echo "                    ";
                    // line 121
                    echo "
                    ";
                    // line 123
                    echo "                    <a
";
                    // line 126
                    echo "                       aria-expanded=\"false\"
                       class=\"menu-link menu-toggle ";
                    // line 127
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 127, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 127, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 127, $this->source); })()), "matchingDepth", [], "any", false, false, false, 127)], "method", false, false, false, 127)) ? (" active") : (""));
                    echo "\">
                        ";
                    // line 128
                    $this->displayBlock("icon", $context, $blocks);
                    echo "
                        ";
                    // line 129
                    $this->displayBlock("spanElement", $context, $blocks);
                    echo "
                        ";
                    // line 130
                    $this->displayBlock("badge", $context, $blocks);
                    echo "
                        ";
                    // line 132
                    echo "                    </a>
                ";
                } else {
                    // line 134
                    echo "                    ";
                    $this->displayBlock("spanElement", $context, $blocks);
                    echo "
                ";
                }
            }
            // line 138
            echo "            ";
            // line 139
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "childrenAttribute", [0 => "class"], "method", false, false, false, 139))) ? ([0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "childrenAttribute", [0 => "class"], "method", false, false, false, 139)]) : ([]));
            // line 140
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 140, $this->source); })()), [0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 140, $this->source); })()), "level", [], "any", false, false, false, 140))]);
            // line 141
            echo "            ";
            // line 142
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 142, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 142), ["class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 142, $this->source); })()), " ")]);
            // line 143
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 143, $this->source); })()), ["id" => (isset($context["ulId"]) || array_key_exists("ulId", $context) ? $context["ulId"] : (function () { throw new RuntimeError('Variable "ulId" does not exist.', 143, $this->source); })()), "class" => ((twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 143, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 143, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 143, $this->source); })()), "matchingDepth", [], "any", false, false, false, 143)], "method", false, false, false, 143)) ? ("show") : ("collapse"))]);
            // line 144
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 150
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $macros["knp_menu"] = $this;
        // line 151
        echo "    <!-- spanElement, includes label -->
    <span";
        // line 152
        echo twig_call_macro($macros["knp_menu"], "macro_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 152, $this->source); })()), "labelAttributes", [], "any", false, false, false, 152)], 152, $context, $this->getSourceContext());
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 156
        echo "    ";
        $context["badge"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 156), "badge", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 156), "badge", [], "any", false, false, false, 156), false)) : (false));
        // line 157
        echo "
    <div data-i18n=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 158, $this->source); })()), "label", [], "any", false, false, false, 158), "html", null, true);
        echo "\" class=\"position-relative\">
        ";
        // line 159
        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 159, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 159) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 159, $this->source); })()), "getExtra", [0 => "safe_label", 1 => false], "method", false, false, false, 159))) {
            echo twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 159, $this->source); })()), "label", [], "any", false, false, false, 159);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 159, $this->source); })()), "label", [], "any", false, false, false, 159), "html", null, true);
        }
        // line 160
        echo "    ";
        if ((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 160, $this->source); })())) {
            // line 161
            echo "        <span class=\"xxposition-absolute top-30 xxstart-120 translate-middle p-1 bg-success border border-light rounded-circle\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 161, $this->source); })()), "value", [], "any", false, false, false, 161), "html", null, true);
            echo "</span>
    ";
        }
        // line 163
        echo "
    <span class=\"visually-hidden\">New alerts</span>
  </span>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 181
    public function block_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "badge"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "badge"));

        // line 182
        echo "    ";
        $context["badge"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 182), "badge", [], "any", true, true, false, 182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 182), "badge", [], "any", false, false, false, 182), false)) : (false));
        // line 183
        if ((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 183, $this->source); })())) {
            // line 184
            echo "    ";
            // line 189
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 170
    public function macro_badges($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badges"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badges"));

            // line 171
            echo "    ";
            $macros["selfMacros"] = $this;
            // line 172
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 172, $this->source); })()), "getExtra", [0 => "badge"], "method", false, false, false, 172))) {
                // line 173
                echo "        ";
                echo twig_call_macro($macros["selfMacros"], "macro_badge", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 173, $this->source); })()), "getExtra", [0 => "badge"], "method", false, false, false, 173)], 173, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source,             // line 174
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 174, $this->source); })()), "getExtra", [0 => "badges"], "method", false, false, false, 174))) {
                // line 175
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 175, $this->source); })()), "getExtra", [0 => "badges"], "method", false, false, false, 175));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 176
                    echo "            ";
                    echo twig_call_macro($macros["selfMacros"], "macro_badge", [$context["badge"]], 176, $context, $this->getSourceContext());
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 192
    public function macro_badge($__badge__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "badge" => $__badge__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            // line 193
            echo "    <div class=\"mm-counter\"><span class=\"badge badge-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", true, true, false, 193)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", false, false, false, 193), "success")) : ("success")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 193, $this->source); })()), "value", [], "any", false, false, false, 193), "html", null, true);
            echo "</span>
        ";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 194, $this->source); })()), "value", [], "any", false, false, false, 194), "html", null, true);
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

    public function getTemplateName()
    {
        return "@SurvosBootstrap/sneat/knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 194,  613 => 193,  594 => 192,  578 => 178,  569 => 176,  564 => 175,  562 => 174,  557 => 173,  554 => 172,  551 => 171,  532 => 170,  521 => 189,  519 => 184,  517 => 183,  514 => 182,  504 => 181,  489 => 163,  483 => 161,  480 => 160,  474 => 159,  470 => 158,  467 => 157,  464 => 156,  454 => 155,  440 => 152,  437 => 151,  426 => 150,  411 => 144,  409 => 143,  407 => 142,  405 => 141,  403 => 140,  401 => 139,  399 => 138,  392 => 134,  388 => 132,  384 => 130,  380 => 129,  376 => 128,  372 => 127,  369 => 126,  366 => 123,  363 => 121,  361 => 120,  359 => 119,  357 => 118,  355 => 117,  352 => 116,  348 => 114,  346 => 113,  343 => 112,  338 => 110,  335 => 109,  333 => 108,  330 => 106,  328 => 105,  325 => 104,  322 => 102,  320 => 101,  318 => 100,  315 => 97,  313 => 96,  310 => 95,  307 => 94,  305 => 93,  300 => 92,  297 => 91,  294 => 90,  291 => 88,  288 => 86,  286 => 85,  283 => 83,  281 => 82,  278 => 80,  276 => 79,  274 => 78,  272 => 77,  270 => 76,  268 => 75,  266 => 74,  263 => 73,  260 => 72,  250 => 71,  238 => 68,  235 => 67,  225 => 66,  211 => 62,  207 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 52,  189 => 51,  186 => 50,  184 => 49,  181 => 48,  179 => 47,  177 => 45,  175 => 44,  172 => 43,  162 => 42,  151 => 39,  149 => 38,  144 => 36,  139 => 35,  136 => 34,  134 => 33,  131 => 32,  128 => 29,  127 => 28,  126 => 27,  123 => 26,  120 => 24,  118 => 23,  115 => 22,  112 => 21,  109 => 20,  106 => 19,  96 => 18,  85 => 6,  83 => 5,  78 => 4,  68 => 3,  57 => 1,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@KnpMenu/menu.html.twig' %}
{% set debug = options['debug']|default(false) %}
{% block root %}
    <!-- {{ _self }} -->
    {% set listAttributes = item.childrenAttributes %}
    {{ block('list') -}}
{% endblock %}

{#<ul class=\"menu-inner py-1\">#}
{#    <!-- Dashboard -->#}
{#    <li class=\"menu-item\">#}
{#        <a href=\"index.html\" class=\"menu-link\">#}
{#            <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>#}
{#            <div data-i18n=\"Analytics\">Dashboard</div>#}
{#        </a>#}
{#    </li>#}

{% block list %}
    {% set depth = depth is defined ? depth + 1 : 0 %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        {% import \"knp_menu.html.twig\" as macros %}

        {% if matcher.isAncestor(item) %}
            {%- set listAttributes = listAttributes|merge({class: (listAttributes.class|default(''))|trim}) -%}
        {% endif %}
        {% if item.isRoot %}
            {%- set listAttributes = item.isRoot
                ? options['rootAttributes']
                : (listAttributes|merge({class: (listAttributes.class|default('') ~ ' ')}))
                |trim -%}
        {% endif %}
        {% if depth > 0 %}
            {%- set listAttributes = listAttributes|merge({class: ' menu-sub'}) %}
        {% endif %}
        <ul{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </ul>
        {% set depth = depth - 1 %}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class'), ' menu-link'] : [' menu-link'] %}
    <!-- linkElement -->

    {%- set attributes = item.linkAttributes %}
    {% if matcher.isCurrent(item) %}
        {%- set classes = classes|default([])|merge([options.currentClass]) %}
        {% set attributes = attributes|merge({ 'class': attributes.class|default([])|join(' ') ~ ' ' ~ options.currentClass} ) %}
    {% endif %}

    {# passed in via render_sidebar.html.twig #}
    {% set attributes = attributes|merge({ 'class': attributes.class|default([])|join(' ') ~ ' ' ~ options.link_class|default('')} ) %}

    <a href=\"{{ item.uri }}\" {{ macros.attributes(attributes) }}>
        {{ block('icon') }}
{#        {% if item.attribute('data-icon') is not empty  %}#}
{#            <i class=\"menu-icon tf-icons bx bx-copy\"></i>#}
{#            <i class=\"{{ item.attribute('data-icon') }}\"></i>#}
{#        {% endif %}#}
        {{ block('label') }}
    </a>
{% endblock %}

{% block icon %}
<!-- icon -->
<i class=\"menu-icon {{ item.attribute('data-icon') is not empty ? item.attribute('data-icon') : 'fas fa-circle' }}\"></i>
{% endblock %}

{% block item %}
    {%- set is_collapsable = item.hasChildren %} {# was attributes.collapsable|default(false) %} #}

    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}

        {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
        {% if item.hasChildren and options.depth is not same as(0) %}
            {% if options.branch_class is not empty and item.displayChildren %}
                <!-- branch, has leaves ({{  matcher.isAncestor(item, options.matchingDepth) ? 'open' : 'closed' }}) -->
                {% set classes = classes|merge([options.branch_class]) %}
            {% endif %}
        {% elseif options.leaf_class is not empty %}
            <!-- has leaf_class -->
            {%- set classes = classes|merge([options.leaf_class]) %}
        {%- endif %}

        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {% if matcher.isAncestor(item, options.matchingDepth) %}
            {%- set attributes = attributes|merge({'class': classes|join(' menu.item.open open active ')}) %}
            {% endif %}
{#        {{ matcher.isAncestor(item, options.matchingDepth)? ' active' }}#}
        {# displaying the item #}
        {% import _self as knp_menu %}
        <li{{ knp_menu.attributes(attributes) }} >
            {# if uri is set, it must be a leaf. #}
            {% set ulId = item.name %}
            {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
                {{ block('linkElement') }}
            {%- else %}
                {% if item.hasChildren %}
                    {#                    <a data-bs-target=\"#{{ ulId }}\" data-bs-toggle=\"collapse\" class=\"sidebar-link\" aria-expanded=\"true\">#}
                    {#                        <i class=\"uil-table\"></i>#}
                    {#                        <span class=\"align-middle\">Locations</span>#}
                    {#                    </a>#}

                    {#                collapsible {{  matcher.isAncestor(item, options.matchingDepth) ? 'ancestor' : 'not ancestor' }}#}
                    <a
{#                            data-bs-target=\"#{{ ulId }}\"#}
{#                       data-bs-toggle=\"collapse\"#}
                       aria-expanded=\"false\"
                       class=\"menu-link menu-toggle {{ matcher.isAncestor(item, options.matchingDepth)? ' active' }}\">
                        {{ block('icon') }}
                        {{ block('spanElement') }}
                        {{ block('badge') }}
                        {#                        <span class=\"end fas fa-angle-left\"></span>#}
                    </a>
                {% else %}
                    {{ block('spanElement') }}
                {% endif %}

            {%- endif %}
            {# render the list of children#}
            {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
            {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
            {#            {%- set childrenClasses = childrenClasses|merge(['nav-treeview']) %}#}
            {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
            {%- set listAttributes = listAttributes|merge({'id': ulId, 'class':  matcher.isAncestor(item, options.matchingDepth) ? 'show' : 'collapse' }) %}
            {{ block('list') }}
        </li>
    {% endif %}
{% endblock %}


{% block spanElement %}{% import _self as knp_menu %}
    <!-- spanElement, includes label -->
    <span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>
{% endblock %}

{% block label %}
    {% set badge = item.extras.badge|default(false) %}

    <div data-i18n=\"{{ item.label }}\" class=\"position-relative\">
        {% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}
    {% if badge %}
        <span class=\"xxposition-absolute top-30 xxstart-120 translate-middle p-1 bg-success border border-light rounded-circle\">{{ badge.value }}</span>
    {% endif %}

    <span class=\"visually-hidden\">New alerts</span>
  </span>
    </div>

    {% endblock %}

{% macro badges(item) %}
    {% import _self as selfMacros %}
    {% if item.getExtra('badge') is not null %}
        {{ selfMacros.badge(item.getExtra('badge')) }}
    {% elseif item.getExtra('badges') is not null %}
        {% for badge in item.getExtra('badges') %}
            {{ selfMacros.badge(badge) }}
        {% endfor %}
    {% endif %}
{% endmacro %}

{% block badge %}
    {% set badge = item.extras.badge|default(false) %}
{% if badge %}
    {#  moved to label
        <span class=\"float-end\">
                {{ component('badge', {style: 'right', color: 'white', text: 'primary', message: badge.value}) }}
        </span>
    #}
    {% endif %}
{% endblock %}

{% macro badge(badge) %}
    <div class=\"mm-counter\"><span class=\"badge badge-{{ badge.color|default('success') }}\">{{ badge.value }}</span>
        {{ badge.value }}
    </div>
{% endmacro %}
", "@SurvosBootstrap/sneat/knp_menu.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/sneat/knp_menu.html.twig");
    }
}
