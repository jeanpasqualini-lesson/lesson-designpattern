<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\Singleton;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Singleton\Singleton;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        Singleton::getInstance()->name = "une seule instance".PHP_EOL;

        echo Singleton::getInstance()->name.PHP_EOL;

        $refl = new \ReflectionClass(Singleton::getInstance());

        $reflConstruct = $refl->getConstructor();

        echo "constructor private : ".(($reflConstruct->isPrivate()) ? "oui" : "non").PHP_EOL;
    }
}