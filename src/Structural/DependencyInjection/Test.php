<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Structural\DependencyInjection;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\More\Delegation\JuniorDeveloper;
use DesignPatterns\More\Delegation\TeamLead;
use DesignPatterns\Structural\Decorator\RenderInJson;
use DesignPatterns\Structural\DependencyInjection\ArrayConfig;
use DesignPatterns\Structural\DependencyInjection\Connection;
use DesignPatterns\Structural\DependencyInjection\Tests\DependencyInjectionTest;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $refl = new \ReflectionClass(new ArrayConfig(array()));

        $source = include pathinfo($refl->getFileName(), PATHINFO_DIRNAME).DIRECTORY_SEPARATOR."Tests".DIRECTORY_SEPARATOR."config.php";

        $config = new ArrayConfig($source);

        $connection = new Connection($config);

        $connection->connect();

        echo $connection->getHost().PHP_EOL;
    }
}