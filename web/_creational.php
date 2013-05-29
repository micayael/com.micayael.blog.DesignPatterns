<?php

/* * *****************************************************************************
 * EXAMPLES: Simple Factory
 * ***************************************************************************** */

$menu['creational']['patterns']['simple-factory']['examples'] = array(
    array(
        'name' => 'Conexión',
        'url' => BASE_URL . 'conexion.php',
        'description' => 'Existen varias clases que manejan la conexión a base de datos, todas heredan de una clase abstractas para estandarizar y el Factory devuelve la instancia solicitada.'
    ),
    array(
        'name' => 'Form Element',
        'url' => BASE_URL . 'form_element.php',
        'description' => 'Existen varios componentes de formularios que son devueltos por un factory. Muy parecido al ejemplo de Conexión.'
    ),
    array(
        'name' => 'Users',
        'url' => BASE_URL . 'user.php',
        'description' => 'La diferencia con los ejemplos de Conexion y Form Element es que en este caso el Factory implementa una interfaz FactoryInterface. Quizá esto tenga más sentido hacerlo para un Factory Method pero los frameworks suelen manejar estas interfaces para la inyección de dependencias.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Builder
 * ***************************************************************************** */

$menu['creational']['patterns']['builder']['examples'] = array(
    array(
        'name' => 'Pizzería',
        'url' => BASE_URL . 'pizzeria.php',
        'description' => ''
    ),
);