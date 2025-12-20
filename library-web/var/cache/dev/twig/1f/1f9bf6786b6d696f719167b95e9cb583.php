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

/* author/show.html.twig */
class __TwigTemplate_6b8c9958e4da8e04822fb81d79b0927a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/show.html.twig"));

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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 4, $this->source); })()), "fullName", [], "any", false, false, false, 4), "html", null, true);
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
\t\t<div class=\"author-header\">
\t\t\t<h1>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 10, $this->source); })()), "fullName", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn-edit\">Изменить</a>
\t\t\t\t";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "author/_delete_form.html.twig");
        yield "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"author-info\">
\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Страна:</span>
\t\t\t\t<span class=\"value\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 20, $this->source); })()), "country", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Количество книг:</span>
\t\t\t\t<span class=\"value\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 25, $this->source); })()), "books", [], "any", false, false, false, 25)), "html", null, true);
        yield "</span>
\t\t\t</div>

\t\t\t";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 28, $this->source); })()), "biography", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "\t\t\t\t<div class=\"info-row\">
\t\t\t\t\t<span class=\"label\">Биография:</span>
\t\t\t\t\t<div class=\"value biography\">
\t\t\t\t\t\t";
            // line 32
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 32, $this->source); })()), "biography", [], "any", false, false, false, 32), "html", null, true));
            yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 36
        yield "\t\t</div>

\t\t";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 38, $this->source); })()), "books", [], "any", false, false, false, 38)) > 0)) {
            // line 39
            yield "\t\t\t<div class=\"books-section\">
\t\t\t\t<h2>Книги автора (";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 40, $this->source); })()), "books", [], "any", false, false, false, 40)), "html", null, true);
            yield ")</h2>
\t\t\t\t<div class=\"books-list\">
\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 42, $this->source); })()), "books", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 43
                yield "\t\t\t\t\t\t<div class=\"book-card\">
\t\t\t\t\t\t\t<h3>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 44), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t<div class=\"book-details\">
\t\t\t\t\t\t\t\t<span>ISBN:
\t\t\t\t\t\t\t\t\t<code>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "isbn", [], "any", false, false, false, 47), "html", null, true);
                yield "</code>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span>Год:
\t\t\t\t\t\t\t\t\t";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "year", [], "any", false, false, false, 50), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t<span>Экз.:
\t\t\t\t\t\t\t\t\t";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "copies", [], "any", false, false, false, 52), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn-view\">Подробнее</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['book'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 60
        yield "
\t\t<div style=\"margin-top: 30px;\">
\t\t\t<a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_author_index");
        yield "\" class=\"back-link\">Назад к списку авторов</a>
\t\t</div>
\t</div>

