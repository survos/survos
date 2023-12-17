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

/* @SurvosBootstrap/Partials/_menu.html.twig */
class __TwigTemplate_cb5edd01cbe96f9956b8f4ba9057dd58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/Partials/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/Partials/_menu.html.twig"));

        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/Partials/_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getTemplateName(), "html", null, true);
        echo "!!!!</h1>
    ";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "hasChildren", [], "any", false, false, false, 5)) ? ("parent") : ("nope"));
        echo "
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "labelAttribute", ["icon"], "method", false, false, false, 6)) {
            echo "<i class=\"nav-icon ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "labelAttribute", ["icon"], "method", false, false, false, 6), "html", null, true);
            echo "\"></i>";
        }
        // line 7
        echo "    <p>
        ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "labelAttribute", ["iconOnly"], "method", false, false, false, 8)) {
            // line 9
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 9) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "getExtra", ["safe_label", false], "method", false, false, false, 9))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9));
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "label", [], "any", false, false, false, 9)), "html", null, true);
            }
            // line 10
            echo "        ";
        }
        // line 11
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "labelAttribute", ["data-image"], "method", false, false, false, 11)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "labelAttribute", ["data-image"], "method", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
        // line 12
        echo "
        ";
        // line 13
        $macros["selfMacros"] = $this;
        // line 14
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "hasChildren", [], "any", false, false, false, 14) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })()), "depth", [], "any", false, false, false, 14) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "displayChildren", [], "any", false, false, false, 14))) {
            // line 15
            echo "            <span class=\"float-right pull-right-container\">
            ";
            // line 16
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
            echo "
            <i class=\"fas fa-angle-left float-right\"></i>
        </span>
        ";
        } else {
            // line 20
            echo "            ";
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })())], 20, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 22
        echo "    </p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 41
        echo "    ";
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 41);
        // line 42
        echo "    <nav class=\"mt-2\">
        ";
        // line 43
        $this->displayBlock("list", $context, $blocks);
        // line 44
        echo "</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 48
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "hasChildren", [], "any", false, false, false, 48) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })()), "depth", [], "any", false, false, false, 48) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "displayChildren", [], "any", false, false, false, 48))) {
            // line 49
            echo "        ";
            $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/Partials/_menu.html.twig", 49)->unwrap();
            // line 50
            echo "
        ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 51, $this->source); })()), "isAncestor", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })())], "method", false, false, false, 51)) {
                // line 52
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 52, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 52)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 52), "")) : ("")))]);
            }
            // line 54
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "isRoot", [], "any", false, false, false, 54)) {
                // line 55
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 55, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 55), "")) : ("")) . " nav-treeview"))]);
            }
            // line 57
            echo "        <ul";
            echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 57, $this->source); })())], 57, $context, $this->getSourceContext());
            echo ">
            ";
            // line 58
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        // line 64
        echo "    ";
        // line 65
        echo "    ";
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 65, $this->source); })());
        // line 66
        echo "    ";
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })());
        // line 67
        echo "    ";
        // line 68
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 68, $this->source); })()), "depth", [], "any", false, false, false, 68))) {
            // line 69
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 69, $this->source); })()), ["depth" => (twig_get_attribute($this->env, $this->source, (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 69, $this->source); })()), "depth", [], "any", false, false, false, 69) - 1)]);
            // line 70
            echo "    ";
        }
        // line 71
        echo "    ";
        // line 72
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 72, $this->source); })()), "matchingDepth", [], "any", false, false, false, 72)) && (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 72, $this->source); })()), "matchingDepth", [], "any", false, false, false, 72) > 0))) {
            // line 73
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 73, $this->source); })()), ["matchingDepth" => (twig_get_attribute($this->env, $this->source, (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 73, $this->source); })()), "matchingDepth", [], "any", false, false, false, 73) - 1)]);
            // line 74
            echo "    ";
        }
        // line 75
        echo "

    ";
        // line 78
        $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 78))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 78)]) : ([]));
        // line 79
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 79, $this->source); })()), [("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), "level", [], "any", false, false, false, 79))]);
        // line 80
        echo "
    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 81, $this->source); })()), "children", [], "any", false, false, false, 81));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 82
            if (((array_key_exists("is_collapsable", $context)) ? (_twig_default_filter((isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 82, $this->source); })()), true)) : (true))) {
                // line 83
                $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "attribute", ["class"], "method", false, false, false, 83))) ? ([twig_get_attribute($this->env, $this->source, $context["item"], "attribute", ["class"], "method", false, false, false, 83), "nav-item"]) : (["nav-item"]));
                // line 84
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 84, $this->source); })()), ["show"]);
                // line 85
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 85, $this->source); })()), ["collapse-item"]);
                // line 86
                echo "            (c ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 86), "html", null, true);
                echo ") ";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 86, $this->source); })()), ","), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 86, $this->source); })()), ","), "html", null, true);
                echo "]";
            }
            // line 88
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    ";
        // line 91
        echo "    ";
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 91, $this->source); })());
        // line 92
        echo "    ";
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 92, $this->source); })());
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 104
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 105
        echo "    ";
        $macros["knp_menu"] = $this;
        // line 106
        echo "    <a class=\"nav-link\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "uri", [], "any", false, false, false, 106), "html", null, true);
        echo "\"";
        echo twig_call_macro($macros["knp_menu"], "macro_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "linkAttributes", [], "any", false, false, false, 106)], 106, $context, $this->getSourceContext());
        echo ">
        ";
        // line 107
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        // line 112
        echo "    ";
        $macros["selfMacros"] = $this;
        // line 113
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/Partials/_menu.html.twig", 113)->unwrap();
        // line 114
        echo "    ";
        if (twig_matches("/(^|s+)header(s+|\$)/", twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 114, $this->source); })()), "attribute", ["class"], "method", false, false, false, 114))) {
            // line 115
            echo "        ";
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 115, $this->source); })())], 115, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 117
            echo "        <a";
            echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "labelAttributes", [], "any", false, false, false, 117)], 117, $context, $this->getSourceContext());
            echo ">
            ";
            // line 118
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 118, $this->source); })())], 118, $context, $this->getSourceContext());
            echo "
        </a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
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

            // line 26
            echo "    ";
            $macros["selfMacros"] = $this;
            // line 27
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "getExtra", ["badge"], "method", false, false, false, 27))) {
                // line 28
                echo "        ";
                echo twig_call_macro($macros["selfMacros"], "macro_badge", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "getExtra", ["badge"], "method", false, false, false, 28)], 28, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source,             // line 29
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "getExtra", ["badges"], "method", false, false, false, 29))) {
                // line 30
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "getExtra", ["badges"], "method", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 31
                    echo "            ";
                    echo twig_call_macro($macros["selfMacros"], "macro_badge", [$context["badge"]], 31, $context, $this->getSourceContext());
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 36
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

            // line 37
            echo "    <span class=\"right badge badge-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", false, false, false, 37), "success")) : ("success")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 37, $this->source); })()), "value", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 96
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            // line 97
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 97, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 98
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 99
                    echo twig_sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/Partials/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 99,  545 => 98,  540 => 97,  521 => 96,  501 => 37,  482 => 36,  466 => 33,  457 => 31,  452 => 30,  450 => 29,  445 => 28,  442 => 27,  439 => 26,  420 => 25,  406 => 118,  401 => 117,  395 => 115,  392 => 114,  389 => 113,  386 => 112,  376 => 111,  363 => 107,  356 => 106,  353 => 105,  343 => 104,  332 => 92,  329 => 91,  327 => 90,  310 => 88,  301 => 86,  299 => 85,  297 => 84,  295 => 83,  293 => 82,  276 => 81,  273 => 80,  271 => 79,  269 => 78,  265 => 75,  262 => 74,  259 => 73,  256 => 72,  254 => 71,  251 => 70,  248 => 69,  245 => 68,  243 => 67,  240 => 66,  237 => 65,  235 => 64,  225 => 63,  211 => 58,  206 => 57,  203 => 55,  200 => 54,  197 => 52,  195 => 51,  192 => 50,  189 => 49,  186 => 48,  176 => 47,  165 => 44,  163 => 43,  160 => 42,  157 => 41,  147 => 40,  136 => 22,  130 => 20,  123 => 16,  120 => 15,  117 => 14,  115 => 13,  112 => 12,  103 => 11,  100 => 10,  93 => 9,  91 => 8,  88 => 7,  82 => 6,  78 => 5,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    <h1>{{ _self }}!!!!</h1>
    {{ item.hasChildren ? 'parent' : 'nope' }}
    {% if item.labelAttribute('icon') %}<i class=\"nav-icon {{ item.labelAttribute('icon') }}\"></i>{% endif %}
    <p>
        {% if not item.labelAttribute('iconOnly') %}
            {% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|trans|raw }}{% else %}{{ item.label|trans }}{% endif %}
        {% endif %}
        {% if item.labelAttribute('data-image') %}<img src=\"{{ item.labelAttribute('data-image') }}\" alt=\"{{ item.name }}\" class=\"menu-thumbnail\"/>{% endif %}

        {% import _self as selfMacros %}
        {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
            <span class=\"float-right pull-right-container\">
            {{ selfMacros.badges(item) }}
            <i class=\"fas fa-angle-left float-right\"></i>
        </span>
        {% else %}
            {{ selfMacros.badges(item) }}
        {% endif %}
    </p>
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

{% macro badge(badge) %}
    <span class=\"right badge badge-{{ badge.color|default('success') }}\">{{ badge.value }}</span>
{% endmacro %}

{% block root %}
    {% set listAttributes = item.childrenAttributes %}
    <nav class=\"mt-2\">
        {{ block('list') -}}
    </nav>
{% endblock %}

{% block list %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        {% import \"knp_menu.html.twig\" as macros %}

        {% if matcher.isAncestor(item) %}
            {%- set listAttributes = listAttributes|merge({class: (listAttributes.class|default(''))|trim}) -%}
        {% endif %}
        {% if not item.isRoot %}
            {%- set listAttributes = listAttributes|merge({class: (listAttributes.class|default('') ~ ' nav-treeview')|trim}) -%}
        {% endif %}
        <ul{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </ul>
    {% endif %}
{% endblock %}

{% block children %}
    {# save current variables #}
    {% set currentOptions = options %}
    {% set currentItem = item %}
    {# update the depth for children #}
    {% if options.depth is not none %}
        {% set options = options|merge({'depth': currentOptions.depth - 1}) %}
    {% endif %}
    {# update the matchingDepth for children #}
    {% if options.matchingDepth is not none and options.matchingDepth > 0 %}
        {% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
    {% endif %}


    {# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

    {% for item in currentItem.children %}
        {%- if is_collapsable|default(true) %}
            {%- set classes = item.attribute('class') is not empty ? [item.attribute('class'), 'nav-item'] : ['nav-item'] %}
            {%- set classes = classes|merge([ 'show']) %}
            {%- set childrenClasses = childrenClasses|merge(['collapse-item']) %}
            (c {{ item.label }}) {{ classes|join(',') }} [{{ childrenClasses|join(',') }}]
        {%- endif %}
        {{ block('item') }}
    {% endfor %}
    {# restore current variables #}
    {% set item = currentItem %}
    {% set options = currentOptions %}
{% endblock %}


{% macro attributes(attributes) %}
    {% for name, value in attributes %}
        {%- if value is not none and value is not same as(false) -%}
            {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}

{% block linkElement %}
    {% import _self as knp_menu %}
    <a class=\"nav-link\" href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    {% import _self as selfMacros %}
    {% import \"knp_menu.html.twig\" as macros %}
    {% if item.attribute('class') matches '/(^|\\s+)header(\\s+|\$)/' %}
        {{ selfMacros.badges(item) }}
    {% else %}
        <a{{ macros.attributes(item.labelAttributes) }}>
            {{ selfMacros.badges(item) }}
        </a>
    {% endif %}
{% endblock %}

", "@SurvosBootstrap/Partials/_menu.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/Partials/_menu.html.twig");
    }
}
