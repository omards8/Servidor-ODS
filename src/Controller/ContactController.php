<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/hola", name="hola")
     */
    public function index(SessionInterface $session)
    {
        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";

        return $this->render('contact/contact.html.twig', [
            'title' => 'Contacto',
            'nombre' => $login
        ]);
    }
}
