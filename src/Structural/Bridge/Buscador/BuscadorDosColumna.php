<?php

namespace Structural\Bridge\Buscador;

use Creational\FactoryMethod\FormElement\FormElementFactory;

/**
 * Description of BuscadorUnaColumna
 *
 * @author jardissone
 */
class BuscadorDosColumna implements TipoBuscador
{

    public function getHTML(array $filtros)
    {
        $ret = '';

        for($i = 0; $i < count($filtros); $i = $i + 2)
        {
            $input = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, $filtros[$i]['label']);

            if(isset($filtros[$i + 1]))
            {
                $input2 = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, $filtros[$i + 1]['label']);
            }
            else
            {
                $input2 = '';
            }

            $ret .= '<div>' . PHP_EOL;
            $ret .= '<span>' . $input . '</span>' . PHP_EOL;
            $ret .= '<span>' . $input2 . '</span>' . PHP_EOL;
            $ret .= '</div>' . PHP_EOL;
        }

        return $ret;
    }

}

?>
