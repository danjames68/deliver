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

/* CHANGELOG.md.twig */
class __TwigTemplate_bcf6b90e85e8ebf8df038dc88d1c38f5b9faef0c40a79f3031383ea32ad593fe extends \Twig\Template
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
        echo "# v0.1.0
##  ";
        // line 2
        echo twig_date_format_filter($this->env, "now", "m/d/Y");
        echo "

1. [](#new)
    * ChangeLog started...
";
    }

    public function getTemplateName()
    {
        return "CHANGELOG.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("# v0.1.0
##  {{ \"now\"|date(\"m/d/Y\") }}

1. [](#new)
    * ChangeLog started...
", "CHANGELOG.md.twig", "/Users/minidino/Sites/deliver/user/plugins/devtools/components/theme/inheritance/CHANGELOG.md.twig");
    }
}
