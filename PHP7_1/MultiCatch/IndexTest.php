<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 0:33
 */

namespace PHP7_1\MultiCatch;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        try {
            throw new FirstException('First');
        } catch (FirstException | SecondException $e) {
            // handle first and second exceptions
        }

        try {
            throw new SecondException('Second');
        } catch (FirstException | SecondException $e) {
            // handle first and second exceptions
        }

        $this->expectException('\Exception');
        try {
            throw new \Exception('Third');
        } catch (FirstException | SecondException $e) {
            // handle first and second exceptions
        }
    }
}