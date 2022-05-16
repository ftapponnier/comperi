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

/* newsletter/prepare.html.twig */
class __TwigTemplate_051000530208efcb6d7e05c80c53d68c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Creation de la newsletter";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<h1>Ecrivez votre newsletter</h1>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 8), 'row');
        echo "
    <p>Contenu</p>
    <div id=\"editor\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 10), 'row');
        echo "</div>
    

";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosckeditor/ckeditor.js"), "html", null, true);
        echo "\" defer></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ckeditor.js"), "html", null, true);
        echo "\" defer></script>

";
    }

    public function getTemplateName()
    {
        return "newsletter/prepare.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 19,  98 => 18,  94 => 17,  87 => 13,  81 => 10,  76 => 8,  71 => 6,  68 => 5,  64 => 4,  57 => 2,  53 => 17,  50 => 16,  48 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/prepare.html.twig", "C:\\wamp64\\www\\comperis\\templates\\newsletter\\prepare.html.twig");
    }
}
