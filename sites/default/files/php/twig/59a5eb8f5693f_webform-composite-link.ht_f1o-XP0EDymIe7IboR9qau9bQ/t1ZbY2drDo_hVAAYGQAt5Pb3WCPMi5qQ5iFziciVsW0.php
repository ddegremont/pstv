<?php

/* modules/webform/templates/webform-composite-link.html.twig */
class __TwigTemplate_a27d34b043d9a509abdcea09ba50940b3f42ee00e56700d2e6baea993f7290ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.element.composite"), "html", null, true));
        echo "
";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-composite-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  43 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation of a link composite webform element.
 *
 * Available variables:
 * - content: The link webform element to be output.

 * @see template_preprocess_webform_composite_link()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.element.composite') }}
{{ content }}
";
    }
}
