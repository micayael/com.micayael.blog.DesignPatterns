<?php

namespace Behavioral\State\AudioPlayer\State;

/**
 * Description of StandbyState
 *
 * @author jardissone
 */
class StandbyState implements AudioPlayerStateInterface
{

    public function pressPlayButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressPlayButton: Audio Player is in standby: no effect' . PHP_EOL;
    }

    public function pressSourceButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressSourceButton: Changing to MP3' . PHP_EOL;
        $audioPlayer->setState(new MP3PlayingState());
    }

    public function __toString()
    {
        return 'Current State: StandbyState' . PHP_EOL;
    }

}

?>
