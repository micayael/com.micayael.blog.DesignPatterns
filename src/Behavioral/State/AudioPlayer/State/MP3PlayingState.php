<?php

namespace Behavioral\State\AudioPlayer\State;

/**
 * Description of StandbyState
 *
 * @author jardissone
 */
class MP3PlayingState implements AudioPlayerStateInterface
{

    public function pressPlayButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressPlayButton: Pausing' . PHP_EOL;
        $audioPlayer->setState(new MP3PausedState());
    }

    public function pressSourceButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressSourceButton: Changing to Radio' . PHP_EOL;
        $audioPlayer->setState(new RadioState());
    }

    public function __toString()
    {
        return 'Current State: MP3PlayingState' . PHP_EOL;
    }

}

?>
