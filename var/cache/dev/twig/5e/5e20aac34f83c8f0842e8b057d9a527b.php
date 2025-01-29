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

/* dashboard/restaurants/show.html.twig */
class __TwigTemplate_f513e7a774b38343d5101fbb76e6f1d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/restaurants/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/restaurants/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/restaurants/show.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/restaurants/restaurants.css"), "html", null, true);
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
        yield "    <div id=\"restauranteContainer\" data-restaurante-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["restauranteId"]) || array_key_exists("restauranteId", $context) ? $context["restauranteId"] : (function () { throw new RuntimeError('Variable "restauranteId" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "\" class=\"max-w-7xl mx-auto p-4 space-y-6\">
        <!-- Spinner de carga -->
        <div id=\"loading\" class=\"fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50\">
            <div class=\"animate-spin rounded-full h-32 w-32 border-b-2 border-white\"></div>
        </div>

        <!-- Mensaje de error -->
        <div id=\"error\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
            <strong class=\"font-bold\">Error!</strong>
            <span class=\"block sm:inline\" id=\"errorMessage\"></span>
        </div>

        <!-- Contenido principal -->
        <div id=\"restauranteContent\" class=\"hidden space-y-6\">
            <button type=\"button\"
                    id=\"backButton\"
                    class=\"mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                <i class=\"fas fa-arrow-left mr-2\"></i>
                Volver
            </button>

            <!-- Cabecera del restaurante con foto -->
            <div class=\"bg-white rounded-lg shadow-sm overflow-hidden\">
                <!-- Contenedor de la imagen -->
                <div class=\"relative w-full h-64 md:h-96\">
                    <img id=\"restauranteFoto\"
                         src=\"\"
                         alt=\"\"
                         class=\"w-full h-full object-cover\"
                    >
                    <!-- Overlay con gradiente para el texto -->
                    <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6\">
                        <h1 class=\"text-3xl font-bold text-white\" id=\"restauranteNombre\"></h1>
                        <p class=\"text-gray-200 mt-2 flex items-center\">
                            <i class=\"fas fa-map-marker-alt mr-2\"></i>
                            <span id=\"restauranteUbicacion\"></span>
                        </p>
                        <p class=\"text-gray-200 mt-2 flex items-center\">
                            <i class=\"fas fa-phone mr-2\"></i>
                            <span id=\"restauranteContacto\"></span>
                        </p>
                    </div>
                </div>
                <!-- Descripción debajo de la imagen -->
                <div class=\"p-6\">
                    <p class=\"text-gray-600\" id=\"restauranteDescripcion\"></p>
                </div>
            </div>

            <!-- Tabs de información -->
            <div class=\"bg-white rounded-lg shadow-sm\">
                <div class=\"border-b border-gray-200\">
                    <nav class=\"flex -mb-px\" id=\"tabsContainer\">
                        <button
                                id=\"comentariosTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Comentarios
                        </button>
                        <button
                                id=\"fotosTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Fotos
                        </button>
                        <button
                                id=\"valoracionesTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Valoraciones
                        </button>
                    </nav>
                </div>

                <!-- Contenido de las tabs -->
                <div class=\"p-4\">
                    <div id=\"comentariosContent\" class=\"hidden\">
                        <div class=\"grid gap-4\" id=\"comentariosContainer\"></div>
                    </div>

                    <div id=\"fotosContent\" class=\"hidden\">
                        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\" id=\"fotosContainer\"></div>
                    </div>

                    <div id=\"valoracionesContent\" class=\"hidden\">
                        <div class=\"grid gap-4\" id=\"valoracionesContainer\"></div>
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

    // line 99
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

        // line 100
        yield "    ";
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "
    <script src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/restaurants/show-restaurant.js"), "html", null, true);
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
        return "dashboard/restaurants/show.html.twig";
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
        return array (  228 => 101,  223 => 100,  210 => 99,  109 => 9,  96 => 8,  83 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/restaurants/restaurants.css') }}\">
{% endblock %}

{% block content %}
    <div id=\"restauranteContainer\" data-restaurante-id=\"{{ restauranteId }}\" class=\"max-w-7xl mx-auto p-4 space-y-6\">
        <!-- Spinner de carga -->
        <div id=\"loading\" class=\"fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50\">
            <div class=\"animate-spin rounded-full h-32 w-32 border-b-2 border-white\"></div>
        </div>

        <!-- Mensaje de error -->
        <div id=\"error\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
            <strong class=\"font-bold\">Error!</strong>
            <span class=\"block sm:inline\" id=\"errorMessage\"></span>
        </div>

        <!-- Contenido principal -->
        <div id=\"restauranteContent\" class=\"hidden space-y-6\">
            <button type=\"button\"
                    id=\"backButton\"
                    class=\"mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                <i class=\"fas fa-arrow-left mr-2\"></i>
                Volver
            </button>

            <!-- Cabecera del restaurante con foto -->
            <div class=\"bg-white rounded-lg shadow-sm overflow-hidden\">
                <!-- Contenedor de la imagen -->
                <div class=\"relative w-full h-64 md:h-96\">
                    <img id=\"restauranteFoto\"
                         src=\"\"
                         alt=\"\"
                         class=\"w-full h-full object-cover\"
                    >
                    <!-- Overlay con gradiente para el texto -->
                    <div class=\"absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6\">
                        <h1 class=\"text-3xl font-bold text-white\" id=\"restauranteNombre\"></h1>
                        <p class=\"text-gray-200 mt-2 flex items-center\">
                            <i class=\"fas fa-map-marker-alt mr-2\"></i>
                            <span id=\"restauranteUbicacion\"></span>
                        </p>
                        <p class=\"text-gray-200 mt-2 flex items-center\">
                            <i class=\"fas fa-phone mr-2\"></i>
                            <span id=\"restauranteContacto\"></span>
                        </p>
                    </div>
                </div>
                <!-- Descripción debajo de la imagen -->
                <div class=\"p-6\">
                    <p class=\"text-gray-600\" id=\"restauranteDescripcion\"></p>
                </div>
            </div>

            <!-- Tabs de información -->
            <div class=\"bg-white rounded-lg shadow-sm\">
                <div class=\"border-b border-gray-200\">
                    <nav class=\"flex -mb-px\" id=\"tabsContainer\">
                        <button
                                id=\"comentariosTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Comentarios
                        </button>
                        <button
                                id=\"fotosTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Fotos
                        </button>
                        <button
                                id=\"valoracionesTab\"
                                class=\"w-1/3 py-4 px-1 text-center border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm\">
                            Valoraciones
                        </button>
                    </nav>
                </div>

                <!-- Contenido de las tabs -->
                <div class=\"p-4\">
                    <div id=\"comentariosContent\" class=\"hidden\">
                        <div class=\"grid gap-4\" id=\"comentariosContainer\"></div>
                    </div>

                    <div id=\"fotosContent\" class=\"hidden\">
                        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\" id=\"fotosContainer\"></div>
                    </div>

                    <div id=\"valoracionesContent\" class=\"hidden\">
                        <div class=\"grid gap-4\" id=\"valoracionesContainer\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block js %}
    {{ parent() }}
    <script src=\"{{ asset('assets/dashboard/restaurants/show-restaurant.js') }}\"></script>
{% endblock %}", "dashboard/restaurants/show.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\restaurants\\show.html.twig");
    }
}
