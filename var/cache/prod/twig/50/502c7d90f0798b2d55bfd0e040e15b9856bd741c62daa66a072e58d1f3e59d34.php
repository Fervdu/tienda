<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig */
class __TwigTemplate_b7853e5236cb55e05919de42d565d2b7b3d031e32188b374171fa0b71848fb63 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", 28);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit: %value%", ["%value%" => $this->getAttribute($this->getAttribute(($context["editableCategory"] ?? null), "name", []), ($context["contextLangId"] ?? null), [], "array")], "Admin.Catalog.Feature");
        // line 28
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", 33)->display(twig_array_merge($context, ["categoryForm" =>         // line 34
($context["editCategoryForm"] ?? null), "thumbnailImage" => $this->getAttribute(        // line 35
($context["editableCategory"] ?? null), "thumbnailImage", []), "coverImage" => $this->getAttribute(        // line 36
($context["editableCategory"] ?? null), "coverImage", []), "menuThumbnailImages" => $this->getAttribute(        // line 37
($context["editableCategory"] ?? null), "menuThumbnailImages", [])]));
        // line 39
        echo "    </div>
  </div>";
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        // line 44
        $this->displayParentBlock("javascripts", $context, $blocks);
        // line 46
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/javascripts.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 46,  63 => 44,  60 => 43,  55 => 39,  53 => 37,  52 => 36,  51 => 35,  50 => 34,  49 => 33,  46 => 31,  43 => 30,  39 => 28,  37 => 26,  22 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/edit.html.twig", "C:\\xampp\\htdocs\\tienda\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Categories\\edit.html.twig");
    }
}
