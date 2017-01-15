<?php

namespace ZendBook\WorkWithArray;

class StackTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     */
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }


    /**
     * @test
     */
    public function arrayPlus()
    {
        $a = array (1, 2, 3);
        $b = array ('a' => 1, 'b' => 2, 'c' => 3);
        $c = $a + $b;
        //print_r($c);
        $this->assertCount(6, $c);
        $this->assertArraySubset([1, 2, 3, 'a' => 1, 'b' => 2, 'c' => 3], $c);

        $a = array (1, 2, 3);
        $b = array ('a' => 1, 2=>2, 3=>3);
        $c = $a + $b;
        //print_r($c);
        $this->assertCount(5, $c);
        $this->assertArraySubset([1, 2, 3, 'a' => 1, 3=>3], $c);
    }

    /**
     * @test
     */
    public function arrayMarge()
    {
        $a = array (1, 2, 3);
        $b = array ('a' => 1, 'b' => 2, 'c' => 3);
        $c = array_merge($a, $b);
        $this->assertCount(6, $c);
        $this->assertArraySubset([1, 2, 3, 'a' => 1, 'b' => 2, 'c' => 3], $c);

        $a = array (1, 2, 3);
        $b = array ('a' => 1, 2=>2, 3=>3);
        $c = array_merge($a, $b);
        $this->assertCount(6, $c);
        //print_r($c);
        $this->assertArraySubset([1, 2, 3, 'a' => 1, 3=>2, 4=>3], $c);
    }

    /**
     * Reference rather than by value
     *
     * @test
     * @return void
     */

    public function iteratorByLink()
    {
        $a = array (1, 2, 3);
        foreach ($a as $k => &$v) {
            $v += 1;
        }
        //print_r($a);
        $this->assertEquals($a, array (2,3,4));
    }

    /**
     * @test
     */
    public function iterator()
    {
        $a = array ('zero','one','two');

        foreach ($a as &$v) {
        }
        foreach ($a as $v) {
        }
        //print_r($a);
        $this->assertEquals($a, array ('zero','one','one'));
    }

    /**
     * @test
     */
    public function keyExists()
    {
        $a = array('a' => null, 'b' => 2);
        $this -> assertFalse(isset($a['a']));
        $this -> assertTrue(array_key_exists('a', $a));
    }

    /**
     * @test
     */
    public function sumString()
    {
        $str = ['3'=>'3', 'jj'=>'jj', 45, 6];
        $this->assertEquals('3', $str[3]);
    }
}