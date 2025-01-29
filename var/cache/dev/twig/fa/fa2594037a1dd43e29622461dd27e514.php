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

/* user/climbs/index.html.twig */
class __TwigTemplate_0a542877bc1b2c634d6b5c36f0cb9e14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/climbs/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/climbs/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mis ascensos</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
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
        /* Estilos para mantener el dropdown abierto al hacer hover */
        .dropdown-content {
            display: none;
        }

        .dropdown.active .dropdown-content {
            display: block;
        }
    </style>
</head>
<body class=\"bg-gray-100\">
<!-- Navbar fixed -->
<div class=\"fixed top-0 left-0 right-0 z-50\">
    <!-- El resto del HTML permanece igual hasta los dropdowns -->
    <header class=\"bg-black/90 backdrop-blur-sm text-white\">
        <nav class=\"container mx-auto flex justify-between items-center h-16 px-4\">
            <!-- Logo y búsqueda -->
            <div class=\"flex items-center gap-4\">
                <div class=\"text-2xl font-bold\">
                    <a href=\"";
        // line 40
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
                    <!-- Dropdown Menu -->
                    <div class=\"dropdown-content absolute right-0 mt-2 w-48 bg-white text-gray-900 rounded-lg shadow-lg border border-gray-200\">
                        <div class=\"px-4 py-3 border-b border-gray-200\">
                            <p class=\"text-sm font-medium\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "nombre", [], "any", false, false, false, 63), "html", null, true);
        yield "</p>
                            <p class=\"text-xs text-gray-500\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "email", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"py-2\">
                            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis datos</a>
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis ascensos</a>
                            <div class=\"border-t border-gray-200\"></div>
                            <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"block px-4 py-2 text-sm text-red-600 hover:bg-gray-50\">Salir</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón menú móvil -->
            <div class=\"md:hidden flex items-center gap-4\">
                <div class=\"relative\">
                    <input type=\"text\"
                           data-search-input
                           placeholder=\"Buscar vías o restaurantes...\"
                           class=\"w-full bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                </div>
                <button class=\"relative p-2\">
                    <span class=\"absolute -top-1 -right-1 bg-blue-500 text-xs rounded-full w-4 h-4 flex items-center justify-center\">3</span>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\" />
                    </svg>
                </button>
                <button id=\"mobile-menu-button\" class=\"p-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                    </svg>
                </button>
            </div>
        </nav>

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
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "hasAvatar", [], "any", false, false, false, 108)) {
            // line 109
            yield "                            <img
                                    src=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "avatar", [], "any", false, false, false, 110))), "html", null, true);
            yield "\"
                                    alt=\"Avatar de ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "nombre", [], "any", false, false, false, 111), "html", null, true);
            yield "\"
                                    id=\"current-avatar\"
                                    class=\"w-24 h-24 rounded-full object-cover\"
                            >
                        ";
        } else {
            // line 116
            yield "                            <img
                                    src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                                    alt=\"Avatar por defecto\"
                                    id=\"current-avatar\"
                                    class=\"w-24 h-24 rounded-full object-cover\"
                            >
                        ";
        }
        // line 123
        yield "                        <div class=\"ml-3\">
                            <p class=\"text-sm font-medium text-white\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "nombre", [], "any", false, false, false, 124), "html", null, true);
        yield "</p>
                            <p class=\"text-xs text-gray-400\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "email", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"mt-2 space-y-1\">
                        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis datos</a>
                        <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis ascensos</a>
                        <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"block px-3 py-2 text-red-400 hover:bg-gray-800 rounded-lg\">Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

</div>

