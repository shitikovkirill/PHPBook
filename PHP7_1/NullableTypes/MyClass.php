<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 0:30
 */

namespace PHP7_1\NullableTypes;


class MyClass
{
    function testReturn1(): ?string
    {
        return 'elePHPant';
    }


    function testReturn2(): ?string
    {
        return null;
    }

    function test(?string $name)
    {
        return $name;
    }
}