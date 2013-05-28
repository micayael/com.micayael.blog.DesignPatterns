<?php

namespace Creational\FactoryMethod\FormElement;

use Creational\FactoryMethod\FormElement\InputText;
use Creational\FactoryMethod\FormElement\InputPassword;
use Creational\FactoryMethod\FormElement\Textarea;

/**
 * Description of FormElementFactory
 *
 * @author jardissone
 */
abstract class FormElementFactory
{

    const TYPE_INPUT_TEXT = 0;
    const TYPE_INPUT_PASSWORD = 1;
    const TYPE_TEXTAREA = 2;

    public static function create($type, $label, $attrs = array())
    {
        switch($type)
        {
            case self::TYPE_INPUT_TEXT: return new InputText($label, $attrs);
            case self::TYPE_INPUT_PASSWORD: return new InputPassword($label, $attrs);
            case self::TYPE_TEXTAREA: return new Textarea($label, $attrs);
            default:
                throw new \Exception('Tipo de usario desconocido');
        }
    }

}

?>
