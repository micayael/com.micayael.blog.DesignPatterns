<?php

require_once './bootstrap.php';

use Creational\Builder\Pizzeria\Pizzeria;
use Creational\Builder\Pizzeria\CaturipiConPolloBuilder;
use Creational\Builder\Pizzeria\CuatroQuesosBuilder;

$cocina = new Pizzeria();

$cocina->setPizzaBuilder(new CaturipiConPolloBuilder());
$cocina->prepararPizza();
$pizza = $cocina->getPizza();

echo 'pizza: ' . $pizza;


$cocina->setPizzaBuilder(new CuatroQuesosBuilder());
$cocina->prepararPizza();
$pizza = $cocina->getPizza();

echo 'pizza: ' . $pizza;