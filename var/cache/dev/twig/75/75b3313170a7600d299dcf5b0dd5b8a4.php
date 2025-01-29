<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_c3b67dee8c75d1f8add4a460c97b4548 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\" class=\"scroll-smooth\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>WithClimb - Tu comunidad de escalada</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
    <script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/home.js"), "html", null, true);
        yield "\"></script>
</head>
<body class=\"bg-gray-50\">
<!-- Navbar -->
<nav class=\"fixed top-0 w-full bg-white shadow-md z-50\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"flex justify-between items-center h-16\">
            <!-- Logo -->
            <div class=\"flex-shrink-0 flex items-center\">
                <span class=\"text-2xl font-bold text-green-600\">WithClimb</span>
            </div>

            <!-- Desktop Menu -->
            <div class=\"hidden md:block\">
                <div class=\"ml-10 flex items-center space-x-4\">
                    <div class=\"hidden md:block\">
                        <div class=\"ml-10 flex items-center space-x-4\">
                            <a href=\"#inicio\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/>
                                    <polyline points=\"9 22 9 12 15 12 15 22\"/>
                                </svg>
                                <span>Inicio</span>
                            </a>
                            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/>
                                    <circle cx=\"12\" cy=\"10\" r=\"3\"/>
                                </svg>
                                <span>Zonas</span>
                            </a>
                            <a href=\"#comunidad\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                    <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                    <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                                </svg>
                                <span>Comunidad</span>
                            </a>
                            <a href=\"#contacto\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"/>
                                </svg>
                                <span>Contacto</span>
                            </a>
                            ";
        // line 54
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 55
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"
                                   class=\"bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\"
                                         class=\"h-5 w-5\"
                                         viewBox=\"0 0 24 24\"
                                         fill=\"none\"
                                         stroke=\"currentColor\"
                                         stroke-width=\"2\"
                                         stroke-linecap=\"round\"
                                         stroke-linejoin=\"round\">
                                        <path d=\"M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4\"/>
                                        <polyline points=\"10 17 15 12 10 7\"/>
                                        <line x1=\"15\" y1=\"12\" x2=\"3\" y2=\"12\"/>
                                    </svg>
                                    <span>Iniciar Sesión</span>
                                </a>
                            ";
        } else {
            // line 72
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"
                                   class=\"bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\"
                                         class=\"h-5 w-5\"
                                         viewBox=\"0 0 24 24\"
                                         fill=\"none\"
                                         stroke=\"currentColor\"
                                         stroke-width=\"2\"
                                         stroke-linecap=\"round\"
                                         stroke-linejoin=\"round\">
                                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                                        <polyline points=\"16 17 21 12 16 7\"/>
                                        <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
                                    </svg>
                                    <span>Cerrar Sesión</span>
                                </a>
                            ";
        }
        // line 89
        yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class=\"md:hidden\">
                <button id=\"mobile-menu-button\" class=\"inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500\">
                    <span class=\"sr-only\">Abrir menú principal</span>
                    <svg class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id=\"mobile-menu\" class=\"hidden md:hidden\">
        <div class=\"px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white\">
            <a href=\"#inicio\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/>
                        <polyline points=\"9 22 9 12 15 12 15 22\"/>
                    </svg>
                    <span>Inicio</span>
                </div>
            </a>

            <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/>
                        <circle cx=\"12\" cy=\"10\" r=\"3\"/>
                    </svg>
                    <span>Zonas</span>
                </div>
            </a>

            <a href=\"#comunidad\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                        <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                        <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                    </svg>
                    <span>Comunidad</span>
                </div>
            </a>

            <a href=\"#contacto\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"/>
                    </svg>
                    <span>Contacto</span>
                </div>
            </a>

            ";
        // line 150
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 151
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700\">
                    <div class=\"flex items-center justify-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4\"/>
                            <polyline points=\"10 17 15 12 10 7\"/>
                            <line x1=\"15\" y1=\"12\" x2=\"3\" y2=\"12\"/>
                        </svg>
                        <span>Iniciar Sesión</span>
                    </div>
                </a>
            ";
        } else {
            // line 162
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700\">
                    <div class=\"flex items-center justify-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                            <polyline points=\"16 17 21 12 16 7\"/>
                            <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
                        </svg>
                        <span>Cerrar Sesión</span>
                    </div>
                </a>
            ";
        }
        // line 173
        yield "        </div>
    </div>
</nav>

