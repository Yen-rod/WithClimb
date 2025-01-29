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

/* security/login.html.twig */
class __TwigTemplate_a2d009d1c31081f953b6b24d3bfef6e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Iniciar Sesión - WithClimb</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
</head>
<body class=\"h-screen\">
<div class=\"min-h-screen flex flex-col md:flex-row\">
    <!-- Columna Izquierda - Imagen -->
    <div class=\"relative hidden md:block md:w-1/2 lg:w-2/3\">
        <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/login/man-climbing-mountain-with-safety-equipment.jpg"), "html", null, true);
        yield "\"
             alt=\"Escalada en naturaleza\"
             class=\"absolute inset-0 h-full w-full object-cover\">
        <div class=\"absolute inset-0 bg-gradient-to-r from-green-900/70 to-transparent flex items-center justify-center\">
            <div class=\"px-8 text-white space-y-4\">
                <h1 class=\"text-4xl lg:text-6xl font-bold\">WithClimb</h1>
                <p class=\"text-xl lg:text-2xl max-w-xl\">Descubre las mejores rutas de escalada y conecta con la comunidad</p>
            </div>
        </div>
    </div>

    <!-- Columna Derecha - Formulario -->
    <div class=\"flex-1 flex items-center justify-center p-4 bg-white\">
        <div class=\"w-full max-w-md space-y-8 px-4\">
            <!-- Logo móvil -->
            <div class=\"md:hidden text-center mb-8\">
                <h1 class=\"text-3xl font-bold text-green-600\">WithClimb</h1>
                <p class=\"text-gray-600 mt-2\">Tu comunidad de escalada</p>
            </div>

            <!-- Encabezado del formulario -->
            <div class=\"text-center\">
                <h2 class=\"text-3xl font-bold text-gray-900\">Bienvenido de nuevo</h2>
                <p class=\"mt-2 text-sm text-gray-600\">Inicia sesión para continuar tu aventura</p>
            </div>

            <!-- Mensajes de error -->
            <div class=\"error-message hidden rounded-md bg-red-50 p-4\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-red-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-red-700\">Credenciales inválidas</p>
                    </div>
                </div>
            </div>

            <!-- Formulario -->
            <form class=\"mt-8 space-y-6\" method=\"post\">

                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "flashes", ["success"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 57
            yield "                <div class=\"rounded-md bg-green-50 p-4 mb-6 animate-appear\">
                    <div class=\"flex\">
                        <div class=\"ml-3\">
                            <div class=\"mt-2 text-sm text-green-700\">
                                ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "
                <!-- Reemplaza la sección de error actual con esto -->
                ";
        // line 69
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 69, $this->source); })())) {
            // line 70
            yield "                    <div class=\"rounded-md bg-red-50 p-4 mb-6 animate-appear\">
                        <div class=\"flex\">
                            <div class=\"ml-3\">
                                <div class=\"mt-2 text-sm text-red-700\">
                                    ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 74, $this->source); })()), "messageKey", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 74, $this->source); })()), "messageData", [], "any", false, false, false, 74), "security"), "html", null, true);
            yield "
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 80
        yield "
                ";
        // line 81
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81)) {
            // line 82
            yield "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "userIdentifier", [], "any", false, false, false, 83), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </div>
                ";
        }
        // line 86
        yield "
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                <div class=\"space-y-4\">
                    <!-- Email -->
                    <div>
                        <label for=\"email\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                            Correo electrónico
                        </label>
                        <input id=\"email\"
                               name=\"email\"
                               type=\"email\"
                               required
                               class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm\"
                               placeholder=\"tu@email.com\">
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for=\"password\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                            Contraseña
                        </label>
                        <input id=\"password\"
                               name=\"password\"
                               type=\"password\"
                               required
                               class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm\"
                               placeholder=\"••••••••\">
                    </div>
                </div>

                <!-- Opciones adicionales -->
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center\">
                        <input id=\"remember_me\"
                               name=\"_remember_me\"
                               type=\"checkbox\"
                               class=\"h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded\">
                        <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-900\">
                            Recordarme
                        </label>
                    </div>

                    <div class=\"text-sm\">
                        <a href=\"#\" class=\"font-medium text-green-600 hover:text-green-500 transition-colors\">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                >
                <!-- Botón submit -->
                <div>
                    <button type=\"submit\"
                            class=\"group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200\">
                            <span class=\"absolute left-0 inset-y-0 flex items-center pl-3\">
                                <svg class=\"h-5 w-5 text-green-500 group-hover:text-green-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                    <path fill-rule=\"evenodd\" d=\"M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z\" clip-rule=\"evenodd\" />
                                </svg>
                            </span>
                        Iniciar sesión
                    </button>
                </div>
            </form>

            <!-- Enlaces adicionales -->
            <div class=\"text-center\">
                <p class=\"text-sm text-gray-600\">
                    ¿No tienes cuenta?
                    <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"font-medium text-green-600 hover:text-green-500 transition-colors\">
                        Regístrate aquí
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
        return "security/login.html.twig";
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
        return array (  246 => 157,  223 => 137,  170 => 87,  167 => 86,  159 => 83,  156 => 82,  154 => 81,  151 => 80,  142 => 74,  136 => 70,  134 => 69,  130 => 67,  118 => 61,  112 => 57,  108 => 56,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Iniciar Sesión - WithClimb</title>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css\" rel=\"stylesheet\">
</head>
<body class=\"h-screen\">
<div class=\"min-h-screen flex flex-col md:flex-row\">
    <!-- Columna Izquierda - Imagen -->
    <div class=\"relative hidden md:block md:w-1/2 lg:w-2/3\">
        <img src=\"{{ asset('assets/login/man-climbing-mountain-with-safety-equipment.jpg') }}\"
             alt=\"Escalada en naturaleza\"
             class=\"absolute inset-0 h-full w-full object-cover\">
        <div class=\"absolute inset-0 bg-gradient-to-r from-green-900/70 to-transparent flex items-center justify-center\">
            <div class=\"px-8 text-white space-y-4\">
                <h1 class=\"text-4xl lg:text-6xl font-bold\">WithClimb</h1>
                <p class=\"text-xl lg:text-2xl max-w-xl\">Descubre las mejores rutas de escalada y conecta con la comunidad</p>
            </div>
        </div>
    </div>

    <!-- Columna Derecha - Formulario -->
    <div class=\"flex-1 flex items-center justify-center p-4 bg-white\">
        <div class=\"w-full max-w-md space-y-8 px-4\">
            <!-- Logo móvil -->
            <div class=\"md:hidden text-center mb-8\">
                <h1 class=\"text-3xl font-bold text-green-600\">WithClimb</h1>
                <p class=\"text-gray-600 mt-2\">Tu comunidad de escalada</p>
            </div>

            <!-- Encabezado del formulario -->
            <div class=\"text-center\">
                <h2 class=\"text-3xl font-bold text-gray-900\">Bienvenido de nuevo</h2>
                <p class=\"mt-2 text-sm text-gray-600\">Inicia sesión para continuar tu aventura</p>
            </div>

            <!-- Mensajes de error -->
            <div class=\"error-message hidden rounded-md bg-red-50 p-4\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <svg class=\"h-5 w-5 text-red-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\" />
                        </svg>
                    </div>
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-red-700\">Credenciales inválidas</p>
                    </div>
                </div>
            </div>

            <!-- Formulario -->
            <form class=\"mt-8 space-y-6\" method=\"post\">

                {% for flash in app.flashes('success') %}
                <div class=\"rounded-md bg-green-50 p-4 mb-6 animate-appear\">
                    <div class=\"flex\">
                        <div class=\"ml-3\">
                            <div class=\"mt-2 text-sm text-green-700\">
                                {{ flash }}
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}

                <!-- Reemplaza la sección de error actual con esto -->
                {% if error %}
                    <div class=\"rounded-md bg-red-50 p-4 mb-6 animate-appear\">
                        <div class=\"flex\">
                            <div class=\"ml-3\">
                                <div class=\"mt-2 text-sm text-red-700\">
                                    {{ error.messageKey|trans(error.messageData, 'security') }}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

                {% if app.user %}
                    <div class=\"mb-3\">
                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <div class=\"space-y-4\">
                    <!-- Email -->
                    <div>
                        <label for=\"email\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                            Correo electrónico
                        </label>
                        <input id=\"email\"
                               name=\"email\"
                               type=\"email\"
                               required
                               class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm\"
                               placeholder=\"tu@email.com\">
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for=\"password\" class=\"block text-sm font-medium text-gray-700 mb-1\">
                            Contraseña
                        </label>
                        <input id=\"password\"
                               name=\"password\"
                               type=\"password\"
                               required
                               class=\"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm\"
                               placeholder=\"••••••••\">
                    </div>
                </div>

                <!-- Opciones adicionales -->
                <div class=\"flex items-center justify-between\">
                    <div class=\"flex items-center\">
                        <input id=\"remember_me\"
                               name=\"_remember_me\"
                               type=\"checkbox\"
                               class=\"h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded\">
                        <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-900\">
                            Recordarme
                        </label>
                    </div>

                    <div class=\"text-sm\">
                        <a href=\"#\" class=\"font-medium text-green-600 hover:text-green-500 transition-colors\">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >
                <!-- Botón submit -->
                <div>
                    <button type=\"submit\"
                            class=\"group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200\">
                            <span class=\"absolute left-0 inset-y-0 flex items-center pl-3\">
                                <svg class=\"h-5 w-5 text-green-500 group-hover:text-green-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                    <path fill-rule=\"evenodd\" d=\"M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z\" clip-rule=\"evenodd\" />
                                </svg>
                            </span>
                        Iniciar sesión
                    </button>
                </div>
            </form>

            <!-- Enlaces adicionales -->
            <div class=\"text-center\">
                <p class=\"text-sm text-gray-600\">
                    ¿No tienes cuenta?
                    <a href=\"{{ path(\"app_register\") }}\" class=\"font-medium text-green-600 hover:text-green-500 transition-colors\">
                        Regístrate aquí
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>", "security/login.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\security\\login.html.twig");
    }
}
