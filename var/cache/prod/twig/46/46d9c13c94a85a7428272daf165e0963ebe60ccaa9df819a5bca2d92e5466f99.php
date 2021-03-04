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

/* ad/new.html.twig */
class __TwigTemplate_e760bd362910ae4ceeca243a8a8f09314e007eae1486749076c155a3158776a2 extends \Twig\Template
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
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "ad/_collection.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ad/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Création d'une annonce ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"container\">
        <h1 class=\"my-5\">Créer une nouvelle annonce</h1>

        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2>Informations générales</h2>
                    <hr>
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 18), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "slug", [], "any", false, false, false, 19), 'row');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 20), 'row');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rooms", [], "any", false, false, false, 21), 'row');
        echo "
                </div>

            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2>Image de l'annonce</h2>
                    <hr>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coverImage", [], "any", false, false, false, 29), 'row');
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 30), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"alert alert-light\">
                    <h2>Détails de l'annonce</h2>
                    <hr>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "introduction", [], "any", false, false, false, 39), 'row');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 40), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"alert alert-success clearfix\">
            <h2 class=\"alert-heading\">Sauvegarder mon annonce</h2>
            <p>Vous êtes sur le point de créer votre annonce, nous sommes fière de vous ! </p>
            <button type=\"submit\" class=\"btn btn-primary float-right\"><i class=\"fas fa-check\"></i> Créer une nouvelle annonce</button>
            
        </div>


        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "<script src=\"/js/ad.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "ad/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  141 => 56,  134 => 52,  119 => 40,  115 => 39,  103 => 30,  99 => 29,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  67 => 12,  62 => 9,  58 => 8,  51 => 3,  46 => 1,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/new.html.twig", "/Applications/MAMP/htdocs/lineup/templates/ad/new.html.twig");
    }
}
