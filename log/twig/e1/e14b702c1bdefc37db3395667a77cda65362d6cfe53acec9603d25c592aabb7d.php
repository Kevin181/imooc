<?php

/* layout.html */
class __TwigTemplate_e12e084f3f37276857f11bedcfa35c1e560be90afdbdc780093190c9c12c2d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>首页</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telphone=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/amazeui.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/app.css\">
</head>
<body>
    <header class=\"am-topbar am-text-center\">
        <h1 class=\"am-sm-12\">超简单留言模板</h1>
        <div class=\"am-g\">
            <a href=\"/\" class=\"am-btn-default\">所有留言</a>
            <a href=\"/index/add\" class=\"am-btn-default\">添加留言</a>
        </div>
    </header>
    <div class=\"am-g content\">
        ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "    </div>
    <footer class=\"am-footer\">
        <p>© 2017 超简单留言模板</p>
    </footer>
    <!--[if lt IE 9]>
    <script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"http://cdn.staticfile.ory/modernizr/2.8.3/modernizr.js\"></script>
    <script src=\"/assets/js/amazeui.ie8polyfill.min.js\"></script>
    <![endif]-->

    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src=\"/assets/js/jquery-3.2.1.min.js\"></script>
    <!--<![endif]-->

    <script src=\"/assets/js/amazeui.min.js\"></script>
</body>
</html>";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  66 => 23,  46 => 26,  44 => 23,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>首页</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telphone=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/amazeui.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/app.css\">
</head>
<body>
    <header class=\"am-topbar am-text-center\">
        <h1 class=\"am-sm-12\">超简单留言模板</h1>
        <div class=\"am-g\">
            <a href=\"/\" class=\"am-btn-default\">所有留言</a>
            <a href=\"/index/add\" class=\"am-btn-default\">添加留言</a>
        </div>
    </header>
    <div class=\"am-g content\">
        {% block content %}

        {% endblock %}
    </div>
    <footer class=\"am-footer\">
        <p>© 2017 超简单留言模板</p>
    </footer>
    <!--[if lt IE 9]>
    <script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"http://cdn.staticfile.ory/modernizr/2.8.3/modernizr.js\"></script>
    <script src=\"/assets/js/amazeui.ie8polyfill.min.js\"></script>
    <![endif]-->

    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src=\"/assets/js/jquery-3.2.1.min.js\"></script>
    <!--<![endif]-->

    <script src=\"/assets/js/amazeui.min.js\"></script>
</body>
</html>", "layout.html", "G:\\UPUPW\\vhosts\\kevin.com\\app\\views\\layout.html");
    }
}
