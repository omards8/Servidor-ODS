<?php

namespace App\Controller;

use App\Entity\Producto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductsController extends AbstractController
{   
     /**
     * @Route("/products-{articulo<moviles|tablets|ordenadores>?moviles}", name="products")
     */
    public function main($articulo, SessionInterface $session)
    {
        $p1 = $this->generateUrl('page1');
        $p2 = $this->generateUrl('page2');
        $p3 = $this->generateUrl('page3');
        $user = $session->get('usuario');
        $session->set('articulo', $articulo);
        $login = strlen($user)>0?"HOLA ".$user:"";

        $productos=$this->getDoctrine()
                        ->getRepository(Producto::Class)
                        ->findBy(['tipo'=>$articulo]);

        return $this->render('products/products.html.twig', [
            'title' => 'Página 1',
            'nombre' => $login,
            'data' => $productos,
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
