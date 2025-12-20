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

/* security/login.html.twig */
class __TwigTemplate_1aa8c95c525c679f8c760e6bd45721ee extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Вход
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<div class=\"login-page\">
\t\t<div class=\"login-form\">
\t\t\t<h2>Вход в библиотеку</h2>

\t\t\t";
        // line 11
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "\t\t\t\t<div class=\"error\">
\t\t\t\t\t";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 16
        yield "
\t\t\t";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "\t\t\t\t<p>Вы уже вошли как
\t\t\t\t\t";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "userIdentifier", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
\t\t\t\t<a href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Выйти</a>
\t\t\t";
        }
        // line 22
        yield "
\t\t\t<form method=\"post\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Email:</label>
\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" required>
\t\t\t\t</div>

\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Пароль:</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" required>
\t\t\t\t</div>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

\t\t\t\t<div class=\"checkbox-group\">
\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" id=\"remember\">
\t\t\t\t\t<label for=\"remember\">Запомнить меня</label>
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\">Войти</button>
\t\t\t</form>
\t\t</div>
\t</div>

\t<style>
\t\t.login-page {
\t\t\twidth: 100%;
\t\t\tmax-width: 300px;
\t\t\tmargin: 50px auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.login-form {
\t\t\tbackground: white;
\t\t\tpadding: 20px;
\t\t\tborder: 1px solid #ccc;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.login-form h2 {
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 20px;
\t\t\tcolor: #333;
\t\t}

\t\t.input-group {
\t\t\tmargin-bottom: 15px;
\t\t}

\t\t.input-group label {
\t\t\tdisplay: block;
\t\t\tmargin-bottom: 5px;
\t\t\tfont-weight: bold;
\t\t}

\t\t.input-group input {
\t\t\twidth: 100%;
\t\t\tpadding: 8px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 3px;
\t\t\tbox-sizing: border-box;
\t\t}

\t\t.checkbox-group {
\t\t\tmargin: 15px 0;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t}

\t\t.checkbox-group input {
\t\t\tmargin-right: 8px;
\t\t}

\t\tbutton {
\t\t\twidth: 100%;
\t\t\tpadding: 10px;
\t\t\tbackground: #007bff;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tborder-radius: 3px;
\t\t\tcursor: pointer;
\t\t\tfont-size: 16px;
\t\t}

\t\tbutton:hover {
\t\t\tbackground: #0056b3;
\t\t}

\t\t.error {
\t\t\tbackground: #ffdddd;
\t\t\tcolor: #d8000c;
\t\t\tpadding: 10px;
\t\t\tborder-radius: 3px;
\t\t\tmargin-bottom: 15px;
\t\t\tborder: 1px solid #ffb3b3;
\t\t}

\t\ta {
\t\t\tcolor: #007bff;
\t\t\ttext-decoration: none;
\t\t}

\t\ta:hover {
\t\t\ttext-decoration: underline;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  152 => 34,  141 => 26,  135 => 22,  130 => 20,  126 => 19,  123 => 18,  121 => 17,  118 => 16,  112 => 13,  109 => 12,  107 => 11,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Вход
{% endblock %}

{% block body %}
\t<div class=\"login-page\">
\t\t<div class=\"login-form\">
\t\t\t<h2>Вход в библиотеку</h2>

\t\t\t{% if error %}
\t\t\t\t<div class=\"error\">
\t\t\t\t\t{{ error.messageKey|trans(error.messageData, 'security') }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if app.user %}
\t\t\t\t<p>Вы уже вошли как
\t\t\t\t\t{{ app.user.userIdentifier }}</p>
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Выйти</a>
\t\t\t{% endif %}

\t\t\t<form method=\"post\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Email:</label>
\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ last_username }}\" required>
\t\t\t\t</div>

\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<label>Пароль:</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" required>
\t\t\t\t</div>

\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t<div class=\"checkbox-group\">
\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" id=\"remember\">
\t\t\t\t\t<label for=\"remember\">Запомнить меня</label>
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\">Войти</button>
\t\t\t</form>
\t\t</div>
\t</div>

\t<style>
\t\t.login-page {
\t\t\twidth: 100%;
\t\t\tmax-width: 300px;
\t\t\tmargin: 50px auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.login-form {
\t\t\tbackground: white;
\t\t\tpadding: 20px;
\t\t\tborder: 1px solid #ccc;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.login-form h2 {
\t\t\ttext-align: center;
\t\t\tmargin-bottom: 20px;
\t\t\tcolor: #333;
\t\t}

\t\t.input-group {
\t\t\tmargin-bottom: 15px;
\t\t}

\t\t.input-group label {
\t\t\tdisplay: block;
\t\t\tmargin-bottom: 5px;
\t\t\tfont-weight: bold;
\t\t}

\t\t.input-group input {
\t\t\twidth: 100%;
\t\t\tpadding: 8px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 3px;
\t\t\tbox-sizing: border-box;
\t\t}

\t\t.checkbox-group {
\t\t\tmargin: 15px 0;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t}

\t\t.checkbox-group input {
\t\t\tmargin-right: 8px;
\t\t}

\t\tbutton {
\t\t\twidth: 100%;
\t\t\tpadding: 10px;
\t\t\tbackground: #007bff;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tborder-radius: 3px;
\t\t\tcursor: pointer;
\t\t\tfont-size: 16px;
\t\t}

\t\tbutton:hover {
\t\t\tbackground: #0056b3;
\t\t}

\t\t.error {
\t\t\tbackground: #ffdddd;
\t\t\tcolor: #d8000c;
\t\t\tpadding: 10px;
\t\t\tborder-radius: 3px;
\t\t\tmargin-bottom: 15px;
\t\t\tborder: 1px solid #ffb3b3;
\t\t}

\t\ta {
\t\t\tcolor: #007bff;
\t\t\ttext-decoration: none;
\t\t}

\t\ta:hover {
\t\t\ttext-decoration: underline;
\t\t}
\t</style>
{% endblock %}
", "security/login.html.twig", "C:\\code\\library\\library-web\\templates\\security\\login.html.twig");
    }
}
