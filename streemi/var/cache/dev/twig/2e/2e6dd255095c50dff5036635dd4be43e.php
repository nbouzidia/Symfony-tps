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

/* parts/subscriptions/card_subscription.html.twig */
class __TwigTemplate_dc1836b27ca024ec9adf21017f7463ba extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parts/subscriptions/card_subscription.html.twig"));

        // line 1
        yield "<li class=\"relative flex\">
    <a href=\"\" class=\"border-4 border-red-600 rounded-lg py-4 px-7 transition hover:bg-black/5\">
        <div class=\"flex flex-row items-center justify-between\">
            <div class=\"flex flex-col items-start justify-center\">
                <h3 class=\"font-bold text-lg\">Abonnement 1 mois - HD</h3>
                <span class=\"font-medium text-gray-400 text-nowrap\">Le moins chère</span>
            </div>
            <span class=\"text-3xl font-bold\">3€</span>
        </div>
        <p class=\"flex items-start justify-between mt-5 mb-8 text-md pr-3\">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in iure officiis suscipit vel.
        </p>
        <div>
            <button class=\"border-transparent bg-red-600 px-4 py-3 text-md text-white rounded-md\">S'abonner</button>
        </div>
    </a>
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
        return "parts/subscriptions/card_subscription.html.twig";
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
        return new Source("<li class=\"relative flex\">
    <a href=\"\" class=\"border-4 border-red-600 rounded-lg py-4 px-7 transition hover:bg-black/5\">
        <div class=\"flex flex-row items-center justify-between\">
            <div class=\"flex flex-col items-start justify-center\">
                <h3 class=\"font-bold text-lg\">Abonnement 1 mois - HD</h3>
                <span class=\"font-medium text-gray-400 text-nowrap\">Le moins chère</span>
            </div>
            <span class=\"text-3xl font-bold\">3€</span>
        </div>
        <p class=\"flex items-start justify-between mt-5 mb-8 text-md pr-3\">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in iure officiis suscipit vel.
        </p>
        <div>
            <button class=\"border-transparent bg-red-600 px-4 py-3 text-md text-white rounded-md\">S'abonner</button>
        </div>
    </a>
</li>
", "parts/subscriptions/card_subscription.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\parts\\subscriptions\\card_subscription.html.twig");
    }
}
