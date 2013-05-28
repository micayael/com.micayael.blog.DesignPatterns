<?php

// Ejemplo tomado de http://www.baluart.net/articulo/introduccion-a-los-patrones-de-diseno-con-php

require_once './bootstrap.php';

use Structural\Decorator\LogoutLink\LogoutLink;
use Structural\Decorator\LogoutLink\LogoutLinkH2Decorator;
use Structural\Decorator\LogoutLink\LogoutLinkStrongDecorator;

$logout_link = new LogoutLink('link de prueba', 'http://www.google.com');

echo $logout_link->getHTML() . PHP_EOL;

$logout_link_decorado = new LogoutLinkH2Decorator($logout_link);

echo $logout_link_decorado->getHTML() . PHP_EOL;

$logout_link_decorado2 = new LogoutLinkStrongDecorator($logout_link);

echo $logout_link_decorado2->getHTML() . PHP_EOL;