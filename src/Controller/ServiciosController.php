<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ServiciosController extends AbstractController
{
    /**
     * @Route("/servicios", name="servicios")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";

        return $this->render('servicios/servicios.html.twig', [
            'title' => 'Servicios',
            'nombre' => $login
        ]);
    }
}
