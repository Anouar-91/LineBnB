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

/* admin/base.html.twig */
class __TwigTemplate_34bddd2f10c051286aba9549b2b176ba23be669636709501bfb7afb0b3c0539d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>LineBnB - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
";
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"/css/app.css\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        
    </head>
    <body>

        ";
        // line 18
        $this->loadTemplate("admin/partials/header.html.twig", "admin/base.html.twig", 18)->display($context);
        // line 19
        echo "

        
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->loadTemplate("admin/partials//footer.html.twig", "admin/base.html.twig", 25)->display($context);
        // line 26
        echo "
         
        
        <script src=\"/js/jquery.min.js\"></script>
        <script src=\"/js/popper.min.js\"></script>
        <script src=\"/js/bootstrap.min.js\"></script>



        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>

       
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        ";
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  119 => 23,  115 => 22,  111 => 12,  107 => 11,  100 => 5,  92 => 36,  90 => 35,  79 => 26,  77 => 25,  74 => 24,  72 => 22,  67 => 19,  65 => 18,  58 => 13,  56 => 11,  53 => 10,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/base.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/base.html.twig");
    }
}
