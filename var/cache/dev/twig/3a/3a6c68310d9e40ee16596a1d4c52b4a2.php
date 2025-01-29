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

/* dashboard/index.html.twig */
class __TwigTemplate_7700fef9af0337d919748ca7029d1989 extends Template
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
            'meta' => [$this, 'block_meta'],
            'js' => [$this, 'block_js'],
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Panel de control</title>
    <link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/TailWind/tailwind.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/dashboard.css"), "html", null, true);
        yield "\">
    <script src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/TailWind/tailwind.min.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 12
        yield "    ";
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 13
        yield "
    <style>

    </style>
    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 18
        yield "</head>
<body class=\"bg-gray-50\">
<!-- Navegación -->
<header class=\"bg-white border-b\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"flex items-center justify-between h-16\">
            <div class=\"flex items-center\">
                <a href=\"/\" class=\"text-xl font-bold text-blue-600 hover:text-blue-700\">WithClimb</a>
                <div class=\"ml-10 flex items-center space-x-4\">
                    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_routes");
        yield "\"
                       class=\"py-2 px-3 text-gray-600 hover:text-gray-800 border-b-2 transition-colors duration-200 ";
        // line 28
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28)) && is_string($_v1 = "admin_routes") && str_starts_with($_v0, $_v1))) ? ("border-blue-500 text-blue-600") : ("border-transparent"));
        yield "\">
                        Vías
                    </a>
                    <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_restaurants");
        yield "\"
                       class=\"py-2 px-3 text-gray-600 hover:text-gray-800 border-b-2 transition-colors duration-200 ";
        // line 32
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", ["_route"], "method", false, false, false, 32)) && is_string($_v3 = "admin_restaurants") && str_starts_with($_v2, $_v3))) ? ("border-blue-500 text-blue-600") : ("border-transparent"));
        yield "\">
                        Restaurantes
                    </a>
                    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_zones");
        yield "\"
                       class=\"py-2 px-3 text-gray-600 hover:text-gray-800 border-b-2 transition-colors duration-200 ";
        // line 36
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "get", ["_route"], "method", false, false, false, 36)) && is_string($_v5 = "admin_zones") && str_starts_with($_v4, $_v5))) ? ("border-blue-500 text-blue-600") : ("border-transparent"));
        yield "\">
                        Zonas
                    </a>
                </div>
            </div>

            <div class=\"relative\">
                <button type=\"button\"
                        class=\"flex items-center gap-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500\"
                        id=\"user-menu-button\"
                        aria-expanded=\"false\"
                        aria-haspopup=\"true\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8 text-gray-600\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z\" />
                    </svg>
                </button>

                <div class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\"
                     role=\"menu\"
                     aria-orientation=\"vertical\"
                     aria-labelledby=\"user-menu-button\"
                     tabindex=\"-1\"
                     id=\"user-menu\">
                    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"
                       class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center\"
                       role=\"menuitem\"
                       tabindex=\"-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 mr-2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75\" />
                        </svg>
                        Salir del sistema
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.getElementById('user-menu-button').addEventListener('click', function() {
        document.getElementById('user-menu').classList.toggle('hidden');
    });

    document.addEventListener('click', function(e) {
        if (!e.target.closest('#user-menu-button')) {
            document.getElementById('user-menu').classList.add('hidden');
        }
    });
</script>

<div class=\"min-h-screen p-4 md:p-6 lg:p-8 pt-16\">
       ";
        // line 87
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 88
        yield "</div>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  260 => 87,  238 => 17,  216 => 12,  194 => 11,  180 => 88,  178 => 87,  147 => 59,  121 => 36,  117 => 35,  111 => 32,  107 => 31,  101 => 28,  97 => 27,  86 => 18,  84 => 17,  78 => 13,  75 => 12,  73 => 11,  68 => 9,  64 => 8,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Panel de control</title>
    <link href=\"{{ asset('assets/plugin/TailWind/tailwind.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/dashboard.css') }}\">
    <script src=\"{{ asset('assets/plugin/TailWind/tailwind.min.js') }}\"></script>

    {% block meta %}{% endblock %}
    {% block js %}{% endblock %}

    <style>

    </style>
    {% block css %}{% endblock %}
</head>
<body class=\"bg-gray-50\">
<!-- Navegación -->
<header class=\"bg-white border-b\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"flex items-center justify-between h-16\">
            <div class=\"flex items-center\">
                <a href=\"/\" class=\"text-xl font-bold text-blue-600 hover:text-blue-700\">WithClimb</a>
                <div class=\"ml-10 flex items-center space-x-4\">
                    <a href=\"{{ path('admin_routes') }}\"
                       class=\"py-2 px-3 text-gray-600 hover:text-gray-800 border-b-2 transition-colors duration-200 {{ app.request.get('_route') starts with 'admin_routes' ? 'border-blue-500 text-blue-600' : 'border-transparent' }}\">
                        Vías
                    </a>
                    <a href=\"{{ path('admin_restaurants') }}\"
                       class=\"py-2 px-3 text-gray-600 hover:text-gray-800 border-b-2 transition-colors duration-200 {{ app.request.get('_route') starts with 'admin_restaurants' ? 'border-blue-500 text-blue-600' : 'border-transparent' }}\">
                        Restaurantes
                    </a>
                    <a href=\"{{ path('admin_zones') }}\"
                       class=\"py-2 px-3 text-gray-600 hover:text-gray-800 border-b-2 transition-colors duration-200 {{ app.request.get('_route') starts with 'admin_zones' ? 'border-blue-500 text-blue-600' : 'border-transparent' }}\">
                        Zonas
                    </a>
                </div>
            </div>

            <div class=\"relative\">
                <button type=\"button\"
                        class=\"flex items-center gap-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500\"
                        id=\"user-menu-button\"
                        aria-expanded=\"false\"
                        aria-haspopup=\"true\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8 text-gray-600\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z\" />
                    </svg>
                </button>

                <div class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\"
                     role=\"menu\"
                     aria-orientation=\"vertical\"
                     aria-labelledby=\"user-menu-button\"
                     tabindex=\"-1\"
                     id=\"user-menu\">
                    <a href=\"{{ path('app_logout') }}\"
                       class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center\"
                       role=\"menuitem\"
                       tabindex=\"-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 mr-2\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75\" />
                        </svg>
                        Salir del sistema
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.getElementById('user-menu-button').addEventListener('click', function() {
        document.getElementById('user-menu').classList.toggle('hidden');
    });

    document.addEventListener('click', function(e) {
        if (!e.target.closest('#user-menu-button')) {
            document.getElementById('user-menu').classList.add('hidden');
        }
    });
</script>

<div class=\"min-h-screen p-4 md:p-6 lg:p-8 pt-16\">
       {% block content %}{% endblock %}
</div>

</body>
</html>", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\index.html.twig");
    }
}
