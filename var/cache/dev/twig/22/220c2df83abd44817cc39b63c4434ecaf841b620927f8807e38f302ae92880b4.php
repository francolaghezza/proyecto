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
            <p>Almacenamiento &nbsp;
            <svg class=\"bi bi-folder\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.828 4a3 3 0 01-2.12-.879l-.83-.828A1 1 0 006.173 2H2.5a1 1 0 00-1 .981L1.546 4h-1L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3v1z\"/>
                <path fill-rule=\"evenodd\" d=\"M13.81 4H2.19a1 1 0 00-.996 1.09l.637 7a1 1 0 00.995.91h10.348a1 1 0 00.995-.91l.637-7A1 1 0 0013.81 4zM2.19 3A2 2 0 00.198 5.181l.637 7A2 2 0 002.826 14h10.348a2 2 0 001.991-1.819l.637-7A2 2 0 0013.81 3H2.19z\" clip-rule=\"evenodd\"/>
            </svg></p>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 48
            echo "                ";
            $context["total"] = 5242880;
            // line 49
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 49);
            // line 50
            echo "                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 50, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })())) * 100);
            // line 51
            echo "                ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 51, $this->source); })()) / 1024), 1)) {
                // line 52
                echo "                ";
                $context["unidad"] = "KB";
                // line 53
                echo "                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>";
                // line 56
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 56, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 56, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>

                ";
            } elseif ((0 <= twig_compare((            // line 58
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 58, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 58, $this->source); })()) / 1024), 1023))) {
                // line 59
                echo "                ";
                $context["unidad"] = "MB";
                // line 60
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 60) / 1024);
                // line 61
                echo "                    <div class=\"progress\" style=\"height: 2px;width: 50%\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 62, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p>";
                // line 64
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 64, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 64, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                ";
            } else {
                // line 66
                echo "                    ";
                $context["unidad"] = "GB";
                // line 67
                echo "                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 67) / 1048576);
                // line 68
                echo "                    ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 68, $this->source); })()), 4.5)) {
                    // line 69
                    echo "                        <div class=\"progress\" style=\"height: 2px;width: 50%\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 70
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 70, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 70, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <p>";
                    // line 72
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 72, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 72, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                } else {
                    // line 74
                    echo "                <div class=\"progress\" style=\"height: 2px;width: 50%\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 75
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo "%; background-color: #00d1a0;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p>";
                    // line 77
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 77, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 77, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                    ";
                }
                // line 79
                echo "                ";
            }
            // line 80
            echo "            <a ";
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 80, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 80, $this->source); })()))) {
                echo "class=\"btn bg-light btn-md my-4 my-sm-0 redondo disabled boton\"";
            }
            echo " href=\"nuevo\"class=\"btn bg-light btn-md my-4 my-sm-0 redondo boton\">
                <svg class=\"bi bi-file-plus\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V8h-1v5a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1h5V1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 1a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 3.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Archivo
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </div>
        ";
        // line 90
        echo "        <div class=\"container bg-dark mt-3\">
            <div class=\"row\" >
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 93
            echo "                <div class=\"col-md-4 mt-3 mb-3\">
                    ";
            // line 94
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "id", [], "any", false, false, false, 94);
            // line 95
            echo "                    <div class=\"card\">
                        ";
            // line 96
            $context["nombre"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 96);
            // line 97
            echo "                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "\">
                        <div class=\"card-body\">
                            ";
            // line 99
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 99)), 30)) {
                // line 100
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 100), 0, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 101
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                                <p class=\"card-title\"> ";
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 102), 0, 30) . "..."), "html", null, true);
                echo " </p>
                            ";
            } else {
                // line 104
                echo "                                <p class=\"card-title\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 104), "html", null, true);
                echo " </p>
                            ";
            }
            // line 106
            echo "
                            ";
            // line 107
            $context["size"] = twig_get_attribute($this->env, $this->source, $context["archivo"], "size", [], "any", false, false, false, 107);
            // line 108
            echo "                            ";
            if (-1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 108, $this->source); })()) / 1024), 1)) {
                // line 109
                echo "                                ";
                $context["unidad"] = "KB";
                // line 110
                echo "                                <p class=\"card-subtitle\">";
                echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 110, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 110, $this->source); })()), "html", null, true);
                echo "</p>
                            ";
            } elseif ((0 <= twig_compare((            // line 111
(isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 111, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 111, $this->source); })()) / 1024), 1023))) {
                // line 112
                echo "                                ";
                $context["unidad"] = "MB";
                // line 113
                echo "                                ";
                $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 113, $this->source); })()) / 1024);
                // line 114
                echo "                                <p class=\"card-subtitle\">";
                echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 114, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 114, $this->source); })()), "html", null, true);
                echo "</p>
                            ";
            } else {
                // line 116
                echo "                                ";
                $context["unidad"] = "GB";
                // line 117
                echo "                                ";
                $context["size"] = ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 117, $this->source); })()) / 1048576);
                // line 118
                echo "                                <p class=\"card-subtitle\">";
                echo twig_escape_filter($this->env, twig_round((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 118, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 118, $this->source); })()), "html", null, true);
                echo "</p>
                            ";
            }
            // line 120
            echo "                            <p class=\"card-text text-muted\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 120), "d-m-Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "fecha", [], "any", false, false, false, 120), "H:i"), "html", null, true);
            echo "</p>
                            <p class=\"card-text text-center\">
                                <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#editar\" title=\"Editar\">
                                    <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </button>
                                <a class=\"btn bg-transparent btn-md\" href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("uploads/archivos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "username", [], "any", false, false, false, 128)) . "/") . twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 128))), "html", null, true);
            echo "\" download=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 128), "html", null, true);
            echo "\" title=\"Descargar\">
                                    <svg class=\"bi bi-download\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar\" title=\"Eliminar\">
                                    <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#analizar\" title=\"Analizar\">
                                    <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 00-2 2v6h1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-1H2v1a2 2 0 002 2h8a2 2 0 002-2v-1zM0 10.5a.5.5 0 01.5-.5h15a.5.5 0 010 1H.5a.5.5 0 01-.5-.5z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </button>
                                ";
            // line 146
            $context["comprimido"] = [0 => "cbr", 1 => "jar", 2 => "pit", 3 => "rar", 4 => "jar", 5 => "tgz", 6 => "dl_", 7 => "bz2", 8 => "cbz", 9 => "war", 10 => "zip", 11 => "z01"];
            // line 147
            echo "                                ";
            $context["ext_archivo"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["archivo"], "nombre", [], "any", false, false, false, 147),  -3, 3);
            // line 148
            echo "                                ";
            if (twig_in_filter((isset($context["ext_archivo"]) || array_key_exists("ext_archivo", $context) ? $context["ext_archivo"] : (function () { throw new RuntimeError('Variable "ext_archivo" does not exist.', 148, $this->source); })()), (isset($context["comprimido"]) || array_key_exists("comprimido", $context) ? $context["comprimido"] : (function () { throw new RuntimeError('Variable "comprimido" does not exist.', 148, $this->source); })()))) {
                // line 149
                echo "                                ";
                // line 150
                echo "                                ";
            } else {
                // line 151
                echo "                                    <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#comprimir\" title=\"Comprimir\">
                                        <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z\"/>
                                            <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.11 0l-.929-.62a1 1 0 01-.415-1.074L5 9.438V8.5zm2 0H6v.938a1 1 0 01-.03.243l-.4 1.598.93.62.929-.62-.4-1.598A1 1 0 017 9.438V8.5z\" clip-rule=\"evenodd\"/>
                                            <path d=\"M6 2h1.5v1H6zM5 3h1.5v1H5zm1 1h1.5v1H6zM5 5h1.5v1H5zm1 1h1.5v1H6V6z\"/>
                                        </svg>
                                    </button>
                                ";
            }
            // line 160
            echo "                                <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 160, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 160, $this->source); })()), "html", null, true);
            echo "\">
                            </p>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "            </div>
            ";
        // line 168
        echo "            <div class=\"navigation\">
                ";
        // line 169
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 169, $this->source); })()));
        echo "
            </div>
            ";
        // line 172
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
        // line 207
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "session", [], "any", false, false, false, 207), "flashbag", [], "any", false, false, false, 207), "get", [0 => "exito"], "method", false, false, false, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 208
            echo "                <div class=\"alert alert-success alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 209
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
        // line 215
        echo "            ";
        // line 216
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "session", [], "any", false, false, false, 216), "flashbag", [], "any", false, false, false, 216), "get", [0 => "delete"], "method", false, false, false, 216));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 217
            echo "                <div class=\"alert alert-info alert-dismissible w-50 mx-auto mt-2 show fade\">
                    ";
            // line 218
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
        // line 224
        echo "            ";
        // line 225
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "session", [], "any", false, false, false, 225), "flashbag", [], "any", false, false, false, 225), "get", [0 => "error_zip"], "method", false, false, false, 225));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 226
            echo "                <div class=\"alert alert-danger alert-dismissible w-50 mx-auto mt-2 show fade\">
                    <svg class=\"bi bi-file-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z\" clip-rule=\"evenodd\"/>
                        <path fill-rule=\"evenodd\" d=\"M6.5 8.5a1 1 0 011-1h1a1 1 0 011 1v.938l.4 1.599a1 1 0 01-.416 1.074l-.93.62a1 1 0 01-1.109 0l-.93-.62a1 1 0 01-.415-1.074l.4-1.599V8.5zm2 0h-1v.938a1 1 0 01-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 01-.03-.243V8.5z\" clip-rule=\"evenodd\"/>
                        <path d=\"M7.5 2H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5V6z\"/>
                    </svg>
                    ";
            // line 232
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
        // line 238
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 239
            echo "                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 239);
            // line 240
            echo "                ";
            if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 240, $this->source); })()), 4718592)) {
                // line 241
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
            // line 251
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "        </div>
    </main>
    ";
        // line 255
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
        // line 277
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
        // line 296
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
        // line 315
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
        // line 336
        echo "    <section class=\"modal fade\" id=\"borrar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Eliminar archivo</span>
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
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 358
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
        // line 380
        echo "    <div class=\"footer-panel text-center bg-dark text-white justify-content-center\">
        <p>Rasprivate <script>document.write(new Date().getFullYear());</script></p>
    </div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 385
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 386
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 388
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 389
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
        return array (  775 => 389,  771 => 388,  767 => 387,  762 => 386,  752 => 385,  738 => 380,  715 => 358,  692 => 336,  670 => 315,  650 => 296,  630 => 277,  607 => 255,  603 => 252,  597 => 251,  585 => 241,  582 => 240,  579 => 239,  574 => 238,  562 => 232,  554 => 226,  549 => 225,  547 => 224,  535 => 218,  532 => 217,  527 => 216,  525 => 215,  513 => 209,  510 => 208,  505 => 207,  469 => 172,  464 => 169,  461 => 168,  458 => 166,  443 => 160,  432 => 151,  429 => 150,  427 => 149,  424 => 148,  421 => 147,  419 => 146,  396 => 128,  382 => 120,  374 => 118,  371 => 117,  368 => 116,  360 => 114,  357 => 113,  354 => 112,  352 => 111,  345 => 110,  342 => 109,  339 => 108,  337 => 107,  334 => 106,  328 => 104,  322 => 102,  316 => 101,  311 => 100,  309 => 99,  301 => 97,  299 => 96,  296 => 95,  294 => 94,  291 => 93,  287 => 92,  283 => 90,  280 => 88,  263 => 80,  260 => 79,  253 => 77,  246 => 75,  243 => 74,  236 => 72,  229 => 70,  226 => 69,  223 => 68,  220 => 67,  217 => 66,  210 => 64,  203 => 62,  200 => 61,  197 => 60,  194 => 59,  192 => 58,  185 => 56,  178 => 54,  175 => 53,  172 => 52,  169 => 51,  166 => 50,  163 => 49,  160 => 48,  156 => 47,  148 => 41,  117 => 11,  113 => 8,  103 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
       {# Almacenamiento #}
        <div class=\"container text-white menu-lateral\">
            <p>Almacenamiento &nbsp;
            <svg class=\"bi bi-folder\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.828 4a3 3 0 01-2.12-.879l-.83-.828A1 1 0 006.173 2H2.5a1 1 0 00-1 .981L1.546 4h-1L.5 3a2 2 0 012-2h3.672a2 2 0 011.414.586l.828.828A2 2 0 009.828 3v1z\"/>
                <path fill-rule=\"evenodd\" d=\"M13.81 4H2.19a1 1 0 00-.996 1.09l.637 7a1 1 0 00.995.91h10.348a1 1 0 00.995-.91l.637-7A1 1 0 0013.81 4zM2.19 3A2 2 0 00.198 5.181l.637 7A2 2 0 002.826 14h10.348a2 2 0 001.991-1.819l.637-7A2 2 0 0013.81 3H2.19z\" clip-rule=\"evenodd\"/>
            </svg></p>
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
            <a {% if utilizado == total  %}class=\"btn bg-light btn-md my-4 my-sm-0 redondo disabled boton\"{% endif %} href=\"nuevo\"class=\"btn bg-light btn-md my-4 my-sm-0 redondo boton\">
                <svg class=\"bi bi-file-plus\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V8h-1v5a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1h5V1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 1a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 3.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Archivo
            </a>
            {% endfor %}
        </div>
        {# Panel de archivos #}
        <div class=\"container bg-dark mt-3\">
            <div class=\"row\" >
                {% for archivo in pagination %}
                <div class=\"col-md-4 mt-3 mb-3\">
                    {% set id = archivo.id %}
                    <div class=\"card\">
                        {% set nombre = archivo.nombre %}
                        <input type=\"hidden\" name=\"{{ nombre }}\" value=\"{{ nombre }}\">
                        <div class=\"card-body\">
                            {% if archivo.nombre | length > 30 %}
                                {% for i in archivo.nombre | slice(0, 30) %}
                                {% endfor %}
                                <p class=\"card-title\"> {{ archivo.nombre | slice(0, 30) ~ '...' }} </p>
                            {% else %}
                                <p class=\"card-title\"> {{ archivo.nombre }} </p>
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
                                    <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </button>
                                <a class=\"btn bg-transparent btn-md\" href=\"{{ asset('uploads/archivos/' ~ app.user.username ~ '/' ~ archivo.nombre) }}\" download=\"{{ archivo.nombre }}\" title=\"Descargar\">
                                    <svg class=\"bi bi-download\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z\" clip-rule=\"evenodd\"/>
                                        <path fill-rule=\"evenodd\" d=\"M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                <a class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#borrar\" title=\"Eliminar\">
                                    <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                                        <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </a>
                                <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#analizar\" title=\"Analizar\">
                                    <svg class=\"bi bi-file-earmark-break\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M9 1H4a2 2 0 00-2 2v6h1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v3h1V6L9 1zm5 11h-1v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-1H2v1a2 2 0 002 2h8a2 2 0 002-2v-1zM0 10.5a.5.5 0 01.5-.5h15a.5.5 0 010 1H.5a.5.5 0 01-.5-.5z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </button>
                                {% set comprimido = [\"cbr\",\"jar\",\"pit\",\"rar\",\"jar\",\"tgz\",\"dl_\",\"bz2\",\"cbz\",\"war\",\"zip\",\"z01\"] %}
                                {% set ext_archivo = archivo.nombre | slice(-3, 3) %}
                                {% if ext_archivo in comprimido %}
                                {# El archivo ya está comprimido #}
                                {% else %}
                                    <button class=\"btn bg-transparent btn-md\" data-toggle=\"modal\" data-target=\"#comprimir\" title=\"Comprimir\">
                                        <svg class=\"bi bi-file-earmark-zip\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
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
    {# Eliminar un archivo #}
    <section class=\"modal fade\" id=\"borrar\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <span class=\"modal-title\">Eliminar archivo</span>
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
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancelar</button>
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
