<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 6:36 AM
 */

namespace Test\Behavioral\ChainOfResponsibilities;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible\FastStorage;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible\SlowStorage;
use Test\TestInterface;

class Test implements TestInterface
{
    public function describe()
    {

    }

    public function runTest()
    {
        $request = new Request();

        $request->verb = "get";

        $handler = new SlowStorage(array(
            "slow" => "slow"
        ));

        $handler->append(new FastStorage(array(
            "fast" => "fast"
        )));

        $keys = array("slow", "fast");

        foreach($keys as $key)
        {
            $request->key = $key;

            $handler->handle($request);

            echo "response : ".$request->response.PHP_EOL;

            echo "class : ".$request->forDebugOnly.PHP_EOL;
        }


    }
}