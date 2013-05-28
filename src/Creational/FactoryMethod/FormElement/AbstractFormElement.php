<?php

namespace Creational\FactoryMethod\FormElement;

/**
 *
 * @author jardissone
 */
abstract class AbstractFormElement
{

    protected $label;
    protected $attrs;

    public abstract function getHTML();

    public function __construct($label, $attrs = array())
    {
        $this->label = $label;
        $this->attrs = $attrs;
    }

    public function __toString()
    {
        return $this->getHTML();
    }

}

?>
