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

/* parts/movies/horizontal-card-movie.html.twig */
class __TwigTemplate_75801df338340cdb3f69934eb56c6a82 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/movies/horizontal-card-movie.html.twig"));

        // line 1
        yield "<li class=\"flex space-x-3 transition cursor-pointer hover:bg-black/10 rounded\">
    <img src=\"https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg\" class=\"w-1/3 rounded-md\" alt=\"\">
    <div class=\"flex flex-col justify-between  \">
        <div class=\"flex flex-col space-y-1\">
            <span class=\"text-gray-700 font-semibold mt-2\">The Shawshank Redemption</span>
            <span class=\"text-xxs hidden xl:block\">Drama</span>
        </div>
        <div class=\"flex items-center\">
            <a href=\"#\" class=\"px-2 py-1 mb-2 text-white bg-red-600 hover:bg-red-700 rounded-lg text-xxs inline-block\">Reprendre à <span>1h12</span></a>
        </div>
    </div>
</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parts/movies/horizontal-card-movie.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<li class=\"flex space-x-3 transition cursor-pointer hover:bg-black/10 rounded\">
    <img src=\"https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg\" class=\"w-1/3 rounded-md\" alt=\"\">
    <div class=\"flex flex-col justify-between  \">
        <div class=\"flex flex-col space-y-1\">
            <span class=\"text-gray-700 font-semibold mt-2\">The Shawshank Redemption</span>
            <span class=\"text-xxs hidden xl:block\">Drama</span>
        </div>
        <div class=\"flex items-center\">
            <a href=\"#\" class=\"px-2 py-1 mb-2 text-white bg-red-600 hover:bg-red-700 rounded-lg text-xxs inline-block\">Reprendre à <span>1h12</span></a>
        </div>
    </div>
</li>
", "parts/movies/horizontal-card-movie.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\parts\\movies\\horizontal-card-movie.html.twig");
    }
}
