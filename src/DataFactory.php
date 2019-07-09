<?php

namespace Incraigulous\DataFactories;


use Kumuwai\DataTransferObject\DTO;

class DataFactory
{
    public static $factories = [];

    static function registerPath($path) {
        $registrar = new Registrar();
        $registrar->registerPath($path);
    }

    /**
     * Register a factory.
     * @param $key
     * @param $data
     */
    static function define($key, $data)
    {
        self::$factories[$key] = new Factory($data);
    }

    /**
     * Make a factory or factories from a key.
     *
     * @param $key
     * @param int $number
     * @return DTO
     */
    static function make($key, $number = 1)
    {
        if ($number == 1) return self::$factories[$key]->make();

        $factories = [];
        for ($i = 1; $i <= $number; $i++) {
            $factories[] = self::$factories[$key]->make();
        }
        return $factories;
    }
}
