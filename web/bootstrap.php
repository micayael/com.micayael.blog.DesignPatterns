<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();

$loader->registerNamespaces(array(
    'Creational' => __DIR__ . '/../src/',
    'Structural' => __DIR__ . '/../src/',
    'Util' => __DIR__ . '/../src/'
));

$loader->register();

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../views');
$twig = new Twig_Environment($loader, array());