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

/* booking/book.html.twig */
class __TwigTemplate_9b7da988c809314c00487d37801b72ae18ae83472f347694253a4128872ccdcd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "booking/book.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Réserver l'annonce ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " !";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" integrity=\"sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==\" crossorigin=\"anonymous\" />
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"container\">
        <h1>Réserver l'annonce : <em>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</em></h1>

        <p>Vous êtes sur le point de réserver le bien de <strong>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "author", [], "any", false, false, false, 12), "fullName", [], "any", false, false, false, 12), "html", null, true);
        echo "</strong>, dites nous tout, on s'occupe du reste !</p>
    
        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

        <div class=\"alert alert-light\">
            <h4>Commencez par nous dire quelles sont les dates qui vous intéressent !</h4>
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "startDate", [], "any", false, false, false, 20), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "endDate", [], "any", false, false, false, 23), 'row');
        echo "
                </div>
            </div>
            <h4 class=\"mt-2\">Montant du séjour : <span id=\"amount\">...</span>&euro;</h4>
            <span id=\"days\">0</span> nuit(s) à ";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "price", [], "any", false, false, false, 27), 2, ",", " "), "html", null, true);
        echo "&euro; par nuit

            <h4 class=\"mt-3\">Vous avez un commentaire ?</h4>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, false, 30), 'row');
        echo "
        </div>


        <h2>Vous avez terminé !!</h2>
        <p>Vacance de rêve ? Hébergement pour le boulot ? Peu importe, on est avec vous !</p>

        <button type=\"submit\" class=\"btn btn-outline-primary\">Je réserve !</button>

        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>

";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\" integrity=\"sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==\" crossorigin=\"anonymous\"></script>

<script>
";
        // line 49
        echo "
    \$(document).ready(function(){
        \$('#booking_startDate, #booking_endDate').datepicker({
            format: 'dd/mm/yyyy',
            datesDisabled: [
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "notAvailableDays", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 55
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "format", [0 => "d/m/Y"], "method", false, false, false, 55), "html", null, true);
            echo "\",
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            ], 
            startDate: new Date()
        });
        \$('#booking_startDate, #booking_endDate').on('change', calculateAmount);
    });

    function calculateAmount(){
        // on récupère les dates
        //On utilise la fonction replace car la date inscrite dans notre datepicker n'est pas au format de la class date, on va donc utiliser une expression régulière pour capturer les valeurs et les remodeler avec replace
        // 18/09/2018
        // (\\d+)\\/(\\d+)\\/(\\d{4})
        const endDate = new Date (\$('#booking_endDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));
        const startDate = new Date (\$('#booking_startDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/, '\$3-\$2-\$1'));

        if(startDate && endDate && startDate < endDate){

            const DAY_TIME = 24 * 60 *60 * 1000; // represente 1 journée en miliseconde
            const interval = endDate.getTime() - startDate.getTime();
            const days = interval / DAY_TIME;
            const amount = days * ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ad"] ?? null), "price", [], "any", false, false, false, 76), "html", null, true);
        echo ";

            \$('#days').text(days);
            \$('#amount').text(amount.toLocaleString('fr-FR'))
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "booking/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 76,  161 => 57,  152 => 55,  148 => 54,  141 => 49,  136 => 45,  132 => 44,  124 => 39,  112 => 30,  106 => 27,  99 => 23,  93 => 20,  84 => 14,  79 => 12,  74 => 10,  71 => 9,  67 => 8,  62 => 5,  58 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "booking/book.html.twig", "/Applications/MAMP/htdocs/lineup/templates/booking/book.html.twig");
    }
}
