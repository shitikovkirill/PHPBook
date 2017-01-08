<?php

namespace ZendBook\WorkWithArray;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 19.12.16
 * Time: 15:11
 */
class SetFunctionalityTest extends TestCase
{
    /**
     * @test
     */
    public function array_diff()
    {
        // array_diff_assoc()
        // array_diff_uassoc()
        // array_diff_key()
        // array_diff_ukey()

        $a = array (1, 2, 3, 4);
        $b = array (1, 3, 4, 5, 6);
        $diff = array_diff($a, $b);
        //print_r($diff);
        $this->assertEquals('2', implode(array_values($diff)));
    }

    public function array_intersect()
    {
        // array_intersect_key()
        // array_intersect_ukey()
        // array_intersect_assoc()
        // array_intersect_uassoc()

        $a = array (1, 2, 3);
        $b = array (1, 3, 4);
        $inter = array_intersect($a, $b);
        print_r($inter);
        $this->assertEquals('1, 3', implode(', ', array_values($inter)));
    }
}
