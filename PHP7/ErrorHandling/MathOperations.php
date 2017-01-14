<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 13.01.17
 * Time: 22:50
 */

namespace PHP7\ErrorHandling;


class MathOperations
{
    protected $n = 10;
// Try to get the Division by Zero error object and display as Exception
    public function doOperation(): string
    {
        try {
            $value = $this->n % 0;
            return $value;
        } catch (\DivisionByZeroError $e) {
            return $e->getMessage();
        }
    }
}