\t<style>
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.author-header {
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

\t\t.author-info {
\t\t\tbackground: #f9f9f9;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 5px;
\t\t\tmargin-bottom: 30px;
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
\t\t\twidth: 150px;
\t\t\tfont-weight: bold;
\t\t\tcolor: #555;
\t\t}

\t\t.value {
\t\t\tflex: 1;
\t\t}

\t\t.biography {
\t\t\tline-height: 1.6;
\t\t\tcolor: #333;
\t\t}

\t\t.books-section {
\t\t\tmargin-top: 30px;
\t\t}

\t\t.books-section h2 {
\t\t\tmargin-bottom: 15px;
\t\t\tcolor: #333;
\t\t}

\t\t.books-list {
\t\t\tdisplay: grid;
\t\t\tgap: 15px;
\t\t}

\t\t.book-card {
\t\t\tbackground: white;
\t\t\tpadding: 15px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.book-card h3 {
\t\t\tmargin: 0 0 10px;
\t\t\tcolor: #2196F3;
\t\t}

\t\t.book-details {
\t\t\tdisplay: flex;
\t\t\tgap: 15px;
\t\t\tmargin-bottom: 10px;
\t\t\tcolor: #666;
\t\t\tfont-size: 14px;
\t\t}

\t\t.book-card .btn-view {
\t\t\tdisplay: inline-block;
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t\tpadding: 5px 10px;
\t\t\tborder-radius: 3px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 14px;
\t\t}

\t\t.book-card .btn-view:hover {
\t\t\tbackground: #45a049;
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
        return "author/show.html.twig";
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
        return array (  216 => 62,  212 => 60,  207 => 57,  198 => 54,  193 => 52,  188 => 50,  182 => 47,  176 => 44,  173 => 43,  169 => 42,  164 => 40,  161 => 39,  159 => 38,  155 => 36,  148 => 32,  143 => 29,  141 => 28,  135 => 25,  127 => 20,  117 => 13,  113 => 12,  108 => 10,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ author.fullName }}
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"author-header\">
\t\t\t<h1>{{ author.fullName }}</h1>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"{{ path('app_author_edit', {'id': author.id}) }}\" class=\"btn-edit\">Изменить</a>
\t\t\t\t{{ include('author/_delete_form.html.twig') }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"author-info\">
\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Страна:</span>
\t\t\t\t<span class=\"value\">{{ author.country }}</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Количество книг:</span>
\t\t\t\t<span class=\"value\">{{ author.books|length }}</span>
\t\t\t</div>

\t\t\t{% if author.biography %}
\t\t\t\t<div class=\"info-row\">
\t\t\t\t\t<span class=\"label\">Биография:</span>
\t\t\t\t\t<div class=\"value biography\">
\t\t\t\t\t\t{{ author.biography|nl2br }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t\t{% if author.books|length > 0 %}
\t\t\t<div class=\"books-section\">
\t\t\t\t<h2>Книги автора ({{ author.books|length }})</h2>
\t\t\t\t<div class=\"books-list\">
\t\t\t\t\t{% for book in author.books %}
\t\t\t\t\t\t<div class=\"book-card\">
\t\t\t\t\t\t\t<h3>{{ book.title }}</h3>
\t\t\t\t\t\t\t<div class=\"book-details\">
\t\t\t\t\t\t\t\t<span>ISBN:
\t\t\t\t\t\t\t\t\t<code>{{ book.isbn }}</code>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span>Год:
\t\t\t\t\t\t\t\t\t{{ book.year }}</span>
\t\t\t\t\t\t\t\t<span>Экз.:
\t\t\t\t\t\t\t\t\t{{ book.copies }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"{{ path('app_book_show', {'id': book.id}) }}\" class=\"btn-view\">Подробнее</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t\t<div style=\"margin-top: 30px;\">
\t\t\t<a href=\"{{ path('app_author_index') }}\" class=\"back-link\">Назад к списку авторов</a>
\t\t</div>
\t</div>

\t<style>
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.author-header {
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

\t\t.author-info {
\t\t\tbackground: #f9f9f9;
\t\t\tpadding: 20px;
\t\t\tborder-radius: 5px;
\t\t\tmargin-bottom: 30px;
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
\t\t\twidth: 150px;
\t\t\tfont-weight: bold;
\t\t\tcolor: #555;
\t\t}

\t\t.value {
\t\t\tflex: 1;
\t\t}

\t\t.biography {
\t\t\tline-height: 1.6;
\t\t\tcolor: #333;
\t\t}

\t\t.books-section {
\t\t\tmargin-top: 30px;
\t\t}

\t\t.books-section h2 {
\t\t\tmargin-bottom: 15px;
\t\t\tcolor: #333;
\t\t}

\t\t.books-list {
\t\t\tdisplay: grid;
\t\t\tgap: 15px;
\t\t}

\t\t.book-card {
\t\t\tbackground: white;
\t\t\tpadding: 15px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.book-card h3 {
\t\t\tmargin: 0 0 10px;
\t\t\tcolor: #2196F3;
\t\t}

\t\t.book-details {
\t\t\tdisplay: flex;
\t\t\tgap: 15px;
\t\t\tmargin-bottom: 10px;
\t\t\tcolor: #666;
\t\t\tfont-size: 14px;
\t\t}

\t\t.book-card .btn-view {
\t\t\tdisplay: inline-block;
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t\tpadding: 5px 10px;
\t\t\tborder-radius: 3px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 14px;
\t\t}

\t\t.book-card .btn-view:hover {
\t\t\tbackground: #45a049;
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
", "author/show.html.twig", "C:\\code\\library\\library-web\\templates\\author\\show.html.twig");
    }
}
