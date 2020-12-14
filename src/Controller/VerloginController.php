<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class VerloginController extends AbstractController
{
    /**
     * @Route("/verlogin", name="verlogin")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $user = $request->request->get('user');
        $session->set('usuario', $user);
        $email = $request->request->get('password');
        $session->set('contraseña', $email);
        $aux = strlen($user)>0?"HOLA ".$user:"";

        return $this->redirectToRoute('home');
    }
}
