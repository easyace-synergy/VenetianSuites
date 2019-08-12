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

/* C:\xampp\htdocs\hotel/themes/demo/partials/site/header.htm */
class __TwigTemplate_0092d49e718c64f7db0e4f3775dd65842403c46b81fd54f8716f553fc32bfdb3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t\t\t<div class=\"phone\"><i class=\"fa fa-phone\"></i> +2347034111236, 090366350155</div>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t<ul class=\"social_list\">
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_box ml-auto\">
\t\t\t\t\t\t\t<!-- <div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div> -->
\t\t\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"offers.php\">Book Reservations</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>

\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\">The Venetian Suites</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"#\">home</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"about.php\">about us</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"offers.php\">offers</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"blog.php\">news</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"contact.php\">contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 91,  95 => 47,  91 => 46,  87 => 45,  83 => 44,  76 => 40,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t\t\t<div class=\"phone\"><i class=\"fa fa-phone\"></i> +2347034111236, 090366350155</div>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t<ul class=\"social_list\">
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_box ml-auto\">
\t\t\t\t\t\t\t<!-- <div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div> -->
\t\t\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"offers.php\">Book Reservations</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>

\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\">The Venetian Suites</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"{{ 'home'|page }}\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"{{ 'about'|page }}\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"{{ 'offers'|page }}\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"{{ 'contact'|page }}\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"#\">home</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"about.php\">about us</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"offers.php\">offers</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"blog.php\">news</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"contact.php\">contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->", "C:\\xampp\\htdocs\\hotel/themes/demo/partials/site/header.htm", "");
    }
}
