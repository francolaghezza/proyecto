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

/* security/login.html.twig */
class __TwigTemplate_cee54039a9cdaf60e2c40428119d61d31a08fc0241cdf19cdd6b6d9040fd3473 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Iniciar sesión";
        
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
        echo "    <body class=\"login\">

    ";
        // line 11
        echo "    <header class=\"row\">
        <!--Menú de navegación-->
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                <button class=\"navbar-toggler ml-auto btn-responsive\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <nav class=\"navbar-nav\">
                        <a href=\"/\" class=\"nav-link\" id=\"home\">Home</a>
                        <a data-toggle=\"modal\" data-target=\"#privacidad\" title=\"Política de privacidad\" href=\"#\" class=\"nav-link\">Privacidad</a>
                        <a href=\"#\" class=\"nav-link\">Manual del usuario</a>
                    </nav>
                    <!--Botones de inicio de sesión o registro-->
                    <form class=\"form-inline ml-auto\">
                        <a class=\"btn bg-light btn-md mr-2 redondo\" href=\"/login\">Login</a>
                        <a class=\"btn bg-light btn-md redondo\" href=\"/registro\">Registro</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    ";
        // line 36
        echo "    <section class=\"modal fade\" id=\"privacidad\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\"><strong>Política de Privacidad</strong></p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <p>El presente Política de Privacidad establece los términos en que Rasprivate Cloud
                        usa y protege la información que es proporcionada por sus usuarios al momento de
                        utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios.
                        Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado,
                        lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento.
                        Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le
                        recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
                    </p>
                    <p>
                        <strong>Información que es recogida</strong>
                    </p>
                    <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su
                        dirección de correo electrónico.</p>
                    <p>
                        <strong>Uso de la información recogida</strong>
                    </p>
                    <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener
                        un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros servicios. &nbsp;
                    </p>
                    <p>Rasprivate Cloud está altamente comprometido para cumplir con el compromiso de mantener su información segura.
                        Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.
                    </p>
                    <p>
                        <strong>Enlaces a Terceros</strong>
                    </p>
                    <p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces
                        y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los
                        términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias
                        políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.
                    </p>
                    <p>
                        <strong>Control de su información personal</strong>
                    </p>
                    <p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido
                        por un juez con un orden judicial.
                    </p>
                    <p>Rasprivate Cloud Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.
                    </p>
                    <p>Esta politica de privacidad se han generado en
                        <a href=\"https://politicadeprivacidadplantilla.com/\" target=\"_blank\">politicadeprivacidadplantilla.com</a>.<br>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <p>Rasprivate Cloud, 2020</p>
                </div>
            </div>
        </div>
    </section>
