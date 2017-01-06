<?php

namespace ZendBook\Formatting;
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29.12.16
 * Time: 13:18
 */
class FormatStringsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function numberFrmat()
    {
        $this->assertEquals('100,001', number_format("100000.698"));
        $this->assertEquals('100 000,698', number_format("100000.698", 3, ",", " "));
    }

    /**
     * @test
     */
    public function moneyFormat()
    {
        setlocale(LC_MONETARY, "en_US"); //!!
        $this->assertEquals('100000.70', money_format('%.2n', "100000.698"));
    }

    /**
     * @test
     */
    public function printF(){
        $n = 123;
        $f = 123.45;
        $s = "A string";
        /*
        printf("%d", $n); // prints 123
        printf("%d", $f); // prints 123
        // Prints "The string is A string"
        printf("The string is %s", $s);
        // Example with precision
        printf("%3.3f", $f); // prints 123.450 //*/
    }
}
