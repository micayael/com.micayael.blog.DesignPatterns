<?php

namespace Creational\FactoryMethod\FormElement;

/**
 * Description of InputText
 *
 * @author jardissone
 */
class InputText extends AbstractFormElement
{

    public function getHTML()
    {
        $pattern = '<label for="%s">%s</label>' .  PHP_EOL . '<input type="text" %s value="%s" />' . PHP_EOL;
        
        $label = $this->label;
        $id = isset($this->attrs['id']) ? 'id="' . $this->attrs['id'] . '"' : '';
        $value = isset($this->attrs['value']) ? $this->attrs['value'] : '';

        return sprintf($pattern, $id, $label, $id, $value);
    }

}

?>
