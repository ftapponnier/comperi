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
class __TwigTemplate_a3940e87b3d4b732ad40cef9de6f4aa1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_nav_haut($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_haut"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_haut"));

        // line 5
        echo "<div class=\"brutalist_title_inversed\"><a href=\"https://soundcloud.com/compericomperi\">Soundcloud</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://www.instagram.com/compericomperi/\">Instagram</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://open.spotify.com/artist/5zUBHOqqGkdLkwKOuOachn\">Spotify</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://www.youtube.com/channel/UC5aS93Hdw87jyZk5S6EOQYQ/featured\">Youtube</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://linktr.ee/comperi\">Linktr</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"#\">Mail</a></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block nav_haut %}
<div class=\"brutalist_title_inversed\"><a href=\"https://soundcloud.com/compericomperi\">Soundcloud</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://www.instagram.com/compericomperi/\">Instagram</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://open.spotify.com/artist/5zUBHOqqGkdLkwKOuOachn\">Spotify</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://www.youtube.com/channel/UC5aS93Hdw87jyZk5S6EOQYQ/featured\">Youtube</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"https://linktr.ee/comperi\">Linktr</a></div>
<div class=\"brutalist_title_inversed\"><a href=\"#\">Mail</a></div>
{% endblock %}", "main/contact.html.twig", "C:\\wamp64\\www\\comperis\\templates\\main\\contact.html.twig");
    }
}
