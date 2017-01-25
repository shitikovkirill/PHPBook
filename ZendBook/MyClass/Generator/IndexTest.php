<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.01.17
 * Time: 16:34
 */

namespace ZendBook\MyClass\Generator;


use PHPUnit\Framework\TestCase;

class TestIndex extends TestCase
{
    /**
     * @test
     */
    public function usingFileGenerator()
    {
        foreach ($this->getLines(__DIR__."/test.txt") as $line) {
            //echo $line;
        }
    }

    function getLines($file)
    {
        $f = fopen($file, 'r');
        if (!$f) throw new Exception();
        while ($line = fgets($f)) {
            yield $line;
        }
        fclose($f);
    }


    /**
     * @test
     */
    public function foreachGenerator()
    {
        $generator = $this->doStuff();

        $this->assertEquals(0, $generator->key());
        $this->assertEquals(1, $generator->current());

        $this->assertNull($generator->next());

        $this->assertEquals(1, $generator->key());
        $this->assertEquals(1, $generator->current());

        $this->assertNull($generator->next());

        $this->assertEquals(2, $generator->key());
        $this->assertEquals(2, $generator->current());

        $this->assertNull($generator->next());

        $this->assertEquals(3, $generator->key());
        $this->assertEquals(3, $generator->current());

        $this->assertNull($generator->next());

        $this->assertEquals(4, $generator->key());
        $this->assertEquals(5, $generator->current());

        $this->assertNull($generator->next());

        $this->assertEquals(5, $generator->key());
        $this->assertEquals(8, $generator->current());
    }

    // Fibonachy
    public function doStuff()
    {
        $last = 0;
        $current = 1;
        yield 1;
        while (true) {
            $current = $last + $current;
            $last = $current - $last;
            yield $current;
        }
    }
}