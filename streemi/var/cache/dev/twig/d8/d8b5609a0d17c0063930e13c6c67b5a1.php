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

/* admin/admin_films.html.twig */
class __TwigTemplate_e08974144d841778169d522f142692d6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_films.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Admin - Gérer les films</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \">
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
    ";
        // line 15
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "admin/admin_films.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "    <main class=\" flex-1 py-10  px-5 sm:px-10 \">
        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
        </header>
        <section>
            <h1 class=\"text-lg font-medium text-black mb-9\">Administration
                <span class=\"font-bold text-red-600\">des films/séries</span></h1>
            <a class=\"flex flex-col items-center mt-9 w-full\" href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_admin_movies_add");
        yield "\">
                <div class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Ajouter un film/une série</span>
                </div>
            </a>
        </section>
        <section class=\"mt-9\">

            <div class=\"flex flex-col\">
                <div class=\" overflow-x-auto pb-4\">
                    <div class=\"min-w-full inline-block align-middle\">
                        <div class=\"mb-9\">
                            <label class=\"mx-auto mt-8 relative bg-white flex flex-col md:flex-row items-center justify-center border border-gray-300 py-2 px-2 rounded-xl gap-2\" for=\"search-bar\">
                                <input id=\"search-bar\" placeholder=\"Nom\" name=\"q\" class=\"px-3 py-1 w-full rounded-md flex-1 outline-none bg-white\" required=\"\">
                                <button type=\"submit\" class=\"w-full md:w-auto px-3 py-1.5 bg-red-600 border-red-600 hover:bg-red-700 text-white fill-white duration-100 border border-gray-300 overflow-hidden relative rounded-lg text-md transition\">
                                    <div class=\"flex items-center transition-all opacity-1\">
                                        <span class=\"text-sm font-semibold whitespace-nowrap truncate mx-auto\">
                                            Rechercher
                                        </span>
                                    </div>
                                </button>
                            </label>
                        </div>

                        <div class=\"overflow-hidden  border rounded-lg border-gray-300\">
                            <table class=\"table-auto min-w-full rounded-xl\">
                                <thead>
                                <tr class=\"bg-gray-50\">
                                    <th class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> ID</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize min-w-[350px]\"> Nom</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Date de sortie</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Type</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Actions</th>
                                </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-300 \">
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/00/02/53/35/affiche0.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2001</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/35/23/41/18378380.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 2</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2002</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://www.ecranlarge.com/content/uploads/2019/11/fdi15gtvbtw5sbv5qenqecrxwkj-847.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Psych, Enquêteur malgrés lui</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2006</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-purple-50 rounded-full flex justify-center w-20 items-center gap-1 text-purple-600\">
                                            <span class=\"font-medium text-xs \">Série</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/52/34/18450888.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 3</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2004</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>

                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/pictures/19/05/22/16/28/2822061.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Mentalist</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2008</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-purple-50 rounded-full flex justify-center w-20 items-center gap-1 text-purple-600\">
                                            <span class=\"font-medium text-xs \">Série</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>

                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/36/32/70/18778375.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 4</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2005</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/65/64/35/19116952.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 5</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2007</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/69/69/81/19590744.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 6</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2009</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/78/64/49/19762436.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 7</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2010</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/16/10/11/09/32/205295.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Les animaux fantastiques 1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2011</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img4.acsta.net/c_310_420/pictures/18/10/10/11/16/4794693.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Les animaux fantastiques 2</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2016</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/22/03/16/15/20/0170262.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Les animaux fantastiques 3</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2018</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class=\"flex justify-center items-center mt-9\">
                            <nav class=\"flex items-center justify-between\">
                                <div class=\"flex-1 items-center grid grid-cols-3\">
                                    <div class=\"flex items-center\">
                                        <div class=\"pl-2 text-sm font-medium\">
                                            Affichage de <span class=\"text-red-600\">10</span> éléments sur <span class=\"text-red-600\">40</span>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-center\">
                                        <div class=\"flex items-center space-x-2\">
                                            <label>
                                                <select class=\"h-8 text-sm pr-8 leading-none transition duration-75 border-gray-300 rounded-lg shadow-sm outline-none focus:border-red-500 focus:ring-1 focus:ring-inset focus:ring-red-500\">
                                                    <option value=\"5\">5</option>
                                                    <option value=\"10\">10</option>
                                                    <option value=\"25\">25</option>
                                                    <option value=\"50\">50</option>
                                                    <option value=\"-1\">All</option>
                                                </select>
                                                <span class=\"text-sm font-medium\">per page</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-end\">
                                        <div class=\"py-3 border rounded-lg\">
                                            <ol class=\"flex items-center text-sm text-gray-500 divide-x divide-gray-300\">
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Previous\" rel=\"prev\">
                                                        <svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>1</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none transition text-red-600 filament-tables-pagination-item-active focus:underline bg-red-500/10 ring-2 ring-red-500\"><span>2</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>3</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>4</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>5</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>6</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>...</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>9</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>10</span></button></li>
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Next\" rel=\"next\">
                                                        <svg class=\"w-5 h-5 rtl:scale-x-[-1]\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
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
        return "admin/admin_films.html.twig";
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
        return array (  80 => 31,  63 => 16,  61 => 15,  45 => 1,);
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
    <title>Streemi - Admin - Gérer les films</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \">
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
    {% include 'parts/left-menu.html.twig' %}
    <main class=\" flex-1 py-10  px-5 sm:px-10 \">
        <header class=\" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 \">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">MMovie<span class=\"text-red-600\">.</span></div>
        </header>
        <section>
            <h1 class=\"text-lg font-medium text-black mb-9\">Administration
                <span class=\"font-bold text-red-600\">des films/séries</span></h1>
            <a class=\"flex flex-col items-center mt-9 w-full\" href=\"{{ path('page_admin_movies_add') }}\">
                <div class=\"relative flex w-full bg-red-600 flex-row p-3 items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition hover:bg-red-700 text-white\">
                    <span class=\"font-bold mr-2\">
                        <svg class=\"h-6 w-6\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                    </span>
                    <span class=\"capitalize font-medium text-md\">Ajouter un film/une série</span>
                </div>
            </a>
        </section>
        <section class=\"mt-9\">

            <div class=\"flex flex-col\">
                <div class=\" overflow-x-auto pb-4\">
                    <div class=\"min-w-full inline-block align-middle\">
                        <div class=\"mb-9\">
                            <label class=\"mx-auto mt-8 relative bg-white flex flex-col md:flex-row items-center justify-center border border-gray-300 py-2 px-2 rounded-xl gap-2\" for=\"search-bar\">
                                <input id=\"search-bar\" placeholder=\"Nom\" name=\"q\" class=\"px-3 py-1 w-full rounded-md flex-1 outline-none bg-white\" required=\"\">
                                <button type=\"submit\" class=\"w-full md:w-auto px-3 py-1.5 bg-red-600 border-red-600 hover:bg-red-700 text-white fill-white duration-100 border border-gray-300 overflow-hidden relative rounded-lg text-md transition\">
                                    <div class=\"flex items-center transition-all opacity-1\">
                                        <span class=\"text-sm font-semibold whitespace-nowrap truncate mx-auto\">
                                            Rechercher
                                        </span>
                                    </div>
                                </button>
                            </label>
                        </div>

                        <div class=\"overflow-hidden  border rounded-lg border-gray-300\">
                            <table class=\"table-auto min-w-full rounded-xl\">
                                <thead>
                                <tr class=\"bg-gray-50\">
                                    <th class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> ID</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize min-w-[350px]\"> Nom</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Date de sortie</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Type</th>
                                    <th scope=\"col\" class=\"p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize\"> Actions</th>
                                </tr>
                                </thead>
                                <tbody class=\"divide-y divide-gray-300 \">
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/00/02/53/35/affiche0.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2001</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/35/23/41/18378380.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 2</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2002</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://www.ecranlarge.com/content/uploads/2019/11/fdi15gtvbtw5sbv5qenqecrxwkj-847.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Psych, Enquêteur malgrés lui</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2006</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-purple-50 rounded-full flex justify-center w-20 items-center gap-1 text-purple-600\">
                                            <span class=\"font-medium text-xs \">Série</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/52/34/18450888.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 3</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2004</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>

                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/pictures/19/05/22/16/28/2822061.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Mentalist</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2008</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-purple-50 rounded-full flex justify-center w-20 items-center gap-1 text-purple-600\">
                                            <span class=\"font-medium text-xs \">Série</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>

                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/36/32/70/18778375.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 4</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2005</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/65/64/35/19116952.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 5</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2007</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/69/69/81/19590744.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 6</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2009</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/78/64/49/19762436.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Harry Potter 7</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2010</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/16/10/11/09/32/205295.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Les animaux fantastiques 1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2011</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img4.acsta.net/c_310_420/pictures/18/10/10/11/16/4794693.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Les animaux fantastiques 2</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2016</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr class=\"bg-white transition-all duration-500 hover:bg-gray-50\">
                                    <td class=\"\">
                                        <div class=\"flex items-center py-5 px-5 \">
                                            <input type=\"checkbox\" value=\"\" class=\"w-5 h-5 appearance-none border border-gray-300  rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100\">
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\"> 20010510</td>
                                    <td class=\" px-5 py-3\">
                                        <div class=\"w-48 flex items-center gap-3\">
                                            <img src=\"https://fr.web.img6.acsta.net/c_310_420/pictures/22/03/16/15/20/0170262.jpg\" class=\"w-16\" alt=\"\">
                                            <div class=\"data\">
                                                <p class=\"font-normal text-sm text-gray-900\">Les animaux fantastiques 3</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">2018</td>
                                    <td class=\"p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900\">
                                        <div class=\"py-1.5 px-2.5 bg-blue-50 rounded-full flex justify-center w-20 items-center gap-1 text-blue-600\">
                                            <span class=\"font-medium text-xs \">Film</span>
                                        </div>
                                    </td>
                                    <td class=\"flex p-5 items-center gap-0.5\">
                                        <button class=\"p-2 rounded-lg transition text-orange-400 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>pencil</title>
                                                <path d=\"M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z\"/>
                                            </svg>
                                        </button>
                                        <button class=\"p-2  rounded-lg transition text-red-600 flex item-center hover:bg-black/10\">
                                            <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                                <title>delete</title>
                                                <path d=\"M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z\"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class=\"flex justify-center items-center mt-9\">
                            <nav class=\"flex items-center justify-between\">
                                <div class=\"flex-1 items-center grid grid-cols-3\">
                                    <div class=\"flex items-center\">
                                        <div class=\"pl-2 text-sm font-medium\">
                                            Affichage de <span class=\"text-red-600\">10</span> éléments sur <span class=\"text-red-600\">40</span>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-center\">
                                        <div class=\"flex items-center space-x-2\">
                                            <label>
                                                <select class=\"h-8 text-sm pr-8 leading-none transition duration-75 border-gray-300 rounded-lg shadow-sm outline-none focus:border-red-500 focus:ring-1 focus:ring-inset focus:ring-red-500\">
                                                    <option value=\"5\">5</option>
                                                    <option value=\"10\">10</option>
                                                    <option value=\"25\">25</option>
                                                    <option value=\"50\">50</option>
                                                    <option value=\"-1\">All</option>
                                                </select>
                                                <span class=\"text-sm font-medium\">per page</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-end\">
                                        <div class=\"py-3 border rounded-lg\">
                                            <ol class=\"flex items-center text-sm text-gray-500 divide-x divide-gray-300\">
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Previous\" rel=\"prev\">
                                                        <svg class=\"w-5 h-5\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>1</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none transition text-red-600 filament-tables-pagination-item-active focus:underline bg-red-500/10 ring-2 ring-red-500\"><span>2</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>3</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>4</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>5</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>6</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>...</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>9</span></button></li>
                                                <li><button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 focus:text-red-600 transition\"><span>10</span></button></li>
                                                <li>
                                                    <button type=\"button\" class=\"relative flex items-center justify-center font-medium min-w-[2rem] px-3 h-12 -my-3 rounded-md outline-none hover:bg-gray-500/5 focus:bg-red-500/10 focus:ring-2 focus:ring-red-500 transition text-red-600\" aria-label=\"Next\" rel=\"next\">
                                                        <svg class=\"w-5 h-5 rtl:scale-x-[-1]\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                                            <path fill-rule=\"evenodd\" d=\"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z\" clip-rule=\"evenodd\"></path>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
</div>

</body>

</html>
", "admin/admin_films.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\admin\\admin_films.html.twig");
    }
}