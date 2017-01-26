<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 10:53
 */

namespace PHP7_1\NegativeString;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $char = "abcdef"[-2];
        $this->assertEquals('e', $char);
    }
}