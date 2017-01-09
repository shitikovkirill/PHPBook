<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 09.01.17
 * Time: 13:17
 */

namespace SymfonyComponents\EventDispatcher\Listener;

use Symfony\Component\EventDispatcher\Event;

class AcmeListener
{
    // ...

    public function onFooAction(Event $event)
    {
        // ... do something
    }
}