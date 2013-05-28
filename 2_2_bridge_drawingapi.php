<?php

// Ejemplo tomado de http://javapostsforlearning.blogspot.com/2012/09/bridge-design-pattern-in-java.html

require_once './bootstrap.php';

use Structural\Bridge\DrawingAPI\CircleShape;
use Structural\Bridge\DrawingAPI\DrawingAPI1;
use Structural\Bridge\DrawingAPI\DrawingAPI2;

$aShapes = array(
    new CircleShape(1, 3, 7, new DrawingAPI1()),
    new CircleShape(5, 7, 11, new DrawingAPI2()),
);

foreach($aShapes as $shapes)
{
    $shapes->resizeByPercentage(2.5);
    $shapes->draw();
}