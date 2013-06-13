<?php

// Ejemplo tomado de http://www.tutorialspoint.com/design_pattern/flyweight_pattern.htm

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Structural\Flyweight\Circles\ShapeFactory;

$colors = array('red', 'green', 'blue', 'white', 'black');

for($i = 0; $i < 20; $i++)
{
    $circle = ShapeFactory::createCircle($colors[rand(0, 4)]);
    $circle->setX(rand(1, 100));
    $circle->setY(rand(1, 100));
    $circle->setRadious(100);
    $circle->draw();
}

Util::showImage(__FILE__);
Util::showCode(__FILE__);