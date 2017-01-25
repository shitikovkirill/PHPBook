<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.01.17
 * Time: 12:33
 */

namespace ZendBook\MyClass\Traversable;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function testTraversable()
    {
        $test = new TestTraversable();

        foreach ($test as $key => $value) {
            //print_r('Key: '. $key); echo PHP_EOL;

            //print_r('Value: '. $value); echo PHP_EOL;
            $this->assertTrue(in_array($value, [1, 232, 344, 4545, 5656, 7342]));
        }
    }

    /**
     * @test
     */
    public function iteratorAggregate()
    {
        $test = new TestIteratorAggregate();

        foreach ($test as $key => $value) {
            //print_r('Key: '. $key); echo PHP_EOL;

            //print_r('Value: '. $value); echo PHP_EOL;
            $this->assertTrue(in_array($value, [1, 232, 344, 4545, 5656, 7342]));
        }
    }
}