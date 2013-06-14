<?php

// Ejemplo tomado de http://www.newthinktank.com/2012/10/state-design-pattern-tutorial/

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Proxy\ATMProxy\ATMProxy;

$atm = new ATMProxy();
echo $atm->getState();
echo 'CASH IN MACHINE: ' . $atm->getCashInMachine();

Util::showImage(__FILE__);
Util::showCode(__FILE__);