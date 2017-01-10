<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 10.01.17
 * Time: 22:15
 */

namespace SymfonyComponents\EventDispatcher;


use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\ImmutableEventDispatcher;
use SymfonyComponents\EventDispatcher\Listener\FooListener;


class ImmutableEventDispatcherTest extends TestCase
{
    /**
     * @test
     * @expectedException BadMethodCallException
     */
    public function index()
    {
        $dispatcher = new EventDispatcher();
        $dispatcher->addListener('foo', [FooListener::class, 'handler']);

        $immutableDispatcher = new ImmutableEventDispatcher($dispatcher);
        $immutableDispatcher->addListener('fooz', [FooListener::class, 'handler']);
    }
}