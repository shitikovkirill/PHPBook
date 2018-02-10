<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 10.02.18
 * Time: 10:22
 */

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function explode() {
        $st = "4323424234|Tomas Anderson|1998-05-21|test text|test2";
        $res = explode('|', $st, 4);

        $this->assertEquals($res, ['4323424234','Tomas Anderson','1998-05-21','test text|test2']);
        $res2 = join('-', $res); // or implode()
        $this->assertEquals($res2, '4323424234-Tomas Anderson-1998-05-21-test text|test2');
    }

    /**
     * @test
     */
    public function serialise(){
        $arr = ['a'=>'aa', 'b'=>'bb', 'c'=>['c1'=>'cc1', 'c2'=>'cc2']];

        $ser_arr = serialize($arr);
        $this->assertEquals($ser_arr, 'a:3:{s:1:"a";s:2:"aa";s:1:"b";s:2:"bb";s:1:"c";a:2:{s:2:"c1";s:3:"cc1";s:2:"c2";s:3:"cc2";}}');

        $uns_arr = unserialize($ser_arr);
        $this->assertEquals($uns_arr, $arr);
    }
}
