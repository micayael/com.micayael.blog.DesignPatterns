<?php

namespace Creational\Builder\Pizzeria;

/**
 * Sería lo correspondiente al "Product"
 *
 * @author jardissone
 */
class Pizza
{

    private $masa;
    private $salsa;
    private $agregados;
    
    public function __toString()
    {
        return '<pre>' . print_r($this, true) . '</pre>';
    }

    public function setMasa($masa)
    {
        $this->masa = $masa;
    }

    public function setSalsa($salsa)
    {
        $this->salsa = $salsa;
    }

    public function setAgregados($agregados)
    {
        $this->agregados = $agregados;
    }

}

?>
