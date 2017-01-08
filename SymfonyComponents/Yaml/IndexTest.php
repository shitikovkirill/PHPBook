<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 08.01.17
 * Time: 12:33
 */

namespace SymfonyComponents\Yaml;


use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function parse()
    {
        try {
            $value = Yaml::parse(file_get_contents(__DIR__ . '/yaml/test1.yml'));
        } catch (ParseException $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }

        $array = [
            'foo' => 'bar',
            'bar' => [
                'foo' => 'bar',
                'bar' => 'baz'
            ]
        ];

        $this->assertArraySubset($array, $value);
    }

    /**
     * @test
     */
    public function dump1()
    {
        $array = array(
            'foo' => 'bar',
            'bar' => array('foo' => 'bar', 'bar' => 'baz'),
        );

        $yaml = Yaml::dump($array, 1);

        file_put_contents(__DIR__ . '/yaml/file1.yml', $yaml);
    }

    /**
     * @test
     */
    public function dump2()
    {
        $array = array(
            'foo' => 'bar',
            'bar' => array('foo' => 'bar', 'bar' => 'baz'),
        );

        $yaml = Yaml::dump($array, 2);

        file_put_contents(__DIR__ . '/yaml/file2.yml', $yaml);
    }

    /**
     * @test
     */
    public function dump3()
    {
        $object = new \stdClass();
        $object->foo = 'bar';

        $dumped = Yaml::dump($object, 2, 4, Yaml::DUMP_OBJECT);
        $this->assertEquals('!php/object:O:8:"stdClass":1:{s:3:"foo";s:3:"bar";}', $dumped);
        file_put_contents(__DIR__ . '/yaml/file3.yml', $dumped);
    }

    /**
     * @test
     * @depends dump3
     */
    public function parse4()
    {
        $dumped = file_get_contents(__DIR__ . '/yaml/file3.yml');
        $parsed = Yaml::parse($dumped, Yaml::PARSE_OBJECT);

        $this->assertInstanceOf(\stdClass::class, $parsed);
        $this->assertEquals('bar', $parsed->foo);
    }

    /**
     * @test
     */
    public function parseDate()
    {
        $dateObj = new \DateTime('2016-05-27');

        $data = Yaml::parse('2016-05-27');
        $this->assertEquals($dateObj->getTimestamp(), $data);

        $date = Yaml::parse('2016-05-27', Yaml::PARSE_DATETIME);
        $this->assertInstanceOf(\DateTime::class, $date);
        $this->assertEquals($dateObj->getTimestamp(), $date->getTimestamp());
    }

    /**
     * @test
     */
    public function dumpingMultiLine()
    {
        $string = array("string" => "Multiple\nLine\nString");
        $yaml = Yaml::dump($string, 2, 4, Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK);

        $this->assertEquals(
            'string: |
    Multiple
    Line
    String
',
            $yaml
        );
    }

}