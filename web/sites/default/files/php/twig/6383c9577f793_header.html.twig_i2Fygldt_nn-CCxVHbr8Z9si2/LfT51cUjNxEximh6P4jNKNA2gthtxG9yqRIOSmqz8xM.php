<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @pleiadebv/templates/layout/header.html.twig */
class __TwigTemplate_ea4bcf74311fb3c0d383ec3a49840d539e7998c58119db401b1526e0e7c255f2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "     
      <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
          <div class=\"navbar-header\">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class=\"nav-toggler waves-effect waves-light d-block d-md-none\"
              href=\"javascript:void(0)\"
              ><i class=\"ti-menu ti-close\"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class=\"navbar-brand\" href=\"https://pleiadedev.ecollectivites.fr/test\">
              <!-- Logo icon -->
              <b class=\"logo-icon\">
                <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-icon.png\"
                  alt=\"homepage\"
                  class=\"dark-logo\"
                />
                <!-- Light Logo icon -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-light-icon.png\"
                  alt=\"homepage\"
                  class=\"light-logo\"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class=\"logo-text\">
                <!-- dark Logo text -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-text.png\"
                  alt=\"homepage\"
                  class=\"dark-logo\"
                />
                <!-- Light Logo text -->
                <img
                  src=\"https://pleiadedev.ecollectivites.fr/test/assets/images/logo-light-text.png\"
                  class=\"light-logo\"
                  alt=\"homepage\"
                />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class=\"topbartoggler d-block d-md-none waves-effect waves-light\"
              href=\"javascript:void(0)\"
              data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\"
              aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
              ><i class=\"ti-more\"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class=\"navbar-nav me-auto\">
              <li class=\"nav-item d-none d-md-block\">
                <a
                  class=\"nav-link sidebartoggler waves-effect waves-light\"
                  href=\"javascript:void(0)\"
                  data-sidebartype=\"mini-sidebar\"
                  ><i class=\"icon-arrow-left-circle\"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- mega menu -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End mega menu -->
              <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class=\"navbar-nav\">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <!-- <li class=\"nav-item search-box d-none d-md-block\">
                <form class=\"app-search mt-3 me-2\">
                  <input
                    type=\"text\"
                    class=\"form-control rounded-pill border-0\"
                    placeholder=\"Search for...\"
                  />
                  <a class=\"srh-btn\"
                    ><i
                      data-feather=\"search\"
                      class=\"feather-sm fill-white mt-n1\"
                    ></i
                  ></a>
                </form>
              </li> -->
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class=\"nav-item dropdown\">
                <a
                  class=\"nav-link dropdown-toggle waves-effect waves-dark\"
                  href=\"#\"
                  data-bs-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                >
                  <img
                    src=";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 137, $this->source), "html", null, true);
        echo "
                    alt=\"user\"
                    width=\"30\"
                    class=\"profile-pic rounded-circle\"
                  />
                </a>
                <div
                  class=\"
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  \"
                >
                  <div
                    class=\"
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-info
                      text-white
                      mb-2
                    \"
                  >
                    <div class=\"\">
                      <img
                        src=";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 164, $this->source), "html", null, true);
        echo "
                        alt=\"user\"
                        class=\"rounded-circle\"
                        width=\"60\"
                      />
                    </div>
                    <div class=\"ms-2\"> 
                      <h4 class=\"mb-0 text-white\">";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_logged_in_name"] ?? null), 171, $this->source), "html", null, true);
        echo "</h4>
                      <p class=\"mb-0\">";
        // line 172
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_email"] ?? null), 172, $this->source), "html", null, true);
        echo "</p>
                    </div>
                  </div>
                  <a class=\"dropdown-item\" href=\"#\"
                    ><i
                      data-feather=\"user\"
                      class=\"feather-sm text-info me-1 ms-1\"
                    ></i>
                    Mon compte</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"#\"
                    ><i
                      data-feather=\"settings\"
                      class=\"feather-sm text-warning me-1 ms-1\"
                    ></i>
                    Gérer mon compte</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"/user/logout\"
                    ><i
                      data-feather=\"log-out\"
                      class=\"feather-sm text-danger me-1 ms-1\"
                    ></i>
                    Déconnexion</a
                  >
                  <div class=\"dropdown-divider\"></div>
                  <div class=\"pl-4 p-2\">
                    <a href=\"#\" class=\"btn d-block w-100 btn-info rounded-pill\"
                      >Voir mon compte</a
                    >
                  </div>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Language  -->
              <!-- ============================================================== -->
              <li class=\"nav-item dropdown\">
                <a
                  class=\"
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                  \"
                  href=\"/user/logout\"
                  data-bs-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                >
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out feather-sm text-danger me-1 ms-1\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
              Déconnexion    
              </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>";
    }

    public function getTemplateName()
    {
        return "@pleiadebv/templates/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 172,  217 => 171,  207 => 164,  177 => 137,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@pleiadebv/templates/layout/header.html.twig", "/var/www/pleiaded9/web/themes/custom/pleiadebv/templates/layout/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 137);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
