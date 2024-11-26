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

/* index.html.twig */
class __TwigTemplate_da339deaaf7471880172da8bb9386228 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Mes films</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">

    ";
        // line 16
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "index.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "
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
            <nav class=\"flex space-x-6 text-gray-400 font-medium\">
                <a href=\"#\" class=\"hover:text-gray-700\">Séries</a>
                <a href=\"#\" class=\"text-gray-700 font-semibold\">Films</a>
                <a href=\"#\" class=\"hover:text-gray-700 \">Animés</a>
            </nav>

            <div class=\"flex flex-col bg-top justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white\"
                 style=\"background-image: url('https://resize.elle.fr/original/var/plain_site/storage/images/loisirs/cinema/news/inception-films-et-series-a-regarder-si-vous-aimez-le-film-avec-leonardo-dicaprio/97088011-1-fre-FR/Inception-5-films-et-series-a-regarder-si-vous-aimez-le-film-avec-Leonardo-DiCaprio.jpg');\" >
                <div class=\"flex -space-x-1 items-center \">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?a\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?b\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?c\" alt=\"\" srcset=\"\">
                    <span class=\"pl-4 text-xs drop-shadow-lg\">Recommandé par 12 amis</span>
                </div>

                <div class=\"bg-gradient-to-r from-black/40 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2\">
                    <span class=\"uppercase text-3xl font-semibold drop-shadow-lg \">Inception</span>
                    <div class=\"text-xs text-gray-200 mt-2\">
                        <a href=\"#\" class=\"\">Action</a>,
                        <a href=\"#\" class=\"\">Adventure</a>,
                        <a href=\"#\" class=\"\">Sci-Fi</a>
                    </div>
                    <div class=\"mt-4 flex items-center justify-between\">
                        <div class=\"flex space-x-3 items-center\">
                            <a href=\"#\" class=\"px-5 flex py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-4 w-4 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>play-box</title><path d=\"M19 3H5C3.89 3 3 3.89 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.89 20.1 3 19 3M10 16V8L15 12\" /></svg>
                                Reprendre la lecture
                            </a>
                            <a href=\"#\" class=\"p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                    <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\" />
                                </svg>
                            </a>
                        </div>
                        <div class=\"text-right\">
                            <span class=\"ml-2 bg-white/30 py-1 px-3 text-xxs rounded\">1h42m restants</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Tendances</span>
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
        // line 89
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 89)->unwrap()->yield($context);
        // line 90
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 90)->unwrap()->yield($context);
        // line 91
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 91)->unwrap()->yield($context);
        // line 92
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 92)->unwrap()->yield($context);
        // line 93
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 93)->unwrap()->yield($context);
        // line 94
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 94)->unwrap()->yield($context);
        // line 95
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 95)->unwrap()->yield($context);
        // line 96
        yield "                ";
        yield from         $this->loadTemplate("parts/movies/square-card-movie.html.twig", "index.html.twig", 96)->unwrap()->yield($context);
        // line 97
        yield "            </ul>
        </section>
    </main>

    ";
        // line 101
        yield from         $this->loadTemplate("parts/right-sidebar.html.twig", "index.html.twig", 101)->unwrap()->yield($context);
        // line 102
        yield "
</div>

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
        return "index.html.twig";
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
        return array (  169 => 102,  167 => 101,  161 => 97,  158 => 96,  155 => 95,  152 => 94,  149 => 93,  146 => 92,  143 => 91,  140 => 90,  138 => 89,  64 => 17,  62 => 16,  45 => 1,);
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
    <title>Mes films</title>
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
            <nav class=\"flex space-x-6 text-gray-400 font-medium\">
                <a href=\"#\" class=\"hover:text-gray-700\">Séries</a>
                <a href=\"#\" class=\"text-gray-700 font-semibold\">Films</a>
                <a href=\"#\" class=\"hover:text-gray-700 \">Animés</a>
            </nav>

            <div class=\"flex flex-col bg-top justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white\"
                 style=\"background-image: url('https://resize.elle.fr/original/var/plain_site/storage/images/loisirs/cinema/news/inception-films-et-series-a-regarder-si-vous-aimez-le-film-avec-leonardo-dicaprio/97088011-1-fre-FR/Inception-5-films-et-series-a-regarder-si-vous-aimez-le-film-avec-Leonardo-DiCaprio.jpg');\" >
                <div class=\"flex -space-x-1 items-center \">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?a\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?b\" alt=\"\" srcset=\"\">
                    <img class=\"rounded-full w-7 h-7 shadow-lg border border-white\" src=\"https://random.imagecdn.app/100/100?c\" alt=\"\" srcset=\"\">
                    <span class=\"pl-4 text-xs drop-shadow-lg\">Recommandé par 12 amis</span>
                </div>

                <div class=\"bg-gradient-to-r from-black/40 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2\">
                    <span class=\"uppercase text-3xl font-semibold drop-shadow-lg \">Inception</span>
                    <div class=\"text-xs text-gray-200 mt-2\">
                        <a href=\"#\" class=\"\">Action</a>,
                        <a href=\"#\" class=\"\">Adventure</a>,
                        <a href=\"#\" class=\"\">Sci-Fi</a>
                    </div>
                    <div class=\"mt-4 flex items-center justify-between\">
                        <div class=\"flex space-x-3 items-center\">
                            <a href=\"#\" class=\"px-5 flex py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block\">
                                <svg class=\"h-4 w-4 fill-current mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>play-box</title><path d=\"M19 3H5C3.89 3 3 3.89 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.89 20.1 3 19 3M10 16V8L15 12\" /></svg>
                                Reprendre la lecture
                            </a>
                            <a href=\"#\" class=\"p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                                    <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\" />
                                </svg>
                            </a>
                        </div>
                        <div class=\"text-right\">
                            <span class=\"ml-2 bg-white/30 py-1 px-3 text-xxs rounded\">1h42m restants</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"mt-9\">
            <div class=\"flex items-center justify-between\">
                <span class=\"font-semibold text-gray-700 text-base\">Tendances</span>
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
                {% include 'parts/movies/square-card-movie.html.twig' %}
                {% include 'parts/movies/square-card-movie.html.twig' %}
                {% include 'parts/movies/square-card-movie.html.twig' %}
                {% include 'parts/movies/square-card-movie.html.twig' %}
                {% include 'parts/movies/square-card-movie.html.twig' %}
            </ul>
        </section>
    </main>

    {% include 'parts/right-sidebar.html.twig' %}

</div>

</body>

</html>
", "index.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\index.html.twig");
    }
}
