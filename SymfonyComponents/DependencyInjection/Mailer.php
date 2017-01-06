<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 06.01.17
 * Time: 13:40
 */

namespace SymfonyComponents\DependencyInjection;


class Mailer
{
    private $transport;

    public function __construct($transport = 'sendmail')
    {
        $this->transport = $transport;
    }

    public function getTransport()
    {
        return $this->transport;
    }

    // ...
}