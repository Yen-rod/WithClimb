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

/* dashboard/restaurants/new.html.twig */
class __TwigTemplate_d4d480d64b2b82d58d900e2f7aa7ad8c extends Template
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
            'meta' => [$this, 'block_meta'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/restaurants/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/restaurants/new.html.twig"));

        $this->parent = $this->loadTemplate("dashboard/index.html.twig", "dashboard/restaurants/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <meta name=\"csrf-token\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("upload"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <link href=\"https://unpkg.com/filepond/dist/filepond.css\" rel=\"stylesheet\">
    <link href=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css\" rel=\"stylesheet\">


    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/restaurants/restaurants.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "    <main class=\"main-content mt-8\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"bg-white rounded-lg shadow-sm p-6\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h1 class=\"text-2xl font-bold text-gray-900\">Nuevo Restaurante</h1>
                    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_restaurants");
        yield "\" class=\"px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Volver
                    </a>
                </div>

                <form id=\"restauranteForm\" class=\"space-y-6\">
                    <!-- Nombre -->
                    <div>
                        <label for=\"nombre\" class=\"block text-sm font-medium text-gray-700\">Nombre*</label>
                        <input type=\"text\" name=\"nombre\" id=\"nombre\" required
                               class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                               placeholder=\"Nombre del restaurante\">
                    </div>

                    <!-- Zona -->
                    <div>
                        <label for=\"zona\" class=\"block text-sm font-medium text-gray-700\">Zona*</label>
                        <select name=\"idZona\" id=\"zona\" required
                                class=\"mt-1 block w-full rounded-md border-gray-300\">
                        </select>
                    </div>


                    <!-- Ubicación -->
                    <div>
                        <label for=\"ubicacion\" class=\"block text-sm font-medium text-gray-700\">Dirección*</label>
                        <input type=\"text\" name=\"ubicacion\" id=\"ubicacion\" required
                               class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                               placeholder=\"Calle, número, código postal, ciudad\">
                    </div>

                    <!-- Contacto -->
                    <div>
                        <label for=\"contacto\" class=\"block text-sm font-medium text-gray-700\">Contacto</label>
                        <input type=\"text\" name=\"contacto\" id=\"contacto\"
                               class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                               placeholder=\"Teléfono o email de contacto\">
                    </div>

                    <!-- Descripción -->
                    <div>
                        <label for=\"descripcion\" class=\"block text-sm font-medium text-gray-700\">Descripción</label>
                        <textarea name=\"descripcion\" id=\"descripcion\" rows=\"3\"
                                  class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                                  placeholder=\"Describe el restaurante, horarios, tipo de cocina...\"></textarea>
                    </div>

                    <div class=\"mb-4\">
                        <label class=\"block text-sm font-medium text-gray-700\">
                            Foto Principal
                        </label>
                        <input type=\"file\" class=\"filepond\" name=\"fotoPrincipal\" accept=\"image/png, image/jpeg, image/jpg\" required/>
                        <p class=\"mt-1 text-sm text-gray-500\">La imagen debe ser de 1920x1080 píxeles</p>
                    </div>

                    <!-- Botones -->
                    <div class=\"flex justify-end gap-4 pt-4\">
                        <button type=\"button\" onclick=\"window.location.href='";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_restaurants");
        yield "'\"
                                class=\"px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200\">
                            Cancelar
                        </button>
                        <button type=\"submit\"
                                class=\"px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700\">
                            Guardar Restaurante
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        // line 94
        yield "
    <script src=\"https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond/dist/filepond.js\"></script>

    <script src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugin/jQuery/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/restaurants/new-restaurant.js"), "html", null, true);
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
        return "dashboard/restaurants/new.html.twig";
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
        return array (  256 => 102,  252 => 101,  243 => 94,  230 => 93,  205 => 78,  145 => 21,  138 => 16,  125 => 15,  112 => 12,  106 => 8,  93 => 7,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard/index.html.twig' %}

{% block meta %}
    <meta name=\"csrf-token\" content=\"{{ csrf_token('upload') }}\">
{% endblock %}

{% block css %}
    <link href=\"https://unpkg.com/filepond/dist/filepond.css\" rel=\"stylesheet\">
    <link href=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css\" rel=\"stylesheet\">


    <link href=\"{{ asset('assets/dashboard/restaurants/restaurants.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block content %}
    <main class=\"main-content mt-8\">
        <div class=\"max-w-6xl mx-auto\">
            <div class=\"bg-white rounded-lg shadow-sm p-6\">
                <div class=\"flex justify-between items-center mb-6\">
                    <h1 class=\"text-2xl font-bold text-gray-900\">Nuevo Restaurante</h1>
                    <a href=\"{{ path('admin_restaurants') }}\" class=\"px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Volver
                    </a>
                </div>

                <form id=\"restauranteForm\" class=\"space-y-6\">
                    <!-- Nombre -->
                    <div>
                        <label for=\"nombre\" class=\"block text-sm font-medium text-gray-700\">Nombre*</label>
                        <input type=\"text\" name=\"nombre\" id=\"nombre\" required
                               class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                               placeholder=\"Nombre del restaurante\">
                    </div>

                    <!-- Zona -->
                    <div>
                        <label for=\"zona\" class=\"block text-sm font-medium text-gray-700\">Zona*</label>
                        <select name=\"idZona\" id=\"zona\" required
                                class=\"mt-1 block w-full rounded-md border-gray-300\">
                        </select>
                    </div>


                    <!-- Ubicación -->
                    <div>
                        <label for=\"ubicacion\" class=\"block text-sm font-medium text-gray-700\">Dirección*</label>
                        <input type=\"text\" name=\"ubicacion\" id=\"ubicacion\" required
                               class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                               placeholder=\"Calle, número, código postal, ciudad\">
                    </div>

                    <!-- Contacto -->
                    <div>
                        <label for=\"contacto\" class=\"block text-sm font-medium text-gray-700\">Contacto</label>
                        <input type=\"text\" name=\"contacto\" id=\"contacto\"
                               class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                               placeholder=\"Teléfono o email de contacto\">
                    </div>

                    <!-- Descripción -->
                    <div>
                        <label for=\"descripcion\" class=\"block text-sm font-medium text-gray-700\">Descripción</label>
                        <textarea name=\"descripcion\" id=\"descripcion\" rows=\"3\"
                                  class=\"w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500\"
                                  placeholder=\"Describe el restaurante, horarios, tipo de cocina...\"></textarea>
                    </div>

                    <div class=\"mb-4\">
                        <label class=\"block text-sm font-medium text-gray-700\">
                            Foto Principal
                        </label>
                        <input type=\"file\" class=\"filepond\" name=\"fotoPrincipal\" accept=\"image/png, image/jpeg, image/jpg\" required/>
                        <p class=\"mt-1 text-sm text-gray-500\">La imagen debe ser de 1920x1080 píxeles</p>
                    </div>

                    <!-- Botones -->
                    <div class=\"flex justify-end gap-4 pt-4\">
                        <button type=\"button\" onclick=\"window.location.href='{{ path('admin_restaurants') }}'\"
                                class=\"px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200\">
                            Cancelar
                        </button>
                        <button type=\"submit\"
                                class=\"px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700\">
                            Guardar Restaurante
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
{% endblock %}

{% block js %}

    <script src=\"https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js\"></script>
    <script src=\"https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js\"></script>
    <script src=\"https://unpkg.com/filepond/dist/filepond.js\"></script>

    <script src=\"{{ asset('assets/plugin/jQuery/jquery-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/dashboard/restaurants/new-restaurant.js') }}\"></script>
{% endblock %}", "dashboard/restaurants/new.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\dashboard\\restaurants\\new.html.twig");
    }
}
