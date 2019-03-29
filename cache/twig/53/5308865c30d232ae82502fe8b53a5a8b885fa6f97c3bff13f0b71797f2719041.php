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

/* forms/fields/uniqueid/uniqueid.html.twig */
class __TwigTemplate_c91de55d881697b985391a91d0be50ee3b2af50dee8064796eb5b33720fc1346 extends \Twig\Template
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
        echo "<input type=\"hidden\" name=\"__unique_form_id__\" value=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(20);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/uniqueid/uniqueid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<input type=\"hidden\" name=\"__unique_form_id__\" value=\"{{ random_string(20) }}\" />", "forms/fields/uniqueid/uniqueid.html.twig", "/Users/minidino/Sites/deliver/user/plugins/form/templates/forms/fields/uniqueid/uniqueid.html.twig");
    }
}
