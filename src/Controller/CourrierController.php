<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class CourrierController extends AbstractController
{
    #[Route('/courrier', name: 'app_courrier')]
    public function index(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('admin@toitspyreneens.com')
            ->to('nicolas.piot@yahoo.fr')
            ->subject($_POST['nom'] . ' (' . $_POST['sujet'] . ')')
            ->html('<p>' . $_POST['msg'] . '</p><a href="mailto:' . $_POST['email'] . '">Répondre</a>');

        $mailer->send($email);

        return $this->redirectToRoute('app_accueil');
    }
}
