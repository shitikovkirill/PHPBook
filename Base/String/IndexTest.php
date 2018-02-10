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
}
