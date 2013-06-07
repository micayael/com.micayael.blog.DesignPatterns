<?php

namespace Creational\AbstractFactory\Button;

/**
 * Description of WinButton
 *
 * @author jardissone
 */
class WinButton implements ButtonInterface
{

    public function paint()
    {
        echo 'I am a WinButton';
    }

}

?>
