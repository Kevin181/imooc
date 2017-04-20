<?php

/* index.html */
class __TwigTemplate_5987ca6bf2b8359c47726f60b25e5b9b8cf6c671087d82ce349c31775d3ac877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "index.html", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "\t<li class=\"am-u-sm-3\">
        <div>
            <h1>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "title", array()), "html", null, true);
            echo "</h1>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "content", array()), "html", null, true);
            echo "</p>
            <p><span>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "createtime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span></p>
            <a href=\"/index/info/id/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "id", array()), "html", null, true);
            echo "\">查看全文</a>
\t\t\t<a href=\"/index/del/id/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "id", array()), "html", null, true);
            echo "\">删除留言</a>
        </div>
    </li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout.html\" %}
{% block content %}
<ul>
    {% for val in data %}
\t<li class=\"am-u-sm-3\">
        <div>
            <h1>{{val.title}}</h1>
            <p>{{val.content}}</p>
            <p><span>{{val.createtime|date('Y-m-d H:i:s')}}</span></p>
            <a href=\"/index/info/id/{{val.id}}\">查看全文</a>
\t\t\t<a href=\"/index/del/id/{{val.id}}\">删除留言</a>
        </div>
    </li>
\t{% endfor %}
</ul>
{% endblock %}", "index.html", "D:\\UPUPW\\vhosts\\api.com\\app\\views\\index.html");
    }
}
