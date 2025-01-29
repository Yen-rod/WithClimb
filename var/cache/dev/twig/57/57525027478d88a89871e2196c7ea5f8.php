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

/* dashboard/routes/show.html.twig */
class __TwigTemplate_bdbf5cd73d882c85aadfdb1e12570b31 extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/routes/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/routes/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/routes/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Detalles de la Vía";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/routes/routes.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <main class=\"main-content mt-8\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"mb-6 flex justify-between items-center\">
                <button id=\"backButton\" class=\"flex items-center text-gray-600 hover:text-gray-800\">
                    <svg class=\"w-5 h-5 mr-1\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Volver
                </button>
            </div>

            ";
        // line 22
        yield "            <div id=\"loading\" class=\"text-center py-12\">
                <i class=\"fas fa-spinner fa-spin text-4xl text-blue-500\"></i>
                <p class=\"mt-2 text-gray-600\">Cargando información...</p>
            </div>

            ";
        // line 28
        yield "            <div id=\"error\" class=\"hidden bg-red-50 p-4 rounded-lg\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <i class=\"fas fa-exclamation-circle text-red-400\"></i>
                    </div>
                    <div class=\"ml-3\">
                        <h3 class=\"text-sm font-medium text-red-800\">Error</h3>
                        <p id=\"errorMessage\" class=\"mt-2 text-sm text-red-700\"></p>
                    </div>
                </div>
            </div>

            ";
        // line 41
        yield "            <div id=\"viaContent\" class=\"hidden\" data-via-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["viaId"]) || array_key_exists("viaId", $context) ? $context["viaId"] : (function () { throw new RuntimeError('Variable "viaId" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\">
                <div class=\"bg-white shadow rounded-lg overflow-hidden\">
                    ";
        // line 44
        yield "                    <div class=\"relative h-64\">
                        <img id=\"viaFoto\" src=\"\" alt=\"\" class=\"w-full h-full object-cover\">
                        <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-6\">
                            <h1 id=\"viaNombre\" class=\"text-3xl font-bold text-white\"></h1>
                        </div>
                    </div>

                    ";
        // line 52
        yield "                    <div class=\"p-6\">
                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                            ";
        // line 55
        yield "                            <div>
                                <h2 class=\"text-xl font-semibold mb-4\">Información</h2>

                                <dl class=\"space-y-3\">
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Ubicación</dt>
                                        <dd id=\"viaUbicacion\" class=\"mt-1\"></dd>
                                    </div>
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Total de Ascensos</dt>
                                        <dd id=\"viaTotalAscensos\" class=\"mt-1 font-mono\"></dd>
                                    </div>
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Dificultad</dt>
                                        <dd id=\"viaGrado\"></dd>
                                    </div>
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Descripción</dt>
                                        <dd id=\"viaDescripcion\" class=\"mt-1\"></dd>
                                    </div>
                                </dl>
                            </div>

                            ";
        // line 79
        yield "                            <div>
                                <h2 class=\"text-xl font-semibold mb-4\">Estadísticas</h2>
                                <div id=\"estadisticasContent\" class=\"space-y-4\">
                                    ";
        // line 83
        yield "                                </div>
                            </div>
                        </div>

                        ";
        // line 88
        yield "                        <div class=\"mt-8\">
                            <div class=\"border-b border-gray-200\">
                                <nav class=\"flex space-x-8\" aria-label=\"Tabs\">
                                    <button id=\"ascensosTab\" class=\"border-b-2 border-blue-500 py-4 px-1 text-sm font-medium text-blue-600\">
                                        Ascensos
                                    </button>
                                    <button id=\"comentariosTab\" class=\"border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300\">
                                        Comentarios
                                    </button>
                                </nav>
                            </div>

                            <div id=\"ascensosContent\" class=\"py-6\">
                                <div id=\"ascensosContainer\" class=\"space-y-4\">
                                    ";
        // line 103
        yield "                                </div>
                            </div>

                            <div id=\"comentariosContent\" class=\"py-6 hidden\">
                                <div id=\"comentariosContainer\" class=\"space-y-4\">
                                    ";
        // line 109
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
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

        // line 120
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/routes/show-route.js"), "html", null, true);
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
        return "dashboard/routes/show.html.twig";
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
        return array (  273 => 120,  260 => 119,  241 => 109,  234 => 103,  218 => 88,  212 => 83,  207 => 79,  182 => 55,  178 => 52,  169 => 44,  163 => 41,  149 => 28,  142 => 22,  129 => 10,  116 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Detalles de la Vía{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/routes/routes.css') }}\">
{% endblock %}

{% block content %}
    <main class=\"main-content mt-8\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"mb-6 flex justify-between items-center\">
                <button id=\"backButton\" class=\"flex items-center text-gray-600 hover:text-gray-800\">
                    <svg class=\"w-5 h-5 mr-1\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\" />
                    </svg>
                    Volver
                </button>
            </div>

            {# Loading State #}
            <div id=\"loading\" class=\"text-center py-12\">
                <i class=\"fas fa-spinner fa-spin text-4xl text-blue-500\"></i>
                <p class=\"mt-2 text-gray-600\">Cargando información...</p>
            </div>

            {# Error State #}
            <div id=\"error\" class=\"hidden bg-red-50 p-4 rounded-lg\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <i class=\"fas fa-exclamation-circle text-red-400\"></i>
                    </div>
                    <div class=\"ml-3\">
                        <h3 class=\"text-sm font-medium text-red-800\">Error</h3>
                        <p id=\"errorMessage\" class=\"mt-2 text-sm text-red-700\"></p>
                    </div>
                </div>
            </div>

            {# Content #}
            <div id=\"viaContent\" class=\"hidden\" data-via-id=\"{{ viaId }}\">
                <div class=\"bg-white shadow rounded-lg overflow-hidden\">
                    {# Header con foto #}
                    <div class=\"relative h-64\">
                        <img id=\"viaFoto\" src=\"\" alt=\"\" class=\"w-full h-full object-cover\">
                        <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-6\">
                            <h1 id=\"viaNombre\" class=\"text-3xl font-bold text-white\"></h1>
                        </div>
                    </div>

                    {# Contenido principal #}
                    <div class=\"p-6\">
                        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                            {# Información básica #}
                            <div>
                                <h2 class=\"text-xl font-semibold mb-4\">Información</h2>

                                <dl class=\"space-y-3\">
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Ubicación</dt>
                                        <dd id=\"viaUbicacion\" class=\"mt-1\"></dd>
                                    </div>
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Total de Ascensos</dt>
                                        <dd id=\"viaTotalAscensos\" class=\"mt-1 font-mono\"></dd>
                                    </div>
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Dificultad</dt>
                                        <dd id=\"viaGrado\"></dd>
                                    </div>
                                    <div>
                                        <dt class=\"text-sm text-gray-500\">Descripción</dt>
                                        <dd id=\"viaDescripcion\" class=\"mt-1\"></dd>
                                    </div>
                                </dl>
                            </div>

                            {# Estadísticas y gráficos #}
                            <div>
                                <h2 class=\"text-xl font-semibold mb-4\">Estadísticas</h2>
                                <div id=\"estadisticasContent\" class=\"space-y-4\">
                                    {# Aquí irán las estadísticas #}
                                </div>
                            </div>
                        </div>

                        {# Tabs para ascensos y comentarios #}
                        <div class=\"mt-8\">
                            <div class=\"border-b border-gray-200\">
                                <nav class=\"flex space-x-8\" aria-label=\"Tabs\">
                                    <button id=\"ascensosTab\" class=\"border-b-2 border-blue-500 py-4 px-1 text-sm font-medium text-blue-600\">
                                        Ascensos
                                    </button>
                                    <button id=\"comentariosTab\" class=\"border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300\">
                                        Comentarios
                                    </button>
                                </nav>
                            </div>

                            <div id=\"ascensosContent\" class=\"py-6\">
                                <div id=\"ascensosContainer\" class=\"space-y-4\">
                                    {# Aquí irán los ascensos #}
                                </div>
                            </div>

                            <div id=\"comentariosContent\" class=\"py-6 hidden\">
                                <div id=\"comentariosContainer\" class=\"space-y-4\">
                                    {# Aquí irán los comentarios #}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
{% endblock %}

{% block js %}
    <script src=\"{{ asset('assets/dashboard/routes/show-route.js') }}\"></script>
{% endblock %}", "dashboard/routes/show.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\routes\\show.html.twig");
    }
}
