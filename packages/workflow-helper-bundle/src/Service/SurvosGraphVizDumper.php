<?php
namespace Survos\WorkflowBundle\Service;

use Symfony\Component\Workflow\Definition;
use Symfony\Component\Workflow\Dumper\GraphvizDumper;
use Symfony\Component\Workflow\Marking;

class SurvosGraphVizDumper extends GraphvizDumper
{
    private array $dumpOptions = [];

    protected static array $defaultOptions = [
        'graph' => ['ratio' => 'compress', 'rankdir' => 'TB'],
        'node'  => [
            'fontsize'  => '10',
            'fontname'  => 'Helvetica',
            'color'     => '#333333',
            'style'     => 'rounded,filled',
            'fixedsize' => 'false',
            'width'     => '1',
        ],
        'edge'  => [
            'fontsize'  => '8',
            'fontname'  => 'Helvetica',
            'color'     => '#333333',
            'arrowhead' => 'normal',
            'arrowsize' => '0.5',
        ],
        'place'       => ['shape' => 'oval', 'fillcolor' => 'lightblue'],
        'transition'  => ['shape' => 'box', 'fillcolor' => 'lightyellow'],
    ];

    public function dump(Definition $definition, ?Marking $marking = null, array $options = []): string
    {
        $options = array_replace_recursive(self::$defaultOptions, $options);
        $this->dumpOptions = $options;
        $withMetadata = $options['with-metadata'] ?? true;

        $places      = $this->findPlaces($definition, $withMetadata, $marking);
        $transitions = $this->findTransitions($definition, $withMetadata);
        $edges       = $this->findEdges($definition);
        $label       = $this->formatLabel($definition, $withMetadata, $options);

        $dot  = $this->startDot($options, $label)
            // Places cluster
            . "  subgraph cluster_places {\n"
            . "    rank=source;\n"
            . "    node [" . $this->addOptions(array_merge($options['node'], $options['place'])) . "];\n"
            . $this->addPlaces($places, $withMetadata)
            . "  }\n"
            // Transitions cluster
            . "  subgraph cluster_transitions {\n"
            . "    rank=same;\n"
            . "    node [" . $this->addOptions(array_merge($options['node'], $options['transition'])) . "];\n"
            . $this->addTransitions($transitions, $withMetadata)
            . "  }\n"
            . $this->addEdges($edges)
            . $this->endDot();

        return $dot;
    }

    protected function findPlaces(Definition $definition, bool $withMetadata, ?Marking $marking = null): array
    {
        $options = $this->dumpOptions;
        $store   = $definition->getMetadataStore();
        $places  = [];

        foreach ($definition->getPlaces() as $place) {
            $attrs = [
                'shape'     => $options['place']['shape'],
                'style'     => 'filled',
                'fillcolor' => $store->getMetadata('bg_color', $place) ?? $options['place']['fillcolor'],
            ];
            if (in_array($place, $definition->getInitialPlaces(), true)) {
                $attrs['penwidth'] = '2';
            }
            if ($marking?->has($place)) {
                $attrs['color']    = '#d9534f';
                $attrs['penwidth'] = '2';
            }

            // Highlight terminal places with high contrast
            $hasOutgoing = false;
            foreach ($definition->getTransitions() as $t) {
                if (in_array($place, $t->getFroms(), true)) {
                    $hasOutgoing = true;
                    break;
                }
            }
            if (!$hasOutgoing) {
                $attrs['fillcolor'] = '#2C3E50';
                $attrs['fontcolor'] = '#ffffff';
            }
            if ($withMetadata) {
                $attrs['metadata'] = $store->getPlaceMetadata($place);
            }

            $label = $store->getMetadata('label', $place) ?? $place;
            if (isset($attrs['metadata']['label'])) {
                unset($attrs['metadata']['label']);
            }

            $places[$place] = ['attributes' => $attrs, 'label' => $label];
        }

        return $places;
    }

    protected function findTransitions(Definition $definition, bool $withMetadata): array
    {
        $options     = $this->dumpOptions;
        $store       = $definition->getMetadataStore();
        $transitions = [];

        foreach ($definition->getTransitions() as $i => $transition) {
            $attrs = [
                'shape'     => $options['transition']['shape'],
                'style'     => 'filled',
                'fillcolor' => $store->getMetadata('bg_color', $transition) ?? $options['transition']['fillcolor'],
            ];
            $name = $store->getMetadata('label', $transition) ?? $transition->getName();
            $metadata = $withMetadata ? $store->getTransitionMetadata($transition) : [];
            unset($metadata['label']);

            $transitions[$i] = ['attributes' => $attrs, 'name' => $name, 'metadata' => $metadata];
        }

        return $transitions;
    }

    protected function findEdges(Definition $definition): array
    {
        $store = $definition->getMetadataStore();
        $edges = [];

        foreach ($definition->getTransitions() as $i => $transition) {
            $label = $store->getMetadata('label', $transition) ?? $transition->getName();
            foreach ($transition->getFroms() as $from) {
                $edges[] = ['from' => $from, 'to' => $label, 'transition' => $i];
            }
            foreach ($transition->getTos() as $to) {
                $edges[] = ['from' => $label, 'to' => $to, 'transition' => $i];
            }
        }

        return $edges;
    }

