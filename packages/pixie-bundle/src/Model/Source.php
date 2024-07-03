<?php

namespace Survos\PixieBundle\Model;

class Source
{
    public function __construct(
        public string $dir,
        public string $locale = 'en',
    )
    {

    }

}
