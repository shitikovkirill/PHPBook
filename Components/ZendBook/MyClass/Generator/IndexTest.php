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

    /**
     * @test
     */
    public function testLog()
    {

        $log = $this->createLog(__DIR__.'/log.txt');
        $log->send("First");
        $log->send("Second");
        $log->send("Third");
    }

    function createLog($file) {
        $f = fopen($file, 'a');
        while (true) {          # да, опять бесконечный цикл;
            $line = yield;      # бесконечно "слушаем" метод send() для установки нового значения $line;
            fwrite($f, $line);
        }
    }

    /**
     * test
     */
    public function hard(){
        $file = __DIR__.'/test.txt';
        $bytes = $this->fetchBytesFromFile($file);
        $gen = $this->processBytesInBatch($bytes);
        foreach ($gen as $record) {
            echo $record;
        }
    }


    function fetchBytesFromFile($file) {           # функция возвращает генератор, который считывает данные разной длины из файла
        $length = yield;                                          # в начале установим длину
        $f = fopen($file, 'r');
        while (!feof($f)) {                                        # проверка на конец файла
            $length = yield fread($f, $length);       # выбрасываем блок данных
        }
        yield false;
    }

    function processBytesInBatch(\Generator $byteGenerator) {
        $buffer = '';
        $bytesNeeded = 1000;
        while ($buffer .= $byteGenerator->send($bytesNeeded)) {           # всегда считываем порцию разного размера
            // проверяем, достаточно ли данных в буфере
            list($lengthOfRecord) = unpack('N', $buffer);
            if (strlen($buffer) < $lengthOfRecord) {
                $bytesNeeded = $lengthOfRecord - strlen($buffer);
                continue;
            }
            yield substr($buffer, 1, $lengthOfRecord);
            $buffer = substr($buffer, 0, $lengthOfRecord + 1);
            $bytesNeeded = 1000 - strlen($buffer);
        }
    }
}