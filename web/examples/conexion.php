<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Creational\SimpleFactory\Conexion\ConexionFactory;

echo $mysqlConexion = ConexionFactory::create(ConexionFactory::MYSQL, 'localhost', 'root', '', 'test');
echo '<br />';
echo $postgresqlConexion = ConexionFactory::create(ConexionFactory::POSTGRESQL, 'localhost', 'root', '', 'test');

Util::showCode(__FILE__);