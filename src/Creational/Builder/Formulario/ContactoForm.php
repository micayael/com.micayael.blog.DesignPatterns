<?php

namespace Creational\Builder\Formulario;

use Creational\FactoryMethod\FormElement\InputFormElementFactory;

/**
 * Description of ContactoForm
 *
 * @author jardissone
 */
class ContactoForm extends AbstractFormBuilder
{

    public function buildForm()
    {
        $nombre = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_TEXT, 'Nombre:');
        $asunto = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_TEXT, 'Asunto:');
        $email = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_TEXT, 'Email:');
        $comentario = InputFormElementFactory::create(InputFormElementFactory::TYPE_TEXTAREA, 'Comentario:');

        $this->form->addInputs(array($nombre, $asunto, $email, $comentario));

        return $this->form;
    }

}

?>
