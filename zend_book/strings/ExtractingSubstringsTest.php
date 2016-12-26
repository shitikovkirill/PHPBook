<?php

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.12.16
 * Time: 17:24
 */
class ExtractingSubstringsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function substr()
    {
        $x = '1234567';
        $str = substr($x, 0, 3);
        $this->assertEquals('123', $str);

        $str = substr($x, 1, 1);
        $this->assertEquals('2', $str);

        $str = substr($x, -2);
        $this->assertEquals('67', $str);

        $str = substr($x, 1);
        $this->assertEquals('234567', $str);

        $str = substr($x, -2, 1);
        $this->assertEquals('6', $str);
    }
}
