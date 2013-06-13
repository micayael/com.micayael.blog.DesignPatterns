<?php

namespace Behavioral\State\MusicPlayer2;

/**
 * Description of MusicPlayer
 *
 * @author jardissone
 */
class MusicPlayer
{

    private $state;

    public function __construct()
    {
        $this->state = new StopState();
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }
    
    public function play()
    {
        $playState = new PlayState();
        $playState->doAction($this);
    }
    
    public function pause()
    {
        $pauseState = new PauseState();
        $pauseState->doAction($this);
    }
    
    public function stop()
    {
        $stopState = new StopState();
        $stopState->doAction($this);
    }

}

?>
