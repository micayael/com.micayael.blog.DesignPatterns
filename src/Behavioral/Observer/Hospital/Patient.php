<?php

namespace Behavioral\Observer\Hospital;

/**
 * Description of Patient
 *
 * @author jardissone
 */
class Patient extends BaseSubject
{

    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function emergency()
    {
        $this->notifyObservers();
    }

    public function notifyObserver(ObserverInterface $observer)
    {
        $event = new MessageEvent(__CLASS__ . ' object: ' . $this->getName());
        $observer->onMessage($event);
    }

}

?>
