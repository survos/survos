<?php

namespace PhenxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variable
 */
#[ORM\Entity(repositoryClass: \Survos\PhenxBundle\Repository\VariableRepository::class)]
#[ORM\Table(name: 'variable')]
class Variable
{
//    use ExtraTrait;
    //    use OrderIdxTrait;
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 64)]
    private $varname;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 32)]
    private $type;

    /**
     * @var PhenxProtocol
     */
    #[ORM\ManyToOne(targetEntity: \PhenxProtocol::class, inversedBy: 'variables', fetch: 'EAGER')]
    #[ORM\JoinColumn(name: 'protocol_id', referencedColumnName: 'phenx_id', nullable: false, onDelete: 'CASCADE')]
    private $protocol;

    /**
     * @var string
     */
    #[ORM\Column(name: 'question_text', type: 'text')]
    private $questionText;

    /**
     * @var text
     */
    #[ORM\Column(type: 'text')]
    private $description;

    /**
     * @var array
     */
    #[ORM\Column(name: 'choices', type: 'json_array', nullable: true)]
    private $choices;

    /**
     * @var string
     */
    #[ORM\Column(type: 'text', nullable: true)]
    private $choiceFormula;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set varname
     *
     * @param string $varname
     *
     * @return Variable
     */
    public function setVarname($varname)
    {
        $this->varname = $varname;

        return $this;
    }

    /**
     * Get varname
     *
     * @return string
     */
    public function getVarname()
    {
        return $this->varname;
    }

    /**
     * Set protocol
     *
     * @param \stdClass $protocol
     *
     * @return Variable
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Get protocol
     *
     * @return \stdClass
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Set questionText
     *
     * @param string $questionText
     *
     * @return Variable
     */
    public function setQuestionText($questionText)
    {
        $this->questionText = $questionText;

        return $this;
    }

    /**
     * Get questionText
     *
     * @return string
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * Set choices
     *
     * @param array $choices
     *
     * @return Variable
     */
    public function setChoices($choices)
    {
        $this->choices = $choices;

        return $this;
    }

    /**
     * Get choices
     *
     * @return array
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Variable
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Variable
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set choiceFormula.
     *
     * @param string|null $choiceFormula
     *
     * @return Variable
     */
    public function setChoiceFormula($choiceFormula = null)
    {
        $this->choiceFormula = $choiceFormula;

        return $this;
    }

    /**
     * Get choiceFormula.
     *
     * @return string|null
     */
    public function getChoiceFormula()
    {
        return $this->choiceFormula;
    }

    public function __toString()
    {
        return $this->getVarname();
    }
}
