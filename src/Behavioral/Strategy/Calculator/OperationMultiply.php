<?php

namespace Behavioral\Strategy\Calculator;

/**
 * Description of Calculator
 *
 * @author jardissone
 */
class OperationMultiply implements CalculatorInterface
{

    public function doOperation($num1, $num2)
    {
        return $num1 * $num2;
    }

}

?>
