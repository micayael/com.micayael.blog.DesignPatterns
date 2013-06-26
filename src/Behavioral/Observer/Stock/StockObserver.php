<?php

namespace Behavioral\Observer\Stock;

/**
 * Description of StockObserver
 *
 * @author jardissone
 */
class StockObserver implements ObserverInterface
{

    const OBSERVER_ID_TRACKER = 0;

    private $ibmPrice;
    private $aaplPrice;
    private $googlPrice;
    private $observerId;
    private $stockGrabber;

    public function __construct(StockGrabber $stockGrabber)
    {
        $this->stockGrabber = $stockGrabber;

        $this->observerId = self::OBSERVER_ID_TRACKER + 1;

        $this->stockGrabber->register($this);
    }

    public function update($ibmPrice, $aaplPrice, $googPrice)
    {
        $this->ibmPrice = $ibmPrice;
        $this->aaplPrice = $aaplPrice;
        $this->googlPrice = $googPrice;

        echo sprintf('ID: [%s], IBM: [%s], AAPL: [%s], GOOGL: [%s]', 
                $this->observerId, $this->ibmPrice, $this->aaplPrice, $this->googlPrice) . PHP_EOL;
    }

}

?>
