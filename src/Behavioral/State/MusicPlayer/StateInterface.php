<?php

namespace Behavioral\State\MusicPlayer;

/**
 *
 * @author jardissone
 */
interface StateInterface
{

    public function doAction(MusicPlayer $context);

}

?>
