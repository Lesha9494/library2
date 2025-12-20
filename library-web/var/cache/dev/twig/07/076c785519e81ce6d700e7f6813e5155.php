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

/* reader/show.html.twig */
class __TwigTemplate_442496c14b78dabf334c38f0776c7107 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reader/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reader/show.html.twig"));

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

        yield "Читатель:
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 4, $this->source); })()), "fullName", [], "any", false, false, false, 4), "html", null, true);
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
\t\t<div class=\"reader-header\">
\t\t\t<h1>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 10, $this->source); })()), "fullName", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reader_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn-edit\">Изменить</a>
\t\t\t\t";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reader/_delete_form.html.twig");
        yield "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"reader-info\">
\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Номер читательского билета:</span>
\t\t\t\t<span class=\"value\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 20, $this->source); })()), "ticketNumber", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Контактная информация:</span>
\t\t\t\t<span class=\"value\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 25, $this->source); })()), "contacts", [], "any", false, false, false, 25), "html", null, true);
        yield "</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Email:</span>
\t\t\t\t<span class=\"value\">";
        // line 30
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true)) : ("Не указан"));
        yield "</span>
\t\t\t</div>

\t\t\t";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 33, $this->source); })()), "roles", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "\t\t\t\t<div class=\"info-row\">
\t\t\t\t\t<span class=\"label\">Роли в системе:</span>
\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 37, $this->source); })()), "roles", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 38
                yield "\t\t\t\t\t\t\t<span class=\"role-badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</span>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t";
        }
        // line 43
        yield "\t\t</div>

\t\t<div class=\"loans-section\">
\t\t\t<h2>Выданные книги</h2>

\t\t\t";
        // line 48
        $context["activeLoans"] = [];
        // line 49
        yield "\t\t\t";
        $context["returnedLoans"] = [];
        // line 50
        yield "
\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 51, $this->source); })()), "loans", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
            // line 52
            yield "\t\t\t\t";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "returnDate", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "\t\t\t\t\t";
                $context["returnedLoans"] = Twig\Extension\CoreExtension::merge((isset($context["returnedLoans"]) || array_key_exists("returnedLoans", $context) ? $context["returnedLoans"] : (function () { throw new RuntimeError('Variable "returnedLoans" does not exist.', 53, $this->source); })()), [$context["loan"]]);
                // line 54
                yield "\t\t\t\t";
            } else {
                // line 55
                yield "\t\t\t\t\t";
                $context["activeLoans"] = Twig\Extension\CoreExtension::merge((isset($context["activeLoans"]) || array_key_exists("activeLoans", $context) ? $context["activeLoans"] : (function () { throw new RuntimeError('Variable "activeLoans" does not exist.', 55, $this->source); })()), [$context["loan"]]);
                // line 56
                yield "\t\t\t\t";
            }
            // line 57
            yield "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
\t\t\t";
        // line 59
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeLoans"]) || array_key_exists("activeLoans", $context) ? $context["activeLoans"] : (function () { throw new RuntimeError('Variable "activeLoans" does not exist.', 59, $this->source); })())) > 0)) {
            // line 60
            yield "\t\t\t\t<div class=\"active-loans\">
\t\t\t\t\t<h3>На руках (";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeLoans"]) || array_key_exists("activeLoans", $context) ? $context["activeLoans"] : (function () { throw new RuntimeError('Variable "activeLoans" does not exist.', 61, $this->source); })())), "html", null, true);
            yield ")</h3>
\t\t\t\t\t<div class=\"loans-list\">
\t\t\t\t\t\t";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeLoans"]) || array_key_exists("activeLoans", $context) ? $context["activeLoans"] : (function () { throw new RuntimeError('Variable "activeLoans" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
                // line 64
                yield "\t\t\t\t\t\t\t<div class=\"loan-card\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 66) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 66), "book", [], "any", false, false, false, 66))) {
                    // line 67
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 67), "book", [], "any", false, false, false, 67), "title", [], "any", false, false, false, 67), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 69
                    yield "\t\t\t\t\t\t\t\t\t\tКнига не указана
