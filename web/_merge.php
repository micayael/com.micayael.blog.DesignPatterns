<?php

/* * *****************************************************************************
 * EXTRA EXAMPLES: Builder + Simple Factory
 * ***************************************************************************** */

$builder_simplefactory = array(
    array(
        'name' => 'Formulario + Form Element (Builder + Simple Factory)',
        'url' => BASE_URL . 'formulario.php',
        'description' => ''
    ),
);

foreach($builder_simplefactory as $example)
{
    $menu['creational']['patterns']['simple-factory']['examples'][] = $example;
    $menu['creational']['patterns']['builder']['examples'][] = $example;
}

/* * *****************************************************************************
 * EXTRA EXAMPLES: Bridge + Simple Factory
 * ***************************************************************************** */

$bridge_simplefactory = array(
    array(
        'name' => 'Buscador + Form Element (Bridge + Simple Factory)',
        'url' => BASE_URL . 'buscador.php',
        'description' => 'Con este ejemplo se puede ver que se dividen en dos la lógica del buscador (abstracción) haciendo que cada buscador sepa cuales son sus filtros y la implementación que especifica en cuantas columnas se mostrarán los filtros'
    ),
);

foreach($bridge_simplefactory as $example)
{
    $menu['creational']['patterns']['simple-factory']['examples'][] = $example;
    $menu['structural']['patterns']['bridge']['examples'][] = $example;
}

/* * *****************************************************************************
 * EXTRA EXAMPLES: Decorator + Simple Factory
 * ***************************************************************************** */

$decorator_simplefactory = array(
    array(
        'name' => 'Logger (Decorator + Simple Factory)',
        'url' => BASE_URL . 'logger.php',
        'description' => 'Con este ejemplo se puede ver que se dividen en dos la lógica del buscador (abstracción) haciendo que cada buscador sepa cuales son sus filtros y la implementación que especifica en cuantas columnas se mostrarán los filtros'
    ),
);

foreach($decorator_simplefactory as $example)
{
    $menu['creational']['patterns']['simple-factory']['examples'][] = $example;
    $menu['structural']['patterns']['decorator']['examples'][] = $example;
}