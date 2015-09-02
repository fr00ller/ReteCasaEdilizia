<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2f752342f38dc4e76a38c03975d1a578c03bd382ddb4f7865a596e22380f240f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bf2e0f9a468323a08f9d3bcdd3a6661c72d0d60a561ef2f807767e21129ac31 = $this->env->getExtension("native_profiler");
        $__internal_8bf2e0f9a468323a08f9d3bcdd3a6661c72d0d60a561ef2f807767e21129ac31->enter($__internal_8bf2e0f9a468323a08f9d3bcdd3a6661c72d0d60a561ef2f807767e21129ac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"it\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"format-detection\" content=\"telephone=no\"/>
    <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Links -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/camera.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/search.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/google-map.css"), "html", null, true);
        echo "\">


      <!--JS-->
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/rd-smoothscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href=\"http://windows.microsoft.com/en-US/internet-explorer/..\">
            <img src=\"images/ie8-panel/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\"
                 alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"/>
        </a>
    </div>
    <script src=\"js/html5shiv.js\"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class=\"page\">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
    <div class=\"logo\" ><img src=\"images/logo.jpg\" ></div>
      <div class=\"container top-sect\">
        <div class=\"navbar-header\">
          <h1 class=\"navbar-brand\">
            <a data-type='rd-navbar-brand'  href=\"./\">Rete Casa<small>Edilizia</small></a>
          </h1>
          <a class=\"search-form_toggle\" href=\"#\"></a>
        </div>

        <div class=\"help-box text-right\">
          <p>Hai bisogno di aiuto?</p>
          <a href=\"callto:#\">0733-965789</a>
          <small><span>Ore:</span>  Tutti i giorni ; &nbsp;8:30 - 18:30 </small>
        </div>
      </div>


      <div id=\"stuck_container\" class=\"stuck_container\">
        <div class=\"container\">   
        <nav class=\"navbar navbar-default navbar-static-top pull-left\">            

            <div class=\"\">  
              <ul class=\"nav navbar-nav sf-menu\" data-type=\"navbar\">
                <li class=\"active\">
                  <a href=\"./\">HOME</a>
                </li>
                <li>
                  <a href=\"index-1.html\">ABOUT</a>
                </li>
                <li class=\"dropdown\">
                  <a href=\"index-2.html\">SERVIZI<span class=\"glyphicon glyphicon-menu-down\" aria-hidden=\"true\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li>
                      <a href=\"#\">Impianti Idraulici</a>
                    </li>
                    <li>
                      <a href=\"#\">Impianti Elettrici</a>                      
                    </li>
                    <li>
                      <a href=\"#\">Costruzioni Edili</a>
                        <ul class=\"dropdown-menu\">
                          <li>
                            <a href=\"#\">Progettazione</a>
                          </li>
                          <li>
                            <a href=\"#\">Realizzazione</a>
                          </li>                      
                        </ul>
                    </li>
                  </ul>
                </li>                
                <li>
                  <a href=\"index-3.html\">PROGETTI</a>
                </li>
                
                <li>
                  <a href=\"index-4.html\">CONTATTI</a>
                </li>
              </ul>                           
            </div>
        </nav>   
        <form class=\"search-form\" action=\"search.php\" method=\"GET\" accept-charset=\"utf-8\">
          <label class=\"search-form_label\">
            <input class=\"search-form_input\" type=\"text\" name=\"s\" autocomplete=\"off\" placeholder=\"\"/>
            <span class=\"search-form_liveout\"></span>
          </label>
          <button class=\"search-form_submit fa-search\" type=\"submit\"></button>
        </form>
             
        </div>

      </div>  
    </header>
    <body>
\t<div class=\"container\">
       <div id=\"login-label\">
\t
            ";
        // line 120
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 121
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 126
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 128
        echo "        </div>

        ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 131
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 132
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "
        <div class=\"form-signin\">
            ";
        // line 139
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 141
        echo "        </div>
        </div>
          <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class=\"top-border\">

    <div class=\"map\">
      <div id=\"google-map\" class=\"map_model\" data-zoom=\"11\"></div>
      <ul class=\"map_locations\">
        <li data-x=\"-73.9874068\" data-y=\"40.643180\" data-basic=\"images/gmap_marker.png\" data-active=\"images/gmap_marker_active.png\">
          <div class=\"location\">
            <h3 class=\"txt-clr1\">
              BUSINESS
              <small>
                COMPANY
              </small>
            </h3>  
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x=\"-74.100000\" data-y=\"40.643180\" data-basic=\"images/gmap_marker2.png\" data-active=\"images/gmap_marker2_active.png\">
          <div class=\"location\">
            <h3 class=\"txt-clr1\">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x=\"-73.8854068\" data-y=\"40.693180\" data-basic=\"images/gmap_marker3.png\" data-active=\"images/gmap_marker3_active.png\">
          <div class=\"location\">
            <h3 class=\"txt-clr1\">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x=\"-73.7874068\" data-y=\"40.613180\" data-basic=\"images/gmap_marker4.png\" data-active=\"images/gmap_marker4_active.png\">
          <div class=\"location\">
            <h3 class=\"txt-clr1\">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
        <li data-x=\"-74.200000\" data-y=\"40.683180\" data-basic=\"images/gmap_marker5.png\" data-active=\"images/gmap_marker5_active.png\">
          <div class=\"location\">
            <h3 class=\"txt-clr1\">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
      </ul>
    </div>

    <section class=\"well1\">
      <div class=\"container\"> 
            <p class=\"rights\">
              Business Company  &#169; <span id=\"copyright-year\"></span>
              <a href=\"index-5.html\">Privacy Policy</a>
              More Business Website Templates at <a rel=\"nofollow\" href=\"http://www.templatemonster.com/category/business-web-templates/\" target=\"_blank\">TemplateMonster.com</a>
            </p>          
      </div> 
    </section>    
  </footer>
  </div>
        <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tm-scripts.js"), "html", null, true);
        echo "\"></script>    

    </body>
</html>


";
        
        $__internal_8bf2e0f9a468323a08f9d3bcdd3a6661c72d0d60a561ef2f807767e21129ac31->leave($__internal_8bf2e0f9a468323a08f9d3bcdd3a6661c72d0d60a561ef2f807767e21129ac31_prof);

    }

    // line 139
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88e93689c455b47a2f9aae9fe5a8425c25f957d93726eabd29d8e7a0e2ee7ca8 = $this->env->getExtension("native_profiler");
        $__internal_88e93689c455b47a2f9aae9fe5a8425c25f957d93726eabd29d8e7a0e2ee7ca8->enter($__internal_88e93689c455b47a2f9aae9fe5a8425c25f957d93726eabd29d8e7a0e2ee7ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 140
        echo "            ";
        
        $__internal_88e93689c455b47a2f9aae9fe5a8425c25f957d93726eabd29d8e7a0e2ee7ca8->leave($__internal_88e93689c455b47a2f9aae9fe5a8425c25f957d93726eabd29d8e7a0e2ee7ca8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 140,  418 => 139,  404 => 311,  400 => 310,  229 => 141,  227 => 139,  223 => 137,  217 => 136,  208 => 133,  203 => 132,  198 => 131,  194 => 130,  190 => 128,  182 => 126,  176 => 123,  172 => 122,  167 => 121,  165 => 120,  66 => 24,  62 => 23,  58 => 22,  51 => 18,  47 => 17,  43 => 16,  37 => 13,  23 => 1,);
    }
}