<!-- Hero Section with Carousel -->
<div class=\"relative h-screen pt-16\" id=\"inicio\">
    <div class=\"carousel relative h-full overflow-hidden\">
        <div class=\"carousel-slides flex h-full transition-transform duration-500\">
            <div class=\"carousel-slide min-w-full h-full relative\">
                <img src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/autumn-running-outdoors-workout-long-shot-low-view.jpg"), "html", null, true);
        yield "\" alt=\"Escalada en roca\" class=\"w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                    <div class=\"text-center text-white px-4\">
                        <h1 class=\"text-4xl md:text-6xl font-bold mb-4\">Descubre tu próxima aventura</h1>
                        <p class=\"text-xl md:text-2xl mb-8\">Encuentra las mejores rutas de escalada en la Comunidad de Madrid</p>
                        <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"bg-green-600 text-white px-8 py-3 rounded-lg text-lg hover:bg-green-700 transition-colors\">
                            Explorar Rutas
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"carousel-slide min-w-full h-full relative\">
                <img src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/strong-man-climbing-mountain.jpg"), "html", null, true);
        yield "\" alt=\"Comunidad escaladora\" class=\"w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                    <div class=\"text-center text-white px-4\">
                        <h1 class=\"text-4xl md:text-6xl font-bold mb-4\">Únete a la comunidad</h1>
                        <p class=\"text-xl md:text-2xl mb-8\">Conecta con otros escaladores y comparte experiencias</p>
                        <button class=\"bg-orange-500 text-white px-8 py-3 rounded-lg text-lg hover:bg-orange-600 transition-colors\">
                            Unirse Ahora
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"carousel-slide min-w-full h-full relative\">
                <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/view-young-person-rock-climbing-practicing-bouldering-training.jpg"), "html", null, true);
        yield "\" alt=\"Comunidad escaladora\" class=\"w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                    <div class=\"text-center text-white px-4\">
                        <h1 class=\"text-4xl md:text-6xl font-bold mb-4\">Únete a la comunidad</h1>
                        <p class=\"text-xl md:text-2xl mb-8\">Conecta con otros escaladores y comparte experiencias</p>
                        <button class=\"bg-orange-500 text-white px-8 py-3 rounded-lg text-lg hover:bg-orange-600 transition-colors\">
                            Unirse Ahora
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full\">
            ←
        </button>
        <button class=\"carousel-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full\">
            →
        </button>
    </div>
</div>

