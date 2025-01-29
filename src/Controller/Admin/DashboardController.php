<?php

namespace App\Controller\Admin;

use App\Entity\Restaurantes;
use App\Entity\Vias;
use App\Entity\Zonas;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    #[Route('/zones/list', name: 'admin_zones',methods: ['GET'])]
    public function zones(): Response
    {
        return $this->render('dashboard/zones/list.html.twig');
    }
    #[Route('/zones/create', name: 'admin_zones_create',methods: ['GET'])]
    public function zonesCreateOne(): Response
    {
        return $this->render('dashboard/zones/new.html.twig');
    }
    #[Route('/zones/view/{id}', name: 'admin_zones_view',methods: ['GET'])]
    public function zonesViewOne(Zonas $zona): Response
    {
        return $this->render('dashboard/zones/show.html.twig',[
            'zonaId' => $zona->getId()
        ]);
    }

    #[Route('/zones/update/{id}', name: 'admin_zones_update',methods: ["GET"])]
    public function zonesUpdateOne(Zonas $zona): Response
    {
        return $this->render('dashboard/zones/edit.html.twig',[
            'zona' => $zona
        ]);
    }

    #[Route('/restaurants/list', name: 'admin_restaurants', methods: ['GET'])]
    public function restaurants(): Response
    {
        return $this->render('dashboard/restaurants/list.html.twig');
    }

    #[Route('/restaurants/create', name: 'admin_restaurants_create', methods: ['GET'])]
    public function restaurantsCreateOne(): Response
    {
        return $this->render('dashboard/restaurants/new.html.twig');
    }

    #[Route('/restaurants/update/{id}', name: 'admin_restaurants_update', methods: ['GET'])]
    public function restaurantsUpdateOne(Restaurantes $restaurante): Response
    {
        return $this->render('dashboard/restaurants/edit.html.twig', [
            'restauranteId' => $restaurante->getId()
        ]);
    }

    #[Route('/restaurants/view/{id}', name: 'admin_restaurants_view',methods: ['GET'])]
    public function restaurantsViewOne(Restaurantes $restaurante): Response
    {
        return $this->render('dashboard/restaurants/show.html.twig',[
            'restauranteId' => $restaurante->getId()
        ]);
    }

    #[Route('/routes/create', name: 'admin_routes_create', methods: ['GET'])]
    public function routesCreateOne(): Response
    {
        return $this->render('dashboard/routes/new.html.twig');
    }

    #[Route('/routes/list', name: 'admin_routes', methods: ['GET'])]
    public function routes(): Response
    {
        return $this->render('dashboard/routes/list.html.twig');
    }

    #[Route('/routes/view/{id}', name: 'admin_routes_view', methods: ['GET'])]
    public function routesViewOne(Vias $via): Response
    {
        return $this->render('dashboard/routes/show.html.twig', [
            'viaId' => $via->getId()
        ]);
    }

    #[Route('/routes/update/{id}', name: 'admin_routes_update', methods: ['GET'])]
    public function routesUpdateOne(Vias $via): Response
    {
        return $this->render('dashboard/routes/edit.html.twig', [
            'viaId' => $via->getId()
        ]);
    }
}
