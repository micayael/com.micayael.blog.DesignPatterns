<?php

namespace Structural\Bridge\Buscador;

use Structural\Bridge\Buscador\TipoBuscador;

/**
 * Description of AbstractBuscador
 *
 * @author jardissone
 */
abstract class AbstractBuscador
{

    protected $tipoBuscador;
    protected $filtros;

    public abstract function render();

    public function __construct(TipoBuscador $tipoBuscador)
    {
        $this->tipoBuscador = $tipoBuscador;
    }

}

?>
