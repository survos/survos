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
class __TwigTemplate_39704091120a1cf0b521e8509a038e47 extends Template
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
        echo "
    ";
        // line 38
        echo "    ";
        $context["use_multilevel"] = true;
        // line 39
        echo "
    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "displayed", [], "any", false, false, false, 40)) {
            // line 43
            $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "attributes", [], "any", false, false, false, 43);
            // line 44
            $context["is_dropdown"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", [], "any", false, false, false, 44), false)) : (false));
            // line 45
            $context["is_collapsable"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "hasChildren", [], "any", false, false, false, 45);
            echo " ";
            // line 46
            $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", [], "any", false, false, false, 46), false)) : (false));
            // line 47
            $context["divider_append"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", [], "any", false, false, false, 47), false)) : (false));
            // line 48
            echo "        ";
            // line 49
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 49, $this->source); })()), ["dropdown" => null, "divider_prepend" => null, "divider_append" => null]);
            // line 51
            if ((isset($context["divider_prepend"]) || array_key_exists("divider_prepend", $context) ? $context["divider_prepend"] : (function () { throw new RuntimeError('Variable "divider_prepend" does not exist.', 51, $this->source); })())) {
                // line 52
                echo "            ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 54
            echo "
        ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 57, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })())], "method", false, false, false, 57)) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 58, $this->source); })()), [twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 58, $this->source); })()), "currentClass", [], "any", false, false, false, 58)]);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 59
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 59, $this->source); })()), "isAncestor", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 59, $this->source); })()), "depth", [], "any", false, false, false, 59)], "method", false, false, false, 59)) {
                // line 60
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 60, $this->source); })()), [twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 60, $this->source); })()), "ancestorClass", [], "any", false, false, false, 60)]);
            }
            // line 62
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "actsLikeFirst", [], "any", false, false, false, 62)) {
            }
            // line 65
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "actsLikeLast", [], "any", false, false, false, 65)) {
            }
            // line 68
            echo "
        ";
            // line 70
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 70))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 70)]) : ([]));
            // line 71
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 71, $this->source); })()), [("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 71, $this->source); })()), "level", [], "any", false, false, false, 71))]);
            // line 72
            echo "
        ";
            // line 79
            if ((isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 79, $this->source); })())) {
                // line 80
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 80, $this->source); })()), ["dropdown"]);
                // line 81
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 81, $this->source); })()), ["collapse-item"]);
            }
            // line 83
            echo "
        ";
            // line 85
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 85, $this->source); })()))) {
                // line 86
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 86, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 86, $this->source); })()), " ")]);
            }
            // line 88
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 88, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 88), ["class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 88, $this->source); })()), " ")]);
            // line 89
            $context["itemSlug"] = twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89)), "snake", [], "any", false, false, false, 89);
            // line 90
            echo "
