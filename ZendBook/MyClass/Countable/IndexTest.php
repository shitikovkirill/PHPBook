<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.01.17
 * Time: 15:54
 */

namespace ZendBook\MyClass\Countable;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testCountable()
    {
        $count = new TestCountable();
        $this->assertEquals(3, count($count));
    }
}