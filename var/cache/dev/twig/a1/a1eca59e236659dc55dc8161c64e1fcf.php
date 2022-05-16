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
class __TwigTemplate_1c28a9d4eae73408a1766e1de0450cd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter/list.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des newsletters";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["newsletters"]) || array_key_exists("newsletters", $context) ? $context["newsletters"] : (function () { throw new RuntimeError('Variable "newsletters" does not exist.', 18, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "newsletter/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 32,  143 => 29,  137 => 27,  135 => 26,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  111 => 19,  107 => 18,  92 => 5,  82 => 4,  63 => 2,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}Liste des newsletters{% endblock %}

{% block body %}
<h1>Liste des newsletters</h1>
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
    {% for newsletter in newsletters %}
    <tr>
        <td> {{newsletter.id}} </td>
        <td> {{newsletter.name}} </td>
        <td> {{newsletter.createdAt|date(\"m/d/Y\")}} </td>
        <td> {{newsletter.categories.name}}</td>
        <td> {{newsletter.categories.users|length}} </td>
        <td>
        {% if newsletter.isSent == false %}
         <a href=\"{{ path('newsletter_send', {id: newsletter.id}) }}\">Envoyer</a>
         {% endif %}
          </td>
    </tr>
    {% endfor %}
</table>
{% endblock %}", "newsletter/list.html.twig", "C:\\wamp64\\www\\comperis\\templates\\newsletter\\list.html.twig");
    }
}
