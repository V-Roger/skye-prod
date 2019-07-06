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

/* partials/base.html.twig */
class __TwigTemplate_4231ac1d72f1cc8d4465a1de402437379fcbae0e0d813341bb10a44a3f4136c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'banner' => [$this, 'block_banner'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE HTML>
<!--
\tLanded by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang=\"";
        // line 8
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>
<body class=\"";
        // line 45
        echo twig_join_filter([0 => "is-preload", 1 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", [])], " ");
        echo "\">
\t<div id=\"page-wrapper\">

    ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 111
        $this->loadTemplate("partials/sections/signup.html.twig", "partials/base.html.twig", 111)->display(twig_array_merge($context, ["id" => "signup"]));
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 115
        echo "    </div>
";
        // line 116
        $this->displayBlock('bottom', $context, $blocks);
        // line 119
        echo "
</body>
</html>
";
    }

    // line 10
    public function block_head($context, array $blocks = [])
    {
        // line 11
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "descriptive_title", []), "html");
        echo "</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400&display=swap\" rel=\"stylesheet\">

    <!-- TODO: <noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript> -->
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('assets', $context, $blocks);
        // line 42
        echo "
";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css", 1 => 100], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
        // line 25
        echo "    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.min.js", 1 => ["group" => "bottom"]], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.scrolly.min.js", 1 => ["group" => "bottom"]], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.dropotron.min.js", 1 => ["group" => "bottom"]], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.scrollex.min.js", 1 => ["group" => "bottom"]], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/browser.min.js", 1 => ["group" => "bottom"]], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/breakpoints.min.js", 1 => ["group" => "bottom"]], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/util.js", 1 => ["group" => "bottom"]], "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 36
        echo "    ";
    }

    // line 38
    public function block_assets($context, array $blocks = [])
    {
        // line 39
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 40
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
    }

    // line 48
    public function block_header($context, array $blocks = [])
    {
        // line 49
        echo "        <!-- Header -->
            <header id=\"header\">
                ";
        // line 51
        if (($this->getAttribute(($context["page"] ?? null), "template", []) != "home")) {
            // line 52
            echo "                <h1 id=\"logo\">
                    <a href=\"";
            // line 53
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\">
                        <img src=\"";
            // line 54
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
            echo "\" alt=\"";
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
            echo "\" />
                    </a>
                </h1>
                ";
        }
        // line 58
        echo "
                ";
        // line 59
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 75
        echo "
            </header>

            ";
        // line 78
        $this->displayBlock('banner', $context, $blocks);
        // line 79
        echo "
    ";
    }

    // line 59
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 60
        echo "                    <div class=\"menu-icon\" onclick=\"\$(body).toggleClass('nav'); \$(this).toggleClass('clicked');\">
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                    </div>
                    <nav id=\"nav\">
                        ";
        // line 72
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "                    </nav>
                ";
    }

    // line 78
    public function block_banner($context, array $blocks = [])
    {
    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        // line 83
        echo "\t\t<div id=\"main\" class=\"wrapper style1\">
            <div class=\"container\">
\t\t\t\t<header class=\"major\">
\t\t\t\t\t<h2>";
        // line 86
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
                    ";
        // line 87
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "teaser", [])) {
            // line 88
            echo "                        <p>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "teaser", []);
            echo "</p>
                    ";
        }
        // line 90
        echo "                </header>

            ";
        // line 92
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "            </div>
        </div>

