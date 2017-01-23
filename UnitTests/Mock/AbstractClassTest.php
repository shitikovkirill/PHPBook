<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 22.01.17
 * Time: 19:45
 */

namespace UnitTests\Mock;

use PHPUnit\Framework\TestCase;


class AbstractClassTest extends TestCase
{
    public function testConcreteMethod()
    {
        $stub = $this->getMockForAbstractClass(AbstractClass::class);

        $stub->expects($this->any())
            ->method('abstractMethod')
            ->will($this->returnValue(true));

        $this->assertTrue($stub->concreteMethod());
    }
}
