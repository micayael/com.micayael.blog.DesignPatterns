<?php

namespace Behavioral\Observer\Stock;

/**
 *
 * @author jardissone
 */
interface SubjectInterface
{

    public function register(ObserverInterface $observer);
    public function unregister(ObserverInterface $observer);
    public function notifyObserver();

}

?>
