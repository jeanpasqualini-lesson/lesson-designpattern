<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\More\Delegation;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\More\Delegation\JuniorDeveloper;
use DesignPatterns\More\Delegation\TeamLead;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $junior = new JuniorDeveloper();

        $teamLead = new TeamLead($junior);

        $teamLead->writeCode();

        echo "junior bad code : ".$junior->writeBadCode().PHP_EOL;
        echo "team lead code : ".$teamLead->writeCode().PHP_EOL;
    }
}