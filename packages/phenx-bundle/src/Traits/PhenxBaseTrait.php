<?php

namespace Survos\PhenxBundle\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;
use function Symfony\Component\String\u;

trait PhenxBaseTrait
{
    /**
     * @var int
     *
     * @Groups({"Default"})
     */
    #[ORM\Column(name: 'phenx_id', type: 'integer')]
    #[ORM\Id]
    private $phenxId;


    /**
     * @var string
     */
    #[ORM\Column(name: 'code', type: 'string', length: 32, unique: true, nullable: true)]
    private $code;

    /**
     * @var string
     */
    #[ORM\Column(name: 'html_page', type: 'text', nullable: true)]
    private $htmlPage;

    /**
     * @var array
     */
    #[ORM\Column(name: 'metadata', type: 'json_array', nullable: true)]
    private $metadata;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $title;

    /**
     * @return int
     */
    public function getPhenxId(): int
    {
        return $this->phenxId;
    }

    /**
     * @param int $phenxId
     */
    public function setPhenxId(int $phenxId)
    {
        $this->phenxId = $phenxId;
    }

    /**
     * Set htmlPage
     *
     * @param string $htmlPage
     *
     */
    public function setHtmlPage($htmlPage)
    {
        $this->htmlPage = u($htmlPage)->toString();

        return $this;
    }

    /**
     * Get htmlPage
     *
     * @return string
     */
    public function getHtmlPage()
    {
        return $this->htmlPage;
    }

    /**
     * Set metadata
     *
     * @param array $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @param string $field
     *
     * @return array
     */
    public function getMeta($field, $maxLength = 0)
    {
        $value = $this->metadata[$field] ?? null;
        if ($maxLength) {
            $value = substr($value, 0, $maxLength);
        }

        return $value;
    }

    public function getSourceUrl()
    {
        static $base = 'https://www.phenxtoolkit.org/index.php';
        $base_url = [
            'measure'  => $base."?pageLink=browse.protocols&id=",
            'protocol' => $base."?pageLink=browse.protocoldetails&id=",
        ];

        return $base_url[$this->getType()].$this->getPhenxId();
    }



    /**
     * Get metadata
     *
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function getRouteParams(): array
    {
        return ['phenxId' => $this->getPhenxId()];
    }

}
