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

/* booking/show.html.twig */
class __TwigTemplate_acd3656daa19ac20a183af724f647b3f1c0386fc86bbfa759638569e199db982 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Réservation n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["ad"] = twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "ad", [], "any", false, false, false, 6);
        // line 7
        $context["author"] = twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "author", [], "any", false, false, false, 7);
        // line 8
        echo "    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation n°";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "withAlert"], "method", false, false, false, 11)) {
            // line 12
            echo "            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre réservation auprès de <strong> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "fullName", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></strong> pour l'annonce <strong><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></strong>
                    a bien été prise en compte !
                </p>
            </div>
        ";
        }
        // line 20
        echo "        <div class=\"row\">
            <div class=\"col\">

                <div class=\"alert alert-light\">
                    <h2>Détails</h2>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">Numéro</dt>
                        <dd class=\"col-md-8\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "startDate", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "endDate", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "duration", [], "any", false, false, false, 33), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Montont total</dt>
                        <dd class=\"col-md-8\">";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "amount", [], "any", false, false, false, 35), 2, ",", " "), "html", null, true);
        echo "&euro;</dd>
                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 37), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
                    </dl>
                    <hr>

                    <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-3\">
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "ad", [], "any", false, false, false, 44), "author", [], "any", false, false, false, 44), "picture", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "ad", [], "any", false, false, false, 44), "author", [], "any", false, false, false, 44), "fullname", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-9\">
                            <h4>
                                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "slug", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "fullName", [], "any", false, false, false, 48), "html", null, true);
        echo "</a>
                            </h4>
                            <span class=\"badge badge-primary\">";
        // line 50
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "ads", [], "any", false, false, false, 50)), "html", null, true);
        echo " annonces</span>
                        </div>
                    </div>
                    ";
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "description", [], "any", false, false, false, 53);
        echo "
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "slug", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'informations sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "firstName", [], "any", false, false, false, 54), "html", null, true);
        echo "</a>
                </div>
                <div class=\"alert alert-light\">
                <h2 class=\"alert-heading\" id=\"comment\">Votre avis compte !</h2>
                ";
        // line 58
        if ((twig_date_converter($this->env) > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "endDate", [], "any", false, false, false, 58)))) {
            // line 59
            echo "                    ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "ad", [], "any", false, false, false, 59), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 59)], "method", false, false, false, 59);
            // line 60
            echo "                    ";
            if ( !(null === ($context["comment"] ?? null))) {
                // line 61
                echo "                        <blockquote>
                            ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "content", [], "any", false, false, false, 62), "html", null, true);
                echo "
                        </blockquote>
                        <strong>Note : </strong> ";
                // line 64
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 64)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "rating", [], "any", false, false, false, 64)]));
                // line 65
                echo "                    ";
            } else {
                // line 66
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
                echo "
                        ";
                // line 67
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
                        <button type=\"submit\" class=\"btn btn-outline-primary\">Confirmer !</button>
                        ";
                // line 69
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
                echo "
                    ";
            }
            // line 71
            echo "                ";
        } else {
            // line 72
            echo "                    <p>Vous ne pourrez pas noter cette annonce tant que vous n'avez pas effectué votre voyage.</p>
                ";
        }
        // line 74
        echo "                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert heading\">Votre hébergement</h2>
                    <h4>
                        <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 80)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 80), "html", null, true);
        echo "</a>
                    </h4>

                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "coverImage", [], "any", false, false, false, 83), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 83), "html", null, true);
        echo "\" class=\"img-fluid mb-3\">

                    ";
        // line 85
        echo twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "content", [], "any", false, false, false, 85);
        echo "

                    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\" class=\"btn btn-outline-primary\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 87,  237 => 85,  230 => 83,  222 => 80,  214 => 74,  210 => 72,  207 => 71,  202 => 69,  197 => 67,  192 => 66,  189 => 65,  187 => 64,  182 => 62,  179 => 61,  176 => 60,  173 => 59,  171 => 58,  162 => 54,  158 => 53,  152 => 50,  145 => 48,  136 => 44,  126 => 37,  121 => 35,  116 => 33,  111 => 31,  106 => 29,  101 => 27,  92 => 20,  78 => 15,  73 => 12,  71 => 11,  66 => 9,  63 => 8,  61 => 7,  59 => 6,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "booking/show.html.twig", "/Applications/MAMP/htdocs/lineup/templates/booking/show.html.twig");
    }
}
