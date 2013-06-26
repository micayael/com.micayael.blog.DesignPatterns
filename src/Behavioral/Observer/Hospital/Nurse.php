<?php

namespace Behavioral\Observer\Hospital;

/**
 * Description of Doctor
 *
 * @author jardissone
 */
class Nurse implements ObserverInterface
{

    private $name;

    public function onMessage(EventInterface $event)
    {
        echo $event->getMsg() . ' notify to ' . __CLASS__ . ' object: ' . $this->getName() . ' an emergency' . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

}

?>
