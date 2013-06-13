<?php

// Ejemplo tomado de http://www.blackwasp.co.uk/State_2.aspx

require_once __DIR__ . '/../bootstrap.php';

use Util\Util;
use Behavioral\State\AudioPlayer\AudioPlayer;

$audioPlayer = new AudioPlayer();

echo PHP_EOL . $audioPlayer->getState() . PHP_EOL;

$audioPlayer->pressPlayButton();
$audioPlayer->pressSourceButton();

echo PHP_EOL. $audioPlayer->getState() . PHP_EOL;

$audioPlayer->pressPlayButton();
$audioPlayer->pressPlayButton();
$audioPlayer->pressSourceButton();

echo PHP_EOL . $audioPlayer->getState() . PHP_EOL;

$audioPlayer->pressPlayButton();
$audioPlayer->pressPlayButton();
$audioPlayer->pressSourceButton();

echo PHP_EOL . $audioPlayer->getState() . PHP_EOL;


Util::showImage(__FILE__);
Util::showCode(__FILE__);