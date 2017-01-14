<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 13.01.17
 * Time: 22:06
 */

namespace PHP7\CSPRNG;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $bytes = random_bytes(5);
        print_r(bin2hex($bytes));
        echo '<br>';
    }

    /**
     * @test
     */
    public function index2()
    {
        print_r(random_int(100, 999));
    }
}