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

/* admin/comment/index.html.twig */
class __TwigTemplate_ced4ac92bfa89a8c3035820d0c85898616bb8a5ea4f0a351207cbc335807d12e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/comment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Administration des commentaires !";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid\">
    <h1 class=\"my-5\">Gestion des commentaires</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th class=\"text-center\">Auteur</th>
                <th>Contenu</th>
                <th>Note</th>
                <th>Annonce</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-center\"> 
                        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 29), "picture", [], "any", false, false, false, 29), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"avatar avatar-micro mr-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 32), "html", null, true);
            echo "
                    </td>
                    <td>
                        <span class=\"badge badge-dark\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                    </td>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "ad", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
            echo "
                    </td>


                    <td>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ads_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"> <i class=\"fas fa-edit\"></i> </a>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"> <i class=\"fas fa-trash\"></i> </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
    ";
        // line 50
        $this->loadTemplate("admin/partials/pagination.html.twig", "admin/comment/index.html.twig", 50)->display(twig_array_merge($context, ["route" => "admin_comment_index"]));
        // line 51
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "admin/comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 51,  142 => 50,  138 => 48,  128 => 44,  124 => 43,  116 => 38,  110 => 35,  104 => 32,  94 => 29,  88 => 26,  83 => 24,  80 => 23,  76 => 22,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/comment/index.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/comment/index.html.twig");
    }
}
