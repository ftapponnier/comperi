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

/* main/style/style.css */
class __TwigTemplate_6dce0d7f5af8559fbce8699657bfa406 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/style/style.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/style/style.css"));

        // line 1
        echo "@font-face{
    font-family:\"aemstel-line-outside\";
    src:url(\"https://dafonttop.com/wp-data/a/97/8097/file/Aemstel-LineOutside.ttf\") format(\"woff\"),
    url(\"https://dafonttop.com/wp-data/a/97/8097/file/Aemstel-LineOutside.ttf\") format(\"opentype\"),
    url(\"https://dafonttop.com/wp-data/a/97/8097/file/Aemstel-LineOutside.ttf\") format(\"truetype\");
}
:root {
    font-size: calc(1vw + 1vh - 0.4vmin);
    --blackColor: rgb(0, 0, 0);
    --whiteColor: rgb(255, 255, 255);
    --greyColor: rgb(229, 229, 229);
    --yellowColor: rgb(238, 255, 1);
    --blueColor: rgb(0, 1, 251);
    --pinkColor: rgb(234, 20, 141);
    --greenColor: rgb(4, 255, 4);
    --redColor: rgb(255, 4, 4);

  }

 body{
        background-color:black;
        color:var(--redColor);
        font-family: 'Didact Gothic', sans-serif;
 
    } 
 

footer{
position: absolute;
right: 75%;
}

   section{
       background-color:black;
   }
   aside {
    background-color: black;
      }

     
      
   /** Partie flex **/ 
.conteneur {
    overflow:hidden;
    border: 1px red solid;
    display:inline-flex;
    background-image: url(\"background-repeat.jpg\");
    background-size: 10%;
    align-items:center;
    height: 1200px;
    width:1600px;
  }

 
.brutalist_title {
  font-family: aemstel-line-outside;
  text-align:center;
  color: var(--redColor);
  font-size:35px;
  -webkit-text-fill-color: var(--whiteColor);
  -webkit-text-stroke:0.5px var(--redColor);
  text-shadow:3px 3px var(--redColor);
  text-align:center;
  width:220px;
  margin-left:95px;
  margin-top:10px;
  line-height:100%;  
}
.aside {
    background-color: var(--blackColor);
    color: var(--redColor);
    animation: defilement-rtl 15s infinite linear;
  
}
.bloc-gauche{
height:100%;
width:100%;
background-color: var(--blackColor);
}



.comperi-img{
  height:50%;
  width:50%;
}
.newsletter {
 
  align-items: center;
  border-top: 1px solid red;
  display: inline-block;
  width: 100%;
}
.bloc-right{
  width:50%;
}
iframe{
  height: 100%; 
  width: 100%;
}



/** **/

/** Boutton newsletter **/
.btn {
    background-color: var(--whiteColor);
    border: 2px solid var(--redColor);
    padding:20px 50px;
    font-weight: bold;
    font-size:30px;
    position:relative;
    color:var(--redColor); 
}

  .btn:hover,.btn:active{
    color:white;
    background-color:red;
    transition: all 0.3s ease;
  }
  .btn:hover:after,.btn:hover:active{
    background-color:white;
    border:2px solid red;
    transition: all 0.3s ease;
  }

 
  /** defilement vertical **/
  .vertical {
  white-space: nowrap;   
   height:1200px;
   overflow: hidden;
  }
  span
  {
    overflow: hidden;   
    writing-mode: vertical-rl;
    text-orientation: mixed;
    white-space: nowrap;
    word-spacing: 4.87em;
    animation: scrollTxt 25s linear infinite;
    display:block;

  }
  @keyframes scrollTxt {
    0%{
        transform:translate(0, 0);
    }
    100% {
        transform: translate(0, -100%);
    } 
  }
  /** **/
  
  /** Newsletter **/
  .form-control {
    background-color: white;
    border: 0.2rem solid red;
    -webkit-box-shadow: 0.2rem 0.2rem 0.2rem var(--blueColor);
    box-shadow: 0.2rem 0.2rem 0.2rem var(--blueColor);
  }
  .form-control:focus {
    background-color: var(--yellowColor);
    border: 0.2rem solid var(--blueColor);
    -webkit-box-shadow: 0.2rem 0.2rem 0.2rem red;
    box-shadow: 0.2rem 0.2rem 0.2rem red;
  }
  
  .form-control:valid {
    background-color: white;
    border: 0.2rem green;
    -webkit-box-shadow: 0.2rem 0.2rem 0.2rem green;
    box-shadow: 0.2rem 0.2rem 0.2rem green;
  }
  form svg {
    fill: red;
    height: 1.4rem;
    width: 1.4rem;
    margin: 0;
    padding: 0;
  }
 ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "main/style/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@font-face{
    font-family:\"aemstel-line-outside\";
    src:url(\"https://dafonttop.com/wp-data/a/97/8097/file/Aemstel-LineOutside.ttf\") format(\"woff\"),
    url(\"https://dafonttop.com/wp-data/a/97/8097/file/Aemstel-LineOutside.ttf\") format(\"opentype\"),
    url(\"https://dafonttop.com/wp-data/a/97/8097/file/Aemstel-LineOutside.ttf\") format(\"truetype\");
}
:root {
    font-size: calc(1vw + 1vh - 0.4vmin);
    --blackColor: rgb(0, 0, 0);
    --whiteColor: rgb(255, 255, 255);
    --greyColor: rgb(229, 229, 229);
    --yellowColor: rgb(238, 255, 1);
    --blueColor: rgb(0, 1, 251);
    --pinkColor: rgb(234, 20, 141);
    --greenColor: rgb(4, 255, 4);
    --redColor: rgb(255, 4, 4);

  }

 body{
        background-color:black;
        color:var(--redColor);
        font-family: 'Didact Gothic', sans-serif;
 
    } 
 

footer{
position: absolute;
right: 75%;
}

   section{
       background-color:black;
   }
   aside {
    background-color: black;
      }

     
      
   /** Partie flex **/ 
.conteneur {
    overflow:hidden;
    border: 1px red solid;
    display:inline-flex;
    background-image: url(\"background-repeat.jpg\");
    background-size: 10%;
    align-items:center;
    height: 1200px;
    width:1600px;
  }

 
.brutalist_title {
  font-family: aemstel-line-outside;
  text-align:center;
  color: var(--redColor);
  font-size:35px;
  -webkit-text-fill-color: var(--whiteColor);
  -webkit-text-stroke:0.5px var(--redColor);
  text-shadow:3px 3px var(--redColor);
  text-align:center;
  width:220px;
  margin-left:95px;
  margin-top:10px;
  line-height:100%;  
}
.aside {
    background-color: var(--blackColor);
    color: var(--redColor);
    animation: defilement-rtl 15s infinite linear;
  
}
.bloc-gauche{
height:100%;
width:100%;
background-color: var(--blackColor);
}



.comperi-img{
  height:50%;
  width:50%;
}
.newsletter {
 
  align-items: center;
  border-top: 1px solid red;
  display: inline-block;
  width: 100%;
}
.bloc-right{
  width:50%;
}
iframe{
  height: 100%; 
  width: 100%;
}



/** **/

/** Boutton newsletter **/
.btn {
    background-color: var(--whiteColor);
    border: 2px solid var(--redColor);
    padding:20px 50px;
    font-weight: bold;
    font-size:30px;
    position:relative;
    color:var(--redColor); 
}

  .btn:hover,.btn:active{
    color:white;
    background-color:red;
    transition: all 0.3s ease;
  }
  .btn:hover:after,.btn:hover:active{
    background-color:white;
    border:2px solid red;
    transition: all 0.3s ease;
  }

 
  /** defilement vertical **/
  .vertical {
  white-space: nowrap;   
   height:1200px;
   overflow: hidden;
  }
  span
  {
    overflow: hidden;   
    writing-mode: vertical-rl;
    text-orientation: mixed;
    white-space: nowrap;
    word-spacing: 4.87em;
    animation: scrollTxt 25s linear infinite;
    display:block;

  }
  @keyframes scrollTxt {
    0%{
        transform:translate(0, 0);
    }
    100% {
        transform: translate(0, -100%);
    } 
  }
  /** **/
  
  /** Newsletter **/
  .form-control {
    background-color: white;
    border: 0.2rem solid red;
    -webkit-box-shadow: 0.2rem 0.2rem 0.2rem var(--blueColor);
    box-shadow: 0.2rem 0.2rem 0.2rem var(--blueColor);
  }
  .form-control:focus {
    background-color: var(--yellowColor);
    border: 0.2rem solid var(--blueColor);
    -webkit-box-shadow: 0.2rem 0.2rem 0.2rem red;
    box-shadow: 0.2rem 0.2rem 0.2rem red;
  }
  
  .form-control:valid {
    background-color: white;
    border: 0.2rem green;
    -webkit-box-shadow: 0.2rem 0.2rem 0.2rem green;
    box-shadow: 0.2rem 0.2rem 0.2rem green;
  }
  form svg {
    fill: red;
    height: 1.4rem;
    width: 1.4rem;
    margin: 0;
    padding: 0;
  }
 ", "main/style/style.css", "C:\\wamp64\\www\\comperis\\templates\\main\\style\\style.css");
    }
}
