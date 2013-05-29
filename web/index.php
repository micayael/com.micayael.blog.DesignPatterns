<?php

require_once __DIR__ . '/bootstrap.php';

define('BASE_URL', '/DesignPatterns/web/examples/');
define('IMAGES_BASE', __DIR__ . '/images/');

require '_categories.php';
require '_creational.php';
require '_structural.php';
require '_behavioral.php';
require '_merge.php';

echo $twig->render('index.html.twig', array('menu' => $menu));