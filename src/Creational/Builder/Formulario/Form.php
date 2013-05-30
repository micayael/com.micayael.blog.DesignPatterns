<?php

namespace Creational\Builder\Formulario;

/**
 * Description of Form
 *
 * @author jardissone
 */
class Form
{

    protected $inputs = array();

    public function addInput(AbstractFormElement $element)
    {
        $this->inputs[] = $element;
    }

    public function addInputs(array $elements)
    {
        $this->inputs = $elements;
    }

    public function render()
    {
        $ret = '<form>' . PHP_EOL;

        foreach($this->inputs as $input)
        {
            $ret .= '<div>' . PHP_EOL;
            $ret .= $input->getHTML();
            $ret .= '</div>' . PHP_EOL;
        }

        $ret .= '</form>' . PHP_EOL;

        return $ret;
    }

    private function formatHTML($html)
    {
        $html = preg_replace('/>\s*</im', '><', $html);
        $dom = new \DOMDocument;
        $dom->loadHTML($html);
        $dom->formatOutput = true;
        return $dom->saveXML();
    }

}

?>
