<?php

namespace Creational\Builder\Pizzeria;

/**
 * Corresponde al "ConcreteBuilder"
 *
 * @author jardissone
 */
class CuatroQuesosBuilder extends AbstractPizzaBuilder
{

    public function buildAgregados()
    {
        $this->pizza->setAgregados("Roqueford + Parmesano + 2 quesos");
    }

    public function buildMasa()
    {
        $this->pizza->setMasa("Masa Gruesa");
    }

    public function buildSalsa()
    {
        $this->pizza->setSalsa("Salsa de Tomate");
    }

}

?>
