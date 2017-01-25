<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 0:33
 */

namespace PHP7_1\VoidFunctions ;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $a = 1;
        $b = 2;

        $this->assertNull($this->swap($a, $b));
        //var_dump(swap($a, $b), $a, $b);
    }

    function swap(&$left, &$right): void
    {
        if ($left === $right) {
            return;
        }

        $tmp = $left;
        $left = $right;
        $right = $tmp;
    }
}