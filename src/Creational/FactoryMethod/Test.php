<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\FactoryMethod;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $type = array(
            FactoryMethod::CHEAP,
            FactoryMethod::FAST
        );

        $shop = array(
            new GermanFactory(),
            new ItalianFactory()
        );

        foreach($shop as $oneShop)
        {
            foreach($type as $oneType)
            {
                $vehicle = $oneShop->create($oneType);
                echo get_class($oneShop)." : ".$oneType." : ".get_class($vehicle).PHP_EOL;
            }
        }


    }
}