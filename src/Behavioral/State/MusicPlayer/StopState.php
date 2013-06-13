<?php

namespace Behavioral\State\MusicPlayer;

/**
 * Description of PlayState
 *
 * @author jardissone
 */
class StopState implements StateInterface
{

    public function __toString()
    {
        return 'Current state: Stop' . PHP_EOL;
    }

    public function doAction(MusicPlayer $context)
    {
        echo 'doAction - Stopping' . PHP_EOL;
        $context->setState($this);
    }

}

?>
