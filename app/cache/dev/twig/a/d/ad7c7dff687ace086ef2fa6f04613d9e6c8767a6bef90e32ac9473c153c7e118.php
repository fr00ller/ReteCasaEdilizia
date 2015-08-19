<?php

/* base.html.twig */
class __TwigTemplate_ad7c7dff687ace086ef2fa6f04613d9e6c8767a6bef90e32ac9473c153c7e118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f43f788d8dea1bcc073de9c080ad9dc1c8ad10da4a69cc5582a6a2cdcaa7242 = $this->env->getExtension("native_profiler");
        $__internal_7f43f788d8dea1bcc073de9c080ad9dc1c8ad10da4a69cc5582a6a2cdcaa7242->enter($__internal_7f43f788d8dea1bcc073de9c080ad9dc1c8ad10da4a69cc5582a6a2cdcaa7242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f43f788d8dea1bcc073de9c080ad9dc1c8ad10da4a69cc5582a6a2cdcaa7242->leave($__internal_7f43f788d8dea1bcc073de9c080ad9dc1c8ad10da4a69cc5582a6a2cdcaa7242_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50b1f61cf2b245b1c936f1a209c858ad926c2e2cd8f62b7cd62cfcce0763649e = $this->env->getExtension("native_profiler");
        $__internal_50b1f61cf2b245b1c936f1a209c858ad926c2e2cd8f62b7cd62cfcce0763649e->enter($__internal_50b1f61cf2b245b1c936f1a209c858ad926c2e2cd8f62b7cd62cfcce0763649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50b1f61cf2b245b1c936f1a209c858ad926c2e2cd8f62b7cd62cfcce0763649e->leave($__internal_50b1f61cf2b245b1c936f1a209c858ad926c2e2cd8f62b7cd62cfcce0763649e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a5bb426398a0d352217e0e6c2dc00bd6ca1edc278d72542d665e3835cbb2aa6 = $this->env->getExtension("native_profiler");
        $__internal_6a5bb426398a0d352217e0e6c2dc00bd6ca1edc278d72542d665e3835cbb2aa6->enter($__internal_6a5bb426398a0d352217e0e6c2dc00bd6ca1edc278d72542d665e3835cbb2aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6a5bb426398a0d352217e0e6c2dc00bd6ca1edc278d72542d665e3835cbb2aa6->leave($__internal_6a5bb426398a0d352217e0e6c2dc00bd6ca1edc278d72542d665e3835cbb2aa6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_418a8ace1d7ea07b0fb8bd18ef0c442d2f075fb0d44bf3d9383f5df04e59e939 = $this->env->getExtension("native_profiler");
        $__internal_418a8ace1d7ea07b0fb8bd18ef0c442d2f075fb0d44bf3d9383f5df04e59e939->enter($__internal_418a8ace1d7ea07b0fb8bd18ef0c442d2f075fb0d44bf3d9383f5df04e59e939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_418a8ace1d7ea07b0fb8bd18ef0c442d2f075fb0d44bf3d9383f5df04e59e939->leave($__internal_418a8ace1d7ea07b0fb8bd18ef0c442d2f075fb0d44bf3d9383f5df04e59e939_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40d28f8e3928b135836d827e3df86c85ff55b3adc0f8b8177641401dbf3b009b = $this->env->getExtension("native_profiler");
        $__internal_40d28f8e3928b135836d827e3df86c85ff55b3adc0f8b8177641401dbf3b009b->enter($__internal_40d28f8e3928b135836d827e3df86c85ff55b3adc0f8b8177641401dbf3b009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_40d28f8e3928b135836d827e3df86c85ff55b3adc0f8b8177641401dbf3b009b->leave($__internal_40d28f8e3928b135836d827e3df86c85ff55b3adc0f8b8177641401dbf3b009b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
