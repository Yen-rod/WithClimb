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

/* registration/register.html.twig */
class __TwigTemplate_a05cca6ab7dd271ed08d2b667089fd0e extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Registro - WithClimb</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
    <style>
        .bg-image-blur {
            background: url('";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/view-young-person-rock-climbing-practicing-bouldering-training.jpg"), "html", null, true);
        yield "') center center/cover no-repeat;
            position: relative;
        }

        .bg-image-blur::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: inherit;
            filter: blur(4px);
            z-index: 0;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        .content-overlay {
            position: relative;
            z-index: 2;
        }

        .highlight-text {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class=\"h-screen\">
<div class=\"min-h-screen flex flex-col md:flex-row\">
    <!-- Columna Izquierda con imagen desenfocada -->
    <div class=\"hidden md:block md:w-1/2 lg:w-2/3 bg-image-blur overflow-hidden relative\">
        <!-- Overlay oscuro para mejorar la legibilidad -->
        <div class=\"bg-overlay\"></div>

        <!-- Contenido principal -->
        <div class=\"content-overlay w-full h-full flex flex-col justify-center items-center text-white px-8\">
            <div class=\"max-w-2xl text-center\">
                <h1 class=\"text-5xl lg:text-7xl font-bold mb-8 highlight-text\">WithClimb</h1>
                <p class=\"text-xl lg:text-2xl mb-12 leading-relaxed highlight-text\">
                    Únete a la comunidad de escalada más apasionada.
                    Descubre rutas, comparte experiencias y conecta con otros escaladores.
                </p>

                <!-- Estadísticas -->
                <div class=\"grid grid-cols-3 gap-8 mt-12 max-w-lg mx-auto\">
                    <div class=\"glass-effect rounded-lg p-4\">
                        <div class=\"text-4xl font-bold highlight-text\">500+</div>
                        <div class=\"text-sm mt-2\">Rutas</div>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4\">
                        <div class=\"text-4xl font-bold highlight-text\">2K+</div>
                        <div class=\"text-sm mt-2\">Usuarios</div>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4\">
                        <div class=\"text-4xl font-bold highlight-text\">100+</div>
                        <div class=\"text-sm mt-2\">Zonas</div>
                    </div>
                </div>

                <!-- Características -->
                <div class=\"grid grid-cols-2 gap-6 mt-16 text-left max-w-lg mx-auto\">
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Descubre nuevas rutas de escalada</span>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Conecta con otros escaladores</span>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Comparte tus experiencias</span>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Encuentra spots cercanos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- [El resto del código del formulario permanece igual] -->
    <div class=\"flex-1 flex items-center justify-center p-4 bg-white\">
        <!-- [Contenido del formulario igual que antes] -->
        <div class=\"w-full max-w-md space-y-8 px-4\">
            <!-- Logo móvil -->
            <div class=\"md:hidden text-center mb-8\">
                <h1 class=\"text-3xl font-bold text-lime-600\">WithClimb</h1>
                <p class=\"text-gray-600 mt-2\">Tu comunidad de escalada</p>
            </div>

            <!-- Encabezado del formulario -->
            <div class=\"text-center\">
                <h2 class=\"text-3xl font-bold text-gray-900\">Crea tu cuenta</h2>
                <p class=\"mt-2 text-sm text-gray-600\">Y comienza tu aventura con nosotros</p>
            </div>

            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "flashes", ["success"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 133
            yield "                <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "
            ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "flashes", ["error"], "method", false, false, false, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 137
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "
            <!-- Formulario -->
            ";
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6 mt-8"]]);
        yield "
            <div class=\"space-y-5\">
                <div>
                    ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 144, $this->source); })()), "email", [], "any", false, false, false, 144), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Email"]);
        yield "
                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 145, $this->source); })()), "email", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-lime-500 focus:ring-lime-500"]]);
        yield "
                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 146, $this->source); })()), "email", [], "any", false, false, false, 146), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 150, $this->source); })()), "nombre", [], "any", false, false, false, 150), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Nombre"]);
        yield "
                    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 151, $this->source); })()), "nombre", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-lime-500 focus:ring-lime-500"]]);
        yield "
                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 152, $this->source); })()), "nombre", [], "any", false, false, false, 152), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 156, $this->source); })()), "plainPassword", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Contraseña"]);
        yield "
                    ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 157, $this->source); })()), "plainPassword", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-lime-500 focus:ring-lime-500"]]);
        yield "
                    ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 158, $this->source); })()), "plainPassword", [], "any", false, false, false, 158), 'errors');
        yield "
                </div>
            </div>

            <div class=\"mt-6\">
                <button type=\"submit\" class=\"w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500 transition-colors duration-200\">
                    Unirme a WithClimb
                </button>
            </div>
            ";
        // line 167
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 167, $this->source); })()), 'form_end');
        yield "

            <!-- Enlaces adicionales -->
            <div class=\"mt-6 text-center\">
                <p class=\"text-sm text-gray-600\">
                    ¿Ya tienes cuenta?
                    <a href=\"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-lime-600 hover:text-lime-500 transition-colors\">
                        Inicia sesión aquí
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
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
        return array (  282 => 173,  273 => 167,  261 => 158,  257 => 157,  253 => 156,  246 => 152,  242 => 151,  238 => 150,  231 => 146,  227 => 145,  223 => 144,  217 => 141,  213 => 139,  204 => 137,  200 => 136,  197 => 135,  188 => 133,  184 => 132,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Registro - WithClimb</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
    <style>
        .bg-image-blur {
            background: url('{{ asset('assets/images/view-young-person-rock-climbing-practicing-bouldering-training.jpg') }}') center center/cover no-repeat;
            position: relative;
        }

        .bg-image-blur::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: inherit;
            filter: blur(4px);
            z-index: 0;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        .content-overlay {
            position: relative;
            z-index: 2;
        }

        .highlight-text {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class=\"h-screen\">
<div class=\"min-h-screen flex flex-col md:flex-row\">
    <!-- Columna Izquierda con imagen desenfocada -->
    <div class=\"hidden md:block md:w-1/2 lg:w-2/3 bg-image-blur overflow-hidden relative\">
        <!-- Overlay oscuro para mejorar la legibilidad -->
        <div class=\"bg-overlay\"></div>

        <!-- Contenido principal -->
        <div class=\"content-overlay w-full h-full flex flex-col justify-center items-center text-white px-8\">
            <div class=\"max-w-2xl text-center\">
                <h1 class=\"text-5xl lg:text-7xl font-bold mb-8 highlight-text\">WithClimb</h1>
                <p class=\"text-xl lg:text-2xl mb-12 leading-relaxed highlight-text\">
                    Únete a la comunidad de escalada más apasionada.
                    Descubre rutas, comparte experiencias y conecta con otros escaladores.
                </p>

                <!-- Estadísticas -->
                <div class=\"grid grid-cols-3 gap-8 mt-12 max-w-lg mx-auto\">
                    <div class=\"glass-effect rounded-lg p-4\">
                        <div class=\"text-4xl font-bold highlight-text\">500+</div>
                        <div class=\"text-sm mt-2\">Rutas</div>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4\">
                        <div class=\"text-4xl font-bold highlight-text\">2K+</div>
                        <div class=\"text-sm mt-2\">Usuarios</div>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4\">
                        <div class=\"text-4xl font-bold highlight-text\">100+</div>
                        <div class=\"text-sm mt-2\">Zonas</div>
                    </div>
                </div>

                <!-- Características -->
                <div class=\"grid grid-cols-2 gap-6 mt-16 text-left max-w-lg mx-auto\">
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Descubre nuevas rutas de escalada</span>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Conecta con otros escaladores</span>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Comparte tus experiencias</span>
                    </div>
                    <div class=\"glass-effect rounded-lg p-4 flex items-start space-x-3\">
                        <svg class=\"w-6 h-6 mt-1 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                        </svg>
                        <span>Encuentra spots cercanos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- [El resto del código del formulario permanece igual] -->
    <div class=\"flex-1 flex items-center justify-center p-4 bg-white\">
        <!-- [Contenido del formulario igual que antes] -->
        <div class=\"w-full max-w-md space-y-8 px-4\">
            <!-- Logo móvil -->
            <div class=\"md:hidden text-center mb-8\">
                <h1 class=\"text-3xl font-bold text-lime-600\">WithClimb</h1>
                <p class=\"text-gray-600 mt-2\">Tu comunidad de escalada</p>
            </div>

            <!-- Encabezado del formulario -->
            <div class=\"text-center\">
                <h2 class=\"text-3xl font-bold text-gray-900\">Crea tu cuenta</h2>
                <p class=\"mt-2 text-sm text-gray-600\">Y comienza tu aventura con nosotros</p>
            </div>

            {% for flash in app.flashes('success') %}
                <div class=\"alert alert-success\">{{ flash }}</div>
            {% endfor %}

            {% for flash in app.flashes('error') %}
                <div class=\"alert alert-danger\">{{ flash }}</div>
            {% endfor %}

            <!-- Formulario -->
            {{ form_start(registrationForm, {'attr': {'class': 'space-y-6 mt-8'}}) }}
            <div class=\"space-y-5\">
                <div>
                    {{ form_label(registrationForm.email, 'Email', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-lime-500 focus:ring-lime-500'}}) }}
                    {{ form_errors(registrationForm.email) }}
                </div>

                <div>
                    {{ form_label(registrationForm.nombre, 'Nombre', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.nombre, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-lime-500 focus:ring-lime-500'}}) }}
                    {{ form_errors(registrationForm.nombre) }}
                </div>

                <div>
                    {{ form_label(registrationForm.plainPassword, 'Contraseña', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-lime-500 focus:ring-lime-500'}}) }}
                    {{ form_errors(registrationForm.plainPassword) }}
                </div>
            </div>

            <div class=\"mt-6\">
                <button type=\"submit\" class=\"w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500 transition-colors duration-200\">
                    Unirme a WithClimb
                </button>
            </div>
            {{ form_end(registrationForm) }}

            <!-- Enlaces adicionales -->
            <div class=\"mt-6 text-center\">
                <p class=\"text-sm text-gray-600\">
                    ¿Ya tienes cuenta?
                    <a href=\"{{ path('app_login') }}\" class=\"font-medium text-lime-600 hover:text-lime-500 transition-colors\">
                        Inicia sesión aquí
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>", "registration/register.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\registration\\register.html.twig");
    }
}
