<?php

namespace Behavioral\Observer\PostOffice;

/**
 * Description of MailBox
 *
 * @author jardissone
 */
class MailBox implements ObserverInterface
{

    public function update($address)
    {
        echo 'update with address (' . $address . ')...' . PHP_EOL;
    }

}

?>
