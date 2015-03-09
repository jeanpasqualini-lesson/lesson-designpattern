<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\More\ServiceLocator;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\More\ServiceLocator\DatabaseService;
use DesignPatterns\More\ServiceLocator\LogService;
use DesignPatterns\More\ServiceLocator\ServiceLocator;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $serviceLocator = new ServiceLocator();

        $serviceLog = new LogService();

        $databaseService = new DatabaseService();

        $serviceLocator->add("lol", get_class($serviceLocator));

        echo (class_implements(get_class($serviceLocator->get("lol"))) === class_implements(get_class($serviceLocator))) ? "oui" : "non";
    }
}