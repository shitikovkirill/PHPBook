<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 11.01.17
 * Time: 15:44
 */

namespace PHP7\ScalarType;


class Calculator
{
    public function sum(int ...$ints)
    {
        return array_sum($ints);
    }
}