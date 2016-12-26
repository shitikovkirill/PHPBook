<?php

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.12.16
 * Time: 17:02
 */
class SimpleSearchAndReplaceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function strReplace()
    {
        $str = str_replace("World", "Reader", "Hello World");
        $this->assertEquals('Hello Reader', $str);

        $str = str_ireplace("world", "Reader", "Hello World");
        $this->assertEquals('Hello Reader', $str);

        $a = 0; // Initialize
        $str = str_replace('a', 'b', 'a1a1a1', $a);
        $this->assertEquals('b1b1b1', $str);
        $this->assertEquals(3, $a);

        $str = str_replace(array("Hello", "World"), array("Bonjour", "Monde"), "Hello World");
        $this->assertEquals('Bonjour Monde', $str);

        $str = str_replace(array("Hello", "World"), "Bye", "Hello World");
        $this->assertEquals('Bye Bye', $str);
    }

    /**
     * @test
     */
    public function substrReplace()
    {
        $str = substr_replace("Hello World", "Reader", 6);
        $this->assertEquals('Hello Reader', $str);
        print_r($str);
    }
}
