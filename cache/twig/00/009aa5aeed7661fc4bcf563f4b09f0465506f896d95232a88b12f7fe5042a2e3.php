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

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_edc57a5af3cb6ed3c3d1e8897ada8c778e7659a56ae6d0d59b3ec3363ea03911 extends \Twig\Template
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
        echo "<input type=\"text\" placeholder=\"Search...\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-searchsidebar-input=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []);
        echo "/query\" />
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-searchsidebar-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('searchsidebar-input') + ':' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
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
        return new Source("<input type=\"text\" placeholder=\"Search...\" value=\"{{ query }}\" data-searchsidebar-input=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\" />
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-searchsidebar-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('searchsidebar-input') + ':' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox.html.twig", "/Users/minidino/Sites/deliver/user/themes/deliver/templates/partials/simplesearch_searchbox.html.twig");
    }
}
