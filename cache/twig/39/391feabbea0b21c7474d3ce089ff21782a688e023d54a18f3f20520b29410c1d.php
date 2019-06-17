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

/* partials/sections/feature.html.twig */
class __TwigTemplate_3aacf9e64d17d7a9b361e76a4cb19b3d16caf3dd10f7b5c0332786df2e8ae9d8 extends \Twig\Template
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
        echo "<!-- ";
        echo $this->getAttribute(($context["f"] ?? null), "slug", []);
        echo " -->
\t";
        // line 2
        $context["extra_classes"] = (((($context["placing"] ?? null) % 2 == 0)) ? ("style1 left") : ("style1 right"));
        // line 3
        echo "\t";
        $context["feature_data"] = $this->getAttribute($this->getAttribute(($context["f"] ?? null), "header", []), "spotlight", []);
        // line 4
        echo "\t<section id=\"";
        echo $this->getAttribute(($context["f"] ?? null), "slug", []);
        echo "\" class=\"spotlight ";
        echo ($context["extra_classes"] ?? null);
        echo "\">
\t\t";
        // line 5
        if ($this->getAttribute(($context["feature_data"] ?? null), "image", [])) {
            // line 6
            echo "\t\t\t";
            $context["feature_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["f"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), $this->getAttribute(($context["feature_data"] ?? null), "image", []), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["f"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), $this->getAttribute(($context["feature_data"] ?? null), "image", []), [], "array"), $this->getAttribute(($context["media"] ?? null), ("theme://" . $this->getAttribute(($context["feature_data"] ?? null), "image", [])), [], "array"))) : ($this->getAttribute(($context["media"] ?? null), ("theme://" . $this->getAttribute(($context["feature_data"] ?? null), "image", [])), [], "array")));
            // line 7
            echo "\t\t";
        } else {
            // line 8
            echo "\t\t\t";
            $context["feature_image"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["f"] ?? null), "media", []), "images", []), "feature.jpg", [], "array");
            // line 9
            echo "\t\t";
        }
        // line 10
        echo "\t\t<span class=\"image fit main\"><img src=\"";
        echo $this->getAttribute(($context["feature_image"] ?? null), "url", []);
        echo "\" alt=\"\" /></span>
\t\t<div class=\"content\">
\t\t\t<header>
\t\t\t\t<h2>";
        // line 13
        echo $this->getAttribute(($context["feature_data"] ?? null), "headline", []);
        echo "</h2>
\t\t\t\t<p>";
        // line 14
        echo $this->getAttribute(($context["feature_data"] ?? null), "subheading", []);
        echo "</p>
\t\t\t</header>
\t\t\t<p>";
        // line 16
        echo $this->getAttribute(($context["feature_data"] ?? null), "blurb", []);
        echo "</p>
\t\t\t<ul class=\"actions\">
\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->getAttribute(($context["f"] ?? null), "url", []);
        echo "\" class=\"button\">";
        echo (($this->getAttribute($this->getAttribute(($context["feature_data"] ?? null), "button", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["feature_data"] ?? null), "button", [], "any", false, true), "text", []), "Learn More")) : ("Learn More"));
        echo "</a></li>
\t\t\t</ul>
\t\t</div>
\t\t";
        // line 21
        if (($context["next_id"] ?? null)) {
            // line 22
            echo "\t\t\t<a href=\"#";
            echo ($context["next_id"] ?? null);
            echo "\" class=\"goto-next scrolly\">Next</a>
\t\t";
        }
        // line 24
        echo "\t</section>";
    }

    public function getTemplateName()
    {
        return "partials/sections/feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  92 => 22,  90 => 21,  82 => 18,  77 => 16,  72 => 14,  68 => 13,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  40 => 4,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- {{ f.slug }} -->
\t{% set extra_classes = placing is even ? 'style1 left' : 'style1 right' %}
\t{% set feature_data = f.header.spotlight %}
\t<section id=\"{{ f.slug }}\" class=\"spotlight {{ extra_classes }}\">
\t\t{% if feature_data.image %}
\t\t\t{% set feature_image = f.media.images[feature_data.image]|default(media['theme://' ~ feature_data.image]) %}
\t\t{% else %}
\t\t\t{% set feature_image = f.media.images['feature.jpg'] %}
\t\t{% endif %}
\t\t<span class=\"image fit main\"><img src=\"{{ feature_image.url }}\" alt=\"\" /></span>
\t\t<div class=\"content\">
\t\t\t<header>
\t\t\t\t<h2>{{ feature_data.headline }}</h2>
\t\t\t\t<p>{{ feature_data.subheading }}</p>
\t\t\t</header>
\t\t\t<p>{{ feature_data.blurb }}</p>
\t\t\t<ul class=\"actions\">
\t\t\t\t<li><a href=\"{{ f.url }}\" class=\"button\">{{ feature_data.button.text|default('Learn More') }}</a></li>
\t\t\t</ul>
\t\t</div>
\t\t{% if next_id %}
\t\t\t<a href=\"#{{ next_id }}\" class=\"goto-next scrolly\">Next</a>
\t\t{% endif %}
\t</section>", "partials/sections/feature.html.twig", "C:\\xampp\\htdocs\\skye-prod\\user\\themes\\landed\\templates\\partials\\sections\\feature.html.twig");
    }
}
