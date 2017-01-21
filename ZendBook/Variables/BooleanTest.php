<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 21.01.17
 * Time: 14:43
 */

namespace ZendBook\Variables;


use PHPUnit\Framework\TestCase;


class BooleanTest extends TestCase
{

    private $var_f1 = null;
    private $var_f2 = '';
    private $var_f3 = "0";
    private $var_f4 = 0;
    private $var_f5 = [];

    private $var_t1 = 1;
    private $var_t2 = -2;
    private $var_t3 = 2.3e5;
    private $var_t4 = " ";
    private $var_t5 = "foo";
    private $var_t6 = "false";
    private $var_t7 = array(12);
    private $var_t8 = true;

    /**
     * @test
     */
    public function bool()
    {
        $this->assertFalse((bool)$this->var_f1);
        $this->assertFalse((bool)$this->var_f2);
        $this->assertFalse((bool)$this->var_f3);
        $this->assertFalse((bool)$this->var_f4);
        $this->assertFalse((bool)$this->var_f5);


        $this->assertTrue((bool)$this->var_t1);
        $this->assertTrue((bool)$this->var_t2);
        $this->assertTrue((bool)$this->var_t3);
        $this->assertTrue((bool)$this->var_t4);
        $this->assertTrue((bool)$this->var_t5);
        $this->assertTrue((bool)$this->var_t6);
        $this->assertTrue((bool)$this->var_t7);
        $this->assertTrue((bool)$this->var_t8);
    }

    /**
     * @test
     */
    public function empty()
    {
        $this->assertFalse(empty($this->var_t1));
        $this->assertFalse(empty($this->var_t2));
        $this->assertFalse(empty($this->var_t3));
        $this->assertFalse(empty($this->var_t4));
        $this->assertFalse(empty($this->var_t5));
        $this->assertFalse(empty($this->var_t6));
        $this->assertFalse(empty($this->var_t7));
        $this->assertFalse(empty($this->var_t8));


        $this->assertTrue(empty($this->var_f0)); // !!!!!!
        $this->assertTrue(empty($this->var_f1));
        $this->assertTrue(empty($this->var_f2));
        $this->assertTrue(empty($this->var_f3));
        $this->assertTrue(empty($this->var_f4));
        $this->assertTrue(empty($this->var_f5));
    }

    /**
     * @test
     */
    public function isset()
    {
        $this->assertFalse(isset($this->var_f0)); // !!!!!!
        $this->assertFalse(isset($this->var_f1));


        $this->assertTrue(isset($this->var_f2));
        $this->assertTrue(isset($this->var_f3));
        $this->assertTrue(isset($this->var_f4));
        $this->assertTrue(isset($this->var_f5));

        $this->assertTrue(isset($this->var_t1));
        $this->assertTrue(isset($this->var_t2));
        $this->assertTrue(isset($this->var_t3));
        $this->assertTrue(isset($this->var_t4));
        $this->assertTrue(isset($this->var_t5));
        $this->assertTrue(isset($this->var_t6));
        $this->assertTrue(isset($this->var_t7));
        $this->assertTrue(isset($this->var_t8));
    }

    /**
     * @test
     */
    public function is_null()
    {
        $this->assertFalse(is_null($this->var_t1));
        $this->assertFalse(is_null($this->var_t2));
        $this->assertFalse(is_null($this->var_t3));
        $this->assertFalse(is_null($this->var_t4));
        $this->assertFalse(is_null($this->var_t5));
        $this->assertFalse(is_null($this->var_t6));
        $this->assertFalse(is_null($this->var_t7));
        $this->assertFalse(is_null($this->var_t8));

        $this->assertFalse(is_null($this->var_f2));
        $this->assertFalse(is_null($this->var_f3));
        $this->assertFalse(is_null($this->var_f4));
        $this->assertFalse(is_null($this->var_f5));


        $this->assertTrue(is_null($this->var_f1));
    }

    /**
     * @test
     */
    public function is_bool()
    {
        $this->assertTrue(is_bool(true));
        $this->assertTrue(is_bool(false));

        $this->assertFalse(is_bool('All other'));
    }

    /**
     * @test
     */
    public function is_array()
    {
        $this->assertTrue(is_array([]));
        $this->assertTrue(is_array([2,3]));

        $this->assertFalse(is_bool('All other'));
    }

    /**
     * @test
     */
    public function is_float()
    {
        $this->assertTrue(is_float(1.2));
        $this->assertTrue(is_real(0.0));

        $this->assertFalse(is_float(0));
        $this->assertFalse(is_real(12));
        $this->assertFalse(is_float('All other'));
    }

    /**
     * @test
     */
    public function is_integer()
    {
        $this->assertTrue(is_integer(0));
        $this->assertTrue(is_int(12));

        $this->assertFalse(is_integer(0.0));
        $this->assertFalse(is_int(21.34));
        $this->assertFalse(is_int('All other'));
    }

    /**
     * @test
     */
    public function is_numeric()
    {
        $this->assertTrue(is_numeric(0));
        $this->assertTrue(is_numeric(12));
        $this->assertTrue(is_numeric(0.0));
        $this->assertTrue(is_numeric(12.43));
        $this->assertTrue(is_numeric('12.43'));

        $this->assertFalse(is_numeric('0.0 www'));
        $this->assertFalse(is_numeric('21 t'));
        $this->assertFalse(is_numeric(true));
        $this->assertFalse(is_numeric('All other'));
    }

    /**
     * @test
     */
    public function is_string()
    {
        $this->assertTrue(is_string('String'));
        $this->assertTrue(is_string('12.43'));
        $this->assertTrue(is_string(''));
        $this->assertTrue(is_string(' '));

        $this->assertFalse(is_string(23));
    }
}
