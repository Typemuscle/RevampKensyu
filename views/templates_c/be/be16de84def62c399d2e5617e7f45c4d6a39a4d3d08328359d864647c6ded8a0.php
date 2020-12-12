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

/* confirm.html.twig */
class __TwigTemplate_b60e075c0a1bea1e5947dd209b3ea5a2529531a679c05bdbde317934fa483b8a extends \Twig\Template
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
            <title>ポケモン登録確認</title>
    </head>
    <body>
        <form method=\"post\" action=\"index.php\">
            <table>
                    <tr>
                        <th>なまえ</th>
                        <input type=\"hidden\" name=\"pokemon_name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "pokemon_name", []), "html", null, true);
        echo "\" />
                        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "pokemon_name", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>せつめい</th>
                        <input type=\"hidden\" name=\"detail\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "detail", []), "html", null, true);
        echo "\" />
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "detail", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>HP</th>
                        <input type=\"hidden\" name=\"hp\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "hp", []), "html", null, true);
        echo "\" />
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "hp", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>タイプ1</th>
                        <td>
                            <input type=\"hidden\" name=\"type_id\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "type_id", []), "html", null, true);
        echo "\" />
                            ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["typeArr"] ?? null), $this->getAttribute(($context["dataArr"] ?? null), "type_id", [])), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <th>タイプ2</th>
                        <td>
                        <input type=\"hidden\" name=\"type_id2\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "type_id2", []), "html", null, true);
        echo "\" />
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["typeArr"] ?? null), $this->getAttribute(($context["dataArr"] ?? null), "type_id2", [])), "html", null, true);
        echo "
                        </td>
                    </tr>
                </table>
                <div>
                <input type=\"submit\" name=\"back\" value=\"戻る\" />
                <input type=\"submit\" name=\"complete\" value=\"登録完了\" />
                </div>
        </form>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  89 => 34,  80 => 28,  76 => 27,  68 => 22,  64 => 21,  57 => 17,  53 => 16,  46 => 12,  42 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "confirm.html.twig", "C:\\xampp\\htdocs\\pokemon\\views\\templates\\confirm.html.twig");
    }
}
