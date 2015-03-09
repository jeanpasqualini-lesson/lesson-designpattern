<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Creational\Prototype;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use Test\TestInterface;

class Test implements TestInterface {

    private $time = array();

    public function describe()
    {

    }

    public function runTest()
    {
        $fooPrototype = new FooBookPrototype();

        echo "cloning".PHP_EOL;

        $this->time("cloning");

        for($i = 0 ; $i <= 5000; $i++)
        {
            $book = clone $fooPrototype;

            $book->setTitle("book n°".$i);
        }

        echo "time end : ".$this->time("cloning").PHP_EOL;

        echo "initialized".PHP_EOL;

        $this->time("init");

        for($i = 0; $i <= 5000; $i++)
        {
            $book = new FooBookPrototype();

            $book->setTitle("book n°".$i);
        }

        echo "time end : ".$this->time("init").PHP_EOL;
    }

    public function time($name)
    {
        if(isset($this->time[$name]))
        {
            return microtime(true) - $this->time[$name];
        }
        else
        {
            return $this->time[$name] = microtime(true);
        }
    }
}