<?php

namespace ZendBook\String;
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 19.12.16
 * Time: 15:26
 */
class StringsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function strlen()
    {
        $str = 'string';
        $str_len = strlen($str);
        $this->assertEquals(6, $str_len);
    }
    /**
     * @test
     */
    public function strtr()
    {
        $tr = strtr('abc', 'a', '1'); // Outputs 1bc
        //print_r($tr);
        $this->assertEquals('1bc', $tr);

        $subst = array ('1'=> 'one', '2'=>'two',);
        $rez = strtr('123', $subst);

        $this->assertEquals('onetwo3', $rez);
    }

    /**
     * @test
     */
    public function stringsAsArraysa()
    {
        $str = 'String';
        $this->assertEquals('S', $str[0]);
    }

}
