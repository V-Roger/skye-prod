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

/* partials/navigation.html.twig */
class __TwigTemplate_79eaeefd24a897a6da3f8de1292b5507fb8a88a7421d0a5e716d29ec6a80511f extends \Twig\Template
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
        // line 25
        echo "
<ul>
    ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 28
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("selected") : (""));
                // line 32
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 33
                    echo "                    <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                        <a href=\"";
                    // line 34
                    echo $this->getAttribute($context["page"], "url", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "menu_classes", []);
                    echo "\">
                            ";
                    // line 35
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "
                        </a>
                        <span class=\"children-trigger\" onclick=\"\$(this).toggleClass('active')\">
                            +
                        </span>
                        <ul>
                            ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 42
                        echo "                                <li class=\"";
                        echo ($context["current_page"] ?? null);
                        echo "\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                                    <a href=\"";
                        // line 43
                        echo $this->getAttribute($context["child"], "url", []);
                        echo "\" class=\"";
                        echo $this->getAttribute($this->getAttribute($context["child"], "header", []), "menu_classes", []);
                        echo "\">
                                        ";
                        // line 44
                        echo $this->getAttribute($context["child"], "menu", []);
                        echo "
                                    </a>
                                </li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "                        </ul>
                    </li>
                ";
                } else {
                    // line 51
                    echo "                    <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                        <a href=\"";
                    // line 52
                    echo $this->getAttribute($context["page"], "url", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "menu_classes", []);
                    echo "\">
                            ";
                    // line 53
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 57
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
        }
        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 60
            echo "        <li onclick=\"\$('.menu-icon').removeClass('clicked');\">
            <a href=\"";
            // line 61
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\" class=\"";
            echo $this->getAttribute($context["mitem"], "classes", []);
            echo "\">
                ";
            // line 62
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    <li onclick=\"\$('.menu-icon').removeClass('clicked');\">
        <a href=\"#signup\">
            Contact.
        </a>
    </li>
</ul>

";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("selected") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "            <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_classes", []);
                    echo "\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <span class=\"children-trigger\" onclick=\"\$(this).removeClass('active');\">
                    +
                </span>
                <ul>
                    ";
                    // line 13
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                <a href=\"";
                    // line 18
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_classes", []);
                    echo "\">
                    ";
                    // line 19
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 23,  226 => 19,  220 => 18,  215 => 17,  208 => 13,  199 => 7,  193 => 6,  188 => 5,  185 => 4,  182 => 3,  177 => 2,  165 => 1,  154 => 66,  144 => 62,  138 => 61,  135 => 60,  130 => 59,  127 => 58,  121 => 57,  114 => 53,  108 => 52,  103 => 51,  98 => 48,  88 => 44,  82 => 43,  77 => 42,  73 => 41,  64 => 35,  58 => 34,  53 => 33,  50 => 32,  47 => 31,  42 => 30,  36 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"has-children {{ current_page }}\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                <a href=\"{{ p.url }}\" class=\"{{ p.header.menu_classes }}\">
                    {{ p.menu }}
                </a>
                <span class=\"children-trigger\" onclick=\"\$(this).removeClass('active');\">
                    +
                </span>
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"{{ current_page }}\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                <a href=\"{{ p.url }}\" class=\"{{ p.header.menu_classes }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul>
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
                {% if page.children.visible.count > 0 %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\" class=\"{{ page.header.menu_classes }}\">
                            {{ page.menu }}
                        </a>
                        <span class=\"children-trigger\" onclick=\"\$(this).toggleClass('active')\">
                            +
                        </span>
                        <ul>
                            {% for child in page.children.visible %}
                                <li class=\"{{ current_page }}\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                                    <a href=\"{{ child.url }}\" class=\"{{ child.header.menu_classes }}\">
                                        {{ child.menu }}
                                    </a>
                                </li>
                            {% endfor %}
                        </ul>
                    </li>
                {% else %}
                    <li class=\"{{ current_page }}\" onclick=\"\$('.menu-icon').removeClass('clicked');\">
                        <a href=\"{{ page.url }}\" class=\"{{ page.header.menu_classes }}\">
                            {{ page.menu }}
                        </a>
                    </li>
                {% endif %}
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li onclick=\"\$('.menu-icon').removeClass('clicked');\">
            <a href=\"{{ mitem.url }}\" class=\"{{ mitem.classes }}\">
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
    <li onclick=\"\$('.menu-icon').removeClass('clicked');\">
        <a href=\"#signup\">
            Contact.
        </a>
    </li>
</ul>

", "partials/navigation.html.twig", "C:\\Users\\Virgil\\Documents\\perso\\code\\skye-prod\\user\\themes\\landed\\templates\\partials\\navigation.html.twig");
    }
}
