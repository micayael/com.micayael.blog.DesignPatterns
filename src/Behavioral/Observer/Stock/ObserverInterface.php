<?php

namespace Behavioral\Observer\Stock;

/**
 *
 * @author jardissone
 */
interface ObserverInterface
{

    public function update($ibmPrice, $aaplPrice, $googPrice);

}

?>
