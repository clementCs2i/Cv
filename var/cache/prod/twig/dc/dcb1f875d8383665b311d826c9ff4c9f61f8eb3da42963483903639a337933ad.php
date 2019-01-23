<?php

/* Modals/ModalMail.html.twig */
class __TwigTemplate_b6c7a09d6c0c86cfec6fd3bfadd9c30f39d5c82754a89a9dd7f7000f4746f265 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <p>Modal body text goes here.</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Modals/ModalMail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Modals/ModalMail.html.twig", "C:\\Users\\Clément\\Cv\\templates\\Modals\\ModalMail.html.twig");
    }
}
