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

/* admin/comment/edit.html.twig */
class __TwigTemplate_6a424b2db7eacdb7c62139ed2b16eee0bba277e78804ac321e304877e07418c9 extends \Twig\Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/comment/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification du commentaire n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"container\">
        <h1 class=\"my-5\">Modification du commentaire n°";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

        
            <div class=\"alert alert-info\">
                <p><strong>Annonce liée</strong>  : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "ad", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                <p><strong>Auteur</strong> : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "author", [], "any", false, false, false, 13), "fullName", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                <p><strong>Date de création</strong> : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "createdAt", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        echo "</p>
                <p><strong>Note donnée</strong> : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "rating", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            </div>
        

  
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-check\"></i>
                Enregistrer les modification !
            </button>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>


";
    }

    public function getTemplateName()
    {
        return "admin/comment/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  94 => 22,  89 => 20,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/comment/edit.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/comment/edit.html.twig");
    }
}
