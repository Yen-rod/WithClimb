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

/* user/restaurants/index.html.twig */
class __TwigTemplate_a54f02d93c1981378e13cd772b477a0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/restaurants/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/restaurants/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 6, $this->source); })()), "nombre", [], "any", false, false, false, 6), "html", null, true);
        yield " - WithClimb</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/restaurants/restaurant.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/restaurants/restaurant-comments.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/restaurants/restaurant-photos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/restaurants/gallery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/search/search.js"), "html", null, true);
        yield "\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    container: {
                        center: true,
                        padding: '1rem'
                    }
                }
            }
        }
    </script>
    <style>
        .dropdown-content {
            display: none;
        }
        .dropdown.active .dropdown-content {
            display: block;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .like-button.active {
            color: red;
        }
    </style>
</head>
<body class=\"bg-gray-100 min-h-screen\">
<div class=\"fixed top-0 left-0 right-0 z-50\">
    <header class=\"bg-black/90 backdrop-blur-sm text-white\">
        <nav class=\"container mx-auto flex justify-between items-center h-16 px-4\">
            <!-- Logo y búsqueda -->
            <div class=\"flex items-center gap-4\">
                <div class=\"text-2xl font-bold\">
                    <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">withClimb</a>
                </div>
                <div class=\"relative hidden md:block\">
                    <input type=\"text\"
                           data-search-input
                           placeholder=\"Buscar vías o restaurantes...\"
                           class=\"w-64 bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                </div>
            </div>

            <!-- Menú derecho (desktop) -->
            <div class=\"hidden md:flex items-center gap-4\">

                <!-- Usuario Dropdown -->
                <div class=\"relative dropdown\" id=\"profile-dropdown\">
                    <button class=\"flex items-center space-x-3 p-2 hover:bg-gray-800 rounded-lg transition-colors\">
                        <span>Opciones</span>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m19.5 8.25-7.5 7.5-7.5-7.5\" />
                        </svg>
                    </button>
                    <div class=\"dropdown-content absolute right-0 mt-2 w-48 bg-white text-gray-900 rounded-lg shadow-lg border border-gray-200\">
                        <div class=\"px-4 py-3 border-b border-gray-200\">
                            <p class=\"text-sm font-medium\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "nombre", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
                            <p class=\"text-xs text-gray-500\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "email", [], "any", false, false, false, 74), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"py-2\">
                            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis datos</a>
                            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis ascensos</a>
                            <div class=\"border-t border-gray-200\"></div>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-red-600 hover:bg-gray-50\">Salir</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón menú móvil -->
            <!-- Menú móvil -->
            <div id=\"mobile-menu\" class=\"hidden md:hidden\">
                <div class=\"px-4 pt-2 pb-4 space-y-3 bg-black/90 backdrop-blur-sm\">
                    <div class=\"relative\">
                        <input type=\"text\"
                               placeholder=\"Buscar vías o restaurantes...\"
                               class=\"w-full bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                    </div>
                    <div class=\"border-t border-gray-700 pt-3\">
                        <div class=\"flex items-center px-3 py-2\">
                            ";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "hasAvatar", [], "any", false, false, false, 97)) {
            // line 98
            yield "                                <img
                                        src=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "avatar", [], "any", false, false, false, 99))), "html", null, true);
            yield "\"
                                        alt=\"Avatar de ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "nombre", [], "any", false, false, false, 100), "html", null, true);
            yield "\"
                                        id=\"current-avatar\"
                                        class=\"w-24 h-24 rounded-full object-cover\"
                                >
                            ";
        } else {
            // line 105
            yield "                                <img
                                        src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                                        alt=\"Avatar por defecto\"
                                        id=\"current-avatar\"
                                        class=\"w-24 h-24 rounded-full object-cover\"
                                >
                            ";
        }
        // line 112
        yield "                            <div class=\"ml-3\">
                                <p class=\"text-sm font-medium text-white\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "nombre", [], "any", false, false, false, 113), "html", null, true);
        yield "</p>
                                <p class=\"text-xs text-gray-400\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "email", [], "any", false, false, false, 114), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"mt-2 space-y-1\">
                            <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis datos</a>
                            <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis ascensos</a>
                            <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"block px-3 py-2 text-red-400 hover:bg-gray-800 rounded-lg\">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Menú móvil -->
        <div id=\"mobile-menu\" class=\"hidden md:hidden\">
            <div class=\"px-4 pt-2 pb-4 space-y-3\">
                <div class=\"relative\">
                    <input type=\"text\"
                           placeholder=\"Buscar vías o restaurantes...\"
                           class=\"w-full bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                </div>
                <div class=\"border-t border-gray-700 pt-3\">
                    <div class=\"flex items-center px-3 py-2\">
                        <img src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "avatar", [], "any", false, false, false, 137))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "nombre", [], "any", false, false, false, 137), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\">
                        <div class=\"ml-3\">
                            <p class=\"text-sm font-medium text-white\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "nombre", [], "any", false, false, false, 139), "html", null, true);
        yield "</p>
                            <p class=\"text-xs text-gray-400\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "email", [], "any", false, false, false, 140), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"mt-2 space-y-1\">
                        <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mi perfil</a>
                        <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"block px-3 py-2 text-red-400 hover:bg-gray-800 rounded-lg\">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Contenido principal -->
