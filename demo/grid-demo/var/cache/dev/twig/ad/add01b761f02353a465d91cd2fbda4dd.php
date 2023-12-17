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

/* @SurvosBootstrap/knp_top_menu.html.twig */
class __TwigTemplate_1e25e41556c2b69965ce785d6e6d591f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'root' => [$this, 'block_root'],
            'item' => [$this, 'block_item'],
            'dropdownlinks' => [$this, 'block_dropdownlinks'],
            'collapselinks' => [$this, 'block_collapselinks'],
            'renderDropdownlink' => [$this, 'block_renderDropdownlink'],
            'spanElementDropdown' => [$this, 'block_spanElementDropdown'],
            'dividerElementDropdown' => [$this, 'block_dividerElementDropdown'],
            'dividerElement' => [$this, 'block_dividerElement'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'dropdownElement' => [$this, 'block_dropdownElement'],
            'collapseElement' => [$this, 'block_collapseElement'],
            'label' => [$this, 'block_label'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/knp_top_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/knp_top_menu.html.twig"));

        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 14
        echo "
    ";
        // line 15
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 15);
        // line 16
        echo "    <ul class=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 16), "class", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 16), "class", [], "any", false, false, false, 16), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rootAttributes", [], "any", false, true, false, 16), "class", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rootAttributes", [], "any", false, true, false, 16), "class", [], "any", false, false, false, 16))) : ("")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rootAttributes", [], "any", false, true, false, 16), "class", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rootAttributes", [], "any", false, true, false, 16), "class", [], "any", false, false, false, 16))) : ("")))), "html", null, true);
        echo "\">
        ";
        // line 17
        $this->displayBlock("children", $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "    </ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 30
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 30)->unwrap();
        // line 31
        echo "    ";
        // line 37
        echo "    ";
        $context["use_multilevel"] = true;
        // line 38
        echo "

    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "displayed", [], "any", false, false, false, 40)) {
            // line 41
            $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "attributes", [], "any", false, false, false, 41);
            // line 42
            $context["is_dropdown"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", [], "any", false, false, false, 42), false)) : (false));
            // line 43
            $context["is_collapsable"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "hasChildren", [], "any", false, false, false, 43);
            echo " ";
            // line 44
            $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", [], "any", false, false, false, 44), false)) : (false));
            // line 45
            $context["divider_append"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", [], "any", false, false, false, 45), false)) : (false));
            // line 46
            echo "        ";
            // line 47
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 47, $this->source); })()), ["dropdown" => null, "divider_prepend" => null, "divider_append" => null]);
            // line 49
            if ((isset($context["divider_prepend"]) || array_key_exists("divider_prepend", $context) ? $context["divider_prepend"] : (function () { throw new RuntimeError('Variable "divider_prepend" does not exist.', 49, $this->source); })())) {
                // line 50
                echo "            ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 52
            echo "
        ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 55, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })())], "method", false, false, false, 55)) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 56, $this->source); })()), [twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 56, $this->source); })()), "currentClass", [], "any", false, false, false, 56)]);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 57, $this->source); })()), "isAncestor", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 57, $this->source); })()), "depth", [], "any", false, false, false, 57)], "method", false, false, false, 57)) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 58, $this->source); })()), [twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 58, $this->source); })()), "ancestorClass", [], "any", false, false, false, 58)]);
            }
            // line 60
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 60, $this->source); })()), "actsLikeFirst", [], "any", false, false, false, 60)) {
            }
            // line 63
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "actsLikeLast", [], "any", false, false, false, 63)) {
            }
            // line 66
            echo "
        ";
            // line 68
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 68))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 68)]) : ([]));
            // line 69
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 69, $this->source); })()), [("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "level", [], "any", false, false, false, 69))]);
            // line 70
            echo "
        ";
            // line 72
            if ((false && (isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new RuntimeError('Variable "is_dropdown" does not exist.', 72, $this->source); })()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 73, $this->source); })()), ["dropdown"]);
                // line 74
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 74, $this->source); })()), ["dropdown-item"]);
            }
            // line 77
            if ((isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 77, $this->source); })())) {
                // line 78
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 78, $this->source); })()), ["dropdown"]);
                // line 79
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 79, $this->source); })()), ["collapse-item"]);
            }
            // line 81
            echo "
        ";
            // line 83
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 83, $this->source); })()))) {
                // line 84
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 84, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 84, $this->source); })()), " ")]);
            }
            // line 86
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 86), ["class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 86, $this->source); })()), " ")]);
            // line 87
            $context["itemSlug"] = twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87)), "snake", [], "any", false, false, false, 87);
            // line 88
            echo "
        <li";
            // line 89
            echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 89, $this->source); })())], 89, $context, $this->getSourceContext());
            echo ">
            ";
            // line 91
            if ((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new RuntimeError('Variable "is_dropdown" does not exist.', 91, $this->source); })())) {
                // line 92
                echo "                ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (            // line 93
(isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 93, $this->source); })())) {
                // line 94
                echo "                ";
                $this->displayBlock("collapseElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "uri", [], "any", false, false, false, 95)) && ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "current", [], "any", false, false, false, 95) || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 95, $this->source); })()), "currentAsLink", [], "any", false, false, false, 95)))) {
                // line 96
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 98
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 101
            if ((isset($context["divider_append"]) || array_key_exists("divider_append", $context) ? $context["divider_append"] : (function () { throw new RuntimeError('Variable "divider_append" does not exist.', 101, $this->source); })())) {
                // line 102
                echo "                ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 104
            echo "
            ";
            // line 105
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "hasChildren", [], "any", false, false, false, 105) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 105, $this->source); })()), "depth", [], "any", false, false, false, 105) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "displayChildren", [], "any", false, false, false, 105))) {
                // line 106
                if ((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new RuntimeError('Variable "is_dropdown" does not exist.', 106, $this->source); })())) {
                    // line 107
                    echo "                    ";
                    $this->displayBlock("dropdownlinks", $context, $blocks);
                    echo "
                ";
                } elseif (                // line 108
(isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 108, $this->source); })())) {
                    // line 109
                    echo "                    ";
                    $this->displayBlock("collapselinks", $context, $blocks);
                    echo "
                ";
                }
                // line 111
                echo "            ";
            }
            // line 112
            echo "        </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_dropdownlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownlinks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownlinks"));

        // line 117
        echo "    <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 117, $this->source); })())) ? ("ul") : ("div"));
        echo " class=\"dropdown-menu\">

    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 119));
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
            // line 120
            echo "        ";
            $this->displayBlock("renderDropdownlink", $context, $blocks);
            echo "
        ";
            // line 121
            if (((((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 121, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["item"], "hasChildren", [], "any", false, false, false, 121)) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 121, $this->source); })()), "depth", [], "any", false, false, false, 121) === 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "displayChildren", [], "any", false, false, false, 121))) {
                // line 122
                echo "            ";
                $this->displayBlock("dropdownlinks", $context, $blocks);
                echo "
        ";
            }
            // line 124
            echo "    ";
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
        // line 125
        echo "    <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 125, $this->source); })())) ? ("/ul") : ("/div"));
        echo ">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 128
    public function block_collapselinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapselinks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapselinks"));

        // line 129
        echo "    ";
        // line 130
        echo "    ";
        // line 132
        echo "        <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 132, $this->source); })())) ? ("ul") : ("div"));
        echo " class=\"dropdown-menu\" aria-labelledby=\"collapse_";
        echo twig_escape_filter($this->env, (isset($context["itemSlug"]) || array_key_exists("itemSlug", $context) ? $context["itemSlug"] : (function () { throw new RuntimeError('Variable "itemSlug" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 133));
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
            // line 134
            echo "            ";
            $this->displayBlock("renderDropdownlink", $context, $blocks);
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
        // line 136
        echo "        <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 136, $this->source); })())) ? ("/ul") : ("/div"));
        echo ">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 140
    public function block_renderDropdownlink($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "renderDropdownlink"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "renderDropdownlink"));

        // line 141
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 142
        $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 142), "divider_prepend", [], "any", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 142), "divider_prepend", [], "any", false, false, false, 142), false)) : (false));
        // line 143
        $context["divider_append"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 143), "divider_append", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 143), "divider_append", [], "any", false, false, false, 143), false)) : (false));
        // line 144
        $context["attributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 144, $this->source); })()), "attributes", [], "any", false, false, false, 144), ["dropdown" => null, "divider_prepend" => null, "divider_append" => null]);
        // line 145
        echo "
    ";
        // line 146
        if ((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 146, $this->source); })())) {
            // line 147
            echo "        <li >
    ";
        }
        // line 150
        if ((isset($context["divider_prepend"]) || array_key_exists("divider_prepend", $context) ? $context["divider_prepend"] : (function () { throw new RuntimeError('Variable "divider_prepend" does not exist.', 150, $this->source); })())) {
            // line 151
            echo "        ";
            $this->displayBlock("dividerElementDropdown", $context, $blocks);
        }
        // line 154
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 154, $this->source); })()), "uri", [], "any", false, false, false, 154))) {
            echo " ";
            // line 155
            echo "        ";
            // line 158
            echo "        ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 160
            echo "        ";
            $this->displayBlock("spanElementDropdown", $context, $blocks);
        }
        // line 163
        if ((isset($context["divider_append"]) || array_key_exists("divider_append", $context) ? $context["divider_append"] : (function () { throw new RuntimeError('Variable "divider_append" does not exist.', 163, $this->source); })())) {
            // line 164
            echo "        ";
            $this->displayBlock("dividerElementDropdown", $context, $blocks);
        }
        // line 166
        echo "
    ";
        // line 167
        if ((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 167, $this->source); })())) {
            // line 168
            echo "        </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 172
    public function block_spanElementDropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElementDropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElementDropdown"));

        // line 173
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 173)->unwrap();
        // line 174
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 175
        echo "    ";
        echo twig_call_macro($macros["ownmacro"], "macro_setCssClassAttribute", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 175, $this->source); })()), "LabelAttribute", "dropdown-header"], 175, $context, $this->getSourceContext());
        echo "
    <div ";
        // line 176
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 176, $this->source); })()), "labelAttributes", [], "any", false, false, false, 176)], 176, $context, $this->getSourceContext());
        echo ">
        ";
        // line 177
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 177, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 177))) {
            // line 178
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 178, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 178), "html", null, true);
            echo "\">   </i>
            ";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 179, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 179), "html", null, true);
            echo "
        ";
        }
        // line 181
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 185
    public function block_dividerElementDropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElementDropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElementDropdown"));

        // line 186
        echo "    <div class=\"dropdown-divider\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 189
    public function block_dividerElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 190
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 190, $this->source); })()), "level", [], "any", false, false, false, 190) == 1)) {
            // line 191
            echo "        <li class=\"divider-vertical\"></li>
    ";
        } else {
            // line 193
            echo "        <li class=\"divider\"></li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 216
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 217
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 217)->unwrap();
        // line 218
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 219
        echo "    ";
        echo twig_call_macro($macros["ownmacro"], "macro_setCssClassAttribute", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 219, $this->source); })()), "LinkAttribute", "dropdown-item", (" depth-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 219, $this->source); })()), "level", [], "any", false, false, false, 219))], 219, $context, $this->getSourceContext());
        // line 221
        $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 221, $this->source); })()), "linkAttributes", [], "any", false, false, false, 221);
        // line 222
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 222, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 222, $this->source); })())], "method", false, false, false, 222)) {
            // line 223
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 223, $this->source); })()), [twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 223, $this->source); })()), "currentClass", [], "any", false, false, false, 223)]);
            // line 224
            echo "        ";
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 224, $this->source); })()), ["class" => ((twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 224, $this->source); })()), "class", [], "any", false, false, false, 224), " ") . " ") . twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 224, $this->source); })()), "currentClass", [], "any", false, false, false, 224))]);
            // line 225
            echo "    ";
        }
        // line 226
        echo "

    <a href=\"";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 228, $this->source); })()), "uri", [], "any", false, false, false, 228), "html", null, true);
        echo "\"";
        echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 228, $this->source); })())], 228, $context, $this->getSourceContext());
        echo ">
        ";
        // line 229
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 229, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 229))) {
            // line 230
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 230, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 230), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 232
        echo "            ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 236
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        // line 237
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 237)->unwrap();
        // line 238
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 239
        echo "    ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 239, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 239, $this->source); })())], "method", false, false, false, 239)) ? (print (twig_escape_filter($this->env, ("current Span is " . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 239, $this->source); })()), "label", [], "any", false, false, false, 239)), "html", null, true))) : (print ("")));
        echo "

    ";
        // line 241
        echo twig_call_macro($macros["ownmacro"], "macro_setCssClassAttribute", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 241, $this->source); })()), "LabelAttribute", "navbar-text"], 241, $context, $this->getSourceContext());
        echo "
    <span ";
        // line 242
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 242, $this->source); })()), "labelAttributes", [], "any", false, false, false, 242)], 242, $context, $this->getSourceContext());
        echo ">
        ";
        // line 243
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 243, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 243))) {
            // line 244
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 244, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 244), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 246
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 250
    public function block_dropdownElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 251
        echo "    'dropdownElement'
    ";
        // line 252
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 252)->unwrap();
        // line 253
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 253, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 253))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 253, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 253)]) : ([]));
        // line 254
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 254, $this->source); })()), [" dropdown-toggle", "nav-link"]);
        // line 255
        $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 255, $this->source); })()), "linkAttributes", [], "any", false, false, false, 255);
        // line 256
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 256, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 256, $this->source); })()), " ")]);
        // line 257
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 257, $this->source); })()), ["data-bs-toggle" => "dropdown"]);
        // line 258
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 258, $this->source); })()), ["role" => "button"]);
        // line 259
        echo "    <a href=\"#\"";
        echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 259, $this->source); })())], 259, $context, $this->getSourceContext());
        echo ">
        ";
        // line 260
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 260, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 260))) {
            // line 261
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 261, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 261), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 263
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
";
        // line 265
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 269
    public function block_collapseElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapseElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapseElement"));

        // line 270
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 270)->unwrap();
        // line 271
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 271, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 271))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 271, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 271)]) : ([]));
        // line 273
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 273, $this->source); })()), ["nav-link ", "dropdown-toggle"]);
        // line 274
        echo "
    ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 275, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 275, $this->source); })())], "method", false, false, false, 275)) {
            // line 276
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 276, $this->source); })()), ["selected-menu", "nav-link "]);
            // line 277
            echo "    ";
        }
        // line 278
        $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 278, $this->source); })()), "linkAttributes", [], "any", false, false, false, 278);
        // line 279
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 279, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 279, $this->source); })()), " dropdown-toggle ")]);
        // line 280
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 280, $this->source); })()), ["data-bs-toggle" => "dropdown"]);
        // line 281
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 281, $this->source); })()), ["aria-expanded" => "false"]);
        // line 282
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 282, $this->source); })()), ["role" => "button"]);
        // line 283
        echo "    <a ";
        echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 283, $this->source); })())], 283, $context, $this->getSourceContext());
        echo "
            href=\"#\" id=\"collapse_";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["itemSlug"]) || array_key_exists("itemSlug", $context) ? $context["itemSlug"] : (function () { throw new RuntimeError('Variable "itemSlug" does not exist.', 284, $this->source); })()), "html", null, true);
        echo "\"
    >
        ";
        // line 286
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 286, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 286))) {
            // line 287
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 287, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 287), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 289
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
";
        // line 291
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 294
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 295
        echo "    ";
        // line 298
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "labelAttribute", ["iconOnly"], "method", false, false, false, 298)) {
            // line 299
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 299, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 299) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 299, $this->source); })()), "getExtra", ["safe_label", false], "method", false, false, false, 299))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 299, $this->source); })()), "label", [], "any", false, false, false, 299));
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 299, $this->source); })()), "label", [], "any", false, false, false, 299)), "html", null, true);
            }
            // line 300
            echo "        ";
        }
        // line 301
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 301, $this->source); })()), "labelAttribute", ["data-image"], "method", false, false, false, 301)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 301, $this->source); })()), "labelAttribute", ["data-image"], "method", false, false, false, 301), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 301, $this->source); })()), "name", [], "any", false, false, false, 301), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
        // line 302
        echo "
        ";
        // line 303
        $macros["selfMacros"] = $this;
        // line 304
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 304, $this->source); })()), "hasChildren", [], "any", false, false, false, 304) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 304, $this->source); })()), "depth", [], "any", false, false, false, 304) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 304, $this->source); })()), "displayChildren", [], "any", false, false, false, 304))) {
            // line 309
            echo "        ";
        } else {
            // line 310
            echo "            ";
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 310, $this->source); })())], 310, $context, $this->getSourceContext());
            echo "
        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 329
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 330
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "hasChildren", [], "any", false, false, false, 330) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 330, $this->source); })()), "depth", [], "any", false, false, false, 330) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "displayChildren", [], "any", false, false, false, 330))) {
            // line 331
            echo "        ";
            $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 331)->unwrap();
            // line 332
            echo "
        ";
            // line 333
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 333, $this->source); })()), "isAncestor", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 333, $this->source); })())], "method", false, false, false, 333)) {
                // line 334
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 334, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 334), "")) : ("")))]);
            }
            // line 336
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "isRoot", [], "any", false, false, false, 336)) {
                // line 337
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 337, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 337)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 337), "")) : ("")) . " xxxnav-treeview"))]);
            }
            // line 339
            echo "        <ul";
            echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 339, $this->source); })())], 339, $context, $this->getSourceContext());
            echo ">
            ";
            // line 340
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 345
    public function block_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        // line 346
        echo "    ";
        // line 347
        echo "    ";
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 347, $this->source); })());
        // line 348
        echo "    ";
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 348, $this->source); })());
        // line 349
        echo "    ";
        // line 350
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 350, $this->source); })()), "depth", [], "any", false, false, false, 350))) {
            // line 352
            echo "    ";
        }
        // line 353
        echo "    ";
        // line 354
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 354, $this->source); })()), "matchingDepth", [], "any", false, false, false, 354)) && (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 354, $this->source); })()), "matchingDepth", [], "any", false, false, false, 354) > 0))) {
            // line 355
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 355, $this->source); })()), ["matchingDepth" => (twig_get_attribute($this->env, $this->source, (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 355, $this->source); })()), "matchingDepth", [], "any", false, false, false, 355) - 1)]);
            // line 356
            echo "    ";
        }
        // line 357
        echo "

    ";
        // line 360
        $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 360, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 360))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 360, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 360)]) : ([]));
        // line 361
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 361, $this->source); })()), [("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 361, $this->source); })()), "level", [], "any", false, false, false, 361))]);
        // line 362
        echo "
    ";
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 363, $this->source); })()), "children", [], "any", false, false, false, 363));
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
            // line 364
            if (((array_key_exists("is_collapsable", $context)) ? (_twig_default_filter((isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 364, $this->source); })()), true)) : (true))) {
                // line 365
                echo "            ";
                $context["classes"] = [];
                // line 368
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 368, $this->source); })()), ["collapse-item"]);
            }
            // line 370
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
        // line 372
        echo "    ";
        // line 373
        echo "    ";
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 373, $this->source); })());
        // line 374
        echo "    ";
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 374, $this->source); })());
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function macro_setCssClassAttribute($__item__ = null, $__type__ = null, $__add__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "type" => $__type__,
            "add" => $__add__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setCssClassAttribute"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "setCssClassAttribute"));

            // line 4
            echo "    ";
            $context["getter"] = ("get" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()));
            // line 5
            echo "    ";
            $context["setter"] = ("set" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()));
            // line 6
            echo "    ";
            $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), (isset($context["getter"]) || array_key_exists("getter", $context) ? $context["getter"] : (function () { throw new RuntimeError('Variable "getter" does not exist.', 6, $this->source); })()), ["class"], "any", false, false, false, 6);
            // line 7
            echo "    ";
            if (is_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 7, $this->source); })()))) {
                // line 8
                echo "        ";
                $context["value"] = twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 8, $this->source); })()), " ");
                // line 9
                echo "    ";
            }
            // line 10
            echo "    ";
            twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), (isset($context["setter"]) || array_key_exists("setter", $context) ? $context["setter"] : (function () { throw new RuntimeError('Variable "setter" does not exist.', 10, $this->source); })()), ["class", (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 10, $this->source); })()) . " ") . (isset($context["add"]) || array_key_exists("add", $context) ? $context["add"] : (function () { throw new RuntimeError('Variable "add" does not exist.', 10, $this->source); })()))], "any", false, false, false, 10);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 314
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

            // line 315
            echo "    ";
            $macros["selfMacros"] = $this;
            // line 316
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 316, $this->source); })()), "getExtra", ["badge"], "method", false, false, false, 316))) {
                // line 317
                echo "        ";
                echo twig_call_macro($macros["selfMacros"], "macro_badge", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 317, $this->source); })()), "getExtra", ["badge"], "method", false, false, false, 317)], 317, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source,             // line 318
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 318, $this->source); })()), "getExtra", ["badges"], "method", false, false, false, 318))) {
                // line 319
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 319, $this->source); })()), "getExtra", ["badges"], "method", false, false, false, 319));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 320
                    echo "            ";
                    echo twig_call_macro($macros["selfMacros"], "macro_badge", [$context["badge"]], 320, $context, $this->getSourceContext());
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 322
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 325
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

            // line 326
            echo "    <span class=\"right badge badge-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", true, true, false, 326)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", false, false, false, 326), "success")) : ("success")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 326, $this->source); })()), "value", [], "any", false, false, false, 326), "html", null, true);
            echo "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 378
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

            // line 379
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 379, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 380
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 381
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

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@SurvosBootstrap/knp_top_menu.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  1226 => 381,  1224 => 380,  1219 => 379,  1200 => 378,  1180 => 326,  1161 => 325,  1145 => 322,  1136 => 320,  1131 => 319,  1129 => 318,  1124 => 317,  1121 => 316,  1118 => 315,  1099 => 314,  1083 => 10,  1080 => 9,  1077 => 8,  1074 => 7,  1071 => 6,  1068 => 5,  1065 => 4,  1044 => 3,  1033 => 374,  1030 => 373,  1028 => 372,  1011 => 370,  1008 => 368,  1005 => 365,  1003 => 364,  986 => 363,  983 => 362,  981 => 361,  979 => 360,  975 => 357,  972 => 356,  969 => 355,  966 => 354,  964 => 353,  961 => 352,  958 => 350,  956 => 349,  953 => 348,  950 => 347,  948 => 346,  938 => 345,  924 => 340,  919 => 339,  916 => 337,  913 => 336,  910 => 334,  908 => 333,  905 => 332,  902 => 331,  899 => 330,  889 => 329,  875 => 310,  872 => 309,  869 => 304,  867 => 303,  864 => 302,  855 => 301,  852 => 300,  845 => 299,  842 => 298,  840 => 295,  830 => 294,  819 => 291,  814 => 289,  808 => 287,  806 => 286,  801 => 284,  796 => 283,  794 => 282,  792 => 281,  790 => 280,  788 => 279,  786 => 278,  783 => 277,  781 => 276,  779 => 275,  776 => 274,  774 => 273,  772 => 271,  769 => 270,  759 => 269,  748 => 265,  743 => 263,  737 => 261,  735 => 260,  730 => 259,  728 => 258,  726 => 257,  724 => 256,  722 => 255,  720 => 254,  718 => 253,  716 => 252,  713 => 251,  703 => 250,  689 => 246,  683 => 244,  681 => 243,  677 => 242,  673 => 241,  667 => 239,  664 => 238,  661 => 237,  651 => 236,  637 => 232,  631 => 230,  629 => 229,  623 => 228,  619 => 226,  616 => 225,  613 => 224,  611 => 223,  608 => 222,  606 => 221,  603 => 219,  600 => 218,  597 => 217,  587 => 216,  575 => 193,  571 => 191,  568 => 190,  558 => 189,  547 => 186,  537 => 185,  523 => 181,  518 => 179,  513 => 178,  511 => 177,  507 => 176,  502 => 175,  499 => 174,  496 => 173,  486 => 172,  474 => 168,  472 => 167,  469 => 166,  465 => 164,  463 => 163,  459 => 160,  455 => 158,  453 => 155,  450 => 154,  446 => 151,  444 => 150,  440 => 147,  438 => 146,  435 => 145,  433 => 144,  431 => 143,  429 => 142,  426 => 141,  416 => 140,  403 => 136,  386 => 134,  369 => 133,  362 => 132,  360 => 130,  358 => 129,  348 => 128,  335 => 125,  321 => 124,  315 => 122,  313 => 121,  308 => 120,  291 => 119,  285 => 117,  275 => 116,  263 => 112,  260 => 111,  254 => 109,  252 => 108,  247 => 107,  245 => 106,  243 => 105,  240 => 104,  236 => 102,  234 => 101,  230 => 98,  226 => 96,  224 => 95,  221 => 94,  219 => 93,  216 => 92,  214 => 91,  210 => 89,  207 => 88,  205 => 87,  203 => 86,  200 => 84,  198 => 83,  195 => 81,  192 => 79,  190 => 78,  188 => 77,  185 => 74,  183 => 73,  181 => 72,  178 => 70,  176 => 69,  174 => 68,  171 => 66,  168 => 63,  165 => 60,  162 => 58,  160 => 57,  158 => 56,  156 => 55,  153 => 52,  149 => 50,  147 => 49,  145 => 47,  143 => 46,  141 => 45,  139 => 44,  136 => 43,  134 => 42,  132 => 41,  130 => 40,  126 => 38,  123 => 37,  121 => 31,  118 => 30,  108 => 29,  97 => 26,  94 => 24,  92 => 17,  87 => 16,  85 => 15,  82 => 14,  72 => 13,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'knp_menu.html.twig' %}

