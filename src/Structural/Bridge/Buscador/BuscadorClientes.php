<?php

namespace Structural\Bridge\Buscador;

/**
 * Description of BuscadorClientes
 *
 * @author jardissone
 */
class BuscadorClientes extends AbstractBuscador
{

    public function render()
    {
        $this->filtros = array(
            array('label' => 'Nombre:'),
            array('label' => 'RUC:'),
            array('label' => 'Pais:'),
            array('label' => 'Usuario:'),
            array('label' => 'Tipo de Empresa:'),
        );
        
        echo $this->tipoBuscador->getHTML($this->filtros);
    }
}

?>
