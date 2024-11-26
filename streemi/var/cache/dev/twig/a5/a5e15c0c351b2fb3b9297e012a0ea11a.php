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

/* parts/right-sidebar.html.twig */
class __TwigTemplate_08d85bb8423d245147c45f0f99435308 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/right-sidebar.html.twig"));

        // line 1
        yield "<aside class=\" w-1/5 py-10 px-10  min-w-min  border-l border-gray-300 hidden lg:block \">
    <div class=\"relative items-center content-center flex\">
                <span class=\"text-gray-400 absolute left-4 cursor-pointer\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"></path>
                    </svg>
                </span>
        <input type=\"text\" class=\"text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 py-3 rounded-full w-full outline-none focus:ring-1\" placeholder=\"Search ...\">
    </div>
    <div class=\"mt-10\">
        <span class=\"font-semibold text-gray-700\">Mes films en cours</span>
        <ul class=\"mt-4 text-gray-400 text-xs space-y-3\">
            ";
        // line 13
        yield from         $this->loadTemplate("parts/movies/horizontal-card-movie.html.twig", "parts/right-sidebar.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "            ";
        yield from         $this->loadTemplate("parts/movies/horizontal-card-movie.html.twig", "parts/right-sidebar.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "            ";
        yield from         $this->loadTemplate("parts/movies/horizontal-card-movie.html.twig", "parts/right-sidebar.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "            <li class=\"pt-1\">
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_lists");
        yield "\" class=\"px-5 py-2.5 bg-red-600  hover:bg-red-700 rounded-lg text-center font-medium block text-white\">En afficher +</a>
            </li>
        </ul>
    </div>
    <div class=\"mt-10\">
        <span class=\"font-semibold text-gray-700\">Mes derniers ajouts</span>
        <ul class=\"mt-4 text-gray-400 text-xs space-y-3\">
            ";
        // line 24
        yield from         $this->loadTemplate("parts/movies/horizontal-card-movie.html.twig", "parts/right-sidebar.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "            ";
        yield from         $this->loadTemplate("parts/movies/horizontal-card-movie.html.twig", "parts/right-sidebar.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "            ";
        yield from         $this->loadTemplate("parts/movies/horizontal-card-movie.html.twig", "parts/right-sidebar.html.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "            <li class=\"pt-1\">
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_lists");
        yield "\" class=\"px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-center font-medium block text-white\">En afficher +</a>
            </li>

        </ul>
    </div>

</aside><!-- /Right Sidebar -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parts/right-sidebar.html.twig";
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
        return array (  91 => 28,  88 => 27,  85 => 26,  82 => 25,  80 => 24,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\" w-1/5 py-10 px-10  min-w-min  border-l border-gray-300 hidden lg:block \">
    <div class=\"relative items-center content-center flex\">
                <span class=\"text-gray-400 absolute left-4 cursor-pointer\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"></path>
                    </svg>
                </span>
        <input type=\"text\" class=\"text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 py-3 rounded-full w-full outline-none focus:ring-1\" placeholder=\"Search ...\">
    </div>
    <div class=\"mt-10\">
        <span class=\"font-semibold text-gray-700\">Mes films en cours</span>
        <ul class=\"mt-4 text-gray-400 text-xs space-y-3\">
            {% include 'parts/movies/horizontal-card-movie.html.twig' %}
            {% include 'parts/movies/horizontal-card-movie.html.twig' %}
            {% include 'parts/movies/horizontal-card-movie.html.twig' %}
            <li class=\"pt-1\">
                <a href=\"{{ path('page_lists') }}\" class=\"px-5 py-2.5 bg-red-600  hover:bg-red-700 rounded-lg text-center font-medium block text-white\">En afficher +</a>
            </li>
        </ul>
    </div>
    <div class=\"mt-10\">
        <span class=\"font-semibold text-gray-700\">Mes derniers ajouts</span>
        <ul class=\"mt-4 text-gray-400 text-xs space-y-3\">
            {% include 'parts/movies/horizontal-card-movie.html.twig' %}
            {% include 'parts/movies/horizontal-card-movie.html.twig' %}
            {% include 'parts/movies/horizontal-card-movie.html.twig' %}
            <li class=\"pt-1\">
                <a href=\"{{ path('page_lists') }}\" class=\"px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-center font-medium block text-white\">En afficher +</a>
            </li>

        </ul>
    </div>

</aside><!-- /Right Sidebar -->
", "parts/right-sidebar.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\parts\\right-sidebar.html.twig");
    }
}
