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

/* modular/portfolio.html.twig */
class __TwigTemplate_517fd57bd89451bcd51f4e17f3b16c94a3d53d763c0c1b4d6742211c301e1ddc extends \Twig\Template
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
        echo "<div class=\"modular-row portfolio\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", [])) {
            // line 4
            echo "        <div class=\"notebooks\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 6
                echo "                <div class=\"notebook-row\">
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                    // line 8
                    echo "                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>";
                    // line 10
                    echo $this->getAttribute($context["portfolio"], "title", []);
                    echo "</h4>
                                <p>";
                    // line 11
                    echo $this->getAttribute($context["portfolio"], "desc", []);
                    echo "</p>
                            </div>
                            <a href=\"#portfolioModal";
                    // line 13
                    echo $this->getAttribute($context["portfolio"], "modalid", []);
                    echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                                <div class='screen'><div class=\"screen-content\" style=\"background-image: url(";
                    // line 14
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "url", []);
                    echo ")\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    ";
        }
        // line 23
        echo "</div>

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 26
            echo "    <div class=\"portfolio-modal modal\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", []);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>";
            // line 30
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h1>
                <a href=\"";
            // line 31
            echo $this->getAttribute($context["portfolio"], "url", []);
            echo "\">
                    <img src=\"";
            // line 32
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "image", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", []);
            echo "\">
                </a>
                <p>";
            // line 34
            echo $this->getAttribute($context["portfolio"], "desc", []);
            echo "</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"";
            // line 38
            echo $this->getAttribute($context["portfolio"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["portfolio"], "client", []);
            echo "</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            ";
            // line 43
            echo $this->getAttribute($context["portfolio"], "date", []);
            echo "
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            ";
            // line 48
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
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 48,  140 => 43,  130 => 38,  123 => 34,  116 => 32,  112 => 31,  108 => 30,  100 => 26,  96 => 25,  92 => 23,  88 => 21,  81 => 19,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  53 => 8,  49 => 7,  46 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row portfolio\">
    {{ content }}
    {% if page.header.portfolio %}
        <div class=\"notebooks\">
            {% for row in page.header.portfolio|batch(4) %}
                <div class=\"notebook-row\">
                    {% for portfolio in row %}
                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>{{ portfolio.title }}</h4>
                                <p>{{ portfolio.desc }}</p>
                            </div>
                            <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                                <div class='screen'><div class=\"screen-content\" style=\"background-image: url({{ page.media[portfolio.image].url }})\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    {% endif %}
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
{% endfor %}
", "modular/portfolio.html.twig", "/Users/minidino/Sites/deliver/user/themes/deliver/templates/modular/portfolio.html.twig");
    }
}
