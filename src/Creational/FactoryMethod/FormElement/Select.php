<?php

namespace Creational\FactoryMethod\FormElement;

/**
 * Description of InputText
 *
 * @author jardissone
 */
class Select extends AbstractFormElement
{

    public function getHTML()
    {
        $label_pattern = '<label for="%s">%s</label>' . PHP_EOL;
        $select_pattern = '<select %s %s>%s</select>' . PHP_EOL;
        $options_pattern = '<option value="%s">%s</option>';

        $label = $this->label;
        $id = isset($this->attrs['id']) ? 'id="' . $this->attrs['id'] . '"' : '';
        $value = isset($this->attrs['value']) ? $this->attrs['value'] : '';
        $name = isset($this->attrs['name']) ? 'name="' . $this->attrs['name'] . '"' : '';
        
        $ret = '';
        
        foreach($this->options as $key => $value)
        {
            $ret .= sprintf($options_pattern, $key, $value);
        }
        
        $ret = sprintf($select_pattern, $id, $name, $ret);
        $ret = sprintf($label_pattern, $id, $label) . $ret;

        return $ret;
    }

}

?>
