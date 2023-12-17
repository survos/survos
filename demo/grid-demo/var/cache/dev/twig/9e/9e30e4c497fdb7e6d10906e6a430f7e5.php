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

/* @SurvosBootstrap/components/tabler/icon.html.twig */
class __TwigTemplate_0dd605173ee26c7c430e870809033bb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/tabler/icon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/components/tabler/icon.html.twig"));

        // line 1
        echo "<span class=\"bg-";
        echo twig_escape_filter($this->env, ((array_key_exists("bgColor", $context)) ? (_twig_default_filter((isset($context["bgColor"]) || array_key_exists("bgColor", $context) ? $context["bgColor"] : (function () { throw new RuntimeError('Variable "bgColor" does not exist.', 1, $this->source); })()), "green")) : ("green")), "html", null, true);
        echo " text-";
        echo twig_escape_filter($this->env, ((array_key_exists("textColor", $context)) ? (_twig_default_filter((isset($context["textColor"]) || array_key_exists("textColor", $context) ? $context["textColor"] : (function () { throw new RuntimeError('Variable "textColor" does not exist.', 1, $this->source); })()), "white")) : ("white")), "html", null, true);
        echo " avatar\"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->

<i class=\"";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 3, $this->source); })()), "fas fa-play")) : ("fas fa-play")), "html", null, true);
        echo "\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
</span>

";
        // line 11
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/components/tabler/icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 4,  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"bg-{{ bgColor|default('green') }} text-{{ textColor|default('white') }} avatar\"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->

<i class=\"{{ icon|default('fas fa-play') }}\"></i>
    {{ icon }}
</span>

{#public function createIcon(string \$name, bool \$withIconClass = false, string \$default = null): string#}
{#{#}
{#return '<i class=\"' . \$this->icon(\$name, \$withIconClass, \$default) . '\"></i>';#}
{#}#}

{#public function icon(string \$name, bool \$withIconClass = false, string \$default = null): string#}
{#{#}
{#return (\$withIconClass ? 'icon ' : '') . (\$this->icons[str_replace('-', '_', \$name)] ?? (\$default ?? \$name));#}
{#}#}
", "@SurvosBootstrap/components/tabler/icon.html.twig", "/home/tac/ca/survos/packages/bootstrap-bundle/templates/components/tabler/icon.html.twig");
    }
}
