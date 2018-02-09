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
    public function usort_array_test(){
        // Old
        $arr = [3,1,7,6,9,4];

        function cmp($a, $b){
            if($a==$b) return 0;
            if($a<$b) return -1;
            if($a>$b) return 1;
        }

        usort($arr, 'cmp');
        $this->assertEquals($arr, [1,3,4,6,7,9]);

        // New
        $arr = [3,1,7,6,9,4];

        function cmp_new($a, $b){
            return $a<=>$b;
        }

        usort($arr, 'cmp_new');
        $this->assertEquals($arr, [1,3,4,6,7,9]);
    }
    /**
     * @test
     */
    public function check_size_in_product() {
        $json = '[ { "name": "4.0", "size": "0400" }, { "name": "4.5", "size": "0450" }, { "name": "5.0", "size": "0500" }, { "name": "5.5", "size": "0550" }, { "name": "6.0", "size": "0600" }, { "name": "6.5", "size": "0650" }, { "name": "7.0", "size": "0700" }, { "name": "7.5", "size": "0750" }, { "name": "8.0", "size": "0800" }, { "name": "8.5", "size": "0850" }, { "name": "9.0", "size": "0900" }, { "name": "9.5", "size": "0950" }, { "name": "10.0", "size": "1000" }, { "name": "11.0", "size": "1100" }, { "name": "3.5", "size": "0350" } ]';
        $sizes = json_decode($json, true);
        $this->assertTrue(checkSizeInProduct($sizes, 8.5));
        $this->assertFalse(checkSizeInProduct($sizes, 6.2));
    }

    /**
     * @test
     */
    public function merge_array_test(){
        $array = [1,2,3,4];
        $array2 = [1,2,3,4];
        $res_arrey = array_merge($array, $array2);
        $this->assertEquals($res_arrey, [1,2,3,4,1,2,3,4]);
        $this->assertArrayNotHasKey(9, $res_arrey);

        $array_tmp = $array + $array2;
        $this->assertEquals($array_tmp, [1,2,3,4]);
    }
}

function checkSizeInProduct($arr_sizes, $check_size){
    return in_array($check_size, array_column($arr_sizes, 'name'));
}

