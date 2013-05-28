<?php

namespace Structural\Bridge\DrawingAPI;

/**
 * Description of DrawingAPI1
 *
 * @author jardissone
 */
class DrawingAPI2 implements DrawingAPIInterface
{

    public function drawCircle($dX, $dY, $dRadius)
    {
        echo "API2.circle at " . $dX . ":" . $dY . " radius " . $dRadius . "<br/>";
    }

}

?>
