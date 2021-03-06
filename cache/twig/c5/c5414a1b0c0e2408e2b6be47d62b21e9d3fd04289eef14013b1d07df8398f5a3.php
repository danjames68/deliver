<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_47b97e0bcf19d44ee061a68e5f067d3e6af0eb542f5b489c68303b66dff0537b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'social' => [$this, 'block_social'],
            'header_extra' => [$this, 'block_header_extra'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>
<body id=\"top\" class=\"";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('showcase', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 81
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 81)->display($context);
        // line 82
        echo "        </div>
    </div>
    ";
        // line 84
        $this->displayBlock('bottom', $context, $blocks);
        // line 97
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/template.css", 1 => 101], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slidebars.min.css"], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slideme.css"], "method");
        // line 19
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 20
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css"], "method");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/deliver.js"], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slidebars.min.js"], "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.slideme2.js"], "method");
        // line 36
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sticky_menu", []), "enabled", [])) {
            // line 37
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-scrolltofixed-min.js"], "method");
            // line 38
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/fixed-header.js"], "method");
            // line 39
            echo "        ";
        }
        // line 40
        echo "    ";
    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        // line 48
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 50
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</a></h3>
                    ";
        // line 51
        $this->displayBlock('social', $context, $blocks);
        // line 54
        echo "                </div>
                <div id=\"navbar\">
                    ";
        // line 56
        $this->displayBlock('header_extra', $context, $blocks);
        // line 57
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 60
        echo "                    ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 51
    public function block_social($context, array $blocks = [])
    {
        // line 52
        echo "                        ";
        $this->loadTemplate("partials/social.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "                    ";
    }

    // line 56
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 57
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 58
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "                    ";
    }

    // line 66
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        // line 69
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
            ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "        </section>
        ";
    }

    // line 70
    public function block_content($context, array $blocks = [])
    {
    }

    // line 72
    public function block_footer($context, array $blocks = [])
    {
        // line 73
        echo "            ";
        $this->loadTemplate("modular/footer.html.twig", "partials/base.html.twig", 73)->display($context);
        // line 74
        echo "            ";
    }

    // line 84
    public function block_bottom($context, array $blocks = [])
    {
        // line 85
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 85,  318 => 84,  314 => 74,  311 => 73,  308 => 72,  303 => 70,  298 => 75,  296 => 72,  293 => 71,  291 => 70,  286 => 69,  283 => 68,  278 => 66,  274 => 59,  271 => 58,  268 => 57,  263 => 56,  259 => 53,  256 => 52,  253 => 51,  246 => 61,  243 => 60,  240 => 57,  238 => 56,  234 => 54,  232 => 51,  226 => 50,  222 => 48,  219 => 47,  215 => 40,  212 => 39,  209 => 38,  206 => 37,  203 => 36,  200 => 35,  197 => 34,  194 => 33,  191 => 32,  188 => 31,  185 => 30,  181 => 27,  178 => 26,  175 => 25,  172 => 24,  169 => 23,  166 => 22,  163 => 21,  160 => 20,  157 => 19,  154 => 18,  151 => 17,  148 => 16,  145 => 15,  142 => 14,  139 => 13,  136 => 12,  128 => 41,  126 => 30,  120 => 28,  118 => 12,  113 => 10,  110 => 9,  108 => 8,  100 => 7,  97 => 6,  94 => 5,  88 => 97,  86 => 84,  82 => 82,  80 => 81,  74 => 77,  72 => 68,  69 => 67,  67 => 66,  64 => 65,  62 => 47,  57 => 45,  54 => 44,  52 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/template.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}
        {% do assets.addCss('theme://css/slideme.css') %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addCss('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/deliver.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
        {% do assets.addJs('theme://js/jquery.slideme2.js') %}
        {% if theme_config.sticky_menu.enabled %}
            {% do assets.addJs('theme://js/jquery-scrolltofixed-min.js') %}
            {% do assets.addJs('theme://js/fixed-header.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"{{ base_url_absolute }}\">{{ config.site.title }}</a></h3>
                    {% block social %}
                        {% include 'partials/social.html.twig' %}
                    {% endblock %}
                </div>
                <div id=\"navbar\">
                    {% block header_extra %}{% endblock %}
                    {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
                    {% include 'partials/search.html.twig' %}
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}

            {% block footer %}
            {% include 'modular/footer.html.twig' %}
            {% endblock %}
        </section>
        {% endblock %}

    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
    {{ assets.js('bottom') }}
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Users/minidino/Sites/deliver/user/themes/deliver/templates/partials/base.html.twig");
    }
}
