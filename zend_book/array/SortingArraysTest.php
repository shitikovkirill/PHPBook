<?php

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 19.12.16
 * Time: 12:25
 */
class SortingArraysTest extends PHPUnit_Framework_TestCase
{

    //eleven_functions
    /**
     * @test
     */
    public function sort()
    {
        $array = array('a' => 'foo', 'b' => 'bar', 'c' => 'baz');
        sort($array);

        $this->assertArrayHasKey(0, $array);
        $this->assertArrayHasKey(1, $array);
        $this->assertArrayHasKey(2, $array);

        $this->assertArrayNotHasKey('a', $array);
        $this->assertArrayNotHasKey('b', $array);
        $this->assertArrayNotHasKey('c', $array);

        $this->assertEquals('foo', $array[2]);
    }

    /**
     * @test
     */
    public function asort()
    {
        $array = array('a' => 'foo', 'b' => 'bar', 'c' => 'baz');
        asort($array, SORT_STRING);

        $this->assertArrayHasKey('b', $array);
        $this->assertArrayHasKey('c', $array);
        $this->assertArrayHasKey('a', $array);

        $this->assertEquals('foo', array_values($array)[2]);
    }

    /**
     * @test
     */
    public function rasort(){
        $array = array('a' => 'foo', 'b' => 'bar', 'c' => 'baz');
        arsort($array, SORT_STRING);

        $this->assertArrayHasKey('b', $array);
        $this->assertArrayHasKey('c', $array);
        $this->assertArrayHasKey('a', $array);

        $this->assertEquals('foo', array_values($array)[0]);
    }

    /**
     * @test
     */
    public function a(){

    }
}
