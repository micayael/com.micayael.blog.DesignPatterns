<?php

namespace Creational\Builder\Form;

use Creational\Builder\Form\Form;

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
