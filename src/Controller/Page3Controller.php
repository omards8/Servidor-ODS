<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Page3Controller extends AbstractController
{
    /**
     * @Route("/page3", name="page3")
     */
    public function index(SessionInterface $session)
    {
        $p1 = $this->generateUrl('page1');
        $p2 = $this->generateUrl('page2');
        $p3 = $this->generateUrl('page3');
        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";

        return $this->render('page3/page3.html.twig', [
            'title' => 'Página 3',
            'nombre' => $login,
            'p1' => $p1,
            'p2' => $p2,
            'p3' => $p3
        ]);
    }
}
