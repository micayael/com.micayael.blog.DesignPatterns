<?php

namespace Behavioral\Observer\Log;

/**
 * Description of Observer
 *
 * @author jardissone
 */
class Observer2 implements ObserverInterface
{

    private $state;

    public function update($state)
    {
        $this->setState($state);
        echo __CLASS__ . ' has received update signal with new state: ' . $this->getState() . PHP_EOL;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

}

?>