<div class=\"pt-16 min-h-screen\">
    <!-- Banner del restaurante -->
    <div class=\"relative w-full h-[400px] md:h-[500px] overflow-hidden\">
        <img
                src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 158, $this->source); })()), "fotoPrincipal", [], "any", false, false, false, 158))), "html", null, true);
        yield "\"
                alt=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 159, $this->source); })()), "nombre", [], "any", false, false, false, 159), "html", null, true);
        yield "\"
                class=\"w-full h-full object-cover\"
        >
        <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-8\">
            <div class=\"container mx-auto\">
                <h1 class=\"text-white text-3xl md:text-4xl font-bold\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 164, $this->source); })()), "nombre", [], "any", false, false, false, 164), "html", null, true);
        yield "</h1>
                <div class=\"flex items-center gap-2 text-white/90 mt-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z\" />
                    </svg>
                    <span class=\"text-lg\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 170, $this->source); })()), "ubicacion", [], "any", false, false, false, 170), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class=\"container mx-auto px-4\">
        <div class=\"flex flex-col md:flex-row gap-6 py-6\">
            <!-- Columna izquierda -->
            <div class=\"flex-1\">
                <!-- Tabs -->
                <div class=\"border-b border-gray-200 mb-6\">
                    <nav class=\"flex space-x-8\">
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-blue-600 border-b-2 border-blue-600\" data-tab=\"informacion\">
                            Información
                        </button>
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-gray-500 hover:text-gray-700\" data-tab=\"ubicacion\">
                            Ubicación
                        </button>
                    </nav>
                </div>

                <!-- Contenido de tabs -->
                <div class=\"space-y-6\">
                    <!-- Tab de Información -->
                    <div id=\"informacion\" class=\"tab-content active\">
                        <div class=\"bg-white rounded-lg shadow-sm p-6\">
                            ";
        // line 198
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 198, $this->source); })()), "descripcion", [], "any", false, false, false, 198)) {
            // line 199
            yield "                                <p class=\"text-gray-600\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 199, $this->source); })()), "descripcion", [], "any", false, false, false, 199), "html", null, true);
            yield "</p>
                            ";
        } else {
            // line 201
            yield "                                <p class=\"text-gray-500 text-center\">No hay descripción disponible</p>
                            ";
        }
        // line 203
        yield "
                            <div class=\"mt-6 border-t border-gray-200 pt-6\">
                                <h3 class=\"text-lg font-medium mb-4\">Información de contacto</h3>
                                ";
        // line 206
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 206, $this->source); })()), "contacto", [], "any", false, false, false, 206)) {
            // line 207
            yield "                                    <div class=\"flex items-center gap-3 text-gray-600\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z\" />
                                        </svg>
                                        <span>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 211, $this->source); })()), "contacto", [], "any", false, false, false, 211), "html", null, true);
            yield "</span>
                                    </div>
                                ";
        }
        // line 214
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Tab de Ubicación -->
                    <div id=\"ubicacion\" class=\"tab-content\">
                        <div class=\"bg-white rounded-lg shadow-sm p-6\">
                            <div class=\"mt-4\">
                                <h3 class=\"font-medium mb-2\">Dirección</h3>
                                <p class=\"text-gray-600\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 223, $this->source); })()), "ubicacion", [], "any", false, false, false, 223), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Acciones -->
                <div class=\"flex items-center gap-4 mt-6 pb-6 border-b\">
                    <button id=\"uploadPhotoBtn\" class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z\" />
                        </svg>
                        <span>Subir foto</span>
                    </button>

                    <button data-gallery-button class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z\" />
                        </svg>
                        <span>Ver fotos</span>
                    </button>
                </div>

                <!-- Área de comentarios -->
                <div class=\"mt-6\">
                    <form id=\"commentForm\" data-restaurant-id=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 249, $this->source); })()), "id", [], "any", false, false, false, 249), "html", null, true);
        yield "\" class=\"mt-6\">
                            <textarea
                                    placeholder=\"Escribe un comentario...\"
                                    class=\"w-full p-3 bg-white rounded-lg shadow-sm border-0 focus:ring-2 focus:ring-blue-500\"
                                    rows=\"3\"
                            ></textarea>
                        <button class=\"mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700\">
                            Publicar comentario
                        </button>
                    </form>
                </div>
            </div>

            <!-- Columna derecha - Comentarios -->
            <div class=\"md:w-96\">
                <h2 class=\"text-lg font-semibold mb-4\">Comentarios</h2>
                <div class=\"space-y-4\" id=\"commentsContainer\" data-restaurant-id=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 265, $this->source); })()), "id", [], "any", false, false, false, 265), "html", null, true);
        yield "\">
                    <!-- Los comentarios se cargarán dinámicamente -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para subir fotos -->
