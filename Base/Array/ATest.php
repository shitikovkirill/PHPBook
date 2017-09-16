<?php

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 16.05.17
 * Time: 12:39
 */
class ATest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function check_size_in_product() {
        $json = '[ { "name": "4.0", "size": "0400" }, { "name": "4.5", "size": "0450" }, { "name": "5.0", "size": "0500" }, { "name": "5.5", "size": "0550" }, { "name": "6.0", "size": "0600" }, { "name": "6.5", "size": "0650" }, { "name": "7.0", "size": "0700" }, { "name": "7.5", "size": "0750" }, { "name": "8.0", "size": "0800" }, { "name": "8.5", "size": "0850" }, { "name": "9.0", "size": "0900" }, { "name": "9.5", "size": "0950" }, { "name": "10.0", "size": "1000" }, { "name": "11.0", "size": "1100" }, { "name": "3.5", "size": "0350" } ]';
        $sizes = json_decode($json, true);
        $this->assertTrue(checkSizeInProduct($sizes, 8.5));
        $this->assertFalse(checkSizeInProduct($sizes, 6.2));
    }
}

function checkSizeInProduct($arr_sizes, $check_size){
    return in_array($check_size, array_column($arr_sizes, 'name'));
}

