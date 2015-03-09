<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Structural\Proxy;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\More\Delegation\JuniorDeveloper;
use DesignPatterns\More\Delegation\TeamLead;
use DesignPatterns\Structural\Proxy\RecordProxy;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $proxy = new RecordProxy(null);

        $reflProxy = new \ReflectionClass($proxy);

        $reflInit = $reflProxy->getProperty("isDirty");

        $reflInit->setAccessible(true);

        echo "inited : ".(($reflInit->getValue($proxy)) ? "oui" : "non").PHP_EOL;

        $proxy->foo = "bar";

        // Proxy inited by interact with object data

        echo "inited : ".(($reflInit->getValue($proxy)) ? "oui" : "non").PHP_EOL;
    }
}