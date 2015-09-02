<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e7feb7fd7c17c49f2acfe2ea54f594b7c0b0ee447d366dca3965cf3559ee0bbd extends Twig_Template
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
        $__internal_4afdd6fb835a4b56de81b4d4254b401884b3f1e833bd34f30326fecb01f0d65e = $this->env->getExtension("native_profiler");
        $__internal_4afdd6fb835a4b56de81b4d4254b401884b3f1e833bd34f30326fecb01f0d65e->enter($__internal_4afdd6fb835a4b56de81b4d4254b401884b3f1e833bd34f30326fecb01f0d65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4afdd6fb835a4b56de81b4d4254b401884b3f1e833bd34f30326fecb01f0d65e->leave($__internal_4afdd6fb835a4b56de81b4d4254b401884b3f1e833bd34f30326fecb01f0d65e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f2445a202c6534fb99222f7976099ec1dc4a2d8ec4bce950fb14d694a782b31 = $this->env->getExtension("native_profiler");
        $__internal_8f2445a202c6534fb99222f7976099ec1dc4a2d8ec4bce950fb14d694a782b31->enter($__internal_8f2445a202c6534fb99222f7976099ec1dc4a2d8ec4bce950fb14d694a782b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f2445a202c6534fb99222f7976099ec1dc4a2d8ec4bce950fb14d694a782b31->leave($__internal_8f2445a202c6534fb99222f7976099ec1dc4a2d8ec4bce950fb14d694a782b31_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e973f8bf2a6b73ff61d09f2db22f684f32a750517c822112c98fabd4926939 = $this->env->getExtension("native_profiler");
        $__internal_a8e973f8bf2a6b73ff61d09f2db22f684f32a750517c822112c98fabd4926939->enter($__internal_a8e973f8bf2a6b73ff61d09f2db22f684f32a750517c822112c98fabd4926939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8e973f8bf2a6b73ff61d09f2db22f684f32a750517c822112c98fabd4926939->leave($__internal_a8e973f8bf2a6b73ff61d09f2db22f684f32a750517c822112c98fabd4926939_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_08bc53ccf126abac3631bdca8434cbd16483a63a53aced6906a074498e52d804 = $this->env->getExtension("native_profiler");
        $__internal_08bc53ccf126abac3631bdca8434cbd16483a63a53aced6906a074498e52d804->enter($__internal_08bc53ccf126abac3631bdca8434cbd16483a63a53aced6906a074498e52d804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_08bc53ccf126abac3631bdca8434cbd16483a63a53aced6906a074498e52d804->leave($__internal_08bc53ccf126abac3631bdca8434cbd16483a63a53aced6906a074498e52d804_prof);

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
