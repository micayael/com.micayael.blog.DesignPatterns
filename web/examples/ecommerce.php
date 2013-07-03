<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\Observer\Ecommerce\Entity\Pedido;
use Behavioral\Observer\Ecommerce\Entity\Venta;

//-- Limpio el archivo de log
$logfile = '/tmp/historial.log';
$fp = fopen($logfile,"w");
fwrite($fp, 'FECHA;USUARIO;ESTADO;DESCRIPCION' . PHP_EOL);
fclose($fp);

//-- Se crea el pedido
$pedido = new Pedido();
$pedido->setId(1);
$pedido->setNumero(1);
$pedido->setMonto(1000);
$pedido->setUsuarioAuditoria('jsmith');
$pedido->save();

//-- Cambio de estados del pedido
echo $pedido->getEstado() . PHP_EOL;
$pedido->solicitarPedido();
echo $pedido->getEstado() . PHP_EOL;
$pedido->aprobarPedido();
echo $pedido->getEstado() . PHP_EOL;

echo PHP_EOL;
sleep(1);

//-- Se crea la venta
$venta = new Venta();
$venta->setId(1);
$pedido->setUsuarioAuditoria('jdoe');
$venta->save();

//-- Cambio de estados de la venta
echo $venta->getEstado() . PHP_EOL;
$venta->enviarVenta();
echo $venta->getEstado() . PHP_EOL;
$venta->recepcionarVenta();
echo $venta->getEstado() . PHP_EOL;

echo PHP_EOL;

//-- Resultado del log 
Util::csvToTable($logfile);

Util::showImage(__FILE__);
Util::showCode(__FILE__);