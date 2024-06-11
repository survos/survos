<?php

namespace Survos\FlickrBundle\Metadata;

use Doctrine\ORM\Mapping as ORM;

trait FlickrUserTrait
{

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $flickrKey = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $flickrSecret = null;

    public function getFlickrSecret(): ?string
    {
        return $this->flickrSecret;
    }


    public function getFlickrKey(): ?string
    {
        return $this->flickrKey;
    }

    public function setFlickrKey(?string $flickrKey): static
    {
        $this->flickrKey = $flickrKey;

        return $this;
    }

    public function setFlickrSecret(?string $flickrSecret): static
    {
        $this->flickrSecret = $flickrSecret;

        return $this;
    }



}
