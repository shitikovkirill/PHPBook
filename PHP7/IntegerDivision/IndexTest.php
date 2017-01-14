<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 13.01.17
 * Time: 23:03
 */

namespace PHP7\IntegerDivision;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $value = intdiv(11, 3);
        $this->assertEquals(3, $value);
    }
}