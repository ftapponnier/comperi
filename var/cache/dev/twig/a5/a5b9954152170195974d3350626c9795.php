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
class __TwigTemplate_8ae83cd11933d7f0bb7d627577047905 extends Template
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
      <!-- partial:index.partial.html -->
      <!-- Tracks used in this music/audio player application are free to use. I downloaded them from Soundcloud and NCS websites. I am not the owner of these tracks. -->
      <header>
      
      <ul>
  <li><h1>Mad Dog present</h1></li>
  <li><a href=\"/\">Home</a></li>
  <li><a href=\"/newsletter\">Newsletter</a></li>
  <li><a href=\"/contact\">Contact</a></li>
  <li>";
        // line 46
        $this->displayBlock('information', $context, $blocks);
        echo " </li>

</ul>
<section class=\"enligne\">
  ";
        // line 50
        $this->displayBlock('nav_haut', $context, $blocks);
        // line 51
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
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/js.js"), "html", null, true);
        echo "\"></script>

  


";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
    </body>
  </html>

 ";
        // line 129
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css?91156"), "html", null, true);
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

    // line 46
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

    // line 50
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

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 121
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

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
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
        return array (  345 => 130,  335 => 129,  317 => 121,  313 => 120,  303 => 119,  284 => 50,  265 => 46,  253 => 28,  243 => 27,  224 => 24,  211 => 31,  209 => 27,  203 => 24,  200 => 23,  190 => 22,  180 => 129,  174 => 125,  172 => 119,  164 => 114,  99 => 51,  97 => 50,  90 => 46,  75 => 33,  73 => 22,  50 => 1,);
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
  <link rel=\"stylesheet\" href=\"{{asset('css/style.css?91156')}}\">
{% endblock %}
</head>

    </head>
    <body>
      <!-- partial:index.partial.html -->
      <!-- Tracks used in this music/audio player application are free to use. I downloaded them from Soundcloud and NCS websites. I am not the owner of these tracks. -->
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
