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

/* dashboard/zones/show.html.twig */
class __TwigTemplate_48c9b61a5f76e9bffbb52f4324aa140a extends Template
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

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/zones/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/zones/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/zones/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/zones/zones.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <div id=\"zonaContainer\" data-zona-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["zonaId"]) || array_key_exists("zonaId", $context) ? $context["zonaId"] : (function () { throw new RuntimeError('Variable "zonaId" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\" class=\"max-w-7xl mx-auto p-4 space-y-6\">
        <div id=\"loading\" class=\"fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50\">
            <div class=\"animate-spin rounded-full h-32 w-32 border-b-2 border-white\"></div>
        </div>

        <div id=\"error\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
            <strong class=\"font-bold\">Error!</strong>
            <span class=\"block sm:inline\" id=\"errorMessage\"></span>
        </div>

        <div id=\"zonaContent\" class=\"hidden space-y-6\">
            <button type=\"button\" id=\"backButton\"
                    class=\"mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                <i class=\"fas fa-arrow-left mr-2\"></i>
                Volver
            </button>

            <div class=\"bg-white rounded-lg shadow-sm p-6\">
                <div class=\"flex justify-between items-start\">
                    <div>
                        <h1 class=\"text-3xl font-bold text-gray-900\" id=\"zonaNombre\"></h1>
                        <p class=\"text-gray-500 mt-2 flex items-center\">
                            <svg class=\"w-4 h-4 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                            </svg>
                            <span id=\"zonaUbicacion\"></span>
                        </p>
                    </div>
                    <span class=\"bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center\">
                        <svg class=\"w-4 h-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\"/>
                        </svg>
                        <span id=\"zonaTotalAscensos\"></span>
                    </span>
                </div>
                <p class=\"mt-4 text-gray-600\" id=\"zonaDescripcion\"></p>
            </div>

            <div class=\"bg-white rounded-lg shadow-sm\">
                <div class=\"border-b border-gray-200\">
                    <nav class=\"flex -mb-px\" aria-label=\"Tabs\">
                        <button id=\"bloquesTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-blue-500 text-blue-600 font-medium text-sm\">
                            Bloques
                        </button>
                        <button id=\"restaurantesTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Restaurantes
                        </button>
                        <button id=\"estadisticasTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Estadísticas
                        </button>
                    </nav>
                </div>

                <div class=\"p-4\">
                    <div id=\"bloquesContent\" class=\"grid gap-4 md:grid-cols-2\">
                    </div>

                    <div id=\"restaurantesContent\" class=\"grid gap-4 md:grid-cols-2 hidden\">
                    </div>

                    <div id=\"estadisticasContent\" class=\"grid grid-cols-1 gap-4 sm:grid-cols-3 hidden\">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    ";
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
    <script src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/zones/show-zone.js"), "html", null, true);
        yield "\"></script>
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
        return "dashboard/zones/show.html.twig";
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
        return array (  210 => 83,  205 => 82,  192 => 81,  109 => 9,  96 => 8,  83 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/zones/zones.css') }}\">
{% endblock %}

{% block content %}
    <div id=\"zonaContainer\" data-zona-id=\"{{ zonaId }}\" class=\"max-w-7xl mx-auto p-4 space-y-6\">
        <div id=\"loading\" class=\"fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50\">
            <div class=\"animate-spin rounded-full h-32 w-32 border-b-2 border-white\"></div>
        </div>

        <div id=\"error\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
            <strong class=\"font-bold\">Error!</strong>
            <span class=\"block sm:inline\" id=\"errorMessage\"></span>
        </div>

        <div id=\"zonaContent\" class=\"hidden space-y-6\">
            <button type=\"button\" id=\"backButton\"
                    class=\"mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                <i class=\"fas fa-arrow-left mr-2\"></i>
                Volver
            </button>

            <div class=\"bg-white rounded-lg shadow-sm p-6\">
                <div class=\"flex justify-between items-start\">
                    <div>
                        <h1 class=\"text-3xl font-bold text-gray-900\" id=\"zonaNombre\"></h1>
                        <p class=\"text-gray-500 mt-2 flex items-center\">
                            <svg class=\"w-4 h-4 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                            </svg>
                            <span id=\"zonaUbicacion\"></span>
                        </p>
                    </div>
                    <span class=\"bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm flex items-center\">
                        <svg class=\"w-4 h-4 mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z\"/>
                        </svg>
                        <span id=\"zonaTotalAscensos\"></span>
                    </span>
                </div>
                <p class=\"mt-4 text-gray-600\" id=\"zonaDescripcion\"></p>
            </div>

            <div class=\"bg-white rounded-lg shadow-sm\">
                <div class=\"border-b border-gray-200\">
                    <nav class=\"flex -mb-px\" aria-label=\"Tabs\">
                        <button id=\"bloquesTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-blue-500 text-blue-600 font-medium text-sm\">
                            Bloques
                        </button>
                        <button id=\"restaurantesTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Restaurantes
                        </button>
                        <button id=\"estadisticasTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Estadísticas
                        </button>
                    </nav>
                </div>

                <div class=\"p-4\">
                    <div id=\"bloquesContent\" class=\"grid gap-4 md:grid-cols-2\">
                    </div>

                    <div id=\"restaurantesContent\" class=\"grid gap-4 md:grid-cols-2 hidden\">
                    </div>

                    <div id=\"estadisticasContent\" class=\"grid grid-cols-1 gap-4 sm:grid-cols-3 hidden\">
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block js %}
    {{ parent() }}
    <script src=\"{{ asset('assets/dashboard/zones/show-zone.js') }}\"></script>
{% endblock %}", "dashboard/zones/show.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\zones\\show.html.twig");
    }
}
