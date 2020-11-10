<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Cv extends AbstractController
{
    /**
     * @Route("/cv", name="cv")
     */
    public function index(): Response
    {
        return $this->render('Acceuil/Cv.twig', [
            'controller_name' => 'Cv',
        ]);
    }
}
