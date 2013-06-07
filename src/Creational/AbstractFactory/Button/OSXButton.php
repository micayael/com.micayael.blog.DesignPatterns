<?php

namespace Creational\AbstractFactory\Button;

/**
 * Description of WinButton
 *
 * @author jardissone
 */
class OSXButton implements ButtonInterface
{

    public function paint()
    {
        echo 'I am a OSXButton';
    }

}

?>
