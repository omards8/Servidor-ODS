<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class LoginController extends AbstractController
{
    /**
     * @Route("/alogin", name="alogin")
     */
    public function index(SessionInterface $session)
    {
        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";

        return $this->render('login/login.html.twig', [
            'title' => 'Login',
            'nombre' => $login
        ]);

    }
}
