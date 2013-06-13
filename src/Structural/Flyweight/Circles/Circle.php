<?php

namespace Structural\Flyweight\Circles;

/**
 * Description of Circle
 *
 * @author jardissone
 */
class Circle implements ShapeInterface
{

    private $_color;
    private $_x;
    private $_y;
    private $_radious;

    public function __construct($color)
    {
        $this->_color = $color;
    }

    public function setX($x)
    {
        $this->_x = $x;
    }

    public function setY($y)
    {
        $this->_y = $y;
    }

    public function setRadious($radious)
    {
        $this->_radious = $radious;
    }

    public function draw()
    {
        $pattern = 'Circle: Draw() [Color : %s, x : %s, y :%s, radius : %s' . PHP_EOL;

        echo sprintf($pattern, $this->_color, $this->_x, $this->_y, $this->_radious);
    }

}

?>
