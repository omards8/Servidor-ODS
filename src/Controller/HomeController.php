<?php

namespace App\Controller;
use App\Entity\{Producto,Contacto};
use App\Form\ContactoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(SessionInterface $session)
    {
        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";

        return $this->render('home/home.html.twig', [
            'title' => 'Home',
            'nombre' => $login
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(SessionInterface $session, Request $request)
    {
        $user = $session->get('usuario');
        $login = strlen($user)>0?"HOLA ".$user:"";
        
        $contacto = new Contacto();
        $form= $this->createForm(ContactoType::class, $contacto);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contacto->setDate(new \DateTime("now"));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contacto);
            $entityManager->flush();
        }
        return $this->render('contact/contact.html.twig', [
            'title' => 'Contacto',
            'nombre' => $login,
            'form' => $form->createView()
        ]);
    }

    
}
