<?php

namespace Structural\Bridge\DrawingAPI;

/**
 * Description of DrawingAPI1
 *
 * @author jardissone
 */
class DrawingAPI1 implements DrawingAPIInterface
{

    public function drawCircle($dX, $dY, $dRadius)
    {
        echo "API1.circle at " . $dX . ":" . $dY . " radius " . $dRadius . "<br/>";
    }

}

?>
