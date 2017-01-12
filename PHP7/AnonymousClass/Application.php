<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 12.01.17
 * Time: 18:06
 */

namespace PHP7\AnonymousClass;


class Application {
    private $logger;
    public function getLogger(): Logger {
        return $this->logger;
    }
    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }
}