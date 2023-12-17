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

/* @SurvosMaker/skeleton/bundle/composer.tpl.json */
class __TwigTemplate_dc339d34e04c698b688f4127b9a78768 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/bundle/composer.tpl.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/bundle/composer.tpl.json"));

        // line 1
        echo "{
  \"name\": \"<?= \$name ?>\",
  \"type\": \"symfony-bundle\",
  \"description\": \"\",
  \"keywords\": [\"symfony-ux\", \"symfony6\"],

  \"license\": \"MIT\",
  \"require\": {
    \"php\": \"^8.1\",
    \"symfony/config\": \"^6.1.0\",
    \"symfony/dependency-injection\": \"^6.1.0\",
    \"symfony/http-kernel\": \"^6.1.0\",
    \"twig/twig\": \"^3.4\"
  },
  \"autoload\": {
    \"psr-4\": {
      \"<?= \$vendor ?>\\\\<?= \$bundleName ?>\\\\\": \"src/\"
    }
  },
  \"require-dev\": {
    \"phpstan/phpstan\": \"^1.7\",
    \"symfony/browser-kit\": \"^6.1.0\",
    \"symfony/framework-bundle\": \"^6.1.0\",
    \"symfony/phpunit-bridge\": \"^6.1.0\",
    \"symfony/twig-bundle\": \"^6.1.0\",
    \"symfony/var-dumper\": \"^6.1.0\",
    \"symfony/webpack-encore-bundle\": \"^1.11\"
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/bundle/composer.tpl.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"<?= \$name ?>\",
  \"type\": \"symfony-bundle\",
  \"description\": \"\",
  \"keywords\": [\"symfony-ux\", \"symfony6\"],

  \"license\": \"MIT\",
  \"require\": {
    \"php\": \"^8.1\",
    \"symfony/config\": \"^6.1.0\",
    \"symfony/dependency-injection\": \"^6.1.0\",
    \"symfony/http-kernel\": \"^6.1.0\",
    \"twig/twig\": \"^3.4\"
  },
  \"autoload\": {
    \"psr-4\": {
      \"<?= \$vendor ?>\\\\<?= \$bundleName ?>\\\\\": \"src/\"
    }
  },
  \"require-dev\": {
    \"phpstan/phpstan\": \"^1.7\",
    \"symfony/browser-kit\": \"^6.1.0\",
    \"symfony/framework-bundle\": \"^6.1.0\",
    \"symfony/phpunit-bridge\": \"^6.1.0\",
    \"symfony/twig-bundle\": \"^6.1.0\",
    \"symfony/var-dumper\": \"^6.1.0\",
    \"symfony/webpack-encore-bundle\": \"^1.11\"
  }
}
", "@SurvosMaker/skeleton/bundle/composer.tpl.json", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/bundle/composer.tpl.json");
    }
}
