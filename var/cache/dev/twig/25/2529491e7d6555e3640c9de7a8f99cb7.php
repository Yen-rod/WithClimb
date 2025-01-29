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

/* dashboard/routes/edit.html.twig */
class __TwigTemplate_bcd6df1b4acccbb5504478830d0c8a2d extends Template
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
            'meta' => [$this, 'block_meta'],
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/routes/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/routes/edit.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/routes/edit.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Editar Vía";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <meta name=\"csrf-token\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("upload"), "html", null, true);
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
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <link href=\"https://unpkg.com/filepond/dist/filepond.css\" rel=\"stylesheet\">
    <link href=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "    <div class=\"main-content mt-8\">
        <div class=\"bg-white rounded-lg shadow-sm p-6\">
            <div class=\"flex justify-between items-center mb-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">Editar Vía de ascenso</h1>
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_routes");
        yield "\" class=\"px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200\">
                    <i class=\"fas fa-arrow-left mr-2\"></i>Volver </a>
            </div>
            <div id=\"loading\" class=\"text-center py-12\">
                <i class=\"fas fa-spinner fa-spin text-4xl text-blue-500\"></i>
                <p class=\"mt-2 text-gray-600\">Cargando información...</p>
            </div>
            <form id=\"viaForm\" class=\"space-y-6 hidden\" data-via-id=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["viaId"]) || array_key_exists("viaId", $context) ? $context["viaId"] : (function () { throw new RuntimeError('Variable "viaId" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">
                <div>
                    <label for=\"nombre\" class=\"block text-sm font-medium text-gray-700\">Nombre</label>
                    <input type=\"text\" id=\"nombre\" name=\"nombre\" required class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\">
                </div>
                <div>
                    <label for=\"gradoDificultad\" class=\"block text-sm font-medium text-gray-700\"> Grado de Dificultad (Fontainebleau) </label>
                    <select id=\"gradoDificultad\" name=\"gradoDificultad\" required class=\"mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md\">
                        <option value=\"\">Selecciona un grado</option>
                        <optgroup label=\"Principiante\">
                            <option value=\"1\">1</option>
                            <option value=\"1+\">1+</option>
                            <option value=\"2\">2</option>
                            <option value=\"2+\">2+</option>
                            <option value=\"3\">3</option>
                            <option value=\"3+\">3+</option>
                        </optgroup>
                        <optgroup label=\"Intermedio\">
                            <option value=\"4\">4</option>
                            <option value=\"4+\">4+</option>
                            <option value=\"5\">5</option>
                            <option value=\"5+\">5+</option>
                            <option value=\"6A\">6A</option>
                            <option value=\"6A+\">6A+</option>
                        </optgroup>
                        <optgroup label=\"Avanzado\">
                            <option value=\"6B\">6B</option>
                            <option value=\"6B+\">6B+</option>
                            <option value=\"6C\">6C</option>
                            <option value=\"6C+\">6C+</option>
                            <option value=\"7A\">7A</option>
                            <option value=\"7A+\">7A+</option>
                        </optgroup>
                        <optgroup label=\"Experto\">
                            <option value=\"7B\">7B</option>
                            <option value=\"7B+\">7B+</option>
                            <option value=\"7C\">7C</option>
                            <option value=\"7C+\">7C+</option>
                            <option value=\"8A\">8A</option>
                            <option value=\"8A+\">8A+</option>
                        </optgroup>
                        <optgroup label=\"Elite\">
                            <option value=\"8B\">8B</option>
                            <option value=\"8B+\">8B+</option>
                            <option value=\"8C\">8C</option>
                            <option value=\"8C+\">8C+</option>
                            <option value=\"9A\">9A</option>
                        </optgroup>
                    </select>
                    <p class=\"mt-2 text-sm text-gray-500\"> Escala Fontainebleau para boulder </p>
                </div>
                <div>
                    <label for=\"descripcion\" class=\"block text-sm font-medium text-gray-700\">Descripción</label>
                    <textarea id=\"descripcion\" name=\"descripcion\" rows=\"4\" class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"></textarea>
                </div>
                <div>
                    <label for=\"idBloque\" class=\"block text-sm font-medium text-gray-700\">Bloque</label>
                    <select id=\"idBloque\" name=\"idBloque\" required class=\"block w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"></select>
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-gray-700\">Foto Principal (JPG)</label>
                    <input type=\"file\" class=\"filepond\" name=\"fotoPrincipal\" accept=\"image/jpeg,image/jpg\">
                    <p class=\"mt-2 text-sm text-gray-500\">Deja vacío para mantener la imagen actual</p>
                </div>
                <div class=\"flex justify-end space-x-4\">
                    <button type=\"button\" onclick=\"window.history.back()\" class=\"px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50\"> Cancelar </button>
                    <button type=\"submit\" class=\"px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700\"> Guardar cambios </button>
                </div>
            </form>
        </div>
    </div>
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
    <script src=\"https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond/dist/filepond.js\"></script>
    <script src=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/jQuery/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/routes/edit-route.js"), "html", null, true);
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
        return "dashboard/routes/edit.html.twig";
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
        return array (  285 => 109,  281 => 108,  271 => 102,  258 => 101,  175 => 28,  165 => 21,  159 => 17,  146 => 16,  130 => 11,  117 => 10,  103 => 7,  90 => 6,  67 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/routes/edit.html.twig #}
{% extends 'dashboard/index.html.twig' %}

{% block title %}Editar Vía{% endblock %}

{% block meta %}
    <meta name=\"csrf-token\" content=\"{{ csrf_token('upload') }}\">
{% endblock %}

{% block css %}
    {{ parent() }}
    <link href=\"https://unpkg.com/filepond/dist/filepond.css\" rel=\"stylesheet\">
    <link href=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <div class=\"main-content mt-8\">
        <div class=\"bg-white rounded-lg shadow-sm p-6\">
            <div class=\"flex justify-between items-center mb-6\">
                <h1 class=\"text-2xl font-bold text-gray-900\">Editar Vía de ascenso</h1>
                <a href=\"{{ path('admin_routes') }}\" class=\"px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200\">
                    <i class=\"fas fa-arrow-left mr-2\"></i>Volver </a>
            </div>
            <div id=\"loading\" class=\"text-center py-12\">
                <i class=\"fas fa-spinner fa-spin text-4xl text-blue-500\"></i>
                <p class=\"mt-2 text-gray-600\">Cargando información...</p>
            </div>
            <form id=\"viaForm\" class=\"space-y-6 hidden\" data-via-id=\"{{ viaId }}\">
                <div>
                    <label for=\"nombre\" class=\"block text-sm font-medium text-gray-700\">Nombre</label>
                    <input type=\"text\" id=\"nombre\" name=\"nombre\" required class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\">
                </div>
                <div>
                    <label for=\"gradoDificultad\" class=\"block text-sm font-medium text-gray-700\"> Grado de Dificultad (Fontainebleau) </label>
                    <select id=\"gradoDificultad\" name=\"gradoDificultad\" required class=\"mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md\">
                        <option value=\"\">Selecciona un grado</option>
                        <optgroup label=\"Principiante\">
                            <option value=\"1\">1</option>
                            <option value=\"1+\">1+</option>
                            <option value=\"2\">2</option>
                            <option value=\"2+\">2+</option>
                            <option value=\"3\">3</option>
                            <option value=\"3+\">3+</option>
                        </optgroup>
                        <optgroup label=\"Intermedio\">
                            <option value=\"4\">4</option>
                            <option value=\"4+\">4+</option>
                            <option value=\"5\">5</option>
                            <option value=\"5+\">5+</option>
                            <option value=\"6A\">6A</option>
                            <option value=\"6A+\">6A+</option>
                        </optgroup>
                        <optgroup label=\"Avanzado\">
                            <option value=\"6B\">6B</option>
                            <option value=\"6B+\">6B+</option>
                            <option value=\"6C\">6C</option>
                            <option value=\"6C+\">6C+</option>
                            <option value=\"7A\">7A</option>
                            <option value=\"7A+\">7A+</option>
                        </optgroup>
                        <optgroup label=\"Experto\">
                            <option value=\"7B\">7B</option>
                            <option value=\"7B+\">7B+</option>
                            <option value=\"7C\">7C</option>
                            <option value=\"7C+\">7C+</option>
                            <option value=\"8A\">8A</option>
                            <option value=\"8A+\">8A+</option>
                        </optgroup>
                        <optgroup label=\"Elite\">
                            <option value=\"8B\">8B</option>
                            <option value=\"8B+\">8B+</option>
                            <option value=\"8C\">8C</option>
                            <option value=\"8C+\">8C+</option>
                            <option value=\"9A\">9A</option>
                        </optgroup>
                    </select>
                    <p class=\"mt-2 text-sm text-gray-500\"> Escala Fontainebleau para boulder </p>
                </div>
                <div>
                    <label for=\"descripcion\" class=\"block text-sm font-medium text-gray-700\">Descripción</label>
                    <textarea id=\"descripcion\" name=\"descripcion\" rows=\"4\" class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"></textarea>
                </div>
                <div>
                    <label for=\"idBloque\" class=\"block text-sm font-medium text-gray-700\">Bloque</label>
                    <select id=\"idBloque\" name=\"idBloque\" required class=\"block w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"></select>
                </div>
                <div>
                    <label class=\"block text-sm font-medium text-gray-700\">Foto Principal (JPG)</label>
                    <input type=\"file\" class=\"filepond\" name=\"fotoPrincipal\" accept=\"image/jpeg,image/jpg\">
                    <p class=\"mt-2 text-sm text-gray-500\">Deja vacío para mantener la imagen actual</p>
                </div>
                <div class=\"flex justify-end space-x-4\">
                    <button type=\"button\" onclick=\"window.history.back()\" class=\"px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50\"> Cancelar </button>
                    <button type=\"submit\" class=\"px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700\"> Guardar cambios </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}

{% block js %}
    {{ parent() }}
    <script src=\"https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond/dist/filepond.js\"></script>
    <script src=\"{{ asset('assets/plugin/jQuery/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/dashboard/routes/edit-route.js') }}\"></script>
{% endblock %}", "dashboard/routes/edit.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\routes\\edit.html.twig");
    }
}
