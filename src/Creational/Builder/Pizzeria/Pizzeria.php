<?php

namespace Creational\Builder\Pizzeria;

/**
 * Corresponde al "Director"
 *
 * @author jardissone
 */
class Pizzeria
{

    private $pizzaBuilder;
    
    public function setPizzaBuilder(AbstractPizzaBuilder $pizzaBuilder)
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }
    
    public function getPizza()
    {
        return $this->pizzaBuilder->getPizza();
    }
    
    public function prepararPizza()
    {
        $this->pizzaBuilder->cocinarPizza();
        $this->pizzaBuilder->buildMasa();
        $this->pizzaBuilder->buildSalsa();
        $this->pizzaBuilder->buildAgregados();
    }

}

?>
