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

/* macros/testimonial/testimonial.html.twig */
class __TwigTemplate_69193fe1dd3ba8b6fb1c5a485d12de60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/testimonial/testimonial.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/testimonial/testimonial.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_testimonial($name = null, $since_year = null, $quote = null, $icon_name = "user", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "since_year" => $since_year,
            "quote" => $quote,
            "icon_name" => $icon_name,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "testimonial"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "testimonial"));

            // line 2
            yield "    <div class=\"bg-white p-6 rounded-lg shadow\">
        <div class=\"flex items-start space-x-4\">
            <div class=\"w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center\">
                <div class=\"w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z\" />
                    </svg>
                </div>
            </div>
            <div>
                <h3 class=\"font-semibold\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "</h3>
                <p class=\"text-gray-600 text-sm\">Escalador";
            // line 13
            if ((Twig\Extension\CoreExtension::last($this->env->getCharset(), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })())) == "a")) {
                yield "a";
            }
            yield " desde ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["since_year"]) || array_key_exists("since_year", $context) ? $context["since_year"] : (function () { throw new RuntimeError('Variable "since_year" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "</p>
                <p class=\"mt-2\">\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quote"]) || array_key_exists("quote", $context) ? $context["quote"] : (function () { throw new RuntimeError('Variable "quote" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\"</p>
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
        return "macros/testimonial/testimonial.html.twig";
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
        return array (  102 => 14,  94 => 13,  90 => 12,  78 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro testimonial(name, since_year, quote, icon_name = 'user') %}
    <div class=\"bg-white p-6 rounded-lg shadow\">
        <div class=\"flex items-start space-x-4\">
            <div class=\"w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center\">
                <div class=\"w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6 text-orange-500\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z\" />
                    </svg>
                </div>
            </div>
            <div>
                <h3 class=\"font-semibold\">{{ name }}</h3>
                <p class=\"text-gray-600 text-sm\">Escalador{% if name|last == 'a' %}a{% endif %} desde {{ since_year }}</p>
                <p class=\"mt-2\">\"{{ quote }}\"</p>
            </div>
        </div>
    </div>
{% endmacro %}", "macros/testimonial/testimonial.html.twig", "C:\\xampp\\htdocs\\withClimb\\templates\\macros\\testimonial\\testimonial.html.twig");
    }
}
