<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 09.02.18
 * Time: 21:37
 */
use PHPUnit\Framework\TestCase;

class RocetTest extends TestCase
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
}
