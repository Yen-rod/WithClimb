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

/* dashboard/zones/edit.html.twig */
class __TwigTemplate_0b7897ebc323d3c87fd532feab38bdba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/zones/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/zones/edit.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/zones/edit.html.twig", 1);
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
                <h1 class=\"text-2xl font-bold text-gray-900\">Editar Zona de Escalada</h1>
            </div>

            <form id=\"zonaForm\" class=\"space-y-6\" data-zone-id=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["zona"]) || array_key_exists("zona", $context) ? $context["zona"] : (function () { throw new RuntimeError('Variable "zona" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
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
                            value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["zona"]) || array_key_exists("zona", $context) ? $context["zona"] : (function () { throw new RuntimeError('Variable "zona" does not exist.', 30, $this->source); })()), "nombre", [], "any", false, false, false, 30), "html", null, true);
        yield "\"
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
                    <input type=\"hidden\" name=\"ubicacion\" id=\"ubicacionInput\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["zona"]) || array_key_exists("zona", $context) ? $context["zona"] : (function () { throw new RuntimeError('Variable "zona" does not exist.', 48, $this->source); })()), "ubicacion", [], "any", false, false, false, 48), "html", null, true);
        yield "\">
                    <div id=\"locationPreview\" class=\"location-preview\"></div>
                </div>

                <!-- Descripción -->
                <div class=\"space-y-2\">
                    <label for=\"descripcion\" class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-align-left mr-2\"></i>
                        Descripción
                    </label>
                    <textarea
                            id=\"descripcion\"
                            name=\"descripcion\"
                            rows=\"4\"
                            class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                            placeholder=\"Describe la zona, accesos, características...\"
                    >";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["zona"]) || array_key_exists("zona", $context) ? $context["zona"] : (function () { throw new RuntimeError('Variable "zona" does not exist.', 64, $this->source); })()), "descripcion", [], "any", false, false, false, 64), "html", null, true);
        yield "</textarea>
                </div>

                <!-- Después del textarea de descripción y antes de los botones -->
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
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["zona"]) || array_key_exists("zona", $context) ? $context["zona"] : (function () { throw new RuntimeError('Variable "zona" does not exist.', 82, $this->source); })()), "bloques", [], "any", false, false, false, 82));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["bloque"]) {
            // line 83
            yield "                            <div class=\"bloque-item border rounded-lg p-4\" data-bloque-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\">
                                <div class=\"flex justify-between items-center mb-4\">
                                    <h3 class=\"text-sm font-medium text-gray-700\">Bloque #";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85), "html", null, true);
            yield "</h3>
                                    <button type=\"button\" class=\"delete-bloque-btn text-red-600 hover:text-red-800\">
                                        <svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                        </svg>
                                    </button>
                                </div>
                                <div class=\"space-y-4\">
                                    <div>
                                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre del Bloque</label>
                                        <input
                                                type=\"text\"
                                                name=\"bloques[";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "id", [], "any", false, false, false, 97), "html", null, true);
            yield "][nombre]\"
                                                value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "nombre", [], "any", false, false, false, 98), "html", null, true);
            yield "\"
                                                required
                                                class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                                                placeholder=\"Nombre del bloque\"
                                        >
                                    </div>
                                    <div>
                                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Descripción</label>
                                        <textarea
                                                name=\"bloques[";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "id", [], "any", false, false, false, 107), "html", null, true);
            yield "][descripcion]\"
                                                rows=\"3\"
                                                class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                                                placeholder=\"Describe el bloque...\"
                                        >";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bloque"], "descripcion", [], "any", false, false, false, 111), "html", null, true);
            yield "</textarea>
                                    </div>
                                </div>
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bloque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                    </div>
                </div>

                <!-- Botones -->
                <div class=\"flex gap-4 justify-end pt-4\">
                    <button type=\"button\" onclick=\"window.history.back()\"
                            class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                        Cancelar
                    </button>
                    <button type=\"submit\"
                            class=\"px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700\">
                        Actualizar
                    </button>
                </div>
            </form>

            <div id=\"deleteModal\" class=\"hidden fixed inset-0 z-50\">
                <div class=\"fixed inset-0 bg-black/50\"></div>
                <div class=\"fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2\">
                    <div class=\"bg-white rounded-lg shadow-lg w-[90vw] max-w-[400px] p-6\">
                        <h3 class=\"text-lg font-semibold mb-2\">Confirmar eliminación</h3>
                        <p class=\"text-gray-600 mb-4\">¿Estás seguro de que quieres eliminar este bloque? Esta acción no se puede deshacer.</p>
                        <div class=\"flex justify-end gap-3\">
                            <button type=\"button\"
                                    id=\"cancelDeleteBtn\"
                                    class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                                Cancelar
                            </button>
                            <button type=\"button\"
                                    id=\"confirmDeleteBtn\"
                                    class=\"px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700\">
                                Eliminar
                            </button>
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

    // line 158
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

        // line 159
        yield "     ";
        yield from $this->yieldParentBlock("js", $context, $blocks);
        yield "

     <script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/jQuery/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
     <script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/Leaflet/leaflet.js"), "html", null, true);
        yield "\"></script>
     <script src=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/Leaflet/bundle.min.js"), "html", null, true);
        yield "\"></script>
     <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/zones/edit-zone.js"), "html", null, true);
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
        return "dashboard/zones/edit.html.twig";
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
        return array (  364 => 164,  360 => 163,  356 => 162,  352 => 161,  346 => 159,  333 => 158,  282 => 116,  263 => 111,  256 => 107,  244 => 98,  240 => 97,  225 => 85,  219 => 83,  202 => 82,  181 => 64,  162 => 48,  141 => 30,  126 => 18,  118 => 12,  105 => 11,  92 => 8,  88 => 7,  84 => 6,  78 => 4,  65 => 3,  42 => 1,);
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
                <h1 class=\"text-2xl font-bold text-gray-900\">Editar Zona de Escalada</h1>
            </div>

            <form id=\"zonaForm\" class=\"space-y-6\" data-zone-id=\"{{ zona.id }}\">
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
                            value=\"{{ zona.nombre }}\"
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
                    <input type=\"hidden\" name=\"ubicacion\" id=\"ubicacionInput\" value=\"{{ zona.ubicacion }}\">
                    <div id=\"locationPreview\" class=\"location-preview\"></div>
                </div>

                <!-- Descripción -->
                <div class=\"space-y-2\">
                    <label for=\"descripcion\" class=\"flex items-center text-sm font-medium text-gray-700\">
                        <i class=\"fas fa-align-left mr-2\"></i>
                        Descripción
                    </label>
                    <textarea
                            id=\"descripcion\"
                            name=\"descripcion\"
                            rows=\"4\"
                            class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                            placeholder=\"Describe la zona, accesos, características...\"
                    >{{ zona.descripcion }}</textarea>
                </div>

                <!-- Después del textarea de descripción y antes de los botones -->
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
                        {% for bloque in zona.bloques %}
                            <div class=\"bloque-item border rounded-lg p-4\" data-bloque-id=\"{{ bloque.id }}\">
                                <div class=\"flex justify-between items-center mb-4\">
                                    <h3 class=\"text-sm font-medium text-gray-700\">Bloque #{{ loop.index }}</h3>
                                    <button type=\"button\" class=\"delete-bloque-btn text-red-600 hover:text-red-800\">
                                        <svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\" />
                                        </svg>
                                    </button>
                                </div>
                                <div class=\"space-y-4\">
                                    <div>
                                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Nombre del Bloque</label>
                                        <input
                                                type=\"text\"
                                                name=\"bloques[{{ bloque.id }}][nombre]\"
                                                value=\"{{ bloque.nombre }}\"
                                                required
                                                class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                                                placeholder=\"Nombre del bloque\"
                                        >
                                    </div>
                                    <div>
                                        <label class=\"block text-sm font-medium text-gray-700 mb-1\">Descripción</label>
                                        <textarea
                                                name=\"bloques[{{ bloque.id }}][descripcion]\"
                                                rows=\"3\"
                                                class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                                                placeholder=\"Describe el bloque...\"
                                        >{{ bloque.descripcion }}</textarea>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
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
                        Actualizar
                    </button>
                </div>
            </form>

            <div id=\"deleteModal\" class=\"hidden fixed inset-0 z-50\">
                <div class=\"fixed inset-0 bg-black/50\"></div>
                <div class=\"fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2\">
                    <div class=\"bg-white rounded-lg shadow-lg w-[90vw] max-w-[400px] p-6\">
                        <h3 class=\"text-lg font-semibold mb-2\">Confirmar eliminación</h3>
                        <p class=\"text-gray-600 mb-4\">¿Estás seguro de que quieres eliminar este bloque? Esta acción no se puede deshacer.</p>
                        <div class=\"flex justify-end gap-3\">
                            <button type=\"button\"
                                    id=\"cancelDeleteBtn\"
                                    class=\"px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50\">
                                Cancelar
                            </button>
                            <button type=\"button\"
                                    id=\"confirmDeleteBtn\"
                                    class=\"px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700\">
                                Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

{% endblock %}

 {% block js %}
     {{ parent() }}

     <script src=\"{{ asset('assets/plugin/jQuery/jquery-3.7.1.min.js') }}\"></script>
     <script src=\"{{ asset('assets/plugin/Leaflet/leaflet.js') }}\"></script>
     <script src=\"{{ asset('assets/plugin/Leaflet/bundle.min.js') }}\"></script>
     <script src=\"{{ asset('assets/dashboard/zones/edit-zone.js') }}\"></script>
 {% endblock %}", "dashboard/zones/edit.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\zones\\edit.html.twig");
    }
}
