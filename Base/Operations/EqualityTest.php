<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 09.02.18
 * Time: 18:40
 */
use PHPUnit\Framework\TestCase;

class AgentSmith{}

class EqualityTest extends TestCase
{
    /**
     * @test
     */
    public function comparison_bool() {
        $this->assertTrue(100==true);
        $this->assertTrue((bool)100==true);
        $this->assertFalse(100==1);
        $this->assertFalse((int)100==1);

        $this->assertFalse(100===true);
    }

    /**
     * @test
     */
    public function comparison_int() {
        $this->assertTrue(''==0);
        $this->assertTrue('true'==0);

        $this->assertEquals((int)'', 0);
        $this->assertTrue((int)''==0);
        $this->assertEquals((int)'true', 0);
        $this->assertTrue((int)'true'==0);

        $this->assertEquals((int)'1true', 1);

        $this->assertFalse('true'==1);
        $this->assertTrue('1true'==1);
        $this->assertTrue((int)'1true'==1);


        $this->assertFalse(''===0);
        $this->assertFalse('true'===0);
    }

    /**
     * @test
     */
    public function comparison_array() {
        $this->assertTrue([1,2,3]==[1,2,true]);
        $this->assertTrue([1,2,3]==[1,2,'3']);

        $this->assertFalse([1,2,3]===[1,2,true]);
        $this->assertFalse([1,2,3]===[1,2,'3']);
    }

    /**
     * @test
     */
    public function comparison_class() {
        $this->assertTrue(new AgentSmith() == new AgentSmith());

        $this->assertFalse(new AgentSmith() === new AgentSmith());
    }
}
