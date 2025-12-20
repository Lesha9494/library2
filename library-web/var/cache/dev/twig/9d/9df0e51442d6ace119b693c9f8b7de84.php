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

/* loan/_form.html.twig */
class __TwigTemplate_e23c2a50162506f5afe9198210250589 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
<div class=\"form-group\">
\t<label>Читатель:</label>
\t";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "reader", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
</div>

<div class=\"form-group\">
\t<label>Экземпляр книги:</label>
\t";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "bookCopy", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
</div>

<div class=\"form-group\">
\t<label>Дата выдачи:</label>
\t";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "issueDate", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
</div>

<div class=\"form-group\">
\t<label>Срок возврата:</label>
\t";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "dueDate", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
</div>

<div class=\"form-group\">
\t<label>Дата возврата (если уже вернули):</label>
\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "returnDate", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
</div>

<div class=\"form-buttons\">
\t<button type=\"submit\" class=\"btn-save\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 28, $this->source); })()), "Сохранить")) : ("Сохранить")), "html", null, true);
        yield "</button>
\t<a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loan_index");
        yield "\" class=\"btn-cancel\">Отмена</a>
</div>
";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        yield "

<style>
\t.form-group {
\t\tmargin-bottom: 15px;
\t}

\t.form-group label {
\t\tdisplay: block;
\t\tmargin-bottom: 5px;
\t\tfont-weight: bold;
\t}

\t.form-input {
\t\twidth: 100%;
\t\tpadding: 8px;
\t\tborder: 1px solid #ccc;
\t\tborder-radius: 4px;
\t\tbox-sizing: border-box;
\t\tfont-family: Arial, sans-serif;
\t}

\t.form-buttons {
\t\tmargin-top: 20px;
\t\tdisplay: flex;
\t\tgap: 10px;
\t}

\t.btn-save {
\t\tbackground: #4CAF50;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder: none;
\t\tborder-radius: 4px;
\t\tcursor: pointer;
\t}

\t.btn-save:hover {
\t\tbackground: #45a049;
\t}

\t.btn-cancel {
\t\tbackground: #f44336;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder-radius: 4px;
\t\ttext-decoration: none;
\t}

\t.btn-cancel:hover {
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
        return "loan/_form.html.twig";
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
        return array (  102 => 31,  97 => 29,  93 => 28,  86 => 24,  78 => 19,  70 => 14,  62 => 9,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
<div class=\"form-group\">
\t<label>Читатель:</label>
\t{{ form_widget(form.reader, {'attr': {'class': 'form-input'}}) }}
</div>

<div class=\"form-group\">
\t<label>Экземпляр книги:</label>
\t{{ form_widget(form.bookCopy, {'attr': {'class': 'form-input'}}) }}
</div>

<div class=\"form-group\">
\t<label>Дата выдачи:</label>
\t{{ form_widget(form.issueDate, {'attr': {'class': 'form-input'}}) }}
</div>

<div class=\"form-group\">
\t<label>Срок возврата:</label>
\t{{ form_widget(form.dueDate, {'attr': {'class': 'form-input'}}) }}
</div>

<div class=\"form-group\">
\t<label>Дата возврата (если уже вернули):</label>
\t{{ form_widget(form.returnDate, {'attr': {'class': 'form-input'}}) }}
</div>

<div class=\"form-buttons\">
\t<button type=\"submit\" class=\"btn-save\">{{ button_label|default('Сохранить') }}</button>
\t<a href=\"{{ path('app_loan_index') }}\" class=\"btn-cancel\">Отмена</a>
</div>
{{ form_end(form) }}

<style>
\t.form-group {
\t\tmargin-bottom: 15px;
\t}

\t.form-group label {
\t\tdisplay: block;
\t\tmargin-bottom: 5px;
\t\tfont-weight: bold;
\t}

\t.form-input {
\t\twidth: 100%;
\t\tpadding: 8px;
\t\tborder: 1px solid #ccc;
\t\tborder-radius: 4px;
\t\tbox-sizing: border-box;
\t\tfont-family: Arial, sans-serif;
\t}

\t.form-buttons {
\t\tmargin-top: 20px;
\t\tdisplay: flex;
\t\tgap: 10px;
\t}

\t.btn-save {
\t\tbackground: #4CAF50;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder: none;
\t\tborder-radius: 4px;
\t\tcursor: pointer;
\t}

\t.btn-save:hover {
\t\tbackground: #45a049;
\t}

\t.btn-cancel {
\t\tbackground: #f44336;
\t\tcolor: white;
\t\tpadding: 10px 20px;
\t\tborder-radius: 4px;
\t\ttext-decoration: none;
\t}

\t.btn-cancel:hover {
\t\tbackground: #d32f2f;
\t}
</style>
", "loan/_form.html.twig", "C:\\code\\library\\library-web\\templates\\loan\\_form.html.twig");
    }
}
