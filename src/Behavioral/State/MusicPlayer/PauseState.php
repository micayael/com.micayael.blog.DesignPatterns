<?php

namespace Behavioral\State\MusicPlayer;

/**
 * Description of PlayState
 *
 * @author jardissone
 */
class PauseState implements StateInterface
{

    public function __toString()
    {
        return 'Current state: Pause' . PHP_EOL;
    }

    public function doAction(MusicPlayer $context)
    {
        echo 'doAction - Pausing' . PHP_EOL;
        $context->setState($this);
    }

}

?>
