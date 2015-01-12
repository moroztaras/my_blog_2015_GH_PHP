<?php

/* MorozBlogBundle:Comment:comments.html.twig */
class __TwigTemplate_8bae39be815b75904f2a44a8df12b137a751575dedb81cd6aebe3eca890d2af6 extends Twig_Template
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
        echo "<p>
<table>
    <tr>
        <td>";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("Автор:", array(), "messages");
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "html", null, true);
        echo "</td>
    <tr>
    <tr>
        <td>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Створено:", array(), "messages");
        echo "</td><td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</td>
    <tr>
    <tr>
        <td>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Коментар:", array(), "messages");
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment", array()), "html", null, true);
        echo "</td>
    <tr>
</table>
</p>";
    }

    public function getTemplateName()
    {
        return "MorozBlogBundle:Comment:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  32 => 7,  24 => 4,  19 => 1,);
    }
}
