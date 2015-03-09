<?php

define("ROOT_DIR", __DIR__);

require "../vendor/autoload.php";

spl_autoload_register(function($class)
{
   $file = str_replace(array("\\", "/"), DIRECTORY_SEPARATOR, __DIR__.DIRECTORY_SEPARATOR."other".DIRECTORY_SEPARATOR.$class.".php");


   if(file_exists($file)) require_once($file);
});

$tests = array(
    new \Test\Behavioral\ChainOfResponsibilities\Test(),
    new \Test\Behavioral\Command\Test(),
    new \Test\Behavioral\Iterator\Test(),
    new \Test\Behavioral\Mediator\Test(),
    new \Test\Behavioral\Memento\Test(),
    new \Test\Behavioral\NullObject\Test(),
    new \Test\Behavioral\Observer\Test(),
    new \Test\Behavioral\Specification\Test(),
    new \Test\Behavioral\State\Test(),
    new \Test\Behavioral\Strategy\Test(),
    new \Test\Behavioral\TemplateMethod\Test(),
    new \Test\Behavioral\Visitor\Test(),
    new \Test\Creational\AbstractFactory\Test(),
    new \Test\Creational\Builder\Test(),
    new \Test\Creational\FactoryMethod\Test(),
    new \Test\Creational\Multiton\Test(),
    new \Test\Creational\Pool\Test(),
    new \Test\Creational\Prototype\Test(),
    new \Test\Creational\SimpleFactory\Test(),
    new \Test\Creational\Singleton\Test(),
    new \Test\Creational\StaticFactory\Test(),
    new \Test\More\Delegation\Test(),
    new \Test\More\Repository\Test(),
    new \Test\More\ServiceLocator\Test(),
    new \Test\Structural\Adapter\Test(),
    new \Test\Structural\Composite\Test(),
    new \Test\Structural\DataMapper\Test(),
    new \Test\Structural\Decorator\Test(),
    new \Test\Structural\DependencyInjection\Test(),
    new \Test\Structural\Facade\Test(),
    new \Test\Structural\FluentInterface\Test(),
    new \Test\Structural\Proxy\Test(),
    new \Test\Structural\Registry\Test()
);

foreach($tests as $test)
{
    echo "=== ".get_class($test)." ===".PHP_EOL;

    if($test instanceof \Test\TestInterface)
    {
        $test->runTest();

        echo PHP_EOL;
    }
    else
    {
        echo "[SKIPPED] Test not implement interface TestInterface".PHP_EOL;
    }

}