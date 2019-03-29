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

/* modular/features.html.twig */
class __TwigTemplate_50bc0dd1e98ba0dd9405cd4aab81bed80bbda30f5bbb4ef01e39a387ae611718 extends \Twig\Template
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
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "        <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", [])) {
                echo " primary";
            }
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    <div class=\"feature-items\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 8
            echo "           <div class=\"feature\">
            ";
            // line 9
            if ($this->getAttribute($context["feature"], "icon", [])) {
                // line 10
                echo "            <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["feature"], "icon", []);
                echo "\"></i>
            <div class=\"feature-content icon-offset\">
            ";
            } else {
                // line 13
                echo "            <div class=\"feature-content\">
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["feature"], "header", [])) {
                // line 16
                echo "            <h4>";
                echo $this->getAttribute($context["feature"], "header", []);
                echo "</h4>
            ";
            }
            // line 18
            echo "            ";
            if ($this->getAttribute($context["feature"], "text", [])) {
                // line 19
                echo "            <p>";
                echo $this->getAttribute($context["feature"], "text", []);
                echo "</p>
            <p><a href=\"";
                // line 20
                echo $this->getAttribute($context["feature"], "linkurl", []);
                echo "\">";
                echo $this->getAttribute($context["feature"], "linktext", []);
                echo "</a></p>
            ";
            }
            // line 22
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  105 => 22,  98 => 20,  93 => 19,  90 => 18,  84 => 16,  81 => 15,  77 => 13,  70 => 10,  68 => 9,  65 => 8,  61 => 7,  58 => 6,  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row features {{ page.header.class}}\">
    {{ content }}
    {% for button in page.header.buttons %}
        <a class=\"button{% if button.primary %} primary{% endif %}\" href=\"{{ button.url }}\">{{ button.text }}</a>
    {% endfor %}
    <div class=\"feature-items\">
    {% for feature in page.header.features %}
           <div class=\"feature\">
            {% if feature.icon %}
            <i class=\"fa fa-fw fa-{{ feature.icon }}\"></i>
            <div class=\"feature-content icon-offset\">
            {% else %}
            <div class=\"feature-content\">
            {% endif %}
            {% if feature.header %}
            <h4>{{ feature.header }}</h4>
            {% endif %}
            {% if feature.text %}
            <p>{{ feature.text }}</p>
            <p><a href=\"{{ feature.linkurl }}\">{{ feature.linktext }}</a></p>
            {% endif %}
            </div>
        </div>
    {% endfor %}
    </div>
</div>
", "modular/features.html.twig", "/Users/dan/Sites/deliver/user/themes/deliver/templates/modular/features.html.twig");
    }
}
