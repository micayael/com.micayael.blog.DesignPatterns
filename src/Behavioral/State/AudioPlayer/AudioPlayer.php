<?php

namespace Behavioral\State\AudioPlayer;

/**
 * Description of AudioPlayer
 *
 * @author jardissone
 */
class AudioPlayer
{

    private $state;
    
    public function __construct()
    {
        $this->state = new State\StandbyState();
    }
    
    public function getState()
    {
        return $this->state;
    }

    public function setState(State\AudioPlayerStateInterface $state)
    {
        $this->state = $state;
    }

    public function pressPlayButton()
    {
        $this->state->pressPlayButton($this);
    }

    public function pressSourceButton()
    {
        $this->state->pressSourceButton($this);
    }

}

?>
