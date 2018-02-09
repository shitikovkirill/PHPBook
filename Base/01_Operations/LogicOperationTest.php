<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 09.02.18
 * Time: 21:41
 */

use PHPUnit\Framework\TestCase;

class LogicOperationTest extends TestCase
{
    /**
     * @test
     */
    public function doubleAnd(){
        $a=[];
        $this->assertFalse(isset($a['h']) && $a['h']);
    }

    /**
     * @test
     */
    public function singleAnd()
    {
        $a=[];
        isset($a['h']) & $a['h'];
    }
}
