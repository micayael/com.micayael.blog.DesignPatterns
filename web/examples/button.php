<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Creational\AbstractFactory\Button\Application;
use Creational\AbstractFactory\Button\WinFactory;
use Creational\AbstractFactory\Button\OSXFactory;

$app = new Application(new WinFactory);
echo PHP_EOL;
$app = new Application(new OSXFactory);

Util::showImage(__FILE__);
Util::showCode(__FILE__);