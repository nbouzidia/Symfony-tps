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

/* admin/admin.html.twig */
class __TwigTemplate_a0070d657bd893f92f73b46ab59d26af extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Admin</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \" >
<div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
    ";
        // line 15
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "admin/admin.html.twig", 15)->unwrap()->yield($context);
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
            <h1 class=\"text-lg font-medium text-black mb-9\"><span class=\"font-bold text-red-600\"></span>Administration</h1>

            <div class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_admin_movies");
        yield "\" class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>movie-open</title><path d=\"M20.84 2.18L16.91 2.96L19.65 6.5L21.62 6.1L20.84 2.18M13.97 3.54L12 3.93L14.75 7.46L16.71 7.07L13.97 3.54M9.07 4.5L7.1 4.91L9.85 8.44L11.81 8.05L9.07 4.5M4.16 5.5L3.18 5.69A2 2 0 0 0 1.61 8.04L2 10L6.9 9.03L4.16 5.5M2 10V20C2 21.11 2.9 22 4 22H20C21.11 22 22 21.11 22 20V10H2Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Films / Séries</span>
                </a>
                <a class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>list-box</title><path d=\"M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3M7 7H9V9H7V7M7 11H9V13H7V11M7 15H9V17H7V15M17 17H11V15H17V17M17 13H11V11H17V13M17 9H11V7H17V9Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl\">Catégories</span>
                </a>
                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_admin_users");
        yield "\" class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>account-group</title><path d=\"M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Utilisateurs</span>
                </a>
                <a class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>comment-text-multiple</title><path d=\"M3,15H1V3A2,2 0 0,1 3,1H19V3H3V15M12,23A1,1 0 0,1 11,22V19H7A2,2 0 0,1 5,17V7A2,2 0 0,1 7,5H21A2,2 0 0,1 23,7V17A2,2 0 0,1 21,19H16.9L13.2,22.71C13,22.89 12.76,23 12.5,23H12M9,9V11H19V9H9M9,13V15H17V13H9Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Commentaires</span>
                </a>
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_upload");
        yield "\" class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>image-multiple</title><path d=\"M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Photos</span>
                </a>
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
        return "admin/admin.html.twig";
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
        return array (  111 => 56,  96 => 44,  81 => 32,  63 => 16,  61 => 15,  45 => 1,);
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
    <title>Streemi - Admin</title>
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
            <h1 class=\"text-lg font-medium text-black mb-9\"><span class=\"font-bold text-red-600\"></span>Administration</h1>

            <div class=\"mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5\">
                <a href=\"{{ path('page_admin_movies') }}\" class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>movie-open</title><path d=\"M20.84 2.18L16.91 2.96L19.65 6.5L21.62 6.1L20.84 2.18M13.97 3.54L12 3.93L14.75 7.46L16.71 7.07L13.97 3.54M9.07 4.5L7.1 4.91L9.85 8.44L11.81 8.05L9.07 4.5M4.16 5.5L3.18 5.69A2 2 0 0 0 1.61 8.04L2 10L6.9 9.03L4.16 5.5M2 10V20C2 21.11 2.9 22 4 22H20C21.11 22 22 21.11 22 20V10H2Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Films / Séries</span>
                </a>
                <a class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>list-box</title><path d=\"M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3M7 7H9V9H7V7M7 11H9V13H7V11M7 15H9V17H7V15M17 17H11V15H17V17M17 13H11V11H17V13M17 9H11V7H17V9Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl\">Catégories</span>
                </a>
                <a href=\"{{ path('page_admin_users') }}\" class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>account-group</title><path d=\"M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Utilisateurs</span>
                </a>
                <a class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>comment-text-multiple</title><path d=\"M3,15H1V3A2,2 0 0,1 3,1H19V3H3V15M12,23A1,1 0 0,1 11,22V19H7A2,2 0 0,1 5,17V7A2,2 0 0,1 7,5H21A2,2 0 0,1 23,7V17A2,2 0 0,1 21,19H16.9L13.2,22.71C13,22.89 12.76,23 12.5,23H12M9,9V11H19V9H9M9,13V15H17V13H9Z\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Commentaires</span>
                </a>
                <a href=\"{{ path('page_upload') }}\" class=\"relative flex flex-col items-center justify-center rounded-xl overflow-hidden aspect-square border hover:scale-105 cursor-pointer transition hover:bg-gray-100\">
                    <span class=\"text-red-600 font-bold mb-4\">
                        <svg class=\"h-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>image-multiple</title><path d=\"M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6\" /></svg>
                    </span>
                    <span class=\"capitalize font-medium text-3xl truncate\">Photos</span>
                </a>
            </div>
        </section>
    </main>
</div>

</body>

</html>
", "admin/admin.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\admin\\admin.html.twig");
    }
}
