<?php

namespace Creational\SimpleFactory\FormElement;

/**
 * Description of InputText
 *
 * @author jardissone
 */
class Textarea extends AbstractFormElement
{

    public function getHTML()
    {
        $pattern = '<label for="%s">%s</label>' . PHP_EOL . '<textarea %s rows="5" cols="40">%s</textarea> ' . PHP_EOL;

        $label = $this->label;
        $id = isset($this->attrs['id']) ? 'id="' . $this->attrs['id'] . '"' : '';
        $value = isset($this->attrs['value']) ? $this->attrs['value'] : '';

        return sprintf($pattern, $id, $label, $id, $value);
    }

}

?>
