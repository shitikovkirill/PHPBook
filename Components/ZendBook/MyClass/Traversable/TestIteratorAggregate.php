<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 25.01.17
 * Time: 15:35
 */

namespace ZendBook\MyClass\Traversable;


class TestIteratorAggregate implements \IteratorAggregate
{
    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        $test = new TestTraversable();
        return $test;
    }
}