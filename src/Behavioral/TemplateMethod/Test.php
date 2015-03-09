<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:25 AM
 */

namespace Test\Behavioral\TemplateMethod;

use DesignPatterns\Behavioral\TemplateMethod\BeachJourney;
use DesignPatterns\Behavioral\TemplateMethod\CityJourney;
use Test\Behavioral\TemplateMethod\Journey\GeekJourney;
use Test\TestInterface;

class Test implements TestInterface {
    
    public function describe()
    {
        // TODO: Implement describe() method.
    }


    public function runTest()
    {
        $journeys = array(
           new BeachJourney(),
           new CityJourney(),
           new GeekJourney()
        );

        foreach($journeys as $journey)
        {
            echo "===".get_class($journey)."===".PHP_EOL;

            $journey->takeATrip();

            echo PHP_EOL;
        }

        // TODO: Implement runTest() method.
    }

}