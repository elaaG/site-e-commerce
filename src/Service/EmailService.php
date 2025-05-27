<?php

namespace App\Service;

<<<<<<< HEAD
=======
use App\Entity\Order;
>>>>>>> dff57b60e9b8a60fd827e1bfdda0ce85313b4704
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendOrderConfirmation(string $to, Order $order): void
    {
        $email = (new Email())
            ->from('no-reply@artisanat-boutique.com')
            ->to($to)
<<<<<<< HEAD
            ->subject('Confirmation de votre commande')
            ->text('Votre commande #' . $order->getId() . ' a été confirmée.');
=======
            ->subject('Confirmation de votre commande #' . $order->getId())
            ->text('Votre commande #' . $order->getId() . ' a été confirmée. Total: ' . $order->getTotal() . '€');
>>>>>>> dff57b60e9b8a60fd827e1bfdda0ce85313b4704

        $this->mailer->send($email);
    }
}