<?php

namespace Structural\Bridge\Colores;

/**
 * Description of Rectangule
 *
 * @author jardissone
 */
class Rectangle extends AbstractShape
{

    public function colorIt()
    {
        echo 'Rectangle filled with ';
        $this->color->fillColor();
    }
}

?>
