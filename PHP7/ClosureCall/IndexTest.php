<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 12.01.17
 * Time: 18:22
 */

namespace PHP7\ClosureCall;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function oldVersion()
    {
        // Define a closure Pre PHP 7 code
        $getValue = function () {
            return $this->x;
        };

        // Bind a clousure
        $value = $getValue->bindTo(new A, 'PHP7\ClosureCall\A');

        $this->assertEquals(1, $value());
    }

    /**
     * @test
     */
    public function newVersion()
    {
        $value = function() {
            return $this->x;
        };

        $this->assertEquals(1, $value->call(new A));
    }
}