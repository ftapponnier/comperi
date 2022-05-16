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

/* emails/newsletter.html.twig */
class __TwigTemplate_2b953bf6ad63dfd3feec09e9ae93a5cd extends Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</h1>

<div>
 ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "content", [], "any", false, false, false, 4);
        echo "
</div>
<p> Pour vous désinscrire , cliquez sur ce lien</p>
<p> Cliquez sur ce lien <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 7), "newsletter" => twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "id", [], "any", false, false, false, 7), "token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "validationToken", [], "any", false, false, false, 7)])), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 7), "newsletter" => twig_get_attribute($this->env, $this->source, ($context["newsletter"] ?? null), "id", [], "any", false, false, false, 7), "token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "validationToken", [], "any", false, false, false, 7)])), "html", null, true);
        echo "\"></a></p>";
    }

    public function getTemplateName()
    {
        return "emails/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/newsletter.html.twig", "C:\\wamp64\\www\\comperis\\templates\\emails\\newsletter.html.twig");
    }
}
