<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
Use Symfony\Component\Mime\Email;

class MailerService
{
    public $mailerObject;
    public function __construct (private MailerInterface $mailer) {
        $this->mailerObject = $mailer;
    }

    public function sendEmail(
        $to = 'no-reply@trioenologie.fr',
        $subject = '',
        $content = '',
        $text = ''
    ): void{
        $email = (new Email())
            ->from('contact@trioenologie.fr')
            ->to($to)
            ->subject($subject)
            ->text($text)
            ->html($content);
        $this->mailer->send($email);
    }
}