<div id=\"uploadModal\" class=\"modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50\">
    <div class=\"bg-white p-6 rounded-lg w-full max-w-md m-4\">
        <h3 class=\"text-lg font-semibold mb-4\">Subir foto</h3>
        <form id=\"uploadForm\" class=\"space-y-4\">
            <input type=\"hidden\" name=\"restauranteId\" value=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 278, $this->source); })()), "id", [], "any", false, false, false, 278), "html", null, true);
        yield "\">

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">
                    Seleccionar imagen
                </label>
                <input
                        type=\"file\"
                        name=\"photo\"
                        accept=\"image/*\"
                        class=\"w-full text-sm text-gray-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-blue-50 file:text-blue-700
                hover:file:bg-blue-100
                cursor-pointer\"
                        required
                >
            </div>

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">
                    Descripción
                </label>
                <textarea
                        name=\"description\"
                        rows=\"3\"
                        class=\"w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                        placeholder=\"Describe tu foto...\"
                ></textarea>
            </div>

            <div class=\"flex justify-end gap-2\">
                <button
                        type=\"button\"
                        onclick=\"closeModal()\"
                        class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50\"
                >
                    Cancelar
                </button>
                <button
                        type=\"submit\"
                        class=\"px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700\"
                >
                    Subir foto
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Modal de Galería -->
<div id=\"galleryModal\" data-restaurante-id=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 330, $this->source); })()), "id", [], "any", false, false, false, 330), "html", null, true);
        yield "\" class=\"hidden fixed inset-0 bg-black/90 backdrop-blur-sm z-50\">
    <!-- Encabezado -->
    <div class=\"fixed top-0 left-0 right-0 p-4 flex justify-between items-center text-white\">
        <h3 class=\"text-xl font-semibold\">Galería de fotos</h3>
        <button onclick=\"closeGalleryModal()\" class=\"p-2 hover:bg-white/10 rounded-lg transition-colors\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
            </svg>
        </button>
    </div>

    <!-- Grid de fotos -->
    <div class=\"container mx-auto px-4 pt-20 pb-4 h-full overflow-y-auto\">
        <div class=\"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4\" id=\"galleryGrid\">
            ";
        // line 344
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 344, $this->source); })()), "fotos", [], "any", false, false, false, 344)) > 0)) {
            // line 345
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurante"]) || array_key_exists("restaurante", $context) ? $context["restaurante"] : (function () { throw new RuntimeError('Variable "restaurante" does not exist.', 345, $this->source); })()), "fotos", [], "any", false, false, false, 345));
            foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
                // line 346
                yield "                    <div class=\"relative aspect-square cursor-pointer\" onclick=\"showPhotoDetail('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foto"], "id", [], "any", false, false, false, 346), "html", null, true);
                yield "')\">
                        <img
                                src=\"";
                // line 348
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["foto"], "url", [], "any", false, false, false, 348))), "html", null, true);
                yield "\"
                                alt=\"";
                // line 349
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foto"], "descripcion", [], "any", false, false, false, 349), "html", null, true);
                yield "\"
                                class=\"w-full h-full object-cover rounded-lg\"
                        >
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['foto'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            yield "            ";
        } else {
            // line 355
            yield "                <div class=\"col-span-full flex flex-col items-center justify-center text-white py-12\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-12 h-12 mb-4\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z\" />
                    </svg>
                    <p>No hay fotos disponibles</p>
                </div>
            ";
        }
        // line 362
        yield "        </div>
    </div>
