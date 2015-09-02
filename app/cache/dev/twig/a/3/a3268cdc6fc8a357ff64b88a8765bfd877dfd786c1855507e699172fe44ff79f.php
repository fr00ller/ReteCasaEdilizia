<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a3268cdc6fc8a357ff64b88a8765bfd877dfd786c1855507e699172fe44ff79f extends Twig_Template
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
        $__internal_908215e1e97fe6af61f4fea1130eca7c19702637e83a2c004f7e6f375e951dd4 = $this->env->getExtension("native_profiler");
        $__internal_908215e1e97fe6af61f4fea1130eca7c19702637e83a2c004f7e6f375e951dd4->enter($__internal_908215e1e97fe6af61f4fea1130eca7c19702637e83a2c004f7e6f375e951dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_908215e1e97fe6af61f4fea1130eca7c19702637e83a2c004f7e6f375e951dd4->leave($__internal_908215e1e97fe6af61f4fea1130eca7c19702637e83a2c004f7e6f375e951dd4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
    }
}
