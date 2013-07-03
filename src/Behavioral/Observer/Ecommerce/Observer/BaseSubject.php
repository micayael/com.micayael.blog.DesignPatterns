<?php

namespace Behavioral\Observer\Ecommerce\Observer;

/**
 * Description of Subject
 *
 * @author jardissone
 */
abstract class BaseSubject
{

    protected $observers;

    abstract public function notifyObserver(ObserverInterface $observer);

    public function __construct()
    {
        $this->observers = array();
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
            $this->notifyObserver($observer);
        }
    }

    public function getObservers()
    {
        print_r($this->observers);
    }

}

?>
