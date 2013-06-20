<?php

namespace Behavioral\Strategy\Calculator;

/**
 * Description of CalculatorContext
 *
 * @author jardissone
 */
class CalculatorContext
{

    private $strategy;
    
    public function __construct(CalculatorInterface $strategy)
    {
        $this->strategy = $strategy;
    }
    
    public function execute($num1, $num2)
    {
        return $this->strategy->doOperation($num1, $num2);
    }

}

?>
