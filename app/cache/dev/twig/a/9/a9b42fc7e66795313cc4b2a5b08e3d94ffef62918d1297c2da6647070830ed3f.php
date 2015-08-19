<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a9b42fc7e66795313cc4b2a5b08e3d94ffef62918d1297c2da6647070830ed3f extends Twig_Template
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
        $__internal_10776524f2fc3041e67752f0640f46d32d69de8dcfb2eac44d61132dfedbbdbd = $this->env->getExtension("native_profiler");
        $__internal_10776524f2fc3041e67752f0640f46d32d69de8dcfb2eac44d61132dfedbbdbd->enter($__internal_10776524f2fc3041e67752f0640f46d32d69de8dcfb2eac44d61132dfedbbdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10776524f2fc3041e67752f0640f46d32d69de8dcfb2eac44d61132dfedbbdbd->leave($__internal_10776524f2fc3041e67752f0640f46d32d69de8dcfb2eac44d61132dfedbbdbd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22f21d968bbb23ddea0bd562704dc7e2fe29bf22439e1c933c54ed6ece549d01 = $this->env->getExtension("native_profiler");
        $__internal_22f21d968bbb23ddea0bd562704dc7e2fe29bf22439e1c933c54ed6ece549d01->enter($__internal_22f21d968bbb23ddea0bd562704dc7e2fe29bf22439e1c933c54ed6ece549d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_22f21d968bbb23ddea0bd562704dc7e2fe29bf22439e1c933c54ed6ece549d01->leave($__internal_22f21d968bbb23ddea0bd562704dc7e2fe29bf22439e1c933c54ed6ece549d01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5442d08910bb9fa0d69c7fcfe1ed79a695a3dfcbae000603b76a41bd2280cad1 = $this->env->getExtension("native_profiler");
        $__internal_5442d08910bb9fa0d69c7fcfe1ed79a695a3dfcbae000603b76a41bd2280cad1->enter($__internal_5442d08910bb9fa0d69c7fcfe1ed79a695a3dfcbae000603b76a41bd2280cad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5442d08910bb9fa0d69c7fcfe1ed79a695a3dfcbae000603b76a41bd2280cad1->leave($__internal_5442d08910bb9fa0d69c7fcfe1ed79a695a3dfcbae000603b76a41bd2280cad1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3735dffb2ab8e5b5a31924b06ef9eb09623abc7f18d2b080cea0682accdda521 = $this->env->getExtension("native_profiler");
        $__internal_3735dffb2ab8e5b5a31924b06ef9eb09623abc7f18d2b080cea0682accdda521->enter($__internal_3735dffb2ab8e5b5a31924b06ef9eb09623abc7f18d2b080cea0682accdda521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3735dffb2ab8e5b5a31924b06ef9eb09623abc7f18d2b080cea0682accdda521->leave($__internal_3735dffb2ab8e5b5a31924b06ef9eb09623abc7f18d2b080cea0682accdda521_prof);

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
