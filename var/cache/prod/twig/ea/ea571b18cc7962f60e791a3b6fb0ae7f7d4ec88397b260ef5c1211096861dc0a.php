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

/* ad/_collection.html.twig */
class __TwigTemplate_1ad6b2a3a4c755c7df077a3470b2d30c1736ba441fd8d4608787f7b5d4118264 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_ad_images_widget' => [$this, 'block__ad_images_widget'],
            '_ad_images_entry_row' => [$this, 'block__ad_images_entry_row'],
            '_ad_images_entry_widget' => [$this, 'block__ad_images_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('_ad_images_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('_ad_images_entry_row', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_ad_images_entry_widget', $context, $blocks);
    }

    // line 2
    public function block__ad_images_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        // line 3
        echo "    <p>Ici, vous pouvez ajoputer vos propres images : </p>

    <input type=\"hidden\" id=\"widgets-counter\" value=\"0\">

    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <div class=\"form-group\">
        <button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i>
            Ajouter une image
            </button>
    </div>

";
    }

    // line 18
    public function block__ad_images_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        // line 19
        echo "
     ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

";
    }

    // line 24
    public function block__ad_images_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <div class=\"form-group\" id=\"block_";
        // line 25
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        <div class=\"row\">
            <div class=\"col-10\">
                <div class=\"row\">
                    <div class=\"col\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 30), 'widget');
        echo "
                         ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 31), 'errors');
        echo " ";
        // line 32
        echo "                    </div>
                    <div class=\"col\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "caption", [], "any", false, false, false, 34), 'widget');
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "caption", [], "any", false, false, false, 35), 'errors');
        echo " ";
        // line 36
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-2\">
                <button type=\"button\" data-action=\"delete\" data-target=\"#block_";
        // line 40
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-danger\"> X </button>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ad/_collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  129 => 36,  126 => 35,  122 => 34,  118 => 32,  115 => 31,  111 => 30,  103 => 25,  97 => 24,  90 => 20,  87 => 19,  82 => 18,  68 => 7,  62 => 3,  57 => 2,  53 => 24,  50 => 23,  48 => 18,  45 => 17,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/_collection.html.twig", "/Applications/MAMP/htdocs/lineup/templates/ad/_collection.html.twig");
    }
}
