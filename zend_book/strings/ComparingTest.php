<?php

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.12.16
 * Time: 14:42
 */
class ComparingTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function comparing()
    {
        $this->assertTrue('123aa'==123);
        $this->assertFalse('123aa'===123);
    }

    /**
     * @test
     */
    public function strcmp()
    {
        $str1 = 'a';
        $str2 = 'x';
        $str3 = "Hello World";
        $str4 = "hello world";

        $this->assertTrue(strcmp($str1, "hello world") < 0);
        $this->assertTrue(strcmp($str2, "hello world") > 0);
        $this->assertTrue(strcmp($str4, "hello world") == 0);

        $this->assertEquals('0', strcasecmp($str3, "hello world"));

        $s1 = 'abcd1234';
        $s2 = 'abcd5678';

        $this->assertEquals('0', strncasecmp($s1, $s2, 4));
    }
}