</div>

<!-- Modal de detalle de foto -->
<div id=\"photoDetailModal\" class=\"hidden fixed inset-0 bg-black/95 z-50 flex items-center justify-center\">
    <div class=\"container mx-auto p-4\">
        <div class=\"relative max-w-4xl mx-auto\">
            <!-- Navegación -->
            <button onclick=\"previousPhoto()\" class=\"absolute left-4 top-1/2 -translate-y-1/2 p-2 text-white hover:bg-white/10 rounded-full transition-colors\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 19.5L8.25 12l7.5-7.5\" />
                </svg>
            </button>
            <button onclick=\"nextPhoto()\" class=\"absolute right-4 top-1/2 -translate-y-1/2 p-2 text-white hover:bg-white/10 rounded-full transition-colors\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8.25 4.5l7.5 7.5-7.5 7.5\" />
                </svg>
            </button>

            <!-- Imagen y descripción -->
            <div class=\"relative\">
                <img id=\"photoDetailImage\" src=\"\" alt=\"\" class=\"w-full rounded-lg\">
                <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-6\">
                    <div class=\"flex items-start gap-4\">
                        <img id=\"photoDetailUserAvatar\" src=\"\" alt=\"\" class=\"w-10 h-10 rounded-full\">
                        <div class=\"flex-1 text-white\">
                            <p id=\"photoDetailUserName\" class=\"font-medium\"></p>
                            <p id=\"photoDetailDescription\" class=\"text-sm text-white/90 mt-1\"></p>
                            <p id=\"photoDetailDate\" class=\"text-sm text-white/70 mt-2\"></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón cerrar -->
            <button onclick=\"closePhotoDetail()\" class=\"absolute -top-12 right-0 p-2 text-white hover:bg-white/10 rounded-full transition-colors\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        </div>
    </div>
