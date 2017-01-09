<?php

namespace SymfonyComponents\EventDispatcher\Subscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use SymfonyComponents\EventDispatcher\Event\OrderPlacedEvent;

class StoreSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            OrderPlacedEvent::NAME => 'onStoreOrder',
        );
    }

    public function onStoreOrder(OrderPlacedEvent $event)
    {
        $event->getOrder()->foo = "www_www";
    }
}