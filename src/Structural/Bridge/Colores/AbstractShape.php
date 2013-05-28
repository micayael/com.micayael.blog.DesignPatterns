<?php

namespace Structural\Bridge\Colores;

/**
 * Description of Shape
 * Artículo http://javapostsforlearning.blogspot.com/2012/09/bridge-design-pattern-in-java.html
 *
 * @author jardissone
 */
abstract class AbstractShape
{

    protected $color;
    
    public abstract function colorIt();
    
    public function __construct(ColorInterface $color)
    {
        $this->color = $color;
    }

}

?>
