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
        // line 79
        echo "
    ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('footer', $context, $blocks);
        // line 112
        echo "
    </div>
";
        // line 114
        $this->displayBlock('bottom', $context, $blocks);
        // line 117
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
        // line 56
        echo "
                ";
        // line 57
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 73
        echo "
            </header>

            ";
        // line 76
        $this->displayBlock('banner', $context, $blocks);
        // line 77
        echo "
    ";
    }

    // line 57
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 58
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
        // line 70
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 70)->display($context);
        // line 71
        echo "                    </nav>
                ";
    }

    // line 76
    public function block_banner($context, array $blocks = [])
    {
    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        // line 81
        echo "\t\t<div id=\"main\" class=\"wrapper style1\">
            <div class=\"container\">
\t\t\t\t<header class=\"major\">
\t\t\t\t\t<h2>";
        // line 84
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
                    ";
        // line 85
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "teaser", [])) {
            // line 86
            echo "                        <p>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "teaser", []);
            echo "</p>
                    ";
        }
        // line 88
        echo "                </header>

            ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "            </div>
        </div>
";
    }

    // line 90
    public function block_content($context, array $blocks = [])
    {
        // line 91
        echo "            <!-- Content -->
                <section id=\"content\">
                    ";
        // line 93
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "hero.jpg", [], "array"))) {
            // line 94
            echo "                        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", [])) {
                // line 95
                echo "                            ";
                $context["hero_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array"), "url", []));
                // line 96
                echo "                        ";
            } else {
                // line 97
                echo "                            ";
                $context["hero_url"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "hero.jpg", [], "array"), "url", []);
                // line 98
                echo "                            ";
                // line 99
                echo "                        ";
            }
            // line 100
            echo "                        <span class=\"image fit\"><img src=\"";
            echo ($context["hero_url"] ?? null);
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_alt", []);
            echo "\" /></span> ";
            // line 101
            echo "                    ";
        }
        // line 102
        echo "                    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </section>
            ";
    }

    // line 109
    public function block_footer($context, array $blocks = [])
    {
        // line 110
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 110)->display($context);
    }

    // line 114
    public function block_bottom($context, array $blocks = [])
    {
        // line 115
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
        return array (  338 => 115,  335 => 114,  330 => 110,  327 => 109,  319 => 102,  316 => 101,  310 => 100,  307 => 99,  305 => 98,  302 => 97,  299 => 96,  296 => 95,  293 => 94,  291 => 93,  287 => 91,  284 => 90,  278 => 105,  276 => 90,  272 => 88,  266 => 86,  264 => 85,  260 => 84,  255 => 81,  252 => 80,  247 => 76,  242 => 71,  240 => 70,  226 => 58,  223 => 57,  218 => 77,  216 => 76,  211 => 73,  209 => 57,  206 => 56,  202 => 49,  199 => 48,  193 => 40,  188 => 39,  185 => 38,  181 => 36,  178 => 35,  175 => 34,  172 => 33,  169 => 32,  166 => 31,  163 => 30,  160 => 29,  157 => 28,  154 => 27,  150 => 25,  147 => 24,  144 => 23,  141 => 22,  136 => 42,  134 => 38,  131 => 37,  129 => 27,  126 => 26,  124 => 22,  117 => 18,  113 => 17,  110 => 16,  108 => 15,  98 => 12,  95 => 11,  92 => 10,  85 => 117,  83 => 114,  79 => 112,  77 => 109,  74 => 108,  72 => 80,  69 => 79,  67 => 48,  61 => 45,  58 => 44,  56 => 10,  51 => 8,  43 => 2,  41 => 1,);
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
                {# <h1 id=\"logo\">
                    <a href=\"{{ base_url == '' ? '/' : base_url }}\">
                        <img src=\"{{ url('theme://images/logo.png') }}\" alt=\"{{ site.title }}\" />
                    </a>
                </h1> #}

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
