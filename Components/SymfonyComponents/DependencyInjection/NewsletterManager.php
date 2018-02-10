<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 06.01.17
 * Time: 15:03
 */

namespace SymfonyComponents\DependencyInjection;


class NewsletterManager
{
    private $mailer;

    public function __construct(Mailer $mailer = null)
    {
        $this->mailer = $mailer;
    }

    /**
     * @return Mailer
     */
    public function getMailer(): Mailer
    {
        return $this->mailer;
    }

    /**
     * @param Mailer $mailer
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}