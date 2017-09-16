<?php

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 10.05.17
 * Time: 19:51
 */
class Test extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function test_regexp(){

    }

    public function regexp($str) {
        $matches = [];
        preg_match_all("$(\D+)\| ?(\d+)$", $str, $matches);

        $result=[];
        for ($i=0; $i < count($matches[0]); $i++) {
            $result[$i]['id'] = intval($matches[2][$i]);
            $result[$i]['value'] = trim($matches[1][$i]);
        }
        return $result;
    }
}
