<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 12.01.17
 * Time: 18:05
 */

namespace PHP7\AnonymousClass;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /**
     * @test
     */
    public function anonymousClasses()
    {
        $app = new Application();
        $app->setLogger(
            new class implements Logger {
                public function log (string $msg)
                {
                    return ($msg);
                }
            }
        );

        $msg = $app->getLogger()->log("My first Log Message");
        $this->assertEquals("My first Log Message", $msg);
    }
}