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

/* main/contact.html.twig */
class __TwigTemplate_f5f9ef6e3f0b5d581a39b653c09fa196 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav_haut' => [$this, 'block_nav_haut'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_nav_haut($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"brutalist_title_inversed\"><a href=\"https://soundcloud.com/compericomperi\">Soundcloud</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://www.instagram.com/compericomperi/\">Instagram</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://open.spotify.com/artist/5zUBHOqqGkdLkwKOuOachn\">Spotify</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://www.youtube.com/channel/UC5aS93Hdw87jyZk5S6EOQYQ/featured\">Youtube</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://linktr.ee/comperi\">Linktr</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"#\">Mail</a></div>
";
    }

    public function getTemplateName()
    {
        return "main/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/contact.html.twig", "C:\\wamp64\\www\\comperis\\templates\\main\\contact.html.twig");
    }
}
