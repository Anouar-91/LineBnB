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

/* admin/partials/pagination.html.twig */
class __TwigTemplate_f654b08612eaa013e79fe46299fc5b15866535dee5b12f0400c05e83b41bb95b extends \Twig\Template
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
        echo "    <div class=\"d-flex justify-content-center\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 3
        if ((($context["page"] ?? null) == 1)) {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), ["page" => (($context["page"] ?? null) - 1)]), "html", null, true);
        echo "\">&laquo;</a>
            </li>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "                

            <li class=\"page-item ";
            // line 9
            if ((($context["page"] ?? null) == $context["i"])) {
                echo " active ";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
            <li class=\"page-item ";
        // line 14
        if ((($context["page"] ?? null) == ($context["pages"] ?? null))) {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), ["page" => (($context["page"] ?? null) + 1)]), "html", null, true);
        echo "\">&raquo;</a>
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "admin/partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  80 => 14,  77 => 13,  66 => 10,  60 => 9,  56 => 7,  52 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/partials/pagination.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/partials/pagination.html.twig");
    }
}
