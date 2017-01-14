<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 13.01.17
 * Time: 22:51
 */

namespace PHP7\ErrorHandling;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $mathOperationsbj = new MathOperations();
        $this->assertEquals('Modulo by zero', $mathOperationsbj->doOperation());
    }
}