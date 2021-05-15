<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingWIPController extends AbstractController
{
    /**
     * @Route("/", name="landing_wip")
     */
    public function index(): Response
    {
        return $this->render('landing_wip/index.html.twig', [
            'controller_name' => 'LandingWIPController',
        ]);
    }
}
