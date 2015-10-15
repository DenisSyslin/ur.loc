<?php

/* mcp_header.html */
class __TwigTemplate_f085a857aa1eedb7a0eeb73b7938b6b151a58306b85a9a85518828837715f9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("MCP");
        echo "</h2>

";
        // line 5
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 6
            echo "\t<p class=\"linkmcp responsive-center\">
\t\t[";
            // line 7
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "&nbsp;<a href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "\" data-responsive-text=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "</a>&nbsp;|";
            }
            echo "&nbsp;<a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" data-responsive-text=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a>";
            if ((isset($context["U_MCP_FORUM"]) ? $context["U_MCP_FORUM"] : null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo (isset($context["U_MCP_FORUM"]) ? $context["U_MCP_FORUM"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
                echo "</a>";
            }
            if ((isset($context["U_MCP_TOPIC"]) ? $context["U_MCP_TOPIC"] : null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo (isset($context["U_MCP_TOPIC"]) ? $context["U_MCP_TOPIC"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_TOPIC");
                echo "</a>";
            }
            if ((isset($context["U_MCP_POST"]) ? $context["U_MCP_POST"] : null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo (isset($context["U_MCP_POST"]) ? $context["U_MCP_POST"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_POST");
                echo "</a>";
            }
            echo "&nbsp;]
\t</p>
";
        }
        // line 10
        echo "
<div id=\"tabs\">
\t<ul>
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 14
            echo "\t\t<li class=\"tab";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["l_block1"], "U_TITLE", array());
            echo "\">";
            echo $this->getAttribute($context["l_block1"], "L_TITLE", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\">
\t\t<div id=\"navigation\" role=\"navigation\">
\t\t\t<ul>
\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 28
            echo "\t\t\t";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                // line 29
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block1"], "l_block2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 30
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["l_block2"], "S_SELECTED", array())) {
                        // line 31
                        echo "\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", array())) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", array())) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t";
            }
            // line 37
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div id=\"cp-main\" class=\"mcp-main panel-container\">
\t\t";
        // line 43
        if ((isset($context["MESSAGE"]) ? $context["MESSAGE"] : null)) {
            // line 44
            echo "\t\t<div class=\"content\">
\t\t\t<h2 class=\"message-title\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 46
            echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
            echo "</p>
\t\t\t<p>";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "return_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                echo $this->getAttribute($context["return_links"], "MESSAGE_LINK", array());
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 47,  199 => 46,  195 => 45,  192 => 44,  190 => 43,  183 => 38,  177 => 37,  174 => 36,  168 => 35,  155 => 33,  142 => 31,  139 => 30,  134 => 29,  131 => 28,  127 => 27,  114 => 16,  99 => 14,  95 => 13,  90 => 10,  44 => 7,  41 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}