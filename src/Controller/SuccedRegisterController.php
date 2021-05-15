<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuccedRegisterController extends AbstractController
{
    /**
     * @Route("/success", name="succed_register")
     */
    public function index(): Response
    {
        return $this->render('succed_register/index.html.twig', [
            'controller_name' => 'SuccedRegisterController',
        ]);
    }
}
