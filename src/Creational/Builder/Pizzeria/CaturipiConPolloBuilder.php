<?php

namespace Creational\Builder\Pizzeria;

/**
 * Corresponde al "ConcreteBuilder"
 *
 * @author jardissone
 */
class CaturipiConPolloBuilder extends AbstractPizzaBuilder
{

    public function buildAgregados()
    {
        $this->pizza->setAgregados("Catupiri & Pollo");
    }

    public function buildMasa()
    {
        $this->pizza->setMasa("Masa Fina");
    }

    public function buildSalsa()
    {
        $this->pizza->setSalsa("Salsa de Tomate");
    }

}

?>
