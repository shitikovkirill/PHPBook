<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 06.01.17
 * Time: 13:21
 */

namespace SymfonyComponents\DependencyInjection;


use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class DependencyInjectionTest extends TestCase
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
    public function getArgument(ContainerBuilder $container)
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
    public function getArgumentFromOtherServices(ContainerBuilder $container)
    {
        $container->setParameter('mailer.transport', 'sendmail3');

        $container
            ->register('mailer3', Mailer::class)
            ->addArgument('%mailer.transport%');

        $mailer = $container->get('mailer3');
        $transport = $mailer->getTransport();

        $this->assertEquals('sendmail3', $transport);
        return $container;
    }

    /**
     * @test
     * @depends getArgumentFromOtherServices
     */
    public function getNewsletterAndAddConstructor(ContainerBuilder $container)
    {
        $container
            ->register('newsletter_manager', NewsletterManager::class)
            ->addArgument(new Reference('mailer3'));

        $nl = $container->get('newsletter_manager');
        $this->assertInstanceOf(NewsletterManager::class, $nl);
        $this->assertEquals('sendmail3', $nl->getMailer()->getTransport());
        return $container;
    }

    /**
     * @test
     * @depends getArgumentFromOtherServices
     */
    public function getNewsletterAddMailerUsingSetters(ContainerBuilder $container)
    {
        $container
            ->register('newsletter_manager2', NewsletterManager::class)
            ->addMethodCall('setMailer', array(new Reference('mailer')));

        $nl = $container->get('newsletter_manager2');
        $this->assertInstanceOf(NewsletterManager::class, $nl);
        $this->assertEquals('sendmail', $nl->getMailer()->getTransport());
    }

}