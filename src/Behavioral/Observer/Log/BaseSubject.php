<?php

namespace Behavioral\Observer\Log;

/**
 * Description of Subject
 *
 * @author jardissone
 */
abstract class BaseSubject
{

    protected $observers;
    
    abstract public function notifyObservers();

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
    
    public function getObservers()
    {
        print_r($this->observers);
    }

}

?>
