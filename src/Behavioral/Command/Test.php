<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Behavioral\Command;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $invoker = new Invoker();

        $invoker->setCommand(new HelloCommand(new Receiver()));

        $invoker->run();
    }
}