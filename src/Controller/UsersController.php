<?php

namespace App\Controller;

use App\Entity\Restaurantes;
use App\Entity\Vias;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UsersController extends AbstractController
{
    #[Route('/usuarios/ascensos', name: 'app_users_climbs')]
    public function climbs(): Response
    {
        return $this->render('user/climbs/index.html.twig');
    }

    #[Route('/usuarios/vias/{id}', name: 'app_users_routes')]
    public function routes(Vias $via): Response
    {
        return $this->render('user/routes/index.html.twig',[
            'via' => $via
        ]);
    }

    #[Route('/usuarios/restaurantes/{id}', name: 'app_users_restaurants')]
    public function restaurants(Restaurantes $restaurante): Response
    {
        return $this->render('user/restaurants/index.html.twig',[
            'restaurante' => $restaurante
        ]);
    }

    #[Route('/usuarios/perfil', name: 'app_users_profile')]
    public function profile(): Response
    {
        return $this->render('user/profile/index.html.twig');
    }
}
