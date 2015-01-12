<?php

/* MorozBlogBundle::baseBlogTemplate.html.twig */
class __TwigTemplate_a6d0f743a780b5cba99b690a85f5c6fae8b33d8aefeba0dd2baee60a17e6174e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"viewport\" content=\"width-device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>
<body>
";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-taerdet=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Блог - Мороз Тараса", array(), "messages");
        echo "</a>
            <div class=\"nav-collapse collapse\">
                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Головна", array(), "messages");
        echo "</a></li>
                    <li class=\"active\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("blog_post_new");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Створити пост", array(), "messages");
        echo "</a></li>
                    <li class=\"active\">
                        <form action=\"#\" method=\"POST\" class=\"form-search\">
                            <input type=\"text\" name=\"search\" class=\"input-medium search-query\"/>
                            <input type=\"submit\" class=\"btn\" value=\"";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("Пошук", array(), "messages");
        echo "\"/>
                        </form>
                    </li>
                    <li class=\"active\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Uk</a></li>
                    <li class=\"active\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("blog_index", array("_locale" => "ru"));
        echo "\">Ru</a></li>
                    <li class=\"active\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("blog_index", array("_locale" => "en"));
        echo "\">En</a></li>
                </ul>
            </div><!--/.nav-collapse-->
        </div>
    </div>
</div>
<div class=\"container\">
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "    <div id=\"clear\"></div>
</div><!--/container-->
<footer>
    <p>Copyright © 2015 ";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Блог - Мороз Тарас В. Всі права захищені", array(), "messages");
        echo ".</p>
</footer>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <!---bootstrap-->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/morozblog/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/morozblog/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!---my_style-->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/my_blog/my_style/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "        Тут повинен бути контент! Добавте його!
    ";
    }

    public function getTemplateName()
    {
        return "MorozBlogBundle::baseBlogTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 52,  154 => 51,  149 => 22,  143 => 16,  138 => 14,  134 => 13,  131 => 12,  128 => 11,  123 => 5,  114 => 57,  109 => 54,  107 => 51,  97 => 44,  93 => 43,  89 => 42,  83 => 39,  74 => 35,  68 => 34,  60 => 31,  50 => 23,  48 => 22,  40 => 18,  38 => 11,  29 => 5,  23 => 1,);
    }
}
