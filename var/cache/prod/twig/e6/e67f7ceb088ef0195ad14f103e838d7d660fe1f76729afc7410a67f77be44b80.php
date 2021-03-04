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

/* admin/partials/footer.html.twig */
class __TwigTemplate_c1784d44a850ce5d7d56a877de29ac4f71b284f20df0d14c1c1e7dedb2d956f9 extends \Twig\Template
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
        echo "<footer class=\"mt-5 bg-light py-5 text-center\">

    <p class=\"text-center\">Copyright LineUp !</p>

</footer>
";
    }

    public function getTemplateName()
    {
        return "admin/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/partials/footer.html.twig", "/Applications/MAMP/htdocs/lineup/templates/admin/partials/footer.html.twig");
    }
}
