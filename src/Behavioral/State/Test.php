<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:25 AM
 */

namespace Test\Behavioral\State;

use DesignPatterns\Behavioral\State\CreateOrder;
use DesignPatterns\Behavioral\State\OrderController;
use DesignPatterns\Behavioral\State\ShippingOrder;
use Test\TestInterface;

class Test implements TestInterface {
    
    public function describe()
    {
        // TODO: Implement describe() method.
    }


    public function runTest()
    {
        // TODO: Implement runTest() method.

        $shippingOrder = $this->factory(array(
            "status" => "shipping"
        ));

        $createdOrder = $this->factory(array(
            "status" => "created"
        ));

        $orders = array(
            $shippingOrder,
            $createdOrder
        );

        foreach($orders as $order)
        {
            echo get_class($order)." : ".implode(",", class_implements(get_class($order))).PHP_EOL;

            $methods = get_class_methods(get_class($order));

            /**
            foreach($methods as $method)
            {
                if($method[0] == "_") continue;

                echo $method." : ";

                try
                {
                    @call_user_func_array(array($order, $method), array());
                }
                catch(\Exception $e)
                {
                    echo $e->getMessage();
                }

                echo PHP_EOL;
            }
             */

        }

    }

    public function validate($data)
    {
        $keys = array("status");

        return $keys === array_keys($data);
    }

    public function factory(array $data = array())
    {
        if(!$this->validate($data)) throw new \Exception("not validate data");

        switch($data["status"])
        {
            case "shipping":
                    return new ShippingOrder($data);
                break;

            case "created":
                    return new CreateOrder($data);
                break;
        }

        throw new \Exception("not validate status");
    }

}