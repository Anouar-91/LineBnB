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

/* admin/ad/edit.html.twig */
class __TwigTemplate_8f19f8749321b3d5c8b7c8421615f1831ddd5e9e34291c654983c2ab019320ab extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/ad/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"container\">
        <h1>Modification de l'annonce ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Corriger l'annonce ?</h4>
                    </div>
                    <div class=\"card-body\">
                         ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                         <button type=\"submit\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-check\"></i>
                            Enregistrer les modifications
                         </button>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les réservations</h4>
                    </div>  
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>   
                                    <th>Id</th>
                                    <th>Voyageur</th>
                                    <th>Date de réservation</th>
                                    <th></th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "bookings", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 45
            echo "                                <tr>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "booker", [], "any", false, false, false, 47), "fullName", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "createdAt", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card bg-light  mt-5\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les commentaires</h4>
                    </div>  
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>   
                                    <th>Id</th>
                                    <th>Voyageur</th>
                                    <th>Note</th>
                                    <th>Commentaire</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "comments", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 77
            echo "                                <tr>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 79), "fullName", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"#\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
        
        ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>


";
    }

    public function getTemplateName()
    {
        return "admin/ad/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 97,  192 => 88,  178 => 81,  174 => 80,  170 => 79,  166 => 78,  163 => 77,  159 => 76,  136 => 55,  122 => 48,  118 => 47,  114 => 46,  111 => 45,  107 => 44,  79 => 19,  67 => 10,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/ad/edit.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/ad/edit.html.twig");
    }
}
