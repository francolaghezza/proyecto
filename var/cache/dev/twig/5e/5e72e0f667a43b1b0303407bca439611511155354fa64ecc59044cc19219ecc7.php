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

/* perfil/index.html.twig */
class __TwigTemplate_0a834fb49031b8ad13ca6fd6ec7e80918bde02e724ed4b0843e116c0a9a3e2de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "perfil/index.html.twig", 1);
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

        echo "Perfil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body class=\"bg-dark\">
<main class=\"container-fluid\">
    ";
        // line 9
        echo "    <header class=\"row justify-content-center\">
        <div class=\"container mt-5 \">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\" >
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <div class=\"dropdown ml-auto usuario\">
                    <button class=\"btn bg-transparent dropdown-toggle text-white\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                        </svg>
                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
        echo "
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"/nuevo\">Nuevo archivo</a>
                        <a class=\"dropdown-item\" href=\"/panel\">Mis archivos</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Cerrar sesión</a>
                        <a class=\"dropdown-item\" href=\"#\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 28
            echo "                                ";
            $context["total"] = 5242880;
            // line 29
            echo "                                ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 29);
            // line 30
            echo "                                ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 30, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 30, $this->source); })())) * 100);
            // line 31
            echo "                                ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 31, $this->source); })()) / 1024), 1)) {
                // line 32
                echo "                                    ";
                $context["unidad"] = "KB";
                // line 33
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>";
                // line 36
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 36, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 36, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                                ";
            } elseif ((0 <= twig_compare((            // line 37
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 37, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 37, $this->source); })()) / 1024), 1023))) {
                // line 38
                echo "                                    ";
                $context["unidad"] = "MB";
                // line 39
                echo "                                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 39) / 1024);
                // line 40
                echo "                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p style=\"margin-top: 10px;\">";
                // line 43
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 43, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 43, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
                                ";
            } else {
                // line 45
                echo "                                    ";
                $context["unidad"] = "GB";
                // line 46
                echo "                                    ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 46) / 1048576);
                // line 47
                echo "                                    ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 47, $this->source); })()), 4.5)) {
                    // line 48
                    echo "                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 49
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 49, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 49, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">";
                    // line 51
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 51, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 51, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                                    ";
                } else {
                    // line 53
                    echo "                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 54
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 54, $this->source); })()), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 54, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">";
                    // line 56
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 56, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 56, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                                    ";
                }
                // line 58
                echo "                                ";
            }
            // line 59
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    ";
        // line 67
        echo "    <div class=\"text-white menu-nuevo\">
        <h6>
            <svg class=\"bi bi-list-task mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" d=\"M2 2.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5V3a.5.5 0 00-.5-.5H2zM3 3H2v1h1V3z\" clip-rule=\"evenodd\"/>
                <path d=\"M5 3.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zM5.5 7a.5.5 0 000 1h9a.5.5 0 000-1h-9zm0 4a.5.5 0 000 1h9a.5.5 0 000-1h-9z\"/>
                <path fill-rule=\"evenodd\" d=\"M1.5 7a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5H2zm1 .5H2v1h1v-1z\" clip-rule=\"evenodd\"/>
            </svg>
            Almacenamiento
        </h6>
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["almacenamiento"]) || array_key_exists("almacenamiento", $context) ? $context["almacenamiento"] : (function () { throw new RuntimeError('Variable "almacenamiento" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 77
            echo "            ";
            $context["total"] = 5242880;
            // line 78
            echo "            ";
            $context["utilizado"] = twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 78);
            // line 79
            echo "            ";
            $context["porcentaje"] = (((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 79, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 79, $this->source); })())) * 100);
            // line 80
            echo "            ";
            if (-1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 80, $this->source); })()) / 1024), 1)) {
                // line 81
                echo "                ";
                $context["unidad"] = "KB";
                // line 82
                echo "                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 85
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 85, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 85, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
            ";
            } elseif ((0 <= twig_compare((            // line 86
(isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 86, $this->source); })()) / 1024), 1) && -1 === twig_compare(((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 86, $this->source); })()) / 1024), 1023))) {
                // line 87
                echo "                ";
                $context["unidad"] = "MB";
                // line 88
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 88) / 1024);
                // line 89
                echo "                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 90, $this->source); })()), "html", null, true);
                echo "% ;\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 90, $this->source); })()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                // line 92
                echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 92, $this->source); })()), 2, "floor"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 92, $this->source); })()), "html", null, true);
                echo " de 5 GB utilizado</p>
            ";
            } else {
                // line 94
                echo "                ";
                $context["unidad"] = "GB";
                // line 95
                echo "                ";
                $context["utilizado"] = (twig_get_attribute($this->env, $this->source, $context["usuario"], "almacenamiento", [], "any", false, false, false, 95) / 1048576);
                // line 96
                echo "                ";
                if (0 <= twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 96, $this->source); })()), 4.5)) {
                    // line 97
                    echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 98
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 98, $this->source); })()), "html", null, true);
                    echo "% ; background-color: red;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 98, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 100
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 100, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 100, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                ";
                } else {
                    // line 102
                    echo "                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 103
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 103, $this->source); })()), "html", null, true);
                    echo "% ;\" aria-valuenow=\"";
                    echo twig_escape_filter($this->env, (isset($context["porcentaje"]) || array_key_exists("porcentaje", $context) ? $context["porcentaje"] : (function () { throw new RuntimeError('Variable "porcentaje" does not exist.', 103, $this->source); })()), "html", null, true);
                    echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">";
                    // line 105
                    echo twig_escape_filter($this->env, twig_round((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 105, $this->source); })()), 2, "floor"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["unidad"]) || array_key_exists("unidad", $context) ? $context["unidad"] : (function () { throw new RuntimeError('Variable "unidad" does not exist.', 105, $this->source); })()), "html", null, true);
                    echo " de 5 GB utilizado</p>
                ";
                }
                // line 107
                echo "            ";
            }
            // line 108
            echo "            <a ";
            if (0 === twig_compare((isset($context["utilizado"]) || array_key_exists("utilizado", $context) ? $context["utilizado"] : (function () { throw new RuntimeError('Variable "utilizado" does not exist.', 108, $this->source); })()), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 108, $this->source); })()))) {
                echo "class=\"text-white text-decoration-none disabled\"";
            }
            echo " href=\"nuevo\"class=\"text-white text-decoration-none\">
                <svg class=\"bi bi-file-earmark-plus mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Nuevo archivo
            </a>
            <a href=\"panel\" class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                <svg class=\"bi bi-file-earmark-text mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z\"/>
                </svg> Mis archivos
            </a>
            <a href=\"logout\"class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                <svg class=\"bi bi-box-arrow-in-right mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z\"/>
                </svg> Cerrar sesión
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </div>
    <div class=\"container text-white mt-5\">
            <p class=\"text-center\">
                <svg class=\"bi bi-people-circle\" width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                </svg>
            </p>
        <h4 class=\"text-center\">Mi cuenta</h4>
        <p class=\"text-center\">Desde aquí podrás editar la configuración de tu cuenta</p>
        <form class=\"container\">
            ";
        // line 143
        echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"email\">Email:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" name=\"mail\" class=\"form-control\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "email", [], "any", false, false, false, 153), "html", null, true);
        echo "\" readonly>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#email\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 166
        echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"usuario\">Nombre de usuario:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" name=\"usuario\" class=\"form-control\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "username", [], "any", false, false, false, 176), "html", null, true);
        echo "\" readonly>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#usuario\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 189
        echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"usuario\">Contraseña actual:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"pass1\" id=\"pass1\" class=\"form-control boton\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass1\">
                                <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass1\">
                                    <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass1\">
                                    <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                    <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                    <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <label for=\"usuario\">Nueva contraseña:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"pass2\" id=\"pass2\" class=\"form-control boton\" pattern=\".{8,}\" placeholder=\"Al menos 8 caracteres\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass2\">
                                <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass2\">
                                    <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass2\">
                                    <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                    <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                    <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 mb-3\">
                    <button type=\"button\" class=\"btn btn-secondary\" id=\"c_pass\">Cambiar contraseña</button>
                </div>
            </div>
            ";
        // line 251
        echo "                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <div class=\"card border-danger mb-3 bg-light text-dark\" style=\"padding: 10px;width: 100%;\">
                            <div class=\"card-header\">Eliminar mi cuenta:</div>
                            <div class=\"card-body\" style=\"padding: 10px;\">
                                <p class=\"card-text\" style=\"padding: 10px;\"><strong class=\"text-danger\">Aviso:</strong> Si borras tu cuenta, se eliminarán todos tus archivos.</p>
                                <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#eliminar_cuenta\">Eliminar cuenta</button>
                            </div>
                        </div>
                    </div>
                </div>

            ";
        // line 264
        echo "            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"error_pass1\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-danger alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        La contraseña es incorrecta
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            ";
        // line 275
        echo "            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"error_cuenta\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-danger alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        No se puedo eliminar su cuenta
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            ";
        // line 286
        echo "            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"pass_changed\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-info alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        Contraseña cambiada correctamente
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    ";
        // line 299
        echo "    <section class=\"modal fade\" id=\"eliminar_cuenta\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Eliminar cuenta</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Introduce tu contraseña:</label>
                            <div class=\"input-group mb-3 rounded border border-secondary\">
                                <input type=\"password\" name=\"pass3\" id=\"pass3\" class=\"form-control boton\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass3\">
                                        <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass3\">
                                            <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                            <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                        <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass3\">
                                            <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                            <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                            <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-outline-danger\" id=\"eliminar\">Eliminar</button>
                        <input type=\"hidden\" id=\"usuario_eliminar\" value=\"";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331), "username", [], "any", false, false, false, 331), "html", null, true);
        echo "\">
                        <input type=\"hidden\" id=\"usuario_id\" value=\"";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "user", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
        echo "\">
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 339
        echo "    <section class=\"modal fade\" id=\"email\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Cambia tu correo electrónico</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-9\">
                                    <input type=\"email\" id=\"input_email\" class=\"form-control\" value=\"";
        // line 351
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 351, $this->source); })()), "user", [], "any", false, false, false, 351), "email", [], "any", false, false, false, 351), "html", null, true);
        echo "\" required>
                                </div>
                                <div class=\"col-1\">
                                    <span class=\"spinner-border\" role=\"status\" style=\"width: 1.5em; height: 1.5em; display: none;\" id=\"animacion\"></span>
                                    <svg id=\"no_valido\" class=\"bi bi-exclamation-circle\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"red\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                                        <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                                    </svg>
                                    <svg id=\"valido\" class=\"bi bi-check\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"cambiar_email\">Cambiar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    ";
        // line 374
        echo "    <section class=\"modal fade\" id=\"usuario\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Cambia tu nombre de usuario</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-9\">
                                    <input type=\"text\" id=\"input_usuario\" class=\"form-control\" value=\"";
        // line 386
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 386, $this->source); })()), "user", [], "any", false, false, false, 386), "username", [], "any", false, false, false, 386), "html", null, true);
        echo "\" required>

                                </div>
                                <div class=\"col-1\">
                                    <span class=\"spinner-border\" role=\"status\" style=\"width: 1.5em; height: 1.5em; display: none;\" id=\"animacion_u\"></span>
                                    <svg id=\"no_valido_u\" class=\"bi bi-exclamation-circle\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"red\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                                        <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                                    </svg>
                                    <svg id=\"valido_u\" class=\"bi bi-check\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </div>
                            </div>
                            <small>Mínimo 6 caracteres sin caracteres especiales</small>
                        </div>
                    </div>
                    <div class=\"modal-footer\">

                        <button type=\"button\" class=\"btn btn-secondary\" id=\"cambiar_usuario\">Cambiar</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</main>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 415
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 416
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 418
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "perfil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  729 => 419,  725 => 418,  721 => 417,  716 => 416,  706 => 415,  667 => 386,  653 => 374,  628 => 351,  614 => 339,  605 => 332,  601 => 331,  567 => 299,  553 => 286,  541 => 275,  529 => 264,  515 => 251,  452 => 189,  437 => 176,  425 => 166,  410 => 153,  398 => 143,  384 => 130,  353 => 108,  350 => 107,  343 => 105,  336 => 103,  333 => 102,  326 => 100,  319 => 98,  316 => 97,  313 => 96,  310 => 95,  307 => 94,  300 => 92,  293 => 90,  290 => 89,  287 => 88,  284 => 87,  282 => 86,  276 => 85,  269 => 83,  266 => 82,  263 => 81,  260 => 80,  257 => 79,  254 => 78,  251 => 77,  247 => 76,  236 => 67,  228 => 60,  222 => 59,  219 => 58,  212 => 56,  205 => 54,  202 => 53,  195 => 51,  188 => 49,  185 => 48,  182 => 47,  179 => 46,  176 => 45,  169 => 43,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  151 => 37,  145 => 36,  138 => 34,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  123 => 29,  120 => 28,  116 => 27,  106 => 20,  93 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Perfil{% endblock %}

