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

/* macros/climbs/climbs.html.twig */
class __TwigTemplate_a78b3de30061dfc146d03d15deffb6e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/climbs/climbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/climbs/climbs.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_render($climb = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "climb" => $climb,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            // line 2
            yield "    <div class=\"bg-white rounded-lg shadow-sm p-6\">
        <div class=\"flex items-start gap-4\">
            <img src=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["climb"]) || array_key_exists("climb", $context) ? $context["climb"] : (function () { throw new RuntimeError('Variable "climb" does not exist.', 4, $this->source); })()), "idUsuario", [], "any", false, false, false, 4), "avatar", [], "any", false, false, false, 4))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["climb"]) || array_key_exists("climb", $context) ? $context["climb"] : (function () { throw new RuntimeError('Variable "climb" does not exist.', 4, $this->source); })()), "idUsuario", [], "any", false, false, false, 4), "nombre", [], "any", false, false, false, 4), "html", null, true);
            yield "\" class=\"w-12 h-12 rounded-full\">
            <div class=\"flex-1\">
                <div class=\"font-medium\">
                    ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["climb"]) || array_key_exists("climb", $context) ? $context["climb"] : (function () { throw new RuntimeError('Variable "climb" does not exist.', 7, $this->source); })()), "idUsuario", [], "any", false, false, false, 7), "nombre", [], "any", false, false, false, 7), "html", null, true);
            yield " · <span class=\"text-gray-500 text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\TimeExtension']->timeAgo(CoreExtension::getAttribute($this->env, $this->source, (isset($context["climb"]) || array_key_exists("climb", $context) ? $context["climb"] : (function () { throw new RuntimeError('Variable "climb" does not exist.', 7, $this->source); })()), "fecha", [], "any", false, false, false, 7)), "html", null, true);
            yield "</span>
                </div>
                <div class=\"text-gray-600\">el usuario ha marcado esta vía como completada</div>
                <a href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_routes", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["climb"]) || array_key_exists("climb", $context) ? $context["climb"] : (function () { throw new RuntimeError('Variable "climb" does not exist.', 10, $this->source); })()), "idVia", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\" class=\"text-blue-500 hover:underline\">
                    ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["climb"]) || array_key_exists("climb", $context) ? $context["climb"] : (function () { throw new RuntimeError('Variable "climb" does not exist.', 11, $this->source); })()), "idVia", [], "any", false, false, false, 11), "nombre", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["climb"]) || array_key_exists("climb", $context) ? $context["climb"] : (function () { throw new RuntimeError('Variable "climb" does not exist.', 11, $this->source); })()), "idVia", [], "any", false, false, false, 11), "gradoDificultad", [], "any", false, false, false, 11), "html", null, true);
            yield "
                </a>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/climbs/climbs.html.twig";
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
        return array (  99 => 11,  95 => 10,  87 => 7,  79 => 4,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro render(climb) %}
    <div class=\"bg-white rounded-lg shadow-sm p-6\">
        <div class=\"flex items-start gap-4\">
            <img src=\"{{ asset('uploads/' ~ climb.idUsuario.avatar ) }}\" alt=\"{{ climb.idUsuario.nombre }}\" class=\"w-12 h-12 rounded-full\">
            <div class=\"flex-1\">
                <div class=\"font-medium\">
                    {{ climb.idUsuario.nombre }} · <span class=\"text-gray-500 text-sm\">{{ climb.fecha|time_ago }}</span>
                </div>
                <div class=\"text-gray-600\">el usuario ha marcado esta vía como completada</div>
                <a href=\"{{ path('app_users_routes', {id: climb.idVia.id}) }}\" class=\"text-blue-500 hover:underline\">
                    {{ climb.idVia.nombre }} {{ climb.idVia.gradoDificultad }}
                </a>
            </div>
        </div>
    </div>
{% endmacro %}", "macros/climbs/climbs.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\macros\\climbs\\climbs.html.twig");
    }
}
