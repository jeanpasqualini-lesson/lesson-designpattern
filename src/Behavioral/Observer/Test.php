<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:19 AM
 */

namespace Test\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\User;
use DesignPatterns\Behavioral\Observer\UserObserver;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $user = new User();

        $user->attach(new UserObserver());

        $user->attach(new CustomObserver());

        $user->notify();
    }
}