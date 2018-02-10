<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.01.17
 * Time: 15:52
 */

namespace ZendBook\MyClass\Countable;


class TestCountable implements \Countable
{

    protected $_myCount = 3;

    public function count()
    {
        return $this->_myCount;
    }

}