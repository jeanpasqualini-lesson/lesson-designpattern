<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/6/15
 * Time: 2:22 AM
 */

namespace Test\Behavioral\Observer;


class CustomObserver implements \SplObserver {

    public function update(\SplSubject $subject)
    {
        // This observer juste reaply notify

        $subject->detach($this);

        $subject->notify();
    }
}