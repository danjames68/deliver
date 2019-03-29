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

/* modular/team.html.twig */
class __TwigTemplate_f6520e081f6ef52e7655e789b182295362cee2fbe9bbe3258c391f8f4f18b924 extends \Twig\Template
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
        echo "<div class=\"modular-row team\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    <div class=\"members\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "members", []));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 5
            echo "        <div class=\"member\">
            <img src=\"";
            // line 6
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["member"], "image", []), [], "array"), "url", []);
            echo "\" alt=\"\">
            <h4>";
            // line 7
            echo $this->getAttribute($context["member"], "name", []);
            echo "</h4>
            <span>";
            // line 8
            echo $this->getAttribute($context["member"], "title", []);
            echo "</span>
            <hr>
            <p>";
            // line 10
            echo $this->getAttribute($context["member"], "info", []);
            echo "</p>
            <ul class=\"social-icons\">
                <li>
                    <a href=\"";
            // line 13
            echo $this->getAttribute($context["member"], "social_twitter", []);
            echo "\">
                        <i class=\"fa fa-twitter\"></i></a>
                </li>
                <li>
                    <a href=\"";
            // line 17
            echo $this->getAttribute($context["member"], "social_facebook", []);
            echo "\">
                        <i class=\"fa fa-facebook\"></i></a>
                </li>
                <li>
                    <a href=\"";
            // line 21
            echo $this->getAttribute($context["member"], "social_feed", []);
            echo "\">
                        <i class=\"fa fa-rss\"></i></a>
                </li>
            </ul>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
    <div class=\"callout-line\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  78 => 21,  71 => 17,  64 => 13,  58 => 10,  53 => 8,  49 => 7,  45 => 6,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row team\">
    {{ content }}
    <div class=\"members\">
        {% for member in page.header.members %}
        <div class=\"member\">
            <img src=\"{{page.media[member.image].url}}\" alt=\"\">
            <h4>{{ member.name }}</h4>
            <span>{{ member.title }}</span>
            <hr>
            <p>{{ member.info }}</p>
            <ul class=\"social-icons\">
                <li>
                    <a href=\"{{ member.social_twitter }}\">
                        <i class=\"fa fa-twitter\"></i></a>
                </li>
                <li>
                    <a href=\"{{ member.social_facebook }}\">
                        <i class=\"fa fa-facebook\"></i></a>
                </li>
                <li>
                    <a href=\"{{ member.social_feed }}\">
                        <i class=\"fa fa-rss\"></i></a>
                </li>
            </ul>
        </div>
        {% endfor %}
    </div>
    <div class=\"callout-line\"></div>
</div>
", "modular/team.html.twig", "/Users/minidino/Sites/deliver/user/themes/deliver/templates/modular/team.html.twig");
    }
}
