<?php

namespace Creational\FactoryMethod\FormElement;

/**
 * Description of InputText
 *
 * @author jardissone
 */
class Textarea extends AbstractFormElement
{

    public function getHTML()
    {
        $pattern = '<label for="%s">%s</label>' . PHP_EOL . '<textarea id="%s" rows="5" cols="40">%s</textarea> ' . PHP_EOL;
        
        return sprintf($pattern, $this->getId(), $this->getLabel(), $this->getId(), $this->getValue());
    }

}

?>
