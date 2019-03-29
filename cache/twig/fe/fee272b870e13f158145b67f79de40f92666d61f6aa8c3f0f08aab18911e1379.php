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
class __TwigTemplate_8693ce2e7281b8bbb520e0daa2651b388c2f3704357f1e204506378d559f4372 extends \Twig\Template
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
       ";
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 22
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 25
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
            // line 27
            echo "        </ul>
        ";
        }
        // line 29
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 35
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 36
            if ( !($context["truncate"] ?? null)) {
                // line 37
                echo "        ";
                $context["show_prev_next"] = true;
                // line 38
                echo "        ";
            }
            // line 39
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 40
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
        <p><a href=\"";
            // line 41
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 42
($context["truncate"] ?? null)) {
            // line 43
            echo "        <p>";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
            echo "</p>
        <p><a href=\"";
            // line 44
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 46
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
        ";
            // line 47
            $context["show_prev_next"] = true;
            // line 48
            echo "    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if (($context["show_prev_next"] ?? null)) {
            // line 51
            echo "
        <p class=\"prev-next\">
            ";
            // line 53
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 54
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Previous Post</a>
            ";
            }
            // line 56
            echo "
            ";
            // line 57
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 58
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">Next Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 60
            echo "        </p>
    ";
        }
        // line 62
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
        return array (  201 => 62,  197 => 60,  191 => 58,  189 => 57,  186 => 56,  180 => 54,  178 => 53,  174 => 51,  172 => 50,  169 => 49,  166 => 48,  164 => 47,  159 => 46,  154 => 44,  149 => 43,  147 => 42,  143 => 41,  138 => 40,  135 => 39,  132 => 38,  129 => 37,  127 => 36,  122 => 35,  120 => 34,  113 => 29,  109 => 27,  95 => 25,  91 => 24,  87 => 22,  85 => 21,  82 => 20,  74 => 18,  65 => 15,  59 => 13,  57 => 12,  54 => 11,  52 => 10,  49 => 9,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
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
", "partials/blog_item.html.twig", "/Users/minidino/Sites/deliver/user/themes/stories/templates/partials/blog_item.html.twig");
    }
}
