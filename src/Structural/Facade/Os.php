<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/9/15
 * Time: 8:47 AM
 */

namespace Test\Structural\Facade;


use DesignPatterns\Structural\Facade\OsInterface;

class Os implements OsInterface {
    /**
     * halt the OS
     */
    public function halt()
    {
        echo "halt".PHP_EOL;
        // TODO: Implement halt() method.
    }

}