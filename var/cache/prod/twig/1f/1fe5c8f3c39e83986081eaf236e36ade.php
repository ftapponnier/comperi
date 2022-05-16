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

/* main/index.html.twig */
class __TwigTemplate_3b6343219469a2268169c3229d5e1c3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav_haut' => [$this, 'block_nav_haut'],
            'information' => [$this, 'block_information'],
            'vinyle' => [$this, 'block_vinyle'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Comperi";
    }

    // line 5
    public function block_nav_haut($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<span class=\"mouvement\">Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi&nbsp; </span>
<span class=\"mouvement\">Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi Comperi&nbsp; </span>
";
    }

    // line 9
    public function block_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "message"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "<div>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 15
    public function block_vinyle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  74 => 11,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index.html.twig", "C:\\wamp64\\www\\comperis\\templates\\main\\index.html.twig");
    }
}
