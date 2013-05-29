<?php

// Ejemplo tomado de http://desarrolladorsenior.blogspot.com/2009/09/patron-simple-factory-en-php5.html

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Adapter\Auto\MotorEconomico;
use Structural\Adapter\Auto\MotorCostoso;
use Structural\Adapter\Auto\MotorElectricoAdapter;

$motorEconomico = new MotorEconomico();
$motorCostoso = new MotorCostoso();
$motorElectrico = new MotorElectricoAdapter();

$motorEconomico->encender();
$motorEconomico->acelerar();
$motorEconomico->apagar();

echo '<hr />';

$motorCostoso->encender();
$motorCostoso->acelerar();
$motorCostoso->apagar();

echo '<hr />';

$motorElectrico->encender();
$motorElectrico->acelerar();
$motorElectrico->apagar();

Util::showCode(__FILE__);