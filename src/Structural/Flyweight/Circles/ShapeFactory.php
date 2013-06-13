<?php

namespace Structural\Flyweight\Circles;

/**
 * Description of ShapeFactory
 *
 * @author jardissone
 */
class ShapeFactory
{

    private static $_circles = array();
    
    public static function createCircle($color)
    {
        $circle = isset(self::$_circles[$color]) ? self::$_circles[$color] : null;
        
        if($circle == null)
        {
            $circle = new Circle($color);
            self::$_circles[$color] = $circle;
            echo 'Se ha creado el circulo con color ' . $color . PHP_EOL;
        }
        
        return $circle;
    }

}

?>
