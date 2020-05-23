<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* panel/index.html.twig */
class __TwigTemplate_4c0c04308c1f6efb675458543edd7d55f2c667ceba5c5ba0e0156c2aa964de51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<body class=\"bg-dark\">
    <main class=\"container-fluid\">
        ";
        // line 11
        echo "        <header class=\"row justify-content-center\">
            <div class=\"container mt-5\">
                <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                    <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                    <nav class=\"navbar-nav col-sm-4 ml-2\">
                        <input class=\"form-control\" type=\"search\" id=\"buscar\" placeholder=\"Busca un archivo\">
                    </nav>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/nuevo\">Archivo</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/perfil\">Perfil</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/logout\">Salir</a>
                            </li>
                        </ul>
                    </div>
                    <button class=\"navbar-toggler ml-auto\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                </nav>
            </div>
        </header>
       ";
        // line 41
        echo "        <div class=\"container text-white menu-lateral\">
            <h6>
                <svg class=\"bi bi-list-task mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2 2.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5V3a.5.5 0 00-.5-.5H2zM3 3H2v1h1V3z\" clip-rule=\"evenodd\"/>
                    <path d=\"M5 3.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM5.5 7a.5.5 0 000 1h9a.5.5 0 000-1h-9zm0 4a.5.5 0 000 1h9a.5.5 0 000-1h-9z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1.5 7a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5H2zm1 .5H2v1h1v-1z\" clip-rule=\"evenodd\"/>
                </svg>
                Almacenamiento
           </h6>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 51
            echo "                ";
            $context["total"] = 5242880;
            // line 52
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 52);
            // line 53
            echo "                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 53, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })())) * 100);
            // line 54
            echo "                ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 54, $this->source); })()) / 1024), 1)) {
                // line 55
                echo "                ";
                $context["unidad"] = "KB";
                // line 56
                echo "                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>";
                // line 59
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 59, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 59, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>

                ";
            } elseif ((0 <= twig_compare((            // line 61
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 61, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 61, $this->source); })()) / 1024), 1023))) {
                // line 62
                echo "                ";
                $context["unidad"] = "MB";
                // line 63
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 63) / 1024);
                // line 64
                echo "                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>";
                // line 67
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 67, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 67, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } else {
                // line 69
                echo "                    ";
                $context["unidad"] = "GB";
                // line 70
                echo "                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 70) / 1048576);
                // line 71
                echo "                    ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 71, $this->source); })()), 4.5)) {
                    // line 72
                    echo "                        <div class=\"progress\" style=\"height: 2px;width: 50%\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 73
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 73, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 73, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p>";
                    // line 75
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 75, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                } else {
                    // line 77
                    echo "                <div class=\"progress\" style=\"height: 2px;width: 50%\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 78, $this->source); })()), "html", null, true);
                    echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 78, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 80, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 80, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                }
                // line 82
                echo "                ";
            }
            // line 83
            echo "                <h6 data-toggle=\"modal\" data-target=\"#papelera\" title=\"Papelera\" id=\"papelera_archivos\">

                    <svg class=\"bi bi-trash mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                    </svg>
                    Papelera
                </h6>
            <a ";
            // line 91
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 91, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 91, $this->source); })()))) {
                echo "class=\"text-white text-decoration-none disabled\"";
            }
            echo " href=\"nuevo\"class=\"text-white text-decoration-none\">
                <svg class=\"bi bi-file-earmark-plus mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Nuevo archivo
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </div>
        ";
        // line 101
        echo "        <div class=\"container bg-dark mt-3\">
            <div class=\"row\" >
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 104
            echo "                    ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 104);
            // line 105
            echo "                    ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 105, $this->source); })()), "N")) {
                // line 106
                echo "                <div class=\"col-md-4 mt-3 mb-3\">
                    ";
                // line 107
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 107);
                // line 108
                echo "                    <div class=\"card\">
                        ";
                // line 109
                $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 109);
                // line 110
                echo "                        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 110, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 110, $this->source); })()), "html", null, true);
                echo "\">
                        <div class=\"card-body\">
                            ";
                // line 112
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 112)), 30)) {
                    // line 113
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 113), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 114
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    echo "                                <p class=\"card-title\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 115), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 115), 0, 30) . "..."), "html", null, true);
                    echo " </p>
                            ";
                } else {
                    // line 117
                    echo "                                <p class=\"card-title\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 117), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 117), "html", null, true);
                    echo " </p>
                            ";
                }
                // line 119
                echo "
                            ";
                // line 120
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 120);
                // line 121
                echo "                            ";
                if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 121, $this->source); })()) / 1024), 1)) {
                    // line 122
                    echo "                                ";
                    $context["unidad"] = "KB";
                    // line 123
                    echo "                                <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 123, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 123, $this->source); })()), "html", null, true);
                    echo "</p>
                            ";
                } elseif ((0 <= twig_compare((                // line 124
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 124, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 124, $this->source); })()) / 1024), 1023))) {
                    // line 125
                    echo "                                ";
                    $context["unidad"] = "MB";
                    // line 126
                    echo "                                ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 126, $this->source); })()) / 1024);
                    // line 127
                    echo "                                <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 127, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 127, $this->source); })()), "html", null, true);
                    echo "</p>
                            ";
                } else {
                    // line 129
                    echo "                                ";
                    $context["unidad"] = "GB";
                    // line 130
                    echo "                                ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 130, $this->source); })()) / 1048576);
                    // line 131
                    echo "                                <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 131, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 131, $this->source); })()), "html", null, true);
                    echo "</p>
                            ";
                }
                // line 133
                echo "                            <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 133), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 133), "H:i"), "html", null, true);
                echo "</p>
                            <p class=\"card-text text-center\">
                                <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#editar\" title=\"Editar\">
                                    <svg class=\"bi bi-pencil\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </button>
                                <a class=\"btn bg-transparent btn-md\" href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), "username", [], "any", false, false, false, 141)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 141))), "html", null, true);
                echo "\" download=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 141), "html", null, true);
                echo "\" title=\"Descargar\">
                                    <svg class=\"bi bi-download\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                ";
                // line 148
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 148);
                // line 149
                echo "                                ";
                if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 149, $this->source); })()), 25600)) {
                    // line 150
                    echo "                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#compartir\" title=\"Compartir\">
                                    <svg class=\"bi bi-reply\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                    </svg>
                                </a>
                                ";
                }
                // line 156
                echo "                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar\" title=\"Mover a la papelera\">
                                    <svg class=\"bi bi-trash\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                ";
                // line 162
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 162);
                // line 163
                echo "                                ";
                if (-1 === twig_compare((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 163, $this->source); })()), 32768)) {
                    // line 164
                    echo "                                    <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#analizar\" title=\"Analizar\">
                                        <svg class=\"bi bi-file-earmark-break\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 00-2 2v6h1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-1H2v1a2 2 0 002 2h8a2 2 0 002-2v-1zM0 10.5a.5.5 0 01.5-.5h15a.5.5 0 010 1H.5a.5.5 0 01-.5-.5z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                    </button>
                                ";
                }
                // line 170
                echo "                                ";
                $context["comprimido"] = [0 => "cbr", 1 => "jar", 2 => "pit", 3 => "rar", 4 => "jar", 5 => "tgz", 6 => "dl_", 7 => "bz2", 8 => "cbz", 9 => "war", 10 => "zip", 11 => "z01"];
                // line 171
                echo "                                ";
                $context["ext_archivo"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 171),  -3, 3);
                // line 172
                echo "                                ";
                if (twig_in_filter((isset($context["ext_archivo"]) || array_key_exists("ext_archivo", $context) ? $context["ext_archivo"] : (function () { throw new RuntimeError('Variable "ext_archivo" does not exist.', 172, $this->source); })()), (isset($context["comprimido"]) || array_key_exists("comprimido", $context) ? $context["comprimido"] : (function () { throw new RuntimeError('Variable "comprimido" does not exist.', 172, $this->source); })()))) {
                    // line 173
                    echo "                                ";
                    // line 174
                    echo "                                ";
                } else {
                    // line 175
                    echo "                                    <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#comprimir\" title=\"Comprimir\">
                                        <svg class=\"bi bi-file-earmark-zip\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z\"/>
                                            <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.11 0l-.929-.62a1 1 0 01-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 01-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 017 9.438V8.5z\" clip-rule=\"evenodd\"/>
                                            <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                        </svg>
                                    </button>
                                ";
                }
                // line 184
                echo "                                <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 184, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 184, $this->source); })()), "html", null, true);
                echo "\">
                            </p>
                        </div>
                    </div>
                </div>
                    ";
            }
            // line 190
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "            </div>

            ";
        // line 194
        echo "            <div class=\"navigation\">
                ";
        // line 195
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 195, $this->source); })()));
        echo "
            </div>

            ";
        // line 199
        echo "            <div class=\"container-fluid bg-light fixed-bottom text-center menu-responsive\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-12 p-2\">
                        <a href=\"#\" class=\"icono\">
                            <svg class=\"bi bi-house-door mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                        <a href=\"/nuevo\" class=\"icono\">
                            <svg class=\"bi bi-plus-circle mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                        <a href=\"/perfil\" class=\"icono\">
                            <svg class=\"bi bi-people-circle mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                                <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                        <a href=\"/logout\" class=\"icono\">
                            <svg class=\"bi bi-box-arrow-in-right mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 234
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "session", [], "any", false, false, false, 234), "flashbag", [], "any", false, false, false, 234), "get", [0 => "exito"], "method", false, false, false, 234));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 235
            echo "                <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 236
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "
            ";
        // line 244
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "session", [], "any", false, false, false, 244), "flashbag", [], "any", false, false, false, 244), "get", [0 => "compartido"], "method", false, false, false, 244));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 245
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 246
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "
            ";
        // line 254
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "session", [], "any", false, false, false, 254), "flashbag", [], "any", false, false, false, 254), "get", [0 => "delete"], "method", false, false, false, 254));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 255
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 256
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "
            ";
        // line 264
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "session", [], "any", false, false, false, 264), "flashbag", [], "any", false, false, false, 264), "get", [0 => "error_zip"], "method", false, false, false, 264));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 265
            echo "                <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
                    <svg class=\"bi bi-file-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M6.5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.109 0l-.93-.62a1 1 0 01-.415-1.074l.4-1.599V8.5zm2 0h-1v.938a1 1 0 01-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 01-.03-.243V8.5z\" clip-rule=\"evenodd\"/>
                        <path d=\"M7.5 2H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5V6z\"/>
                    </svg>
                    ";
            // line 271
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "
            ";
        // line 279
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 279, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 280
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 280);
            // line 281
            echo "                ";
            if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 281, $this->source); })()), 4718592)) {
                // line 282
                echo "                <div class=\"alert alert-secondary alert-dismissible mx-auto w-50 show fade\">
                    <svg class=\"bi bi-archive-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z\" clip-rule=\"evenodd\"/>
                    </svg> &nbsp;
                    Queda poco espacio de almacenamiento
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
            }
            // line 292
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "        </div>
    </main>

    ";
        // line 297
        echo "    <section class=\"modal fade\" id=\"editar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Editar archivo</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Nombre</label>
                            <input type=\"text\" id=\"input_nombre\" class=\"form-control\" required data-toggle=\"tooltip\" title=\"Nombre del archivo\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"editar_nombre\">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 320
        echo "    <section class=\"modal fade\" id=\"compartir\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Compartir archivo</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Compartir con:</label>
                            <input type=\"email\" id=\"compartir_nombre\" class=\"form-control\" value=\"";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331), "email", [], "any", false, false, false, 331), "html", null, true);
        echo "\" required data-toggle=\"tooltip\" title=\"Correo de destino\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"compartir_archivo\">Compartir</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 343
        echo "    <section class=\"modal bg-transparent border-0\" id=\"escaneando\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-3\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-9\">
                            <h5 class=\"text-light text-center\">Buscando malware</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 363
        echo "    <section class=\"modal bg-transparent border-0\" id=\"redirigiendo\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-3\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-10\">
                            <h5 class=\"text-light text-center\">Redirigiendo a VirusTotal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 383
        echo "    <section class=\"modal fade\" id=\"analizar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Analizar archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_analizar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"analizar_nombre\">Analizar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 405
        echo "    <section class=\"modal fade\" id=\"borrar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Mover a la papelera</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_borrar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"eliminar_nombre\">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 427
        echo "    <section class=\"modal fade\" id=\"comprimir\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Comprimir archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_comprimir\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"comprimir_nombre\">Comprimir</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"cancelar\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    ";
        // line 450
        echo "        <section class=\"modal fade\" id=\"papelera\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h6 class=\"modal-title\">Archivos eliminados</h6>
                        <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 458
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 458, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 459
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 459);
            // line 460
            echo "                            ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 460, $this->source); })()), "S")) {
                // line 461
                echo "                                <div class=\"col-md-12 mt-3 mb-3\">
                                    ";
                // line 462
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 462);
                // line 463
                echo "                                    <div class=\"card\">
                                        ";
                // line 464
                $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 464);
                // line 465
                echo "                                        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 465, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 465, $this->source); })()), "html", null, true);
                echo "\">
                                        <div class=\"card-body\">
                                            ";
                // line 467
                if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 467)), 30)) {
                    // line 468
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 468), 0, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 469
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 470
                    echo "                                                <p class=\"card-title\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 470), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 470), 0, 30) . "..."), "html", null, true);
                    echo " </p>
                                            ";
                } else {
                    // line 472
                    echo "                                                <p class=\"card-title\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 472), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 472), "html", null, true);
                    echo " </p>
                                            ";
                }
                // line 474
                echo "
                                            ";
                // line 475
                $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 475);
                // line 476
                echo "                                            ";
                if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 476, $this->source); })()) / 1024), 1)) {
                    // line 477
                    echo "                                                ";
                    $context["unidad"] = "KB";
                    // line 478
                    echo "                                                <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 478, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 478, $this->source); })()), "html", null, true);
                    echo "</p>
                                            ";
                } elseif ((0 <= twig_compare((                // line 479
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 479, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 479, $this->source); })()) / 1024), 1023))) {
                    // line 480
                    echo "                                                ";
                    $context["unidad"] = "MB";
                    // line 481
                    echo "                                                ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 481, $this->source); })()) / 1024);
                    // line 482
                    echo "                                                <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 482, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 482, $this->source); })()), "html", null, true);
                    echo "</p>
                                            ";
                } else {
                    // line 484
                    echo "                                                ";
                    $context["unidad"] = "GB";
                    // line 485
                    echo "                                                ";
                    $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 485, $this->source); })()) / 1048576);
                    // line 486
                    echo "                                                <p class=\"card-subtitle\">";
                    echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 486, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 486, $this->source); })()), "html", null, true);
                    echo "</p>
                                            ";
                }
                // line 488
                echo "                                            <p class=\"card-text text-muted\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 488), "d-m-Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 488), "H:i"), "html", null, true);
                echo "</p>
                                            <p class=\"card-text text-center\">
                                                <button class=\"btn bg-transparent btn-md\" title=\"Restaurar\" data-toggle=\"modal\" data-target=\"#restaurar\">
                                                    <svg class=\"bi bi-arrow-counterclockwise\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path fill-rule=\"evenodd\" d=\"M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z\" clip-rule=\"evenodd\"/>
                                                        <path fill-rule=\"evenodd\" d=\"M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z\" clip-rule=\"evenodd\"/>
                                                    </svg>
                                                </button>
                                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar_definitivo\" title=\"Eliminar definitivamente\">
                                                    <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                                    </svg>
                                                </a>
                                                <input type=\"hidden\" name=\"";
                // line 502
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 502, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 502, $this->source); })()), "html", null, true);
                echo "\">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 508
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        echo "                    </div>
                    <div class=\"modal-footer\">
                        ";
        // line 511
        $context["contador"] = 0;
        // line 512
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 512, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 513
            echo "                            ";
            $context["borrado"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "borrado", [], "any", false, false, false, 513);
            // line 514
            echo "                            ";
            if (0 === twig_compare((isset($context["borrado"]) || array_key_exists("borrado", $context) ? $context["borrado"] : (function () { throw new RuntimeError('Variable "borrado" does not exist.', 514, $this->source); })()), "S")) {
                // line 515
                echo "                                ";
                $context["contador"] = ((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 515, $this->source); })()) + 1);
                // line 516
                echo "                            ";
            }
            // line 517
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "                        ";
        if ((1 === twig_compare((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 518, $this->source); })()), 0) && 0 === twig_compare((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 518, $this->source); })()), 1))) {
            // line 519
            echo "                            <span>";
            echo twig_escape_filter($this->env, (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 519, $this->source); })()), "html", null, true);
            echo " archivo</span>
                        ";
        } elseif (1 === twig_compare(        // line 520
(isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 520, $this->source); })()), 1)) {
            // line 521
            echo "                            <span>";
            echo twig_escape_filter($this->env, (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 521, $this->source); })()), "html", null, true);
            echo " archivos</span>
                        ";
        }
        // line 523
        echo "                    </div>
                </div>
            </div>
        </section>

    ";
        // line 529
        echo "    <section class=\"modal fade\" id=\"restaurar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Restaurar archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_restaurar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"restaurar_nombre\">Restaurar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 550
        echo "    <section class=\"modal fade\" id=\"borrar_definitivo\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Eliminar definitivamente</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_borrar_definitivo\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"borrar_archivo_definitivo\">Eliminar definitivamente</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 571
        echo "    <div class=\"footer-panel text-center bg-dark text-white justify-content-center\">
        <p>Rasprivate <script>document.write(new Date().getFullYear());</script></p>
    </div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 576
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 577
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 579
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1135 => 580,  1131 => 579,  1127 => 578,  1122 => 577,  1112 => 576,  1098 => 571,  1076 => 550,  1054 => 529,  1047 => 523,  1041 => 521,  1039 => 520,  1034 => 519,  1031 => 518,  1025 => 517,  1022 => 516,  1019 => 515,  1016 => 514,  1013 => 513,  1008 => 512,  1006 => 511,  1002 => 509,  996 => 508,  985 => 502,  965 => 488,  957 => 486,  954 => 485,  951 => 484,  943 => 482,  940 => 481,  937 => 480,  935 => 479,  928 => 478,  925 => 477,  922 => 476,  920 => 475,  917 => 474,  909 => 472,  901 => 470,  895 => 469,  890 => 468,  888 => 467,  880 => 465,  878 => 464,  875 => 463,  873 => 462,  870 => 461,  867 => 460,  864 => 459,  860 => 458,  850 => 450,  826 => 427,  803 => 405,  780 => 383,  759 => 363,  738 => 343,  724 => 331,  711 => 320,  687 => 297,  682 => 293,  676 => 292,  664 => 282,  661 => 281,  658 => 280,  653 => 279,  650 => 277,  638 => 271,  630 => 265,  625 => 264,  622 => 262,  610 => 256,  607 => 255,  602 => 254,  599 => 252,  587 => 246,  584 => 245,  579 => 244,  576 => 242,  564 => 236,  561 => 235,  556 => 234,  520 => 199,  514 => 195,  511 => 194,  507 => 191,  501 => 190,  489 => 184,  478 => 175,  475 => 174,  473 => 173,  470 => 172,  467 => 171,  464 => 170,  456 => 164,  453 => 163,  451 => 162,  443 => 156,  435 => 150,  432 => 149,  430 => 148,  418 => 141,  404 => 133,  396 => 131,  393 => 130,  390 => 129,  382 => 127,  379 => 126,  376 => 125,  374 => 124,  367 => 123,  364 => 122,  361 => 121,  359 => 120,  356 => 119,  348 => 117,  340 => 115,  334 => 114,  329 => 113,  327 => 112,  319 => 110,  317 => 109,  314 => 108,  312 => 107,  309 => 106,  306 => 105,  303 => 104,  299 => 103,  295 => 101,  292 => 99,  276 => 91,  266 => 83,  263 => 82,  256 => 80,  249 => 78,  246 => 77,  239 => 75,  232 => 73,  229 => 72,  226 => 71,  223 => 70,  220 => 69,  213 => 67,  206 => 65,  203 => 64,  200 => 63,  197 => 62,  195 => 61,  188 => 59,  181 => 57,  178 => 56,  175 => 55,  172 => 54,  169 => 53,  166 => 52,  163 => 51,  159 => 50,  148 => 41,  117 => 11,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panel{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
<body class=\"bg-dark\">
    <main class=\"container-fluid\">
        {# Menú de navegación #}
        <header class=\"row justify-content-center\">
            <div class=\"container mt-5\">
                <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
                    <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                    <nav class=\"navbar-nav col-sm-4 ml-2\">
                        <input class=\"form-control\" type=\"search\" id=\"buscar\" placeholder=\"Busca un archivo\">
                    </nav>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\">Home</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/nuevo\">Archivo</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/perfil\">Perfil</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/logout\">Salir</a>
                            </li>
                        </ul>
                    </div>
                    <button class=\"navbar-toggler ml-auto\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                </nav>
            </div>
        </header>
       {# Menú lateral #}
        <div class=\"container text-white menu-lateral\">
            <h6>
                <svg class=\"bi bi-list-task mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2 2.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5V3a.5.5 0 00-.5-.5H2zM3 3H2v1h1V3z\" clip-rule=\"evenodd\"/>
                    <path d=\"M5 3.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM5.5 7a.5.5 0 000 1h9a.5.5 0 000-1h-9zm0 4a.5.5 0 000 1h9a.5.5 0 000-1h-9z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1.5 7a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5H2zm1 .5H2v1h1v-1z\" clip-rule=\"evenodd\"/>
                </svg>
                Almacenamiento
           </h6>
            {% for usuario in almacenamiento %}
                {% set total =  5242880 %}
                {% set utilizado = usuario.almacenamiento %}
                {% set porcentaje = (utilizado/total)*100 %}
                {% if utilizado/1024 < 1 %}
                {% set unidad = 'KB' %}
                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}%; background-color: #00d1a0;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>

                {% elseif utilizado/1024 >= 1 and utilizado/1024 < 1023 %}
                {% set unidad = 'MB' %}
                {% set utilizado = usuario.almacenamiento/1024 %}
                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}%; background-color: #00d1a0;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                {% else %}
                    {% set unidad = 'GB' %}
                    {% set utilizado = usuario.almacenamiento/1048576 %}
                    {% if utilizado >= 4.5 %}
                        <div class=\"progress\" style=\"height: 2px;width: 50%\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ; background-color: red;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                    {% else %}
                <div class=\"progress\" style=\"height: 2px;width: 50%\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}%; background-color: #00d1a0;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                    {% endif %}
                {% endif %}
                <h6 data-toggle=\"modal\" data-target=\"#papelera\" title=\"Papelera\" id=\"papelera_archivos\">

                    <svg class=\"bi bi-trash mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                    </svg>
                    Papelera
                </h6>
            <a {% if utilizado == total %}class=\"text-white text-decoration-none disabled\"{% endif %} href=\"nuevo\"class=\"text-white text-decoration-none\">
                <svg class=\"bi bi-file-earmark-plus mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Nuevo archivo
            </a>
            {% endfor %}
        </div>
        {# Panel de archivos #}
        <div class=\"container bg-dark mt-3\">
            <div class=\"row\" >
                {% for archivo in pagination %}
                    {% set borrado = archivo.borrado %}
                    {% if borrado == 'N' %}
                <div class=\"col-md-4 mt-3 mb-3\">
                    {% set id = archivo.id %}
                    <div class=\"card\">
                        {% set nombre = archivo.nombre %}
                        <input type=\"hidden\" name=\"{{ nombre }}\" value=\"{{ nombre }}\">
                        <div class=\"card-body\">
                            {% if archivo.nombre | length > 30 %}
                                {% for i in archivo.nombre | slice(0, 30) %}
                                {% endfor %}
                                <p class=\"card-title\" title=\"{{ archivo.nombre }}\"> {{ archivo.nombre | slice(0, 30) ~ '...' }} </p>
                            {% else %}
                                <p class=\"card-title\" title=\"{{ archivo.nombre }}\"> {{ archivo.nombre }} </p>
                            {% endif %}

                            {% set size = archivo.size %}
                            {% if size/1024 < 1 %}
                                {% set unidad = 'KB' %}
                                <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                            {% elseif size/1024 >= 1 and size/1024 < 1023 %}
                                {% set unidad = 'MB' %}
                                {% set size = size/1024 %}
                                <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                            {% else %}
                                {% set unidad = 'GB' %}
                                {% set size = size/1048576 %}
                                <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                            {% endif %}
                            <p class=\"card-text text-muted\">{{ archivo.fecha | date('d-m-Y')}} {{ archivo.fecha | date('H:i') }}</p>
                            <p class=\"card-text text-center\">
                                <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#editar\" title=\"Editar\">
                                    <svg class=\"bi bi-pencil\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </button>
                                <a class=\"btn bg-transparent btn-md\" href=\"{{ asset('uploads/archivos/' ~ app.user.username ~ '/' ~ archivo.nombre) }}\" download=\"{{ archivo.nombre }}\" title=\"Descargar\">
                                    <svg class=\"bi bi-download\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                {% set size = archivo.size %}
                                {% if size < 25600 %}
                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#compartir\" title=\"Compartir\">
                                    <svg class=\"bi bi-reply\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z\"/>
                                    </svg>
                                </a>
                                {% endif %}
                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar\" title=\"Mover a la papelera\">
                                    <svg class=\"bi bi-trash\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                {% set size = archivo.size %}
                                {% if size < 32768 %}
                                    <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#analizar\" title=\"Analizar\">
                                        <svg class=\"bi bi-file-earmark-break\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 00-2 2v6h1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-1H2v1a2 2 0 002 2h8a2 2 0 002-2v-1zM0 10.5a.5.5 0 01.5-.5h15a.5.5 0 010 1H.5a.5.5 0 01-.5-.5z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                    </button>
                                {% endif %}
                                {% set comprimido = [\"cbr\",\"jar\",\"pit\",\"rar\",\"jar\",\"tgz\",\"dl_\",\"bz2\",\"cbz\",\"war\",\"zip\",\"z01\"] %}
                                {% set ext_archivo = archivo.nombre | slice(-3, 3) %}
                                {% if ext_archivo in comprimido %}
                                {# El archivo ya está comprimido #}
                                {% else %}
                                    <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#comprimir\" title=\"Comprimir\">
                                        <svg class=\"bi bi-file-earmark-zip\" width=\"1.2em\" height=\"1.2em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z\"/>
                                            <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.11 0l-.929-.62a1 1 0 01-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 01-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 017 9.438V8.5z\" clip-rule=\"evenodd\"/>
                                            <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                        </svg>
                                    </button>
                                {% endif %}
                                <input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\">
                            </p>
                        </div>
                    </div>
                </div>
                    {% endif %}
                {% endfor %}
            </div>

            {# Paginación #}
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>

            {# Menú #}
            <div class=\"container-fluid bg-light fixed-bottom text-center menu-responsive\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-12 p-2\">
                        <a href=\"#\" class=\"icono\">
                            <svg class=\"bi bi-house-door mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                        <a href=\"/nuevo\" class=\"icono\">
                            <svg class=\"bi bi-plus-circle mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                        <a href=\"/perfil\" class=\"icono\">
                            <svg class=\"bi bi-people-circle mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                                <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                        <a href=\"/logout\" class=\"icono\">
                            <svg class=\"bi bi-box-arrow-in-right mr-4 ml-4\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path fill-rule=\"evenodd\" d=\"M8.146 11.354a.5.5 0 010-.708L10.793 8 8.146 5.354a.5.5 0 11.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9A.5.5 0 011 8z\" clip-rule=\"evenodd\"/>
                                <path fill-rule=\"evenodd\" d=\"M13.5 14.5A1.5 1.5 0 0015 13V3a1.5 1.5 0 00-1.5-1.5h-8A1.5 1.5 0 004 3v1.5a.5.5 0 001 0V3a.5.5 0 01.5-.5h8a.5.5 0 01.5.5v10a.5.5 0 01-.5.5h-8A.5.5 0 015 13v-1.5a.5.5 0 00-1 0V13a1.5 1.5 0 001.5 1.5h8z\" clip-rule=\"evenodd\"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {# El archivo se ha subido correctamente #}
            {% for flash_message in app.session.flashbag.get('exito') %}
                <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                    {{ flash_message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            {# El archivo se ha compartido correctamente #}
            {% for flash_message in app.session.flashbag.get('compartido') %}
                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    {{ flash_message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            {# El archivo se ha eliminado #}
            {% for flash_message in app.session.flashbag.get('delete') %}
                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    {{ flash_message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            {# Este archivo ya está comprimido #}
            {% for flash_message in app.session.flashbag.get('error_zip') %}
                <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
                    <svg class=\"bi bi-file-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M6.5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.109 0l-.93-.62a1 1 0 01-.415-1.074l.4-1.599V8.5zm2 0h-1v.938a1 1 0 01-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 01-.03-.243V8.5z\" clip-rule=\"evenodd\"/>
                        <path d=\"M7.5 2H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5V6z\"/>
                    </svg>
                    {{ flash_message }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endfor %}

            {# Queda poco espacio de almacenamiento #}
            {% for usuario in almacenamiento %}
                {% set utilizado = usuario.almacenamiento %}
                {% if utilizado >= 4718592 %}
                <div class=\"alert alert-secondary alert-dismissible mx-auto w-50 show fade\">
                    <svg class=\"bi bi-archive-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 000 1h4a.5.5 0 000-1H6zM.8 1a.8.8 0 00-.8.8V3a.8.8 0 00.8.8h14.4A.8.8 0 0016 3V1.8a.8.8 0 00-.8-.8H.8z\" clip-rule=\"evenodd\"/>
                    </svg> &nbsp;
                    Queda poco espacio de almacenamiento
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {% endif %}
            {% endfor %}
        </div>
    </main>

    {# Editar un archivo #}
    <section class=\"modal fade\" id=\"editar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Editar archivo</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Nombre</label>
                            <input type=\"text\" id=\"input_nombre\" class=\"form-control\" required data-toggle=\"tooltip\" title=\"Nombre del archivo\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"editar_nombre\">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {# Compartir archivo #}
    <section class=\"modal fade\" id=\"compartir\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Compartir archivo</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Compartir con:</label>
                            <input type=\"email\" id=\"compartir_nombre\" class=\"form-control\" value=\"{{ app.user.email }}\" required data-toggle=\"tooltip\" title=\"Correo de destino\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"compartir_archivo\">Compartir</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {# Escaneando #}
    <section class=\"modal bg-transparent border-0\" id=\"escaneando\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-3\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-9\">
                            <h5 class=\"text-light text-center\">Buscando malware</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# Redirigiendo #}
    <section class=\"modal bg-transparent border-0\" id=\"redirigiendo\">
        <div class=\"modal-dialog modal-dialog-centered bg-transparent border-0\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-header bg-transparent border-0\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-1 mr-3\">
                            <div class=\"spinner-border text-light\" role=\"status\">
                                <span class=\"sr-only text-light\"></span>
                            </div>
                        </div>
                        <div class=\"col-10\">
                            <h5 class=\"text-light text-center\">Redirigiendo a VirusTotal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# Analizar un archivo #}
    <section class=\"modal fade\" id=\"analizar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Analizar archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_analizar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"analizar_nombre\">Analizar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {# Mover a la papelera #}
    <section class=\"modal fade\" id=\"borrar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Mover a la papelera</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_borrar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"eliminar_nombre\">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {# Comprimir un archivo #}
    <section class=\"modal fade\" id=\"comprimir\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Comprimir archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_comprimir\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"comprimir_nombre\">Comprimir</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"cancelar\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {# Papelera de reciclaje #}
        <section class=\"modal fade\" id=\"papelera\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h6 class=\"modal-title\">Archivos eliminados</h6>
                        <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        {% for archivo in pagination %}
                            {% set borrado = archivo.borrado %}
                            {% if borrado == 'S' %}
                                <div class=\"col-md-12 mt-3 mb-3\">
                                    {% set id = archivo.id %}
                                    <div class=\"card\">
                                        {% set nombre = archivo.nombre %}
                                        <input type=\"hidden\" name=\"{{ nombre }}\" value=\"{{ nombre }}\">
                                        <div class=\"card-body\">
                                            {% if archivo.nombre | length > 30 %}
                                                {% for i in archivo.nombre | slice(0, 30) %}
                                                {% endfor %}
                                                <p class=\"card-title\" title=\"{{ archivo.nombre }}\"> {{ archivo.nombre | slice(0, 30) ~ '...' }} </p>
                                            {% else %}
                                                <p class=\"card-title\" title=\"{{ archivo.nombre }}\"> {{ archivo.nombre }} </p>
                                            {% endif %}

                                            {% set size = archivo.size %}
                                            {% if size/1024 < 1 %}
                                                {% set unidad = 'KB' %}
                                                <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                            {% elseif size/1024 >= 1 and size/1024 < 1023 %}
                                                {% set unidad = 'MB' %}
                                                {% set size = size/1024 %}
                                                <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                            {% else %}
                                                {% set unidad = 'GB' %}
                                                {% set size = size/1048576 %}
                                                <p class=\"card-subtitle\">{{ size |round(2, 'floor') }} {{ unidad }}</p>
                                            {% endif %}
                                            <p class=\"card-text text-muted\">{{ archivo.fecha | date('d-m-Y')}} {{ archivo.fecha | date('H:i') }}</p>
                                            <p class=\"card-text text-center\">
                                                <button class=\"btn bg-transparent btn-md\" title=\"Restaurar\" data-toggle=\"modal\" data-target=\"#restaurar\">
                                                    <svg class=\"bi bi-arrow-counterclockwise\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path fill-rule=\"evenodd\" d=\"M12.83 6.706a5 5 0 00-7.103-3.16.5.5 0 11-.454-.892A6 6 0 112.545 5.5a.5.5 0 11.91.417 5 5 0 109.375.789z\" clip-rule=\"evenodd\"/>
                                                        <path fill-rule=\"evenodd\" d=\"M7.854.146a.5.5 0 00-.708 0l-2.5 2.5a.5.5 0 000 .708l2.5 2.5a.5.5 0 10.708-.708L5.707 3 7.854.854a.5.5 0 000-.708z\" clip-rule=\"evenodd\"/>
                                                    </svg>
                                                </button>
                                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar_definitivo\" title=\"Eliminar definitivamente\">
                                                    <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                                    </svg>
                                                </a>
                                                <input type=\"hidden\" name=\"{{ id }}\" value=\"{{ id }}\">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"modal-footer\">
                        {% set contador = 0 %}
                        {% for archivo in pagination %}
                            {% set borrado = archivo.borrado %}
                            {% if borrado == 'S' %}
                                {% set contador = contador + 1 %}
                            {% endif %}
                        {% endfor %}
                        {% if contador > 0 and contador == 1%}
                            <span>{{ contador }} archivo</span>
                        {% elseif contador > 1 %}
                            <span>{{ contador }} archivos</span>
                        {% endif %}
                    </div>
                </div>
            </div>
        </section>

    {# Restaurar archivo #}
    <section class=\"modal fade\" id=\"restaurar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Restaurar archivo</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_restaurar\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"restaurar_nombre\">Restaurar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {# Eliminar un archivo definitivamente #}
    <section class=\"modal fade\" id=\"borrar_definitivo\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Eliminar definitivamente</span>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\" id=\"cancel\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <p id=\"p_borrar_definitivo\"></p>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"borrar_archivo_definitivo\">Eliminar definitivamente</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {# Pie de la página #}
    <div class=\"footer-panel text-center bg-dark text-white justify-content-center\">
        <p>Rasprivate <script>document.write(new Date().getFullYear());</script></p>
    </div>
</body>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('js/accion.js') }}\"></script>
{% endblock %}", "panel/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\panel\\index.html.twig");
    }
}
