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

/* partials/sections/signup.html.twig */
class __TwigTemplate_04014013dfec48a816bd99b6cd2171e35133c1c6e9d7c746e02ab131829e4a08 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "signup", [])) {
            // line 2
            echo "\t";
            $context["signup_data"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "signup", []);
            // line 3
            echo "<!-- \"Five\" -->
\t<section id=\"";
            // line 4
            echo ($context["id"] ?? null);
            echo "\" class=\"wrapper special fade\">
\t\t<div class=\"container\">
\t\t\t<header>
\t\t\t\t<h2>";
            // line 7
            echo $this->getAttribute(($context["signup_data"] ?? null), "headline", []);
            echo "</h2>
\t\t\t\t<p>";
            // line 8
            echo $this->getAttribute(($context["signup_data"] ?? null), "byline", []);
            echo "</p>
\t\t\t</header>
\t\t\t<form method=\"post\" action=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute(($context["signup_data"] ?? null), "form", []), "target", []);
            echo "\" class=\"cta\">
\t\t\t\t<div class=\"row gtr-uniform gtr-50\">
\t\t\t\t\t<div class=\"col-8 col-12-xsmall\"><input type=\"email\" name=\"email\" id=\"email\" placeholder=\"";
            // line 12
            echo (($this->getAttribute($this->getAttribute(($context["signup_data"] ?? null), "form", [], "any", false, true), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["signup_data"] ?? null), "form", [], "any", false, true), "placeholder", []), "Your Email Address")) : ("Your Email Address"));
            echo "\" /></div>
\t\t\t\t\t<div class=\"col-4 col-12-xsmall\"><input type=\"submit\" value=\"";
            // line 13
            echo (($this->getAttribute($this->getAttribute(($context["signup_data"] ?? null), "form", [], "any", false, true), "button_text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["signup_data"] ?? null), "form", [], "any", false, true), "button_text", []), "Get Started")) : ("Get Started"));
            echo "\" class=\"fit primary\" /></div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</section>
";
        } else {
            // line 19
            echo "\t";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, "Notice: homepage signup section not rendered because page header \"signup\" is absent in frontmatter.");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sections/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  62 => 13,  58 => 12,  53 => 10,  48 => 8,  44 => 7,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.signup %}
\t{% set signup_data = page.header.signup %}
<!-- \"Five\" -->
\t<section id=\"{{ id }}\" class=\"wrapper special fade\">
\t\t<div class=\"container\">
\t\t\t<header>
\t\t\t\t<h2>{{ signup_data.headline }}</h2>
\t\t\t\t<p>{{ signup_data.byline }}</p>
\t\t\t</header>
\t\t\t<form method=\"post\" action=\"{{ signup_data.form.target }}\" class=\"cta\">
\t\t\t\t<div class=\"row gtr-uniform gtr-50\">
\t\t\t\t\t<div class=\"col-8 col-12-xsmall\"><input type=\"email\" name=\"email\" id=\"email\" placeholder=\"{{ signup_data.form.placeholder|default('Your Email Address') }}\" /></div>
\t\t\t\t\t<div class=\"col-4 col-12-xsmall\"><input type=\"submit\" value=\"{{ signup_data.form.button_text|default('Get Started') }}\" class=\"fit primary\" /></div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</section>
{% else %}
\t{{ dump('Notice: homepage signup section not rendered because page header \"signup\" is absent in frontmatter.') }}
{% endif %}", "partials/sections/signup.html.twig", "C:\\xampp\\htdocs\\skye-prod\\user\\themes\\landed\\templates\\partials\\sections\\signup.html.twig");
    }
}
