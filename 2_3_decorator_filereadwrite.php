<?php

// Ejemplo tomado de http://www.baluart.net/articulo/introduccion-a-los-patrones-de-diseno-con-php

require_once './bootstrap.php';

use Structural\Decorator\FileReadWrite\FileStream;
use Structural\Decorator\FileReadWrite\CompressedFileStreamDecorator;
use Structural\Decorator\FileReadWrite\EncryptedFileStreamDecorator;

//-- Creamos el componente
$file1 = new FileStream();
echo $file1->read();
echo $file1->write();
echo PHP_EOL;

$file2 = new CompressedFileStreamDecorator($file1);
echo $file2->read();
echo $file2->write();
echo PHP_EOL;

$file3 = new EncryptedFileStreamDecorator($file1);
echo $file3->read();
echo $file3->write();
echo PHP_EOL;

$file4 = new CompressedFileStreamDecorator($file1);
$file4 = new EncryptedFileStreamDecorator($file4);
echo $file4->read();
echo $file4->write();