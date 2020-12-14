<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class UsController extends AbstractController
{
    /**
     * @Route("/us", name="us")
     */
    public function index(SessionInterface $session)
    {
        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";

        return $this->render('us/us.html.twig', [
            'title' => 'Nosotros',
            'nombre' => $login
        ]);
    }
}