";
            // line 94
            echo "
        <li";
            // line 95
            echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 95, $this->source); })())], 95, $context, $this->getSourceContext());
            echo ">
            ";
            // line 97
            if ((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new RuntimeError('Variable "is_dropdown" does not exist.', 97, $this->source); })())) {
                // line 98
                echo "                ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (            // line 99
(isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 99, $this->source); })())) {
                // line 100
                echo "                ";
                $this->displayBlock("collapseElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 101
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "uri", [], "any", false, false, false, 101)) && ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "current", [], "any", false, false, false, 101) || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 101, $this->source); })()), "currentAsLink", [], "any", false, false, false, 101)))) {
                // line 102
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 104
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 107
            if ((isset($context["divider_append"]) || array_key_exists("divider_append", $context) ? $context["divider_append"] : (function () { throw new RuntimeError('Variable "divider_append" does not exist.', 107, $this->source); })())) {
                // line 108
                echo "                ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 110
            echo "
            ";
            // line 111
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 111, $this->source); })()), "hasChildren", [], "any", false, false, false, 111) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 111, $this->source); })()), "depth", [], "any", false, false, false, 111) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 111, $this->source); })()), "displayChildren", [], "any", false, false, false, 111))) {
                // line 112
                if ((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new RuntimeError('Variable "is_dropdown" does not exist.', 112, $this->source); })())) {
                    // line 113
                    echo "                    ";
                    $this->displayBlock("dropdownlinks", $context, $blocks);
                    echo "
                ";
                } elseif (                // line 114
(isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 114, $this->source); })())) {
                    // line 115
                    echo "                    ";
                    $this->displayBlock("collapselinks", $context, $blocks);
                    echo "
                ";
                }
                // line 117
                echo "            ";
            }
            // line 118
            echo "        </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 122
    public function block_dropdownlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownlinks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownlinks"));

        // line 123
        echo "    <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 123, $this->source); })())) ? ("ul") : ("div"));
        echo " class=\"dropdown-menu\">

    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 125));
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
            // line 126
            echo "        ";
            $this->displayBlock("renderDropdownlink", $context, $blocks);
            echo "
        ";
            // line 127
            if (((((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 127, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["item"], "hasChildren", [], "any", false, false, false, 127)) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 127, $this->source); })()), "depth", [], "any", false, false, false, 127) === 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "displayChildren", [], "any", false, false, false, 127))) {
                // line 128
                echo "            ";
                $this->displayBlock("dropdownlinks", $context, $blocks);
                echo "
        ";
            }
            // line 130
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
        // line 131
        echo "    <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 131, $this->source); })())) ? ("/ul") : ("/div"));
        echo ">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 134
    public function block_collapselinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapselinks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapselinks"));

        // line 135
        echo "    ";
        // line 136
        echo "    ";
        // line 138
        echo "        <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 138, $this->source); })())) ? ("ul") : ("div"));
        echo " class=\"dropdown-menu\" aria-labelledby=\"collapse_";
        echo twig_escape_filter($this->env, (isset($context["itemSlug"]) || array_key_exists("itemSlug", $context) ? $context["itemSlug"] : (function () { throw new RuntimeError('Variable "itemSlug" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, false, 139));
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
            // line 140
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
        // line 142
        echo "        <";
        echo (((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 142, $this->source); })())) ? ("/ul") : ("/div"));
        echo ">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_renderDropdownlink($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "renderDropdownlink"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "renderDropdownlink"));

        // line 147
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 148
        $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 148), "divider_prepend", [], "any", true, true, false, 148)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 148), "divider_prepend", [], "any", false, false, false, 148), false)) : (false));
        // line 149
        $context["divider_append"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 149), "divider_append", [], "any", true, true, false, 149)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, true, false, 149), "divider_append", [], "any", false, false, false, 149), false)) : (false));
        // line 150
        $context["attributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 150, $this->source); })()), "attributes", [], "any", false, false, false, 150), ["dropdown" => null, "divider_prepend" => null, "divider_append" => null]);
        // line 151
        echo "
    ";
        // line 152
        if ((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 152, $this->source); })())) {
            // line 153
            echo "        <li >
    ";
        }
        // line 156
        if ((isset($context["divider_prepend"]) || array_key_exists("divider_prepend", $context) ? $context["divider_prepend"] : (function () { throw new RuntimeError('Variable "divider_prepend" does not exist.', 156, $this->source); })())) {
            // line 157
            echo "        ";
            $this->displayBlock("dividerElementDropdown", $context, $blocks);
        }
        // line 160
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 160, $this->source); })()), "uri", [], "any", false, false, false, 160))) {
            echo " ";
            // line 161
            echo "        ";
            // line 164
            echo "        ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 166
            echo "        ";
            $this->displayBlock("spanElementDropdown", $context, $blocks);
        }
        // line 169
        if ((isset($context["divider_append"]) || array_key_exists("divider_append", $context) ? $context["divider_append"] : (function () { throw new RuntimeError('Variable "divider_append" does not exist.', 169, $this->source); })())) {
            // line 170
            echo "        ";
            $this->displayBlock("dividerElementDropdown", $context, $blocks);
        }
        // line 172
        echo "
    ";
        // line 173
        if ((isset($context["use_multilevel"]) || array_key_exists("use_multilevel", $context) ? $context["use_multilevel"] : (function () { throw new RuntimeError('Variable "use_multilevel" does not exist.', 173, $this->source); })())) {
            // line 174
            echo "        </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_spanElementDropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElementDropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElementDropdown"));

        // line 179
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 179)->unwrap();
        // line 180
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 181
        echo "    ";
        echo twig_call_macro($macros["ownmacro"], "macro_setCssClassAttribute", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 181, $this->source); })()), "LabelAttribute", "dropdown-header"], 181, $context, $this->getSourceContext());
        echo "
    <div ";
        // line 182
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 182, $this->source); })()), "labelAttributes", [], "any", false, false, false, 182)], 182, $context, $this->getSourceContext());
        echo ">
        ";
        // line 183
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 183, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 183))) {
            // line 184
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 184, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 184), "html", null, true);
            echo "\">   </i>
            ";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 185, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 185), "html", null, true);
            echo "
        ";
        }
        // line 187
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 191
    public function block_dividerElementDropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElementDropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElementDropdown"));

        // line 192
        echo "    <div class=\"dropdown-divider\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 195
    public function block_dividerElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 196
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 196, $this->source); })()), "level", [], "any", false, false, false, 196) == 1)) {
            // line 197
            echo "        <li class=\"divider-vertical\"></li>
    ";
        } else {
            // line 199
            echo "        <li class=\"divider\"></li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 222
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 223
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 223)->unwrap();
        // line 224
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 225
        echo "
    ";
        // line 226
        echo twig_call_macro($macros["ownmacro"], "macro_setCssClassAttribute", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 226, $this->source); })()), "LinkAttribute", ("nav-link depth-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 226, $this->source); })()), "level", [], "any", false, false, false, 226))], 226, $context, $this->getSourceContext());
        echo "
";
        // line 229
        $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 229, $this->source); })()), "linkAttributes", [], "any", false, false, false, 229);
        // line 230
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 230, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 230, $this->source); })())], "method", false, false, false, 230)) {
            // line 231
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 231, $this->source); })()), [twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 231, $this->source); })()), "currentClass", [], "any", false, false, false, 231)]);
            // line 232
            echo "        ";
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 232, $this->source); })()), ["class" => ((twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 232, $this->source); })()), "class", [], "any", false, false, false, 232), " ") . " ") . twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 232, $this->source); })()), "currentClass", [], "any", false, false, false, 232))]);
            // line 233
            echo "    ";
        }
        // line 234
        echo "

    <a href=\"";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 236, $this->source); })()), "uri", [], "any", false, false, false, 236), "html", null, true);
        echo "\"";
        echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 236, $this->source); })())], 236, $context, $this->getSourceContext());
        echo ">
        ";
        // line 237
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 237, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 237))) {
            // line 238
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 238, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 238), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 240
        echo "            ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 244
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        // line 245
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 245)->unwrap();
        // line 246
        echo "    ";
        $macros["ownmacro"] = $this;
        // line 247
        echo "    ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 247, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 247, $this->source); })())], "method", false, false, false, 247)) ? (print (twig_escape_filter($this->env, ("current Span is " . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 247, $this->source); })()), "label", [], "any", false, false, false, 247)), "html", null, true))) : (print ("")));
        echo "

    ";
        // line 249
        echo twig_call_macro($macros["ownmacro"], "macro_setCssClassAttribute", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 249, $this->source); })()), "LabelAttribute", "navbar-text"], 249, $context, $this->getSourceContext());
        echo "
    <span ";
        // line 250
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 250, $this->source); })()), "labelAttributes", [], "any", false, false, false, 250)], 250, $context, $this->getSourceContext());
        echo ">
        ";
        // line 251
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 251, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 251))) {
            // line 252
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 252, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 252), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 254
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 258
    public function block_dropdownElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 259
        echo "    'dropdownElement'
    ";
        // line 260
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 260)->unwrap();
        // line 261
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 261, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 261))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 261, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 261)]) : ([]));
        // line 262
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 262, $this->source); })()), [" dropdown-toggle", "nav-link"]);
        // line 263
        $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 263, $this->source); })()), "linkAttributes", [], "any", false, false, false, 263);
        // line 264
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 264, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 264, $this->source); })()), " ")]);
        // line 265
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 265, $this->source); })()), ["data-bs-toggle" => "dropdown"]);
        // line 266
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 266, $this->source); })()), ["role" => "button"]);
        // line 267
        echo "    <a href=\"#\"";
        echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 267, $this->source); })())], 267, $context, $this->getSourceContext());
        echo ">
        ";
        // line 268
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 268, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 268))) {
            // line 269
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 269, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 269), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 271
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
";
        // line 273
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 277
    public function block_collapseElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapseElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collapseElement"));

        // line 278
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 278)->unwrap();
        // line 279
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 279, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 279))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 279, $this->source); })()), "linkAttribute", ["class"], "method", false, false, false, 279)]) : ([]));
        // line 281
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 281, $this->source); })()), ["nav-link ", "dropdown-toggle"]);
        // line 282
        echo "
    ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 283, $this->source); })()), "isCurrent", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 283, $this->source); })())], "method", false, false, false, 283)) {
            // line 284
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 284, $this->source); })()), ["selected-menu", "nav-link "]);
            // line 285
            echo "    ";
        }
        // line 286
        $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 286, $this->source); })()), "linkAttributes", [], "any", false, false, false, 286);
        // line 287
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 287, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 287, $this->source); })()), " dropdown-toggle ")]);
        // line 288
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 288, $this->source); })()), ["data-bs-toggle" => "dropdown"]);
        // line 289
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 289, $this->source); })()), ["aria-expanded" => "false"]);
        // line 290
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 290, $this->source); })()), ["role" => "button"]);
        // line 291
        echo "    <a ";
        echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 291, $this->source); })())], 291, $context, $this->getSourceContext());
        echo "
            href=\"#\" id=\"collapse_";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["itemSlug"]) || array_key_exists("itemSlug", $context) ? $context["itemSlug"] : (function () { throw new RuntimeError('Variable "itemSlug" does not exist.', 292, $this->source); })()), "html", null, true);
        echo "\"
    >
        ";
        // line 294
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 294, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 294))) {
            // line 295
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 295, $this->source); })()), "attribute", ["icon"], "method", false, false, false, 295), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 297
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
";
        // line 299
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 302
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 303
        echo "    ";
        // line 306
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 306, $this->source); })()), "labelAttribute", ["iconOnly"], "method", false, false, false, 306)) {
            // line 307
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 307, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 307) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 307, $this->source); })()), "getExtra", ["safe_label", false], "method", false, false, false, 307))) {
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 307, $this->source); })()), "label", [], "any", false, false, false, 307));
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 307, $this->source); })()), "label", [], "any", false, false, false, 307)), "html", null, true);
            }
            // line 308
            echo "        ";
        }
        // line 309
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 309, $this->source); })()), "labelAttribute", ["data-image"], "method", false, false, false, 309)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 309, $this->source); })()), "labelAttribute", ["data-image"], "method", false, false, false, 309), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 309, $this->source); })()), "name", [], "any", false, false, false, 309), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
        // line 310
        echo "
        ";
        // line 311
        $macros["selfMacros"] = $this;
        // line 312
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 312, $this->source); })()), "hasChildren", [], "any", false, false, false, 312) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 312, $this->source); })()), "depth", [], "any", false, false, false, 312) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 312, $this->source); })()), "displayChildren", [], "any", false, false, false, 312))) {
            // line 317
            echo "        ";
        } else {
            // line 318
            echo "            ";
            echo twig_call_macro($macros["selfMacros"], "macro_badges", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 318, $this->source); })())], 318, $context, $this->getSourceContext());
            echo "
        ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 337
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 338
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 338, $this->source); })()), "hasChildren", [], "any", false, false, false, 338) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 338, $this->source); })()), "depth", [], "any", false, false, false, 338) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 338, $this->source); })()), "displayChildren", [], "any", false, false, false, 338))) {
            // line 339
            echo "        ";
            $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SurvosBootstrap/knp_top_menu.html.twig", 339)->unwrap();
            // line 340
            echo "
        ";
            // line 341
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 341, $this->source); })()), "isAncestor", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 341, $this->source); })())], "method", false, false, false, 341)) {
                // line 342
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 342, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 342)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 342), "")) : ("")))]);
            }
            // line 344
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 344, $this->source); })()), "isRoot", [], "any", false, false, false, 344)) {
                // line 345
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 345, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", true, true, false, 345)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", [], "any", false, false, false, 345), "")) : ("")) . " xxxnav-treeview"))]);
            }
            // line 347
            echo "        <ul";
            echo twig_call_macro($macros["macros"], "macro_attributes", [(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 347, $this->source); })())], 347, $context, $this->getSourceContext());
            echo ">
            ";
            // line 348
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 353
    public function block_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        // line 354
        echo "    ";
        // line 355
        echo "    ";
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 355, $this->source); })());
        // line 356
        echo "    ";
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 356, $this->source); })());
        // line 357
        echo "    ";
        // line 358
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 358, $this->source); })()), "depth", [], "any", false, false, false, 358))) {
            // line 360
            echo "    ";
        }
        // line 361
        echo "    ";
        // line 362
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 362, $this->source); })()), "matchingDepth", [], "any", false, false, false, 362)) && (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 362, $this->source); })()), "matchingDepth", [], "any", false, false, false, 362) > 0))) {
            // line 363
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 363, $this->source); })()), ["matchingDepth" => (twig_get_attribute($this->env, $this->source, (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 363, $this->source); })()), "matchingDepth", [], "any", false, false, false, 363) - 1)]);
            // line 364
            echo "    ";
        }
        // line 365
        echo "

    ";
        // line 368
        $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 368, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 368))) ? ([twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 368, $this->source); })()), "childrenAttribute", ["class"], "method", false, false, false, 368)]) : ([]));
        // line 369
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 369, $this->source); })()), [("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 369, $this->source); })()), "level", [], "any", false, false, false, 369))]);
        // line 370
        echo "
    ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 371, $this->source); })()), "children", [], "any", false, false, false, 371));
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
            // line 372
            if (((array_key_exists("is_collapsable", $context)) ? (_twig_default_filter((isset($context["is_collapsable"]) || array_key_exists("is_collapsable", $context) ? $context["is_collapsable"] : (function () { throw new RuntimeError('Variable "is_collapsable" does not exist.', 372, $this->source); })()), true)) : (true))) {
                // line 373
                echo "            ";
                $context["classes"] = [];
                // line 376
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 376, $this->source); })()), ["collapse-item"]);
            }
            // line 378
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
        // line 380
        echo "    ";
        // line 381
        echo "    ";
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 381, $this->source); })());
        // line 382
        echo "    ";
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 382, $this->source); })());
        
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
            if (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 7, $this->source); })()))) {
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

    // line 322
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

            // line 323
            echo "    ";
            $macros["selfMacros"] = $this;
            // line 324
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 324, $this->source); })()), "getExtra", ["badge"], "method", false, false, false, 324))) {
                // line 325
                echo "        ";
                echo twig_call_macro($macros["selfMacros"], "macro_badge", [twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 325, $this->source); })()), "getExtra", ["badge"], "method", false, false, false, 325)], 325, $context, $this->getSourceContext());
                echo "
    ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source,             // line 326
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 326, $this->source); })()), "getExtra", ["badges"], "method", false, false, false, 326))) {
                // line 327
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 327, $this->source); })()), "getExtra", ["badges"], "method", false, false, false, 327));
                foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                    // line 328
                    echo "            ";
                    echo twig_call_macro($macros["selfMacros"], "macro_badge", [$context["badge"]], 328, $context, $this->getSourceContext());
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 330
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 333
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

            // line 334
            echo "    <span class=\"right badge badge-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "color", [], "any", false, false, false, 334), "success")) : ("success")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 334, $this->source); })()), "value", [], "any", false, false, false, 334), "html", null, true);
            echo "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 386
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

            // line 387
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 387, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 388
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 389
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
        return "@SurvosBootstrap/knp_top_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1226 => 389,  1224 => 388,  1219 => 387,  1200 => 386,  1180 => 334,  1161 => 333,  1145 => 330,  1136 => 328,  1131 => 327,  1129 => 326,  1124 => 325,  1121 => 324,  1118 => 323,  1099 => 322,  1083 => 10,  1080 => 9,  1077 => 8,  1074 => 7,  1071 => 6,  1068 => 5,  1065 => 4,  1044 => 3,  1033 => 382,  1030 => 381,  1028 => 380,  1011 => 378,  1008 => 376,  1005 => 373,  1003 => 372,  986 => 371,  983 => 370,  981 => 369,  979 => 368,  975 => 365,  972 => 364,  969 => 363,  966 => 362,  964 => 361,  961 => 360,  958 => 358,  956 => 357,  953 => 356,  950 => 355,  948 => 354,  938 => 353,  924 => 348,  919 => 347,  916 => 345,  913 => 344,  910 => 342,  908 => 341,  905 => 340,  902 => 339,  899 => 338,  889 => 337,  875 => 318,  872 => 317,  869 => 312,  867 => 311,  864 => 310,  855 => 309,  852 => 308,  845 => 307,  842 => 306,  840 => 303,  830 => 302,  819 => 299,  814 => 297,  808 => 295,  806 => 294,  801 => 292,  796 => 291,  794 => 290,  792 => 289,  790 => 288,  788 => 287,  786 => 286,  783 => 285,  781 => 284,  779 => 283,  776 => 282,  774 => 281,  772 => 279,  769 => 278,  759 => 277,  748 => 273,  743 => 271,  737 => 269,  735 => 268,  730 => 267,  728 => 266,  726 => 265,  724 => 264,  722 => 263,  720 => 262,  718 => 261,  716 => 260,  713 => 259,  703 => 258,  689 => 254,  683 => 252,  681 => 251,  677 => 250,  673 => 249,  667 => 247,  664 => 246,  661 => 245,  651 => 244,  637 => 240,  631 => 238,  629 => 237,  623 => 236,  619 => 234,  616 => 233,  613 => 232,  611 => 231,  608 => 230,  606 => 229,  602 => 226,  599 => 225,  596 => 224,  593 => 223,  583 => 222,  571 => 199,  567 => 197,  564 => 196,  554 => 195,  543 => 192,  533 => 191,  519 => 187,  514 => 185,  509 => 184,  507 => 183,  503 => 182,  498 => 181,  495 => 180,  492 => 179,  482 => 178,  470 => 174,  468 => 173,  465 => 172,  461 => 170,  459 => 169,  455 => 166,  451 => 164,  449 => 161,  446 => 160,  442 => 157,  440 => 156,  436 => 153,  434 => 152,  431 => 151,  429 => 150,  427 => 149,  425 => 148,  422 => 147,  412 => 146,  399 => 142,  382 => 140,  365 => 139,  358 => 138,  356 => 136,  354 => 135,  344 => 134,  331 => 131,  317 => 130,  311 => 128,  309 => 127,  304 => 126,  287 => 125,  281 => 123,  271 => 122,  259 => 118,  256 => 117,  250 => 115,  248 => 114,  243 => 113,  241 => 112,  239 => 111,  236 => 110,  232 => 108,  230 => 107,  226 => 104,  222 => 102,  220 => 101,  217 => 100,  215 => 99,  212 => 98,  210 => 97,  206 => 95,  203 => 94,  200 => 90,  198 => 89,  196 => 88,  193 => 86,  191 => 85,  188 => 83,  185 => 81,  183 => 80,  181 => 79,  178 => 72,  176 => 71,  174 => 70,  171 => 68,  168 => 65,  165 => 62,  162 => 60,  160 => 59,  158 => 58,  156 => 57,  153 => 54,  149 => 52,  147 => 51,  145 => 49,  143 => 48,  141 => 47,  139 => 46,  136 => 45,  134 => 44,  132 => 43,  130 => 40,  127 => 39,  124 => 38,  121 => 31,  118 => 30,  108 => 29,  97 => 26,  94 => 24,  92 => 17,  87 => 16,  85 => 15,  82 => 14,  72 => 13,  49 => 1,);
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
{#        {%- if false and is_dropdown %}#}
{#            {%- set classes = classes|merge(['dropdown']) %}#}
{#            {%- set childrenClasses = childrenClasses|merge(['dropdown-item']) %}#}
{#        {%- endif %}#}

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

{#        <li class=\"nav-item\">#}
{#            <a class=\"nav-link\" href=\"#\">Link</a>#}
{#        </li>#}

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

    {{ ownmacro.setCssClassAttribute(item, 'LinkAttribute', 'nav-link depth-' ~ item.level ) }}
{#    {{ ownmacro.setCssClassAttribute(item, 'LinkAttribute', 'dropdown-item', ' depth-' ~ item.level ) }}#}

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

", "@SurvosBootstrap/knp_top_menu.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/bootstrap-bundle/templates/knp_top_menu.html.twig");
    }
}