{% macro setCssClassAttribute(item, type, add) %}
    {% set getter = 'get' ~ type %}
    {% set setter = 'set' ~ type %}
    {% set value = attribute(item, getter, ['class']) %}
    {% if value is iterable %}
        {% set value = value|join(' ') %}
    {% endif %}
    {% do attribute(item, setter, ['class', value ~ ' ' ~ add]) %}
{% endmacro %}

{% block root %}

    {% set listAttributes = item.childrenAttributes %}
    <ul class=\"{{ item.attributes.class|default(options.rootAttributes.class|default()) }}\">
        {{ block('children') -}}
{#        <li class=\"nav-item\">#}
{#            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>#}
{#        </li>#}
{#        <li class=\"nav-item\">#}
{#            <a class=\"nav-link\" href=\"#\">Link</a>#}
{#        </li>#}

{#        {{ block('list') -}}#}
    </ul>
{% endblock %}

{% block item %}
    {% import \"knp_menu.html.twig\" as macros %}
    {#
    As multiple level is not currently supported by bootstrap 4
    This requires you to install
    https://github.com/bootstrapthemesco/bootstrap-4-multi-dropdown-navbar
    And set the the use_multilevel = true
    #}
    {% set use_multilevel = true %}


    {% if item.displayed %}
        {%- set attributes = item.attributes %}
        {%- set is_dropdown = attributes.dropdown|default(false) %}
        {%- set is_collapsable = item.hasChildren %} {# was attributes.collapsable|default(false) %} #}
        {%- set divider_prepend = attributes.divider_prepend|default(false) %}
        {%- set divider_append = attributes.divider_append|default(false) %}
        {# unset bootstrap specific attributes #}
        {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

        {%- if divider_prepend %}
            {{ block('dividerElement') }}
        {%- endif %}

        {# building the class of the item #}
{#        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class'), 'nav-item'] : ['nav-item'] %}#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
{#            {%- set classes = classes|merge([options.firstClass]) %}#}
        {%- endif %}
        {%- if item.actsLikeLast %}
{#            {%- set classes = classes|merge([options.lastClass]) %}#}
        {%- endif %}

        {# building the class of the children #}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

        {# adding classes for dropdown/collapse #}
        {%- if false and is_dropdown %}
            {%- set classes = classes|merge(['dropdown']) %}
            {%- set childrenClasses = childrenClasses|merge(['dropdown-item']) %}
        {%- endif %}

        {%- if is_collapsable %}
            {%- set classes = classes|merge(['dropdown']) %}
            {%- set childrenClasses = childrenClasses|merge(['collapse-item']) %}
        {%- endif %}

        {# putting classes together #}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {%- set itemSlug = item.name|u.snake %}

        <li{{ macros.attributes(attributes) }}>
            {# displaying the item #}
            {%- if is_dropdown %}
                {{ block('dropdownElement') }}
            {%- elseif is_collapsable %}
                {{ block('collapseElement') }}
            {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
                {{ block('linkElement') }}
            {%- else %}
                {{ block('spanElement') }}
            {%- endif %}

            {%- if divider_append %}
                {{ block('dividerElement') }}
            {%- endif %}

            {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
                {%- if is_dropdown %}
                    {{ block('dropdownlinks') }}
                {% elseif is_collapsable %}
                    {{ block('collapselinks') }}
                {% endif %}
            {% endif %}
        </li>
    {% endif %}
{% endblock %}

{% block dropdownlinks %}
    <{{ use_multilevel ? 'ul' : 'div'}} class=\"dropdown-menu\">

    {% for item in item.children %}
        {{ block('renderDropdownlink') }}
        {% if use_multilevel and item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
            {{ block('dropdownlinks') }}
        {% endif %}
    {% endfor %}
    <{{ use_multilevel ? '/ul' : '/div'}}>
{% endblock %}

{% block collapselinks %}
    {# the collapseELement block references this id, we might need data-parent #}
    {# isAncestor checks if the item is an ancestor of the currentItem #}
{#    <div id=\"collapse_{{itemSlug}}\" class=\"{{ matcher.isAncestor(item) ? 'show' : 'collapse' }}\">#}
        <{{ use_multilevel ? 'ul' : 'div'}} class=\"dropdown-menu\" aria-labelledby=\"collapse_{{itemSlug}}\">
    {% for item in item.children %}
            {{ block('renderDropdownlink') }}
    {% endfor %}
        <{{ use_multilevel ? '/ul' : '/div'}}>
{#    </div>#}
{% endblock %}

{% block renderDropdownlink %}
    {% import _self as ownmacro %}
    {%- set divider_prepend = item.attributes.divider_prepend|default(false) %}
    {%- set divider_append = item.attributes.divider_append|default(false) %}
    {%- set attributes = item.attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {% if use_multilevel %}
        <li >
    {% endif %}

    {%- if divider_prepend %}
        {{ block('dividerElementDropdown') }}
    {%- endif %}

    {%- if item.uri is not empty %} {#  and (not item.current or options.currentAsLink) #}
        {# collapse?
        {{ ownmacro.setCssClassAttribute(item, 'LinkAttribute', 'dropdown-item') }}
        #}
        {{ block('linkElement') }}
    {%- else %}
        {{ block('spanElementDropdown') }}
    {%- endif %}

    {%- if divider_append %}
        {{ block('dividerElementDropdown') }}
    {%- endif %}

    {% if use_multilevel %}
        </li>
    {% endif %}
{% endblock %}

{% block spanElementDropdown %}
    {% import \"knp_menu.html.twig\" as macros %}
    {% import _self as ownmacro %}
    {{ ownmacro.setCssClassAttribute(item, 'LabelAttribute', 'dropdown-header') }}
    <div {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\">   </i>
            {{ item.attribute('icon')  }}
        {% endif %}
        {{ block('label') }}
    </div>
{% endblock %}

{% block dividerElementDropdown %}
    <div class=\"dropdown-divider\"></div>
{% endblock %}

{% block dividerElement %}
    {% if item.level == 1 %}
        <li class=\"divider-vertical\"></li>
    {% else %}
        <li class=\"divider\"></li>
    {% endif %}
{% endblock %}

{# {% block linkElement %}
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

 #}
{% block linkElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {% import _self as ownmacro %}
    {{ ownmacro.setCssClassAttribute(item, 'LinkAttribute', 'dropdown-item', ' depth-' ~ item.level ) }}

    {%- set attributes = item.linkAttributes %}
    {% if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {% set attributes = attributes|merge({ 'class': attributes.class|join(' ') ~ ' ' ~ options.currentClass} ) %}
    {% endif %}


    <a href=\"{{ item.uri }}\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
            {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {% import _self as ownmacro %}
    {{ matcher.isCurrent(item) ? 'current Span is ' ~ item.label }}

    {{ ownmacro.setCssClassAttribute(item, 'LabelAttribute', 'navbar-text') }}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
\t</span>
{% endblock %}

{% block dropdownElement %}
    'dropdownElement'
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge([' dropdown-toggle', 'nav-link']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-bs-toggle': 'dropdown'}) %}
    {%- set attributes = attributes|merge({'role': 'button'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
{#        <b class=\"caret\"></b>#}
    </a>
{% endblock %}

{# this is the root link of something that can be collapsed #}
{% block collapseElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}

    {%- set classes = classes|merge(['nav-link ','dropdown-toggle']) %}

    {% if  matcher.isCurrent(item)%}
        {%- set classes = classes|merge(['selected-menu', 'nav-link ']) %}
    {% endif %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' dropdown-toggle ')}) %}
    {%- set attributes = attributes|merge({'data-bs-toggle': 'dropdown'}) %}
    {%- set attributes = attributes|merge({'aria-expanded': 'false'}) %}
    {%- set attributes = attributes|merge({'role': 'button'}) %}
    <a {{ macros.attributes(attributes) }}
            href=\"#\" id=\"collapse_{{itemSlug}}\"
    >
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
{#        <b class=\"caret\"></b>#}
    </a>
{% endblock %}

{% block label %}
    {# link and span call the icon...
    {% if item.labelAttribute('icon') %}<i class=\"nav-icon {{ item.labelAttribute('icon') }}\"></i>{% endif %}
    #}
        {% if not item.labelAttribute('iconOnly') %}
            {% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|trans|raw }}{% else %}{{ item.label|trans }}{% endif %}
        {% endif %}
        {% if item.labelAttribute('data-image') %}<img src=\"{{ item.labelAttribute('data-image') }}\" alt=\"{{ item.name }}\" class=\"menu-thumbnail\"/>{% endif %}

        {% import _self as selfMacros %}
        {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
{#            <span class=\"float-right\">#}
{#            {{ selfMacros.badges(item) }}#}
{#            <i class=\"fas fa-angle-left float-right\"></i>#}
{#        </span>#}
        {% else %}
            {{ selfMacros.badges(item) }}
        {% endif %}
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

{% block list %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        {% import \"knp_menu.html.twig\" as macros %}

        {% if matcher.isAncestor(item) %}
            {%- set listAttributes = listAttributes|merge({class: (listAttributes.class|default(''))|trim}) -%}
        {% endif %}
        {% if not item.isRoot %}
            {%- set listAttributes = listAttributes|merge({class: (listAttributes.class|default('') ~ ' xxxnav-treeview')|trim}) -%}
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
{#        {% set options = options|merge({'depth': currentOptions.depth - 1}) %}#}
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
            {% set classes = [] %}
{#            {%- set classes = item.attribute('class') is not empty ? [item.attribute('class'), 'nav-item'] : ['nav-item'] %}#}
{#            {%- set classes = classes|merge([ 'show']) %}#}
            {%- set childrenClasses = childrenClasses|merge(['collapse-item']) %}
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

", "@SurvosBootstrap/knp_top_menu.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/knp_top_menu.html.twig");
    }
}
