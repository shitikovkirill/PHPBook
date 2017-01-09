<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 08.01.17
 * Time: 22:20
 */

namespace SymfonyComponents\EventDispatcher;


use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\GenericEvent;
use SymfonyComponents\EventDispatcher\Event\OrderPlacedEvent;
use SymfonyComponents\EventDispatcher\Listener\FooListener;
use SymfonyComponents\EventDispatcher\Subscriber\StoreSubscriber;

class IndexTest extends TestCase
{
    private $dispatcher;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->dispatcher = new EventDispatcher();
        $this->dispatcher->addListener('foo', [FooListener::class, 'handler']);
        parent::__construct($name, $data, $dataName);
    }

    /**
     * @test
     */
    public function genericEvent()
    {
        $subject = new \stdClass();
        $subject->title = 'Hello';

        $event = new GenericEvent('hello', ['class'=>$subject]);
        $this->dispatcher->dispatch('foo', $event);

        $std_class = $event->getArgument('class');

        $this->assertInstanceOf(\stdClass::class, $std_class);
        $this->assertEquals('Hello World', $std_class->title);
    }

    /**
     * @test
     */
    public function useAnonymousFunction()
    {
        $foo = 'vvv_vvv';

        $this->dispatcher->addListener(
            'acme.action',
            function (Event $event) use (&$foo) {
                $foo = 'fff_fff';
                $event -> foo = 'ggg_ggg';
            }
        );


        $event = new Event();

        $this->dispatcher->dispatch('acme.action', $event);
        $this->assertEquals('fff_fff', $foo);
        $this->assertEquals('ggg_ggg', $event->foo);
    }

    /**
     * @test
     */
    public function useSubscriber()
    {
        $subscriber = new StoreSubscriber();
        $this->dispatcher->addSubscriber($subscriber);

        // the order is somehow created or retrieved
        $order = new Order();
        $order -> foo = "nnn_nnn";
        // ...

        // create the OrderPlacedEvent and dispatch it
        $event = new OrderPlacedEvent($order);
        $this->dispatcher->dispatch(OrderPlacedEvent::NAME, $event);
        $order = $event->getOrder();

        $this->assertEquals('www_www', $order->foo);
    }
}