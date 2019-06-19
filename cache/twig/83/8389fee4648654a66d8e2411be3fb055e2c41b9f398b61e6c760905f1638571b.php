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

/* partials/components/portals_sidebar.html.twig */
class __TwigTemplate_3e4d32e6b1cc1fdb083e6c386093b683f7841f692b97b194acdba66c30964402 extends \Twig\Template
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
        echo "<section id=\"sidebar\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebars", []), "portals", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["portal"]) {
            // line 3
            echo "\t";
            $context["portal_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($context["portal"], "path", [])], "method");
            // line 4
            echo "\t";
            $context["portal_front"] = $this->getAttribute(($context["portal_page"] ?? null), "header", []);
            // line 5
            echo "\t<section>
\t\t";
            // line 6
            if (($this->getAttribute(($context["portal_front"] ?? null), "hero_image", []) || $this->getAttribute($this->getAttribute(($context["portal_page"] ?? null), "media", []), "hero.jpg", [], "array"))) {
                // line 7
                echo "\t\t\t";
                if ($this->getAttribute(($context["portal_front"] ?? null), "hero_image", [])) {
                    // line 8
                    echo "\t\t\t\t";
                    $context["hero_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://" . $this->getAttribute(($context["portal_front"] ?? null), "hero_image", [])));
                    // line 9
                    echo "\t\t\t";
                } else {
                    // line 10
                    echo "\t\t\t\t";
                    $context["hero_url"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["portal_page"] ?? null), "media", []), "hero.jpg", [], "array"), "url", []);
                    // line 11
                    echo "\t\t\t\t";
                    // line 12
                    echo "\t\t\t";
                }
                // line 13
                echo "\t\t\t<span class=\"image fit\"><img src=\"";
                echo ($context["hero_url"] ?? null);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["portal_front"] ?? null), "hero_alt", []);
                echo "\" /></span> ";
                // line 14
                echo "\t\t";
            }
            // line 15
            echo "\t\t<h3>";
            echo $this->getAttribute(($context["portal_page"] ?? null), "title", []);
            echo "</h3>
\t\t";
            // line 16
            echo \Grav\Common\Utils::safeTruncateHTML($this->getAttribute(($context["portal_page"] ?? null), "content", []), (($this->getAttribute($context["portal"], "words", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["portal"], "words", []), 40)) : (40)));
            echo "
\t\t<footer>
\t\t\t<ul class=\"actions\">
\t\t\t\t<li><a href=\"";
            // line 19
            echo $this->getAttribute(($context["portal_page"] ?? null), "url", []);
            echo "\" class=\"button\">";
            echo (($this->getAttribute($context["portal"], "button_text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["portal"], "button_text", []), "Learn More")) : ("Learn More"));
            echo "</a></li>
\t\t\t</ul>
\t\t</footer>
\t</section>
\t";
            // line 23
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo "<hr />";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "partials/components/portals_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 25,  107 => 23,  98 => 19,  92 => 16,  87 => 15,  84 => 14,  78 => 13,  75 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"sidebar\">
{% for portal in page.header.sidebars.portals %}
\t{% set portal_page =  page.find(portal.path) %}
\t{% set portal_front =  portal_page.header %}
\t<section>
\t\t{% if portal_front.hero_image or portal_page.media['hero.jpg'] %}
\t\t\t{% if portal_front.hero_image %}
\t\t\t\t{% set hero_url = url('theme://' ~ portal_front.hero_image) %}
\t\t\t{% else %}
\t\t\t\t{% set hero_url = portal_page.media['hero.jpg'].url %}
\t\t\t\t{# TODO: try getting alt text from an image meta file #}
\t\t\t{% endif %}
\t\t\t<span class=\"image fit\"><img src=\"{{ hero_url }}\" alt=\"{{ portal_front.hero_alt }}\" /></span> {# NB: wrapping link 'a' element from source template replaced with span - just can't see why link should be here #}
\t\t{% endif %}
\t\t<h3>{{ portal_page.title }}</h3>
\t\t{{ portal_page.content|safe_truncate_html(portal.words|default(40)) }}
\t\t<footer>
\t\t\t<ul class=\"actions\">
\t\t\t\t<li><a href=\"{{ portal_page.url }}\" class=\"button\">{{ portal.button_text|default('Learn More') }}</a></li>
\t\t\t</ul>
\t\t</footer>
\t</section>
\t{% if not loop.last %}<hr />{% endif %}
{% endfor %}
</section>", "partials/components/portals_sidebar.html.twig", "C:\\xampp\\htdocs\\skye-prod\\user\\themes\\landed\\templates\\partials\\components\\portals_sidebar.html.twig");
    }
}
