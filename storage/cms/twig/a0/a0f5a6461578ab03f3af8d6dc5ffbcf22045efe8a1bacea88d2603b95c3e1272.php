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

/* C:\xampp\htdocs\hotel/themes/demo/layouts/default.htm */
class __TwigTemplate_9a1d422fe27c9e86a33da465e16a96fb90cb3e55331b58ce9eb43ccbe6731076 extends \Twig\Template
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
        echo "<!DOCTYPE php>
<html lang=\"en\">
<head>
<title>The Venetian Suites</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/styles/bootstrap4/bootstrap.min.css");
        echo "\"> -->
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/uikit.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/aos.css");
        echo "\">
<link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css");
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css");
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/OwlCarousel2-2.2.1/animate.css");
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main_styles.css");
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">



<style>
html,body
{
    width: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
    .social_list{
        margin-top: 6px;
    }
    .main_nav_col{
        height: 70px !important;
    }
    .intro-text{
        font-style: normal !important;
        font-family: 'Poppins', sans-serif;
        font-size: 20px !important;
    }
    .contact-us{
        margin-top: 0rem !important;
    }
    .about-text{
        margin-top: -10% !important;
        text-align: center !important;
        font-weight: bolder !important;
        font-size: 3rem;
        color: white;
        text-transform: capitalize;
    }
    .about-div{
        background-image: url(";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_background.jpg");
        echo ");
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        height:200px;
        width:100%;
        margin-bottom: 3rem;
    }

    .about-intro{
        margin-bottom: 5rem !important;
    }

    .intro_button11{
        margin-top: 12rem;
    }

    .uk-card{
        height: 664px !important;
        background: transparent !important;
         box-sizing: none;
    }
    .contact_form{
        height: 408px !important;
    }
    .offers-card{
        height: 300px !important;
    }
    @media only screen and (max-width: 500px) {
            .offers-card{
            height: 300px !important;
            margin-bottom: 3rem !important;
        }
    }
    .offers-image{
        height: 270px !important;
    }
    .offer-title{
        color: #eda84a !important;
    }
    .book_button{
\tbackground: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);
\t-webkit-transition: all 400ms ease;
\t-moz-transition: all 400ms ease;
\t-ms-transition: all 400ms ease;
\t-o-transition: all 400ms ease;
\ttransition: all 400ms ease;
    }
    .alert{
        display: none !important;
        visibility: none !important;
    }
</style>

</head>

<body>



        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 116
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 117
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 121
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 122
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 126
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 127
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 133
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 134
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 135
        echo "
        
\t

<script src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery-3.2.1.min.js");
        echo "\"></script>
<script src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/popper.js");
        echo "\"></script>
<script src=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js");
        echo "\"></script>
<script src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/easing/easing.js");
        echo "\"></script>
<script src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/custom.js");
        echo "\"></script>


<!-- <script src=\"assets/javascript/jquery.js\"></script> -->
<script src=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/uikit.js");
        echo "\"></script>
<script src=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/aos.js");
        echo "\"></script>
<script>
  AOS.init();
</script>


<script>
    \$(document).ready(function(\$){
        \$('.contact-form').on('ajaxError', function(event, message){
            \$('.alert.uk-alert-danger').removeClass('alert');
        });
    });
</script>
</body>

</html>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 150,  283 => 149,  279 => 148,  272 => 144,  268 => 143,  264 => 142,  260 => 141,  256 => 140,  252 => 139,  246 => 135,  242 => 134,  227 => 133,  223 => 132,  219 => 131,  215 => 130,  210 => 127,  206 => 126,  200 => 122,  198 => 121,  192 => 117,  188 => 116,  123 => 54,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE php>
<html lang=\"en\">
<head>
<title>The Venetian Suites</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/styles/bootstrap4/bootstrap.min.css'|theme }}\"> -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/uikit.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/css/aos.css'|theme }}\">
<link href=\"{{ 'assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css'|theme }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'|theme }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/plugins/OwlCarousel2-2.2.1/animate.css'|theme }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/main_styles.css'|theme }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/responsive.css'|theme }}\">



<style>
html,body
{
    width: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
    .social_list{
        margin-top: 6px;
    }
    .main_nav_col{
        height: 70px !important;
    }
    .intro-text{
        font-style: normal !important;
        font-family: 'Poppins', sans-serif;
        font-size: 20px !important;
    }
    .contact-us{
        margin-top: 0rem !important;
    }
    .about-text{
        margin-top: -10% !important;
        text-align: center !important;
        font-weight: bolder !important;
        font-size: 3rem;
        color: white;
        text-transform: capitalize;
    }
    .about-div{
        background-image: url({{ 'assets/images/about_background.jpg'|theme }});
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        height:200px;
        width:100%;
        margin-bottom: 3rem;
    }

    .about-intro{
        margin-bottom: 5rem !important;
    }

    .intro_button11{
        margin-top: 12rem;
    }

    .uk-card{
        height: 664px !important;
        background: transparent !important;
         box-sizing: none;
    }
    .contact_form{
        height: 408px !important;
    }
    .offers-card{
        height: 300px !important;
    }
    @media only screen and (max-width: 500px) {
            .offers-card{
            height: 300px !important;
            margin-bottom: 3rem !important;
        }
    }
    .offers-image{
        height: 270px !important;
    }
    .offer-title{
        color: #eda84a !important;
    }
    .book_button{
\tbackground: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);
\t-webkit-transition: all 400ms ease;
\t-moz-transition: all 400ms ease;
\t-ms-transition: all 400ms ease;
\t-o-transition: all 400ms ease;
\ttransition: all 400ms ease;
    }
    .alert{
        display: none !important;
        visibility: none !important;
    }
</style>

</head>

<body>



        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

        
\t

<script src=\"{{ 'assets/javascript/jquery-3.2.1.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/popper.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/bootstrap.js'|theme }}\"></script>
<script src=\"{{ 'assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js'|theme }}\"></script>
<script src=\"{{ 'assets/plugins/easing/easing.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/custom.js'|theme }}\"></script>


<!-- <script src=\"assets/javascript/jquery.js\"></script> -->
<script src=\"{{ 'assets/javascript/bootstrap.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/uikit.js'|theme }}\"></script>
<script src=\"{{ 'assets/javascript/aos.js'|theme }}\"></script>
<script>
  AOS.init();
</script>


<script>
    \$(document).ready(function(\$){
        \$('.contact-form').on('ajaxError', function(event, message){
            \$('.alert.uk-alert-danger').removeClass('alert');
        });
    });
</script>
</body>

</html>
    </body>
</html>", "C:\\xampp\\htdocs\\hotel/themes/demo/layouts/default.htm", "");
    }
}
