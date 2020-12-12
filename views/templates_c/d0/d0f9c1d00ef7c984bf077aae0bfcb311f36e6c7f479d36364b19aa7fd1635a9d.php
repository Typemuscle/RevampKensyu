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

/* list.html.twig */
class __TwigTemplate_e1dc61d64645b3d3d7b697b9bd9b2d8f42d5f1a41cef81e2e54b858b308536eb extends \Twig\Template
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
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "css/pokemon.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <div id=\"wrapper\">
            ";
        // line 8
        $this->loadTemplate("pokemon_type.html.twig", "list.html.twig", 8)->display($context);
        // line 9
        echo "            <p><a href=\"";
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "index.php?display=regist\">みつけたポケモンを登録する</a></p>
            <div id=\"pokemon_list\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 12
            echo "                    <div class=\"pokemon\">
                        <ul>
                            <li class=\"name\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "index.php?display=detail&pokemon_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pokemon_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pokemon_name", []), "html", null, true);
            echo "</a></li>                        <li>HP/";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "hp", []), 0, ".", ","), "html", null, true);
            echo "</li>
                            <li class=\"image\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "index.php?display=detail&pokemon_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pokemon_id", []), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
            echo ".png\"alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pokemon_name", []), "html", null, true);
            echo "\" /></a></li>
                            <li class=\"detail\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "index.php?display=detail&pokemon_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pokemon_id", []), "html", null, true);
            echo "\">詳細</a></li>
                        </ul>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
        </div>
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  80 => 16,  68 => 15,  58 => 14,  54 => 12,  50 => 11,  44 => 9,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "list.html.twig", "C:\\xampp\\htdocs\\pokemon\\views\\templates\\list.html.twig");
    }
}
