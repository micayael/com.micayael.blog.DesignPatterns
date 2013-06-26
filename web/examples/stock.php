<?php

// Ejemplo tomado de http://www.newthinktank.com/2012/08/observer-design-pattern-tutorial/

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\Observer\Stock\StockGrabber;
use Behavioral\Observer\Stock\StockObserver;

$stockGrabber = new StockGrabber();

$stockObserver = new StockObserver($stockGrabber);

$stockGrabber->setIbmPrice(50);
$stockGrabber->setAaplPrice(100);
$stockGrabber->setGooglPrice(150);

Util::showImage(__FILE__);
Util::showCode(__FILE__);