<div class=\"mt-16\">
    <!-- Hero section con gradiente -->
    <div class=\"relative h-96 bg-gradient-to-b from-gray-400 to-gray-600\">

        <!-- Imagen de fondo con fallback a un color si no hay imagen -->
        <div class=\"absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat\"
             style=\"background-image: url('";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/climbs/rope-climber-rock.jpg"), "html", null, true);
        yield "');\">
            <!-- Overlay oscuro para mejorar legibilidad -->
            <div class=\"absolute inset-0 bg-black/40\"></div>
        </div>

        <div class=\"absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/50\">
            <div class=\"container mx-auto flex items-end gap-6\">
                ";
        // line 153
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "hasAvatar", [], "any", false, false, false, 153)) {
            // line 154
            yield "                    <img
                            src=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "avatar", [], "any", false, false, false, 155))), "html", null, true);
            yield "\"
                            alt=\"Avatar de ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "nombre", [], "any", false, false, false, 156), "html", null, true);
            yield "\"
                            id=\"current-avatar\"
                            class=\"w-32 h-32 rounded-full border-4 border-white shadow-lg\"
                    >
                ";
        } else {
            // line 161
            yield "                    <img
                            src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                            alt=\"Avatar por defecto\"
                            id=\"current-avatar\"
                            class=\"w-32 h-32 rounded-full border-4 border-white shadow-lg\"
                    >
                ";
        }
        // line 168
        yield "                <div class=\"text-white mb-4\">
                    <h1 class=\"text-4xl font-bold mb-2\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169), "nombre", [], "any", false, false, false, 169), "html", null, true);
        yield "</h1>
                    <p class=\"text-sm opacity-90\">
                        ";
        // line 171
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "totalAscensos", [], "any", false, false, false, 171) > 0)) {
            // line 172
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "totalAscensos", [], "any", false, false, false, 172) == 1)) {
                // line 173
                yield "                                Ha completado 1 ascenso
                            ";
            } else {
                // line 175
                yield "                                Ha completado ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "totalAscensos", [], "any", false, false, false, 175), "html", null, true);
                yield " ascensos
                            ";
            }
            // line 177
            yield "                        ";
        } else {
            // line 178
            yield "                            Aún no ha registrado ningún ascenso
                        ";
        }
        // line 180
        yield "                    </p>
                    <div class=\"flex gap-8 mt-4\">
                        <div>
                            <div class=\"text-sm font-medium opacity-90\">FOLLOWERS</div>
                            <div class=\"text-xl font-bold\">10</div>
                        </div>
                        <div>
                            <div class=\"text-sm font-medium opacity-90\">FOLLOWING</div>
                            <div class=\"text-xl font-bold\">115</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación de tabs -->
    <nav class=\"bg-white border-b sticky top-16 z-40\">
        <div class=\"container mx-auto\">
            <ul class=\"flex\" id=\"tabList\">
                <li class=\"py-4 px-6 font-medium cursor-pointer border-b-2 border-transparent border-b-2 border-yellow-500 text-yellow-500\">
                    Ascensos
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class=\"container mx-auto py-8 px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
            <!-- Climbs -->
                <div class=\"lg:col-span-2 space-y-4\">
                    ";
        // line 212
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "ascensos", [], "any", false, false, false, 212)) > 0)) {
            // line 213
            yield "                        ";
            $macros["c"] = $this->macros["c"] = $this->loadTemplate("macros/climbs/climbs.html.twig", "user/climbs/index.html.twig", 213)->unwrap();
            // line 214
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "ascensos", [], "any", false, false, false, 214));
            foreach ($context['_seq'] as $context["_key"] => $context["climb"]) {
                // line 215
                yield "                            ";
                yield $macros["c"]->getTemplateForMacro("macro_render", $context, 215, $this->getSourceContext())->macro_render(...[$context["climb"]]);
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['climb'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            yield "                    ";
        } else {
            // line 218
            yield "                        <div class=\"bg-white rounded-lg shadow-sm p-8 text-center\">
                            <div class=\"text-gray-400 mb-4\">
                                <svg class=\"w-16 h-16 mx-auto\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M14 10h.01M14 14h.01M14 18h.01M10 10h.01M10 14h.01M10 18h.01M6 10h.01M6 14h.01M6 18h.01M20 6v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h12a2 2 0 012 2z\"/>
                                </svg>
                            </div>
                            <h3 class=\"text-lg font-medium text-gray-900 mb-2\">No hay ascensos registrados</h3>
                            <p class=\"text-gray-500\">¡Comienza a registrar tus ascensos y comparte tus logros!</p>
                        </div>
                    ";
        }
        // line 228
        yield "                </div>

            <!-- Sidebar -->
            <div class=\"space-y-6\">
                <div class=\"bg-white rounded-lg shadow-sm p-6\">
                    <h3 class=\"text-lg font-bold mb-4\">Mis fotos</h3>
                    ";
        // line 234
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "user", [], "any", false, false, false, 234), "fotos", [], "any", false, false, false, 234)) > 0)) {
            // line 235
            yield "                        <div class=\"grid grid-cols-2 gap-2\">
                            ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 236, $this->source); })()), "user", [], "any", false, false, false, 236), "fotos", [], "any", false, false, false, 236));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 237
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["photo"], "url", [], "any", false, false, false, 237))), "html", null, true);
                yield "\"
                                     alt=\"Shared photo\"
                                     class=\"w-full aspect-square object-cover rounded-lg hover:opacity-90 transition-opacity cursor-pointer\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "                        </div>
                    ";
        } else {
            // line 243
            yield "                        <div class=\"text-center py-8\">
                            <div class=\"text-gray-400 mb-4\">
                                <svg class=\"w-12 h-12 mx-auto\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                                </svg>
                            </div>
                            <p class=\"text-gray-500\">No has subido ninguna foto todavía</p>
                            <p class=\"text-sm text-gray-400\">Comparte tus momentos favoritos</p>
                        </div>
                    ";
        }
        // line 253
        yield "                </div>
            </div>
        </div>
    </main>
