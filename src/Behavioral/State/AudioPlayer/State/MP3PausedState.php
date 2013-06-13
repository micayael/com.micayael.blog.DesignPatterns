<?php

namespace Behavioral\State\AudioPlayer\State;

/**
 * Description of StandbyState
 *
 * @author jardissone
 */
class MP3PausedState implements AudioPlayerStateInterface
{

    public function pressPlayButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressPlayButton: Playing' . PHP_EOL;
        $audioPlayer->setState(new MP3PlayingState());
    }

    public function pressSourceButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressSourceButton: Changing to Radio' . PHP_EOL;
        $audioPlayer->setState(new RadioState());
    }

    public function __toString()
    {
        return 'Current State: MP3PausedState' . PHP_EOL;
    }

}

?>
