<?php

/* * *****************************************************************************
 * EXTRA EXAMPLES: Builder + Factory Method
 * ***************************************************************************** */

$builder_factorymethod = array(
    array(
        'name' => 'Formulario + Form Element (Builder + Factory Method)',
        'url' => BASE_URL . 'formulario.php',
        'description' => 'Este ejemplo incluye los patrones Builder y Factory Method, ambos creacionales. Por le lado del factory se reutiliza el mismo ejempo Form Element y por el lado de builder, el FormDirector se encarga de crear el formulario de acuerdo a builder que recibe.'
    ),
);

foreach($builder_factorymethod as $example)
{
    $menu['creational']['patterns']['factory-method']['examples'][] = $example;
    $menu['creational']['patterns']['builder']['examples'][] = $example;
}

/* * *****************************************************************************
 * EXTRA EXAMPLES: Bridge + Factory Method
 * ***************************************************************************** */

$bridge_factorymethod = array(
    array(
        'name' => 'Buscador + Form Element (Bridge + Factory Method)',
        'url' => BASE_URL . 'buscador.php',
        'description' => 'Con este ejemplo se puede ver que se dividen en dos la lógica del buscador (abstracción) haciendo que cada buscador sepa cuales son sus filtros y la implementación que especifica en cuantas columnas se mostrarán los filtros.'
    ),
);

foreach($bridge_factorymethod as $example)
{
    $menu['creational']['patterns']['factory-method']['examples'][] = $example;
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

/* * *****************************************************************************
 * EXTRA EXAMPLES: State + Proxy
 * ***************************************************************************** */

$state_proxy = array(
    array(
        'name' => 'ATM Proxy (State + Proxy)',
        'url' => BASE_URL . 'atm_proxy.php',
        'description' => 'En este ejemplo vemos como se pueden unir los patrones State (de comportamiento) y el Proxy (de estructura) para usar el proxy como una clase que encapsula solo las funcionalidades a las que un cliente podría acceder por seguridad.'
    ),
);

foreach($state_proxy as $example)
{
    $menu['behavioral']['patterns']['state']['examples'][] = $example;
    $menu['structural']['patterns']['proxy']['examples'][] = $example;
}

/* * *****************************************************************************
 * EXTRA EXAMPLES: Observer + State
 * ***************************************************************************** */

$state_proxy = array(
    array(
        'name' => 'Ecommerce (Observer + State)',
        'url' => BASE_URL . 'ecommerce.php',
        'description' => 'Este ejemplo muestra como van cambiando los estados del pedido y venta de un sitio ecommerce como así también el registro de un historial de cambio de estados mediante un observer.'
    ),
);

foreach($state_proxy as $example)
{
    $menu['behavioral']['patterns']['state']['examples'][] = $example;
    $menu['structural']['patterns']['observer']['examples'][] = $example;
}