<?php

namespace ZendBook\Formatting;
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29.12.16
 * Time: 14:36
 */
class ParsingFormattedInputTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getFormattedInput()
    {
        $data = '123 456 789';
        $format = '%d %d %d';
        $scan_data = sscanf($data, $format);
        $this->assertCount(3, $scan_data);
        $this->assertContains('123', $scan_data);
        $this->assertContains('456', $scan_data);
        $this->assertContains('789', $scan_data);
    }
}
