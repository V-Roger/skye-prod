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

/* home.html.twig */
class __TwigTemplate_efc123ce1cdb545445011053bbfba6eda03134e71eea23d5c5f0a281b384b151 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'banner' => [$this, 'block_banner'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 4
        $context["intro_section_id"] = "intro";
        // line 5
        $context["key_points_section_id"] = "points";
        // line 7
        $context["featured_pages"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => "features"], "method");
        // line 8
        $context["first_feature"] = twig_first($this->env, ($context["featured_pages"] ?? null));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_banner($context, array $blocks = [])
    {
        // line 12
        echo "\t";
        $this->loadTemplate("partials/sections/banner.html.twig", "home.html.twig", 12)->display(twig_array_merge($context, ["id" => "banner", "next_id" => $this->getAttribute(($context["first_feature"] ?? null), "slug", [])]));
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        // line 16
        echo "
    ";
        // line 17
        $context["next_section_id"] = ($context["windows_section_id"] ?? null);
        echo " ";
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured_pages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 19
            echo "        ";
            $context["next_feature"] = $this->getAttribute(($context["featured_pages"] ?? null), "nth", [0 => ($this->getAttribute($context["loop"], "index0", []) + 1)], "method");
            // line 20
            echo "        ";
            $this->loadTemplate("partials/sections/feature.html.twig", "home.html.twig", 20)->display(twig_array_merge($context, ["f" => $context["feature"], "placing" => $this->getAttribute($context["loop"], "index", []), "next_id" => (($this->getAttribute($context["loop"], "last", [])) ? (($context["next_section_id"] ?? null)) : ($this->getAttribute(($context["next_feature"] ?? null), "slug", [])))]));
            // line 21
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("partials/sections/key_points.html.twig", "home.html.twig", 23)->display(twig_array_merge($context, ["id" => ($context["key_points_section_id"] ?? null)]));
        // line 24
        echo "
\t";
        // line 25
        $this->loadTemplate("partials/sections/intro.html.twig", "home.html.twig", 25)->display(twig_array_merge($context, ["id" => ($context["intro_section_id"] ?? null), "next_id" => ((($context["first_feature"] ?? null)) ? ($this->getAttribute(($context["first_feature"] ?? null), "slug", [])) : (""))]));
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  112 => 25,  109 => 24,  107 => 23,  104 => 22,  90 => 21,  87 => 20,  84 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  52 => 12,  49 => 11,  44 => 1,  42 => 8,  40 => 7,  38 => 5,  36 => 4,  30 => 1,);
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

{# set some section identifiers we don;t want to repeat as literals ... #}
{% set intro_section_id = 'intro' %}
{% set key_points_section_id = 'points' %}

{% set featured_pages = page.collection('features') %}
{% set first_feature = featured_pages|first %}


{% block banner %}
\t{% include 'partials/sections/banner.html.twig' with { id: 'banner', next_id: first_feature.slug } %}
{% endblock banner %}

{% block body %}

    {% set next_section_id = windows_section_id %} {# set this to null if there are no more spotlights in this home template #}
    {% for feature in featured_pages %}
        {% set next_feature = featured_pages.nth(loop.index0 + 1) %}
        {% include 'partials/sections/feature.html.twig' with { f: feature, placing: loop.index, next_id: (loop.last ? next_section_id : next_feature.slug) } %}
    {% endfor %}

    {% include 'partials/sections/key_points.html.twig' with { id: key_points_section_id } %}

\t{% include 'partials/sections/intro.html.twig' with { id: intro_section_id, next_id: (first_feature ? first_feature.slug) } %}

{% endblock body %}", "home.html.twig", "C:\\Users\\Virgil\\Documents\\perso\\code\\skye-prod\\user\\themes\\landed\\templates\\home.html.twig");
    }
}
