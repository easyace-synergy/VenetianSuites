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

/* C:\xampp\htdocs\hotel/themes/demo/partials/site/footer.htm */
class __TwigTemplate_564da18c1b61e29264c0221556d0315cde62c92c02ffeff1314490427fcc6f68 extends \Twig\Template
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
        echo "<!-- Footer -->

<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Column -->
            <div class=\"col-lg-6 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_content footer_about\">
                        <div class=\"logo_container footer_logo\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\">The Venetian Suites</a></div>
                        </div>
                        <p class=\"footer_about_text\">";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/tour.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                        <ul class=\"footer_social_list\">
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

           
            <!-- Footer Column -->
            <div class=\"col-lg-6 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_title\">contact info</div>
                    <div class=\"footer_content footer_contact\">
                        <ul class=\"contact_info_list\">
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/placeholder.svg");
        echo "\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">House 18Y P.O Sodeinde, opposite Yoruba mosque, off Augustus Aikhomu way, Utako, Abuja</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/phone-call.svg");
        echo "\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">07034111236, 09036635015</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/message.svg");
        echo "\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"mailto:thevenetian.suites@gmail.com?Subject=What can we help you with\" target=\"_top\">thevenetian.suites@gmail.com</a></div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright -->

<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 order-lg-1 order-2  \">
                <div class=\"copyright_content d-flex flex-row align-items-center\">
                    <div>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </i> Designed by <a href=\"https://www.easyacesynergy.com\" target=\"_blank\">EasyAce Synergy</a></div>
                </div>
            </div>
            <div class=\"col-lg-9 order-lg-2 order-1\">
                <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                    <div class=\"footer_nav\">
                        <ul class=\"footer_nav_list\">
                            <li class=\"footer_nav_item\"><a href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">home</a></li>
                            <li class=\"footer_nav_item\"><a href=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">about us</a></li>
                            <li class=\"footer_nav_item\"><a href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">offers</a></li>
                            <li class=\"footer_nav_item\"><a href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 73,  131 => 72,  127 => 71,  123 => 70,  92 => 42,  85 => 38,  78 => 34,  53 => 14,  48 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->

<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Column -->
            <div class=\"col-lg-6 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_content footer_about\">
                        <div class=\"logo_container footer_logo\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\">The Venetian Suites</a></div>
                        </div>
                        <p class=\"footer_about_text\">{% content 'placeholder/tour.txt' %}</p>
                        <ul class=\"footer_social_list\">
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

           
            <!-- Footer Column -->
            <div class=\"col-lg-6 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_title\">contact info</div>
                    <div class=\"footer_content footer_contact\">
                        <ul class=\"contact_info_list\">
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"{{ 'assets/images/placeholder.svg'|theme }}\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">House 18Y P.O Sodeinde, opposite Yoruba mosque, off Augustus Aikhomu way, Utako, Abuja</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"{{ 'assets/images/phone-call.svg'|theme }}\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">07034111236, 09036635015</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"{{ 'assets/images/message.svg'|theme }}\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"mailto:thevenetian.suites@gmail.com?Subject=What can we help you with\" target=\"_top\">thevenetian.suites@gmail.com</a></div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright -->

<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 order-lg-1 order-2  \">
                <div class=\"copyright_content d-flex flex-row align-items-center\">
                    <div>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </i> Designed by <a href=\"https://www.easyacesynergy.com\" target=\"_blank\">EasyAce Synergy</a></div>
                </div>
            </div>
            <div class=\"col-lg-9 order-lg-2 order-1\">
                <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                    <div class=\"footer_nav\">
                        <ul class=\"footer_nav_list\">
                            <li class=\"footer_nav_item\"><a href=\"{{ 'home'|page }}\">home</a></li>
                            <li class=\"footer_nav_item\"><a href=\"{{ 'about'|page }}\">about us</a></li>
                            <li class=\"footer_nav_item\"><a href=\"{{ 'offers'|page }}\">offers</a></li>
                            <li class=\"footer_nav_item\"><a href=\"{{ 'contact'|page }}\">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>", "C:\\xampp\\htdocs\\hotel/themes/demo/partials/site/footer.htm", "");
    }
}
