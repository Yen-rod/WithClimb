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

/* user/routes/index.html.twig */
class __TwigTemplate_c9d6d96d10c6cde77ad2eb11c3aa9ed8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/routes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/routes/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Detalle de Vía - WithClimb</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/routes/routes.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/routes/routes-comments.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/routes/routes-photos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/search/search.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/routes/gallery.js"), "html", null, true);
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
<!-- Navbar fixed -->
<div class=\"fixed top-0 left-0 right-0 z-50\">
    <header class=\"bg-black/90 backdrop-blur-sm text-white\">
        <nav class=\"container mx-auto flex justify-between items-center h-16 px-4\">
            <!-- Logo y búsqueda -->
            <div class=\"flex items-center gap-4\">
                <div class=\"text-2xl font-bold\">
                    <a href=\"";
        // line 51
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
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "nombre", [], "any", false, false, false, 74), "html", null, true);
        yield "</p>
                            <p class=\"text-xs text-gray-500\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"py-2\">
                            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-4 py-2 text-sm hover:bg-gray-50\">Mis datos</a>
                            <a href=\"";
        // line 79
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
        // line 98
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "hasAvatar", [], "any", false, false, false, 98)) {
            // line 99
            yield "                                <img
                                        src=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "avatar", [], "any", false, false, false, 100))), "html", null, true);
            yield "\"
                                        alt=\"Avatar de ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "nombre", [], "any", false, false, false, 101), "html", null, true);
            yield "\"
                                        id=\"current-avatar\"
                                        class=\"w-24 h-24 rounded-full object-cover\"
                                >
                            ";
        } else {
            // line 106
            yield "                                <img
                                        src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                                        alt=\"Avatar por defecto\"
                                        id=\"current-avatar\"
                                        class=\"w-24 h-24 rounded-full object-cover\"
                                >
                            ";
        }
        // line 113
        yield "                            <div class=\"ml-3\">
                                <p class=\"text-sm font-medium text-white\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "nombre", [], "any", false, false, false, 114), "html", null, true);
        yield "</p>
                                <p class=\"text-xs text-gray-400\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "email", [], "any", false, false, false, 115), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"mt-2 space-y-1\">
                            <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis datos</a>
                            <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_climbs");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mis ascensos</a>
                            <a href=\"";
        // line 121
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
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "avatar", [], "any", false, false, false, 138))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "nombre", [], "any", false, false, false, 138), "html", null, true);
        yield "\" class=\"w-8 h-8 rounded-full\">
                        <div class=\"ml-3\">
                            <p class=\"text-sm font-medium text-white\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "nombre", [], "any", false, false, false, 140), "html", null, true);
        yield "</p>
                            <p class=\"text-xs text-gray-400\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "email", [], "any", false, false, false, 141), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"mt-2 space-y-1\">
                        <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_profile");
        yield "\" class=\"block px-3 py-2 text-white hover:bg-gray-800 rounded-lg\">Mi perfil</a>
                        <a href=\"";
        // line 146
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
    <!-- Imagen principal -->
    <div class=\"relative w-full h-[400px] md:h-[500px] overflow-hidden\">
        <img
                src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 159, $this->source); })()), "fotoPrincipal", [], "any", false, false, false, 159))), "html", null, true);
        yield "\"
                alt=\"Vía de escalada\"
                class=\"w-full h-full object-cover\"
        >
        <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-8\">
            <div class=\"container mx-auto\">
                <h1 class=\"text-white text-3xl md:text-4xl font-bold\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 165, $this->source); })()), "nombre", [], "any", false, false, false, 165), "html", null, true);
        yield "</h1>
                <p class=\"text-white/90 text-lg\">Grado de dificultad: ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 166, $this->source); })()), "gradoDificultad", [], "any", false, false, false, 166), "html", null, true);
        yield "</p>
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
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-blue-600 border-b-2 border-blue-600\" data-tab=\"bloques\">
                            Bloques
                        </button>
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-gray-500 hover:text-gray-700\" data-tab=\"descripcion\">
                            Descripción
                        </button>
                    </nav>
                </div>

                <!-- Contenido de tabs -->
                <div class=\"space-y-6\">
                    <!-- Tab de Bloques -->
                    <div id=\"bloques\" class=\"tab-content active\">
                        <div class=\"space-y-4\">
                            ";
        // line 193
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 193, $this->source); })()), "idBloque", [], "any", false, false, false, 193), "idZona", [], "any", false, false, false, 193), "bloques", [], "any", false, false, false, 193)) > 0)) {
            // line 194
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 194, $this->source); })()), "idBloque", [], "any", false, false, false, 194), "idZona", [], "any", false, false, false, 194), "bloques", [], "any", false, false, false, 194));
            foreach ($context['_seq'] as $context["_key"] => $context["bloque"]) {
                // line 195
                yield "                                    <div class=\"p-4 bg-white rounded-lg shadow-sm\">
                                        <h3 class=\"font-semibold\">";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "nombre", [], "any", false, false, false, 196), "html", null, true);
                yield "</h3>
                                        <p class=\"text-sm text-gray-600\">";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "descripcion", [], "any", false, false, false, 197), "html", null, true);
                yield "</p>
                                        <div class=\"mt-2 text-sm text-gray-500\">
                                            Total ascensos: ";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 199, $this->source); })()), "ascensos", [], "any", false, false, false, 199)), "html", null, true);
                yield "
                                        </div>
                                        ";
                // line 201
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "vias", [], "any", false, false, false, 201)) > 0)) {
                    // line 202
                    yield "                                            <div class=\"mt-4\">
                                                <h4 class=\"text-sm font-medium text-gray-700 mb-2\">Vías en este bloque:</h4>
                                                <ul class=\"space-y-2\">
                                                    ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "vias", [], "any", false, false, false, 205));
                    foreach ($context['_seq'] as $context["_key"] => $context["via_bloque"]) {
                        // line 206
                        yield "                                                        <li class=\"flex items-center justify-between text-sm\">
                                            <span class=\"";
                        // line 207
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["via_bloque"], "id", [], "any", false, false, false, 207) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 207, $this->source); })()), "id", [], "any", false, false, false, 207))) {
                            yield "font-medium text-blue-600";
                        }
                        yield "\">
                                                ";
                        // line 208
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["via_bloque"], "nombre", [], "any", false, false, false, 208), "html", null, true);
                        yield "
                                            </span>
                                                            <span class=\"text-gray-500\">";
                        // line 210
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["via_bloque"], "gradoDificultad", [], "any", false, false, false, 210), "html", null, true);
                        yield "</span>
                                                        </li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['via_bloque'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 213
                    yield "                                                </ul>
                                            </div>
                                        ";
                }
                // line 216
                yield "                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bloque'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "                            ";
        } else {
            // line 219
            yield "                                <div class=\"p-4 bg-white rounded-lg shadow-sm\">
                                    <p class=\"text-gray-500 text-center\">No hay bloques disponibles</p>
                                </div>
                            ";
        }
        // line 223
        yield "                        </div>
                    </div>

                    <!-- Tab de Descripción -->
                    <div id=\"descripcion\" class=\"tab-content\">
                        <div class=\"bg-white rounded-lg shadow-sm p-4\">
                            ";
        // line 229
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 229, $this->source); })()), "descripcion", [], "any", false, false, false, 229)) {
            // line 230
            yield "                                <p class=\"text-gray-600\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 230, $this->source); })()), "descripcion", [], "any", false, false, false, 230), "html", null, true);
            yield "</p>
                            ";
        } else {
            // line 232
            yield "                                <p class=\"text-gray-500 text-center\">No hay descripción disponible</p>
                            ";
        }
        // line 234
        yield "
                            <!-- Información adicional de la vía -->
                            <div class=\"mt-4 pt-4 border-t border-gray-200\">
                                <div class=\"grid grid-cols-2 gap-4 text-sm\">
                                    <div>
                                        <p class=\"text-gray-500\">Grado de dificultad:</p>
                                        <p class=\"font-medium\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 240, $this->source); })()), "gradoDificultad", [], "any", false, false, false, 240), "html", null, true);
        yield "</p>
                                    </div>
                                    <div>
                                        <p class=\"text-gray-500\">Total de ascensos:</p>
                                        <p class=\"font-medium\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 244, $this->source); })()), "totalAscensos", [], "any", false, false, false, 244), "html", null, true);
        yield "</p>
                                    </div>
                                    <div>
                                        <p class=\"text-gray-500\">Bloque:</p>
                                        <p class=\"font-medium\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 248, $this->source); })()), "idBloque", [], "any", false, false, false, 248), "nombre", [], "any", false, false, false, 248), "html", null, true);
        yield "</p>
                                    </div>
                                    <div>
                                        <p class=\"text-gray-500\">Zona:</p>
                                        <p class=\"font-medium\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 252, $this->source); })()), "idBloque", [], "any", false, false, false, 252), "idZona", [], "any", false, false, false, 252), "nombre", [], "any", false, false, false, 252), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
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

                    <button
                            data-gallery-button
                            class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\"
                    >
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z\" />
                        </svg>
                        <span>Fotografías</span>
                    </button>
                    <button id=\"registerAscensoBtn\" data-via-id=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280), "html", null, true);
        yield "\" class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                        </svg>
                        <span>Registrar Ascenso</span>
                    </button>
                </div>

                <!-- Área de comentarios -->
                <div class=\"mt-6\">
                    <form id=\"commentForm\" data-via-id=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 290, $this->source); })()), "id", [], "any", false, false, false, 290), "html", null, true);
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
                <div class=\"space-y-4\" id=\"commentsContainer\" data-via-id=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 306, $this->source); })()), "id", [], "any", false, false, false, 306), "html", null, true);
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
            <input type=\"hidden\" name=\"viaId\" value=\"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 319, $this->source); })()), "id", [], "any", false, false, false, 319), "html", null, true);
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
<div id=\"galleryModal\" data-via-id=\"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 371, $this->source); })()), "id", [], "any", false, false, false, 371), "html", null, true);
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
        // line 385
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 385, $this->source); })()), "fotos", [], "any", false, false, false, 385)) > 0)) {
            // line 386
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["via"]) || array_key_exists("via", $context) ? $context["via"] : (function () { throw new RuntimeError('Variable "via" does not exist.', 386, $this->source); })()), "fotos", [], "any", false, false, false, 386));
            foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
                // line 387
                yield "                    <div class=\"relative aspect-square cursor-pointer\" onclick=\"showPhotoDetail('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foto"], "id", [], "any", false, false, false, 387), "html", null, true);
                yield "')\">
                        <img
                                src=\"";
                // line 389
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["foto"], "url", [], "any", false, false, false, 389))), "html", null, true);
                yield "\"
                                alt=\"";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foto"], "descripcion", [], "any", false, false, false, 390), "html", null, true);
                yield "\"
                                class=\"w-full h-full object-cover rounded-lg\"
                        >
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['foto'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 395
            yield "            ";
        } else {
            // line 396
            yield "                <div class=\"col-span-full flex flex-col items-center justify-center text-white py-12\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-12 h-12 mb-4\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z\" />
                    </svg>
                    <p>No hay fotos disponibles</p>
                </div>
            ";
        }
        // line 403
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
        return "user/routes/index.html.twig";
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
        return array (  645 => 403,  636 => 396,  633 => 395,  622 => 390,  618 => 389,  612 => 387,  607 => 386,  605 => 385,  588 => 371,  533 => 319,  517 => 306,  498 => 290,  485 => 280,  454 => 252,  447 => 248,  440 => 244,  433 => 240,  425 => 234,  421 => 232,  415 => 230,  413 => 229,  405 => 223,  399 => 219,  396 => 218,  389 => 216,  384 => 213,  375 => 210,  370 => 208,  364 => 207,  361 => 206,  357 => 205,  352 => 202,  350 => 201,  345 => 199,  340 => 197,  336 => 196,  333 => 195,  328 => 194,  326 => 193,  296 => 166,  292 => 165,  283 => 159,  267 => 146,  263 => 145,  256 => 141,  252 => 140,  245 => 138,  225 => 121,  221 => 120,  217 => 119,  210 => 115,  206 => 114,  203 => 113,  194 => 106,  186 => 101,  182 => 100,  179 => 99,  177 => 98,  155 => 79,  151 => 78,  145 => 75,  141 => 74,  115 => 51,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Detalle de Vía - WithClimb</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script src=\"{{ asset('assets/routes/routes.js') }}\"></script>
    <script src=\"{{ asset('assets/routes/routes-comments.js') }}\"></script>
    <script src=\"{{ asset('assets/routes/routes-photos.js') }}\"></script>
    <script src=\"{{ asset('assets/search/search.js') }}\"></script>
    <script src=\"{{ asset('assets/routes/gallery.js') }}\"></script>
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
<!-- Navbar fixed -->
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
    <!-- Imagen principal -->
    <div class=\"relative w-full h-[400px] md:h-[500px] overflow-hidden\">
        <img
                src=\"{{ asset('uploads/' ~ via.fotoPrincipal) }}\"
                alt=\"Vía de escalada\"
                class=\"w-full h-full object-cover\"
        >
        <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-8\">
            <div class=\"container mx-auto\">
                <h1 class=\"text-white text-3xl md:text-4xl font-bold\">{{via.nombre}}</h1>
                <p class=\"text-white/90 text-lg\">Grado de dificultad: {{via.gradoDificultad}}</p>
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
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-blue-600 border-b-2 border-blue-600\" data-tab=\"bloques\">
                            Bloques
                        </button>
                        <button class=\"tab-button px-1 py-4 text-sm font-medium text-gray-500 hover:text-gray-700\" data-tab=\"descripcion\">
                            Descripción
                        </button>
                    </nav>
                </div>

                <!-- Contenido de tabs -->
                <div class=\"space-y-6\">
                    <!-- Tab de Bloques -->
                    <div id=\"bloques\" class=\"tab-content active\">
                        <div class=\"space-y-4\">
                            {% if via.idBloque.idZona.bloques|length > 0 %}
                                {% for bloque in via.idBloque.idZona.bloques %}
                                    <div class=\"p-4 bg-white rounded-lg shadow-sm\">
                                        <h3 class=\"font-semibold\">{{ bloque.nombre }}</h3>
                                        <p class=\"text-sm text-gray-600\">{{ bloque.descripcion }}</p>
                                        <div class=\"mt-2 text-sm text-gray-500\">
                                            Total ascensos: {{ via.ascensos|length }}
                                        </div>
                                        {% if bloque.vias|length > 0 %}
                                            <div class=\"mt-4\">
                                                <h4 class=\"text-sm font-medium text-gray-700 mb-2\">Vías en este bloque:</h4>
                                                <ul class=\"space-y-2\">
                                                    {% for via_bloque in bloque.vias %}
                                                        <li class=\"flex items-center justify-between text-sm\">
                                            <span class=\"{% if via_bloque.id == via.id %}font-medium text-blue-600{% endif %}\">
                                                {{ via_bloque.nombre }}
                                            </span>
                                                            <span class=\"text-gray-500\">{{ via_bloque.gradoDificultad }}</span>
                                                        </li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endfor %}
                            {% else %}
                                <div class=\"p-4 bg-white rounded-lg shadow-sm\">
                                    <p class=\"text-gray-500 text-center\">No hay bloques disponibles</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <!-- Tab de Descripción -->
                    <div id=\"descripcion\" class=\"tab-content\">
                        <div class=\"bg-white rounded-lg shadow-sm p-4\">
                            {% if via.descripcion %}
                                <p class=\"text-gray-600\">{{ via.descripcion }}</p>
                            {% else %}
                                <p class=\"text-gray-500 text-center\">No hay descripción disponible</p>
                            {% endif %}

                            <!-- Información adicional de la vía -->
                            <div class=\"mt-4 pt-4 border-t border-gray-200\">
                                <div class=\"grid grid-cols-2 gap-4 text-sm\">
                                    <div>
                                        <p class=\"text-gray-500\">Grado de dificultad:</p>
                                        <p class=\"font-medium\">{{ via.gradoDificultad }}</p>
                                    </div>
                                    <div>
                                        <p class=\"text-gray-500\">Total de ascensos:</p>
                                        <p class=\"font-medium\">{{ via.totalAscensos }}</p>
                                    </div>
                                    <div>
                                        <p class=\"text-gray-500\">Bloque:</p>
                                        <p class=\"font-medium\">{{ via.idBloque.nombre }}</p>
                                    </div>
                                    <div>
                                        <p class=\"text-gray-500\">Zona:</p>
                                        <p class=\"font-medium\">{{ via.idBloque.idZona.nombre }}</p>
                                    </div>
                                </div>
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

                    <button
                            data-gallery-button
                            class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\"
                    >
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z\" />
                        </svg>
                        <span>Fotografías</span>
                    </button>
                    <button id=\"registerAscensoBtn\" data-via-id=\"{{ via.id }}\" class=\"flex items-center gap-2 px-4 py-2 bg-white rounded-lg shadow-sm hover:bg-gray-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z\" />
                        </svg>
                        <span>Registrar Ascenso</span>
                    </button>
                </div>

                <!-- Área de comentarios -->
                <div class=\"mt-6\">
                    <form id=\"commentForm\" data-via-id=\"{{ via.id }}\" class=\"mt-6\">
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
                <div class=\"space-y-4\" id=\"commentsContainer\" data-via-id=\"{{ via.id }}\">
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
            <input type=\"hidden\" name=\"viaId\" value=\"{{ via.id }}\">

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
<div id=\"galleryModal\" data-via-id=\"{{ via.id }}\" class=\"hidden fixed inset-0 bg-black/90 backdrop-blur-sm z-50\">
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
            {% if via.fotos|length > 0 %}
                {% for foto in via.fotos %}
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
</html>", "user/routes/index.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\user\\routes\\index.html.twig");
    }
}