\t\t\t\t\t\t\t\t\t";
                }
                // line 71
                yield "\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"loan-details\">
\t\t\t\t\t\t\t\t\t<span>Выдана:
\t\t\t\t\t\t\t\t\t\t";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "issueDate", [], "any", false, false, false, 74), "d.m.Y"), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t<span>Вернуть до:
\t\t\t\t\t\t\t\t\t\t";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dueDate", [], "any", false, false, false, 76), "d.m.Y"), "html", null, true);
                yield "</span>

\t\t\t\t\t\t\t\t\t";
                // line 78
                $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
                // line 79
                yield "\t\t\t\t\t\t\t\t\t";
                $context["dueDate"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dueDate", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "dueDate", [], "any", false, false, false, 79), "Y-m-d")) : (""));
                // line 80
                yield "\t\t\t\t\t\t\t\t\t";
                if (((isset($context["dueDate"]) || array_key_exists("dueDate", $context) ? $context["dueDate"] : (function () { throw new RuntimeError('Variable "dueDate" does not exist.', 80, $this->source); })()) < (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 80, $this->source); })()))) {
                    // line 81
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"status-overdue\">Просрочена на
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 82, $this->source); })()), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dueDate"]) || array_key_exists("dueDate", $context) ? $context["dueDate"] : (function () { throw new RuntimeError('Variable "dueDate" does not exist.', 82, $this->source); })()), "U")) / 86400), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\tдней</span>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    yield "\t\t\t\t\t\t\t\t\t\t<span class=\"status-active\">На руках</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\" class=\"btn-view\">Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 94
        yield "
\t\t\t";
        // line 95
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returnedLoans"]) || array_key_exists("returnedLoans", $context) ? $context["returnedLoans"] : (function () { throw new RuntimeError('Variable "returnedLoans" does not exist.', 95, $this->source); })())) > 0)) {
            // line 96
            yield "\t\t\t\t<div class=\"returned-loans\">
\t\t\t\t\t<h3>Возвращенные книги (";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returnedLoans"]) || array_key_exists("returnedLoans", $context) ? $context["returnedLoans"] : (function () { throw new RuntimeError('Variable "returnedLoans" does not exist.', 97, $this->source); })())), "html", null, true);
            yield ")</h3>
\t\t\t\t\t<div class=\"loans-list\">
\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["returnedLoans"]) || array_key_exists("returnedLoans", $context) ? $context["returnedLoans"] : (function () { throw new RuntimeError('Variable "returnedLoans" does not exist.', 99, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
                // line 100
                yield "\t\t\t\t\t\t\t<div class=\"loan-card returned\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t";
                // line 102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 102) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 102), "book", [], "any", false, false, false, 102))) {
                    // line 103
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "bookCopy", [], "any", false, false, false, 103), "book", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 105
                    yield "\t\t\t\t\t\t\t\t\t\tКнига не указана
\t\t\t\t\t\t\t\t\t";
                }
                // line 107
                yield "\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"loan-details\">
\t\t\t\t\t\t\t\t\t<span>Выдана:
\t\t\t\t\t\t\t\t\t\t";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "issueDate", [], "any", false, false, false, 110), "d.m.Y"), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t<span>Возвращена:
\t\t\t\t\t\t\t\t\t\t";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "returnDate", [], "any", false, false, false, 112), "d.m.Y"), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"status-returned\">Возвращена</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                yield "\" class=\"btn-view\">Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 120
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returnedLoans"]) || array_key_exists("returnedLoans", $context) ? $context["returnedLoans"] : (function () { throw new RuntimeError('Variable "returnedLoans" does not exist.', 120, $this->source); })())) > 5)) {
                // line 121
                yield "\t\t\t\t\t\t<p style=\"text-align: center; margin-top: 10px;\">
\t\t\t\t\t\t\tи еще
\t\t\t\t\t\t\t";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returnedLoans"]) || array_key_exists("returnedLoans", $context) ? $context["returnedLoans"] : (function () { throw new RuntimeError('Variable "returnedLoans" does not exist.', 123, $this->source); })())) - 5), "html", null, true);
                yield "
