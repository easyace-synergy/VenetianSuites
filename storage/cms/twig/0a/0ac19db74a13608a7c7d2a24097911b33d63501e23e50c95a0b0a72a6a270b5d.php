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

/* C:\xampp\htdocs\hotel/plugins/laozellison/contactus/components/contactus/default.htm */
class __TwigTemplate_ab69282749ac0ec14386f4edbe8a77e20fa73d83675131f6bee19d30174691b9 extends \Twig\Template
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
        echo "   
   
   ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 3
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 4
                echo "    <p
        data-control=\"flash-message\"
        class=\"flash-message fade ";
                // line 6
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\"
        data-interval=\"15\">
        ";
                // line 8
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    </p>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 11
        echo "
    <form data-request=\"onSend\" id=\"contact_form\" class=\"contact_form\" data-request-validate data-request-flash>
        <input type=\"text\" id=\"contact_form_name\" class=\"contact_form_name input_field\" placeholder=\"Name\" data-error=\"Name is required.\" name=\"name\">
        <input type=\"text\" id=\"contact_form_email\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" data-error=\"Email is required.\" name=\"email\">
        <input type=\"text\" id=\"contact_form_subject\" class=\"contact_form_subject input_field\" placeholder=\"Subject\" data-error=\"Subject is required.\" name=\"subject\">
        <textarea id=\"contact_form_message\" class=\"text_field contact_form_message\" name=\"message\" rows=\"4\" placeholder=\"Message\" data-error=\"Please, write us a message.\"></textarea>
        <button data-attach-loading type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\">send message<span></span><span></span><span></span></button>
    </form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel/plugins/laozellison/contactus/components/contactus/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("   
   
   {% flash %}
    <p
        data-control=\"flash-message\"
        class=\"flash-message fade {{ type }}\"
        data-interval=\"15\">
        {{ message }}
    </p>
{% endflash %}

    <form data-request=\"onSend\" id=\"contact_form\" class=\"contact_form\" data-request-validate data-request-flash>
        <input type=\"text\" id=\"contact_form_name\" class=\"contact_form_name input_field\" placeholder=\"Name\" data-error=\"Name is required.\" name=\"name\">
        <input type=\"text\" id=\"contact_form_email\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" data-error=\"Email is required.\" name=\"email\">
        <input type=\"text\" id=\"contact_form_subject\" class=\"contact_form_subject input_field\" placeholder=\"Subject\" data-error=\"Subject is required.\" name=\"subject\">
        <textarea id=\"contact_form_message\" class=\"text_field contact_form_message\" name=\"message\" rows=\"4\" placeholder=\"Message\" data-error=\"Please, write us a message.\"></textarea>
        <button data-attach-loading type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\">send message<span></span><span></span><span></span></button>
    </form>", "C:\\xampp\\htdocs\\hotel/plugins/laozellison/contactus/components/contactus/default.htm", "");
    }
}
