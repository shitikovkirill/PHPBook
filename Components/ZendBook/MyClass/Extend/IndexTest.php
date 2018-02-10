<?php
namespace ZendBook\MyClass\Extend;

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $b = new B();
    }
}