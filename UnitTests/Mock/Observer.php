<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 22.01.17
 * Time: 18:06
 */

namespace UnitTests\Mock;


class Observer
{
    public function update($argument)
    {
        // Do something.
    }

    public function reportError($errorCode, $errorMessage, Subject $subject)
    {
        // Do something
    }

    // Other methods.
}