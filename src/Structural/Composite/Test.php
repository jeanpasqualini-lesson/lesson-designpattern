<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\Structural\Composite;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\More\Delegation\JuniorDeveloper;
use DesignPatterns\More\Delegation\TeamLead;
use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;
use DesignPatterns\Structural\Composite\TextElement;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $form = new Form();

        $form->addElement(new TextElement());
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement());
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $render = $form->render();

        echo $render.PHP_EOL;
    }
}