";
    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
        // line 93
        echo "            <!-- Content -->
                <section id=\"content\">
                    ";
        // line 95
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "hero.jpg", [], "array"))) {
            // line 96
            echo "                        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", [])) {
                // line 97
                echo "                            ";
                $context["hero_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array"), "url", []));
                // line 98
                echo "                        ";
            } else {
                // line 99
                echo "                            ";
                $context["hero_url"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "hero.jpg", [], "array"), "url", []);
                // line 100
                echo "                            ";
                // line 101
                echo "                        ";
            }
            // line 102
            echo "                        <span class=\"image fit\"><img src=\"";
            echo ($context["hero_url"] ?? null);
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_alt", []);
            echo "\" /></span> ";
            // line 103
            echo "                    ";
        }
        // line 104
        echo "                    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </section>
            ";
    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        // line 113
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 113)->display($context);
    }

    // line 116
    public function block_bottom($context, array $blocks = [])
    {
        // line 117
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 117,  352 => 116,  347 => 113,  344 => 112,  336 => 104,  333 => 103,  327 => 102,  324 => 101,  322 => 100,  319 => 99,  316 => 98,  313 => 97,  310 => 96,  308 => 95,  304 => 93,  301 => 92,  294 => 107,  292 => 92,  288 => 90,  282 => 88,  280 => 87,  276 => 86,  271 => 83,  268 => 82,  263 => 78,  258 => 73,  256 => 72,  242 => 60,  239 => 59,  234 => 79,  232 => 78,  227 => 75,  225 => 59,  222 => 58,  213 => 54,  209 => 53,  206 => 52,  204 => 51,  200 => 49,  197 => 48,  191 => 40,  186 => 39,  183 => 38,  179 => 36,  176 => 35,  173 => 34,  170 => 33,  167 => 32,  164 => 31,  161 => 30,  158 => 29,  155 => 28,  152 => 27,  148 => 25,  145 => 24,  142 => 23,  139 => 22,  134 => 42,  132 => 38,  129 => 37,  127 => 27,  124 => 26,  122 => 22,  115 => 18,  111 => 17,  108 => 16,  106 => 15,  96 => 12,  93 => 11,  90 => 10,  83 => 119,  81 => 116,  78 => 115,  76 => 112,  74 => 111,  72 => 82,  69 => 81,  67 => 48,  61 => 45,  58 => 44,  56 => 10,  51 => 8,  43 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE HTML>
<!--
\tLanded by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ site.descriptive_title|e('html') }}</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400&display=swap\" rel=\"stylesheet\">

    <!-- TODO: <noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript> -->
    {% block stylesheets %}
        {% do assets.addCss('theme://css/main.css', 100) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('theme://js/jquery.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/jquery.scrolly.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/jquery.dropotron.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/jquery.scrollex.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/browser.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/breakpoints.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/util.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/main.js', {'group': 'bottom'}) %}
    {% endblock %}

    {% block assets %}
        {{ assets.css() }}
        {{ assets.js() }}
    {% endblock %}

{% endblock head %}
</head>
<body class=\"{{ ['is-preload', page.header.body_classes]|join(' ') }}\">
\t<div id=\"page-wrapper\">

    {% block header %}
        <!-- Header -->
            <header id=\"header\">
                {% if page.template != 'home' %}
                <h1 id=\"logo\">
                    <a href=\"{{ base_url == '' ? '/' : base_url }}\">
                        <img src=\"{{ url('theme://images/logo.png') }}\" alt=\"{{ site.title }}\" />
                    </a>
                </h1>
                {% endif %}

                {% block header_navigation %}
                    <div class=\"menu-icon\" onclick=\"\$(body).toggleClass('nav'); \$(this).toggleClass('clicked');\">
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                        <div class=\"dot\"></div>
                    </div>
                    <nav id=\"nav\">
                        {% include 'partials/navigation.html.twig' %}
                    </nav>
                {% endblock %}

            </header>

            {% block banner %}{% endblock banner %}

    {% endblock header %}

    {% block body %}
\t\t<div id=\"main\" class=\"wrapper style1\">
            <div class=\"container\">
\t\t\t\t<header class=\"major\">
\t\t\t\t\t<h2>{{ page.title }}</h2>
                    {% if page.header.teaser %}
                        <p>{{ page.header.teaser }}</p>
                    {% endif %}
                </header>

            {% block content %}
            <!-- Content -->
                <section id=\"content\">
                    {% if page.header.hero_image or page.media['hero.jpg'] %}
                        {% if page.header.hero_image %}
                            {% set hero_url = url(page.media[page.header.hero_image].url) %}
                        {% else %}
                            {% set hero_url = page.media['hero.jpg'].url %}
                            {# TODO: try getting alt text from an image meta file #}
                        {% endif %}
                        <span class=\"image fit\"><img src=\"{{ hero_url }}\" alt=\"{{ page.header.hero_alt }}\" /></span> {# NB: wrapping link 'a' element from source template replaced with span - just can't see why link should be here #}
                    {% endif %}
                    {{ page.content }}
                </section>
            {% endblock %}
            </div>
        </div>

{% endblock %}
{% include 'partials/sections/signup.html.twig' with { id: 'signup' } %}
{% block footer %}
    {% include 'partials/footer.html.twig' %}
{% endblock %}
    </div>
{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\Users\\Virgil\\Documents\\perso\\code\\skye-prod\\user\\themes\\landed\\templates\\partials\\base.html.twig");
    }
}
