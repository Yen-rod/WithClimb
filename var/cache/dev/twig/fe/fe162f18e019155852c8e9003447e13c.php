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

/* base.html.twig */
class __TwigTemplate_755a4c899a89a12802c191ba8eb79d5a extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 2), "locale", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 2), "locale", [], "any", false, false, false, 2), "en")) : ("en")), "html", null, true);
        yield "\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"\">

    <!-- Tailwind CSS desde CDN -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-gray-100 text-gray-900\">

<!-- Navbar -->
<nav class=\"bg-white shadow-lg\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center py-4\">
            <!-- Logo -->
            <div class=\"flex items-center\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-xl font-bold text-orange-500\">
                    withClimb
                </a>
            </div>

            <!-- Navigation Links -->
            <div class=\"hidden md:flex items-center space-x-8\">
                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/>
                        <polyline points=\"9 22 9 12 15 12 15 22\"/>
                    </svg>
                    <span>Inicio</span>
                </a>
                <a href=\"";
        // line 37
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
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            yield "                    ";
            // line 61
            yield "                    <div class=\"flex items-center space-x-4\">
                        <a href=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"
                           class=\"bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
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
                    </div>
                ";
        } else {
            // line 80
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"
                       class=\"bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
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
        }
        // line 97
        yield "            </div>

            <!-- Mobile menu button -->
            <div class=\"md:hidden flex items-center\">
                <button class=\"mobile-menu-button\">
                    <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class=\"container mx-auto px-4 py-6\">
    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "flashes", [], "any", false, false, false, 113));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 114
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 115
                yield "            <div class=\"mb-4 p-4 rounded-lg ";
                if (($context["label"] == "success")) {
                    yield "bg-green-100 text-green-700";
                } else {
                    yield "bg-red-100 text-red-700";
                }
                yield "\">
                ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "
    ";
        // line 121
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 122
        yield "</main>

<!-- Footer -->
<footer class=\"bg-gray-800 text-white py-4\">
    <div class=\"container mx-auto px-4 text-center\">
        <p class=\"text-sm\">&copy; ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " withClimb - Tu comunidad de escalada. Todos los derechos reservados.</p>
    </div>
</footer>

";
        // line 131
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 144
        yield "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "withClimb - Tu comunidad de escalada";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        yield "    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  318 => 132,  305 => 131,  283 => 121,  260 => 7,  247 => 144,  245 => 131,  238 => 127,  231 => 122,  229 => 121,  226 => 120,  220 => 119,  211 => 116,  202 => 115,  197 => 114,  193 => 113,  175 => 97,  154 => 80,  133 => 62,  130 => 61,  128 => 60,  126 => 59,  101 => 37,  91 => 30,  81 => 23,  62 => 7,  54 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|default('en') }}\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% block title %}withClimb - Tu comunidad de escalada{% endblock %}</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"\">

    <!-- Tailwind CSS desde CDN -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-gray-100 text-gray-900\">

<!-- Navbar -->
<nav class=\"bg-white shadow-lg\">
    <div class=\"container mx-auto px-4\">
        <div class=\"flex justify-between items-center py-4\">
            <!-- Logo -->
            <div class=\"flex items-center\">
                <a href=\"{{ path('app_home') }}\" class=\"text-xl font-bold text-orange-500\">
                    withClimb
                </a>
            </div>

            <!-- Navigation Links -->
            <div class=\"hidden md:flex items-center space-x-8\">
                <a href=\"{{ path('app_home') }}\" class=\"text-gray-700 hover:text-orange-500 px-3 py-2 inline-flex items-center space-x-2\">
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
                {% if app.user %}
                    {# Versión cuando el usuario SÍ está autenticado #}
                    <div class=\"flex items-center space-x-4\">
                        <a href=\"{{ path('app_logout') }}\"
                           class=\"bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
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
                    </div>
                {% else %}
                    <a href=\"{{ path('app_login') }}\"
                       class=\"bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 inline-flex items-center space-x-2 transition duration-150 ease-in-out\">
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
                {% endif %}
            </div>

            <!-- Mobile menu button -->
            <div class=\"md:hidden flex items-center\">
                <button class=\"mobile-menu-button\">
                    <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class=\"container mx-auto px-4 py-6\">
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"mb-4 p-4 rounded-lg {% if label == 'success' %}bg-green-100 text-green-700{% else %}bg-red-100 text-red-700{% endif %}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {% block body %}{% endblock %}
</main>

<!-- Footer -->
<footer class=\"bg-gray-800 text-white py-4\">
    <div class=\"container mx-auto px-4 text-center\">
        <p class=\"text-sm\">&copy; {{ \"now\"|date(\"Y\") }} withClimb - Tu comunidad de escalada. Todos los derechos reservados.</p>
    </div>
</footer>

{% block javascripts %}
    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
{% endblock %}

</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\base.html.twig");
    }
}
