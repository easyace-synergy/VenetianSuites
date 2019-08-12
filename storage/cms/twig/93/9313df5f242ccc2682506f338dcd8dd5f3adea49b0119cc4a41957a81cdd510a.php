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

/* C:\xampp\htdocs\hotel/plugins/laozellison/reservations/components/reservations/default.htm */
class __TwigTemplate_78685f9d34f0f10265256f4c08c1822609553b83d28e2dbc8c57d5eaf3de1a30 extends \Twig\Template
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
        echo "\t<div class=\"search\" id=\"booking\">
\t\t

\t\t<!-- Search Contents -->
\t\t
\t\t<div class=\"container fill_height\">
                ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 7
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 8
                echo "\t\t\t\t\t<p
\t\t\t\t\t\tdata-control=\"flash-message\"
\t\t\t\t\t\tclass=\"flash-message fade ";
                // line 10
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\tdata-interval=\"1500\">
\t\t\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t</p>
\t\t\t\t";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 15
        echo "\t\t\t<div class=\"row fill_height\">
\t\t\t\t<div class=\"col fill_height\">
\t\t\t\t\t<div class=\"search_panel active\">
\t\t\t\t\t\t<form data-request=\"onSave\" data-request-validate data-request-flash id=\"search_form_1\" class=\"search_panel_content contact-form d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                        
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>Surname</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"Surname\" name=\"surname\">
                                    <b class=\"uk-text-dark\" style=\"color: black\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "surname"], "method", false, false, false, 23), "html", null, true);
        echo "</b>
\t\t\t\t\t\t\t</div>
                            <div class=\"search_item\">
                                 <div>Email</div>
                                <input type=\"email\" class=\"check_in search_input\" placeholder=\"email\" name=\"email\">
                                    <b class=\"uk-text-dark\" style=\"color: black\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "email"], "method", false, false, false, 28), "html", null, true);
        echo "</b>
                            </div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>Check in</div>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\" name=\"check_in\">
                                <b class=\"uk-text-dark\" style=\"color: black\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "check_in"], "method", false, false, false, 33), "html", null, true);
        echo "</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\" name=\"check_out\">
                                <b class=\"uk-text-dark\" style=\"color: black\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "check_out"], "method", false, false, false, 38), "html", null, true);
        echo "</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>Suite Type</div>
\t\t\t\t\t\t\t\t<select name=\"suites\" id=\"adults_1\" class=\"dropdown_item_select search_input\">
                                    <option value=\"\">Pick a suite</option>
\t\t\t\t\t\t\t\t\t<option value=\"Standard suites\">Standard suites</option>
\t\t\t\t\t\t\t\t\t<option value=\"Deluxe Suite\">Deluxe Suite</option>
\t\t\t\t\t\t\t\t\t<option value=\"Executive suite\">Executive suite</option>
                                    <option value=\"Diplomatic Suite\">Diplomatic Suite</option>
\t\t\t\t\t\t\t\t</select>
                                <b class=\"uk-text-dark\" style=\"color: black\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "suites"], "method", false, false, false, 49), "html", null, true);
        echo "</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\" type=\"submit\" data-attach-loading>Book Us<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
                       
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
            
\t\t</div>\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel/plugins/laozellison/reservations/components/reservations/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 49,  96 => 38,  88 => 33,  80 => 28,  72 => 23,  62 => 15,  55 => 12,  50 => 10,  46 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<div class=\"search\" id=\"booking\">
\t\t

\t\t<!-- Search Contents -->
\t\t
\t\t<div class=\"container fill_height\">
                {% flash %}
\t\t\t\t\t<p
\t\t\t\t\t\tdata-control=\"flash-message\"
\t\t\t\t\t\tclass=\"flash-message fade {{ type }}\"
\t\t\t\t\t\tdata-interval=\"1500\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</p>
\t\t\t\t{% endflash %}
\t\t\t<div class=\"row fill_height\">
\t\t\t\t<div class=\"col fill_height\">
\t\t\t\t\t<div class=\"search_panel active\">
\t\t\t\t\t\t<form data-request=\"onSave\" data-request-validate data-request-flash id=\"search_form_1\" class=\"search_panel_content contact-form d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                        
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>Surname</div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"check_in search_input\" placeholder=\"Surname\" name=\"surname\">
                                    <b class=\"uk-text-dark\" style=\"color: black\">{{ errors.first('surname') }}</b>
\t\t\t\t\t\t\t</div>
                            <div class=\"search_item\">
                                 <div>Email</div>
                                <input type=\"email\" class=\"check_in search_input\" placeholder=\"email\" name=\"email\">
                                    <b class=\"uk-text-dark\" style=\"color: black\">{{ errors.first('email') }}</b>
                            </div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>Check in</div>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\" name=\"check_in\">
                                <b class=\"uk-text-dark\" style=\"color: black\">{{ errors.first('check_in') }}</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>check out</div>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\" name=\"check_out\">
                                <b class=\"uk-text-dark\" style=\"color: black\">{{ errors.first('check_out') }}</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"search_item\">
\t\t\t\t\t\t\t\t<div>Suite Type</div>
\t\t\t\t\t\t\t\t<select name=\"suites\" id=\"adults_1\" class=\"dropdown_item_select search_input\">
                                    <option value=\"\">Pick a suite</option>
\t\t\t\t\t\t\t\t\t<option value=\"Standard suites\">Standard suites</option>
\t\t\t\t\t\t\t\t\t<option value=\"Deluxe Suite\">Deluxe Suite</option>
\t\t\t\t\t\t\t\t\t<option value=\"Executive suite\">Executive suite</option>
                                    <option value=\"Diplomatic Suite\">Diplomatic Suite</option>
\t\t\t\t\t\t\t\t</select>
                                <b class=\"uk-text-dark\" style=\"color: black\">{{ errors.first('suites') }}</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"button search_button\" type=\"submit\" data-attach-loading>Book Us<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
                       
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
            
\t\t</div>\t\t
\t</div>
", "C:\\xampp\\htdocs\\hotel/plugins/laozellison/reservations/components/reservations/default.htm", "");
    }
}