<div class=\"container mt-5 \">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h1 class=\"h3 mb-3 font-weight-normal text-center\">Iniciar sesión</h1>
            <form method=\"post\" class=\"\">
                ";
        // line 97
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 97, $this->source); })())) {
            // line 98
            echo "                    <div class=\"alert alert-danger\">Usuario o contraseña incorrectos</div>
                ";
        }
        // line 100
        echo "
                ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            echo "                    <div class=\"mb-3\">
                       ¿No eres ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "username", [], "any", false, false, false, 103), "html", null, true);
            echo " ? <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar sesión</a>
                    </div>
                ";
        }
        // line 106
        echo "                <label for=\"inputEmail\" class=\"text-white\">Email</label>
                <input type=\"email\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control mb-2\" required>
                <label for=\"inputPassword\" class=\"text-white\">Contraseña</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control mb-3\" required>
                <div class=\"text-right\"><a class=\"text-dark text-decoration-none\" href=\"reset\">¿Has olvidado tu contraseña?</a></div>
                <button class=\"btn btn-dark mb-3\" type=\"submit\">
                    Entrar
                </button>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            </form>
            <div class=\"text-white\">¿Todavía no tienes una cuenta? <strong><a class=\"text-white text-decoration-none\" href=\"registro\">Crea una nueva</a></strong></div>
        </div>
    </div>
    <a class=\"ref\"
       href=\"https://unsplash.com/@srook?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge\"
       target=\"_blank\" rel=\"noopener noreferrer\" title=\"Autor: Tomasz Sroka\">
                        <span style=\"display:inline-block;padding:2px 3px\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white\" viewBox=\"0 0 32 32\">
                                <title>unsplash-logo</title>
                                <path d=\"M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z\"></path>
                            </svg>
                        </span>
        <span style=\"display:inline-block;padding:2px 3px\">Tomasz Sroka</span>
    </a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 114,  230 => 107,  227 => 106,  219 => 103,  216 => 102,  214 => 101,  211 => 100,  207 => 98,  205 => 97,  142 => 36,  116 => 11,  112 => 8,  102 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Iniciar sesión{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}
{% block body %}
    <body class=\"login\">

    {# Menú de navegación #}
    <header class=\"row\">
        <!--Menú de navegación-->
        <div class=\"container mt-5\">
            <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark fixed-top\">
                <a class=\"navbarbrand\"><img src=\"img/logo.png\" alt=\"logo\"></a>
                <button class=\"navbar-toggler ml-auto btn-responsive\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <nav class=\"navbar-nav\">
                        <a href=\"/\" class=\"nav-link\" id=\"home\">Home</a>
                        <a data-toggle=\"modal\" data-target=\"#privacidad\" title=\"Política de privacidad\" href=\"#\" class=\"nav-link\">Privacidad</a>
                        <a href=\"#\" class=\"nav-link\">Manual del usuario</a>
                    </nav>
                    <!--Botones de inicio de sesión o registro-->
                    <form class=\"form-inline ml-auto\">
                        <a class=\"btn bg-light btn-md mr-2 redondo\" href=\"/login\">Login</a>
                        <a class=\"btn bg-light btn-md redondo\" href=\"/registro\">Registro</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    {# Política de privacidad #}
    <section class=\"modal fade\" id=\"privacidad\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\"><strong>Política de Privacidad</strong></p>
                    <button type=\"button\" data-dismiss=\"modal\" class=\"close\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <p>El presente Política de Privacidad establece los términos en que Rasprivate Cloud
                        usa y protege la información que es proporcionada por sus usuarios al momento de
                        utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios.
                        Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado,
                        lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento.
                        Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le
                        recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.
                    </p>
                    <p>
                        <strong>Información que es recogida</strong>
                    </p>
                    <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su
                        dirección de correo electrónico.</p>
                    <p>
                        <strong>Uso de la información recogida</strong>
                    </p>
                    <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener
                        un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros servicios. &nbsp;
                    </p>
                    <p>Rasprivate Cloud está altamente comprometido para cumplir con el compromiso de mantener su información segura.
                        Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.
                    </p>
                    <p>
                        <strong>Enlaces a Terceros</strong>
                    </p>
                    <p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces
                        y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los
                        términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias
                        políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.
                    </p>
                    <p>
                        <strong>Control de su información personal</strong>
                    </p>
                    <p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido
                        por un juez con un orden judicial.
                    </p>
                    <p>Rasprivate Cloud Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.
                    </p>
                    <p>Esta politica de privacidad se han generado en
                        <a href=\"https://politicadeprivacidadplantilla.com/\" target=\"_blank\">politicadeprivacidadplantilla.com</a>.<br>
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <p>Rasprivate Cloud, 2020</p>
                </div>
            </div>
        </div>
    </section>
<div class=\"container mt-5 \">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h1 class=\"h3 mb-3 font-weight-normal text-center\">Iniciar sesión</h1>
            <form method=\"post\" class=\"\">
                {% if error %}
                    <div class=\"alert alert-danger\">Usuario o contraseña incorrectos</div>
                {% endif %}

                {% if app.user %}
                    <div class=\"mb-3\">
                       ¿No eres {{ app.user.username }} ? <a href=\"{{ path('app_logout') }}\">Cerrar sesión</a>
                    </div>
                {% endif %}
                <label for=\"inputEmail\" class=\"text-white\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control mb-2\" required>
                <label for=\"inputPassword\" class=\"text-white\">Contraseña</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control mb-3\" required>
                <div class=\"text-right\"><a class=\"text-dark text-decoration-none\" href=\"reset\">¿Has olvidado tu contraseña?</a></div>
                <button class=\"btn btn-dark mb-3\" type=\"submit\">
                    Entrar
                </button>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            </form>
            <div class=\"text-white\">¿Todavía no tienes una cuenta? <strong><a class=\"text-white text-decoration-none\" href=\"registro\">Crea una nueva</a></strong></div>
        </div>
    </div>
    <a class=\"ref\"
       href=\"https://unsplash.com/@srook?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge\"
       target=\"_blank\" rel=\"noopener noreferrer\" title=\"Autor: Tomasz Sroka\">
                        <span style=\"display:inline-block;padding:2px 3px\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white\" viewBox=\"0 0 32 32\">
                                <title>unsplash-logo</title>
                                <path d=\"M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z\"></path>
                            </svg>
                        </span>
        <span style=\"display:inline-block;padding:2px 3px\">Tomasz Sroka</span>
    </a>
</div>
{% endblock %}", "security/login.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\security\\login.html.twig");
    }
}
