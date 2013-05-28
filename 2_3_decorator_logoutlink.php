<?php

// Ejemplo tomado de http://www.baluart.net/articulo/introduccion-a-los-patrones-de-diseno-con-php

require_once './bootstrap.php';

use Structural\Decorator\LogoutLink\LogoutLink;
use Structural\Decorator\LogoutLink\LogoutLinkH2Decorator;
use Structural\Decorator\LogoutLink\LogoutLinkStrongDecorator;

//-- Creamos el componente
$logout_link = new LogoutLink('link de prueba', 'http://www.google.com');
echo $logout_link->getHTML() . PHP_EOL;

//-- Decoramos el componente
$logout_link_decorado = new LogoutLinkH2Decorator($logout_link);
echo $logout_link_decorado->getHTML() . PHP_EOL;

//-- Decoramos el componente
$logout_link_decorado2 = new LogoutLinkStrongDecorator($logout_link);
echo $logout_link_decorado2->getHTML() . PHP_EOL;

//-- Podemos decorar con más de un decorator el mismo componente
$logout_link_decorado3 = new LogoutLinkH2Decorator($logout_link);
$logout_link_decorado3 = new LogoutLinkStrongDecorator($logout_link_decorado3);
echo $logout_link_decorado3->getHTML() . PHP_EOL;