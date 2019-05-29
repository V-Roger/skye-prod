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

/* left-sidebar.html.twig */
class __TwigTemplate_21cac21aa1c7cefccd5e20222079dca7f64d0c3c1d23726911005f44ed026490 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "left-sidebar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "\t<div class=\"row gtr-150\">
\t\t<div class=\"col-4 col-12-medium\">

\t\t";
        // line 7
        $this->loadTemplate("partials/components/portals_sidebar.html.twig", "left-sidebar.html.twig", 7)->display($context);
        // line 8
        echo "
\t\t</div>
\t\t<div class=\"col-8 col-12-medium imp-medium\">
\t\t\t";
        // line 11
        $this->displayParentBlock("content", $context, $blocks);
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "left-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  49 => 8,  47 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
\t<div class=\"row gtr-150\">
\t\t<div class=\"col-4 col-12-medium\">

\t\t{% include 'partials/components/portals_sidebar.html.twig' %}

\t\t</div>
\t\t<div class=\"col-8 col-12-medium imp-medium\">
\t\t\t{{ parent() }}
\t\t</div>
\t</div>
{% endblock content %}", "left-sidebar.html.twig", "C:\\xampp\\htdocs\\skye-prod\\user\\themes\\landed\\templates\\left-sidebar.html.twig");
    }
}
