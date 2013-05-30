<?php

namespace Creational\Builder\Formulario;

use Creational\FactoryMethod\FormElement\InputFormElementFactory;

/**
 * Description of ContactoForm
 *
 * @author jardissone
 */
class LoginForm extends AbstractFormBuilder
{

    public function buildForm()
    {
        $user = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_TEXT, 'Usuario:');
        $password = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_PASSWORD, 'Clave:');

        $this->form->addInputs(array($user, $password));

        return $this->form;
    }

}

?>
