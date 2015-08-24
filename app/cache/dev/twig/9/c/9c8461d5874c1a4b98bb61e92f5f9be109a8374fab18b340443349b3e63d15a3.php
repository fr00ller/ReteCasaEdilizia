<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9c8461d5874c1a4b98bb61e92f5f9be109a8374fab18b340443349b3e63d15a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c61483ea34ce05c04449f303f4157f9173d9dcf89a9a453969addc3f53f2ad1 = $this->env->getExtension("native_profiler");
        $__internal_9c61483ea34ce05c04449f303f4157f9173d9dcf89a9a453969addc3f53f2ad1->enter($__internal_9c61483ea34ce05c04449f303f4157f9173d9dcf89a9a453969addc3f53f2ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c61483ea34ce05c04449f303f4157f9173d9dcf89a9a453969addc3f53f2ad1->leave($__internal_9c61483ea34ce05c04449f303f4157f9173d9dcf89a9a453969addc3f53f2ad1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e8de7826142bbbd7b1f63cd96be1efd0988d3e5c3245ed30575fe2f93e2246e = $this->env->getExtension("native_profiler");
        $__internal_2e8de7826142bbbd7b1f63cd96be1efd0988d3e5c3245ed30575fe2f93e2246e->enter($__internal_2e8de7826142bbbd7b1f63cd96be1efd0988d3e5c3245ed30575fe2f93e2246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2e8de7826142bbbd7b1f63cd96be1efd0988d3e5c3245ed30575fe2f93e2246e->leave($__internal_2e8de7826142bbbd7b1f63cd96be1efd0988d3e5c3245ed30575fe2f93e2246e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_403c12b2449836e7e520f002889a8bf1e3fa2a188855bab6bfec1cd90a9c7656 = $this->env->getExtension("native_profiler");
        $__internal_403c12b2449836e7e520f002889a8bf1e3fa2a188855bab6bfec1cd90a9c7656->enter($__internal_403c12b2449836e7e520f002889a8bf1e3fa2a188855bab6bfec1cd90a9c7656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_403c12b2449836e7e520f002889a8bf1e3fa2a188855bab6bfec1cd90a9c7656->leave($__internal_403c12b2449836e7e520f002889a8bf1e3fa2a188855bab6bfec1cd90a9c7656_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a637390ca21ecddc1fa26275579be9b2d079fe06bb3fd2947d5ec906ba86724b = $this->env->getExtension("native_profiler");
        $__internal_a637390ca21ecddc1fa26275579be9b2d079fe06bb3fd2947d5ec906ba86724b->enter($__internal_a637390ca21ecddc1fa26275579be9b2d079fe06bb3fd2947d5ec906ba86724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a637390ca21ecddc1fa26275579be9b2d079fe06bb3fd2947d5ec906ba86724b->leave($__internal_a637390ca21ecddc1fa26275579be9b2d079fe06bb3fd2947d5ec906ba86724b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
