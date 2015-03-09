<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\Pool;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Pool\Pool;
use DesignPatterns\Creational\Pool\Processor;
use Test\TestInterface;

class Test implements TestInterface {

    public function __construct()
    {
        echo "worker initiliazed".PHP_EOL;
    }

    public function describe()
    {

    }

    public function runTest()
    {
        $processor = new Processor(new Pool(__CLASS__));

        $processor->process("lol");
        $processor->process("lol");
        $processor->process("lol");
        $processor->process("lol");
        $processor->process("lol");
        $processor->process("lol");

    }

    public function run($image, array $callback)
    {
        echo "image: ".$image.PHP_EOL;

        // Notify the processor the working finish
        call_user_func($callback, $this);
    }
}