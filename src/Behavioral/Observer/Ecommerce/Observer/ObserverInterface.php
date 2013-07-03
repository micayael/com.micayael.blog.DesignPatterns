<?php

namespace Behavioral\Observer\Ecommerce\Observer;

/**
 *
 * @author jardissone
 */
interface ObserverInterface
{

    public function onMessage(EventInterface $event);

}

?>
