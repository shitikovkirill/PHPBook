<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 22.01.17
 * Time: 19:45
 */

namespace UnitTests\Mock;


abstract class AbstractClass
{
    public function concreteMethod()
    {
        return $this->abstractMethod();
    }

    public abstract function abstractMethod();
}