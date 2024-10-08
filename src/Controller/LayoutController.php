<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LayoutController extends AbstractController
{
    #[Route('/', name: 'app_layout')]
    public function index(): Response
    {
        return $this->render('layout/index.html.twig', [
            'controller_name' => 'LayoutController',
        ]);
    }

    #[Route('/mapa', name: 'mapa_layout')]
    public function viewMapa(): Response
    {
        return $this->render('map.html.twig');
    }
}
