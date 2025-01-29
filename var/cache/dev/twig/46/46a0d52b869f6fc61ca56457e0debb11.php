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

/* macros/routes/routes.html.twig */
class __TwigTemplate_273d9a3113da6dff522ea180f56a24ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/routes/routes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/routes/routes.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_render($image = null, $title = null, $description = null, $climbs_count = null, $idRoute = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "image" => $image,
            "title" => $title,
            "description" => $description,
            "climbs_count" => $climbs_count,
            "idRoute" => $idRoute,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            // line 2
            yield "    <div class=\"bg-white rounded-lg shadow-lg overflow-hidden\">
        <img
                src=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 4, $this->source); })())), "html", null, true);
            yield "\"
                alt=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\"
                class=\"w-full h-48 object-cover\"
        >
        <div class=\"p-6\">
            <h3 class=\"text-xl font-semibold mb-2\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "</h3>
            <p class=\"text-gray-600 mb-4\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "</p>
            <div class=\"flex justify-between items-center\">
                <span class=\"text-green-600 font-semibold\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["climbs_count"]) || array_key_exists("climbs_count", $context) ? $context["climbs_count"] : (function () { throw new RuntimeError('Variable "climbs_count" does not exist.', 12, $this->source); })()), "html", null, true);
            yield " ascensos</span>
                <a href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_routes", ["id" => (isset($context["idRoute"]) || array_key_exists("idRoute", $context) ? $context["idRoute"] : (function () { throw new RuntimeError('Variable "idRoute" does not exist.', 13, $this->source); })())]), "html", null, true);
            yield "\" class=\"text-orange-500 hover:text-orange-600\">Ver más →</a>
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
        return "macros/routes/routes.html.twig";
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
        return array (  107 => 13,  103 => 12,  98 => 10,  94 => 9,  87 => 5,  83 => 4,  79 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro render(image, title, description, climbs_count, idRoute) %}
    <div class=\"bg-white rounded-lg shadow-lg overflow-hidden\">
        <img
                src=\"{{ asset(image) }}\"
                alt=\"{{ title }}\"
                class=\"w-full h-48 object-cover\"
        >
        <div class=\"p-6\">
            <h3 class=\"text-xl font-semibold mb-2\">{{ title }}</h3>
            <p class=\"text-gray-600 mb-4\">{{ description }}</p>
            <div class=\"flex justify-between items-center\">
                <span class=\"text-green-600 font-semibold\">{{ climbs_count }} ascensos</span>
                <a href=\"{{ path('app_users_routes',{id: idRoute}) }}\" class=\"text-orange-500 hover:text-orange-600\">Ver más →</a>
            </div>
        </div>
    </div>
{% endmacro %}", "macros/routes/routes.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\macros\\routes\\routes.html.twig");
    }
}
