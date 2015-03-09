<?php

namespace Test\Creational\StaticFactory;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\StaticFactory\StaticFactory;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $types = array(
            "string",
            "number"
        );

        foreach($types as $type)
        {
            $obj = StaticFactory::factory($type);

            echo get_class($obj).PHP_EOL;
        }
    }
}