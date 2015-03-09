<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/9/15
 * Time: 8:48 AM
 */

namespace Test\Structural\Facade;


use DesignPatterns\Structural\Facade\BiosInterface;
use DesignPatterns\Structural\Facade\OsInterface;

class Bios implements BiosInterface {
    /**
     * execute the BIOS
     */
    public function execute()
    {
        echo "execute".PHP_EOL;
        // TODO: Implement execute() method.
    }

    /**
     * wait for halt
     */
    public function waitForKeyPress()
    {
        echo "waitForKeyPress".PHP_EOL;
        // TODO: Implement waitForKeyPress() method.
    }

    /**
     * launches the OS
     *
     * @param OsInterface $os
     */
    public function launch(OsInterface $os)
    {
        echo "launch".PHP_EOL;
        // TODO: Implement launch() method.
    }

    /**
     * power down BIOS
     */
    public function powerDown()
    {
        echo "powerDown".PHP_EOL;
        // TODO: Implement powerDown() method.
    }

}