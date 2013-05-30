<?php

namespace Structural\Bridge\Buscador;

use Creational\FactoryMethod\FormElement\InputFormElementFactory;

/**
 * Description of BuscadorUnaColumna
 *
 * @author jardissone
 */
class BuscadorUnaColumna implements TipoBuscador
{

    public function getHTML(array $filtros)
    {
        $ret = '';

        foreach($filtros as $filtro)
        {
            $input = InputFormElementFactory::create(InputFormElementFactory::TYPE_INPUT_TEXT, $filtro['label']);
            $ret .= '<div>' . $input . '</div>' . PHP_EOL;
        }

        return $ret;
    }

}

?>
