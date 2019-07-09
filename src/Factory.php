<?php

namespace Incraigulous\DataFactories;

use Kumuwai\DataTransferObject\DTO;
use Faker\Factory as Faker;

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
     * @return array
     */
    public function make() {
        $closure = $this->closure;
        $faker = Faker::create();
        return $closure($faker);
    }
}
