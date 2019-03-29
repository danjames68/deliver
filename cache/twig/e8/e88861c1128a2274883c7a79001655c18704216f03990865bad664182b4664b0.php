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

/* modular/text.html.twig */
class __TwigTemplate_c65e8a3657d03e28d1bc4ab69215cc73f70f18da3bd3117fbf7bb25f77383c97 extends \Twig\Template
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
        echo "<div class=\"modular-row callout\">
 ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
 ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pricing", [])) {
            // line 4
            echo "    <div class=\"pricing-container\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pricing", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "            <div class=\"pricing-item\">
                <div class=\"name\">";
                // line 7
                echo $this->getAttribute($context["item"], "name", []);
                echo "</div>
                <div class=\"price\">";
                // line 8
                echo $this->getAttribute($context["item"], "price", []);
                echo "</div>
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "options", []));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 10
                    echo "                    <div class=\"info\">
                        ";
                    // line 11
                    echo $this->getAttribute($context["line"], "line", []);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                <div class=\"foot\">
                    <a class=\"button\" href=\"";
                // line 15
                echo $this->getAttribute($context["item"], "button_url", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "button_text", []);
                echo "</a>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>    
";
        }
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", [])) {
            // line 22
            echo "    <div class=\"notebooks\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
            foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                // line 24
                echo "            <div class=\"notebook\">
                <a href=\"#portfolioModal";
                // line 25
                echo $this->getAttribute($context["portfolio"], "modalid", []);
                echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class='screen'><div class=\"screen-content\" style=\"background-image: url(";
                // line 26
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "url", []);
                echo ")\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                </a>
                <div class='keyboard'></div>
                <h4>";
                // line 29
                echo $this->getAttribute($context["portfolio"], "title", []);
                echo "</h4>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </div>
";
        }
        // line 34
        echo "

<div class=\"callout-line\"></div>
</div>

";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 40
            echo "    <div class=\"portfolio-modal modal\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", []);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>";
            // line 44
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h1>
                <a href=\"";
            // line 45
            echo $this->getAttribute($context["portfolio"], "url", []);
            echo "\">
                    <img src=\"";
            // line 46
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", []);
            echo "\">
                </a>
                <p>";
            // line 48
            echo $this->getAttribute($context["portfolio"], "desc", []);
            echo "</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"";
            // line 52
            echo $this->getAttribute($context["portfolio"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["portfolio"], "client", []);
            echo "</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            ";
            // line 57
            echo $this->getAttribute($context["portfolio"], "date", []);
            echo "
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            ";
            // line 62
            echo $this->getAttribute($context["portfolio"], "category", []);
            echo "
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 62,  178 => 57,  168 => 52,  161 => 48,  154 => 46,  150 => 45,  146 => 44,  138 => 40,  134 => 39,  127 => 34,  123 => 32,  114 => 29,  108 => 26,  104 => 25,  101 => 24,  97 => 23,  94 => 22,  92 => 21,  88 => 19,  76 => 15,  73 => 14,  64 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row callout\">
 {{ content }}
 {% if page.header.pricing %}
    <div class=\"pricing-container\">
        {% for item in page.header.pricing %}
            <div class=\"pricing-item\">
                <div class=\"name\">{{ item.name }}</div>
                <div class=\"price\">{{ item.price }}</div>
                {% for line in item.options %}
                    <div class=\"info\">
                        {{ line.line }}
                    </div>
                {% endfor %}
                <div class=\"foot\">
                    <a class=\"button\" href=\"{{ item.button_url }}\">{{ item.button_text }}</a>
                </div>
            </div>
        {% endfor %}
    </div>    
{% endif %}
{% if page.header.portfolio %}
    <div class=\"notebooks\">
        {% for portfolio in page.header.portfolio %}
            <div class=\"notebook\">
                <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class='screen'><div class=\"screen-content\" style=\"background-image: url({{ page.media[portfolio.image].url }})\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                </a>
                <div class='keyboard'></div>
                <h4>{{ portfolio.title }}</h4>
            </div>
        {% endfor %}
    </div>
{% endif %}


<div class=\"callout-line\"></div>
</div>

{% for portfolio in page.header.portfolio %}
    <div class=\"portfolio-modal modal\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>{{ portfolio.title }}</h1>
                <a href=\"{{ portfolio.url }}\">
                    <img src=\"{{ page.media[portfolio.image].url }}\" class=\"img-responsive img-centered\" alt=\"{{ portfolio.alt }}\">
                </a>
                <p>{{ portfolio.desc }}</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"{{ portfolio.url }}\">{{ portfolio.client }}</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            {{ portfolio.date }}
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            {{ portfolio.category }}
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
{% endfor %}", "modular/text.html.twig", "/Users/dan/Sites/deliver/user/themes/deliver/templates/modular/text.html.twig");
    }
}
