<?php

namespace Behavioral\State\MusicPlayer2;

/**
 *
 * @author jardissone
 */
interface StateInterface
{

    public function doAction(MusicPlayer $context);

}

?>
