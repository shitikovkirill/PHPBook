<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 26.01.17
 * Time: 9:54
 */

namespace PHP7_1\SymmetricArrayDestructuring;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function index()
    {
        $data = [
            [1, 'Tom'],
            [2, 'Fred'],
        ];

        // list() style
        list($id1, $name1) = $data[0];

        $this->assertEquals(1, $id1);
        $this->assertEquals('Tom', $name1);


        // [] style
        [$id2, $name2] = $data[1];
        $this->assertEquals(2, $id2);
        $this->assertEquals('Fred', $name2);

        // list() style
        foreach ($data as list($id, $name)) {
            $this->assertTrue(in_array($id, [1, 2]));
            $this->assertTrue(in_array($name, ['Tom', 'Fred']));
        }

        // [] style
        foreach ($data as [$id, $name]) {
            $this->assertTrue(in_array($id, [1, 2]));
            $this->assertTrue(in_array($name, ['Tom', 'Fred']));
        }
    }

    /**
     * @test
     */
    public function index2()
    {
        $data = [
            ["id" => 1, "name" => 'Tom'],
            ["id" => 2, "name" => 'Fred'],
        ];

        // list() style
        list("id" => $id1, "name" => $name1) = $data[0];
        $this->assertEquals(1, $id1);
        $this->assertEquals('Tom', $name1);

        // [] style
        ["id" => $id2, "name" => $name2] = $data[1];
        $this->assertEquals(2, $id2);
        $this->assertEquals('Fred', $name2);

        // list() style
        foreach ($data as list("id" => $id, "name" => $name)) {
            $this->assertTrue(in_array($id, [1, 2]));
            $this->assertTrue(in_array($name, ['Tom', 'Fred']));
        }

        // [] style
        foreach ($data as ["id" => $id, "name" => $name]) {
            $this->assertTrue(in_array($id, [1, 2]));
            $this->assertTrue(in_array($name, ['Tom', 'Fred']));
        }
    }
}