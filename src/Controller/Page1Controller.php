<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Page1Controller extends AbstractController
{
    /**
     * @Route("/page1", name="page1")
     */
    function page1(SessionInterface $session, $articulo)
    {
        $p1 = $this->generateUrl('page1');
        $p2 = $this->generateUrl('page2');
        $p3 = $this->generateUrl('page3');
        $user = $session->get('usuario');
        $articulo = $session->get('articulo');
        $login = strlen($user)>0?"HOLA ".$user:"";
        return $this->render('page1/page1.html.twig', [
            'title' => 'Página 1',
            'nombre' => $login,
            'data' => $this->productos[$articulo],
            'p1' => $p1,
            'p2' => $p2,
            'p3' => $p3
        ]);
    }
    private $productos=[
        'moviles' => [
            ['img' => 'images/iphone12.jpg'],
            ['img' => 'images/f2pro.jpg'],
            ['img' => 'images/mate40pro.jpg'],
            ['img' => 'images/mi10pro.jpg'],
            ['img' => 'images/oneplus8.jpg'],
            ['img' => 'images/n20.jpg'],
            ['img' => 'images/s20.jpg'],
            ['img' => 'images/findx2pro.jpg'],
            ['img' => 'images/mark2.jpg'],
        ],
        'tablets' => [
            ['img' => 'images/portfolio-img1.jpg'],
            ['img' => 'images/portfolio-img2.jpg'],
            ['img' => 'images/portfolio-img3.jpg'],
            ['img' => 'images/portfolio-img4.jpg'],
            ['img' => 'images/portfolio-img5.jpg'],
            ['img' => 'images/portfolio-img6.jpg'],
            ['img' => 'images/portfolio-img7.jpg'],
            ['img' => 'images/portfolio-img8.jpg'],
            ['img' => 'images/portfolio-img9.jpg'],
            ['img' => 'images/portfolio-img10.jpg'],
        ],
        'ordenadores' => [
            ['img' => 'images/portfolio-img1.jpg'],
            ['img' => 'images/portfolio-img2.jpg'],
            ['img' => 'images/portfolio-img3.jpg'],
            ['img' => 'images/portfolio-img4.jpg'],
            ['img' => 'images/portfolio-img5.jpg'],
            ['img' => 'images/portfolio-img6.jpg'],
            ['img' => 'images/portfolio-img7.jpg'],
            ['img' => 'images/portfolio-img8.jpg'],
            ['img' => 'images/portfolio-img9.jpg'],
            ['img' => 'images/portfolio-img10.jpg'],
        ],
    ];
    
}
