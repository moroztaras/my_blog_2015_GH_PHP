<?php

/* MorozBlogBundle:Comment:newComment.html.twig */
class __TwigTemplate_699b9ea2acf85244e1f6cec78ba0707de31c18d17b9fc268f18c65553c1efc63 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_comment_add", array("postId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <table>
        <tr>
            <td colspan=\"2\" align=\"center\"><strong>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Створення нового коментаря", array(), "messages");
        echo "</strong></td>
        </tr>
        <tr>
            <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label" => "Автор:"));
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'label', array("label" => "Коментар:"));
        echo "</td><td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</td>
        <tr>
            <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Додати коментар", array(), "messages");
        echo "\"></td>
        </tr>
    </table>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MorozBlogBundle:Comment:newComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  51 => 13,  44 => 11,  36 => 8,  30 => 5,  24 => 2,  19 => 1,);
    }
}
