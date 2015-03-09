<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:25 AM
 */

namespace Test\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\RolePrintVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use Test\TestInterface;

class Test implements TestInterface {
    
    public function describe()
    {
        // TODO: Implement describe() method.
    }


    public function runTest()
    {
        $roles = array(
            array(
                new User("Dominik"),
                "Role: User Dominik"
            ),
            array(
                new Group("Administrators"),
                "Role: Group: Administrators"
            )
        );

        $visitor = new RolePrintVisitor();

        $testRole = new TestRole();

        try {
            $testRole->accept($visitor);
        }
        catch(\InvalidArgumentException $e)
        {
            echo "testRole not accept visited by current visitor";

            echo PHP_EOL;
        }

        foreach($roles as $role)
        {
            echo "=== ".$role[1]." ===".PHP_EOL;

            echo $role[0]->accept($visitor).PHP_EOL;
        }

        // TODO: Implement runTest() method.
    }

}

class TestRole extends Role
{

}