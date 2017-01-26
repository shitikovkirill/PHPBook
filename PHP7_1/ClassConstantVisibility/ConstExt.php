<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 10:13
 */

namespace PHP7_1\ClassConstantVisibility;


class ConstExt extends ConstDemo
{
    public static function getConst()
    {
        return ConstDemo::PROTECTED_CONST;
    }
}