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

/* book/show.html.twig */
class __TwigTemplate_e82f9dc2c223420f4bffe5cb768ffb7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show.html.twig"));

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

        yield "Книга:
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "\t<div class=\"container\">
\t\t<div class=\"book-header\">
\t\t\t<h1>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn-edit\">Изменить</a>
\t\t\t\t";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "book/_delete_form.html.twig");
        yield "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"book-info\">
\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">ISBN:</span>
\t\t\t\t<span class=\"value\">
\t\t\t\t\t<code>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 21, $this->source); })()), "isbn", [], "any", false, false, false, 21), "html", null, true);
        yield "</code>
\t\t\t\t</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Год издания:</span>
\t\t\t\t<span class=\"value\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 27, $this->source); })()), "year", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Количество экземпляров:</span>
\t\t\t\t<span class=\"value\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 32, $this->source); })()), "copies", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Автор:</span>
\t\t\t\t<span class=\"value\">
\t\t\t\t\t";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 38, $this->source); })()), "author", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 39, $this->source); })()), "author", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 40, $this->source); })()), "author", [], "any", false, false, false, 40), "fullName", [], "any", false, false, false, 40), "html", null, true);
            yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 43
            yield "\t\t\t\t\t\tНе указан
\t\t\t\t\t";
        }
        // line 45
        yield "\t\t\t\t</span>
\t\t\t</div>
\t\t</div>

\t\t<div style=\"margin-top: 30px;\">
\t\t\t<a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_index");
        yield "\" class=\"back-link\">← Назад к списку книг</a>
\t\t</div>
\t</div>

\t<style>
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.book-header {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 30px;
\t\t\tborder-bottom: 2px solid #eee;
\t\t\tpadding-bottom: 15px;
\t\t}

\t\th1 {
\t\t\tcolor: #333;
\t\t\tmargin: 0;
\t\t}

\t\t.actions {
\t\t\tdisplay: flex;
\t\t\tgap: 10px;
\t\t}

\t\t.btn-edit {
\t\t\tbackground: #FF9800;
\t\t\tcolor: white;
\t\t\tpadding: 8px 15px;
\t\t\tborder-radius: 4px;
\t\t\ttext-decoration: none;
\t\t}

\t\t.btn-edit:hover {
\t\t\tbackground: #F57C00;
\t\t}

\t\t.btn-delete {
\t\t\tbackground: #f44336;
\t\t\tcolor: white;
\t\t\tpadding: 8px 15px;
\t\t\tborder: none;
\t\t\tborder-radius: 4px;
\t\t\tcursor: pointer;
\t\t}

\t\t.btn-delete:hover {
\t\t\tbackground: #d32f2f;
\t\t}

\t\t.book-info {
\t\t\tbackground: #f9f9f9;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.info-row {
\t\t\tdisplay: flex;
\t\t\tmargin-bottom: 15px;
\t\t\tpadding-bottom: 15px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.info-row:last-child {
\t\t\tborder-bottom: none;
\t\t\tmargin-bottom: 0;
\t\t}

\t\t.label {
\t\t\twidth: 200px;
\t\t\tfont-weight: bold;
\t\t\tcolor: #555;
\t\t}

\t\t.value {
\t\t\tflex: 1;
\t\t}

\t\t.back-link {
\t\t\tcolor: #2196F3;
\t\t\ttext-decoration: none;
\t\t}

\t\t.back-link:hover {
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
        return "book/show.html.twig";
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
        return array (  179 => 50,  172 => 45,  168 => 43,  162 => 40,  157 => 39,  155 => 38,  146 => 32,  138 => 27,  129 => 21,  118 => 13,  114 => 12,  109 => 10,  105 => 8,  92 => 7,  79 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Книга:
\t{{ book.title }}
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"book-header\">
\t\t\t<h1>{{ book.title }}</h1>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"{{ path('app_book_edit', {'id': book.id}) }}\" class=\"btn-edit\">Изменить</a>
\t\t\t\t{{ include('book/_delete_form.html.twig') }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"book-info\">
\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">ISBN:</span>
\t\t\t\t<span class=\"value\">
\t\t\t\t\t<code>{{ book.isbn }}</code>
\t\t\t\t</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Год издания:</span>
\t\t\t\t<span class=\"value\">{{ book.year }}</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Количество экземпляров:</span>
\t\t\t\t<span class=\"value\">{{ book.copies }}</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Автор:</span>
\t\t\t\t<span class=\"value\">
\t\t\t\t\t{% if book.author %}
\t\t\t\t\t\t<a href=\"{{ path('app_author_show', {'id': book.author.id}) }}\">
\t\t\t\t\t\t\t{{ book.author.fullName }}
\t\t\t\t\t\t</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\tНе указан
\t\t\t\t\t{% endif %}
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>

\t\t<div style=\"margin-top: 30px;\">
\t\t\t<a href=\"{{ path('app_book_index') }}\" class=\"back-link\">← Назад к списку книг</a>
\t\t</div>
\t</div>

\t<style>
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.book-header {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 30px;
\t\t\tborder-bottom: 2px solid #eee;
\t\t\tpadding-bottom: 15px;
\t\t}

\t\th1 {
\t\t\tcolor: #333;
\t\t\tmargin: 0;
\t\t}

\t\t.actions {
\t\t\tdisplay: flex;
\t\t\tgap: 10px;
\t\t}

\t\t.btn-edit {
\t\t\tbackground: #FF9800;
\t\t\tcolor: white;
\t\t\tpadding: 8px 15px;
\t\t\tborder-radius: 4px;
\t\t\ttext-decoration: none;
\t\t}

\t\t.btn-edit:hover {
\t\t\tbackground: #F57C00;
\t\t}

\t\t.btn-delete {
\t\t\tbackground: #f44336;
\t\t\tcolor: white;
\t\t\tpadding: 8px 15px;
\t\t\tborder: none;
\t\t\tborder-radius: 4px;
\t\t\tcursor: pointer;
\t\t}

\t\t.btn-delete:hover {
\t\t\tbackground: #d32f2f;
\t\t}

\t\t.book-info {
\t\t\tbackground: #f9f9f9;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.info-row {
\t\t\tdisplay: flex;
\t\t\tmargin-bottom: 15px;
\t\t\tpadding-bottom: 15px;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}

\t\t.info-row:last-child {
\t\t\tborder-bottom: none;
\t\t\tmargin-bottom: 0;
\t\t}

\t\t.label {
\t\t\twidth: 200px;
\t\t\tfont-weight: bold;
\t\t\tcolor: #555;
\t\t}

\t\t.value {
\t\t\tflex: 1;
\t\t}

\t\t.back-link {
\t\t\tcolor: #2196F3;
\t\t\ttext-decoration: none;
\t\t}

\t\t.back-link:hover {
\t\t\ttext-decoration: underline;
\t\t}
\t</style>
{% endblock %}
", "book/show.html.twig", "C:\\code\\library\\library-web\\templates\\book\\show.html.twig");
    }
}
