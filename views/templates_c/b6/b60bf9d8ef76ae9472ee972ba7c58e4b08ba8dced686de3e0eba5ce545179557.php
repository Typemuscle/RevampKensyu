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

/* regist.html.twig */
class __TwigTemplate_9bec199cf4950689240daab005bcef71c696950052c7a0f54d84fcf6a8f6d087 extends \Twig\Template
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
        echo "css/pokemon.css\" rel=\"stylesheet\" type=\"text/css\" />
        <title>新規登録</title>
    </head>
    <body>
        <p>新しいポケモンを登録する</p>
            <form method=\"post\" action=\"index.php\">
                <table>
                    <tr>
                        <th>なまえ<span class=\"red\">*</span></th>
                        <td>
                            <input type=\"text\" name=\"pokemon_name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "pokemon_name", []), "html", null, true);
        echo "\" />
                            ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "pokemon_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "pokemon_name", []), "html", null, true);
            echo "</span>";
        }
        // line 18
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>せつめい<span class=\"red\">*</span></th>
                        <td>
                            <textarea name=\"detail\" rows=\"4\" cols=\"30\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "detail", []), "html", null, true);
        echo "</textarea>
                            ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "detail", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "detail", []), "html", null, true);
            echo "</span>";
        }
        // line 25
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>HP<span class=\"red\">*</span></th>
                        <td>
                            <input type=\"number\" name=\"hp\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "hp", []), "html", null, true);
        echo "\" />
                            ";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "hp", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "hp", []), "html", null, true);
            echo "</span>";
        }
        // line 32
        echo "                        </td>
                    </tr>
                    <tr>
                        <th>タイプ1<span class=\"red\">*</span></th>
                        <td>
                            <select name=\"type_id\">
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 39
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "type_id", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </select>
                            ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "type_id", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "type_id", []), "html", null, true);
            echo "</span>";
        }
        // line 43
        echo "                        </td>
                    </tr>
                    <th>タイプ2</th>
                        <td>
                            <select name=\"type_id2\">
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            // line 49
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "type_id2", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            </select>
                            ";
        // line 52
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "type_id2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "type_id2", []), "html", null, true);
            echo "</span>";
        }
        // line 53
        echo "                        </td>
                    </tr>
                </table>
                <p><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "index.php?display=back\">戻る</a></p>
                <div><input type=\"submit\" name=\"confirm\" value=\"登録確認\" /></div>
             </form>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "regist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 56,  171 => 53,  165 => 52,  162 => 51,  147 => 49,  143 => 48,  136 => 43,  130 => 42,  127 => 41,  112 => 39,  108 => 38,  100 => 32,  94 => 31,  90 => 30,  83 => 25,  77 => 24,  73 => 23,  66 => 18,  60 => 17,  56 => 16,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "regist.html.twig", "C:\\xampp\\htdocs\\pokemon\\views\\templates\\regist.html.twig");
    }
}
