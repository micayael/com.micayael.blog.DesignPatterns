<?php

// Ejemplo tomado de http://www.youtube.com/watch?v=rWvXJo3OAzs

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\Observer\PostOffice\MailBox;
use Behavioral\Observer\PostOffice\PostOffice;

$office = new PostOffice('info@micayael.com');
$office->addObserver(new MailBox());
$office->newMail();
$office->newMail();
$office->newMail();
$office->newMail();

Util::showImage(__FILE__);
Util::showCode(__FILE__);