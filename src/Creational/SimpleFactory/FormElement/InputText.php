<?php

namespace Creational\SimpleFactory\FormElement;

/**
 * Description of InputText
 *
 * @author jardissone
 */
class InputText extends AbstractFormElement
{

    public function getHTML()
    {
        $pattern = '<label for="%s">%s</label>' .  PHP_EOL . '<input type="text" id="%s" value="%s" />' . PHP_EOL;

        return sprintf($pattern, $this->getId(), $this->getLabel(), $this->getId(), $this->getValue());
    }

}

?>
