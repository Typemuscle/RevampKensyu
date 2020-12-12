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

/* detail.html.twig */
class __TwigTemplate_59ec045f187d37da4eab31453f9bcc4af096540bed121a3620c1ba3831b67d24 extends \Twig\Template
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
        echo "<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "js/jquery-3.2.1.min.js\"></script>
        <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "js/pokemon.js\"></script>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "css/pokemon.css\"
        rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <input type=\"hidden\" name=\"entry_url\"
        value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "\" id=\"entry_url\" >
        <div id=\"wrapper\">
            ";
        // line 13
        $this->loadTemplate("pokemon_type.html.twig", "detail.html.twig", 13)->display($context);
        // line 14
        echo "            <div id=\"pokemon_detail\">
                <div class=\"image\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "images/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pokemonData"] ?? null), "image", []), "html", null, true);
        echo ".png\"
                    alt=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pokemonData"] ?? null), "pokemon_name", []), "html", null, true);
        echo "\" />
                </div>
                <div class=\"detail\">
                    <dl>
                        <dt>なまえ</dt><dd>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pokemonData"] ?? null), "pokemon_name", []), "html", null, true);
        echo "</dd>
                        <dt>せつめい</dt><dd>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pokemonData"] ?? null), "detail", []), "html", null, true);
        echo "</dd>
                        <dt>HP/</dt><dd>";
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["pokemonData"] ?? null), "hp", []), 0, ".", ","), "html", null, true);
        echo "</dd>
                        <input type=\"hidden\" name=\"pokemon_id\" id=\"pokemon_id\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pokemonData"] ?? null), "pokemon_id", []), "html", null, true);
        echo " \">
                    </dl>
                </div>
                <div class=\"party_in\">
                    <input type=\"button\" name=\"back\" value=\"一覧へ戻る\" onclick=\"history.back(); return false;\" />
                    <input type=\"button\" name=\"party_in\" value=\"パーティーへ組み込む\" id=\"party_in\" />
                </div>
            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  83 => 23,  79 => 22,  75 => 21,  68 => 17,  62 => 16,  58 => 14,  56 => 13,  51 => 11,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "detail.html.twig", "C:\\xampp\\htdocs\\pokemon\\views\\templates\\detail.html.twig");
    }
}
