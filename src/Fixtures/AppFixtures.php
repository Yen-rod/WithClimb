<?php

namespace App\Fixtures;

use App\Entity\Bloques;
use App\Entity\Restaurantes;
use App\Entity\Vias;
use App\Entity\Zonas;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Crear zona para las vías
        $zonaEscalada = new Zonas();
        $zonaEscalada->setNombre('Sierra de Guara');
        $zonaEscalada->setUbicacion('42.2602,-0.1373');
        $zonaEscalada->setDescripcion('Zona de escalada en la Sierra de Guara, conocida por sus paredes de caliza y vías deportivas.');
        $zonaEscalada->setTotalAscensos(0);
        $manager->persist($zonaEscalada);

        // Crear zona para restaurantes
        $zonaRestaurantes = new Zonas();
        $zonaRestaurantes->setNombre('Valle de Rodellar');
        $zonaRestaurantes->setUbicacion('42.2867,-0.0719');
        $zonaRestaurantes->setDescripcion('Valle conocido por su gastronomía local y servicios para escaladores.');
        $zonaRestaurantes->setTotalAscensos(0);
        $manager->persist($zonaRestaurantes);

        // Crear bloque para las vías
        $bloque = new Bloques();
        $bloque->setNombre('El Gran Bloque');
        $bloque->setDescripcion('Bloque principal con múltiples vías de diferentes dificultades.');
        $bloque->setTotalAscensos(0);
        $bloque->setIdZona($zonaEscalada);
        $manager->persist($bloque);

        // Crear vías
        $routesImages = [
            'breathtaking-shot-beautiful-horndlwand-s-landscape-germany.jpg',
            'clouds-hilly.jpg',
            'high-angle-shot-brown-rock-formation-lot-parked-cars-blue-sky-evening.jpg',
            'low-angle-shot-rocky-waterfall-with-green-trees.jpg',
            'tourist-taking-skaftafell-glacier-vatnajokull-national-park-iceland.jpg'
        ];

        $viasDatos = [
            [
                'nombre' => 'La Directa',
                'grado' => '6c',
                'descripcion' => 'Vía directa con pasos técnicos y adherencia.',
            ],
            [
                'nombre' => 'Travesía del Águila',
                'grado' => '7a',
                'descripcion' => 'Travesía exigente con movimientos dinámicos.',
            ],
            [
                'nombre' => 'El Techo',
                'grado' => '7b+',
                'descripcion' => 'Vía con techo pronunciado y secuencia compleja.',
            ],
            [
                'nombre' => 'Placas del Sol',
                'grado' => '6b',
                'descripcion' => 'Escalada técnica en placa vertical.',
            ],
            [
                'nombre' => 'Diedro Norte',
                'grado' => '6a+',
                'descripcion' => 'Vía clásica por diedro con buenas presas.',
            ]
        ];

        foreach ($viasDatos as $index => $viaDato) {
            $via = new Vias();
            $via->setNombre($viaDato['nombre']);
            $via->setGradoDificultad($viaDato['grado']);
            $via->setDescripcion($viaDato['descripcion']);
            $via->setIdBloque($bloque);
            $via->setFotoPrincipal('routes/' . $routesImages[$index]);
            $via->setTotalAscensos(0);
            $manager->persist($via);
        }

        // Crear restaurantes
        $restaurantImages = [
            'abstract-blur-coffee-shop.jpg',
            'blur-coffee-shop-interior.jpg',
            'blurred-background-restaurant-with-comfortable-armchairs.jpg',
            'people-restaurante-unfocused.jpg',
            'render-interior-restaurant-design.jpg'
        ];

        $restaurantesDatos = [
            [
                'nombre' => 'El Rincón del Escalador',
                'ubicacion' => 'Calle Principal 1, Rodellar',
                'contacto' => '+34 974 123 456',
                'descripcion' => 'Restaurante especializado en comida tradicional y platos energéticos para escaladores.'
            ],
            [
                'nombre' => 'La Terraza Verde',
                'ubicacion' => 'Plaza Mayor 5, Rodellar',
                'contacto' => '+34 974 789 012',
                'descripcion' => 'Restaurante con terraza panorámica y cocina mediterránea.'
            ],
            [
                'nombre' => 'Casa Montañesa',
                'ubicacion' => 'Avenida del Valle 12, Rodellar',
                'contacto' => '+34 974 345 678',
                'descripcion' => 'Cocina tradicional aragonesa en un ambiente rústico.'
            ],
            [
                'nombre' => 'El Refugio',
                'ubicacion' => 'Camino del Río 3, Rodellar',
                'contacto' => '+34 974 901 234',
                'descripcion' => 'Bar-restaurante con ambiente escalador y comida casera.'
            ],
            [
                'nombre' => 'Mesón del Climb',
                'ubicacion' => 'Carretera Principal km 2, Rodellar',
                'contacto' => '+34 974 567 890',
                'descripcion' => 'Restaurante familiar con platos tradicionales y menú del día.'
            ]
        ];

        foreach ($restaurantesDatos as $index => $restauranteDato) {
            $restaurante = new Restaurantes();
            $restaurante->setNombre($restauranteDato['nombre']);
            $restaurante->setUbicacion($restauranteDato['ubicacion']);
            $restaurante->setContacto($restauranteDato['contacto']);
            $restaurante->setDescripcion($restauranteDato['descripcion']);
            $restaurante->setZonaRestaurante($zonaRestaurantes);
            $restaurante->setFotoPrincipal('restaurants/' . $restaurantImages[$index]);
            $manager->persist($restaurante);
        }

        $manager->flush();
    }
}