<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 11.01.17
 * Time: 15:43
 */
//declare(strict_types=1);

namespace PHP7\ScalarType;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testSumCalculator()
    {
        $calc = new Calculator();
        $result = $calc->sum(2, '3', 4.1);
        //$this->expectException('Exception', $result);
        $this->assertEquals(9, $result);
    }

    /**
     * @test
     */
    public function nullCoalescingOperator()
    {
        $var = null;
        $result = $var??'www';
        $this->assertEquals('www', $result);

        $var2 = 'test';
        $result = $var??$var2??'www';
        $this->assertEquals('test', $result);

        $var2 = '';
        $result = $var??$var2??'www';
        $this->assertEquals('', $result);

        $var2 = 0;
        $result = $var??$var2??'www';
        $this->assertEquals(0, $result);

        $var2 = 'not_null';
        $result = $i??$var??$var2??'www';
        $this->assertEquals('not_null', $result);
    }

    /**
     * @test
     */
    public function spaceshipOperator()
    {
        $this->assertEquals(0,  1 <=> 1);
        $this->assertEquals(-1, 0 <=> 1);
        $this->assertEquals(1,  2 <=> 1);

        $this->assertEquals(0,  "a" <=> "a");
        $this->assertEquals(-1, "a" <=> "b");
        $this->assertEquals(1,  "b" <=> "a");
    }

    /**
     * @test
     */
    public function constantArrays()
    {
        define(
            'ANIMALS',
            ['dog', 'cat', 'bird']
        );

        $this->assertArraySubset(['dog', 'cat', 'bird'], ANIMALS);
    }
}