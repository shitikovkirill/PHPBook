<?php

namespace ZendBook\String;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.12.16
 * Time: 17:16
 */
class SearchingTest extends TestCase
{
    /**
     * @test
     */
    public function strpos()
    {
        $haystack = "abcdefg";
        $needle = 'abc';

        $this->assertTrue(strpos($haystack, $needle) !== false);
        $this->assertEquals(0, strpos($haystack, $needle));

        $haystack = "abcdefg";
        $needle = 'xzp';

        $this->assertFalse(strpos($haystack, $needle) !== false);
        $this->assertEquals(false, strpos($haystack, $needle));

        $haystack = '123456123456';
        $needle = '123';

        $this->assertEquals(0, strpos($haystack, $needle));// outputs 0
        $this->assertEquals(6, strpos($haystack, $needle, 1)); // outputs 6

        $haystack = '123X-456*123.456';
        $needle = 88; // X Characters can have ordinal values.

        $this->assertEquals(3, strpos($haystack, $needle));


        $haystack = '123X-456*123.456';
        $needle = 68; // D

        $this->assertFalse(strpos($haystack, $needle));
    }

    /**
     * @test
     */
    public function strstr()
    {
        $haystack = '123456';
        $needle = '34';
        $needle2 = '90';

        $this->assertEquals('3456', strstr($haystack, $needle));
        $this->assertEquals(false, strstr($haystack, $needle2));
        $this->assertEquals('12', strstr($haystack, $needle, true));
    }
}
