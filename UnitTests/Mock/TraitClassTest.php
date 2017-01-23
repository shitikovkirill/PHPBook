<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 22.01.17
 * Time: 19:39
 */

namespace UnitTests\Mock;


use PHPUnit\Framework\TestCase;

class TraitClassTest extends TestCase
{
    public function testConcreteMethod()
    {
        $mock = $this->getMockForTrait(AbstractTrait::class);

        $mock->expects($this->any())
            ->method('abstractMethod')
            ->will($this->returnValue(true));

        $this->assertTrue($mock->concreteMethod());
    }
}