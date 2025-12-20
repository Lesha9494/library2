<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* reader/_form.html.twig */
class __TwigTemplate_1afe16e759806f7447bdf1d30533c828 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reader/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reader/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
<div class=\"form-container\">

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">ФИО читателя:</label>
\t\t";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "fullName", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Номер читательского билета:</label>
\t\t";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "ticketNumber", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Контактная информация:</label>
\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "contacts", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Email:</label>
\t\t";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Пароль:</label>
\t\t";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Оставьте пустым для сохранения текущего"]]);
        yield "
\t\t<small style=\"color: #666; font-size: 12px; display: block; margin-top: 5px;\"></small>
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Роли:</label>
\t\t<div class=\"roles-container\">
\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "roles", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "roles-select"]]);
        yield "
\t\t</div>
\t</div>

\t<div class=\"form-actions\">
\t\t<button type=\"submit\" class=\"btn-primary\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 38, $this->source); })()), "Сохранить")) : ("Сохранить")), "html", null, true);
        yield "</button>
\t\t<a href=\"/reader\" class=\"btn-secondary\">Отмена</a>
\t</div>

</div>
";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "

<style>
\t.form-container {
\t\tmax-width: 500px;
\t\tmargin: 0 auto;
\t\tpadding: 20px;
\t\tbackground: white;
\t\tborder-radius: 5px;
\t\tbox-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
\t}

\t.form-field {
\t\tmargin-bottom: 20px;
\t}

\t.form-label {
\t\tdisplay: block;
\t\tmargin-bottom: 8px;
\t\tfont-weight: bold;
\t\tcolor: #333;
\t}

\t.form-control {
\t\twidth: 100%;
\t\tpadding: 10px;
\t\tborder: 1px solid #ddd;
\t\tborder-radius: 4px;
\t\tbox-sizing: border-box;
\t\tfont-size: 14px;
\t\tfont-family: Arial, sans-serif;
\t}

\t.form-control:focus {
\t\toutline: none;
\t\tborder-color: #4CAF50;
\t}

\t.roles-container {
\t\tbackground: #f9f9f9;
\t\tpadding: 15px;
\t\tborder-radius: 4px;
\t\tborder: 1px solid #ddd;
\t}

\t.roles-select {
\t\twidth: 100%;
\t\tpadding: 10px;
\t\tborder: 1px solid #ccc;
\t\tborder-radius: 4px;
\t\tbackground: white;
\t\tfont-size: 14px;
\t\tfont-family: Arial, sans-serif;
\t}

\t.roles-select option {
\t\tpadding: 8px;
\t\tmargin: 2px 0;
\t\tborder-radius: 3px;
\t}

\t.roles-select option:hover {
\t\tbackground: #f0f0f0;
\t}

\t.roles-select option:checked {
\t\tbackground: #4CAF50;
\t\tcolor: white;
\t}

\t.form-actions {
\t\tdisplay: flex;
\t\tgap: 10px;
\t\tmargin-top: 30px;
\t\tpadding-top: 20px;
\t\tborder-top: 1px solid #eee;
\t}

\t.btn-primary {
\t\tbackground: #4CAF50;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder: none;
\t\tborder-radius: 4px;
\t\tcursor: pointer;
\t\tfont-size: 16px;
\t\tflex: 1;
\t}

\t.btn-primary:hover {
\t\tbackground: #45a049;
\t}

\t.btn-secondary {
\t\tbackground: #f44336;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder-radius: 4px;
\t\ttext-decoration: none;
\t\ttext-align: center;
\t\tfont-size: 16px;
\t\tflex: 1;
\t}

