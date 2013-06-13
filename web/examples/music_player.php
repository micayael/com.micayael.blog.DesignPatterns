<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\State\MusicPlayer\MusicPlayer;
use Behavioral\State\MusicPlayer\PlayState;
use Behavioral\State\MusicPlayer\StopState;
use Behavioral\State\MusicPlayer\PauseState;

$audioPlayer = new MusicPlayer();

echo $audioPlayer->getState();

$playState = new PlayState();
$playState->doAction($audioPlayer);
echo $audioPlayer->getState();

$pauseState = new PauseState();
$pauseState->doAction($audioPlayer);
echo $audioPlayer->getState();

$stopState = new StopState();
$stopState->doAction($audioPlayer);
echo $audioPlayer->getState();

Util::showImage(__FILE__);
Util::showCode(__FILE__);