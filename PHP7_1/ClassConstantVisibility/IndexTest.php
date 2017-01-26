<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 0:33
 */

namespace PHP7_1\ClassConstantVisibility;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $this->assertEquals(1, ConstDemo::PUBLIC_CONST_A);
        $this->assertEquals(2, ConstDemo::PUBLIC_CONST_B);

        // ConstDemo::PROTECTED_CONST;  // exception
        // ConstDemo::PRIVATE_CONST;    // exception

        $this->assertEquals(3, ConstExt::getConst());
    }
}