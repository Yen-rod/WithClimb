<?php

namespace App\Service;

use App\Entity\Usuarios;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use SymfonyCasts\Bundle\VerifyEmail\Model\VerifyEmailSignatureComponents;

readonly class EmailSender
{
    public function __construct(
        private MailerInterface            $mailer,
        private LoggerInterface            $logger,
    ) {}

    /**
     * @throws TransportExceptionInterface
     */
    public function sendEmailConfirmation(VerifyEmailSignatureComponents $signature, UserInterface $user): void
    {

        /** @var Usuarios $userToSend */
        $userToSend = $user;
        $this->logger->info('email star to send');
        $email = (new TemplatedEmail())
            ->from('noreply@withclimb.com')
            ->to($userToSend->getEmail())
            ->subject('Por favor confirma tu email')
            ->htmlTemplate('emails/registration/confirmation_email.html.twig')
            ->context([
                'verifyUrl' => $signature->getSignedUrl(),
                'expiresAtMessageKey' => $signature->getExpirationMessageKey(),
                'expiresAtMessageData' => $signature->getExpirationMessageData(),
            ])
        ;

        $this->mailer->send($email);
        $this->logger->info('email sent');
    }
}