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

/* movie/lists.html.twig */
class __TwigTemplate_f8df24a418250a8ed85680f02c073f44 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie/lists.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"Mazyar\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <meta name=\"author\" content=\"Mazyar\">
    <title>Streemi - Mes listes</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white\">
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
    ";
        // line 17
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "movie/lists.html.twig", 17)->unwrap()->yield($context);
        // line 18
        yield "    <main class=\" flex-1 py-10  px-5 sm:px-10 \">

        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700 \" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\" />
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wide flex-1\">MMovie<span class=\"text-red-600\">.</span></div>

            <div class=\"relative items-center content-center flex ml-2\">
                    <span class=\"text-gray-400 absolute left-4 cursor-pointer\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"></path>
                        </svg>
                    </span>
                <input type=\"text\" class=\"text-xs ring-1 bg-transparent ring-gray-200 focus:ring-red-300 pl-10 pr-5 text-gray-600 py-3 rounded-full w-full outline-none focus:ring-1\" placeholder=\"Search ...\">
            </div>
        </header>

        <section>
            <h1 class=\"font-medium text-black text-lg\">Mes listes de <span class=\"font-bold text-red-600\">films</span> et <span class=\"font-bold text-red-600\">séries</span></h1>

            <div class=\"flex flex-col space-y-3 mt-9\">
                <div class=\"relative w-full flex space-x-3 text-gray-700 font-medium\">
                    <button class=\"flex w-1/3 text-nowrap items-center p-3 rounded-md border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                        <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                        Créer une liste
                    </button>
                    <button class=\"flex w-1/3 text-nowrap items-center p-3 rounded-md border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                        <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>link-plus</title><path d=\"M7,7H11V9H7A3,3 0 0,0 4,12A3,3 0 0,0 7,15H11V17H7A5,5 0 0,1 2,12A5,5 0 0,1 7,7M17,7A5,5 0 0,1 22,12H20A3,3 0 0,0 17,9H13V7H17M8,11H16V13H8V11M17,12H19V15H22V17H19V20H17V17H14V15H17V12Z\" /></svg>
                        Suivre une liste
                    </button>
                    <button class=\"flex w-1/3 text-nowrap items-center p-3 rounded-md border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                        <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>share-circle</title><path d=\"M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M14 16V13C10.39 13 7.81 14.43 6 17C6.72 13.33 8.94 9.73 14 9V6L19 11L14 16Z\" /></svg>
                        Partager une liste
                    </button>
                </div>

                <div class=\"relative w-full flex text-gray-700 font-medium\">
                    <select class=\"appearance-none w-full bg-white border border-gray-200 px-7 py-3 rounded-md shadow transition\">
                        <option>#1 - Ma liste custom (43 films & 12 séries)</option>
                        <option>#2 - Film aviations (14 films & 29 séries)</option>
                        <option>#3 - Film a voir avec les potos (14 films & 10 séries) - Liste de John Doe</option>
                    </select>
                    <div class=\"pointer-events-none absolute right-2 inset-y-0 flex items-center px-2\">
                        <svg class=\"fill-current h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>chevron-down-circle</title><path d=\"M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M6,10L12,16L18,10L16.6,8.6L12,13.2L7.4,8.6L6,10Z\" /></svg>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"mt-9\">
            <ul class=\"grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">

                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/18/07/02/17/25/3643090.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 1 <span class=\"opacity-40 text-xs\">(2001)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/00/02/53/35/affiche0.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 2 <span class=\"opacity-40 text-xs\">(2002)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/35/23/41/18378380.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 3 <span class=\"opacity-40 text-xs\">(2004)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/52/34/18450888.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 4 <span class=\"opacity-40 text-xs\">(2005)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/36/32/70/18778375.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 5 <span class=\"opacity-40 text-xs\">(2007)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/65/64/35/19116952.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 6 <span class=\"opacity-40 text-xs\">(2009)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/69/69/81/19590744.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 7 <span class=\"opacity-40 text-xs\">(2010)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/78/64/49/19762436.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 8 <span class=\"opacity-40 text-xs\">(2011)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/16/10/11/09/32/205295.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Les Animaux fantastiques <span class=\"opacity-40 text-xs\">(2016)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img4.acsta.net/c_310_420/pictures/18/10/10/11/16/4794693.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Les Animaux fantastiques : Les crimes de Grindelwald <span class=\"opacity-40 text-xs\">(2018)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/22/03/16/15/20/0170262.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Les Animaux Fantastiques : les Secrets de Dumbledore <span class=\"opacity-40 text-xs\">(2022)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
            </ul>
            <button class=\"flex flex-col items-center mt-9 w-full\">
                <div class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Charger + de films</span>
                </div>
            </button>
        </section>
    </main>
    ";
        // line 252
        yield from         $this->loadTemplate("parts/right-sidebar.html.twig", "movie/lists.html.twig", 252)->unwrap()->yield($context);
        // line 253
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
        return "movie/lists.html.twig";
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
        return array (  303 => 253,  301 => 252,  65 => 18,  63 => 17,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"Mazyar\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <meta name=\"author\" content=\"Mazyar\">
    <title>Streemi - Mes listes</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white\">
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
    {% include 'parts/left-menu.html.twig' %}
    <main class=\" flex-1 py-10  px-5 sm:px-10 \">

        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700 \" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\" />
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wide flex-1\">MMovie<span class=\"text-red-600\">.</span></div>

            <div class=\"relative items-center content-center flex ml-2\">
                    <span class=\"text-gray-400 absolute left-4 cursor-pointer\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"></path>
                        </svg>
                    </span>
                <input type=\"text\" class=\"text-xs ring-1 bg-transparent ring-gray-200 focus:ring-red-300 pl-10 pr-5 text-gray-600 py-3 rounded-full w-full outline-none focus:ring-1\" placeholder=\"Search ...\">
            </div>
        </header>

        <section>
            <h1 class=\"font-medium text-black text-lg\">Mes listes de <span class=\"font-bold text-red-600\">films</span> et <span class=\"font-bold text-red-600\">séries</span></h1>

            <div class=\"flex flex-col space-y-3 mt-9\">
                <div class=\"relative w-full flex space-x-3 text-gray-700 font-medium\">
                    <button class=\"flex w-1/3 text-nowrap items-center p-3 rounded-md border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                        <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                        Créer une liste
                    </button>
                    <button class=\"flex w-1/3 text-nowrap items-center p-3 rounded-md border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                        <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>link-plus</title><path d=\"M7,7H11V9H7A3,3 0 0,0 4,12A3,3 0 0,0 7,15H11V17H7A5,5 0 0,1 2,12A5,5 0 0,1 7,7M17,7A5,5 0 0,1 22,12H20A3,3 0 0,0 17,9H13V7H17M8,11H16V13H8V11M17,12H19V15H22V17H19V20H17V17H14V15H17V12Z\" /></svg>
                        Suivre une liste
                    </button>
                    <button class=\"flex w-1/3 text-nowrap items-center p-3 rounded-md border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                        <svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>share-circle</title><path d=\"M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M14 16V13C10.39 13 7.81 14.43 6 17C6.72 13.33 8.94 9.73 14 9V6L19 11L14 16Z\" /></svg>
                        Partager une liste
                    </button>
                </div>

                <div class=\"relative w-full flex text-gray-700 font-medium\">
                    <select class=\"appearance-none w-full bg-white border border-gray-200 px-7 py-3 rounded-md shadow transition\">
                        <option>#1 - Ma liste custom (43 films & 12 séries)</option>
                        <option>#2 - Film aviations (14 films & 29 séries)</option>
                        <option>#3 - Film a voir avec les potos (14 films & 10 séries) - Liste de John Doe</option>
                    </select>
                    <div class=\"pointer-events-none absolute right-2 inset-y-0 flex items-center px-2\">
                        <svg class=\"fill-current h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>chevron-down-circle</title><path d=\"M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M6,10L12,16L18,10L16.6,8.6L12,13.2L7.4,8.6L6,10Z\" /></svg>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"mt-9\">
            <ul class=\"grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">

                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/18/07/02/17/25/3643090.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 1 <span class=\"opacity-40 text-xs\">(2001)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/00/02/53/35/affiche0.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 2 <span class=\"opacity-40 text-xs\">(2002)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/35/23/41/18378380.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 3 <span class=\"opacity-40 text-xs\">(2004)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/52/34/18450888.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 4 <span class=\"opacity-40 text-xs\">(2005)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/36/32/70/18778375.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 5 <span class=\"opacity-40 text-xs\">(2007)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/65/64/35/19116952.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 6 <span class=\"opacity-40 text-xs\">(2009)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/69/69/81/19590744.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 7 <span class=\"opacity-40 text-xs\">(2010)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/78/64/49/19762436.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Harry Potter 8 <span class=\"opacity-40 text-xs\">(2011)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/16/10/11/09/32/205295.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Les Animaux fantastiques <span class=\"opacity-40 text-xs\">(2016)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img4.acsta.net/c_310_420/pictures/18/10/10/11/16/4794693.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Les Animaux fantastiques : Les crimes de Grindelwald <span class=\"opacity-40 text-xs\">(2018)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
                <li class=\"relative flex flex-col rounded-xl overflow-hidden border hover:scale-105 transition cursor-pointer hover:opacity-90 hover:shadow-lg\">
                    <a href=\"#\" class=\"p-2.5 bg-gray-800/90 rounded-lg text-white self-end hover:bg-red-600/80 absolute top-2 right-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 20 20\" fill=\"currentColor\" data-darkreader-inline-fill=\"\" style=\"--darkreader-inline-fill: currentColor;\">
                            <path fill-rule=\"evenodd\" d=\"M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z\" clip-rule=\"evenodd\"></path>
                        </svg>
                    </a>
                    <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/22/03/16/15/20/0170262.jpg\" class=\"h-80 object-cover\" alt=\"\">
                    <div class=\"w-full h-full bg-white px-3 py-3 flex items-center justify-between border-t-2 border-t-red-600\">
                        <span class=\"capitalize font-medium pr-2\">Les Animaux Fantastiques : les Secrets de Dumbledore <span class=\"opacity-40 text-xs\">(2022)</span></span>
                        <div class=\"flex space-x-2 items-center text-xs\">
                            <svg class=\"w-8 h-5\" xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"32\" viewBox=\"0 0 64 32\" version=\"1.1\"><g fill=\"#F5C518\"><rect x=\"0\" y=\"0\" width=\"100%\" height=\"100%\" rx=\"4\"></rect></g><g transform=\"translate(8.000000, 7.000000)\" fill=\"#000000\" fill-rule=\"nonzero\"><polygon points=\"0 18 5 18 5 0 0 0\"></polygon><path d=\"M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z\"></path><path d=\"M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z\"></path><path d=\"M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z\"></path></g></svg>
                            <span>7.4</span>
                        </div>
                    </div>
                </li>
            </ul>
            <button class=\"flex flex-col items-center mt-9 w-full\">
                <div class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Charger + de films</span>
                </div>
            </button>
        </section>
    </main>
    {% include 'parts/right-sidebar.html.twig' %}
</div>

</body>

</html>
", "movie/lists.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\movie\\lists.html.twig");
    }
}
