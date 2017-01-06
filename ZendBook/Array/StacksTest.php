<?php

namespace ZendBook\WorkWithArray;
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 19.12.16
 * Time: 14:44
 */
class StacksTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function stacks_posledniy_zashel_perviy_vishel()
    {
        $stack = array();
        array_push($stack, 'bar', 'other', 'baz');
        //print_r($stack);
        $this->assertCount(3, $stack);

        $last_in = array_pop($stack);
        $this->assertCount(2, $stack);
        //print_r($last_in);
        $this->assertEquals('baz', $last_in);

        $stack = array_flip($stack);

        $this->assertArrayHasKey('bar', $stack);
        $this->assertArrayNotHasKey('baz', $stack);
    }

    /**
     * @test
     */
    public function stacks()
    {
        $stack = array('qux', 'bar', 'baz');
        $first_element = array_shift($stack);
        $this->assertCount(2, $stack);
        $this->assertEquals('qux', $first_element);
        //print_r($stack);

        array_unshift($stack, 'foo');
        $this->assertCount(3, $stack);
        $this->assertEquals('foo', $stack[0]);
        //print_r($stack);
    }
}
