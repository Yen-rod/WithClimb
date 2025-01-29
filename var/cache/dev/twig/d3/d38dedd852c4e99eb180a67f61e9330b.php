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

/* user/profile/index.html.twig */
class __TwigTemplate_68f61636bd236876c963730e88f1d74f extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile/index.html.twig", 1);
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

        yield " Editar Perfil ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"bg-white rounded-lg shadow-sm overflow-hidden\">
                <div class=\"p-6 sm:p-8\">
                    <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">Editar Perfil</h1>

                    <!-- Avatar Section -->
                    <div class=\"mb-8\">
                        <div class=\"flex items-center gap-6\">
                            <div class=\"relative\">
                                ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "hasAvatar", [], "any", false, false, false, 16)) {
            // line 17
            yield "                                    <img
                                            src=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18))), "html", null, true);
            yield "\"
                                            alt=\"Avatar de ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "nombre", [], "any", false, false, false, 19), "html", null, true);
            yield "\"
                                            id=\"current-avatar\"
                                            class=\"w-24 h-24 rounded-full object-cover\"
                                    >
                                ";
        } else {
            // line 24
            yield "                                    <img
                                            src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                                            alt=\"Avatar por defecto\"
                                            id=\"current-avatar\"
                                            class=\"w-24 h-24 rounded-full object-cover\"
                                    >
                                ";
        }
        // line 31
        yield "                                <button type=\"button\"
                                        id=\"change-avatar-btn\"
                                        class=\"absolute bottom-0 right-0 bg-white rounded-full p-2 shadow-md hover:bg-gray-50\">
                                    <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 13a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <h3 class=\"font-medium text-gray-900\">Foto de perfil</h3>
                                <p class=\"text-sm text-gray-500\">JPG, PNG o WebP. Máximo 1MB.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <form id=\"profile-form\" class=\"space-y-6\">
                        <!-- Nombre -->
                        <div>
                            <label for=\"nombre\" class=\"block text-sm font-medium text-gray-700\">Nombre</label>
                            <input type=\"text\"
                                   name=\"nombre\"
                                   id=\"nombre\"
                                   class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500\">
                        </div>

                        <!-- Email (readonly) -->
                        <div>
                            <label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Email</label>
                            <input type=\"email\"
                                   name=\"email\"
                                   id=\"email\"
                                   readonly
                                   class=\"mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm\">
                        </div>

                        <!-- Género -->
                        <div>
                            <label for=\"genero\" class=\"block text-sm font-medium text-gray-700\">Género</label>
                            <select name=\"genero\"
                                    id=\"genero\"
                                    class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500\">
                                <option value=\"H\">Hombre</option>
                                <option value=\"M\">Mujer</option>
                                <option value=\"O\">Otro</option>
                            </select>
                        </div>

                        <!-- Nueva contraseña -->
                        <div>
                            <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Nueva contraseña</label>
                            <input type=\"password\"
                                   name=\"password\"
                                   id=\"password\"
                                   placeholder=\"Dejar en blanco para mantener la actual\"
                                   class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500\">
                        </div>

                        <!-- Botones -->
                        <div class=\"flex justify-end gap-4\">
                            <button type=\"submit\"
                                    class=\"px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500\">
                                Guardar cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- File input hidden -->
    <input type=\"file\"
           id=\"avatar-input\"
           accept=\"image/jpeg,image/png,image/webp\"
           class=\"hidden\">

    <!-- Notifications container -->
    <div id=\"notifications-container\" class=\"fixed bottom-4 left-4 z-50 flex flex-col gap-2\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
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

        // line 114
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/profile.js"), "html", null, true);
        yield "\">
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
        return "user/profile/index.html.twig";
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
        return array (  243 => 114,  230 => 113,  139 => 31,  130 => 24,  122 => 19,  118 => 18,  115 => 17,  113 => 16,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Editar Perfil {% endblock %}

{% block body %}
    <div class=\"container mx-auto px-4 py-8\">
        <div class=\"max-w-3xl mx-auto\">
            <div class=\"bg-white rounded-lg shadow-sm overflow-hidden\">
                <div class=\"p-6 sm:p-8\">
                    <h1 class=\"text-2xl font-bold text-gray-900 mb-6\">Editar Perfil</h1>

                    <!-- Avatar Section -->
                    <div class=\"mb-8\">
                        <div class=\"flex items-center gap-6\">
                            <div class=\"relative\">
                                {% if app.user.hasAvatar %}
                                    <img
                                            src=\"{{ asset('uploads/' ~ app.user.avatar) }}\"
                                            alt=\"Avatar de {{ app.user.nombre }}\"
                                            id=\"current-avatar\"
                                            class=\"w-24 h-24 rounded-full object-cover\"
                                    >
                                {% else %}
                                    <img
                                            src=\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239CA3AF'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z'/%3E%3C/svg%3E\"
                                            alt=\"Avatar por defecto\"
                                            id=\"current-avatar\"
                                            class=\"w-24 h-24 rounded-full object-cover\"
                                    >
                                {% endif %}
                                <button type=\"button\"
                                        id=\"change-avatar-btn\"
                                        class=\"absolute bottom-0 right-0 bg-white rounded-full p-2 shadow-md hover:bg-gray-50\">
                                    <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 13a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <h3 class=\"font-medium text-gray-900\">Foto de perfil</h3>
                                <p class=\"text-sm text-gray-500\">JPG, PNG o WebP. Máximo 1MB.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <form id=\"profile-form\" class=\"space-y-6\">
                        <!-- Nombre -->
                        <div>
                            <label for=\"nombre\" class=\"block text-sm font-medium text-gray-700\">Nombre</label>
                            <input type=\"text\"
                                   name=\"nombre\"
                                   id=\"nombre\"
                                   class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500\">
                        </div>

                        <!-- Email (readonly) -->
                        <div>
                            <label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Email</label>
                            <input type=\"email\"
                                   name=\"email\"
                                   id=\"email\"
                                   readonly
                                   class=\"mt-1 block w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm\">
                        </div>

                        <!-- Género -->
                        <div>
                            <label for=\"genero\" class=\"block text-sm font-medium text-gray-700\">Género</label>
                            <select name=\"genero\"
                                    id=\"genero\"
                                    class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500\">
                                <option value=\"H\">Hombre</option>
                                <option value=\"M\">Mujer</option>
                                <option value=\"O\">Otro</option>
                            </select>
                        </div>

                        <!-- Nueva contraseña -->
                        <div>
                            <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Nueva contraseña</label>
                            <input type=\"password\"
                                   name=\"password\"
                                   id=\"password\"
                                   placeholder=\"Dejar en blanco para mantener la actual\"
                                   class=\"mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500\">
                        </div>

                        <!-- Botones -->
                        <div class=\"flex justify-end gap-4\">
                            <button type=\"submit\"
                                    class=\"px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500\">
                                Guardar cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- File input hidden -->
    <input type=\"file\"
           id=\"avatar-input\"
           accept=\"image/jpeg,image/png,image/webp\"
           class=\"hidden\">

    <!-- Notifications container -->
    <div id=\"notifications-container\" class=\"fixed bottom-4 left-4 z-50 flex flex-col gap-2\"></div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('assets/user/profile.js') }}\">
{% endblock %}", "user/profile/index.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\user\\profile\\index.html.twig");
    }
}
