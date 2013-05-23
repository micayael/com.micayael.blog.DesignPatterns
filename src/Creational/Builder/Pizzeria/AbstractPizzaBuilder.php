<?php

namespace Creational\Builder\Pizzeria;

/**
 * Corresponde al "AbstractBuilder"
 *
 * @author jardissone
 */
abstract class AbstractPizzaBuilder
{

    protected $pizza;
    
    public function getPizza()
    {
        return $this->pizza;
    }

    public function cocinarPizza()
    {
        $this->pizza = new Pizza();
    }
    
    public abstract function buildMasa();
    public abstract function buildSalsa();
    public abstract function buildAgregados();

}

?>
