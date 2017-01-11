<?php

namespace Incraigulous\DataFactories;


class DataFactory
{
    public static $factories = [];

    static function define($key, $data)
    {
        self::$factories[$key] = new Factory($data);
    }

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
