<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 09.02.18
 * Time: 22:17
 */

use PHPUnit\Framework\TestCase;

class ConditionalOperationsTest extends TestCase
{
    /**
     * @test
     */
    public function short_if() {
        $this->assertEquals(true ? 'TRUE' : 'FALSE', 'TRUE');
        $this->assertEquals(false ? 'TRUE' : 'FALSE', 'FALSE');
    }

    /**
     * @test
     */
    public function add_default() {
        $x = null;
        $x = $x?:1;
        $this->assertEquals($x, 1);

        $x = 'test';
        $x = $x?:1;
        $this->assertEquals($x, 'test');
    }

    /**
     * @test
     */
    public function add_default_new() {
        $x = [];
        $b = isset($x['a'])?:1;
        $this->assertEquals($b, 1);

        $x = [];
        $b = $x['a']??1;
        $this->assertEquals($b, 1);
    }
}
