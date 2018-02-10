<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 10.02.18
 * Time: 13:27
 */

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function pass_more_argument_to_function() {
        function more_args($arg1, $arg2){
            return func_get_args();
        }

        $res = more_args('arg1', 'arg2', 'arg3');
        $this->assertEquals($res, ['arg1', 'arg2', 'arg3']);
    }

    /**
     * @test
     * @expectedException ArgumentCountError
     */
    public function pass_fewer_arguments() {
        function more_args2($arg1, $arg2){
            return func_get_args();
        }

        more_args2('arg1');
    }

    /**
     * @test
     */
    public function not_limit_function_args() {
        function test(){
            $num_args = func_num_args();

            assert($num_args, 3);
            $arg_1 = func_get_arg(0);
            $arg_2 = func_get_arg(1);
            $arg_3 = func_get_arg(2);

            assert($arg_1, 'fff');
            assert($arg_2, 'vvv');
            assert($arg_3, 'bbb');
            return func_get_args();
        }

        $res = test('fff', 'vvv', 'bbb');
        $this->assertEquals($res, ['fff', 'vvv', 'bbb']);
    }

    /**
     * @test
     */
    public function new_not_limit_function_args() {
        function test2(...$args){
            return $args;
        }

        $res = test2('ttt', 'lll', 'qqq');
        $this->assertEquals($res, ['ttt', 'lll', 'qqq']);

    }

    /**
     * @test
     */
    public function open_args() {
        function test3($arg1, $arg2, $arg3){
            return func_get_args();
        }

        $res = test3(...['xxx', 'ccc', 'zzz']);
        $this->assertEquals($res, ['xxx', 'ccc', 'zzz']);
    }

    /**
     * @test
     */
    public function parametres_args() {
        function sum(int $ft, int $sd): int
        {
            return $ft+$sd;
        }

        $res = sum(41, 19);
        $this->assertEquals($res, 60);

        // sum("41", 19); TypeError
    }

    /**
     * @test
     */
    public function static_var() {

        $res = sum(41, 19);
        $this->assertEquals($res, 60);

        // sum("41", 19); TypeError
    }
}
