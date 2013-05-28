<?php

namespace Creational\Builder\Form;

use Creational\FactoryMethod\FormElement\FormElementFactory;

/**
 * Description of ContactoForm
 *
 * @author jardissone
 */
class ContactoForm extends AbstractFormBuilder
{

    public function buildForm()
    {
        $nombre = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, 'Nombre:');
        $asunto = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, 'Asunto:');
        $email = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, 'Email:');
        $comentario = FormElementFactory::create(FormElementFactory::TYPE_TEXTAREA, 'Comentario:');

        $this->form->addInputs(array($nombre, $asunto, $email, $comentario));

        return $this->form;
    }

}

?>
