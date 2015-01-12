<?php

/* MorozBlogBundle:Post:index.html.twig */
class __TwigTemplate_bc43361096fb582266e1baec226a1d6ae5ec2c2247a78827adeeeb69cd98f58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MorozBlogBundle::baseBlogTemplate.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MorozBlogBundle::baseBlogTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Головна  сторінка - Блог", array(), "messages");
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post_show", array("postId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
            <h2>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
        </a>
        <p>";
            // line 8
            echo $this->env->getExtension('translator')->getTranslator()->trans("Автор:", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo " | ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Створено:", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "postedDate", array()), "d-m-Y"), "html", null, true);
            echo " | ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Переглядів:", array(), "messages");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "counter", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MorozBlogBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  61 => 8,  56 => 6,  51 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
