<?php

namespace Behavioral\Observer\Log;

/**
 *
 * @author jardissone
 */
class LogSubject extends BaseSubject
{

    private $state;

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
        $this->notifyObservers();
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this->state);
        }
    }

}

?>