{% block body %}
<body class=\"bg-dark\">
<main class=\"container-fluid\">
    {# Menú de navegación #}
    <header class=\"row justify-content-center\">
        <div class=\"container mt-5 \">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\" >
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" class=\"logo\" alt=\"logo\"></a>
                <div class=\"dropdown ml-auto usuario\">
                    <button class=\"btn bg-transparent dropdown-toggle text-white\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <svg class=\"bi bi-people-circle\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                            <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                        </svg>
                        {{ app.user.username }}
                    </button>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"/nuevo\">Nuevo archivo</a>
                        <a class=\"dropdown-item\" href=\"/panel\">Mis archivos</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Cerrar sesión</a>
                        <a class=\"dropdown-item\" href=\"#\">
                            {% for usuario in almacenamiento %}
                                {% set total =  5242880 %}
                                {% set utilizado = usuario.almacenamiento %}
                                {% set porcentaje = (utilizado/total)*100 %}
                                {% if utilizado/1024 < 1 %}
                                    {% set unidad = 'KB' %}
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                {% elseif utilizado/1024 >= 1 and utilizado/1024 < 1023 %}
                                    {% set unidad = 'MB' %}
                                    {% set utilizado = usuario.almacenamiento/1024 %}
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p style=\"margin-top: 10px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                {% else %}
                                    {% set unidad = 'GB' %}
                                    {% set utilizado = usuario.almacenamiento/1048576 %}
                                    {% if utilizado >= 4.5 %}
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ; background-color: red;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                    {% else %}
                                        <div class=\"progress\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <p style=\"margin-top: 10px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    {# Menú lateral #}
    <div class=\"text-white menu-nuevo\">
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
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
            {% elseif utilizado/1024 >= 1 and utilizado/1024 < 1023 %}
                {% set unidad = 'MB' %}
                {% set utilizado = usuario.almacenamiento/1024 %}
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
            {% else %}
                {% set unidad = 'GB' %}
                {% set utilizado = usuario.almacenamiento/1048576 %}
                {% if utilizado >= 4.5 %}
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ; background-color: red;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                {% else %}
                    <div class=\"progress\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ porcentaje }}% ;\" aria-valuenow=\"{{ porcentaje }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <p style=\"margin-top: 20px;margin-bottom: 30px;\">{{ utilizado |round(2, 'floor')}} {{ unidad }} de 5 GB utilizado</p>
                {% endif %}
            {% endif %}
            <a {% if utilizado == total %}class=\"text-white text-decoration-none disabled\"{% endif %} href=\"nuevo\"class=\"text-white text-decoration-none\">
                <svg class=\"bi bi-file-earmark-plus mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z\" clip-rule=\"evenodd\"/>
                </svg> Nuevo archivo
            </a>
            <a href=\"panel\" class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                <svg class=\"bi bi-file-earmark-text mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z\"/>
                    <path d=\"M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z\"/>
                    <path fill-rule=\"evenodd\" d=\"M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z\"/>
                </svg> Mis archivos
            </a>
            <a href=\"logout\"class=\"text-white text-decoration-none\" style=\"display: block;margin-top: 30px;\">
                <svg class=\"bi bi-box-arrow-in-right mr-1\" width=\"1.5em\" height=\"1.5em\" viewBox=\"0 0 16 16\" fill=\"white\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z\"/>
                    <path fill-rule=\"evenodd\" d=\"M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z\"/>
                </svg> Cerrar sesión
            </a>
        {% endfor %}
    </div>
    <div class=\"container text-white mt-5\">
            <p class=\"text-center\">
                <svg class=\"bi bi-people-circle\" width=\"2em\" height=\"2em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 9a3 3 0 100-6 3 3 0 000 6z\" clip-rule=\"evenodd\"/>
                    <path fill-rule=\"evenodd\" d=\"M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z\" clip-rule=\"evenodd\"/>
                </svg>
            </p>
        <h4 class=\"text-center\">Mi cuenta</h4>
        <p class=\"text-center\">Desde aquí podrás editar la configuración de tu cuenta</p>
        <form class=\"container\">
            {# Editar email #}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"email\">Email:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" name=\"mail\" class=\"form-control\" value=\"{{ app.user.email }}\" readonly>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#email\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {# Editar usuario #}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"usuario\">Nombre de usuario:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" name=\"usuario\" class=\"form-control\" value=\"{{ app.user.username }}\" readonly>
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#usuario\">
                                <svg class=\"bi bi-pencil\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path fill-rule=\"evenodd\" d=\"M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {# Cambiar contraseña #}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group \">
                        <label for=\"usuario\">Contraseña actual:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"pass1\" id=\"pass1\" class=\"form-control boton\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass1\">
                                <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass1\">
                                    <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass1\">
                                    <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                    <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                    <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <label for=\"usuario\">Nueva contraseña:</label>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"pass2\" id=\"pass2\" class=\"form-control boton\" pattern=\".{8,}\" placeholder=\"Al menos 8 caracteres\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass2\">
                                <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass2\">
                                    <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                    <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass2\">
                                    <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                    <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                    <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                    <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6 mb-3\">
                    <button type=\"button\" class=\"btn btn-secondary\" id=\"c_pass\">Cambiar contraseña</button>
                </div>
            </div>
            {# Eliminar cuenta #}
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <div class=\"card border-danger mb-3 bg-light text-dark\" style=\"padding: 10px;width: 100%;\">
                            <div class=\"card-header\">Eliminar mi cuenta:</div>
                            <div class=\"card-body\" style=\"padding: 10px;\">
                                <p class=\"card-text\" style=\"padding: 10px;\"><strong class=\"text-danger\">Aviso:</strong> Si borras tu cuenta, se eliminarán todos tus archivos.</p>
                                <button type=\"button\" class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#eliminar_cuenta\">Eliminar cuenta</button>
                            </div>
                        </div>
                    </div>
                </div>

            {# No se puede cambiar la contraseña #}
            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"error_pass1\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-danger alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        La contraseña es incorrecta
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            {# No se puede eliminar la cuenta #}
            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"error_cuenta\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-danger alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        No se puedo eliminar su cuenta
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            {# Contraseña cambiada correctamente #}
            <div class=\"row justify-content-center\" style=\"display:none;\" id=\"pass_changed\">
                <div class=\"col-md-6\">
                    <div class=\"alert alert-info alert-dismissible  mx-auto mt-2 show fade\" role=\"alert\">
                        Contraseña cambiada correctamente
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {# Modal eliminar cuenta #}
    <section class=\"modal fade\" id=\"eliminar_cuenta\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Eliminar cuenta</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Introduce tu contraseña:</label>
                            <div class=\"input-group mb-3 rounded border border-secondary\">
                                <input type=\"password\" name=\"pass3\" id=\"pass3\" class=\"form-control boton\">
                                <div class=\"input-group-append\">
                                    <button class=\"btn btn-light boton\" type=\"button\" id=\"btn_pass3\">
                                        <svg class=\"bi bi-eye\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"show_icon_pass3\">
                                            <path fill-rule=\"evenodd\" d=\"M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z\" clip-rule=\"evenodd\"/>
                                            <path fill-rule=\"evenodd\" d=\"M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                        <svg class=\"bi bi-eye-slash oculto\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\" id=\"hide_icon_pass3\">
                                            <path d=\"M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 00-2.79.588l.77.771A5.944 5.944 0 018 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0114.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z\"/>
                                            <path d=\"M11.297 9.176a3.5 3.5 0 00-4.474-4.474l.823.823a2.5 2.5 0 012.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 01-4.474-4.474l.823.823a2.5 2.5 0 002.829 2.829z\"/>
                                            <path d=\"M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 001.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 018 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z\"/>
                                            <path fill-rule=\"evenodd\" d=\"M13.646 14.354l-12-12 .708-.708 12 12-.708.708z\" clip-rule=\"evenodd\"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-outline-danger\" id=\"eliminar\">Eliminar</button>
                        <input type=\"hidden\" id=\"usuario_eliminar\" value=\"{{ app.user.username }}\">
                        <input type=\"hidden\" id=\"usuario_id\" value=\"{{ app.user.id }}\">
                    </div>
                </form>
            </div>
        </div>
    </section>
    {# Modal email #}
    <section class=\"modal fade\" id=\"email\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Cambia tu correo electrónico</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-9\">
                                    <input type=\"email\" id=\"input_email\" class=\"form-control\" value=\"{{ app.user.email }}\" required>
                                </div>
                                <div class=\"col-1\">
                                    <span class=\"spinner-border\" role=\"status\" style=\"width: 1.5em; height: 1.5em; display: none;\" id=\"animacion\"></span>
                                    <svg id=\"no_valido\" class=\"bi bi-exclamation-circle\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"red\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                                        <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                                    </svg>
                                    <svg id=\"valido\" class=\"bi bi-check\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" id=\"cambiar_email\">Cambiar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {# Modal usuario #}
    <section class=\"modal fade\" id=\"usuario\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\">Cambia tu nombre de usuario</p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <form>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-9\">
                                    <input type=\"text\" id=\"input_usuario\" class=\"form-control\" value=\"{{ app.user.username }}\" required>

                                </div>
                                <div class=\"col-1\">
                                    <span class=\"spinner-border\" role=\"status\" style=\"width: 1.5em; height: 1.5em; display: none;\" id=\"animacion_u\"></span>
                                    <svg id=\"no_valido_u\" class=\"bi bi-exclamation-circle\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"red\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z\" clip-rule=\"evenodd\"/>
                                        <path d=\"M7.002 11a1 1 0 112 0 1 1 0 01-2 0zM7.1 4.995a.905.905 0 111.8 0l-.35 3.507a.552.552 0 01-1.1 0L7.1 4.995z\"/>
                                    </svg>
                                    <svg id=\"valido_u\" class=\"bi bi-check\" style=\"width: 1.5em; height: 1.5em; display: none;\" viewBox=\"0 0 16 16\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <path fill-rule=\"evenodd\" d=\"M13.854 3.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3.5-3.5a.5.5 0 11.708-.708L6.5 10.293l6.646-6.647a.5.5 0 01.708 0z\" clip-rule=\"evenodd\"/>
                                    </svg>
                                </div>
                            </div>
                            <small>Mínimo 6 caracteres sin caracteres especiales</small>
                        </div>
                    </div>
                    <div class=\"modal-footer\">

                        <button type=\"button\" class=\"btn btn-secondary\" id=\"cambiar_usuario\">Cambiar</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</main>
</body>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('js/accion.js') }}\"></script>
{% endblock %}", "perfil/index.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\perfil\\index.html.twig");
    }
}
