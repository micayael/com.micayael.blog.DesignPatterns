<?php

// Ejemplo tomado de http://javapostsforlearning.blogspot.com/2012/09/bridge-design-pattern-in-java.html

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Bridge\Colores\Rectangle;
use Structural\Bridge\Colores\Circle;
use Structural\Bridge\Colores\BlueColor;
use Structural\Bridge\Colores\RedColor;

$rectangle1 = new Rectangle(new BlueColor());
$rectangle1->colorIt();

$rectangle2 = new Rectangle(new RedColor());
$rectangle2->colorIt();

$circle1 = new Circle(new BlueColor());
$circle1->colorIt();

$circle2 = new Circle(new RedColor());
$circle2->colorIt();

Util::showCode(__FILE__);