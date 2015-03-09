<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 9:17 AM
 */
namespace Test\Behavioral\TemplateMethod\Journey;

use DesignPatterns\Behavioral\TemplateMethod\Journey;

class GeekJourney extends Journey {
    /**
     * This method must be implemented, this is the key-feature of this pattern
     */
    protected function enjoyVacation()
    {
        echo "Coding, eating, sleeping";
        // TODO: Implement enjoyVacation() method.
    }


}