</div>
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
        return "user/restaurants/index.html.twig";
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
        return array (  555 => 362,  546 => 355,  543 => 354,  532 => 349,  528 => 348,  522 => 346,  517 => 345,  515 => 344,  498 => 330,  443 => 278,  427 => 265,  408 => 249,  379 => 223,  368 => 214,  362 => 211,  356 => 207,  354 => 206,  349 => 203,  345 => 201,  339 => 199,  337 => 198,  306 => 170,  297 => 164,  289 => 159,  285 => 158,  269 => 145,  265 => 144,  258 => 140,  254 => 139,  247 => 137,  227 => 120,  223 => 119,  219 => 118,  212 => 114,  208 => 113,  205 => 112,  196 => 105,  188 => 100,  184 => 99,  181 => 98,  179 => 97,  157 => 78,  153 => 77,  147 => 74,  143 => 73,  117 => 50,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ restaurante.nombre }} - WithClimb</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"{{ asset('assets/restaurants/restaurant.js') }}\"></script>
    <script src=\"{{ asset('assets/restaurants/restaurant-comments.js') }}\"></script>
    <script src=\"{{ asset('assets/restaurants/restaurant-photos.js') }}\"></script>
    <script src=\"{{ asset('assets/restaurants/gallery.js') }}\"></script>
    <script src=\"{{ asset('assets/search/search.js') }}\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    container: {
                        center: true,
                        padding: '1rem'
                    }
                }
            }
        }
    </script>
    <style>
        .dropdown-content {
            display: none;
        }
        .dropdown.active .dropdown-content {
            display: block;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .like-button.active {
            color: red;
        }
    </style>
</head>
<body class=\"bg-gray-100 min-h-screen\">
<div class=\"fixed top-0 left-0 right-0 z-50\">
    <header class=\"bg-black/90 backdrop-blur-sm text-white\">
        <nav class=\"container mx-auto flex justify-between items-center h-16 px-4\">
            <!-- Logo y búsqueda -->
            <div class=\"flex items-center gap-4\">
                <div class=\"text-2xl font-bold\">
                    <a href=\"{{ path('app_home') }}\">withClimb</a>
                </div>
                <div class=\"relative hidden md:block\">
                    <input type=\"text\"
                           data-search-input
                           placeholder=\"Buscar vías o restaurantes...\"
                           class=\"w-64 bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                </div>
            </div>

            <!-- Menú derecho (desktop) -->
            <div class=\"hidden md:flex items-center gap-4\">

                <!-- Usuario Dropdown -->
                <div class=\"relative dropdown\" id=\"profile-dropdown\">
                    <button class=\"flex items-center space-x-3 p-2 hover:bg-gray-800 rounded-lg transition-colors\">
                        <span>Opciones</span>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-4 h-4\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m19.5 8.25-7.5 7.5-7.5-7.5\" />
                        </svg>
                    </button>
                    <div class=\"dropdown-content absolute right-0 mt-2 w-48 bg-white text-gray-900 rounded-lg shadow-lg border border-gray-200\">
                        <div class=\"px-4 py-3 border-b border-gray-200\">
                            <p class=\"text-sm font-medium\">{{ app.user.nombre }}</p>
                            <p class=\"text-xs text-gray-500\">{{ app.user.email }}</p>
                        </div>
                        <div class=\"py-2\">
                            <a href=\"{{ path('app_users_profile') }}\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis datos</a>
                            <a href=\"{{ path('app_users_climbs') }}\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis ascensos</a>
                            <div class=\"border-t border-gray-200\"></div>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-red-600 hover:bg-gray-50\">Salir</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón menú móvil -->
            <!-- Menú móvil -->
            <div id=\"mobile-menu\" class=\"hidden md:hidden\">
                <div class=\"px-4 pt-2 pb-4 space-y-3 bg-black/90 backdrop-blur-sm\">
                    <div class=\"relative\">
                        <input type=\"text\"
                               placeholder=\"Buscar vías o restaurantes...\"
                               class=\"w-full bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                    </div>
                    <div class=\"border-t border-gray-700 pt-3\">
                        <div class=\"flex items-center px-3 py-2\">
                            {% if app.user.hasAvatar %}
                                <img
                                        src=\"{{ asset('uploads/' ~ app.user.avatar) }}\"
                                        alt=\"Avatar de {{ app.user.nombre }}\"
                                        id=\"current-avatar\"
                                        class=\"w-24 h-24 rounded-full object-cover\"
                                >
                            {% else %}
                                <img
                                        src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                                        alt=\"Avatar por defecto\"
                                        id=\"current-avatar\"
                                        class=\"w-24 h-24 rounded-full object-cover\"
                                >
                            {% endif %}
                            <div class=\"ml-3\">
                                <p class=\"text-sm font-medium text-white\">{{ app.user.nombre }}</p>
                                <p class=\"text-xs text-gray-400\">{{ app.user.email }}</p>
                            </div>
                        </div>
                        <div class=\"mt-2 space-y-1\">
                            <a href=\"{{ path('app_users_profile') }}\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis datos</a>
                            <a href=\"{{ path('app_users_climbs') }}\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis ascensos</a>
                            <a href=\"{{ path('app_logout') }}\" class=\"block px-3 py-2 text-red-400 hover:bg-gray-800 rounded-lg\">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Menú móvil -->
        <div id=\"mobile-menu\" class=\"hidden md:hidden\">
            <div class=\"px-4 pt-2 pb-4 space-y-3\">
                <div class=\"relative\">
                    <input type=\"text\"
                           placeholder=\"Buscar vías o restaurantes...\"
                           class=\"w-full bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                </div>
                <div class=\"border-t border-gray-700 pt-3\">
                    <div class=\"flex items-center px-3 py-2\">
                        <img src=\"{{ asset('uploads/' ~ app.user.avatar) }}\" alt=\"{{ app.user.nombre }}\" class=\"w-8 h-8 rounded-full\">
                        <div class=\"ml-3\">
                            <p class=\"text-sm font-medium text-white\">{{ app.user.nombre }}</p>
                            <p class=\"text-xs text-gray-400\">{{ app.user.email }}</p>
                        </div>
                    </div>
                    <div class=\"mt-2 space-y-1\">
                        <a href=\"{{ path('app_users_profile') }}\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mi perfil</a>
                        <a href=\"{{ path('app_logout') }}\" class=\"block px-3 py-2 text-red-400 hover:bg-gray-800 rounded-lg\">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Contenido principal -->
<div class=\"pt-16 min-h-screen\">
    <!-- Banner del restaurante -->
    <div class=\"relative w-full h-[400px] md:h-[500px] overflow-hidden\">
        <img
                src=\"{{ asset('uploads/' ~ restaurante.fotoPrincipal) }}\"
                alt=\"{{ restaurante.nombre }}\"
                class=\"w-full h-full object-cover\"
        >
        <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-8\">
            <div class=\"container mx-auto\">
                <h1 class=\"text-white text-3xl md:text-4xl font-bold\">{{ restaurante.nombre }}</h1>
                <div class=\"flex items-center gap-2 text-white/90 mt-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z\" />
                    </svg>
                    <span class=\"text-lg\">{{ restaurante.ubicacion }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class=\"container mx-auto px-4\">
        <div class=\"flex flex-col md:flex-row gap-6 py-6\">
            <!-- Columna izquierda -->
            <div class=\"flex-1\">
                <!-- Tabs -->
                <div class=\"border-b border-gray-200 mb-6\">
                    <nav class=\"flex space-x-8\">
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-blue-600 border-b-2 border-blue-600\" data-tab=\"informacion\">
                            Información
                        </button>
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-gray-500 hover:text-gray-700\" data-tab=\"ubicacion\">
                            Ubicación
                        </button>
                    </nav>
                </div>

                <!-- Contenido de tabs -->
                <div class=\"space-y-6\">
                    <!-- Tab de Información -->
                    <div id=\"informacion\" class=\"tab-content active\">
                        <div class=\"bg-white rounded-lg shadow-sm p-6\">
                            {% if restaurante.descripcion %}
                                <p class=\"text-gray-600\">{{ restaurante.descripcion }}</p>
                            {% else %}
                                <p class=\"text-gray-500 text-center\">No hay descripción disponible</p>
                            {% endif %}

                            <div class=\"mt-6 border-t border-gray-200 pt-6\">
                                <h3 class=\"text-lg font-medium mb-4\">Información de contacto</h3>
                                {% if restaurante.contacto %}
                                    <div class=\"flex items-center gap-3 text-gray-600\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z\" />
                                        </svg>
                                        <span>{{ restaurante.contacto }}</span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <!-- Tab de Ubicación -->
                    <div id=\"ubicacion\" class=\"tab-content\">
                        <div class=\"bg-white rounded-lg shadow-sm p-6\">
                            <div class=\"mt-4\">
                                <h3 class=\"font-medium mb-2\">Dirección</h3>
                                <p class=\"text-gray-600\">{{ restaurante.ubicacion }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Acciones -->
                <div class=\"flex items-center gap-4 mt-6 pb-6 border-b\">
                    <button id=\"uploadPhotoBtn\" class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z\" />
                        </svg>
                        <span>Subir foto</span>
                    </button>

                    <button data-gallery-button class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z\" />
                        </svg>
                        <span>Ver fotos</span>
                    </button>
                </div>

                <!-- Área de comentarios -->
                <div class=\"mt-6\">
                    <form id=\"commentForm\" data-restaurant-id=\"{{ restaurante.id }}\" class=\"mt-6\">
                            <textarea
                                    placeholder=\"Escribe un comentario...\"
                                    class=\"w-full p-3 bg-white rounded-lg shadow-sm border-0 focus:ring-2 focus:ring-blue-500\"
                                    rows=\"3\"
                            ></textarea>
                        <button class=\"mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700\">
                            Publicar comentario
                        </button>
                    </form>
                </div>
            </div>

            <!-- Columna derecha - Comentarios -->
            <div class=\"md:w-96\">
                <h2 class=\"text-lg font-semibold mb-4\">Comentarios</h2>
                <div class=\"space-y-4\" id=\"commentsContainer\" data-restaurant-id=\"{{ restaurante.id }}\">
                    <!-- Los comentarios se cargarán dinámicamente -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para subir fotos -->
<div id=\"uploadModal\" class=\"modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50\">
    <div class=\"bg-white p-6 rounded-lg w-full max-w-md m-4\">
        <h3 class=\"text-lg font-semibold mb-4\">Subir foto</h3>
        <form id=\"uploadForm\" class=\"space-y-4\">
            <input type=\"hidden\" name=\"restauranteId\" value=\"{{ restaurante.id }}\">

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">
                    Seleccionar imagen
                </label>
                <input
                        type=\"file\"
                        name=\"photo\"
                        accept=\"image/*\"
                        class=\"w-full text-sm text-gray-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-blue-50 file:text-blue-700
                hover:file:bg-blue-100
                cursor-pointer\"
                        required
                >
            </div>

            <div>
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">
                    Descripción
                </label>
                <textarea
                        name=\"description\"
                        rows=\"3\"
                        class=\"w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                        placeholder=\"Describe tu foto...\"
                ></textarea>
            </div>

            <div class=\"flex justify-end gap-2\">
                <button
                        type=\"button\"
                        onclick=\"closeModal()\"
                        class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50\"
                >
                    Cancelar
                </button>
                <button
                        type=\"submit\"
                        class=\"px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700\"
                >
                    Subir foto
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Modal de Galería -->
<div id=\"galleryModal\" data-restaurante-id=\"{{ restaurante.id }}\" class=\"hidden fixed inset-0 bg-black/90 backdrop-blur-sm z-50\">
    <!-- Encabezado -->
    <div class=\"fixed top-0 left-0 right-0 p-4 flex justify-between items-center text-white\">
        <h3 class=\"text-xl font-semibold\">Galería de fotos</h3>
        <button onclick=\"closeGalleryModal()\" class=\"p-2 hover:bg-white/10 rounded-lg transition-colors\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
            </svg>
        </button>
    </div>

    <!-- Grid de fotos -->
    <div class=\"container mx-auto px-4 pt-20 pb-4 h-full overflow-y-auto\">
        <div class=\"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4\" id=\"galleryGrid\">
            {% if restaurante.fotos|length > 0 %}
                {% for foto in restaurante.fotos %}
                    <div class=\"relative aspect-square cursor-pointer\" onclick=\"showPhotoDetail('{{ foto.id }}')\">
                        <img
                                src=\"{{ asset('uploads/photos/' ~ foto.url) }}\"
                                alt=\"{{ foto.descripcion }}\"
                                class=\"w-full h-full object-cover rounded-lg\"
                        >
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col-span-full flex flex-col items-center justify-center text-white py-12\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-12 h-12 mb-4\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z\" />
                    </svg>
                    <p>No hay fotos disponibles</p>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Modal de detalle de foto -->
<div id=\"photoDetailModal\" class=\"hidden fixed inset-0 bg-black/95 z-50 flex items-center justify-center\">
    <div class=\"container mx-auto p-4\">
        <div class=\"relative max-w-4xl mx-auto\">
            <!-- Navegación -->
            <button onclick=\"previousPhoto()\" class=\"absolute left-4 top-1/2 -translate-y-1/2 p-2 text-white hover:bg-white/10 rounded-full transition-colors\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 19.5L8.25 12l7.5-7.5\" />
                </svg>
            </button>
            <button onclick=\"nextPhoto()\" class=\"absolute right-4 top-1/2 -translate-y-1/2 p-2 text-white hover:bg-white/10 rounded-full transition-colors\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8.25 4.5l7.5 7.5-7.5 7.5\" />
                </svg>
            </button>

            <!-- Imagen y descripción -->
            <div class=\"relative\">
                <img id=\"photoDetailImage\" src=\"\" alt=\"\" class=\"w-full rounded-lg\">
                <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-6\">
                    <div class=\"flex items-start gap-4\">
                        <img id=\"photoDetailUserAvatar\" src=\"\" alt=\"\" class=\"w-10 h-10 rounded-full\">
                        <div class=\"flex-1 text-white\">
                            <p id=\"photoDetailUserName\" class=\"font-medium\"></p>
                            <p id=\"photoDetailDescription\" class=\"text-sm text-white/90 mt-1\"></p>
                            <p id=\"photoDetailDate\" class=\"text-sm text-white/70 mt-2\"></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón cerrar -->
            <button onclick=\"closePhotoDetail()\" class=\"absolute -top-12 right-0 p-2 text-white hover:bg-white/10 rounded-full transition-colors\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        </div>
    </div>
</div>
</body>
</html>", "user/restaurants/index.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\user\\restaurants\\index.html.twig");
    }
}
