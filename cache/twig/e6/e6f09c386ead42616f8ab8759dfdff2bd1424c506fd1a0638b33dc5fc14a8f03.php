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
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_banner($context, array $blocks = [])
    {
        // line 8
        echo "\t";
        $this->loadTemplate("partials/sections/banner.html.twig", "home.html.twig", 8)->display(twig_array_merge($context, ["id" => "banner", "next_id" => ($context["intro_section_id"] ?? null)]));
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "
    ";
        // line 13
        $context["featured_pages"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => "features"], "method");
        // line 14
        echo "    ";
        $context["first_feature"] = twig_first($this->env, ($context["featured_pages"] ?? null));
        // line 15
        echo "
\t";
        // line 16
        $this->loadTemplate("partials/sections/intro.html.twig", "home.html.twig", 16)->display(twig_array_merge($context, ["id" => ($context["intro_section_id"] ?? null), "next_id" => ((($context["first_feature"] ?? null)) ? ($this->getAttribute(($context["first_feature"] ?? null), "slug", [])) : (""))]));
        // line 17
        echo "
    ";
        // line 18
        $context["next_section_id"] = ($context["windows_section_id"] ?? null);
        echo " ";
        // line 19
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
            // line 20
            echo "        ";
            $context["next_feature"] = $this->getAttribute(($context["featured_pages"] ?? null), "nth", [0 => ($this->getAttribute($context["loop"], "index0", []) + 1)], "method");
            // line 21
            echo "        ";
            $this->loadTemplate("partials/sections/feature.html.twig", "home.html.twig", 21)->display(twig_array_merge($context, ["f" => $context["feature"], "placing" => $this->getAttribute($context["loop"], "index", []), "next_id" => (($this->getAttribute($context["loop"], "last", [])) ? (($context["next_section_id"] ?? null)) : ($this->getAttribute(($context["next_feature"] ?? null), "slug", [])))]));
            // line 22
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
        // line 23
        echo "
    ";
        // line 24
        $this->loadTemplate("partials/sections/key_points.html.twig", "home.html.twig", 24)->display(twig_array_merge($context, ["id" => ($context["key_points_section_id"] ?? null)]));
        // line 25
        echo "    ";
        $this->loadTemplate("partials/sections/signup.html.twig", "home.html.twig", 25)->display(twig_array_merge($context, ["id" => "signup"]));
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
        return array (  121 => 26,  118 => 25,  116 => 24,  113 => 23,  99 => 22,  96 => 21,  93 => 20,  75 => 19,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  59 => 13,  56 => 12,  53 => 11,  48 => 8,  45 => 7,  40 => 1,  38 => 5,  36 => 4,  30 => 1,);
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

{% block banner %}
\t{% include 'partials/sections/banner.html.twig' with { id: 'banner', next_id: intro_section_id } %}
{% endblock banner %}

{% block body %}

    {% set featured_pages = page.collection('features') %}
    {% set first_feature = featured_pages|first %}

\t{% include 'partials/sections/intro.html.twig' with { id: intro_section_id, next_id: (first_feature ? first_feature.slug) } %}

    {% set next_section_id = windows_section_id %} {# set this to null if there are no more spotlights in this home template #}
    {% for feature in featured_pages %}
        {% set next_feature = featured_pages.nth(loop.index0 + 1) %}
        {% include 'partials/sections/feature.html.twig' with { f: feature, placing: loop.index, next_id: (loop.last ? next_section_id : next_feature.slug) } %}
    {% endfor %}

    {% include 'partials/sections/key_points.html.twig' with { id: key_points_section_id } %}
    {% include 'partials/sections/signup.html.twig' with { id: 'signup' } %}

{% endblock body %}", "home.html.twig", "C:\\xampp\\htdocs\\skye-prod\\user\\themes\\landed\\templates\\home.html.twig");
    }
}
