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

/* newsletter/list.html.twig */
class __TwigTemplate_af138a4cca3773a3f2088d8cb850785b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des newsletters";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<h1>Liste des newsletters</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Catégorie</th>
            <th>Inscrits</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 19
            echo "    <tr>
        <td> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo " </td>
        <td> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo " </td>
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsletter"], "createdAt", [], "any", false, false, false, 22), "m/d/Y"), "html", null, true);
            echo " </td>
        <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["newsletter"], "categories", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["newsletter"], "categories", [], "any", false, false, false, 24), "users", [], "any", false, false, false, 24)), "html", null, true);
            echo " </td>
        <td>
        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["newsletter"], "isSent", [], "any", false, false, false, 26) == false)) {
                // line 27
                echo "         <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter_send", ["id" => twig_get_attribute($this->env, $this->source, $context["newsletter"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">Envoyer</a>
         ";
            }
            // line 29
            echo "          </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "newsletter/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  113 => 29,  107 => 27,  105 => 26,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  81 => 19,  77 => 18,  62 => 5,  58 => 4,  51 => 2,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/list.html.twig", "C:\\wamp64\\www\\comperis\\templates\\newsletter\\list.html.twig");
    }
}