</div>

    <script src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/climbs/climbs.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/search/search.js"), "html", null, true);
        yield "\"></script>
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
        return "user/climbs/index.html.twig";
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
        return array (  431 => 260,  427 => 259,  419 => 253,  407 => 243,  403 => 241,  392 => 237,  388 => 236,  385 => 235,  383 => 234,  375 => 228,  363 => 218,  360 => 217,  351 => 215,  346 => 214,  343 => 213,  341 => 212,  307 => 180,  303 => 178,  300 => 177,  294 => 175,  290 => 173,  287 => 172,  285 => 171,  280 => 169,  277 => 168,  268 => 161,  260 => 156,  256 => 155,  253 => 154,  251 => 153,  241 => 146,  223 => 131,  219 => 130,  215 => 129,  208 => 125,  204 => 124,  201 => 123,  192 => 116,  184 => 111,  180 => 110,  177 => 109,  175 => 108,  134 => 70,  129 => 68,  125 => 67,  119 => 64,  115 => 63,  89 => 40,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Mis ascensos</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
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
        /* Estilos para mantener el dropdown abierto al hacer hover */
        .dropdown-content {
            display: none;
        }

        .dropdown.active .dropdown-content {
            display: block;
        }
    </style>
</head>
<body class=\"bg-gray-100\">
<!-- Navbar fixed -->
<div class=\"fixed top-0 left-0 right-0 z-50\">
    <!-- El resto del HTML permanece igual hasta los dropdowns -->
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
                    <!-- Dropdown Menu -->
                    <div class=\"dropdown-content absolute right-0 mt-2 w-48 bg-white text-gray-900 rounded-lg shadow-lg border border-gray-200\">
                        <div class=\"px-4 py-3 border-b border-gray-200\">
                            <p class=\"text-sm font-medium\">{{ app.user.nombre }}</p>
                            <p class=\"text-xs text-gray-500\">{{ app.user.email }}</p>
                        </div>
                        <div class=\"py-2\">
                            <a href=\"{{ path('app_users_profile') }}\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis datos</a>
                            <a href=\"{{ path('app_users_climbs') }}\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis ascensos</a>
                            <div class=\"border-t border-gray-200\"></div>
                            <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-sm text-red-600 hover:bg-gray-50\">Salir</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Botón menú móvil -->
            <div class=\"md:hidden flex items-center gap-4\">
                <div class=\"relative\">
                    <input type=\"text\"
                           data-search-input
                           placeholder=\"Buscar vías o restaurantes...\"
                           class=\"w-full bg-gray-800 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500\">
                </div>
                <button class=\"relative p-2\">
                    <span class=\"absolute -top-1 -right-1 bg-blue-500 text-xs rounded-full w-4 h-4 flex items-center justify-center\">3</span>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\" />
                    </svg>
                </button>
                <button id=\"mobile-menu-button\" class=\"p-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\" />
                    </svg>
                </button>
            </div>
        </nav>

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
    </header>

</div>

<div class=\"mt-16\">
    <!-- Hero section con gradiente -->
    <div class=\"relative h-96 bg-gradient-to-b from-gray-400 to-gray-600\">

        <!-- Imagen de fondo con fallback a un color si no hay imagen -->
        <div class=\"absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat\"
             style=\"background-image: url('{{ asset('assets/images/climbs/rope-climber-rock.jpg') }}');\">
            <!-- Overlay oscuro para mejorar legibilidad -->
            <div class=\"absolute inset-0 bg-black/40\"></div>
        </div>

        <div class=\"absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-black/50\">
            <div class=\"container mx-auto flex items-end gap-6\">
                {% if app.user.hasAvatar %}
                    <img
                            src=\"{{ asset('uploads/' ~ app.user.avatar) }}\"
                            alt=\"Avatar de {{ app.user.nombre }}\"
                            id=\"current-avatar\"
                            class=\"w-32 h-32 rounded-full border-4 border-white shadow-lg\"
                    >
                {% else %}
                    <img
                            src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                            alt=\"Avatar por defecto\"
                            id=\"current-avatar\"
                            class=\"w-32 h-32 rounded-full border-4 border-white shadow-lg\"
                    >
                {% endif %}
                <div class=\"text-white mb-4\">
                    <h1 class=\"text-4xl font-bold mb-2\">{{ app.user.nombre }}</h1>
                    <p class=\"text-sm opacity-90\">
                        {% if app.user.totalAscensos > 0 %}
                            {% if app.user.totalAscensos == 1 %}
                                Ha completado 1 ascenso
                            {% else %}
                                Ha completado {{ app.user.totalAscensos }} ascensos
                            {% endif %}
                        {% else %}
                            Aún no ha registrado ningún ascenso
                        {% endif %}
                    </p>
                    <div class=\"flex gap-8 mt-4\">
                        <div>
                            <div class=\"text-sm font-medium opacity-90\">FOLLOWERS</div>
                            <div class=\"text-xl font-bold\">10</div>
                        </div>
                        <div>
                            <div class=\"text-sm font-medium opacity-90\">FOLLOWING</div>
                            <div class=\"text-xl font-bold\">115</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navegación de tabs -->
    <nav class=\"bg-white border-b sticky top-16 z-40\">
        <div class=\"container mx-auto\">
            <ul class=\"flex\" id=\"tabList\">
                <li class=\"py-4 px-6 font-medium cursor-pointer border-b-2 border-transparent border-b-2 border-yellow-500 text-yellow-500\">
                    Ascensos
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class=\"container mx-auto py-8 px-4\">
        <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-8\">
            <!-- Climbs -->
                <div class=\"lg:col-span-2 space-y-4\">
                    {% if app.user.ascensos|length > 0 %}
                        {% import 'macros/climbs/climbs.html.twig' as c %}
                        {% for climb in app.user.ascensos %}
                            {{ c.render(climb) }}
                        {% endfor %}
                    {% else %}
                        <div class=\"bg-white rounded-lg shadow-sm p-8 text-center\">
                            <div class=\"text-gray-400 mb-4\">
                                <svg class=\"w-16 h-16 mx-auto\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M14 10h.01M14 14h.01M14 18h.01M10 10h.01M10 14h.01M10 18h.01M6 10h.01M6 14h.01M6 18h.01M20 6v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h12a2 2 0 012 2z\"/>
                                </svg>
                            </div>
                            <h3 class=\"text-lg font-medium text-gray-900 mb-2\">No hay ascensos registrados</h3>
                            <p class=\"text-gray-500\">¡Comienza a registrar tus ascensos y comparte tus logros!</p>
                        </div>
                    {% endif %}
                </div>

            <!-- Sidebar -->
            <div class=\"space-y-6\">
                <div class=\"bg-white rounded-lg shadow-sm p-6\">
                    <h3 class=\"text-lg font-bold mb-4\">Mis fotos</h3>
                    {% if app.user.fotos|length > 0 %}
                        <div class=\"grid grid-cols-2 gap-2\">
                            {% for photo in app.user.fotos %}
                                <img src=\"{{ asset('uploads/photos/' ~ photo.url ) }}\"
                                     alt=\"Shared photo\"
                                     class=\"w-full aspect-square object-cover rounded-lg hover:opacity-90 transition-opacity cursor-pointer\">
                            {% endfor %}
                        </div>
                    {% else %}
                        <div class=\"text-center py-8\">
                            <div class=\"text-gray-400 mb-4\">
                                <svg class=\"w-12 h-12 mx-auto\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                                </svg>
                            </div>
                            <p class=\"text-gray-500\">No has subido ninguna foto todavía</p>
                            <p class=\"text-sm text-gray-400\">Comparte tus momentos favoritos</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </main>
</div>

    <script src=\"{{ asset('assets/climbs/climbs.js') }}\"></script>
    <script src=\"{{ asset('assets/search/search.js') }}\"></script>
</body>
</html>", "user/climbs/index.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\user\\climbs\\index.html.twig");
    }
}
