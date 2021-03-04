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

/* user/index.html.twig */
class __TwigTemplate_65f7086c86559492e1a6c6ec0e4dc9a40d8dac190c7baf0d2719781f57ac41e3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-3 text-center\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "picture", [], "any", false, false, false, 9), "html", null, true);
        echo "\"  class=\"avatar mb-3\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
                <br>
                <span class=\"badge badge-primary\">";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ads", [], "any", false, false, false, 11)), "html", null, true);
        echo " annonces</span>
            </div>

            <div class=\"col-9\">
                <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
                ";
        // line 16
        if ((($context["user"] ?? null) === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16))) {
            echo " ";
            // line 17
            echo "                    <div class=\"mt-3\">
                        <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"btn btn-primary mr-2 mb-2\">Modifier mes informations</a>
                        <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
            echo "\" class=\"btn btn-primary mr-2 mb-2\">Modifier mon mot de passe</a>
                    </div>
                ";
        }
        // line 22
        echo "            </div>
        </div>
        ";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "description", [], "any", false, false, false, 24);
        echo "

        <hr>

        <h2>Les annonces de ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 28), "html", null, true);
        echo "</h2>

        ";
        // line 30
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ads", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            echo "            <div class=\"row\">
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ads", [], "any", false, false, false, 32));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 33
                echo "                    ";
                $this->loadTemplate("ad/_ad.html.twig", "user/index.html.twig", 33)->display($context);
                // line 34
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </div>

        ";
        } else {
            // line 38
            echo "            <div class=\"alert alert-warning\">
                <p>
                    <strong>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 40), "html", null, true);
            echo "</strong> n'a pas d'annonce sur le site !
                </p>
            </div>
        ";
        }
        // line 44
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 44,  162 => 40,  158 => 38,  153 => 35,  139 => 34,  136 => 33,  119 => 32,  116 => 31,  114 => 30,  109 => 28,  102 => 24,  98 => 22,  92 => 19,  88 => 18,  85 => 17,  82 => 16,  78 => 15,  71 => 11,  64 => 9,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/Applications/MAMP/htdocs/lineup/templates/user/index.html.twig");
    }
}
