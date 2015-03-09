<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\AbstractFactory;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $factories = array(
            new JsonFactory(),
            new HtmlFactory()
        );

        foreach($factories as $factory)
        {
            echo "=== ".get_class($factory)." ===".PHP_EOL;

            echo $factory->createText("un text")->render().PHP_EOL;
            echo $factory->createPicture("lol.png")->render().PHP_EOL;
        }
    }
}