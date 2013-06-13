<?php

namespace Behavioral\State\AudioPlayer\State;

/**
 *
 * @author jardissone
 */
interface AudioPlayerStateInterface
{

    public function pressPlayButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer);

    public function pressSourceButton(\Behavioral\State\AudioPlayer\AudioPlayer $audioPlayer);
    
    public function __toString();

}

?>
