<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 13.01.17
 * Time: 22:30
 */

namespace PHP7\UseStatement;


use PHPUnit\Framework\TestCase;

use PHP7\Statement\{A, B, C as D};;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        new A();
        new B();
        new D();
    }
}