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

/* ad/show.html.twig */
class __TwigTemplate_cbfdefde5a526734e8be14e222e59a68a5e5fed2cd43ffa94f76f0904e5cb2ec extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    <div class=\"ad-title\" style=\"background-image : url(";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "coverImage", [], "any", false, false, false, 10), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
            <p class=\"h2\">
                <strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "rooms", [], "any", false, false, false, 14), "html", null, true);
        echo " chambres</strong> pour <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "price", [], "any", false, false, false, 14), 2, ",", " "), "html", null, true);
        echo "€</strong> par nuit
            </p>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_create", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Réserver !</a>

            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18) && (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18) == twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "author", [], "any", false, false, false, 18)))) {
            // line 19
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm (`Êtes-vous sûr de vouloir supprimer l'annonce : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
            echo " ?` )\">Supprimer l'annonce</a>

            ";
        }
        // line 23
        echo "        </div>
    </div>

    <div class=\"container\">
       <div class=\"row\">
            <div class=\"col-md-8 mb-3\">
                ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "content", [], "any", false, false, false, 29);
        echo "

                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "images", [], "any", false, false, false, 33));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 34
            echo "                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 34)) {
                echo "active ";
            }
            echo "\"></li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </ol>
                <div class=\"carousel-inner\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "images", [], "any", false, false, false, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 39
            echo "                    <div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 39)) {
                echo "active ";
            }
            echo "\">
                    <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 40), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                     <div class=\"carousel-caption d-none d-md-block\">
                        <h5>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
                        <p>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                    </div>
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                </div>
                <hr>

                ";
        // line 59
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "comments", [], "any", false, false, false, 59)) > 0)) {
            // line 60
            echo "                    <h2 class=\"mb-3\">Commentaires de nos voyageurs :</h2>
                    <div class=\"alert alert-info\">
                        <h4 class=\"alert alert-heading text-center\">
                            <div class=\"row align-items-center\">
                                <div class=\"col\">
                                    Note Global par nos voyageurs<br>
                                    
                                </div>
                                <div class=\"col\">
                                    ";
            // line 69
            $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 69)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "avgRatings", [], "any", false, false, false, 69)]));
            echo "<br>
                                    <small>Calculée sur ";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "comments", [], "any", false, false, false, 70)), "html", null, true);
            echo " avis !</small>
                                </div>
                            </div>
                        </h4>
                    </div>
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "comments", [], "any", false, false, false, 75));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 76
                echo "                        <div class=\"bg-light rounded mb-3 py-3 px-3\">
                            <strong>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 77), "firstName", [], "any", false, false, false, 77), "html", null, true);
                echo "</strong> a dit :
                            <blockquote>
                                ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 79), "html", null, true);
                echo "
                            </blockquote>
                            <strong>Note donnée : </strong> 
                            ";
                // line 82
                $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 82)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 82)]));
                // line 83
                echo "                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                    ";
        } else {
            // line 86
            echo "                        <h2>Cette annonce n'a pas de commentaires ....</h2>
                ";
        }
        // line 88
        echo "            </div>
            <div class=\"col\">
                ";
        // line 90
        $context["a"] = twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "author", [], "any", false, false, false, 90);
        // line 91
        echo "                <div class=\"row\">
                    <div class=\"col-4 mr-3\">
                        <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "slug", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "author", [], "any", false, false, false, 94), "picture", [], "any", false, false, false, 94), "html", null, true);
        echo "\" alt=\"avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "FullName", [], "method", false, false, false, 94), "html", null, true);
        echo "\" class=\"avatar avatar-medium\">
                        </a>
                    </div>
                    <div class=\"col\">
                        <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "slug", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\" style=\"text-decoration : none\">
                            <h3>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "FullName", [], "method", false, false, false, 99), "html", null, true);
        echo "</h3>
                        </a>
                        <span class=\"badge badge-primary\">";
        // line 101
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "ads", [], "any", false, false, false, 101)), "html", null, true);
        echo " annonces</span>
                    </div>
                </div> 
                ";
        // line 104
        echo twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "description", [], "any", false, false, false, 104);
        echo "
         
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 104,  338 => 101,  333 => 99,  329 => 98,  320 => 94,  316 => 93,  312 => 91,  310 => 90,  306 => 88,  302 => 86,  299 => 85,  284 => 83,  282 => 82,  276 => 79,  271 => 77,  268 => 76,  251 => 75,  243 => 70,  239 => 69,  228 => 60,  226 => 59,  212 => 47,  194 => 43,  190 => 42,  185 => 40,  178 => 39,  161 => 38,  157 => 36,  136 => 34,  119 => 33,  112 => 29,  104 => 23,  96 => 20,  91 => 19,  89 => 18,  84 => 16,  77 => 14,  72 => 12,  67 => 10,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ad/show.html.twig", "/Applications/MAMP/htdocs/lineup/templates/ad/show.html.twig");
    }
}
