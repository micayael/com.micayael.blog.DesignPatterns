<?php

namespace Creational\Builder\Formulario;

/**
 * Description of FormDirector
 *
 * @author jardissone
 */
class FormDirector
{
    
    private $_builder;
    
    public function __construct(AbstractFormBuilder $builder)
    {
        $this->_builder = $builder;
    }

    public function buildForm()
    {
        return $this->_builder->buildForm();
    }

}

?>
