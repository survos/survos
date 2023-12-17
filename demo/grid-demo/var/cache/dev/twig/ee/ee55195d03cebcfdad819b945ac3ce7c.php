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

/* @SurvosMaker/skeleton/Request/ParamConverter/ParamConverter.tpl.php */
class __TwigTemplate_081db3e494fbfa58b3f8ac9aecf7b6dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Request/ParamConverter/ParamConverter.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Request/ParamConverter/ParamConverter.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>
declare(strict_types=1);

namespace <?= \$namespace ?>;

use <?= \$entity_full_class_name ?>;
<?php if (isset(\$repository_full_class_name)): ?>
    use <?= \$repository_full_class_name ?>;
<?php endif ?>

use Doctrine\\Persistence\\ManagerRegistry;
use Exception;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;

class <?= \$shortClassName ?> implements ParamConverterInterface
{
    public function __construct(private ManagerRegistry \$registry)
    {
    }

    /**
     * {@inheritdoc}
     *
     * Check, if object supported by our converter
     */
    public function supports(ParamConverter \$configuration): bool
    {
        return <?= \$entity_class_name ?>::class == \$configuration->getClass();
    }

    /**
     * {@inheritdoc}
     *
     * Applies converting
     *
     * @throws \\InvalidArgumentException When route attributes are missing
     * @throws NotFoundHttpException     When object not found
     * @throws Exception
     */
    public function apply(Request \$request, ParamConverter \$configuration): bool
    {
        \$params = \$request->attributes->get('_route_params');

//        if (isset(\$params['<?= \$entity_unique_name ?>']) && (\$<?= \$entity_unique_name ?> = \$request->attributes->get('<?= \$entity_unique_name ?>')))

        \$<?= \$entity_unique_name ?> = \$request->attributes->get('<?= \$entity_unique_name ?>');
        if (\$<?= \$entity_unique_name ?> === 'undefined') {
            throw new Exception(\"Invalid <?= \$entity_unique_name ?> \" . \$<?= \$entity_unique_name ?>);
        }

        // Check, if route attributes exists
        if (null === \$<?= \$entity_unique_name ?> ) {
            if (!isset(\$params['<?= \$entity_unique_name ?>'])) {
                return false; // no <?= \$entity_unique_name ?> in the route, so leave.  Could throw an exception.
            }
        }

        // Get actual entity manager for class.  We can also pass it in, but that won't work for the doctrine tree extension.
        \$repository = \$this->registry->getManagerForClass(\$configuration->getClass())?->getRepository(\$configuration->getClass());

        // Try to find the entity
        if (!\$<?= \$entity_var_name ?> = \$repository->findOneBy(['id' => \$<?= \$entity_unique_name ?>])) {
            throw new NotFoundHttpException(sprintf('%s %s object not found.', \$<?= \$entity_unique_name ?>, \$configuration->getClass()));
        }

        // Map found <?= \$entity_var_name ?> to the route's parameter
        \$request->attributes->set(\$configuration->getName(), \$<?= \$entity_var_name ?>);
        return true;
    }

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/Request/ParamConverter/ParamConverter.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>
declare(strict_types=1);

namespace <?= \$namespace ?>;

use <?= \$entity_full_class_name ?>;
<?php if (isset(\$repository_full_class_name)): ?>
    use <?= \$repository_full_class_name ?>;
<?php endif ?>

use Doctrine\\Persistence\\ManagerRegistry;
use Exception;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;

class <?= \$shortClassName ?> implements ParamConverterInterface
{
    public function __construct(private ManagerRegistry \$registry)
    {
    }

    /**
     * {@inheritdoc}
     *
     * Check, if object supported by our converter
     */
    public function supports(ParamConverter \$configuration): bool
    {
        return <?= \$entity_class_name ?>::class == \$configuration->getClass();
    }

    /**
     * {@inheritdoc}
     *
     * Applies converting
     *
     * @throws \\InvalidArgumentException When route attributes are missing
     * @throws NotFoundHttpException     When object not found
     * @throws Exception
     */
    public function apply(Request \$request, ParamConverter \$configuration): bool
    {
        \$params = \$request->attributes->get('_route_params');

//        if (isset(\$params['<?= \$entity_unique_name ?>']) && (\$<?= \$entity_unique_name ?> = \$request->attributes->get('<?= \$entity_unique_name ?>')))

        \$<?= \$entity_unique_name ?> = \$request->attributes->get('<?= \$entity_unique_name ?>');
        if (\$<?= \$entity_unique_name ?> === 'undefined') {
            throw new Exception(\"Invalid <?= \$entity_unique_name ?> \" . \$<?= \$entity_unique_name ?>);
        }

        // Check, if route attributes exists
        if (null === \$<?= \$entity_unique_name ?> ) {
            if (!isset(\$params['<?= \$entity_unique_name ?>'])) {
                return false; // no <?= \$entity_unique_name ?> in the route, so leave.  Could throw an exception.
            }
        }

        // Get actual entity manager for class.  We can also pass it in, but that won't work for the doctrine tree extension.
        \$repository = \$this->registry->getManagerForClass(\$configuration->getClass())?->getRepository(\$configuration->getClass());

        // Try to find the entity
        if (!\$<?= \$entity_var_name ?> = \$repository->findOneBy(['id' => \$<?= \$entity_unique_name ?>])) {
            throw new NotFoundHttpException(sprintf('%s %s object not found.', \$<?= \$entity_unique_name ?>, \$configuration->getClass()));
        }

        // Map found <?= \$entity_var_name ?> to the route's parameter
        \$request->attributes->set(\$configuration->getName(), \$<?= \$entity_var_name ?>);
        return true;
    }

}
", "@SurvosMaker/skeleton/Request/ParamConverter/ParamConverter.tpl.php", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/Request/ParamConverter/ParamConverter.tpl.php");
    }
}
