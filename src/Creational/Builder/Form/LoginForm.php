<?php

namespace Creational\Builder\Form;

use Creational\FactoryMethod\FormElement\FormElementFactory;

/**
 * Description of ContactoForm
 *
 * @author jardissone
 */
class LoginForm extends AbstractFormBuilder
{

    public function buildForm()
    {
        $user = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, 'Usuario:');
        $password = FormElementFactory::create(FormElementFactory::TYPE_INPUT_PASSWORD, 'Clave:');

        $this->form->addInputs(array($user, $password));

        return $this->form;
    }

}

?>
