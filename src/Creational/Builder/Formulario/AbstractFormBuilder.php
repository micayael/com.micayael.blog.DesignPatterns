<?php

namespace Creational\Builder\Formulario;

/**
 * Description of AbstractFormBuilder
 *
 * @author jardissone
 */
abstract class AbstractFormBuilder
{

    protected $form;

    public function __construct()
    {
        $this->form = new Form();
    }

    public abstract function buildForm();

}

?>
