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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_d155174b036d226d3db723c226c4b12e6cb2137fe59fc97dbdee668a50fa1223 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tableau de bord";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-primary text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo " utilisateurs inscrits</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-dark text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-hotel fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 30
        echo twig_escape_filter($this->env, ($context["ad"] ?? null), "html", null, true);
        echo " annonces postées</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-warning text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-folder fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 44
        echo twig_escape_filter($this->env, ($context["booking"] ?? null), "html", null, true);
        echo "réservations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card bg-success text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-comment fa-3x\"></i>
                        </div>
                        <div class=\"col-8\">
                            <h4 class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
        echo " avis</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"alert alert-success\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i> Les annonces populaires</h2>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Proprio</th>
                            <th>Moyenne</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestAds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 81
            echo "                            
                        
                        <tr>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                            <td>   
                                <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", [], "any", false, false, false, 86), "html", null, true);
            echo "\" alt=\"\" class=\"avatar avatar-micro\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 86), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 86), "html", null, true);
            echo "
                            
                            </td>
                            <td class=\"text-center\"><span class=\"badge badge-dark\">";
            // line 89
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "note", [], "any", false, false, false, 89), 1, ",", " "), "html", null, true);
            echo "</span></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>
                </table>

                
            </div>
        </div>
        <div class=\"col\">
            <div class=\"alert alert-danger\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> Les pires annonces </h2>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Proprio</th>
                            <th>Moyenne</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["worstAds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 112
            echo "                            
                        
                        <tr>
                            <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
                            <td>   
                                <img src=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", [], "any", false, false, false, 117), "html", null, true);
            echo "\" alt=\"\" class=\"avatar avatar-micro\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", [], "any", false, false, false, 117), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", [], "any", false, false, false, 117), "html", null, true);
            echo "
                            
                            </td>
                            <td class=\"text-center\"><span class=\"badge badge-dark\">";
            // line 120
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "note", [], "any", false, false, false, 120), 1, ",", " "), "html", null, true);
            echo "</span></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </tbody>
                </table>

                
            </div>
        
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 123,  224 => 120,  214 => 117,  209 => 115,  204 => 112,  200 => 111,  179 => 92,  170 => 89,  160 => 86,  155 => 84,  150 => 81,  146 => 80,  121 => 58,  104 => 44,  87 => 30,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard/index.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/dashboard/index.html.twig");
    }
}
