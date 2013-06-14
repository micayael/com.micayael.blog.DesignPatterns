<?php

// Ejemplo tomado de http://www.newthinktank.com/2012/10/state-design-pattern-tutorial/

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\State\ATM\ATMMachine;

$atm = new ATMMachine();
echo $atm->getState();

echo 'ERRORES' . PHP_EOL . PHP_EOL;

$atm->insertCard();
echo $atm->getState();

$atm->insertCard();
echo $atm->getState();

$atm->ejectCard();
echo $atm->getState();

$atm->insertCard();
echo $atm->getState();

$atm->requestCash(100);
echo $atm->getState();

$atm->insertPin(111);
echo $atm->getState();

echo 'PIN CORRECTO Y RETIRO DE DINERO' . PHP_EOL . PHP_EOL;

$atm->insertCard();
echo $atm->getState();

$atm->insertPin(1234);
echo $atm->getState();

$atm->requestCash(100);
echo $atm->getState();

echo 'SIN FONDOS DISPONIBLES' . PHP_EOL . PHP_EOL;

$atm->insertCard();
echo $atm->getState();

$atm->insertPin(1234);
echo $atm->getState();

$atm->requestCash(10000);
echo $atm->getState();

$atm->requestCash(1900);
echo $atm->getState();

echo 'CAJERO SIN DINERO' . PHP_EOL . PHP_EOL;

$atm->insertCard();
echo $atm->getState();

Util::showImage(__FILE__);
Util::showCode(__FILE__);