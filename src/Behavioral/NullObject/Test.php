<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:12 AM
 */

namespace Test\Behavioral\NullObject;

use DesignPatterns\Behavioral\NullObject\NullLogger;
use DesignPatterns\Behavioral\NullObject\PrintLogger;
use DesignPatterns\Behavioral\NullObject\Service;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $service = new Service(new PrintLogger());

        $service->doSomething();

        $service = new Service(new NullLogger());

        $service->doSomething();
    }
}