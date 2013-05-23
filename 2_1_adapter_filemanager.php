<?php

// Ejemplo tomado de http://desarrolladorsenior.blogspot.com/2009/09/patron-simple-factory-en-php5.html

require_once './bootstrap.php';

use Structural\Adapter\FileManager\FileManagerAdapter;

$adapter = new FileManagerAdapter();
$adapter->open('archivo.txt');
echo $adapter->read();
$adapter->close();


