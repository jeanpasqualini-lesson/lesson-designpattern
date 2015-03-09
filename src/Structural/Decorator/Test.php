<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Structural\Decorator;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\More\Delegation\JuniorDeveloper;
use DesignPatterns\More\Delegation\TeamLead;
use DesignPatterns\Structural\Decorator\RenderInJson;
use DesignPatterns\Structural\Decorator\RenderInXml;
use DesignPatterns\Structural\Decorator\Webservice;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
       $service = new Webservice(array(
           "foo" => "bar"
       ));

       $decorators = array(
            new RenderInJson($service),
            new RenderInXml($service)
       );

        foreach($decorators as $decorator)
        {
            echo get_class($decorator)." : ".$decorator->renderData().PHP_EOL;
        }
    }
}