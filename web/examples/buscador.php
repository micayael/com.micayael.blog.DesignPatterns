<?php

// Ejemplo tomado de http://javapostsforlearning.blogspot.com/2012/09/bridge-design-pattern-in-java.html

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Bridge\Buscador\BuscadorClientes;
use Structural\Bridge\Buscador\BuscadorUnaColumna;
use Structural\Bridge\Buscador\BuscadorDosColumna;

$clientes1 = new BuscadorClientes(new BuscadorUnaColumna());
$clientes1->render();

echo '<hr />';

$clientes2 = new BuscadorClientes(new BuscadorDosColumna());
$clientes2->render();

Util::showCode(__FILE__);