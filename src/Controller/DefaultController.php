<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route ("/", name="homepage")
     */
    public function HomePage()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route ("signin", name="signin")
     */
    public function SignIn()
    {
        return $this->render('signin.html.twig');
    }

    /**
     * @Route("/sol-eco", name="sol-eco")
     */
    public function SolEco()
    {
        return $this->render(
            'sol-eco/home-sol-eco.html.twig'
        );
    }

    /**
     * @Route("/fiche-produit", name="fiche-produit")
     */
    public function FicheProduit()
    {
        return $this->render(
            'sol-eco/fiche-produit-sol-eco.html.twig'
        );
    }

    /**
     * @Route("/commande", name="commande")
     */
    public function Commande()
    {
        return $this->render(
            'sol-eco/commande-sol-eco.html.twig'
        );
    }
}
