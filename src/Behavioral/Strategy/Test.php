<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:25 AM
 */

namespace Test\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\DateComparator;
use DesignPatterns\Behavioral\Strategy\IdComparator;
use DesignPatterns\Behavioral\Strategy\ObjectCollection;
use Test\TestInterface;

class Test implements TestInterface {
    
    public function describe()
    {
        // TODO: Implement describe() method.
    }


    public function runTest()
    {
        $data = array(
            array(
                "id" => 3,
                "date" => "@".(time() + 2)
            ),
            array(
                "id" => 1,
                "date" => "@".(time() + 1)
            ),
            array(
                "id" => 2,
                "date" => "@".(time() + 3)
            )
        );

        // Camparator strategy

        $collection = new ObjectCollection($data);

        $collection->setComparator(new IdComparator());

        echo print_r($collection->sort(), true);

        $collection->setComparator(new DateComparator());

        echo print_r($collection->sort(), true);


        // TODO: Implement runTest() method.
    }

}