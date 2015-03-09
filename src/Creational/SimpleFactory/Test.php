<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\SimpleFactory;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\SimpleFactory\ConcreteFactory;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $types = array(
            "bicycle",
            "other"
        );

        foreach($types as $type)
        {
            $factory = new ConcreteFactory();

            $vehicle = $factory->createVehicle($type);

            echo "type : ".get_class($vehicle).PHP_EOL;
        }
    }
}