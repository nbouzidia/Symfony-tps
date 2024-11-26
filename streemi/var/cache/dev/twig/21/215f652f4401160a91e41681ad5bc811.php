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

/* movie/category.html.twig */
class __TwigTemplate_0d3bd4bc789e5f8602963378181e3ffb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie/category.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Catégory XXX</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
    ";
        // line 15
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "movie/category.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "    <main class=\" flex-1 py-10  px-5 sm:px-10 \">

        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\" />
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
        </header>

        <section>
            <div class=\"flex flex-row items-center space-x-6\">
                <span class=\"font-bold text-red-600 text-lg\">Films <span class=\"font-medium text-black\">dans la catégorie </span></span>
                <nav class=\"flex space-x-6 text-gray-400 font-medium\">
                    <a href=\"#\" class=\"hover:text-gray-700\">Action</a>
                    <a href=\"#\" class=\"text-gray-700 font-semibold\">Aventure</a>
                    <a href=\"#\" class=\"hover:text-gray-700 \">Comédie</a>
                    <a href=\"#\" class=\"hover:text-gray-700 \">Science Fiction</a>
                </nav>
            </div>

            <div class=\"flex flex-col items-center mt-9\">
                <a class=\"relative flex w-full flex-row p-3 items-center justify-center rounded-lg overflow-hidden border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>repeat-variant</title><path d=\"M6,5.75L10.25,10H7V16H13.5L15.5,18H7A2,2 0 0,1 5,16V10H1.75L6,5.75M18,18.25L13.75,14H17V8H10.5L8.5,6H17A2,2 0 0,1 19,8V14H22.25L18,18.25Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Trouver un <span class=\"text-red-600\">film</span> aléatoirement dans la catégorie <span class=\"text-red-600\">aventure</span></span>
                </a>
            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Nos recommandations</span>
                <div class=\"flex items-center space-x-2 fill-gray-500\">
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z\"></path>
                    </svg>
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z\"></path>
                    </svg>
                </div>
            </div>

            <ul class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 \">
                ";
        // line 65
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "movie/category.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "movie/category.html.twig", 66)->unwrap()->yield($context);
        // line 67
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "movie/category.html.twig", 67)->unwrap()->yield($context);
        // line 68
        yield "            </ul>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Les films</span>
            </div>

            <ul class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">
                ";
        // line 77
        yield from         $this->loadTemplate("parts/movies/big-card-movie.html.twig", "movie/category.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/big-card-movie.html.twig", "movie/category.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/big-card-movie.html.twig", "movie/category.html.twig", 79)->unwrap()->yield($context);
        // line 80
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/big-card-movie.html.twig", "movie/category.html.twig", 80)->unwrap()->yield($context);
        // line 81
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/big-card-movie.html.twig", "movie/category.html.twig", 81)->unwrap()->yield($context);
        // line 82
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/big-card-movie.html.twig", "movie/category.html.twig", 82)->unwrap()->yield($context);
        // line 83
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/big-card-movie.html.twig", "movie/category.html.twig", 83)->unwrap()->yield($context);
        // line 84
        yield "            </ul>
            <button class=\"flex flex-col items-center mt-9 w-full\">
                <a class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Charger + de films</span>
                </a>
            </button>
        </section>

    </main>
    ";
        // line 96
        yield from         $this->loadTemplate("parts/right-sidebar.html.twig", "movie/category.html.twig", 96)->unwrap()->yield($context);
        // line 97
        yield "</div>

</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "movie/category.html.twig";
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
        return array (  169 => 97,  167 => 96,  153 => 84,  150 => 83,  147 => 82,  144 => 81,  141 => 80,  138 => 79,  135 => 78,  133 => 77,  122 => 68,  119 => 67,  116 => 66,  114 => 65,  63 => 16,  61 => 15,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Catégory XXX</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
    {% include 'parts/left-menu.html.twig' %}
    <main class=\" flex-1 py-10  px-5 sm:px-10 \">

        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\" />
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
        </header>

        <section>
            <div class=\"flex flex-row items-center space-x-6\">
                <span class=\"font-bold text-red-600 text-lg\">Films <span class=\"font-medium text-black\">dans la catégorie </span></span>
                <nav class=\"flex space-x-6 text-gray-400 font-medium\">
                    <a href=\"#\" class=\"hover:text-gray-700\">Action</a>
                    <a href=\"#\" class=\"text-gray-700 font-semibold\">Aventure</a>
                    <a href=\"#\" class=\"hover:text-gray-700 \">Comédie</a>
                    <a href=\"#\" class=\"hover:text-gray-700 \">Science Fiction</a>
                </nav>
            </div>

            <div class=\"flex flex-col items-center mt-9\">
                <a class=\"relative flex w-full flex-row p-3 items-center justify-center rounded-lg overflow-hidden border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>repeat-variant</title><path d=\"M6,5.75L10.25,10H7V16H13.5L15.5,18H7A2,2 0 0,1 5,16V10H1.75L6,5.75M18,18.25L13.75,14H17V8H10.5L8.5,6H17A2,2 0 0,1 19,8V14H22.25L18,18.25Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Trouver un <span class=\"text-red-600\">film</span> aléatoirement dans la catégorie <span class=\"text-red-600\">aventure</span></span>
                </a>
            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Nos recommandations</span>
                <div class=\"flex items-center space-x-2 fill-gray-500\">
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z\"></path>
                    </svg>
                    <svg class=\"h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 fill-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z\"></path>
                    </svg>
                </div>
            </div>

            <ul class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 \">
                {% include 'parts/movies/square-card-movie.html.twig' %}
                {% include 'parts/movies/square-card-movie.html.twig' %}
                {% include 'parts/movies/square-card-movie.html.twig' %}
            </ul>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Les films</span>
            </div>

            <ul class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">
                {% include 'parts/movies/big-card-movie.html.twig' %}
                {% include 'parts/movies/big-card-movie.html.twig' %}
                {% include 'parts/movies/big-card-movie.html.twig' %}
                {% include 'parts/movies/big-card-movie.html.twig' %}
                {% include 'parts/movies/big-card-movie.html.twig' %}
                {% include 'parts/movies/big-card-movie.html.twig' %}
                {% include 'parts/movies/big-card-movie.html.twig' %}
            </ul>
            <button class=\"flex flex-col items-center mt-9 w-full\">
                <a class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Charger + de films</span>
                </a>
            </button>
        </section>

    </main>
    {% include 'parts/right-sidebar.html.twig' %}
</div>

</body>

</html>
", "movie/category.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\movie\\category.html.twig");
    }
}
