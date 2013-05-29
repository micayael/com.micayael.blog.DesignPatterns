<?php

namespace Creational\FactoryMethod\FormElement;

use Creational\FactoryMethod\FormElement\Select;

/**
 * Description of InputFormElementFactory
 *
 * @author jardissone
 */
class SelectionFormElementFactory implements FormElementFactoryInterface
{
    
    const TYPE_SELECT = 3;

    public static function create($type, $label, $attrs = array(), $options = array())
    {
        switch($type)
        {
            case self::TYPE_SELECT: return new Select($label, $attrs, $options);
            default:
                throw new \Exception('Tipo desconocido');
        }
    }
}

?>
