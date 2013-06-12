<?php

// Ejemplo tomado de http://www.oodesign.com/proxy-pattern.html

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Proxy\Cache\RealSubject;
use Structural\Proxy\Cache\Proxy;

// Sin usar el proxy
$realSubject = new RealSubject();
echo $realSubject->performAction();
echo $realSubject->performAction();
echo $realSubject->performAction();

// Usando el proxy
$proxy = new Proxy();
echo $proxy->performAction();
echo $proxy->performAction();
echo $proxy->performAction();

Util::showImage(__FILE__);
Util::showCode(__FILE__);