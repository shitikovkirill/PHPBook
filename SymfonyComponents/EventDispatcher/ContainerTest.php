<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 10.01.17
 * Time: 0:46
 */

namespace SymfonyComponents\EventDispatcher;


use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher;
use Symfony\Component\EventDispatcher\Event;
use SymfonyComponents\EventDispatcher\Event\OrderPlacedEvent;
use SymfonyComponents\EventDispatcher\Listener\AcmeListener;
use SymfonyComponents\EventDispatcher\Listener\FooListener;
use SymfonyComponents\EventDispatcher\Subscriber\StoreSubscriber;


class ContainerTest extends TestCase
{
    private $dispatcher;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $container = new ContainerBuilder();
        $container->register('foo', AcmeListener::class);
        $container->register('kernel.store_subscriber', StoreSubscriber::class);

        $this->dispatcher = new ContainerAwareEventDispatcher($container);
        parent::__construct($name, $data, $dataName);
    }

    /**
     * @test
     */
    public function addListenerService()
    {
        $this->dispatcher->addListenerService('foo_test', array('foo', 'onFooAction'));

        $event = new Event();
        $this->dispatcher->dispatch('foo_test', $event);
        $this->assertEquals('test', $event->foo);
    }

    /**
     * @test
     */
    public function addingSubscriberServices()
    {
        $this->dispatcher->addSubscriberService('kernel.store_subscriber', StoreSubscriber::class);

        // the order is somehow created or retrieved
        $order = new Order();
        $order -> foo = "nnn_nnn";
        // ...

        // create the OrderPlacedEvent and dispatch it
        $event = new OrderPlacedEvent($order);
        $this->dispatcher->dispatch(OrderPlacedEvent::NAME, $event);
        if ($event->isPropagationStopped()) {
            $this->assertTrue($event->isPropagationStopped());
        }

        $order = $event->getOrder();

        $this->assertEquals('www_www', $order->foo);
    }
}
