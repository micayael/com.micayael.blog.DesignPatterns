<?php

namespace Behavioral\State\MusicPlayer;

/**
 * Description of PlayState
 *
 * @author jardissone
 */
class PlayState implements StateInterface
{

    public function __toString()
    {
        return 'Current state: Playing' . PHP_EOL;
    }

    public function doAction(MusicPlayer $context)
    {
        echo 'doAction - Playing' . PHP_EOL;
        $context->setState($this);
    }

}

?>