    protected function addPlaces(array $places, float $withMetadata): string
    {
        $code = '';
        foreach ($places as $id => $place) {
            $dotId = $this->dotize($id);
            $label = $this->escape($place['label']);
            if ($withMetadata && !empty($place['attributes']['metadata'])) {
                $label = sprintf('<<B>%s</B>%s>', $this->escape($place['label']), $this->addMetadata($place['attributes']['metadata']));
                unset($place['attributes']['metadata']);
            } else {
                $label = sprintf('"%s"', $label);
            }
            $code .= sprintf("    place_%s [label=%s %s];\n", $dotId, $label, $this->addAttributes($place['attributes']));
        }
        return $code;
    }

    protected function addTransitions(array $transitions, bool $withMetadata): string
    {
        $code = '';
        foreach ($transitions as $i => $tran) {
            $dotId = $this->dotize((string)$i);
            $label = $this->escape($tran['name']);
            if ($withMetadata && !empty($tran['metadata'])) {
                $label = sprintf('<<B>%s</B>%s>', $this->escape($tran['name']), $this->addMetadata($tran['metadata']));
            } else {
                $label = sprintf('"%s"', $label);
            }
            $code .= sprintf("    transition_%s [label=%s %s];\n", $dotId, $label, $this->addAttributes($tran['attributes']));
        }
        return $code;
    }

    protected function addEdges(array $edges): string
    {
        $code = '';
        foreach ($edges as $edge) {
            $fromId = $this->dotize($edge['from']);
            $toId   = $this->dotize($edge['to']);
            $code .= sprintf("  place_%s -> transition_%s [style=\"solid\"];\n", $fromId, $edge['transition']);
            $code .= sprintf("  transition_%s -> place_%s [style=\"solid\"];\n", $edge['transition'], $toId);
        }
        return $code;
    }

    protected function startDot(array $options, string $label): string
    {
        $graphOpts = $this->addOptions($options['graph']);
        $nodeOpts  = $this->addOptions($options['node']);
        $edgeOpts  = $this->addOptions($options['edge']);
        $labelCmd  = $label && $label !== '<>' ? "  label=$label\n" : '';
        return "digraph workflow {\n  $graphOpts\n$labelCmd  node [$nodeOpts];\n  edge [$edgeOpts];\n\n";
    }

    protected function endDot(): string
    {
        return "}\n";
    }

    protected function formatLabel(Definition $definition, string $withMetadata, array $options): string
    {
        $current = $options['label'] ?? '';
        $store   = $definition->getMetadataStore()->getWorkflowMetadata();
        if (!$withMetadata) {
            return sprintf('"%s"', $this->escape($current));
        }
        if ($current === '') {
            return sprintf('<%s>', $this->addMetadata($store, false));
        }
        return sprintf('<<B>%s</B>%s>', $this->escape($current), $this->addMetadata($store));
    }

    protected function escape(string|bool|null $value): string
    {
        if (!is_string($value)) {
            return '';
        }
        $value = htmlspecialchars($value, ENT_QUOTES);
        return addslashes(wordwrap($value, 20, "<BR/>", true));
    }

    protected function addAttributes(array $attributes): string
    {
        $parts = [];
        foreach ($attributes as $k => $v) {
            $parts[] = sprintf('%s="%s"', $k, $this->escape((string)$v));
        }
        return $parts ? implode(' ', $parts) : '';
    }

    protected function addOptions(array $options): string
    {
        $parts = [];
        foreach ($options as $k => $v) {
            $parts[] = sprintf('%s="%s"', $k, $v);
        }
        return implode(' ', $parts);
    }

    protected function addMetadata(array $metadata, bool $lineBreakFirstIfNotEmpty = true): string
    {
        $code  = [];
        $first = !$lineBreakFirstIfNotEmpty;
        foreach ($metadata as $key => $val) {
            if ($key === 'bg_color') {
                continue;
            }
            $prefix = $first ? '' : '<BR/>';
            // Handle array values as comma-delimited list
            if (is_array($val)) {
                $val = implode(', ', $val);
            }
            // Style description and guard differently
            switch ($key) {
                case 'description':
                    $code[] = sprintf('%s<I>%s</I>', $prefix, $this->escape((string)$val));
                    break;
                case 'guard':
                    $code[] = sprintf('%s<U>%s</U>', $prefix, $this->escape((string)$val));
                    break;
                default:
                    $code[] = sprintf('%s%s: %s', $prefix, $this->escape($key), $this->escape((string)$val));
            }
            $first = false;
        }
        return $code ? implode('', $code) : '';
    }

    protected function dotize(string $id): string
    {
        return (string) preg_replace('/[^A-Za-z0-9_]/', '_', $id);
    }
}
