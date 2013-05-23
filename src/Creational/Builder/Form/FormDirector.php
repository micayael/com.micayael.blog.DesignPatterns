<?php

namespace Creational\Builder\Form;

/**
 * Description of FormDirector
 *
 * @author jardissone
 */
class FormDirector
{

    public function buildForm(AbstractFormBuilder $builder)
    {
        return $builder->buildForm();
    }

}

?>
