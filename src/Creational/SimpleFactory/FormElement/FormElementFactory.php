<?php

namespace Creational\SimpleFactory\FormElement;

use Creational\SimpleFactory\FormElement\InputText;
use Creational\SimpleFactory\FormElement\Textarea;

/**
 * Description of FormElementFactory
 *
 * @author jardissone
 */
abstract class FormElementFactory
{

    const TYPE_INPUT_TEXT = 0;
    const TYPE_TEXTAREA = 1;

    public static function create($type)
    {
        switch($type)
        {
            case self::TYPE_INPUT_TEXT: return new InputText($type);
            case self::TYPE_TEXTAREA: return new Textarea($type);
            default:
                throw new \Exception('Tipo de usario desconocido');
        }
    }

}

?>