\t.btn-secondary:hover {
\t\tbackground: #d32f2f;
\t}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reader/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  114 => 43,  106 => 38,  98 => 33,  88 => 26,  80 => 21,  72 => 16,  64 => 11,  56 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
<div class=\"form-container\">

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">ФИО читателя:</label>
\t\t{{ form_widget(form.fullName, {'attr': {'class': 'form-control'}}) }}
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Номер читательского билета:</label>
\t\t{{ form_widget(form.ticketNumber, {'attr': {'class': 'form-control'}}) }}
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Контактная информация:</label>
\t\t{{ form_widget(form.contacts, {'attr': {'class': 'form-control'}}) }}
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Email:</label>
\t\t{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Пароль:</label>
\t\t{{ form_widget(form.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Оставьте пустым для сохранения текущего'}}) }}
\t\t<small style=\"color: #666; font-size: 12px; display: block; margin-top: 5px;\"></small>
\t</div>

\t<div class=\"form-field\">
\t\t<label class=\"form-label\">Роли:</label>
\t\t<div class=\"roles-container\">
\t\t\t{{ form_widget(form.roles, {'attr': {'class': 'roles-select'}}) }}
\t\t</div>
\t</div>

\t<div class=\"form-actions\">
\t\t<button type=\"submit\" class=\"btn-primary\">{{ button_label|default('Сохранить') }}</button>
\t\t<a href=\"/reader\" class=\"btn-secondary\">Отмена</a>
\t</div>

</div>
{{ form_end(form, {'render_rest': false}) }}

<style>
\t.form-container {
\t\tmax-width: 500px;
\t\tmargin: 0 auto;
\t\tpadding: 20px;
\t\tbackground: white;
\t\tborder-radius: 5px;
\t\tbox-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
\t}

\t.form-field {
\t\tmargin-bottom: 20px;
\t}

\t.form-label {
\t\tdisplay: block;
\t\tmargin-bottom: 8px;
\t\tfont-weight: bold;
\t\tcolor: #333;
\t}

\t.form-control {
\t\twidth: 100%;
\t\tpadding: 10px;
\t\tborder: 1px solid #ddd;
\t\tborder-radius: 4px;
\t\tbox-sizing: border-box;
\t\tfont-size: 14px;
\t\tfont-family: Arial, sans-serif;
\t}

\t.form-control:focus {
\t\toutline: none;
\t\tborder-color: #4CAF50;
\t}

\t.roles-container {
\t\tbackground: #f9f9f9;
\t\tpadding: 15px;
\t\tborder-radius: 4px;
\t\tborder: 1px solid #ddd;
\t}

\t.roles-select {
\t\twidth: 100%;
\t\tpadding: 10px;
\t\tborder: 1px solid #ccc;
\t\tborder-radius: 4px;
\t\tbackground: white;
\t\tfont-size: 14px;
\t\tfont-family: Arial, sans-serif;
\t}

\t.roles-select option {
\t\tpadding: 8px;
\t\tmargin: 2px 0;
\t\tborder-radius: 3px;
\t}

\t.roles-select option:hover {
\t\tbackground: #f0f0f0;
\t}

\t.roles-select option:checked {
\t\tbackground: #4CAF50;
\t\tcolor: white;
\t}

\t.form-actions {
\t\tdisplay: flex;
\t\tgap: 10px;
\t\tmargin-top: 30px;
\t\tpadding-top: 20px;
\t\tborder-top: 1px solid #eee;
\t}

\t.btn-primary {
\t\tbackground: #4CAF50;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder: none;
\t\tborder-radius: 4px;
\t\tcursor: pointer;
\t\tfont-size: 16px;
\t\tflex: 1;
\t}

\t.btn-primary:hover {
\t\tbackground: #45a049;
\t}

\t.btn-secondary {
\t\tbackground: #f44336;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder-radius: 4px;
\t\ttext-decoration: none;
\t\ttext-align: center;
\t\tfont-size: 16px;
\t\tflex: 1;
\t}

\t.btn-secondary:hover {
\t\tbackground: #d32f2f;
\t}
</style>
", "reader/_form.html.twig", "C:\\code\\library\\library-web\\templates\\reader\\_form.html.twig");
    }
}
