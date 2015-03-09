<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/9/15
 * Time: 7:44 AM
 */

namespace Test\Structural\DataMapper;


use DesignPatterns\Structural\DataMapper\DBAL;

class Adapter implements DBAL {
    private $user = array();

    public function insert($data)
    {
        $this->user = $data;
    }

    public function find($id)
    {
        return new \ArrayIterator(array(array_merge($this->user, array(
            "userid" => 1
        ))));
    }

    public function update($data, array $where = array())
    {

    }


}