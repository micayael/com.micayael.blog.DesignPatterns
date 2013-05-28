<?php

namespace Structural\Bridge\Colores;

/**
 * Description of Rectangule
 *
 * @author jardissone
 */
class Circle extends AbstractShape
{

    public function colorIt()
    {
        echo 'Circle filled with ';
        $this->color->fillColor();
    }

}

?>
