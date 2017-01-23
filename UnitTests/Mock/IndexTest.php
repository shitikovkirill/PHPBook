<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 22.01.17
 * Time: 18:03
 */

namespace UnitTests\Mock;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testObserversAreUpdated()
    {
        // Create a mock for the Observer class,
        // only mock the update() method.
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['update'])
            ->getMock();

        // Set up the expectation for the update() method
        // to be called only once and with the string 'something'
        // as its parameter.
        $observer->expects($this->once())
            ->method('update')
            ->with($this->equalTo('something'));

        // Create a Subject object and attach the mocked
        // Observer object to it.
        $subject = new Subject('My subject');
        $subject->attach($observer);

        // Call the doSomething() method on the $subject object
        // which we expect to call the mocked Observer object's
        // update() method with the string 'something'.
        $subject->doSomething();
    }

    public function testErrorReported()
    {
        // Create a mock for the Observer class, mocking the
        // reportError() method
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['reportError'])
            ->getMock();

        $observer->expects($this->once())
            ->method('reportError')
            ->with(
                $this->greaterThan(0),
                $this->stringContains('Something'),
                $this->anything()
            );

        $subject = new Subject('My subject');
        $subject->attach($observer);

        // The doSomethingBad() method should report an error to the observer
        // via the reportError() method
        $subject->doSomethingBad();
    }

    public function testFunctionCalledTwoTimesWithSpecificArguments()
    {
        $mock = $this->getMockBuilder(stdClass::class)
            ->setMethods(['set'])
            ->getMock();

        $mock->expects($this->exactly(2))
            ->method('set')
            ->withConsecutive(
                [$this->equalTo('foo'), $this->greaterThan(0)],
                [$this->equalTo('bar'), $this->greaterThan(0)]
            );

        $mock->set('foo', 21);
        $mock->set('bar', 48);
    }

    public function testErrorReported2()
    {
        // Create a mock for the Observer class, mocking the
        // reportError() method
        $observer = $this->getMockBuilder(Observer::class)
            ->setMethods(['reportError'])
            ->getMock();

        $observer->expects($this->once())
            ->method('reportError')
            ->with(
                $this->greaterThan(0),
                $this->stringContains('Something'),
                $this->callback(
                    function ($subject) {
                        return is_callable([$subject, 'getName']) && $subject->getName() == 'My subject';
                    }
                )
            );

        $subject = new Subject('My subject');
        $subject->attach($observer);

        // The doSomethingBad() method should report an error to the observer
        // via the reportError() method
        $subject->doSomethingBad();
    }

    public function testIdenticalObjectPassed()
    {
        $expectedObject = new stdClass;

        $mock = $this->getMockBuilder(stdClass::class)
            ->setMethods(['foo'])
            ->getMock();

        $mock->expects($this->once())
            ->method('foo')
            ->with($this->identicalTo($expectedObject));

        $mock->foo($expectedObject);
    }

    public function testIdenticalObjectPassed2()
    {
        $cloneArguments = true;

        $mock = $this->getMockBuilder(stdClass::class)
            ->enableArgumentCloning()
            ->getMock();

        // now your mock clones parameters so the identicalTo constraint
        // will fail.
    }
}