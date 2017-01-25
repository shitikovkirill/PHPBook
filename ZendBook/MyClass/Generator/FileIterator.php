<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.01.17
 * Time: 16:13
 */

namespace ZendBook\MyClass\Generator;


class FileIterator implements Iterator {
    protected $f;
    protected $data;
    protected $key;

    public function __construct($file)
    {
        $this->f = fopen($file, 'r');
        if (!$this->f) throw new Exception();
    }
    public function __destruct()
    {
        fclose($this->f);
    }
    public function current()
    {
        return $this->data;
    }
    public function key()
    {
        return $this->key;
    }
    public function next()
    {
        $this->data = fgets($this->f);
        $this->key++;
    }
    public function rewind() {
        fseek($this->f, 0);
        $this->data = fgets($this->f);
        $this->key = 0;
    }
    public function valid() {
        return false !== $this->data;
    }
}