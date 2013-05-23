<?php

require_once './bootstrap.php';

use Creational\SimpleFactory\Conexion\ConexionFactory;

echo $mysqlConexion = ConexionFactory::create(ConexionFactory::MYSQL, 'localhost', 'root', '', 'test');
echo '<br />';
echo $postgresqlConexion = ConexionFactory::create(ConexionFactory::POSTGRESQL, 'localhost', 'root', '', 'test');