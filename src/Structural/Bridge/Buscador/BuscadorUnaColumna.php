<?php

namespace Structural\Bridge\Buscador;

use Creational\FactoryMethod\FormElement\FormElementFactory;

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
            $input = FormElementFactory::create(FormElementFactory::TYPE_INPUT_TEXT, $filtro['label']);
            $ret .= '<div>' . $input . '</div>' . PHP_EOL;
        }
        
        return $ret;
    }

}

?>
