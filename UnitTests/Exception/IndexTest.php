<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 10:32
 */

namespace UnitTests\Exception;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @throws \Exception
     * @test
     */
    public function index()
    {
        $this->expectException('\Exception');
        throw new \Exception('Test', 55);
    }

    /**
     * @expectedExceptionMessage('Test')
     * @test
     */
    public function index2()
    {
        $this->expectExceptionCode(55);
        throw new \Exception('Test', 55);
    }
}