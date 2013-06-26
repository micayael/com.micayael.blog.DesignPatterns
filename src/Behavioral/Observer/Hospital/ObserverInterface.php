<?php

namespace Behavioral\Observer\Hospital;

/**
 *
 * @author jardissone
 */
interface ObserverInterface
{

    public function onMessage(EventInterface $event);

}

?>
