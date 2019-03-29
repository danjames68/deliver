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

/* theme.yaml.twig */
class __TwigTemplate_82955e83d79bbbffa338d83399820060f47f59e47f8e11ea22a8b2b64c8f6544 extends \Twig\Template
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
        echo "streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", []));
        echo "
         - user/themes/";
        // line 8
        echo $this->getAttribute(($context["component"] ?? null), "extends", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/{{ component.name|hyphenize }}
         - user/themes/{{ component.extends }}
", "theme.yaml.twig", "/Users/minidino/Sites/deliver/user/plugins/devtools/components/theme/inheritance/theme.yaml.twig");
    }
}
