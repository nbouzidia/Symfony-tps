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

/* other/upload.html.twig */
class __TwigTemplate_798e6d704f7257c9beae1e289d95b19b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "other/upload.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"../../template-html/style/style.css\" rel=\"stylesheet\">
    <title>Streemi - Admin - Ajouter un film</title>
    <script src=\"https://cdn.tailwindcss.com\"></script>
</head>

<body class=\"font-montserrat text-sm bg-white \">
    <div class=\"flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200\">
        ";
        // line 15
        yield from         $this->loadTemplate("parts/left-menu.html.twig", "other/upload.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "        <main class=\" flex-1 py-10  px-5 sm:px-10 \">
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
                <h1 class=\"text-lg font-medium text-black mb-9\">Ajouter <span class=\"font-bold text-red-600\">des photos</span></h1>
                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_admin");
        yield "\" class=\"underline decoration-2 decoration-red-400 hover:text-red-600 inline-flex items-center\"><svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>arrow-left</title><path d=\"M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z\" /></svg> Revenir à l'administration</a>
            </section>
            <section class=\"mt-9\">
                <form class=\"mt-10 space-y-3\">
                    <div class=\" relative border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-100 transition\" id=\"dropzone\">
                        <label for=\"file-upload\" class=\"flex items-center justify-center flex-col p-12 cursor-pointer\">
                            <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>cloud-upload</title><path d=\"M11 20H6.5Q4.22 20 2.61 18.43 1 16.85 1 14.58 1 12.63 2.17 11.1 3.35 9.57 5.25 9.15 5.88 6.85 7.75 5.43 9.63 4 12 4 14.93 4 16.96 6.04 19 8.07 19 11 20.73 11.2 21.86 12.5 23 13.78 23 15.5 23 17.38 21.69 18.69 20.38 20 18.5 20H13V12.85L14.6 14.4L16 13L12 9L8 13L9.4 14.4L11 12.85Z\" /></svg>
                            <span class=\"mt-2 text-sm font-medium text-gray-900\">
                                <span class=\"relative cursor-pointer\">
                                    <span class=\"block text-center\">Glissez-déposez vos photos</span>
                                    ici <span class=\"text-red-600\"> ou sélectionnez</span>
                                    <span>des fichiers</span>
                                    <input id=\"file-upload\" multiple name=\"file-upload\" type=\"file\" class=\"sr-only\">
                                </span>
                            </span>
                            <span class=\"mt-1 text-xs text-gray-500\">
                                PNG, JPG, GIF jusqu'à 10MB
                            </span>
                        </label>
                    </div>
                    <ul data-upload-preview-list class=\"space-y-3\">
                        <li data-upload-preview>
                            <div class=\"rounded-md bg-gray-100 py-2 px-4\">
                                <div class=\"flex items-center justify-between\">
                                <span>
                                    <a href=\"//AAAA//\" target=\"_blank\" class=\"text-md pr-3 font-medium text-gray-600 underline decoration-2 decoration-red-600\">
                                        //BBBB//
                                    </a> <span class=\"text-sm opacity-70\">//CCCC//</span>
                                </span>
                                <button class=\"text-gray-600 p-2 rounded hover:bg-gray-300 transition\">
                                    <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>close</title><path d=\"M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z\" /></svg>
                                </button>
                            </div>
                            </div>
                        </li>
                    </ul>
                    <button type=\"submit\" class=\"mx-auto !mt-9 relative flex w-auto bg-red-600 flex-row p-3 text-lg items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                        <svg class=\"h-5 w-5 mr-3\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                        Ajouter les photos
                    </button>
                </form>
            </section>
            <section class=\"mt-9\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4\">

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1441974231531-c6227db76b6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1501854140801-50d01698950b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1505765050516-f72dcac9c60e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1426604966848-d7adac402bff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1419133203517-f3b3ed0ba2bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1498855926480-d98e83099315?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1502754400466-c87ff3039da7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8cml2ZXJ8ZW58MHwwfHx8MTY5NDA5OTg4Mnww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>


    <script>
        const dropzone = document.getElementById('dropzone');
        const previewList = document.querySelector('[data-upload-preview-list]');
        const previewHTMLTemplate = document.querySelector('[data-upload-preview]').innerHTML;
        previewList.innerHTML = '';
        const uploadedFiles = [];

        dropzone.addEventListener('dragover', e => {
            e.preventDefault();
            dropzone.classList.add('border-red-600');
        });

        dropzone.addEventListener('dragleave', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');
        });

        dropzone.addEventListener('drop', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');

            const files = e.dataTransfer.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        const input = document.getElementById('file-upload');

        input.addEventListener('change', e => {
            const files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        function displayPreview(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const container = document.createElement('li');
                const link = encodeURI(e.target.result);
                const name = file.name.length > 40 ? file.name.substring(0, 20) + ' [...] ' + file.name.substring(file.name.length - 20) : file.name;
                const size = file.size > 1024 * 1024 ? (file.size / (1024 * 1024)).toFixed(2) + ' MB' : (file.size / 1024).toFixed(2) + ' KB';

                container.innerHTML = previewHTMLTemplate
                    .replace(/\\/\\/AAAA\\/\\//g, link)
                    .replace(/\\/\\/BBBB\\/\\//g, name)
                    .replace(/\\/\\/CCCC\\/\\//g, size)
                ;

                previewList.appendChild(container);

                setTimeout(() => {
                    container.querySelector('button').addEventListener('click', e => {
                        e.preventDefault();
                        uploadedFiles.splice(uploadedFiles.indexOf(file), 1);
                        container.remove();
                    });

                    container.querySelector('a').addEventListener('click', e => {
                        e.preventDefault();
                        let w = window.open('about:blank');
                        setTimeout(function(){
                            w.document.write('<iframe src=\"' + link  + '\" style=\"border:0; top:0; left:0; bottom:0; right:0; width:100%; height:100%;\" allowfullscreen></iframe>');
                        }, 0);
                    });
                }, 100);

                uploadedFiles.push(file);

            };
            reader.readAsDataURL(file);
        }

        document.querySelectorAll('[data-copy]').forEach(btn => {
            btn.addEventListener('click', e => {
                const link = e.target.dataset.copy;
                navigator.clipboard.writeText(link);

                const toast = document.createElement('div');
                toast.classList.add('fixed', 'bottom-0', 'right-2', 'bg-red-600', 'text-white', 'px-4', 'py-2', 'rounded-tl-md', 'rounded-tr-md', 'shadow-md');
                toast.textContent = 'Lien copié';
                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.remove();
                }, 2000);
            });
        });

        document.querySelector('form').addEventListener('submit', e => {
            e.preventDefault();
            console.log(uploadedFiles);
        });

    </script>
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
        return "other/upload.html.twig";
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
        return array (  79 => 30,  63 => 16,  61 => 15,  45 => 1,);
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
    <title>Streemi - Admin - Ajouter un film</title>
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
                <h1 class=\"text-lg font-medium text-black mb-9\">Ajouter <span class=\"font-bold text-red-600\">des photos</span></h1>
                <a href=\"{{ path('page_admin') }}\" class=\"underline decoration-2 decoration-red-400 hover:text-red-600 inline-flex items-center\"><svg class=\"fill-current h-4 w-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>arrow-left</title><path d=\"M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z\" /></svg> Revenir à l'administration</a>
            </section>
            <section class=\"mt-9\">
                <form class=\"mt-10 space-y-3\">
                    <div class=\" relative border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-100 transition\" id=\"dropzone\">
                        <label for=\"file-upload\" class=\"flex items-center justify-center flex-col p-12 cursor-pointer\">
                            <svg class=\"h-12 w-12 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>cloud-upload</title><path d=\"M11 20H6.5Q4.22 20 2.61 18.43 1 16.85 1 14.58 1 12.63 2.17 11.1 3.35 9.57 5.25 9.15 5.88 6.85 7.75 5.43 9.63 4 12 4 14.93 4 16.96 6.04 19 8.07 19 11 20.73 11.2 21.86 12.5 23 13.78 23 15.5 23 17.38 21.69 18.69 20.38 20 18.5 20H13V12.85L14.6 14.4L16 13L12 9L8 13L9.4 14.4L11 12.85Z\" /></svg>
                            <span class=\"mt-2 text-sm font-medium text-gray-900\">
                                <span class=\"relative cursor-pointer\">
                                    <span class=\"block text-center\">Glissez-déposez vos photos</span>
                                    ici <span class=\"text-red-600\"> ou sélectionnez</span>
                                    <span>des fichiers</span>
                                    <input id=\"file-upload\" multiple name=\"file-upload\" type=\"file\" class=\"sr-only\">
                                </span>
                            </span>
                            <span class=\"mt-1 text-xs text-gray-500\">
                                PNG, JPG, GIF jusqu'à 10MB
                            </span>
                        </label>
                    </div>
                    <ul data-upload-preview-list class=\"space-y-3\">
                        <li data-upload-preview>
                            <div class=\"rounded-md bg-gray-100 py-2 px-4\">
                                <div class=\"flex items-center justify-between\">
                                <span>
                                    <a href=\"//AAAA//\" target=\"_blank\" class=\"text-md pr-3 font-medium text-gray-600 underline decoration-2 decoration-red-600\">
                                        //BBBB//
                                    </a> <span class=\"text-sm opacity-70\">//CCCC//</span>
                                </span>
                                <button class=\"text-gray-600 p-2 rounded hover:bg-gray-300 transition\">
                                    <svg class=\"h-5 w-5 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>close</title><path d=\"M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z\" /></svg>
                                </button>
                            </div>
                            </div>
                        </li>
                    </ul>
                    <button type=\"submit\" class=\"mx-auto !mt-9 relative flex w-auto bg-red-600 flex-row p-3 text-lg items-center justify-center rounded-lg overflow-hidden border cursor-pointer transition text-white hover:opacity-90 hover:scale-105\">
                        <svg class=\"h-5 w-5 mr-3\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><title>plus-circle</title><path d=\"M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z\"/></svg>
                        Ajouter les photos
                    </button>
                </form>
            </section>
            <section class=\"mt-9\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4\">

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1441974231531-c6227db76b6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1501854140801-50d01698950b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1505765050516-f72dcac9c60e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1426604966848-d7adac402bff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1419133203517-f3b3ed0ba2bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1498855926480-d98e83099315?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>

                    <div class=\"group cursor-pointer relative\">
                        <img src=\"https://images.unsplash.com/photo-1502754400466-c87ff3039da7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8cml2ZXJ8ZW58MHwwfHx8MTY5NDA5OTg4Mnww&ixlib=rb-4.0.3&q=80&w=1080\" alt=\"Image 1\" class=\"w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105\"/>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity space-x-2\">
                            <a href=\"#\" target=\"_blank\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Voir</a>
                            <button data-copy=\"#\" class=\"bg-white text-gray-800 px-3 py-1.5 rounded-lg text-sm hover:bg-gray-200 transition-colors\">Copier le lien</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>


    <script>
        const dropzone = document.getElementById('dropzone');
        const previewList = document.querySelector('[data-upload-preview-list]');
        const previewHTMLTemplate = document.querySelector('[data-upload-preview]').innerHTML;
        previewList.innerHTML = '';
        const uploadedFiles = [];

        dropzone.addEventListener('dragover', e => {
            e.preventDefault();
            dropzone.classList.add('border-red-600');
        });

        dropzone.addEventListener('dragleave', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');
        });

        dropzone.addEventListener('drop', e => {
            e.preventDefault();
            dropzone.classList.remove('border-red-600');

            const files = e.dataTransfer.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        const input = document.getElementById('file-upload');

        input.addEventListener('change', e => {
            const files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                displayPreview(files[i]);
            }
        });

        function displayPreview(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const container = document.createElement('li');
                const link = encodeURI(e.target.result);
                const name = file.name.length > 40 ? file.name.substring(0, 20) + ' [...] ' + file.name.substring(file.name.length - 20) : file.name;
                const size = file.size > 1024 * 1024 ? (file.size / (1024 * 1024)).toFixed(2) + ' MB' : (file.size / 1024).toFixed(2) + ' KB';

                container.innerHTML = previewHTMLTemplate
                    .replace(/\\/\\/AAAA\\/\\//g, link)
                    .replace(/\\/\\/BBBB\\/\\//g, name)
                    .replace(/\\/\\/CCCC\\/\\//g, size)
                ;

                previewList.appendChild(container);

                setTimeout(() => {
                    container.querySelector('button').addEventListener('click', e => {
                        e.preventDefault();
                        uploadedFiles.splice(uploadedFiles.indexOf(file), 1);
                        container.remove();
                    });

                    container.querySelector('a').addEventListener('click', e => {
                        e.preventDefault();
                        let w = window.open('about:blank');
                        setTimeout(function(){
                            w.document.write('<iframe src=\"' + link  + '\" style=\"border:0; top:0; left:0; bottom:0; right:0; width:100%; height:100%;\" allowfullscreen></iframe>');
                        }, 0);
                    });
                }, 100);

                uploadedFiles.push(file);

            };
            reader.readAsDataURL(file);
        }

        document.querySelectorAll('[data-copy]').forEach(btn => {
            btn.addEventListener('click', e => {
                const link = e.target.dataset.copy;
                navigator.clipboard.writeText(link);

                const toast = document.createElement('div');
                toast.classList.add('fixed', 'bottom-0', 'right-2', 'bg-red-600', 'text-white', 'px-4', 'py-2', 'rounded-tl-md', 'rounded-tr-md', 'shadow-md');
                toast.textContent = 'Lien copié';
                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.remove();
                }, 2000);
            });
        });

        document.querySelector('form').addEventListener('submit', e => {
            e.preventDefault();
            console.log(uploadedFiles);
        });

    </script>
</body>
</html>
", "other/upload.html.twig", "C:\\Users\\bouzi\\OneDrive\\Documents\\Ecole-ESGI\\Symfony\\cours-symfony-esgi-4A-IW1\\streemi\\templates\\other\\upload.html.twig");
    }
}
