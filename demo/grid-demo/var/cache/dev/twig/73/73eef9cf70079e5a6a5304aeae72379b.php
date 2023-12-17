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

/* @SurvosBootstrap/macros/user.html.twig */
class __TwigTemplate_17de54bd796c2286d98af8c2fcde58f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/macros/user.html.twig"));

        // line 8
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_avatar($__image__ = null, $__alt__ = null, $__class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "image" => $__image__,
            "alt" => $__alt__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "avatar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "avatar"));

            // line 2
            echo "    ";
            if ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 2, $this->source); })())) {
                // line 3
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 3, $this->source); })())), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 3, $this->source); })()), "img-circle elevation-2")) : ("img-circle elevation-2")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 3, $this->source); })()), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 5
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new RuntimeError('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "default_avatar", [], "any", false, false, false, 5)), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 5, $this->source); })()), "img-circle elevation-2")) : ("img-circle elevation-2")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 5, $this->source); })()), "html", null, true);
                echo "\" />
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**     * @codeCoverageIgnore     */    public function getTemplateName()
    {
        return "@SurvosBootstrap/macros/user.html.twig";
    }

    /**     * @codeCoverageIgnore     */    public function isTraitable()
    {
        return false;
    }

    /**     * @codeCoverageIgnore     */    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 3,  75 => 2,  54 => 1,  43 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro avatar(image, alt, class) %}
    {% if image %}
        <img src=\"{{ asset(image) }}\" class=\"{{ class|default('img-circle elevation-2') }}\" alt=\"{{ alt }}\" />
    {% else %}
        <img src=\"{{ asset(admin_lte_context.default_avatar) }}\" class=\"{{ class|default('img-circle elevation-2') }}\" alt=\"{{ alt }}\" />
    {% endif %}
{% endmacro %}

", "@SurvosBootstrap/macros/user.html.twig", "/home/tac/ca/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/macros/user.html.twig");
    }
}
