<?php

// Ejemplo tomado de http://desarrolladorsenior.blogspot.com/2009/09/patron-simple-factory-en-php5.html

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Adapter\FileManager\FileManagerAdapter;

$adapter = new FileManagerAdapter();
$adapter->open('archivo.txt');
echo $adapter->read();
$adapter->close();

Util::showImage(__FILE__);
Util::showCode(__FILE__);