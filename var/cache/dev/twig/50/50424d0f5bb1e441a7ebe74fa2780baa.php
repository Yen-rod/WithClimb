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

/* dashboard/routes/list.html.twig */
class __TwigTemplate_656aed172a6d51248e1ed200c9c5b50e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/routes/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/routes/list.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/routes/list.html.twig", 1);
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

        yield "Listado de Vías";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/DataTables/jquery.dataTables.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/routes/routes.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    <main class=\"main-content mt-8\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"bg-white rounded-lg shadow-sm p-6\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h1 class=\"text-2xl font-bold text-gray-900\">Vías de Escalada</h1>
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_routes_create");
        yield "\" class=\"px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700\">
                        <svg class=\"w-4 h-4 inline mr-1\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
                        </svg> Nueva Vía
                    </a>
                </div>

                <table id=\"viasTable\" class=\"w-full\">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Grado</th>
                        <th>Bloque</th>
                        <th>Zona</th>
                        <th>Total Ascensos</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </main>

    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden\">
        <div class=\"bg-white p-6 rounded-lg shadow-xl max-w-md w-full mx-4\">
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Confirmar eliminación</h3>
            <p class=\"text-sm text-gray-500 mb-4\">¿Estás seguro de que quieres eliminar esta vía? Esta acción no se puede deshacer.</p>
            <div class=\"flex justify-end space-x-3\">
                <button id=\"cancelDeleteBtn\" class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200\">
                    Cancelar
                </button>
                <button id=\"confirmDeleteBtn\" class=\"px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700\">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden\">
        <div class=\"bg-white p-6 rounded-lg shadow-xl max-w-md w-full mx-4\">
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Confirmar eliminación</h3>
            <p class=\"text-sm text-gray-500 mb-4\">
                ¿Estás seguro de que quieres eliminar esta vía? Esta acción no se puede deshacer y eliminará también la foto asociada.
            </p>
            <div class=\"flex justify-end space-x-3\">
                <button id=\"cancelDeleteBtn\"
                        class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200\">
                    Cancelar
                </button>
                <button id=\"confirmDeleteBtn\"
                        class=\"px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700\">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/jQuery/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/DataTables/jquery.dataTables.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/routes/list-route.js"), "html", null, true);
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
        return "dashboard/routes/list.html.twig";
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
        return array (  229 => 76,  225 => 75,  220 => 74,  207 => 73,  140 => 16,  133 => 11,  120 => 10,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block title %}Listado de Vías{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugin/DataTables/jquery.dataTables.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/routes/routes.css') }}\">
{% endblock %}

{% block content %}
    <main class=\"main-content mt-8\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"bg-white rounded-lg shadow-sm p-6\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h1 class=\"text-2xl font-bold text-gray-900\">Vías de Escalada</h1>
                    <a href=\"{{ path(\"admin_routes_create\") }}\" class=\"px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700\">
                        <svg class=\"w-4 h-4 inline mr-1\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
                        </svg> Nueva Vía
                    </a>
                </div>

                <table id=\"viasTable\" class=\"w-full\">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Grado</th>
                        <th>Bloque</th>
                        <th>Zona</th>
                        <th>Total Ascensos</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </main>

    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden\">
        <div class=\"bg-white p-6 rounded-lg shadow-xl max-w-md w-full mx-4\">
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Confirmar eliminación</h3>
            <p class=\"text-sm text-gray-500 mb-4\">¿Estás seguro de que quieres eliminar esta vía? Esta acción no se puede deshacer.</p>
            <div class=\"flex justify-end space-x-3\">
                <button id=\"cancelDeleteBtn\" class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200\">
                    Cancelar
                </button>
                <button id=\"confirmDeleteBtn\" class=\"px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700\">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
    <div id=\"deleteModal\" class=\"fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden\">
        <div class=\"bg-white p-6 rounded-lg shadow-xl max-w-md w-full mx-4\">
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Confirmar eliminación</h3>
            <p class=\"text-sm text-gray-500 mb-4\">
                ¿Estás seguro de que quieres eliminar esta vía? Esta acción no se puede deshacer y eliminará también la foto asociada.
            </p>
            <div class=\"flex justify-end space-x-3\">
                <button id=\"cancelDeleteBtn\"
                        class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200\">
                    Cancelar
                </button>
                <button id=\"confirmDeleteBtn\"
                        class=\"px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700\">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
{% endblock %}

{% block js %}
    <script src=\"{{ asset('assets/plugin/jQuery/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugin/DataTables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('assets/dashboard/routes/list-route.js') }}\"></script>
{% endblock %}", "dashboard/routes/list.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\routes\\list.html.twig");
    }
}
