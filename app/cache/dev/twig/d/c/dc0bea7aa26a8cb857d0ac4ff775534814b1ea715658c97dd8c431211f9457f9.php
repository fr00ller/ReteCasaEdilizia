<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dc0bea7aa26a8cb857d0ac4ff775534814b1ea715658c97dd8c431211f9457f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e732c14443d9671e27332b732d6ec6bd4a7b7a7c510ca208ecf517b7f6d196 = $this->env->getExtension("native_profiler");
        $__internal_88e732c14443d9671e27332b732d6ec6bd4a7b7a7c510ca208ecf517b7f6d196->enter($__internal_88e732c14443d9671e27332b732d6ec6bd4a7b7a7c510ca208ecf517b7f6d196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e732c14443d9671e27332b732d6ec6bd4a7b7a7c510ca208ecf517b7f6d196->leave($__internal_88e732c14443d9671e27332b732d6ec6bd4a7b7a7c510ca208ecf517b7f6d196_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d03eef7a8513291f4be40300bf96d00a4c0920acc75d5c63cbb93a3a1cc3360 = $this->env->getExtension("native_profiler");
        $__internal_3d03eef7a8513291f4be40300bf96d00a4c0920acc75d5c63cbb93a3a1cc3360->enter($__internal_3d03eef7a8513291f4be40300bf96d00a4c0920acc75d5c63cbb93a3a1cc3360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3d03eef7a8513291f4be40300bf96d00a4c0920acc75d5c63cbb93a3a1cc3360->leave($__internal_3d03eef7a8513291f4be40300bf96d00a4c0920acc75d5c63cbb93a3a1cc3360_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
