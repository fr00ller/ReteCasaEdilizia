<?php

/* default/categorie.html.twig */
class __TwigTemplate_16feeebe917de13d3b5c3a573f4c573f6363261172b801af8a00e1fed178fc88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/categorie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_112c2599654dfde180fb3ae49aad846da67e40e1c8f5992e99b7f0b5ed68deab = $this->env->getExtension("native_profiler");
        $__internal_112c2599654dfde180fb3ae49aad846da67e40e1c8f5992e99b7f0b5ed68deab->enter($__internal_112c2599654dfde180fb3ae49aad846da67e40e1c8f5992e99b7f0b5ed68deab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112c2599654dfde180fb3ae49aad846da67e40e1c8f5992e99b7f0b5ed68deab->leave($__internal_112c2599654dfde180fb3ae49aad846da67e40e1c8f5992e99b7f0b5ed68deab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2297ae5648ab68a510eba292b401e99022962baf6a92630e664e3b2688e611ac = $this->env->getExtension("native_profiler");
        $__internal_2297ae5648ab68a510eba292b401e99022962baf6a92630e664e3b2688e611ac->enter($__internal_2297ae5648ab68a510eba292b401e99022962baf6a92630e664e3b2688e611ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Categoria</span> </h1>
            </div>

            
            <div id=\"next\">
               ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
               ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>

        </div>
    </div>
";
        
        $__internal_2297ae5648ab68a510eba292b401e99022962baf6a92630e664e3b2688e611ac->leave($__internal_2297ae5648ab68a510eba292b401e99022962baf6a92630e664e3b2688e611ac_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee40d4b0ea8e7ededafc2ab3c1b5bbdeab866ebeaed7798f22f07bb58c02a667 = $this->env->getExtension("native_profiler");
        $__internal_ee40d4b0ea8e7ededafc2ab3c1b5bbdeab866ebeaed7798f22f07bb58c02a667->enter($__internal_ee40d4b0ea8e7ededafc2ab3c1b5bbdeab866ebeaed7798f22f07bb58c02a667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_ee40d4b0ea8e7ededafc2ab3c1b5bbdeab866ebeaed7798f22f07bb58c02a667->leave($__internal_ee40d4b0ea8e7ededafc2ab3c1b5bbdeab866ebeaed7798f22f07bb58c02a667_prof);

    }

    public function getTemplateName()
    {
        return "default/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 22,  59 => 14,  55 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
