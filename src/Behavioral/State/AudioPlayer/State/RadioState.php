<?php

namespace Behavioral\State\AudioPlayer\State;

/**
 * Description of StandbyState
 *
 * @author jardissone
 */
class RadioState implements AudioPlayerStateInterface
{

    public function pressPlayButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressPlayButton: Play pressed: New station Selected' . PHP_EOL;
    }

    public function pressSourceButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer)
    {
        echo 'pressSourceButton: Changing to stand By' . PHP_EOL;
        $audioPlayer->setState(new StandbyState());
    }

    public function __toString()
    {
        return 'Current State: RadioState' . PHP_EOL;
    }

}

?>
