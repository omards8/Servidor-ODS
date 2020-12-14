<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ForoController extends AbstractController
{
    /**
     * @Route("/foro", name="foro")
     */
    public function index(Request $request, SessionInterface $session)
    {
       
        $usuario = $request->request->get('name2');
        $email = $request->request->get('email');
        $message = $request->request->get('message');

        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";

        return $this->render('foro/foro.html.twig', [
            'title' => 'Foro',
            'nombre' => $login,
            'usuario' => $usuario,
            'correo' => $email,
            'mensaje' => $message
        ]);
    }
}
