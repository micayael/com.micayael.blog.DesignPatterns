<?php

namespace Behavioral\State\MusicPlayer;

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

}

?>
