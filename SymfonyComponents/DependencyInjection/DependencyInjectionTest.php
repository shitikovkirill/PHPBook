<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 06.01.17
 * Time: 13:21
 */

namespace SymfonyComponents\DependencyInjection;


use Symfony\Component\DependencyInjection\ContainerBuilder;

class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function containerGet()
    {
        $container = new ContainerBuilder();
        $container->register('mailer', Mailer::class);

        $mailer = $container->get('mailer');
        $this->assertInstanceOf(Mailer::class, $mailer);
        return $container;
    }

    /**
     * @test
     * @depends containerGet
     */
    public function getArgument($container)
    {
        $container->register('mailer2', Mailer::class)
            ->addArgument('sendmail2');

        $mailer = $container->get('mailer2');
        $transport = $mailer->getTransport();

        $this->assertEquals('sendmail2', $transport);
    }

    /**
     * @test
     * @depends containerGet
     */
    public function getArgumentFromOtherServices($container)
    {
        $container->setParameter('mailer.transport', 'sendmail3');

        $container
            ->register('mailer3', Mailer::class)
            ->addArgument('%mailer.transport%');

        $mailer = $container->get('mailer3');
        $transport = $mailer->getTransport();

        $this->assertEquals('sendmail3', $transport);
    }
}