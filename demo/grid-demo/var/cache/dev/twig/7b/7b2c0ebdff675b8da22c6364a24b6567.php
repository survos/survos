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

/* @SurvosMaker/skeleton/Workflow/Listener/WorkflowListener.php.tpl */
class __TwigTemplate_217dc38530aa78596da0c4128f921c1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Workflow/Listener/WorkflowListener.php.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Workflow/Listener/WorkflowListener.php.tpl"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

<?php use function Symfony\\Component\\String\\u; ?>


namespace App\\Workflow\\Listener;

use Symfony\\Component\\Workflow\\Event\\Event;
use Symfony\\Component\\Workflow\\Event\\GuardEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Psr\\Log\\LoggerInterface;
use <?= \$entity_full_class_name ?>;

/**
 * See all possible events in Symfony\\Component\\Workflow\\Workflow
 *
 * Symfony\\Component\\Workflow\\Event\\GuardEvent
 * state_machine.guard
 * state_machine.{workflow_name}.guard
 * state_machine.{workflow_name}.guard.{transition_name}
 *
 * Symfony\\Component\\Workflow\\Event\\Event
 * state_machine.transition #before transition
 * state_machine.{workflow_name}.transition
 * state_machine.{workflow_name}.transition.{transition_name}
 * state_machine.enter
 * state_machine.{workflow_name}.enter
 * state_machine.{workflow_name}.enter.{place_name}
 * state_machine.{workflow_name}.announce.{transition_name}
 * state_machine.leave
 * state_machine.{workflow_name}.leave.{place_name}
 */
class <?= \$shortClassName ?> implements EventSubscriberInterface
{

public function __construct(private LoggerInterface \$logger) {

}

private <?=  \$entityName ?> \$entity;
    public function onGuard(GuardEvent \$event)
    {
        \$transition = \$event->getTransition();

        /** @var <?= \$entityName ?> */ \$entity = \$event->getSubject();
        \$marking = \$event->getMarking();
        \$this->logger->info(\"onGuard\", [\$entity, \$transition, \$marking]);
//        \$event->setBlocked(true);
    }

    public function onTransition(Event \$event)
    {
        /** @var <?= \$entityName ?> */ \$entity = \$event->getSubject();
        \$transition = \$event->getTransition();
        \$marking = \$event->getMarking();
        \$this->logger->info(\"onTransition\", [\$entity, \$transition, \$marking]);
dd(\$transition, \$entity);

    }

    public function onEnterPlace(Event \$event)
    {
        \$entity = \$event->getSubject();
        \$transition = \$event->getTransition();
        \$marking = \$event->getMarking();
    }

public function onComplete(Event \$event)
{
/** @var <?= \$entityName ?> */ \$entity = \$event->getSubject();
\$transition = \$event->getTransition();
\$marking = \$event->getMarking();
}

    public function onLeavePlace(Event \$event)
    {
        \$entity = \$event->getSubject();
        \$transition = \$event->getTransition();
        \$marking = \$event->getMarking();
    }

    public static function getSubscribedEvents(): array
    {

<?php \$eventCodes = ['guard','transition','complete']; ?>

return [
        <?php foreach (\$eventCodes as \$eventSuffix) { ?>
'<?= sprintf('workflow.%s.%s', \$workflowName, \$eventSuffix) ?>' => 'on<?= u(\$eventSuffix)->title()->ascii() ?>',
<?php foreach (\$constantsMap as \$transitionName => \$transitionConstant) { ?>
            '<?= sprintf('workflow.%s.%s.', \$workflowName, \$eventSuffix) ?>'  . <?= \$entityName ?>::<?= \$transitionConstant ?> => 'on<?= u(\$eventSuffix)->title()->ascii() ?>',
        <?php } ?>

    <?php } ?>
];
}

}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/Workflow/Listener/WorkflowListener.php.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

<?php use function Symfony\\Component\\String\\u; ?>


namespace App\\Workflow\\Listener;

use Symfony\\Component\\Workflow\\Event\\Event;
use Symfony\\Component\\Workflow\\Event\\GuardEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Psr\\Log\\LoggerInterface;
use <?= \$entity_full_class_name ?>;

/**
 * See all possible events in Symfony\\Component\\Workflow\\Workflow
 *
 * Symfony\\Component\\Workflow\\Event\\GuardEvent
 * state_machine.guard
 * state_machine.{workflow_name}.guard
 * state_machine.{workflow_name}.guard.{transition_name}
 *
 * Symfony\\Component\\Workflow\\Event\\Event
 * state_machine.transition #before transition
 * state_machine.{workflow_name}.transition
 * state_machine.{workflow_name}.transition.{transition_name}
 * state_machine.enter
 * state_machine.{workflow_name}.enter
 * state_machine.{workflow_name}.enter.{place_name}
 * state_machine.{workflow_name}.announce.{transition_name}
 * state_machine.leave
 * state_machine.{workflow_name}.leave.{place_name}
 */
class <?= \$shortClassName ?> implements EventSubscriberInterface
{

public function __construct(private LoggerInterface \$logger) {

}

private <?=  \$entityName ?> \$entity;
    public function onGuard(GuardEvent \$event)
    {
        \$transition = \$event->getTransition();

        /** @var <?= \$entityName ?> */ \$entity = \$event->getSubject();
        \$marking = \$event->getMarking();
        \$this->logger->info(\"onGuard\", [\$entity, \$transition, \$marking]);
//        \$event->setBlocked(true);
    }

    public function onTransition(Event \$event)
    {
        /** @var <?= \$entityName ?> */ \$entity = \$event->getSubject();
        \$transition = \$event->getTransition();
        \$marking = \$event->getMarking();
        \$this->logger->info(\"onTransition\", [\$entity, \$transition, \$marking]);
dd(\$transition, \$entity);

    }

    public function onEnterPlace(Event \$event)
    {
        \$entity = \$event->getSubject();
        \$transition = \$event->getTransition();
        \$marking = \$event->getMarking();
    }

public function onComplete(Event \$event)
{
/** @var <?= \$entityName ?> */ \$entity = \$event->getSubject();
\$transition = \$event->getTransition();
\$marking = \$event->getMarking();
}

    public function onLeavePlace(Event \$event)
    {
        \$entity = \$event->getSubject();
        \$transition = \$event->getTransition();
        \$marking = \$event->getMarking();
    }

    public static function getSubscribedEvents(): array
    {

<?php \$eventCodes = ['guard','transition','complete']; ?>

return [
        <?php foreach (\$eventCodes as \$eventSuffix) { ?>
'<?= sprintf('workflow.%s.%s', \$workflowName, \$eventSuffix) ?>' => 'on<?= u(\$eventSuffix)->title()->ascii() ?>',
<?php foreach (\$constantsMap as \$transitionName => \$transitionConstant) { ?>
            '<?= sprintf('workflow.%s.%s.', \$workflowName, \$eventSuffix) ?>'  . <?= \$entityName ?>::<?= \$transitionConstant ?> => 'on<?= u(\$eventSuffix)->title()->ascii() ?>',
        <?php } ?>

    <?php } ?>
];
}

}
", "@SurvosMaker/skeleton/Workflow/Listener/WorkflowListener.php.tpl", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/Workflow/Listener/WorkflowListener.php.tpl");
    }
}
