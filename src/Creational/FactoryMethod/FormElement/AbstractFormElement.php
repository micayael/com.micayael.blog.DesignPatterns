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
    protected $options;

    public abstract function getHTML();

    public function __construct($label, $attrs = array(), $options = array())
    {
        $this->label = $label;
        $this->attrs = $attrs;
        $this->options = $options;
    }

    public function __toString()
    {
        return $this->getHTML();
    }

}

?>
