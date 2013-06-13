<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\State\MusicPlayer\MusicPlayer;
use Behavioral\State\MusicPlayer\PlayState;
use Behavioral\State\MusicPlayer\StopState;
use Behavioral\State\MusicPlayer\PauseState;

$musicPlayer = new MusicPlayer();

echo $musicPlayer->getState();

$playState = new PlayState();
$playState->doAction($musicPlayer);
echo $musicPlayer->getState();

$pauseState = new PauseState();
$pauseState->doAction($musicPlayer);
echo $musicPlayer->getState();

$stopState = new StopState();
$stopState->doAction($musicPlayer);
echo $musicPlayer->getState();

Util::showImage(__FILE__);
Util::showCode(__FILE__);