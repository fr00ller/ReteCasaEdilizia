<?php

/* base.html.twig */
class __TwigTemplate_e122054469697ffec8855a98143f6de2ffed9c8647c04634fd700db78fed72dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c179fbef6366ecacd4cbe942f65d6dcc44591bddfa090a66162801f5d4625c3 = $this->env->getExtension("native_profiler");
        $__internal_0c179fbef6366ecacd4cbe942f65d6dcc44591bddfa090a66162801f5d4625c3->enter($__internal_0c179fbef6366ecacd4cbe942f65d6dcc44591bddfa090a66162801f5d4625c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "        
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
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tm-scripts.js"), "html", null, true);
        echo "\"></script>    

    </body>
</html>
";
        
        $__internal_0c179fbef6366ecacd4cbe942f65d6dcc44591bddfa090a66162801f5d4625c3->leave($__internal_0c179fbef6366ecacd4cbe942f65d6dcc44591bddfa090a66162801f5d4625c3_prof);

    }

    // line 117
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f5dc0b825bfc8aff8d533b4fb98c3a62844006e3598774de04dec0d97d0436 = $this->env->getExtension("native_profiler");
        $__internal_95f5dc0b825bfc8aff8d533b4fb98c3a62844006e3598774de04dec0d97d0436->enter($__internal_95f5dc0b825bfc8aff8d533b4fb98c3a62844006e3598774de04dec0d97d0436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_95f5dc0b825bfc8aff8d533b4fb98c3a62844006e3598774de04dec0d97d0436->leave($__internal_95f5dc0b825bfc8aff8d533b4fb98c3a62844006e3598774de04dec0d97d0436_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d49245dbfad0abc745a042c832a36514995ac118bb4442aebe0ec4a4729280c7 = $this->env->getExtension("native_profiler");
        $__internal_d49245dbfad0abc745a042c832a36514995ac118bb4442aebe0ec4a4729280c7->enter($__internal_d49245dbfad0abc745a042c832a36514995ac118bb4442aebe0ec4a4729280c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 118
        echo "            ";
        
        $__internal_d49245dbfad0abc745a042c832a36514995ac118bb4442aebe0ec4a4729280c7->leave($__internal_d49245dbfad0abc745a042c832a36514995ac118bb4442aebe0ec4a4729280c7_prof);

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
        return array (  368 => 118,  351 => 117,  339 => 288,  335 => 287,  165 => 119,  163 => 117,  67 => 24,  63 => 23,  59 => 22,  52 => 18,  48 => 17,  44 => 16,  38 => 13,  24 => 1,);
    }
}
