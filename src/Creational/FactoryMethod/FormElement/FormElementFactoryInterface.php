<?php

namespace Creational\FactoryMethod\FormElement;

/**
 * Description of FormElementFactory
 *
 * @author jardissone
 */
interface FormElementFactoryInterface
{

    public static function create($type, $label, $attrs = array(), $options = array());

}

?>
