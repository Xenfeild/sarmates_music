<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SarmatesController extends AbstractController
{
    #[Route('/sarmates', name: 'app_sarmates')]
    public function index(): Response
    {
        return $this->render('sarmates/index.html.twig', [
            'controller_name' => 'SarmatesController',
        ]);
    }
}
