<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\Multiton;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Multiton\Multiton;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $instance1 = Multiton::getInstance(Multiton::INSTANCE_1);

        $instance1->name = "premiere instance";

        $instance2 = Multiton::getInstance(Multiton::INSTANCE_2);

        $instance2->name = "seconde instance";

        echo Multiton::INSTANCE_1." : ".Multiton::getInstance(Multiton::INSTANCE_1)->name.PHP_EOL;
        echo Multiton::INSTANCE_2." : ".Multiton::getInstance(Multiton::INSTANCE_2)->name.PHP_EOL;
    }
}