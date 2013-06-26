<?php

namespace Behavioral\Observer\Stock;

/**
 * Description of StockGrabber
 *
 * @author jardissone
 */
class StockGrabber implements SubjectInterface
{

    private $observers = array();
    private $ibmPrice;
    private $aaplPrice;
    private $googlPrice;

    public function register(ObserverInterface $observer)
    {
        if(!in_array($observer, $this->observers))
        {
            $this->observers[] = $observer;
        }
    }

    public function unregister(ObserverInterface $observer)
    {
        if(in_array($observer, $this->observers))
        {
            $key = array_search($observer, $this->observers);
            unset($this->observers[$key]);
        }
    }

    public function notifyObserver()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this->ibmPrice, $this->aaplPrice, $this->googlPrice);
        }
    }

    public function getIbmPrice()
    {
        return $this->ibmPrice;
    }

    public function setIbmPrice($ibmPrice)
    {
        $this->ibmPrice = $ibmPrice;
        $this->notifyObserver();
    }

    public function setAaplPrice($aaplPrice)
    {
        $this->aaplPrice = $aaplPrice;
        $this->notifyObserver();
    }

    public function setGooglPrice($googlPrice)
    {
        $this->googlPrice = $googlPrice;
        $this->notifyObserver();
    }

}

?>
