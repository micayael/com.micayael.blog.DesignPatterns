<?php

namespace Behavioral\Observer\PostOffice;

/**
 * Description of PostOffice
 *
 * @author jardissone
 */
class PostOffice implements ObservableInterface
{
    
    private $observers;
    private $address;
    
    public function __construct($address)
    {
        $this->observers = array();
        $this->address = $address;
    }

    public function addObserver(ObserverInterface $observer)
    {
        if(!in_array($observer, $this->observers))
        {
            $this->observers[] = $observer;
        }
    }

    public function removeObserver(ObserverInterface $observer)
    {
        if(in_array($observer, $this->observers))
        {
            $key = array_search($observer, $this->observers);
            unset($this->observers[$key]);
        }
    }
    
    public function notifyObservers()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this->address);
        }
    }
    
    public function newMail()
    {
        $this->notifyObservers();
    }

}

?>
