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

        $this->assertEquals('a,c,b', implode(',', array_keys($array)));
        $this->assertEquals('foo', array_values($array)[0]);
    }

    /**
     * @test
     */
    public function natsort(){
        $array = array('10t', '2t', '3t');
        sort($array);
        $this->assertEquals('10t,2t,3t', implode(',', $array));
        $this->assertEquals('10t', array_values($array)[0]);

        $array = array('10t', '2t', '3t');
        natsort($array);
        $this->assertEquals('2t,3t,10t', implode(',', $array));
        $this->assertEquals('2t', array_values($array)[0]);
    }

    /**
     * @test
     */
    public function ksort()
    {
        $array = array('c' => 22, 'a' => 30, 'b' => 10, );
        ksort($array);
        $this->assertEquals('abc', implode(array_keys($array)));
        $this->assertEquals(30, array_values($array)[0]);
    }

    /**
     * @test
     */
    public function usort()
    {
        $array = array (
            'three',
            '2two',
            'one',
            'two'
        );
        usort($array, [&$this, 'myCmp' ]);
        $this->assertEquals('one, two, 2two, three', implode(', ', $array));
    }

    function myCmp ($left, $right)
    {
        // Sort according to the length of the value.
        // If the length is the same, sort normally
        $diff = strlen($left) - strlen($right);
        if (!$diff) {
            return strcmp($left, $right);
        }
        return $diff;
    }

    /**
     * @test
     */
    public function shuffle()
    {
        $cards = array (1, 2, 3, 4);
        shuffle($cards);
        //print_r($cards);
    }

    /**
     * @test
     */
    public function shuffle_with_save_key()
    {
        $array = array ('a' => 10, 'b' => 12, 'c' => 13);
        shuffle($array);

        $this->assertArrayNotHasKey('a', $array);
        $this->assertArrayNotHasKey('b', $array);
        $this->assertArrayNotHasKey('c', $array);

        $cards = array ('a' => 10, 'b' => 12, 'c' => 13);
        $keys = array_keys($cards);
        shuffle($keys);

        $temp_arr = [];
        foreach ($keys as $v) {
            $temp_arr[$v] = $cards[$v];
        }

        $this->assertArrayHasKey('a', $temp_arr);
        $this->assertArrayHasKey('b', $temp_arr);
        $this->assertArrayHasKey('c', $temp_arr);

        $this->assertEquals(10, $temp_arr['a']);
    }

    /**
     * @test
     */
    public function array_rand()
    {
        $array = array ('a' => 10, 'b' => 12, 'c' => 13);

        $keys = array_rand($array, 2);
        $this->assertCount(2, $keys);
        foreach ($keys as $key) {
            $this->assertTrue(array_key_exists($key, $array));
        }
        //print_r($keys);
        //print_r($array);
    }
}
