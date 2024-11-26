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

/* auth/confirm.html.twig */
class __TwigTemplate_590966f98606331c51bf6530c0b7d304 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/confirm.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Confirmation du compte</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white\">
<div class=\"flex min-h-screen\">
    ";
        // line 15
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "auth/confirm.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "    <main class=\"flex-1\">
        <header class=\" font-bold text-lg flex items-center md:hidden\">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">StrEEMI<span class=\"text-red-600\">.</span></div>
        </header>
        <section class=\"h-full relative\">
            <div style=\"background-image: url('https://blog.compose.fr/wp-content/uploads/2024/05/Marathon-Cinema.webp')\" class=\"bg-cover bg-no-repeat h-full before:bg-black/40 before:content-[''] before:top-0 before:left-0 before:right-0 before:absolute before:w-full before:h-full\">
                <div class=\"p-8 lg:w-1/2 mx-auto h-full flex items-center justify-center\">
                    <div class=\"bg-white rounded-lg p-8 relative w-full\">
                        <h1 class=\"text-center text-lg font-bold\">Confirmation du compte</h1>

                        <div class=\"flex items-center font-medium mt-8 bg-green-100 border border-black/10 rounded-lg px-8 py-4\">
                            Votre compte à bien été confirmé. Vous pouvez désormais vous connecter avec vos identifiants.
                        </div>

                        <div class=\"flex items-center justify-center mt-8\">
                            <a class=\"text-red-600 cursor-pointer transition hover:text-red-700 hover:scale-105\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_login");
        yield "\">
                                Vous pouvez vous connecter ici
                            </a>
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
        return "auth/confirm.html.twig";
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
        return array (  88 => 39,  63 => 16,  61 => 15,  45 => 1,);
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
    <title>Streemi - Confirmation du compte</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white\">
<div class=\"flex min-h-screen\">
    {% include 'parts/left-menu.html.twig' %}
    <main class=\"flex-1\">
        <header class=\" font-bold text-lg flex items-center md:hidden\">
                <span class=\"mr-6\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-7 text-gray-700\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h7\"/>
                      </svg>
                </span>
            <svg class=\"h-8 w-8 fill-red-600 shrink-0\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path d=\"M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z\"></path>
            </svg>
            <div class=\"tracking-wideflex-1\">StrEEMI<span class=\"text-red-600\">.</span></div>
        </header>
        <section class=\"h-full relative\">
            <div style=\"background-image: url('https://blog.compose.fr/wp-content/uploads/2024/05/Marathon-Cinema.webp')\" class=\"bg-cover bg-no-repeat h-full before:bg-black/40 before:content-[''] before:top-0 before:left-0 before:right-0 before:absolute before:w-full before:h-full\">
                <div class=\"p-8 lg:w-1/2 mx-auto h-full flex items-center justify-center\">
                    <div class=\"bg-white rounded-lg p-8 relative w-full\">
                        <h1 class=\"text-center text-lg font-bold\">Confirmation du compte</h1>

                        <div class=\"flex items-center font-medium mt-8 bg-green-100 border border-black/10 rounded-lg px-8 py-4\">
                            Votre compte à bien été confirmé. Vous pouvez désormais vous connecter avec vos identifiants.
                        </div>

                        <div class=\"flex items-center justify-center mt-8\">
                            <a class=\"text-red-600 cursor-pointer transition hover:text-red-700 hover:scale-105\" href=\"{{ path('page_login') }}\">
                                Vous pouvez vous connecter ici
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

</body>

</html>
", "auth/confirm.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\auth\\confirm.html.twig");
    }
}
