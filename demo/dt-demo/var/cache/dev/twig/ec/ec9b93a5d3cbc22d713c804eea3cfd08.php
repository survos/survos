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

/* @SurvosGrid/_modal.html.twig */
class __TwigTemplate_ad723df4e824a8328289c26aac1ac683 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosGrid/_modal.html.twig"));

        // line 2
        echo "
<div id=\"modal_controller\"
        ";
        // line 4
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["aaController"]) || array_key_exists("aaController", $context) ? $context["aaController"] : (function () { throw new RuntimeError('Variable "aaController" does not exist.', 4, $this->source); })()), "mc");
        echo "
        ";
        // line 5
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController((isset($context["modalController"]) || array_key_exists("modalController", $context) ? $context["modalController"] : (function () { throw new RuntimeError('Variable "modalController" does not exist.', 5, $this->source); })()), []);
        // line 6
        echo ">

    ";
        // line 8
        if (((array_key_exists("showButton", $context)) ? (_twig_default_filter((isset($context["showButton"]) || array_key_exists("showButton", $context) ? $context["showButton"] : (function () { throw new RuntimeError('Variable "showButton" does not exist.', 8, $this->source); })()), false)) : (false))) {
            // line 9
            echo "        <button ";
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction((isset($context["modalController"]) || array_key_exists("modalController", $context) ? $context["modalController"] : (function () { throw new RuntimeError('Variable "modalController" does not exist.', 9, $this->source); })()), "openModal");
            echo "
                class=\"btn btn-primary btn-sm\"
        >";
            // line 11
            echo twig_escape_filter($this->env, ((array_key_exists("buttonLabel", $context)) ? (_twig_default_filter((isset($context["buttonLabel"]) || array_key_exists("buttonLabel", $context) ? $context["buttonLabel"] : (function () { throw new RuntimeError('Variable "buttonLabel" does not exist.', 11, $this->source); })()), "open modal")) : ("open modal")), "html", null, true);
            echo "
        </button>
    ";
        }
        // line 14
        echo "

    <div ";
        // line 16
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["modalController"]) || array_key_exists("modalController", $context) ? $context["modalController"] : (function () { throw new RuntimeError('Variable "modalController" does not exist.', 16, $this->source); })()), "modal");
        echo "  ";
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["aaController"]) || array_key_exists("aaController", $context) ? $context["aaController"] : (function () { throw new RuntimeError('Variable "aaController" does not exist.', 16, $this->source); })()), "modal");
        echo "
            class=\"modal fade\"
            tabindex=\"-1\"
            aria-hidden=\"true\"
    >
        <div class=\"modal-dialog ";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("modalClass", $context)) ? (_twig_default_filter((isset($context["modalClass"]) || array_key_exists("modalClass", $context) ? $context["modalClass"] : (function () { throw new RuntimeError('Variable "modalClass" does not exist.', 21, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("modalTitle", $context)) ? (_twig_default_filter((isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 24, $this->source); })()), "modal title??")) : ("modal title??")), "html", null, true);
        echo "</h5>
                    <button type=\"button\" class=\"btn-close\"
                            data-bs-dismiss=\"modal\"
                            aria-label=\"Close\">
                    </button>
                </div>

                <div class=\"modal-body\" ";
        // line 31
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["modalController"]) || array_key_exists("modalController", $context) ? $context["modalController"] : (function () { throw new RuntimeError('Variable "modalController" does not exist.', 31, $this->source); })()), "modalBody");
        echo "  ";
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["aaController"]) || array_key_exists("aaController", $context) ? $context["aaController"] : (function () { throw new RuntimeError('Variable "aaController" does not exist.', 31, $this->source); })()), "modalBody");
        echo " >
                    ";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("modalContent", $context)) ? (_twig_default_filter((isset($context["modalContent"]) || array_key_exists("modalContent", $context) ? $context["modalContent"] : (function () { throw new RuntimeError('Variable "modalContent" does not exist.', 32, $this->source); })()), "Loading...")) : ("Loading...")), "html", null, true);
        echo "
                </div>


                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\"
                            data-bs-dismiss=\"modal\">Cancel
                    </button>

                    Open <span class=\"fas fa-external-link-alt\"></span>
                    ";
        // line 43
        echo "                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"#\" ";
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusTarget((isset($context["modalController"]) || array_key_exists("modalController", $context) ? $context["modalController"] : (function () { throw new RuntimeError('Variable "modalController" does not exist.', 43, $this->source); })()), "openUrl");
        echo ">URL TO OPEN</a>
                    <button ";
        // line 44
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction((isset($context["modalController"]) || array_key_exists("modalController", $context) ? $context["modalController"] : (function () { throw new RuntimeError('Variable "modalController" does not exist.', 44, $this->source); })()), "open");
        echo " type=\"button\" class=\"btn btn-secondary\" >
                    </button>

                    <button type=\"button\" class=\"btn btn-primary\" ";
        // line 47
        echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction((isset($context["modalController"]) || array_key_exists("modalController", $context) ? $context["modalController"] : (function () { throw new RuntimeError('Variable "modalController" does not exist.', 47, $this->source); })()), "submitForm");
        echo ">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosGrid/_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  125 => 44,  120 => 43,  107 => 32,  101 => 31,  91 => 24,  85 => 21,  75 => 16,  71 => 14,  65 => 11,  59 => 9,  57 => 8,  53 => 6,  51 => 5,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% set modalController = modalController|default('modal-form') %} #}

<div id=\"modal_controller\"
        {{ stimulus_target(aaController, 'mc') }}
        {{ stimulus_controller(modalController, {
        }) }}>

    {% if showButton|default(false) %}
        <button {{ stimulus_action(modalController, 'openModal') }}
                class=\"btn btn-primary btn-sm\"
        >{{ buttonLabel|default('open modal') }}
        </button>
    {% endif %}


    <div {{ stimulus_target(modalController, 'modal') }}  {{ stimulus_target(aaController, 'modal')  }}
            class=\"modal fade\"
            tabindex=\"-1\"
            aria-hidden=\"true\"
    >
        <div class=\"modal-dialog {{ modalClass|default('') }}\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ modalTitle|default('modal title??') }}</h5>
                    <button type=\"button\" class=\"btn-close\"
                            data-bs-dismiss=\"modal\"
                            aria-label=\"Close\">
                    </button>
                </div>

                <div class=\"modal-body\" {{ stimulus_target(modalController, 'modalBody')  }}  {{ stimulus_target(aaController, 'modalBody') }} >
                    {{ modalContent|default('Loading...') }}
                </div>


                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\"
                            data-bs-dismiss=\"modal\">Cancel
                    </button>

                    Open <span class=\"fas fa-external-link-alt\"></span>
                    {#                        <span {{ stimulus_target(modalController, 'openUrl') }}>URL TO OPEN</span>#}
                    <a target=\"_blank\" class=\"btn btn-primary\" href=\"#\" {{ stimulus_target(modalController, 'openUrl') }}>URL TO OPEN</a>
                    <button {{ stimulus_action(modalController, 'open')}} type=\"button\" class=\"btn btn-secondary\" >
                    </button>

                    <button type=\"button\" class=\"btn btn-primary\" {{ stimulus_action(modalController, 'submitForm') }}>
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


", "@SurvosGrid/_modal.html.twig", "/home/tac/ca/survos/demo/dt-demo/vendor/survos/grid-bundle/templates/_modal.html.twig");
    }
}
