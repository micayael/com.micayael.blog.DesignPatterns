<?php

namespace Creational\SimpleFactory\FormElement;

/**
 *
 * @author jardissone
 */
abstract class AbstractFormElement
{

    protected $id;
    protected $label;
    protected $value;

    public abstract function getHTML();

    public function __toString()
    {
        return '<pre>' . $this->getHTML() . '</pre>';
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

}

?>
