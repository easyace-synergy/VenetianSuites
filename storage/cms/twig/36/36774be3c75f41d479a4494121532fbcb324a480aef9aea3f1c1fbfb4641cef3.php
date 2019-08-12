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

/* C:\xampp\htdocs\hotel/themes/demo/pages/contact.htm */
class __TwigTemplate_bd90d4b98e188a9b3b8a41c794b0e9637e1f835de8d101c34bea8e6b663a7e51 extends \Twig\Template
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
        echo "<div class=\"about-div\">
    // <img src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_background.jpg");
        echo "\" class=\"about-image\">
    <div class=\"about-text\">Contact us</div>
</div>

\t<!-- Contact -->
<br><br><br><br><br>


\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"ro\">
\t<!-- Google Map -->
\t\t<div class=\"uk-grid-small uk-child-width-expand@s uk-text-center\" uk-grid>
    <div>
        <div class=\"uk-box-shadow-large\">
\t\t\t\t\t\t\t\t\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map \">
            <div class=\"map_container\">
           <div class=\"mapouter\"><div class=\"gmap_canvas uk-box-shadow-large\"><iframe width=\"600\" height=\"664\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Augustus%20Aikhomu%20Mabushi%2C%20Abuja&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.embedgooglemap.net/blog/20-off-discount-for-elegant-themes-divi-sale-coupon-code-2019/\">divi discount code</a></div><style>.mapouter{position:relative;text-align:right;height:660px;width:560px;}.gmap_canvas {overflow:hidden;background:none!important;height:660px;width:560px;}</style></div>
\t\t\t</div>
\t\t</div>
    </div>
\t\t</div>
    </div>
    <div>
        <div class=\"uk-box-shadow-large\">
\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">get in touch</div>
\t\t\t\t\t\t";
        // line 31
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "\t\t\t\t\t</div>
\t\t</div>
    </div>
</div>

    <br><br><br>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel/themes/demo/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 32,  70 => 31,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about-div\">
    // <img src=\"{{ 'assets/images/about_background.jpg'|theme }}\" class=\"about-image\">
    <div class=\"about-text\">Contact us</div>
</div>

\t<!-- Contact -->
<br><br><br><br><br>


\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"ro\">
\t<!-- Google Map -->
\t\t<div class=\"uk-grid-small uk-child-width-expand@s uk-text-center\" uk-grid>
    <div>
        <div class=\"uk-box-shadow-large\">
\t\t\t\t\t\t\t\t\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map \">
            <div class=\"map_container\">
           <div class=\"mapouter\"><div class=\"gmap_canvas uk-box-shadow-large\"><iframe width=\"600\" height=\"664\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Augustus%20Aikhomu%20Mabushi%2C%20Abuja&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.embedgooglemap.net/blog/20-off-discount-for-elegant-themes-divi-sale-coupon-code-2019/\">divi discount code</a></div><style>.mapouter{position:relative;text-align:right;height:660px;width:560px;}.gmap_canvas {overflow:hidden;background:none!important;height:660px;width:560px;}</style></div>
\t\t\t</div>
\t\t</div>
    </div>
\t\t</div>
    </div>
    <div>
        <div class=\"uk-box-shadow-large\">
\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">get in touch</div>
\t\t\t\t\t\t{% component 'contact' %}
\t\t\t\t\t</div>
\t\t</div>
    </div>
</div>

    <br><br><br>", "C:\\xampp\\htdocs\\hotel/themes/demo/pages/contact.htm", "");
    }
}
