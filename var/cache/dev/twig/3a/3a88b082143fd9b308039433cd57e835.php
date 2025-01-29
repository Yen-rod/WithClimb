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

/* dashboard/zones/new.html.twig */
class __TwigTemplate_afc00238afc0ec1a90af0cb65e3a8388 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/zones/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/zones/new.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/zones/new.html.twig", 1);
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
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/Leaflet/geosearch.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/Leaflet/leaflet.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/zones/zones.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    <main class=\"main-content mt-8\">
        <div class=\"max-w-4xl mx-auto bg-white rounded-lg shadow-sm p-6\">
            <div class=\"mb-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">Nueva Zona de Escalada</h1>
                <p class=\"text-sm text-gray-600\">Añade una nueva zona de escalada</p>
            </div>

            <form id=\"zonaForm\" class=\"space-y-6\">
                <!-- Nombre -->
                <div class=\"space-y-2\">
                    <label class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-map-marked-alt mr-2\"></i>
                        Nombre de la Zona
                    </label>
                    <input
                            type=\"text\"
                            name=\"nombre\"
                            required
                            maxlength=\"100\"
                            class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                            placeholder=\"Nombre de la zona\"
                    >
                </div>

                <!-- Ubicación -->
                <div class=\"space-y-2\">
                    <label class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-location-dot mr-2\"></i>
                        Ubicación
                    </label>
                    <div class=\"map-container\">
                        <div id=\"map-loader\" class=\"map-loader\">
                            <div class=\"loader\"></div>
                        </div>
                        <div id=\"map\"></div>
                    </div>
                    <input type=\"hidden\" name=\"ubicacion\" id=\"ubicacionInput\">
                    <div id=\"locationPreview\" class=\"location-preview\"></div>
                </div>

                <!-- Descripción -->
                <div class=\"space-y-2\">
                    <label class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-align-left mr-2\"></i>
                        Descripción
                    </label>
                    <textarea
                            name=\"descripcion\"
                            rows=\"4\"
                            class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                            placeholder=\"Describe la zona, accesos, características...\"
                    ></textarea>
                </div>

                <!-- Bloques -->
                <div class=\"space-y-4\">
                    <div class=\"flex items-center justify-between\">
                        <label class=\"flex items-center text-sm font-medium text-gray-700\">
                            <i class=\"fas fa-cube mr-2\"></i>
                            Bloques
                        </label>
                        <button type=\"button\" id=\"addBlockBtn\"
                                class=\"px-3 py-1 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50\">
                            <i class=\"fas fa-plus mr-1\"></i>
                            Añadir Bloque
                        </button>
                    </div>
                    <div id=\"bloquesList\" class=\"space-y-4\">
                        <!-- Los bloques se añadirán aquí dinámicamente -->
                    </div>
                </div>


                <!-- Botones -->
                <div class=\"flex gap-4 justify-end pt-4\">
                    <button type=\"button\" onclick=\"window.history.back()\"
                            class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                        Cancelar
                    </button>
                    <button type=\"submit\"
                            class=\"px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700\">
                        Añadir
                    </button>
                </div>
            </form>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
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

        // line 102
        yield "    ";
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "

    <script src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/jQuery/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/Leaflet/leaflet.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/Leaflet/bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/zones/new-zone.js"), "html", null, true);
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
        return "dashboard/zones/new.html.twig";
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
        return array (  247 => 107,  243 => 106,  239 => 105,  235 => 104,  229 => 102,  216 => 101,  118 => 12,  105 => 11,  92 => 8,  88 => 7,  84 => 6,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block css %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugin/Leaflet/geosearch.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugin/Leaflet/leaflet.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/dashboard/zones/zones.css') }}\">
{% endblock %}

{% block content %}
    <main class=\"main-content mt-8\">
        <div class=\"max-w-4xl mx-auto bg-white rounded-lg shadow-sm p-6\">
            <div class=\"mb-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">Nueva Zona de Escalada</h1>
                <p class=\"text-sm text-gray-600\">Añade una nueva zona de escalada</p>
            </div>

            <form id=\"zonaForm\" class=\"space-y-6\">
                <!-- Nombre -->
                <div class=\"space-y-2\">
                    <label class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-map-marked-alt mr-2\"></i>
                        Nombre de la Zona
                    </label>
                    <input
                            type=\"text\"
                            name=\"nombre\"
                            required
                            maxlength=\"100\"
                            class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                            placeholder=\"Nombre de la zona\"
                    >
                </div>

                <!-- Ubicación -->
                <div class=\"space-y-2\">
                    <label class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-location-dot mr-2\"></i>
                        Ubicación
                    </label>
                    <div class=\"map-container\">
                        <div id=\"map-loader\" class=\"map-loader\">
                            <div class=\"loader\"></div>
                        </div>
                        <div id=\"map\"></div>
                    </div>
                    <input type=\"hidden\" name=\"ubicacion\" id=\"ubicacionInput\">
                    <div id=\"locationPreview\" class=\"location-preview\"></div>
                </div>

                <!-- Descripción -->
                <div class=\"space-y-2\">
                    <label class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-align-left mr-2\"></i>
                        Descripción
                    </label>
                    <textarea
                            name=\"descripcion\"
                            rows=\"4\"
                            class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                            placeholder=\"Describe la zona, accesos, características...\"
                    ></textarea>
                </div>

                <!-- Bloques -->
                <div class=\"space-y-4\">
                    <div class=\"flex items-center justify-between\">
                        <label class=\"flex items-center text-sm font-medium text-gray-700\">
                            <i class=\"fas fa-cube mr-2\"></i>
                            Bloques
                        </label>
                        <button type=\"button\" id=\"addBlockBtn\"
                                class=\"px-3 py-1 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50\">
                            <i class=\"fas fa-plus mr-1\"></i>
                            Añadir Bloque
                        </button>
                    </div>
                    <div id=\"bloquesList\" class=\"space-y-4\">
                        <!-- Los bloques se añadirán aquí dinámicamente -->
                    </div>
                </div>


                <!-- Botones -->
                <div class=\"flex gap-4 justify-end pt-4\">
                    <button type=\"button\" onclick=\"window.history.back()\"
                            class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                        Cancelar
                    </button>
                    <button type=\"submit\"
                            class=\"px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700\">
                        Añadir
                    </button>
                </div>
            </form>
        </div>
    </main>
{% endblock %}

{% block js %}
    {{ parent() }}

    <script src=\"{{ asset('assets/plugin/jQuery/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/plugin/Leaflet/leaflet.js') }}\"></script>
    <script src=\"{{ asset('assets/plugin/Leaflet/bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/dashboard/zones/new-zone.js') }}\"></script>
{% endblock %}", "dashboard/zones/new.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\zones\\new.html.twig");
    }
}
