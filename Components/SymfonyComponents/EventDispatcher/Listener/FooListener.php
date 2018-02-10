<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 08.01.17
 * Time: 22:23
 */

namespace SymfonyComponents\EventDispatcher\Listener;


use Symfony\Component\EventDispatcher\GenericEvent;

class FooListener
{
    public function handler(GenericEvent $event)
    {
        /*
        if ($event->getSubject() instanceof Foo) {

        }
        if (isset($event['type']) && $event['type'] === 'foo') {
            // ... do something
        }
        //*/

        $std_class = $event->getArgument('class');
        $std_class->title = $std_class->title. ' World';
        $event->setArgument('class', $std_class);
    }
}