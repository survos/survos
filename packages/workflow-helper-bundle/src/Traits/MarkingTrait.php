<?php

namespace Survos\WorkflowBundle\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Workflow\Transition;
use Symfony\Component\Workflow\WorkflowInterface;

use function Symfony\Component\String\u;

trait MarkingTrait
{
    #[ORM\Column(type: 'string', length: 32, nullable: true)]
    #[Groups(['transition', 'minimum', 'marking','searchable'])]
    private ?string $marking = null; // self::INITIAL_MARKING;

    private array $markingHistory = [];

    private ?\DateTime $lastTransitionTime = null;

    #[Groups(['transitions'])]
    private array $enabledTransitions = [];

    public function getMarkingData(WorkflowInterface $workflow, ?array $counts = null): array
    {
        return array_map(fn ($marking) =>
        array_merge([
            'marking' => $marking,
            'count' => $counts[$marking] ?? null,
        ], $workflow->getMetadataStore()->getPlaceMetadata($marking)), $workflow->getDefinition()->getPlaces());
    }

    public function getMarking(): ?string
    {
        return $this->marking;
    }

    /**
     *   Note : type must be 'method', see https://symfony.com/blog/new-in-symfony-4-3-workflow-improvements#added-a-context-to-workflow-apply
     *   get the context with $event->getContext();
     * @param string $marking
     */
    public function setMarking(?string $marking, $context = []): self
    {
        $this->marking = $marking;
        // not persisted!
        return $this;
    }

    public function getMarkingDisplay(): ?string
    {
        return $this->marking; // go through trans?  at least titleCase?
    }


    public function hasMarking(string $marking): bool
    {
        return $this->marking === $marking;
    }

    /**
     * @return array
     */
    public function getMarkingHistory()
    {
        return $this->markingHistory ?? [];
    }

    /**
     * @return self
     */
    public function setMarkingHistory(array $history)
    {
        $this->markingHistory = [];
        foreach ($history as $item) {
            $this->addMarkingHistoryEvent($item);
        }

        return $this;
    }

    public function addMarkingHistoryComment(?string $comment)
    {
        if ($comment) {
            $history = $this->getMarkingHistory();
            if ($lastEvent = array_pop($history)) {
                $lastEvent['comment'] = $comment;
                array_push($history, $lastEvent);
                $this->setMarkingHistory($history);
            }
        }
    }

    public function addMarkingHistoryEvent(array $data): self
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'timestamp', 'transition', 'froms', 'tos', 'loggedInMemberId',
        ])
            ->setDefaults([
                'comment' => '',
            ])
        ;
        $data = $resolver->resolve($data);
        $timestamp = $data['timestamp'];
        if ($timestamp instanceof \DateTimeInterface) {
            $data['timestamp'] = $timestamp->format('c');
        }
        $this->markingHistory[] = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getMarkingHistoryDisplay(): string
    {
        $text = '';
        foreach ($this->markingHistory as $h) {
            if ($text) {
                $text .= "\n";
            }
            $text .= sprintf(
                '%s (%s->%s): %s',
                $h['transition'],
                implode(',', $h['froms']),
                implode(',', $h['tos']),
                preg_replace('/\+00:?00$/', 'Z', $h['timestamp'])
            );
            if ($h['comment']) {
                $text .= ' [' . $h['comment'] . ']';
            }
        }

        return $text;
    }

    public function setLastTransitionTime(?\DateTime $lastTransitionTime): self
    {
        $this->lastTransitionTime = $lastTransitionTime;

        return $this;
    }

    public function getLastTransitionTime(): ?\DateTime
    {
        return $this->lastTransitionTime;
    }

    public function getWorkflowName(): string
    {
        if (defined($this::class . '::WORKFLOW')) {
            $name = constant($this::class . '::WORKFLOW');
        } else {
            $name = (new \ReflectionClass($this))->getShortName();
        }
        return strtolower($name);
        return $name;
        return get_class($this);
        // dd($name, __METHOD__);
        dd(get_class($this), __METHOD__);
    }

    public function setEnabledTransitions(array $enabledTransitions): self
    {
        // set by the doctrine postLoad listener
        $this->enabledTransitions = $enabledTransitions;
        return $this;
    }

    public function getEnabledTransitions(): ?array
    {
        return $this->enabledTransitions ?: [];
    }

    public function getEnabledTransitionCodes(): array
    {
        $enabled = $this->getEnabledTransitions();
        assert(is_array($this->getEnabledTransitions()));
        assert(array_is_list($enabled));
//        dump($enabled);
//        dd($this->getEnabledTransitions());
        return array_map(fn (Transition|string $transition) => is_string($transition) ? $transition : $transition->getName(), $this->getEnabledTransitions());
    }

    public function getFlowCode(): string
    {
        return strtolower((new \ReflectionClass($this))->getShortName());
    }

    public static function getFlowCodes($prefix = 'WORKFLOW')
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return array_filter($oClass->getConstants(), fn ($key) => $prefix ? u($key)->startsWith($prefix) : true, ARRAY_FILTER_USE_KEY);
    }

    public static function getConstants(?string $prefix = null)
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return array_filter($oClass->getConstants(), fn ($key) => $prefix ? u($key)->startsWith($prefix) : true, ARRAY_FILTER_USE_KEY);
    }
}