<!-- Zonas Destacadas -->
<section id=\"zonas\" class=\"py-16 bg-white\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <h2 class=\"text-3xl font-bold text-center mb-12 text-gray-800\">Zonas Destacadas</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            ";
        // line 233
        yield "            ";
        $macros["zones"] = $this->macros["zones"] = $this->loadTemplate("macros/routes/routes.html.twig", "home/index.html.twig", 233)->unwrap();
        // line 234
        yield "
            ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 235, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 236
            yield "                ";
            yield $macros["zones"]->getTemplateForMacro("macro_render", $context, 236, $this->getSourceContext())->macro_render(...[("uploads/" . CoreExtension::getAttribute($this->env, $this->source,             // line 237
$context["route"], "fotoPrincipal", [], "any", false, false, false, 237)), CoreExtension::getAttribute($this->env, $this->source,             // line 238
$context["route"], "nombre", [], "any", false, false, false, 238), CoreExtension::getAttribute($this->env, $this->source,             // line 239
$context["route"], "descripcion", [], "any", false, false, false, 239), Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 240
$context["route"], "ascensos", [], "any", false, false, false, 240)), CoreExtension::getAttribute($this->env, $this->source,             // line 241
$context["route"], "id", [], "any", false, false, false, 241)]);
            // line 242
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['route'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "        </div>
    </div>
</section>

<!-- Comunidad -->
<section id=\"comunidad\" class=\"py-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <h2 class=\"text-3xl font-bold text-center mb-12 text-gray-800\">Nuestra Comunidad</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">

            ";
        // line 255
        yield "            ";
        $macros["testimonials"] = $this->macros["testimonials"] = $this->loadTemplate("macros/testimonial/testimonial.html.twig", "home/index.html.twig", 255)->unwrap();
        // line 256
        yield "

            ";
        // line 258
        yield $macros["testimonials"]->getTemplateForMacro("macro_testimonial", $context, 258, $this->getSourceContext())->macro_testimonial(...["Ana García", 2018, "Una comunidad increíble para encontrar nuevas rutas y compañeros de escalada.", "mountain"]);
        // line 263
        yield "

            ";
        // line 265
        yield $macros["testimonials"]->getTemplateForMacro("macro_testimonial", $context, 265, $this->getSourceContext())->macro_testimonial(...["Carlos Ruiz", 2019, "La mejor manera de descubrir nuevas zonas de escalada y compartir experiencias.", "climbing"]);
        // line 270
        yield "

            ";
        // line 272
        yield $macros["testimonials"]->getTemplateForMacro("macro_testimonial", $context, 272, $this->getSourceContext())->macro_testimonial(...["Laura Martín", 2020, "Me encanta la facilidad para encontrar compañeros de escalada cerca de mi zona.", "map-marker-alt"]);
        // line 277
        yield "

            ";
        // line 279
        yield $macros["testimonials"]->getTemplateForMacro("macro_testimonial", $context, 279, $this->getSourceContext())->macro_testimonial(...["David Sánchez", 2017, "Una plataforma esencial para cualquier escalador que quiera progresar.", "route"]);
        // line 284
        yield "
        </div>
    </div>
</section>

<!-- Sección Contacto y Ubicación -->
<section class=\"py-16 bg-white\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8\">
            <!-- Formulario de Contacto -->
            <div class=\"bg-gray-50 p-8 rounded-lg\">
                <h2 class=\"text-2xl font-bold mb-6\">Contacta con nosotros</h2>
                <form class=\"space-y-4\">
                    <div>
                        <label for=\"name\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre</label>
                        <input
                                type=\"text\"
                                id=\"name\"
                                name=\"name\"
                                class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500\"
                                required
                        >
                    </div>
                    <div>
                        <label for=\"email\" class=\"block text-sm font-medium text-gray-700 mb-1\">Email</label>
                        <input
                                type=\"email\"
                                id=\"email\"
                                name=\"email\"
                                class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500\"
                                required
                        >
                    </div>
                    <div>
                        <label for=\"message\" class=\"block text-sm font-medium text-gray-700 mb-1\">Mensaje</label>
                        <textarea
                                id=\"message\"
                                name=\"message\"
                                rows=\"4\"
                                class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500\"
                                required
                        ></textarea>
                    </div>
                    <button
                            type=\"submit\"
                            class=\"w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-300\"
                    >
                        Enviar mensaje
                    </button>
                </form>
            </div>

            <!-- Dónde estamos -->
            <div class=\"bg-gray-50 p-8 rounded-lg\">
                <h2 class=\"text-2xl font-bold mb-6\">Dónde estamos</h2>
                <div class=\"space-y-4\">
                    <div class=\"flex items-start space-x-3\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500 flex-shrink-0\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z\" />
                        </svg>
                        <div>
                            <h3 class=\"font-semibold\">Dirección</h3>
                            <p class=\"text-gray-600\">Calle Principal 123, Madrid</p>
                        </div>
                    </div>

                    <div class=\"flex items-start space-x-3\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500 flex-shrink-0\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z\" />
                        </svg>
                        <div>
                            <h3 class=\"font-semibold\">Teléfono</h3>
                            <p class=\"text-gray-600\">+34 912 345 678</p>
                        </div>
                    </div>

                    <div class=\"flex items-start space-x-3\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500 flex-shrink-0\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75\" />
                        </svg>
                        <div>
                            <h3 class=\"font-semibold\">Email</h3>
                            <p class=\"text-gray-600\">info@withclimb.com</p>
                        </div>
                    </div>

                    <!-- Mapa -->
                    <div class=\"mt-6 h-64 bg-gray-200 rounded-lg\">
                        <div id=\"map\" class=\"w-full h-full rounded-lg relative overflow-hidden\">
                            <img src=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tourist-holding-map-street.jpg"), "html", null, true);
        yield "\" alt=\"map\" class=\"w-full h-full object-cover rounded-lg\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class=\"bg-gray-800 text-white py-12\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 md:grid-cols-4 gap-8\">
            <div>
                <h3 class=\"text-xl font-bold mb-4\">WithClimb</h3>
                <p class=\"text-gray-400\">Tu comunidad de escalada en Madrid</p>
            </div>
            <div>
                <h4 class=\"font-semibold mb-4\">Enlaces</h4>
                <ul class=\"space-y-2\">
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white\">Sobre nosotros</a></li>
                    <li><a href=\"";
        // line 395
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"text-gray-400 hover:text-white\">Zonas</a></li>
                    <li><a href=\"#comunidad\" class=\"text-gray-400 hover:text-white\">Comunidad</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  504 => 395,  480 => 374,  388 => 284,  386 => 279,  382 => 277,  380 => 272,  376 => 270,  374 => 265,  370 => 263,  368 => 258,  364 => 256,  361 => 255,  349 => 244,  342 => 242,  340 => 241,  339 => 240,  338 => 239,  337 => 238,  336 => 237,  334 => 236,  330 => 235,  327 => 234,  324 => 233,  295 => 206,  280 => 194,  270 => 187,  262 => 182,  251 => 173,  236 => 162,  221 => 151,  219 => 150,  185 => 119,  153 => 89,  132 => 72,  111 => 55,  109 => 54,  84 => 32,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\" class=\"scroll-smooth\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>WithClimb - Tu comunidad de escalada</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
    <script src=\"{{ asset('assets/home/home.js') }}\"></script>
</head>
<body class=\"bg-gray-50\">
<!-- Navbar -->
<nav class=\"fixed top-0 w-full bg-white shadow-md z-50\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"flex justify-between items-center h-16\">
            <!-- Logo -->
            <div class=\"flex-shrink-0 flex items-center\">
                <span class=\"text-2xl font-bold text-green-600\">WithClimb</span>
            </div>

            <!-- Desktop Menu -->
            <div class=\"hidden md:block\">
                <div class=\"ml-10 flex items-center space-x-4\">
                    <div class=\"hidden md:block\">
                        <div class=\"ml-10 flex items-center space-x-4\">
                            <a href=\"#inicio\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/>
                                    <polyline points=\"9 22 9 12 15 12 15 22\"/>
                                </svg>
                                <span>Inicio</span>
                            </a>
                            <a href=\"{{ path('app_users_climbs') }}\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/>
                                    <circle cx=\"12\" cy=\"10\" r=\"3\"/>
                                </svg>
                                <span>Zonas</span>
                            </a>
                            <a href=\"#comunidad\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                    <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                    <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                    <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                                </svg>
                                <span>Comunidad</span>
                            </a>
                            <a href=\"#contacto\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"/>
                                </svg>
                                <span>Contacto</span>
                            </a>
                            {% if not is_granted('ROLE_USER') %}
                                <a href=\"{{ path('app_login') }}\"
                                   class=\"bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\"
                                         class=\"h-5 w-5\"
                                         viewBox=\"0 0 24 24\"
                                         fill=\"none\"
                                         stroke=\"currentColor\"
                                         stroke-width=\"2\"
                                         stroke-linecap=\"round\"
                                         stroke-linejoin=\"round\">
                                        <path d=\"M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4\"/>
                                        <polyline points=\"10 17 15 12 10 7\"/>
                                        <line x1=\"15\" y1=\"12\" x2=\"3\" y2=\"12\"/>
                                    </svg>
                                    <span>Iniciar Sesión</span>
                                </a>
                            {% else %}
                                <a href=\"{{ path('app_logout') }}\"
                                   class=\"bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\"
                                         class=\"h-5 w-5\"
                                         viewBox=\"0 0 24 24\"
                                         fill=\"none\"
                                         stroke=\"currentColor\"
                                         stroke-width=\"2\"
                                         stroke-linecap=\"round\"
                                         stroke-linejoin=\"round\">
                                        <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                                        <polyline points=\"16 17 21 12 16 7\"/>
                                        <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
                                    </svg>
                                    <span>Cerrar Sesión</span>
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class=\"md:hidden\">
                <button id=\"mobile-menu-button\" class=\"inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500\">
                    <span class=\"sr-only\">Abrir menú principal</span>
                    <svg class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id=\"mobile-menu\" class=\"hidden md:hidden\">
        <div class=\"px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white\">
            <a href=\"#inicio\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/>
                        <polyline points=\"9 22 9 12 15 12 15 22\"/>
                    </svg>
                    <span>Inicio</span>
                </div>
            </a>

            <a href=\"{{ path('app_users_climbs') }}\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"/>
                        <circle cx=\"12\" cy=\"10\" r=\"3\"/>
                    </svg>
                    <span>Zonas</span>
                </div>
            </a>

            <a href=\"#comunidad\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                        <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                        <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                        <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                    </svg>
                    <span>Comunidad</span>
                </div>
            </a>

            <a href=\"#contacto\" class=\"text-gray-700 hover:text-orange-500 block px-3 py-2 rounded-md text-base font-medium\">
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z\"/>
                    </svg>
                    <span>Contacto</span>
                </div>
            </a>

            {% if not is_granted('ROLE_USER') %}
                <a href=\"{{ path('app_login') }}\" class=\"block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700\">
                    <div class=\"flex items-center justify-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4\"/>
                            <polyline points=\"10 17 15 12 10 7\"/>
                            <line x1=\"15\" y1=\"12\" x2=\"3\" y2=\"12\"/>
                        </svg>
                        <span>Iniciar Sesión</span>
                    </div>
                </a>
            {% else %}
                <a href=\"{{ path('app_logout') }}\" class=\"block w-full text-center px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700\">
                    <div class=\"flex items-center justify-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"/>
                            <polyline points=\"16 17 21 12 16 7\"/>
                            <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
                        </svg>
                        <span>Cerrar Sesión</span>
                    </div>
                </a>
            {% endif %}
        </div>
    </div>
</nav>

<!-- Hero Section with Carousel -->
<div class=\"relative h-screen pt-16\" id=\"inicio\">
    <div class=\"carousel relative h-full overflow-hidden\">
        <div class=\"carousel-slides flex h-full transition-transform duration-500\">
            <div class=\"carousel-slide min-w-full h-full relative\">
                <img src=\"{{ asset('assets/home/autumn-running-outdoors-workout-long-shot-low-view.jpg') }}\" alt=\"Escalada en roca\" class=\"w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                    <div class=\"text-center text-white px-4\">
                        <h1 class=\"text-4xl md:text-6xl font-bold mb-4\">Descubre tu próxima aventura</h1>
                        <p class=\"text-xl md:text-2xl mb-8\">Encuentra las mejores rutas de escalada en la Comunidad de Madrid</p>
                        <a href=\"{{ path('app_users_climbs') }}\" class=\"bg-green-600 text-white px-8 py-3 rounded-lg text-lg hover:bg-green-700 transition-colors\">
                            Explorar Rutas
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"carousel-slide min-w-full h-full relative\">
                <img src=\"{{ asset('assets/home/strong-man-climbing-mountain.jpg') }}\" alt=\"Comunidad escaladora\" class=\"w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                    <div class=\"text-center text-white px-4\">
                        <h1 class=\"text-4xl md:text-6xl font-bold mb-4\">Únete a la comunidad</h1>
                        <p class=\"text-xl md:text-2xl mb-8\">Conecta con otros escaladores y comparte experiencias</p>
                        <button class=\"bg-orange-500 text-white px-8 py-3 rounded-lg text-lg hover:bg-orange-600 transition-colors\">
                            Unirse Ahora
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"carousel-slide min-w-full h-full relative\">
                <img src=\"{{ asset('assets/home/view-young-person-rock-climbing-practicing-bouldering-training.jpg') }}\" alt=\"Comunidad escaladora\" class=\"w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                    <div class=\"text-center text-white px-4\">
                        <h1 class=\"text-4xl md:text-6xl font-bold mb-4\">Únete a la comunidad</h1>
                        <p class=\"text-xl md:text-2xl mb-8\">Conecta con otros escaladores y comparte experiencias</p>
                        <button class=\"bg-orange-500 text-white px-8 py-3 rounded-lg text-lg hover:bg-orange-600 transition-colors\">
                            Unirse Ahora
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full\">
            ←
        </button>
        <button class=\"carousel-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full\">
            →
        </button>
    </div>
</div>

<!-- Zonas Destacadas -->
<section id=\"zonas\" class=\"py-16 bg-white\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <h2 class=\"text-3xl font-bold text-center mb-12 text-gray-800\">Zonas Destacadas</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            {# Importar la macro #}
            {% import \"macros/routes/routes.html.twig\" as zones %}

            {% for route in routes %}
                {{ zones.render(
                    'uploads/' ~ route.fotoPrincipal,
                    route.nombre,
                    route.descripcion,
                    route.ascensos|length,
                    route.id
                ) }}
            {% endfor %}
        </div>
    </div>
</section>

<!-- Comunidad -->
<section id=\"comunidad\" class=\"py-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <h2 class=\"text-3xl font-bold text-center mb-12 text-gray-800\">Nuestra Comunidad</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">

            {# Importar la macro #}
            {% import \"macros/testimonial/testimonial.html.twig\" as testimonials %}


            {{ testimonials.testimonial(
                'Ana García',
                2018,
                'Una comunidad increíble para encontrar nuevas rutas y compañeros de escalada.',
                'mountain'
            ) }}

            {{ testimonials.testimonial(
                'Carlos Ruiz',
                2019,
                'La mejor manera de descubrir nuevas zonas de escalada y compartir experiencias.',
                'climbing'
            ) }}

            {{ testimonials.testimonial(
                'Laura Martín',
                2020,
                'Me encanta la facilidad para encontrar compañeros de escalada cerca de mi zona.',
                'map-marker-alt'
            ) }}

            {{ testimonials.testimonial(
                'David Sánchez',
                2017,
                'Una plataforma esencial para cualquier escalador que quiera progresar.',
                'route'
            ) }}
        </div>
    </div>
</section>

<!-- Sección Contacto y Ubicación -->
<section class=\"py-16 bg-white\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8\">
            <!-- Formulario de Contacto -->
            <div class=\"bg-gray-50 p-8 rounded-lg\">
                <h2 class=\"text-2xl font-bold mb-6\">Contacta con nosotros</h2>
                <form class=\"space-y-4\">
                    <div>
                        <label for=\"name\" class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre</label>
                        <input
                                type=\"text\"
                                id=\"name\"
                                name=\"name\"
                                class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500\"
                                required
                        >
                    </div>
                    <div>
                        <label for=\"email\" class=\"block text-sm font-medium text-gray-700 mb-1\">Email</label>
                        <input
                                type=\"email\"
                                id=\"email\"
                                name=\"email\"
                                class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500\"
                                required
                        >
                    </div>
                    <div>
                        <label for=\"message\" class=\"block text-sm font-medium text-gray-700 mb-1\">Mensaje</label>
                        <textarea
                                id=\"message\"
                                name=\"message\"
                                rows=\"4\"
                                class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500\"
                                required
                        ></textarea>
                    </div>
                    <button
                            type=\"submit\"
                            class=\"w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-300\"
                    >
                        Enviar mensaje
                    </button>
                </form>
            </div>

            <!-- Dónde estamos -->
            <div class=\"bg-gray-50 p-8 rounded-lg\">
                <h2 class=\"text-2xl font-bold mb-6\">Dónde estamos</h2>
                <div class=\"space-y-4\">
                    <div class=\"flex items-start space-x-3\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500 flex-shrink-0\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z\" />
                        </svg>
                        <div>
                            <h3 class=\"font-semibold\">Dirección</h3>
                            <p class=\"text-gray-600\">Calle Principal 123, Madrid</p>
                        </div>
                    </div>

                    <div class=\"flex items-start space-x-3\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500 flex-shrink-0\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z\" />
                        </svg>
                        <div>
                            <h3 class=\"font-semibold\">Teléfono</h3>
                            <p class=\"text-gray-600\">+34 912 345 678</p>
                        </div>
                    </div>

                    <div class=\"flex items-start space-x-3\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500 flex-shrink-0\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75\" />
                        </svg>
                        <div>
                            <h3 class=\"font-semibold\">Email</h3>
                            <p class=\"text-gray-600\">info@withclimb.com</p>
                        </div>
                    </div>

                    <!-- Mapa -->
                    <div class=\"mt-6 h-64 bg-gray-200 rounded-lg\">
                        <div id=\"map\" class=\"w-full h-full rounded-lg relative overflow-hidden\">
                            <img src=\"{{ asset('assets/images/tourist-holding-map-street.jpg') }}\" alt=\"map\" class=\"w-full h-full object-cover rounded-lg\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class=\"bg-gray-800 text-white py-12\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"grid grid-cols-1 md:grid-cols-4 gap-8\">
            <div>
                <h3 class=\"text-xl font-bold mb-4\">WithClimb</h3>
                <p class=\"text-gray-400\">Tu comunidad de escalada en Madrid</p>
            </div>
            <div>
                <h4 class=\"font-semibold mb-4\">Enlaces</h4>
                <ul class=\"space-y-2\">
                    <li><a href=\"#\" class=\"text-gray-400 hover:text-white\">Sobre nosotros</a></li>
                    <li><a href=\"{{ path('app_users_climbs') }}\" class=\"text-gray-400 hover:text-white\">Zonas</a></li>
                    <li><a href=\"#comunidad\" class=\"text-gray-400 hover:text-white\">Comunidad</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>
</html>", "home/index.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\home\\index.html.twig");
    }
}
