<?php

namespace App\Controller;

use App\Repository\ViasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ViasRepository $viasRepository): Response
    {
        $vias = $viasRepository->findBy(
            [],
            [],
            3,
            0
        );
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'routes' => $vias
        ]);
    }
}
