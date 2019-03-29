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

/* partials/blog_item.html.twig */
class __TwigTemplate_81f6fd28b28ac1080e2d3b85224af4d8f70f8dca6a2a8b2b37298cec78b27d36 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"list-item\">

    <div class=\"list-blog-header\">
        ";
        // line 4
        if (($context["big_header"] ?? null)) {
            // line 5
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropResize", [0 => 900, 1 => 600], "method"), "html", []);
            echo "
        ";
        } else {
            // line 7
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 900, 1 => 300], "method"), "html", []);
            echo "
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 11
            echo "            <h4>
                ";
            // line 12
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 13
                echo "                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 15
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
            </h4>
        ";
        } else {
            // line 18
            echo "            <h4><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a></h4>
        ";
        }
        // line 20
        echo "
        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\"></i>
            ";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d");
        echo ", ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M");
        echo "
        </span>
        ";
        // line 25
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", [])) {
            // line 26
            echo "        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            ";
            // line 28
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []);
            echo "
        </span>
        ";
        }
        // line 31
        echo "       ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 32
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 35
                echo "            <li><a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </ul>
        ";
        }
        // line 39
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 44
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 45
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 46
            if ( !($context["truncate"] ?? null)) {
                // line 47
                echo "        ";
                $context["show_prev_next"] = true;
                // line 48
                echo "        ";
            }
            // line 49
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 50
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
        <p><a href=\"";
            // line 51
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 52
($context["truncate"] ?? null)) {
            // line 53
            echo "        <p>";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
            echo "</p>
        <p><a href=\"";
            // line 54
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 56
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 57
            $context["show_prev_next"] = true;
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if (($context["show_prev_next"] ?? null)) {
            // line 61
            echo "
        <p class=\"prev-next\">
            ";
            // line 63
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 64
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Previous Post</a>
            ";
            }
            // line 66
            echo "
            ";
            // line 67
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 68
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">Next Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 70
            echo "        </p>
    ";
        }
        // line 72
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 72,  219 => 70,  213 => 68,  211 => 67,  208 => 66,  202 => 64,  200 => 63,  196 => 61,  194 => 60,  191 => 59,  188 => 58,  186 => 57,  181 => 56,  176 => 54,  171 => 53,  169 => 52,  165 => 51,  160 => 50,  157 => 49,  154 => 48,  151 => 47,  149 => 46,  144 => 45,  142 => 44,  135 => 39,  131 => 37,  117 => 35,  113 => 34,  109 => 32,  106 => 31,  100 => 28,  96 => 26,  94 => 25,  87 => 23,  82 => 20,  74 => 18,  65 => 15,  59 => 13,  57 => 12,  54 => 11,  52 => 10,  49 => 9,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-item\">

    <div class=\"list-blog-header\">
        {% if big_header %}
            {{ page.media.images|first.cropResize(900,600).html }}
        {% else %}
            {{ page.media.images|first.cropZoom(900,300).html }}
        {% endif %}

        {% if page.header.link %}
            <h4>
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4><a href=\"{{ page.url }}\">{{ page.title }}</a></h4>
        {% endif %}

        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\"></i>
            {{ page.date|date(\"d\") }}, {{ page.date|date(\"M\") }}
        </span>
        {% if page.header.author %}
        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            {{ page.header.author }}
        </span>
        {% endif %}
       {% if page.taxonomy.tag %}
        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            {% for tag in page.taxonomy.tag %}
            <li><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></li>
            {% endfor %}
        </ul>
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary }}</p>
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% elseif truncate %}
        <p>{{ page.content|truncate(550) }}</p>
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% else %}
        <p>{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Previous Post</a>
            {% endif %}

            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\">Next Post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/Users/minidino/Sites/deliver/user/themes/deliver/templates/partials/blog_item.html.twig");
    }
}
