<?php

require_once __DIR__.'/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();

$loader->registerNamespaces(array(
    'Creational' => __DIR__ . '/src/',
    'Structural' => __DIR__ . '/src/',
));

$loader->register();