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

/* base.html.twig */
class __TwigTemplate_a68c2ca909937eb9298b1a50653c8e53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'information' => [$this, 'block_information'],
            'nav_haut' => [$this, 'block_nav_haut'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
  <html lang=\"en\">
    <head>
      <meta charset=\"UTF-8\" />
      <link
        rel=\"stylesheet\"
        href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
      />
      <script>
        src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha512-Ah5hWYPzDsVHf9i2EejFBFrG2ZAPmpu4ZJtW4MfSgpZacn+M9QHDt+Hd/wL1tEkk1UgbzqepJr6KnhZjFKB+0A==\"
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\"
      </script>
      <link
        rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\"
        integrity=\"sha512-tDXPcamuZsWWd6OsKFyH6nAqh/MjZ/5Yk88T5o+aMfygqNFPan1pLyPFAndRzmOWHKT+jSDzWpJv8krj6x1LMA==\"
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\"
      />  
";
        // line 22
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>

    </head>
    <body>
    <header>
      
      <ul>
  <li><h1>Mad Dog present</h1></li>
  <li><a href=\"/\">Home</a></li>
  <li><a href=\"/newsletter\">Newsletter</a></li>
  <li><a href=\"/contact\">Contact</a></li>
  <li>";
        // line 44
        $this->displayBlock('information', $context, $blocks);
        echo " </li>

</ul>
<section class=\"enligne\">
  ";
        // line 48
        $this->displayBlock('nav_haut', $context, $blocks);
        // line 49
        echo "</section>
      </header>  

<main>
      <section id=\"discographie\">
          <div class=\"col-sm audio-2\" id=\"audio-2\">
            <div id=\"app-cover\">
              <div id=\"bg-artwork\" class=\"bg-artwork-vClassTitle\"></div>
              <div id=\"bg-layer\"></div>
              <div id=\"player\">
                <div id=\"player-track\" class=\"player-track-vClassTitle\">
                  <div id=\"album-name\"></div>
                  <div id=\"track-name\"></div>
                  <div id=\"track-time\">
                    <div id=\"current-time\"></div>
                    <div id=\"track-length\"></div>
                  </div>
                  <div id=\"s-area\">
                    <div id=\"ins-time\"></div>
                    <div id=\"s-hover\"></div>
                    <div id=\"seek-bar\"></div>
                  </div>
                </div>
                <div id=\"player-content\">
                  <div id=\"album-art\">
                    <img
                      src=\"style/album.jpg\"
                      class=\"active\"
                      id=\"current-album-art\"
                    />
                    <div id=\"buffer-box\">Buffering ...</div>
                  </div>
                  <div id=\"player-controls\">
                    <div class=\"control\">
                      <div class=\"button\" id=\"play-previous\">
                        <i class=\"fas fa-backward\"></i>
                      </div>
                    </div>
                    <div class=\"control\">
                      <div
                        class=\"button play-pause-button\"
                        id=\"play-pause-button\"
                      >
                        <i class=\"fas fa-play\"></i>
                      </div>
                    </div>
                    <div class=\"control\">
                      <div class=\"button\" id=\"play-next\">
                        <i class=\"fas fa-forward\"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
  </section>

  </main>
      <!-- <a href=\"https://www.youtube.com/channel/UC7hSS_eujjZOEQrjsda76gA/videos\" target=\"_blank\" id=\"ytd-url\">My YouTube Channel</a> -->
      <!-- partial -->
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/js.js"), "html", null, true);
        echo "\"></script>

  


";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "
    </body>
  </html>

 ";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 23
        echo "
<title>";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

 ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css?56"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "information"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "information"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_nav_haut($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_haut"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_haut"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 119
            echo "<div>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 128,  333 => 127,  315 => 119,  311 => 118,  301 => 117,  282 => 48,  263 => 44,  251 => 28,  241 => 27,  222 => 24,  209 => 31,  207 => 27,  201 => 24,  198 => 23,  188 => 22,  178 => 127,  172 => 123,  170 => 117,  162 => 112,  97 => 49,  95 => 48,  88 => 44,  75 => 33,  73 => 22,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
  <html lang=\"en\">
    <head>
      <meta charset=\"UTF-8\" />
      <link
        rel=\"stylesheet\"
        href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
      />
      <script>
        src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha512-Ah5hWYPzDsVHf9i2EejFBFrG2ZAPmpu4ZJtW4MfSgpZacn+M9QHDt+Hd/wL1tEkk1UgbzqepJr6KnhZjFKB+0A==\"
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\"
      </script>
      <link
        rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\"
        integrity=\"sha512-tDXPcamuZsWWd6OsKFyH6nAqh/MjZ/5Yk88T5o+aMfygqNFPan1pLyPFAndRzmOWHKT+jSDzWpJv8krj6x1LMA==\"
        crossorigin=\"anonymous\"
        referrerpolicy=\"no-referrer\"
      />  
{% block head %}

<title>{% block title %}Welcome!{% endblock %}</title>
</head>

 {% block stylesheets %}


 {% endblock %}
  <link rel=\"stylesheet\" href=\"{{asset('css/style.css?56')}}\">
{% endblock %}
</head>

    </head>
    <body>
    <header>
      
      <ul>
  <li><h1>Mad Dog present</h1></li>
  <li><a href=\"/\">Home</a></li>
  <li><a href=\"/newsletter\">Newsletter</a></li>
  <li><a href=\"/contact\">Contact</a></li>
  <li>{% block information %} {% endblock %} </li>

</ul>
<section class=\"enligne\">
  {% block nav_haut %} {% endblock %}
</section>
      </header>  

<main>
      <section id=\"discographie\">
          <div class=\"col-sm audio-2\" id=\"audio-2\">
            <div id=\"app-cover\">
              <div id=\"bg-artwork\" class=\"bg-artwork-vClassTitle\"></div>
              <div id=\"bg-layer\"></div>
              <div id=\"player\">
                <div id=\"player-track\" class=\"player-track-vClassTitle\">
                  <div id=\"album-name\"></div>
                  <div id=\"track-name\"></div>
                  <div id=\"track-time\">
                    <div id=\"current-time\"></div>
                    <div id=\"track-length\"></div>
                  </div>
                  <div id=\"s-area\">
                    <div id=\"ins-time\"></div>
                    <div id=\"s-hover\"></div>
                    <div id=\"seek-bar\"></div>
                  </div>
                </div>
                <div id=\"player-content\">
                  <div id=\"album-art\">
                    <img
                      src=\"style/album.jpg\"
                      class=\"active\"
                      id=\"current-album-art\"
                    />
                    <div id=\"buffer-box\">Buffering ...</div>
                  </div>
                  <div id=\"player-controls\">
                    <div class=\"control\">
                      <div class=\"button\" id=\"play-previous\">
                        <i class=\"fas fa-backward\"></i>
                      </div>
                    </div>
                    <div class=\"control\">
                      <div
                        class=\"button play-pause-button\"
                        id=\"play-pause-button\"
                      >
                        <i class=\"fas fa-play\"></i>
                      </div>
                    </div>
                    <div class=\"control\">
                      <div class=\"button\" id=\"play-next\">
                        <i class=\"fas fa-forward\"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
  </section>

  </main>
      <!-- <a href=\"https://www.youtube.com/channel/UC7hSS_eujjZOEQrjsda76gA/videos\" target=\"_blank\" id=\"ytd-url\">My YouTube Channel</a> -->
      <!-- partial -->
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
      <script src=\"{{asset('js/js.js')}}\"></script>

  


{% block body %}
{% for message in app.flashes ('message') %}
<div>{{ message }}</div>

{% endfor %}
{% endblock %}

    </body>
  </html>

 {% block javascripts %}
 {% endblock %}
", "base.html.twig", "C:\\wamp64\\www\\comperis\\templates\\base.html.twig");
    }
}
