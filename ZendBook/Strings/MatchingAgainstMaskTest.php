<?php

namespace ZendBook\String;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.12.16
 * Time: 16:50
 */
class MatchingAgainstMaskTest extends TestCase
{
    /**
     * @test
     */
    public function strspn()
    {
        $var = strspn("42 is the answer, what is the question ...", "1234567890");
        $this->assertEquals(2, $var);

        $var = strspn("oooooooo", "o", 1, 2);
        $this->assertEquals(2, $var);
    }

    /**
     * @test
     */
    public function strcspn()
    {
        $var = strcspn("oooooooo", "o");
        $this->assertEquals(0, $var);
    }
}
