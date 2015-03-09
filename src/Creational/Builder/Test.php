<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\Builder;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $builders = array(
            new CarBuilder(),
            new BikeBuilder()
        );

        $director = new Director();

        foreach($builders as $builder)
        {
            echo "=== ".get_class($builder)." ===".PHP_EOL;

            // Directory builder use complex vehicle builder
            $vehicle = $director->build($builder);

            $reflVehicle = new \ReflectionClass($vehicle);

            $reflParts = $reflVehicle->getProperty("data");

            $reflParts->setAccessible(true);

            $parts = $reflParts->getValue($vehicle);

            foreach($parts as $name => $part)
            {
                echo "part ".$name." : ".get_class($part).PHP_EOL;
            }
        }
    }
}