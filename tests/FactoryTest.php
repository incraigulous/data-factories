<?php
namespace Tests;

use \Incraigulous\DataFactories\DataFactory;

class FactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testFactory() {
        DataFactory::registerPath(__DIR__.'/factories/*.php');

        $data = DataFactory::make('test-factory');

        $this->assertIsString($data['name']);
    }
}