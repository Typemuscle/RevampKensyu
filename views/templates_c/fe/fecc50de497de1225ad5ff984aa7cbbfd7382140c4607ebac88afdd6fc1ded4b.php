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

/* party.html.twig */
class __TwigTemplate_8cec55a9204f7275da124f91766c7e80d870b4c73d83dde3809a634555123567 extends \Twig\Template
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
            <div id=\"party_list\">
                <p>パーティー編集</p>
                <p><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "index.php\">ポケモン一覧へ戻る</a></p>
                <p>現在編成数:";
        // line 11
        echo twig_escape_filter($this->env, ($context["sumNum"] ?? null), "html", null, true);
        echo "体</p>
                ";
        // line 12
        if ((($context["sumNum"] ?? null) > 6)) {
            // line 13
            echo "                <div class=\"sumNumError\"><p>パーティーは6体以下で編成してください</p></div>
                ";
        }
        // line 15
        echo "                ";
        if ((($context["sumNum"] ?? null) != ($context["unique"] ?? null))) {
            // line 16
            echo "                <div class=\"sumNumError\"><p>パーティーに同じポケモンを２体以上編成することはできません</p></div>
                ";
        }
        // line 18
        echo "                    ";
        if ((twig_length_filter($this->env, ($context["dataArr"] ?? null)) == 0)) {
            // line 19
            echo "                        <p>ポケモンが登録されていません</p>
                    ";
        } else {
            // line 21
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 22
                echo "                            <div class=\"pokemon\">
                                <ul>
                                    <li class=\"image\"><img src=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
                echo ".png\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pokemon_name", []), "html", null, true);
                echo "\" /></li>
                                    <li class=\"name\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pokemon_name", []), "html", null, true);
                echo "</li>
                                    <li class=\"hp\">HP/";
                // line 26
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "hp", []), 0, ".", ","), "html", null, true);
                echo "</li>
                                    <li><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
                echo "index.php?display=party&party_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "party_id", []), "html", null, true);
                echo "\">削除</a></li>
                                </ul>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    ";
        }
        // line 32
        echo "            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "party.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  109 => 31,  97 => 27,  93 => 26,  89 => 25,  81 => 24,  77 => 22,  72 => 21,  68 => 19,  65 => 18,  61 => 16,  58 => 15,  54 => 13,  52 => 12,  48 => 11,  44 => 10,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "party.html.twig", "C:\\xampp\\htdocs\\pokemon\\views\\templates\\party.html.twig");
    }
}
