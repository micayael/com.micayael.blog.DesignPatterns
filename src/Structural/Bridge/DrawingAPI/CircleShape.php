<?php

namespace Structural\Bridge\DrawingAPI;

/**
 * Description of Shape
 *
 * @author jardissone
 */
class CircleShape extends AbstractShape
{

    private $dX;
    private $dY;
    private $dRadius;

    public function __construct(
    $dX, $dY, $dRadius, DrawingAPIInterface $oDrawingAPI
    )
    {
        parent::__construct($oDrawingAPI);
        $this->dX = $dX;
        $this->dY = $dY;
        $this->dRadius = $dRadius;
    }

    public function draw()
    {
        $this->oDrawingAPI->drawCircle(
                $this->dX, $this->dY, $this->dRadius
        );
    }

    public function resizeByPercentage($dPct)
    {
        $this->dRadius *= $dPct;
    }

}

?>
