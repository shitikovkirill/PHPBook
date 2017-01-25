<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 0:33
 */

namespace PHP7_1\NullableTypes;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $my = new MyClass();

        $this->assertEquals('elePHPant', $my->testReturn1());
        $this->assertNull($my->testReturn2());

        $this->assertEquals('text', $my->test('text'));
        $this->assertNull($my->test(null));

        //$this->assertNull($my->test());
    }
}