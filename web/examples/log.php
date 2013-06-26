<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\Observer\Log\Observer;
use Behavioral\Observer\Log\Observer2;
use Behavioral\Observer\Log\LogSubject;

$observer1 = new Observer();
$observer2 = new Observer2();
$observer3 = new Observer();

$subject = new LogSubject();
$subject->addObserver($observer1);
$subject->setState('Inactivo');
$subject->setState('Publicado');

$subject2 = new LogSubject();
$subject2->addObserver($observer2);
$subject2->setState('Inactivo');
$subject2->removeObserver($observer2);
$subject2->addObserver($observer3);
$subject2->setState('Publicado');

Util::showImage(__FILE__);
Util::showCode(__FILE__);