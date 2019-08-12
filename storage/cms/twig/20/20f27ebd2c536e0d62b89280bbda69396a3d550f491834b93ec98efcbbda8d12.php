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

/* C:\xampp\htdocs\hotel/themes/demo/pages/home.htm */
class __TwigTemplate_5683c993c825db815eff7298a17561b2cea0d121e5c166714f1db79dd8888a75 extends \Twig\Template
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
        echo "<div class=\"home\">
\t\t
\t\t<!-- Home Slider -->

\t\t<div class=\"home_slider_container\">
\t\t\t
\t\t\t<div class=\"owl-carousel owl-theme home_slider\">

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<!-- Image by https://unsplash.com/@anikindimitry -->
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home_slider.jpg");
        echo ")\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<h1>Venetian Suites</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home_slider.jpg");
        echo ")\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<h1>Venetian Suites</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/home_slider.jpg");
        echo ")\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<h1>Venetian Suites</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t<!-- Home Slider Nav - Prev -->
\t\t\t<div class=\"home_slider_nav home_slider_prev\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_prev'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Home Slider Nav - Next -->
\t\t\t<div class=\"home_slider_nav home_slider_next\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_next'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
\t\t\t</div>

\t\t\t<!-- Home Slider Dots -->

\t\t\t<div class=\"home_slider_dots\">
\t\t\t\t<ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
\t\t\t\t\t<li class=\"home_slider_custom_dot active\"><div></div>01.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>02.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>03.</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>

