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

/* partials/sections/banner.html.twig */
class __TwigTemplate_7cd76f3e17d9579889180c7b3e5ddcca5df564335bfc65d34431e2c5bd2fad5e extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", [])) {
            // line 2
            echo "\t";
            $context["banner_data"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banner", []);
            // line 3
            echo "<!-- Banner -->
\t<section id=\"";
            // line 4
            echo ($context["id"] ?? null);
            echo "\" style=\"background-image: url('";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . (($this->getAttribute(($context["banner_data"] ?? null), "background_image", [])) ? ($this->getAttribute(($context["banner_data"] ?? null), "background_image", [])) : ("banner.jpg"))));
            echo "')\">
\t\t<div class=\"content\">
\t\t\t<header>
\t\t\t\t<h2>";
            // line 7
            echo $this->getAttribute(($context["banner_data"] ?? null), "headline", []);
            echo "</h2>
\t\t\t\t";
            // line 8
            if ($this->getAttribute(($context["banner_data"] ?? null), "quips", [])) {
                // line 9
                echo "\t\t\t\t\t<p>";
                echo twig_join_filter($this->getAttribute(($context["banner_data"] ?? null), "quips", []), "<br/>");
                echo "</p>
\t\t\t\t";
            }
            // line 11
            echo "\t\t\t</header>
\t\t\t<span class=\"image\"><img src=\"";
            // line 12
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . (($this->getAttribute(($context["banner_data"] ?? null), "hero_image", [])) ? ($this->getAttribute(($context["banner_data"] ?? null), "hero_image", [])) : ("pic01.jpg"))));
            echo "\" alt=\"";
            echo $this->getAttribute(($context["banner_data"] ?? null), "hero_alt", []);
            echo "\" /></span>
\t\t</div>
\t";
            // line 14
            if (($context["next_id"] ?? null)) {
                // line 15
                echo "\t\t<a href=\"#";
                echo ($context["next_id"] ?? null);
                echo "\" class=\"goto-next scrolly\">Next</a>
\t";
            }
            // line 17
            echo "\t</section>
";
        } else {
            // line 19
            echo "\t";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, "Notice: homepage banner section not rendered because page header \"banner\" is absent in frontmatter.");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  76 => 17,  70 => 15,  68 => 14,  61 => 12,  58 => 11,  52 => 9,  50 => 8,  46 => 7,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.banner %}
\t{% set banner_data = page.header.banner %}
<!-- Banner -->
\t<section id=\"{{ id }}\" style=\"background-image: url('{{ url('theme://images/' ~ (banner_data.background_image ?: 'banner.jpg') ) }}')\">
\t\t<div class=\"content\">
\t\t\t<header>
\t\t\t\t<h2>{{ banner_data.headline }}</h2>
\t\t\t\t{% if banner_data.quips %}
\t\t\t\t\t<p>{{ banner_data.quips|join('<br/>') }}</p>
\t\t\t\t{% endif %}
\t\t\t</header>
\t\t\t<span class=\"image\"><img src=\"{{ url('theme://images/' ~ (banner_data.hero_image ?: 'pic01.jpg') ) }}\" alt=\"{{ banner_data.hero_alt }}\" /></span>
\t\t</div>
\t{% if next_id %}
\t\t<a href=\"#{{ next_id }}\" class=\"goto-next scrolly\">Next</a>
\t{% endif %}
\t</section>
{% else %}
\t{{ dump('Notice: homepage banner section not rendered because page header \"banner\" is absent in frontmatter.') }}
{% endif %}", "partials/sections/banner.html.twig", "C:\\xampp\\htdocs\\skye-prod\\user\\themes\\landed\\templates\\partials\\sections\\banner.html.twig");
    }
}
