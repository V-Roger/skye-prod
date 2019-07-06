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

/* partials/sections/key_points.html.twig */
class __TwigTemplate_7c19a2d2601a1758ee6c2d40b1308ce75c90dc24b8ca015711f96f5fe944835d extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "key_points", [])) {
            // line 2
            echo "\t";
            $context["key_points_data"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "key_points", []);
            // line 3
            echo "<!-- \"Four\" -->
\t<section id=\"";
            // line 4
            echo ($context["id"] ?? null);
            echo "\" class=\"wrapper style1 special fade-up\">
\t\t<div class=\"container\">

\t\t\t<header class=\"major\">
\t\t\t\t<h2>";
            // line 8
            echo $this->getAttribute(($context["key_points_data"] ?? null), "headline", []);
            echo "</h2>
\t\t\t\t<p>";
            // line 9
            echo $this->getAttribute(($context["key_points_data"] ?? null), "byline", []);
            echo "</p>
\t\t\t</header>

\t\t\t<div class=\"box alt\">
\t\t\t\t<div class=\"row gtr-uniform\">
\t\t\t\t<!-- FIXME: let's assume strictly 6 items for now -->
\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["key_points_data"] ?? null), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                // line 16
                echo "\t\t\t\t\t<section class=\"col-3 col-6-medium col-6-xsmall keypoint\">
\t\t\t\t\t\t";
                // line 17
                if ($this->getAttribute($context["point"], "target", [])) {
                    // line 18
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["point"], "target", []);
                    echo "\">
\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t<img src=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . $this->getAttribute($context["point"], "image", [])));
                echo "\" alt=\"";
                echo $this->getAttribute($context["point"], "heading", []);
                echo "\">
\t\t\t\t\t\t<h3>";
                // line 21
                echo $this->getAttribute($context["point"], "heading", []);
                echo "</h3>
\t\t\t\t\t\t";
                // line 22
                if ($this->getAttribute($context["point"], "target", [])) {
                    // line 23
                    echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t<p>";
                echo $this->getAttribute($context["point"], "point", []);
                echo "</p>
\t\t\t\t\t</section>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 31
            if ($this->getAttribute(($context["key_points_data"] ?? null), "cta", [])) {
                // line 32
                echo "\t\t\t\t<footer class=\"major\">
\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t<li><a href=\"";
                // line 34
                echo $this->getAttribute($this->getAttribute(($context["key_points"] ?? null), "cta", []), "target", []);
                echo "\" class=\"button\">";
                echo $this->getAttribute($this->getAttribute(($context["key_points_data"] ?? null), "cta", []), "text", []);
                echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t";
            }
            // line 38
            echo "
\t\t</div>
\t</section>

";
        } else {
            // line 43
            echo "\t";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, "Notice: homepage key points section not rendered because page header \"key_points\" is absent in frontmatter.");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/key_points.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  120 => 38,  111 => 34,  107 => 32,  105 => 31,  100 => 28,  90 => 25,  86 => 23,  84 => 22,  80 => 21,  73 => 20,  67 => 18,  65 => 17,  62 => 16,  58 => 15,  49 => 9,  45 => 8,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.key_points %}
\t{% set key_points_data = page.header.key_points %}
<!-- \"Four\" -->
\t<section id=\"{{ id }}\" class=\"wrapper style1 special fade-up\">
\t\t<div class=\"container\">

\t\t\t<header class=\"major\">
\t\t\t\t<h2>{{ key_points_data.headline }}</h2>
\t\t\t\t<p>{{ key_points_data.byline }}</p>
\t\t\t</header>

\t\t\t<div class=\"box alt\">
\t\t\t\t<div class=\"row gtr-uniform\">
\t\t\t\t<!-- FIXME: let's assume strictly 6 items for now -->
\t\t\t\t{% for point in key_points_data.items %}
\t\t\t\t\t<section class=\"col-3 col-6-medium col-6-xsmall keypoint\">
\t\t\t\t\t\t{% if point.target %}
\t\t\t\t\t\t\t<a href=\"{{ point.target }}\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<img src=\"{{ url('theme://images/' ~ point.image) }}\" alt=\"{{ point.heading }}\">
\t\t\t\t\t\t<h3>{{ point.heading }}</h3>
\t\t\t\t\t\t{% if point.target %}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<p>{{ point.point }}</p>
\t\t\t\t\t</section>
\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if key_points_data.cta %}
\t\t\t\t<footer class=\"major\">
\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t<li><a href=\"{{ key_points.cta.target }}\" class=\"button\">{{ key_points_data.cta.text }}</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t{% endif %}

\t\t</div>
\t</section>

{% else %}
\t{{ dump('Notice: homepage key points section not rendered because page header \"key_points\" is absent in frontmatter.') }}
{% endif %}", "partials/sections/key_points.html.twig", "C:\\Users\\Virgil\\Documents\\perso\\code\\skye-prod\\user\\themes\\landed\\templates\\partials\\sections\\key_points.html.twig");
    }
}