\t<!-- Search -->
";
        // line 102
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("reservationform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 103
        echo "
\t<!-- Intro -->
\t
\t<div class=\"intro\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"intro_title text-center\">We have the best Rooms</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t<div class=\"intro_text text-center\">
\t\t\t\t\t\t<p class=\"intro-text\"> ";
        // line 116
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/tour.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row intro_items\">

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@dnevozhai -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url(";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/windows.jpg");
        echo ")\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1 class=\"standard\">Standard</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From &#x20A6; 14,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@hellolightbulb -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url(";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bed5.jpg");
        echo ")\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Deluxe</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From  &#x20A6; 18,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@willianjusten -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url(";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bed2.jpg");
        echo ")\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Executive</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From &#x20A6; 25,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@willianjusten -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url(";
        // line 203
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bed2.jpg");
        echo ")\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Diplomat</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From &#x20A6; 35,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_5\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- CTA -->

\t<div class=\"cta\">
\t\t<!-- Image by https://unsplash.com/@thanni -->
\t\t<div class=\"cta_background\" style=\"background-image:url(";
        // line 230
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cta.jpg");
        echo ")\"></div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- CTA Slider -->

\t\t\t\t\t<div class=\"cta_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme cta_slider\">

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">Highlights</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Stay with us and enjoy the convenience of staying in close proximity to the key parts of the city.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 252
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">Highlights</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Plan your next events and meetings with us; our meeting venues are equipped with state of the art facilities and a dedicated planning team.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 266
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">Highlights</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Our dining options include one of the most exclusive Italian restaurants in Lagos and a pool bar that offers live music, grills and Nigerian meals.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"";
        // line 280
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("offers");
        echo "\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- CTA Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_4\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- CTA Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_5\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t
\t</div>


\t<!-- Testimonials -->

\t<div class=\"testimonials\">
\t\t<div class=\"test_border\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">what our clients say about us</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t
\t\t\t\t\t<!-- Testimonials Slider -->

\t\t\t\t\t<div class=\"test_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme test_slider\">

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"";
        // line 351
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/building.jpg");
        echo "\" alt=\"https://unsplash.com/@anniegray\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"";
        // line 352
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/backpack.png");
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">Will Joe</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">Feb 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Staff hospitality \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">The staff hospitality here is really good , and if i am ever gonna vist Abuja again , i am definitely going to lodge here</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"";
        // line 369
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/building.jpg");
        echo "\" alt=\"https://unsplash.com/@tschax\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"";
        // line 370
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/island_t.png");
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">Lemmy Chukwu</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">December 24, 2018</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Xmass is lit \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">I am happt here , i couldn't have wished for a better suite, you guys are very nice and hospitable</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"";
        // line 387
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bathroom3.jpg");
        echo "\" alt=\"https://unsplash.com/@seefromthesky\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"";
        // line 388
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/kayak.png");
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">Dammy Best</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">My visit to Abuja was awesome and your hotel deserves an award for quality hospitality .</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Testimonials Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Testimonials Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>


\t<div class=\"contact\">
\t\t<div class=\"contact_background\" style=\"background-image:url(";
        // line 452
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/contact.png");
        echo ")\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"contact_image\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title\">get in touch</div>
\t\t\t\t\t\t";
        // line 464
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 465
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 465,  573 => 464,  558 => 452,  491 => 388,  487 => 387,  467 => 370,  463 => 369,  443 => 352,  439 => 351,  365 => 280,  348 => 266,  331 => 252,  306 => 230,  276 => 203,  248 => 178,  220 => 153,  192 => 128,  175 => 116,  160 => 103,  156 => 102,  95 => 44,  86 => 38,  76 => 31,  67 => 25,  57 => 18,  48 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"home\">
\t\t
\t\t<!-- Home Slider -->

\t\t<div class=\"home_slider_container\">
\t\t\t
\t\t\t<div class=\"owl-carousel owl-theme home_slider\">

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<!-- Image by https://unsplash.com/@anikindimitry -->
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url({{ 'assets/images/home_slider.jpg'|theme }})\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<h1>Venetian Suites</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"{{ 'offers'| page }}\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url({{ 'assets/images/home_slider.jpg'|theme }})\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<h1>Venetian Suites</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"{{ 'offers'| page }}\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item home_slider_item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url({{ 'assets/images/home_slider.jpg'|theme }})\"></div>

\t\t\t\t\t<div class=\"home_slider_content text-center\">
\t\t\t\t\t\t<div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<h1>Venetian Suites</h1>
\t\t\t\t\t\t\t<div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"{{ 'offers'| page }}\">explore now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t<!-- Home Slider Nav - Prev -->
\t\t\t<div class=\"home_slider_nav home_slider_prev\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_prev'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Home Slider Nav - Next -->
\t\t\t<div class=\"home_slider_nav home_slider_next\">
\t\t\t\t<svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<linearGradient id='home_grad_next'>
\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t</defs>
\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
\t\t\t</div>

\t\t\t<!-- Home Slider Dots -->

\t\t\t<div class=\"home_slider_dots\">
\t\t\t\t<ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
\t\t\t\t\t<li class=\"home_slider_custom_dot active\"><div></div>01.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>02.</li>
\t\t\t\t\t<li class=\"home_slider_custom_dot\"><div></div>03.</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>

\t<!-- Search -->
{% component 'reservationform' %}

\t<!-- Intro -->
\t
\t<div class=\"intro\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h2 class=\"intro_title text-center\">We have the best Rooms</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t\t<div class=\"intro_text text-center\">
\t\t\t\t\t\t<p class=\"intro-text\"> {% content 'placeholder/tour.txt' %}</p> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row intro_items\">

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@dnevozhai -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url({{ 'assets/images/windows.jpg'|theme }})\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1 class=\"standard\">Standard</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From &#x20A6; 14,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@hellolightbulb -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url({{ 'assets/images/bed5.jpg'|theme }})\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Deluxe</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From  &#x20A6; 18,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@willianjusten -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url({{ 'assets/images/bed2.jpg'|theme }})\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Executive</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From &#x20A6; 25,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Intro Item -->

\t\t\t\t<div class=\"col-lg-3 intro_col\">
\t\t\t\t\t<div class=\"intro_item\">
\t\t\t\t\t\t<div class=\"intro_item_overlay\"></div>
\t\t\t\t\t\t<!-- Image by https://unsplash.com/@willianjusten -->
\t\t\t\t\t\t<div class=\"intro_item_background uk-box-shadow-large\" style=\"background-image:url({{ 'assets/images/bed2.jpg'|theme }})\"></div>
\t\t\t\t\t\t<div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t<div class=\"intro_date\">Book Now</div>
\t\t\t\t\t\t\t<div class=\"button intro_button\"><div class=\"button_bcg\"></div><a href=\"#booking\">see more<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t<div class=\"intro_center text-center\">
\t\t\t\t\t\t\t\t<h1>Diplomat</h1>
\t\t\t\t\t\t\t\t<div class=\"intro_price\">From &#x20A6; 35,000</div>
\t\t\t\t\t\t\t\t<div class=\"rating rating_5\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- CTA -->

\t<div class=\"cta\">
\t\t<!-- Image by https://unsplash.com/@thanni -->
\t\t<div class=\"cta_background\" style=\"background-image:url({{ 'assets/images/cta.jpg'|theme }})\"></div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- CTA Slider -->

\t\t\t\t\t<div class=\"cta_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme cta_slider\">

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">Highlights</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Stay with us and enjoy the convenience of staying in close proximity to the key parts of the city.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"{{ 'offers'| page }}\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">Highlights</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Plan your next events and meetings with us; our meeting venues are equipped with state of the art facilities and a dedicated planning team.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"{{ 'offers'| page }}\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- CTA Slider Item -->
\t\t\t\t\t\t\t<div class=\"owl-item cta_item text-center\">
\t\t\t\t\t\t\t\t<div class=\"cta_title\">Highlights</div>
\t\t\t\t\t\t\t\t<div class=\"rating_r rating_r_4\">
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"cta_text\">Our dining options include one of the most exclusive Italian restaurants in Lagos and a pool bar that offers live music, grills and Nigerian meals.</p>
\t\t\t\t\t\t\t\t<div class=\"button cta_button\"><div class=\"button_bcg\"></div><a href=\"{{ 'offers'| page }}\">book now<span></span><span></span><span></span></a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- CTA Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_4\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- CTA Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"cta_slider_nav cta_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_5\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='cta_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t
\t</div>


\t<!-- Testimonials -->

\t<div class=\"testimonials\">
\t\t<div class=\"test_border\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<h2 class=\"section_title\">what our clients say about us</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t
\t\t\t\t\t<!-- Testimonials Slider -->

\t\t\t\t\t<div class=\"test_slider_container\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-theme test_slider\">

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"{{ 'assets/images/building.jpg'|theme }}\" alt=\"https://unsplash.com/@anniegray\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"{{ 'assets/images/backpack.png'|theme }}\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">Will Joe</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">Feb 24, 2017</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Staff hospitality \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">The staff hospitality here is really good , and if i am ever gonna vist Abuja again , i am definitely going to lodge here</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"{{ 'assets/images/building.jpg'|theme }}\" alt=\"https://unsplash.com/@tschax\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"{{ 'assets/images/island_t.png'|theme }}\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">Lemmy Chukwu</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">December 24, 2018</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Xmass is lit \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">I am happt here , i couldn't have wished for a better suite, you guys are very nice and hospitable</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Testimonial Item -->
\t\t\t\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t\t\t\t<div class=\"test_item\">
\t\t\t\t\t\t\t\t\t<div class=\"test_image\"><img src=\"{{ 'assets/images/bathroom3.jpg'|theme }}\" alt=\"https://unsplash.com/@seefromthesky\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_icon\"><img src=\"{{ 'assets/images/kayak.png'|theme }}\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"test_content_container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"test_content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_item_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_name\">Dammy Best</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_date\">May 24, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"test_quote_title\">\" Best holliday ever \"</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"test_quote_text\">My visit to Abuja was awesome and your hotel deserves an award for quality hospitality .</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Testimonials Slider Nav - Prev -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_prev\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_6\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_prev'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
\t\t\t\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- Testimonials Slider Nav - Next -->
\t\t\t\t\t\t<div class=\"test_slider_nav test_slider_next\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_7\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t<linearGradient id='test_grad_next'>
\t\t\t\t\t\t\t\t\t\t<stop offset='0%' stop-color='#fa9e1b'/>
\t\t\t\t\t\t\t\t\t\t<stop offset='100%' stop-color='#8d4fff'/>
\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t<path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
\t\t\t\t\t\t\t<polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
\t\t\t\t\t\t\t17.046,15.554 \"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>


\t<div class=\"contact\">
\t\t<div class=\"contact_background\" style=\"background-image:url({{ 'assets/images/contact.png'|theme }})\"></div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"contact_image\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title\">get in touch</div>
\t\t\t\t\t\t{% component 'contact' %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>", "C:\\xampp\\htdocs\\hotel/themes/demo/pages/home.htm", "");
    }
}
