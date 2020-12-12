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

/* pokemon_type.html.twig */
class __TwigTemplate_2a352ef9cf36e5b91b0628cf7eaee2253d9c29aef0a4979adce8fb17dc0fcb5d extends \Twig\Template
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
        echo "<div id=\"type\">
    <ul>
        <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "index.php\">全て</a></li>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_constant("pokemon\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "index.php?type_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "type_id", []), "html", null, true);
            echo "&type_id2=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "type_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "type_name", []), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "pokemon_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pokemon_type.html.twig", "C:\\xampp\\htdocs\\pokemon\\views\\templates\\pokemon_type.html.twig");
    }
}
