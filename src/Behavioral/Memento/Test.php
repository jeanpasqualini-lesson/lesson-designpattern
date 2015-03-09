<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 9:46 AM
 */

namespace Test\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\Originator;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $originator = new Originator();

        $originator->setState("State1");

        $originator->setState("State2");

        $savedState = $originator->saveToMemento();

        $originator->setState("State3");

        $originator->restoreFromMemento($savedState);

        $reflection = new \ReflectionClass($originator);

        $property = $reflection->getProperty("state");

        $property->setAccessible(true);

        echo $property->getValue($originator);
    }
}