\t\t\t\t\t\t\tкниг...
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 127
            yield "\t\t\t\t</div>
\t\t\t";
        }
        // line 129
        yield "
\t\t\t";
        // line 130
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeLoans"]) || array_key_exists("activeLoans", $context) ? $context["activeLoans"] : (function () { throw new RuntimeError('Variable "activeLoans" does not exist.', 130, $this->source); })())) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["returnedLoans"]) || array_key_exists("returnedLoans", $context) ? $context["returnedLoans"] : (function () { throw new RuntimeError('Variable "returnedLoans" does not exist.', 130, $this->source); })())) == 0))) {
            // line 131
            yield "\t\t\t\t<p style=\"text-align: center; color: #666; padding: 20px;\">
\t\t\t\t\tУ этого читателя еще нет выданных книг
\t\t\t\t</p>
\t\t\t";
        }
        // line 135
        yield "\t\t</div>

\t\t<div style=\"margin-top: 30px;\">
\t\t\t<a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reader_index");
        yield "\" class=\"back-link\">← Назад к списку читателей</a>
\t\t</div>
\t</div>

\t<style>
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.reader-header {
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

\t\t.reader-info {
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
\t\t\twidth: 200px;
\t\t\tfont-weight: bold;
\t\t\tcolor: #555;
\t\t}

\t\t.value {
\t\t\tflex: 1;
\t\t}

\t\t.role-badge {
\t\t\tbackground: #2196F3;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tmargin-right: 5px;
\t\t\tfont-size: 12px;
\t\t}

\t\t.loans-section {
\t\t\tmargin-top: 30px;
\t\t}

\t\t.loans-section h2 {
\t\t\tmargin-bottom: 15px;
\t\t\tcolor: #333;
\t\t}

\t\t.loans-section h3 {
\t\t\tmargin: 20px 0 10px;
\t\t\tcolor: #555;
\t\t}

\t\t.loans-list {
\t\t\tdisplay: grid;
\t\t\tgap: 15px;
\t\t}

\t\t.loan-card {
\t\t\tbackground: white;
\t\t\tpadding: 15px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.loan-card.returned {
\t\t\tbackground: #f9f9f9;
\t\t\topacity: 0.8;
\t\t}

\t\t.loan-card h4 {
\t\t\tmargin: 0 0 10px;
\t\t\tcolor: #2196F3;
\t\t}

\t\t.loan-details {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tgap: 5px;
\t\t\tmargin-bottom: 10px;
\t\t\tcolor: #666;
\t\t\tfont-size: 14px;
\t\t}

\t\t.status-active {
\t\t\tcolor: #4CAF50;
\t\t\tfont-weight: bold;
\t\t}

\t\t.status-overdue {
\t\t\tcolor: #f44336;
\t\t\tfont-weight: bold;
\t\t}

\t\t.status-returned {
\t\t\tcolor: #2196F3;
\t\t\tfont-weight: bold;
\t\t}

\t\t.loan-card .btn-view {
\t\t\tdisplay: inline-block;
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t\tpadding: 5px 10px;
\t\t\tborder-radius: 3px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 14px;
\t\t}

\t\t.loan-card .btn-view:hover {
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
        return "reader/show.html.twig";
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
        return array (  396 => 138,  391 => 135,  385 => 131,  383 => 130,  380 => 129,  376 => 127,  369 => 123,  365 => 121,  363 => 120,  359 => 118,  350 => 115,  344 => 112,  339 => 110,  334 => 107,  330 => 105,  324 => 103,  322 => 102,  318 => 100,  314 => 99,  309 => 97,  306 => 96,  304 => 95,  301 => 94,  296 => 91,  287 => 88,  284 => 87,  280 => 85,  274 => 82,  271 => 81,  268 => 80,  265 => 79,  263 => 78,  258 => 76,  253 => 74,  248 => 71,  244 => 69,  238 => 67,  236 => 66,  232 => 64,  228 => 63,  223 => 61,  220 => 60,  218 => 59,  215 => 58,  209 => 57,  206 => 56,  203 => 55,  200 => 54,  197 => 53,  194 => 52,  190 => 51,  187 => 50,  184 => 49,  182 => 48,  175 => 43,  170 => 40,  161 => 38,  157 => 37,  152 => 34,  150 => 33,  144 => 30,  136 => 25,  128 => 20,  118 => 13,  114 => 12,  109 => 10,  105 => 8,  92 => 7,  79 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Читатель:
\t{{ reader.fullName }}
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"reader-header\">
\t\t\t<h1>{{ reader.fullName }}</h1>
\t\t\t<div class=\"actions\">
\t\t\t\t<a href=\"{{ path('app_reader_edit', {'id': reader.id}) }}\" class=\"btn-edit\">Изменить</a>
\t\t\t\t{{ include('reader/_delete_form.html.twig') }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"reader-info\">
\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Номер читательского билета:</span>
\t\t\t\t<span class=\"value\">{{ reader.ticketNumber }}</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Контактная информация:</span>
\t\t\t\t<span class=\"value\">{{ reader.contacts }}</span>
\t\t\t</div>

\t\t\t<div class=\"info-row\">
\t\t\t\t<span class=\"label\">Email:</span>
\t\t\t\t<span class=\"value\">{{ reader.email ? reader.email : 'Не указан' }}</span>
\t\t\t</div>

\t\t\t{% if reader.roles %}
\t\t\t\t<div class=\"info-row\">
\t\t\t\t\t<span class=\"label\">Роли в системе:</span>
\t\t\t\t\t<span class=\"value\">
\t\t\t\t\t\t{% for role in reader.roles %}
\t\t\t\t\t\t\t<span class=\"role-badge\">{{ role }}</span>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"loans-section\">
\t\t\t<h2>Выданные книги</h2>

\t\t\t{% set activeLoans = [] %}
\t\t\t{% set returnedLoans = [] %}

\t\t\t{% for loan in reader.loans %}
\t\t\t\t{% if loan.returnDate %}
\t\t\t\t\t{% set returnedLoans = returnedLoans|merge([loan]) %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set activeLoans = activeLoans|merge([loan]) %}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t{% if activeLoans|length > 0 %}
\t\t\t\t<div class=\"active-loans\">
\t\t\t\t\t<h3>На руках ({{ activeLoans|length }})</h3>
\t\t\t\t\t<div class=\"loans-list\">
\t\t\t\t\t\t{% for loan in activeLoans %}
\t\t\t\t\t\t\t<div class=\"loan-card\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t{% if loan.bookCopy and loan.bookCopy.book %}
\t\t\t\t\t\t\t\t\t\t{{ loan.bookCopy.book.title }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tКнига не указана
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"loan-details\">
\t\t\t\t\t\t\t\t\t<span>Выдана:
\t\t\t\t\t\t\t\t\t\t{{ loan.issueDate|date('d.m.Y') }}</span>
\t\t\t\t\t\t\t\t\t<span>Вернуть до:
\t\t\t\t\t\t\t\t\t\t{{ loan.dueDate|date('d.m.Y') }}</span>

\t\t\t\t\t\t\t\t\t{% set today = \"now\"|date('Y-m-d') %}
\t\t\t\t\t\t\t\t\t{% set dueDate = loan.dueDate ? loan.dueDate|date('Y-m-d') : '' %}
\t\t\t\t\t\t\t\t\t{% if dueDate < today %}
\t\t\t\t\t\t\t\t\t\t<span class=\"status-overdue\">Просрочена на
\t\t\t\t\t\t\t\t\t\t\t{{ (today|date('U') - dueDate|date('U')) / 86400 }}
\t\t\t\t\t\t\t\t\t\t\tдней</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"status-active\">На руках</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_loan_show', {'id': loan.id}) }}\" class=\"btn-view\">Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if returnedLoans|length > 0 %}
\t\t\t\t<div class=\"returned-loans\">
\t\t\t\t\t<h3>Возвращенные книги ({{ returnedLoans|length }})</h3>
\t\t\t\t\t<div class=\"loans-list\">
\t\t\t\t\t\t{% for loan in returnedLoans|slice(0, 5) %}
\t\t\t\t\t\t\t<div class=\"loan-card returned\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t{% if loan.bookCopy and loan.bookCopy.book %}
\t\t\t\t\t\t\t\t\t\t{{ loan.bookCopy.book.title }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tКнига не указана
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<div class=\"loan-details\">
\t\t\t\t\t\t\t\t\t<span>Выдана:
\t\t\t\t\t\t\t\t\t\t{{ loan.issueDate|date('d.m.Y') }}</span>
\t\t\t\t\t\t\t\t\t<span>Возвращена:
\t\t\t\t\t\t\t\t\t\t{{ loan.returnDate|date('d.m.Y') }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"status-returned\">Возвращена</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_loan_show', {'id': loan.id}) }}\" class=\"btn-view\">Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t{% if returnedLoans|length > 5 %}
\t\t\t\t\t\t<p style=\"text-align: center; margin-top: 10px;\">
\t\t\t\t\t\t\tи еще
\t\t\t\t\t\t\t{{ returnedLoans|length - 5 }}
\t\t\t\t\t\t\tкниг...
\t\t\t\t\t\t</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if activeLoans|length == 0 and returnedLoans|length == 0 %}
\t\t\t\t<p style=\"text-align: center; color: #666; padding: 20px;\">
\t\t\t\t\tУ этого читателя еще нет выданных книг
\t\t\t\t</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div style=\"margin-top: 30px;\">
\t\t\t<a href=\"{{ path('app_reader_index') }}\" class=\"back-link\">← Назад к списку читателей</a>
\t\t</div>
\t</div>

\t<style>
\t\t.container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 20px;
\t\t}

\t\t.reader-header {
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

\t\t.reader-info {
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
\t\t\twidth: 200px;
\t\t\tfont-weight: bold;
\t\t\tcolor: #555;
\t\t}

\t\t.value {
\t\t\tflex: 1;
\t\t}

\t\t.role-badge {
\t\t\tbackground: #2196F3;
\t\t\tcolor: white;
\t\t\tpadding: 3px 8px;
\t\t\tborder-radius: 3px;
\t\t\tmargin-right: 5px;
\t\t\tfont-size: 12px;
\t\t}

\t\t.loans-section {
\t\t\tmargin-top: 30px;
\t\t}

\t\t.loans-section h2 {
\t\t\tmargin-bottom: 15px;
\t\t\tcolor: #333;
\t\t}

\t\t.loans-section h3 {
\t\t\tmargin: 20px 0 10px;
\t\t\tcolor: #555;
\t\t}

\t\t.loans-list {
\t\t\tdisplay: grid;
\t\t\tgap: 15px;
\t\t}

\t\t.loan-card {
\t\t\tbackground: white;
\t\t\tpadding: 15px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 5px;
\t\t}

\t\t.loan-card.returned {
\t\t\tbackground: #f9f9f9;
\t\t\topacity: 0.8;
\t\t}

\t\t.loan-card h4 {
\t\t\tmargin: 0 0 10px;
\t\t\tcolor: #2196F3;
\t\t}

\t\t.loan-details {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tgap: 5px;
\t\t\tmargin-bottom: 10px;
\t\t\tcolor: #666;
\t\t\tfont-size: 14px;
\t\t}

\t\t.status-active {
\t\t\tcolor: #4CAF50;
\t\t\tfont-weight: bold;
\t\t}

\t\t.status-overdue {
\t\t\tcolor: #f44336;
\t\t\tfont-weight: bold;
\t\t}

\t\t.status-returned {
\t\t\tcolor: #2196F3;
\t\t\tfont-weight: bold;
\t\t}

\t\t.loan-card .btn-view {
\t\t\tdisplay: inline-block;
\t\t\tbackground: #4CAF50;
\t\t\tcolor: white;
\t\t\tpadding: 5px 10px;
\t\t\tborder-radius: 3px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 14px;
\t\t}

\t\t.loan-card .btn-view:hover {
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
", "reader/show.html.twig", "C:\\code\\library\\library-web\\templates\\reader\\show.html.twig");
    }
}
