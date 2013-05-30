<?php

namespace Structural\Bridge\DrawingAPI;

/**
 * Description of Shape
 *
 * @author jardissone
 */
abstract class AbstractShape
{

    protected $oDrawingAPI;

    public abstract function draw();

    public abstract function resizeByPercentage($dPct);

    protected function __construct(DrawingAPIInterface $oDrawingAPI)
    {
        $this->oDrawingAPI = $oDrawingAPI;
    }

}

?>
