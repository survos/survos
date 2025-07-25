<?php

namespace Survos\WorkflowBundle\Service;

use Survos\WorkflowBundle\Attribute\Place;
use Survos\WorkflowBundle\Attribute\Transition;
use Survos\WorkflowBundle\Attribute\Workflow;
use Symfony\Config\FrameworkConfig;
class ConfigureFromAttributesService
{
    static public function configureFramework(string $workflowClass, FrameworkConfig $framework, array|string $supports)
    {

        $framework->ide('myide://open?url=file://%%f&line=%%l');
        $reflectionClass = new \ReflectionClass($workflowClass);
//        $workflow = $framework->workflows()->workflows($workflowClass);
        //
        $classAttributes = $reflectionClass->getAttributes();
        foreach ($classAttributes as $attribute) {
            if ($attribute->getName() === Workflow::class) {
                /** @var Workflow $attributeInstance */
                $attributeInstance = $attribute->newInstance();
                if (!$name = $attributeInstance->name) {
                    $name = $reflectionClass->getShortName();
                }
                $workflow = $framework->workflows()->workflows($name);
                $type = $attributeInstance->type;
                $initial = $attributeInstance->initial;

                $workflow
                    ->type($type)
                    ->supports($attributeInstance->supports)
                ;
            }
        }
        // entities are automatically created as shortName if no Workflow attribute
        if (empty($workflow)) {
            $type = 'state_machine';
            $name = $reflectionClass->getShortName();
            $workflow = $framework->workflows()->workflows($name);
            $workflow->supports($workflowClass);
            $initial = null; // first place, see below
        }

        $isStateMachine = ($type === 'state_machine');
        $workflow->markingStore()->property($isStateMachine ? 'marking' : 'currentPlaces');

        $workflow->auditTrail()->enabled(false);
        assert($workflow, "Workflow $workflowClass must have a #[Workflow] class attribute");
//        dd($workflow, __CLASS__);

        $constants = $reflectionClass->getConstants();
        $seen = [];
        foreach ($reflectionClass->getConstants() as $name => $constantValue) {
            $reflectionConstant = new \ReflectionClassConstant($workflowClass, $name);
            foreach ($reflectionConstant->getAttributes() as $attribute) {
                $instance = $attribute->newInstance();
                assert($reflectionConstant->getValue() == $constantValue);
                switch ($instance::class) {
                    case Place::class:
                        // check for initial, but more common is in the #[Workflow] attribute.
                        if ($instance->initial) {
                            if ($isStateMachine) {
                                assert(is_null($initial), "state machine $workflowClass has only one initial marking  " . $initial);
                                $initial = $constantValue; // $instance->initial;
                            }
                        }
                        $seen[] = $name;
                        $workflow->place()->name($constantValue) // the name of the place is the value of the constant
                            ->metadata($instance->metadata);
                        break;
                    case Transition::class:
                        $transition = $workflow->transition()
                            ->name($constantValue)
                            ->from($instance->from)
                            ->to($instance->to)
                            ->metadata($instance->metadata);
                        if ($instance->guard) {
                            $transition->guard($instance->guard);
                        }
                        break;
                    default:
                        assert(false, "not handled: " . $instance::class);
                }
            }
        }
        return;

        // shortcut to add all places of a certain pattern, if not already seen
        // this is defined in the workflow attribute
        foreach ($constants as $name => $constantValue) {
            // @todo: prefix?  Pattern match, e.g. a suffix?
            if (preg_match('/PLACE_/', $name)) {
                if (empty($firstPlace)) {
                    $firstPlace = $constantValue;
                }

//                if (!in_array($name, $seen)) {
//                    $workflow->place()->name($name);
//                }
            }
        }
        if (is_null($initial)) {
            $initial = $isStateMachine ? $firstPlace: [$firstPlace];
        }
//        if (is_array($initial)) dd($initial, $workflowClass);

//        $workflow->initialMarking($initial);
    }
}
