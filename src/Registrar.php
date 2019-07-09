<?php


namespace Incraigulous\DataFactories;


class Registrar
{
    public function registerPath($path)
    {
        foreach (glob($path) as $filename)
        {
            $factory = $this;
            include_once $filename;
        }
    }

    /**
     * Register a factory.
     * @param $key
     * @param $data
     */
    static function define($key, $data)
    {
        DataFactory::define($key, $data);
    }
}