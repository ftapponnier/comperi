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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_e8c337d6788d6cf190c7c4f042a77701 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_fd9b3ffd5565f8539d84f8f99bb2c7f5f40fa7145526a4123e54f5f23312ef81"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        ob_start(function () { return ''; });
        $this->displayBlock('page_title', $context, $blocks);
        $context["page_title_block_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    <title>";
        echo twig_striptags(($context["page_title_block_output"] ?? null));
        echo "</title>

    ";
        // line 18
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "textDirection", [], "any", false, false, false, 40))) {
            // line 41
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 49
        echo "</head>

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 343
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("content_title", $context, $blocks);
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        echo "
    ";
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
    ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 35
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
        ";
        // line 37
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)) : ([]))], false);
        echo "
    ";
    }

    // line 44
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <body
        id=\"";
        // line 53
        $this->displayBlock('body_id', $context, $blocks);
        echo "\"
        class=\"ea ";
        // line 54
        $this->displayBlock('body_class', $context, $blocks);
        echo "\"
        data-ea-content-width=\"";
        // line 55
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-sidebar-width=\"";
        // line 56
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 57
        echo ((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 57)) ? ("true") : ("false"));
        echo "\"
    >
    ";
        // line 59
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 62
        echo "    ";
        $this->displayBlock('javascript_page_color_scheme', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 333
        echo "
    ";
        // line 334
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 335
        echo "
    ";
        // line 336
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 341
        echo "    </body>
";
    }

    // line 53
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/page-layout.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 62
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/page-color-scheme.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 66
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        ob_start(function () { return ''; });
        // line 72
        echo "            ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 72), "avatarUrl", [], "any", false, false, false, 72))) {
            // line 73
            echo "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
            // line 76
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 76))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
        } else {
            // line 80
            echo "                <img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 80), "avatarUrl", [], "any", false, false, false, 80), "html", null, true);
            echo "\" />
            ";
        }
        // line 82
        echo "        ";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
        ";
        // line 84
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 85
        echo "
        ";
        // line 86
        ob_start(function () { return ''; });
        // line 87
        echo "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
        // line 89
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        <span class=\"user-name\">";
        // line 92
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 92))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92))), "html", null, true);
        echo "</span>
                    </div>
                </li>

                ";
        // line 96
        $this->displayBlock('user_menu', $context, $blocks);
        // line 115
        echo "            </ul>
        ";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "
        <div class=\"wrapper\">
            ";
        // line 119
        $this->displayBlock('wrapper', $context, $blocks);
        // line 331
        echo "        </div>
    ";
    }

    // line 67
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 68));
        echo "
        ";
    }

    // line 96
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 97), "items", [], "any", false, false, false, 97)) > 0)) {
            // line 98
            echo "                        <li><hr class=\"dropdown-divider\"></li>
                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 99), "items", [], "any", false, false, false, 99));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "                            <li>
                                ";
                // line 101
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 101) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 101))) {
                    // line 102
                    echo "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 103
$context["item"], "isMenuSection", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 104), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 104), "html", null, true);
                    echo "\"
                                       target=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 105), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 105), "html", null, true);
                    echo "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 107
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 107))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 107), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 108
                    echo "                                        <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 108), "html", null, true);
                    echo "</span>
                                    </a>
                                ";
                }
                // line 111
                echo "                            </li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                    ";
        }
        // line 114
        echo "                ";
    }

    // line 119
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                <div class=\"responsive-header\">
                    ";
        // line 121
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 148
        echo "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 152
        $this->displayBlock('sidebar', $context, $blocks);
        // line 174
        echo "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 180
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 180)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 180), "isSearchEnabled", [], "any", false, false, false, 180));
        // line 181
        echo "                    <aside class=\"content-top ";
        echo ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
                        ";
        // line 182
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 282
        echo "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 285
        $this->displayBlock('content', $context, $blocks);
        // line 326
        echo "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
    }

    // line 121
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate\">
                            ";
        // line 127
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 132
        echo "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 134
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 138
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 138), "avatarDisplayed", [], "any", false, false, false, 138)) {
            // line 139
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            echo "
                                ";
        } else {
            // line 141
            echo "                                    <i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 141))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
                                ";
        }
        // line 143
        echo "                            </a>

                            ";
        // line 145
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                        </div>
                    ";
    }

    // line 127
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                                <a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 128)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 128));
        echo "\">
                                    ";
        // line 129
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 129);
        echo "
                                </a>
                            ";
    }

    // line 152
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                            <header class=\"main-header\">
                                ";
        // line 154
        $this->displayBlock('header', $context, $blocks);
        // line 168
        echo "                            </header>

                            ";
        // line 170
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 173
        echo "                        ";
    }

    // line 154
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 156
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 166
        echo "                                </nav>
                                ";
    }

    // line 156
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                                        <div id=\"header-logo\">
                                            ";
        // line 158
        $this->displayBlock('header_logo', $context, $blocks);
        // line 164
        echo "                                        </div>
                                    ";
    }

    // line 158
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        echo "                                                <a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 159)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 159));
        echo "\">
                                                    <span class=\"logo-custom\">";
        // line 160
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 160);
        echo "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
    }

    // line 170
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 171));
        echo "
                            ";
    }

    // line 182
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "                            <div class=\"content-search\">
                                ";
        // line 184
        if (($context["has_search"] ?? null)) {
            // line 185
            echo "                                    ";
            $this->displayBlock('search', $context, $blocks);
            // line 235
            echo "                                ";
        }
        // line 236
        echo "                            </div>

                            <div class=\"navbar-custom-menu\">
                                ";
        // line 239
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 251
        echo "                            </div>

                            ";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 253)) {
            // line 254
            echo "                                <div class=\"dropdown dropdown-appearance\">
                                    <a class=\"dropdown-appearance-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                        <i class=\"fas fa-adjust\"></i>
                                    </a>

                                    <ul class=\"dropdown-menu dropdown-menu-end\">
                                        <li class=\"dropdown-appearance-label\">
                                            <span>";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"dropdown-item\" data-ea-color-scheme=\"light\">
                                                <i class=\"far fa-sun\"></i> <span>";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"dropdown-item\" data-ea-color-scheme=\"dark\">
                                                <i class=\"far fa-moon\"></i> <span>";
            // line 270
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"dropdown-item active\" data-ea-color-scheme=\"auto\">
                                                <i class=\"fas fa-desktop\"></i> <span>";
            // line 275
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            ";
        }
        // line 281
        echo "                        ";
    }

    // line 185
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 188
        $this->displayBlock('search_form', $context, $blocks);
        // line 233
        echo "                                        </form>
                                    ";
    }

    // line 188
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "                                                ";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 210
        echo "
                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 212), "query", [], "any", false, false, false, 212), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 212), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 213), "query", [], "any", false, false, false, 213), "get", [0 => "menuIndex"], "method", false, false, false, 213), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 214), "query", [], "any", false, false, false, 214), "get", [0 => "submenuIndex"], "method", false, false, false, 214), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 221), "get", [0 => "query"], "method", false, false, false, 221), "html", null, true);
        echo "\">
                                                            <input class=\"form-control ";
        // line 222
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 222), "get", [0 => "query"], "method", false, false, false, 222))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 222), "get", [0 => "query"], "method", true, true, false, 222) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 222), "get", [0 => "query"], "method", false, false, false, 222)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 222), "get", [0 => "query"], "method", false, false, false, 222), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 222), "translationParameters", [], "any", false, false, false, 222), "EasyAdminBundle"), "html", null, true);
        echo "\" spellcheck=\"false\" autocorrect=\"false\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 222), "currentAction", [], "any", false, false, false, 222) == "index") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 222), "autofocusSearch", [], "any", false, false, false, 222) == true))) {
            echo " autofocus=\"autofocus\"";
        }
        echo ">
                                                        </label>

                                                        ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 225), "get", [0 => "query"], "method", false, false, false, 225)) {
            // line 226
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 226), "html", null, true);
            echo "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 230
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 189
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 190), "appliedFilters", [], "any", false, false, false, 190));
        foreach ($context['_seq'] as $context["field"] => $context["array"]) {
            // line 191
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["array"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 192
                echo "                                                            ";
                // line 193
                echo "                                                            ";
                if (twig_test_iterable($context["value"])) {
                    // line 194
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                        // line 195
                        echo "                                                                    ";
                        // line 196
                        echo "                                                                    ";
                        if (twig_test_iterable($context["iterValue"])) {
                            // line 197
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["iterValue"]);
                            foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                // line 198
                                echo "                                                                            <input type=\"hidden\" name=\"filters[";
                                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["subIndex"], "html", null, true);
                                echo "]\" value=\"";
                                echo twig_escape_filter($this->env, $context["subIterValue"], "html", null, true);
                                echo "\">
                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 200
                            echo "                                                                    ";
                        } else {
                            // line 201
                            echo "                                                                        <input type=\"hidden\" name=\"filters[";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, $context["iterValue"], "html", null, true);
                            echo "\">
                                                                    ";
                        }
                        // line 203
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 204
                    echo "                                                            ";
                } else {
                    // line 205
                    echo "                                                                <input type=\"hidden\" name=\"filters[";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
                                                            ";
                }
                // line 207
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                                                ";
    }

    // line 239
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 240
        echo "                                    <div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 242
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "
                                            ";
        // line 243
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 243), "isNameDisplayed", [], "any", false, false, false, 243)) {
            // line 244
            echo "                                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 244), "name", [], "any", false, false, false, 244), "html", null, true);
            echo "</span>
                                            ";
        }
        // line 246
        echo "                                        </a>

                                        ";
        // line 248
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    // line 285
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        echo "                            <article class=\"content\">
                                ";
        // line 287
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 311
        echo "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 313
        $this->displayBlock('main', $context, $blocks);
        // line 314
        echo "                                </section>

                                ";
        // line 316
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 324
        echo "                            </article>
                        ";
    }

    // line 287
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 288
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 288), "helpMessage", [], "any", true, true, false, 288) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 288), "helpMessage", [], "any", false, false, false, 288)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 288), "helpMessage", [], "any", false, false, false, 288)) : ("")));
        // line 289
        echo "                                    <section class=\"content-header\">
                                        ";
        // line 290
        $this->displayBlock('content_header', $context, $blocks);
        // line 309
        echo "                                    </section>
                                ";
    }

    // line 290
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 291
        echo "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 293
        $this->displayBlock('content_title', $context, $blocks);
        // line 294
        echo "
                                                    ";
        // line 295
        $this->displayBlock('content_help', $context, $blocks);
        // line 302
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 305
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 308
        echo "                                        ";
    }

    // line 293
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 295
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 296
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 297
            echo "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 297), "helpMessage", [], "any", false, false, false, 297), "html_attr");
            echo "\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        ";
        }
        // line 301
        echo "                                                    ";
    }

    // line 305
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 306
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 313
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 316
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 317
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 318
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 319
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 320
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 323
        echo "                                ";
    }

    // line 334
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 336
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 337
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 337), "bodyContents", [], "any", true, true, false, 337) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 337), "bodyContents", [], "any", false, false, false, 337)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 337), "bodyContents", [], "any", false, false, false, 337)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 338
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1166 => 340,  1157 => 338,  1152 => 337,  1148 => 336,  1142 => 334,  1138 => 323,  1132 => 320,  1129 => 319,  1126 => 318,  1123 => 317,  1119 => 316,  1113 => 313,  1101 => 306,  1097 => 305,  1093 => 301,  1085 => 297,  1082 => 296,  1078 => 295,  1072 => 293,  1068 => 308,  1066 => 305,  1061 => 302,  1059 => 295,  1056 => 294,  1054 => 293,  1050 => 291,  1046 => 290,  1041 => 309,  1039 => 290,  1036 => 289,  1033 => 288,  1029 => 287,  1024 => 324,  1022 => 316,  1018 => 314,  1016 => 313,  1012 => 311,  1010 => 287,  1007 => 286,  1003 => 285,  996 => 248,  992 => 246,  986 => 244,  984 => 243,  980 => 242,  974 => 240,  970 => 239,  966 => 209,  960 => 208,  954 => 207,  944 => 205,  941 => 204,  935 => 203,  923 => 201,  920 => 200,  903 => 198,  898 => 197,  895 => 196,  893 => 195,  888 => 194,  885 => 193,  883 => 192,  878 => 191,  873 => 190,  869 => 189,  863 => 230,  855 => 226,  853 => 225,  839 => 222,  835 => 221,  825 => 214,  821 => 213,  817 => 212,  813 => 210,  810 => 189,  806 => 188,  801 => 233,  799 => 188,  795 => 186,  791 => 185,  787 => 281,  778 => 275,  770 => 270,  762 => 265,  755 => 261,  746 => 254,  744 => 253,  740 => 251,  738 => 239,  733 => 236,  730 => 235,  727 => 185,  725 => 184,  722 => 183,  718 => 182,  711 => 171,  707 => 170,  699 => 160,  692 => 159,  688 => 158,  683 => 164,  681 => 158,  678 => 157,  674 => 156,  669 => 166,  667 => 156,  664 => 155,  660 => 154,  656 => 173,  654 => 170,  650 => 168,  648 => 154,  645 => 153,  641 => 152,  634 => 129,  627 => 128,  623 => 127,  616 => 145,  612 => 143,  606 => 141,  600 => 139,  597 => 138,  592 => 134,  588 => 132,  586 => 127,  579 => 122,  575 => 121,  567 => 326,  565 => 285,  560 => 282,  558 => 182,  553 => 181,  551 => 180,  543 => 174,  541 => 152,  535 => 148,  533 => 121,  530 => 120,  526 => 119,  522 => 114,  519 => 113,  504 => 111,  497 => 108,  491 => 107,  484 => 105,  477 => 104,  475 => 103,  472 => 102,  470 => 101,  467 => 100,  450 => 99,  447 => 98,  444 => 97,  440 => 96,  433 => 68,  429 => 67,  424 => 331,  422 => 119,  418 => 117,  414 => 115,  412 => 96,  405 => 92,  401 => 91,  396 => 89,  392 => 87,  390 => 86,  387 => 85,  385 => 84,  382 => 83,  379 => 82,  373 => 80,  366 => 76,  361 => 73,  358 => 72,  356 => 71,  353 => 70,  350 => 67,  346 => 66,  339 => 63,  335 => 62,  328 => 60,  324 => 59,  318 => 54,  312 => 53,  307 => 341,  305 => 336,  302 => 335,  300 => 334,  297 => 333,  295 => 66,  292 => 65,  289 => 62,  287 => 59,  282 => 57,  278 => 56,  274 => 55,  270 => 54,  266 => 53,  263 => 52,  259 => 51,  255 => 48,  246 => 46,  241 => 45,  237 => 44,  231 => 37,  226 => 36,  222 => 35,  215 => 32,  211 => 31,  204 => 28,  200 => 27,  194 => 24,  189 => 23,  185 => 22,  178 => 19,  174 => 18,  167 => 15,  158 => 8,  154 => 7,  149 => 343,  147 => 51,  143 => 49,  141 => 44,  138 => 43,  132 => 41,  130 => 40,  127 => 39,  125 => 35,  122 => 34,  120 => 31,  117 => 30,  115 => 27,  112 => 26,  110 => 22,  107 => 21,  105 => 18,  99 => 16,  95 => 15,  92 => 14,  90 => 7,  83 => 5,  79 => 3,  77 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\wamp64\\www\\comperis\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
