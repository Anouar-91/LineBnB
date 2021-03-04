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

/* admin/account/login.html.twig */
class __TwigTemplate_7c72579c017ecc97bf293995ce469ef64da0fa782008c343b59d0945c5406a35 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <title>Connexion à l'Administration</title>
    <style> 
        body{
            display: flex;
            justify-content: center;
            height : 100vh;
        }
        .card{
            margin-top : 10%;
        }
    </style>
</head>
<body>
<div class=\"col-md-4\">
    <div class=\"card bg-light\">
        <div class=\"card-header\">
           <h4 class=\"card-title\">
                <i class=\"fas fa-lock\"></i>
                Connexion à l'Administration
           </h4> 
        </div>
        <div class=\"card-body\">
        ";
        // line 31
        if (($context["hasError"] ?? null)) {
            // line 32
            echo "            <div class=\"alert alert-warning\">
                <p>Les informations que vous avez fournies ne sont pas bonnes.</p>
            </div>
        ";
        }
        // line 36
        echo "            <form  method=\"post\">
                <div class=\"form-group\">
                    <label for=\"_username\">Email</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Adresse email...\" name=\"_username\" value=";
        // line 39
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo ">
                    <label for=\"_password\">Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe ...\" name=\"_password\">
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-lock-open\"></i> Connexion !</button>
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-link\">
                        <i class=\"fas fa-arrow-circle-left\"></i>
                        Retour au site
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  82 => 39,  77 => 36,  71 => 32,  69 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/account/login.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/account/login.html.twig");
    }
}
