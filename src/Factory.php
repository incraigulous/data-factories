<?php

namespace Incraigulous\DataFactories;

use Kumuwai\DataTransferObject\DTO;

class Factory
{
    public $closure;

    function __construct($closure)
    {
        $this->closure = $closure;
    }

    public function make() {
        $closure = $this->closure;
        return new DTO($closure());
    }
}
