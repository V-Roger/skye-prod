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

/* partials/sections/intro.html.twig */
class __TwigTemplate_0868a387186eb34d109ace21437cc61add3f699a791ea4f8f67c87c53c42740e extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "intro", [])) {
            // line 2
            echo "\t";
            $context["intro_data"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "intro", []);
            // line 3
            echo "<!-- \"One\" -->
\t<section id=\"";
            // line 4
            echo ($context["id"] ?? null);
            echo "\" class=\"spotlight style1 bottom\">
\t\t<span class=\"image fit main\"><img src=\"";
            // line 5
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . (($this->getAttribute(($context["intro_data"] ?? null), "hero_image", [])) ? ($this->getAttribute(($context["intro_data"] ?? null), "hero_image", [])) : ("pic02.jpg"))));
            echo "\" alt=\"";
            echo $this->getAttribute(($context["intro_data"] ?? null), "hero_alt", []);
            echo "\" /></span>
\t\t<div class=\"content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-12-medium\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t";
            // line 11
            if ($this->getAttribute(($context["intro_data"] ?? null), "headline", [])) {
                // line 12
                echo "\t\t\t\t\t\t\t<h2>";
                echo $this->getAttribute(($context["intro_data"] ?? null), "headline", []);
                echo "</h2>
\t\t\t\t\t\t\t<p>";
                // line 13
                echo $this->getAttribute(($context["intro_data"] ?? null), "byline", []);
                echo "</p>
\t\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "
\t\t\t\t\t\t\t";
                // line 16
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, "Notice: homepage intro section uses page content in place of frontmatter values because page header \"intro.headline\" is absent in frontmatter.");
                echo "
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t</header>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- FIXME: let's assume strictly 2 blocks for now -->
\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["intro_data"] ?? null), "blocks", []));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 23
                echo "\t\t\t\t\t<div class=\"col-4 col-12-medium\">
\t\t\t\t\t\t<p>";
                // line 24
                echo $context["block"];
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            // line 30
            if (($context["next_id"] ?? null)) {
                // line 31
                echo "\t\t<a href=\"#";
                echo ($context["next_id"] ?? null);
                echo "\" class=\"goto-next scrolly\">Next</a>
\t";
            }
            // line 33
            echo "\t</section>
";
        } else {
            // line 35
            echo "\t";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, "Notice: homepage intro section not rendered because page header \"intro\" is absent in frontmatter.");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  110 => 33,  104 => 31,  102 => 30,  97 => 27,  88 => 24,  85 => 23,  81 => 22,  75 => 18,  70 => 16,  65 => 15,  60 => 13,  55 => 12,  53 => 11,  42 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.intro %}
\t{% set intro_data = page.header.intro %}
<!-- \"One\" -->
\t<section id=\"{{ id }}\" class=\"spotlight style1 bottom\">
\t\t<span class=\"image fit main\"><img src=\"{{ url('theme://images/' ~ (intro_data.hero_image ?: 'pic02.jpg') ) }}\" alt=\"{{ intro_data.hero_alt }}\" /></span>
\t\t<div class=\"content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-12-medium\">
\t\t\t\t\t\t<header>
\t\t\t\t\t\t{% if intro_data.headline %}
\t\t\t\t\t\t\t<h2>{{ intro_data.headline }}</h2>
\t\t\t\t\t\t\t<p>{{ intro_data.byline }}</p>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t\t\t{{ dump('Notice: homepage intro section uses page content in place of frontmatter values because page header \"intro.headline\" is absent in frontmatter.') }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</header>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- FIXME: let's assume strictly 2 blocks for now -->
\t\t\t\t\t{% for block in intro_data.blocks %}
\t\t\t\t\t<div class=\"col-4 col-12-medium\">
\t\t\t\t\t\t<p>{{ block }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% if next_id %}
\t\t<a href=\"#{{ next_id }}\" class=\"goto-next scrolly\">Next</a>
\t{% endif %}
\t</section>
{% else %}
\t{{ dump('Notice: homepage intro section not rendered because page header \"intro\" is absent in frontmatter.') }}
{% endif %}", "partials/sections/intro.html.twig", "C:\\xampp\\htdocs\\skye-prod\\user\\themes\\landed\\templates\\partials\\sections\\intro.html.twig");
    }
}
