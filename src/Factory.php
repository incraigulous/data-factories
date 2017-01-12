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

    /**
     * Returns a DTO object to use as the factory.
     *
     * @return DTO
     */
    public function make() {
        $closure = $this->closure;
        return new DTO($closure());
    }
}
