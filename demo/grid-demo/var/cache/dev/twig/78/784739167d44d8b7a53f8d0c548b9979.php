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

/* @SurvosMaker/skeleton/stimulus/table_controller.js.twig */
class __TwigTemplate_39e35edfd8d6d4c5f7b3adc52d0bff42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/stimulus/table_controller.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/stimulus/table_controller.js.twig"));

        // line 1
        echo "import {Controller} from \"@hotwired/stimulus\"
// import {SurvosDataTable} from 'survosdatatables';
import SurvosDataTable_controller from \"./SurvosDataTable_controller\";


// https://mikerogers.io/2020/06/07/how-to-interpolate-templates-in-stimulus
//
export default class extends SurvosDataTable_controller {

    static targets = [\"table\", \"option\", \"branch\", \"commits\", \"resourceTemplate\", \"messages\", \"debug\"]

    connect() {
        console.log(\"Connecting to \" + this.identifier + \", will call \" + this.apiCallValue);
        super.connect();
    }

    columns() {

        return [
            this.c({propertyName: 'id'}),
            this.c({propertyName: 'marking'}),
            this.actions({prefix: 'video_'}),
        ];
    }


}

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/stimulus/table_controller.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("import {Controller} from \"@hotwired/stimulus\"
// import {SurvosDataTable} from 'survosdatatables';
import SurvosDataTable_controller from \"./SurvosDataTable_controller\";


// https://mikerogers.io/2020/06/07/how-to-interpolate-templates-in-stimulus
//
export default class extends SurvosDataTable_controller {

    static targets = [\"table\", \"option\", \"branch\", \"commits\", \"resourceTemplate\", \"messages\", \"debug\"]

    connect() {
        console.log(\"Connecting to \" + this.identifier + \", will call \" + this.apiCallValue);
        super.connect();
    }

    columns() {

        return [
            this.c({propertyName: 'id'}),
            this.c({propertyName: 'marking'}),
            this.actions({prefix: 'video_'}),
        ];
    }


}

", "@SurvosMaker/skeleton/stimulus/table_controller.js.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/stimulus/table_controller.js.twig");
    }
}
