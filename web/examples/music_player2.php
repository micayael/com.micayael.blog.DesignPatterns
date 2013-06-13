<?php

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\State\MusicPlayer2\MusicPlayer;

$audioPlayer = new MusicPlayer();

echo $audioPlayer->getState();

$audioPlayer->play();
echo $audioPlayer->getState();

$audioPlayer->pause();
echo $audioPlayer->getState();

$audioPlayer->stop();
echo $audioPlayer->getState();

Util::showImage(__FILE__);
Util::showCode(__FILE__);