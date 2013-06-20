<?php

// Ejemplo tomado de http://www.newthinktank.com/2012/10/state-design-pattern-tutorial/

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\Strategy\Calculator\CalculatorContext;
use Behavioral\Strategy\Calculator\OperationAdd;
use Behavioral\Strategy\Calculator\OperationSubstract;
use Behavioral\Strategy\Calculator\OperationMultiply;

$calculator = new CalculatorContext(new OperationAdd());
echo 'Add: ' . $calculator->execute(3, 2) . PHP_EOL;

$calculator = new CalculatorContext(new OperationSubstract());
echo 'Substract: ' . $calculator->execute(3, 2) . PHP_EOL;

$calculator = new CalculatorContext(new OperationMultiply());
echo 'Multiply: ' . $calculator->execute(3, 2) . PHP_EOL;

Util::showImage(__FILE__);
Util::showCode(__FILE__);