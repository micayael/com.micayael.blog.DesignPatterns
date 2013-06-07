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
        'name' => 'Users',
        'url' => BASE_URL . 'user.php',
        'description' => 'La diferencia con los ejemplos de Conexion y Form Element es que en este caso el Factory implementa una interfaz FactoryInterface. Quizá esto tenga más sentido hacerlo para un Factory Method pero los frameworks suelen manejar estas interfaces para la inyección de dependencias.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Factory Method
 * ***************************************************************************** */

$menu['creational']['patterns']['factory-method']['examples'] = array(
    array(
        'name' => 'Form Element',
        'url' => BASE_URL . 'form_element.php',
        'description' => 'A diferencia del patrón SimpleFactory, este delega a las subclases la creación de la instancia. Se puede utilizar para tener familias de Factories pero que finalmente dependen de la misma familia de productos.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Abstract Factory
 * ***************************************************************************** */

$menu['creational']['patterns']['abstract-factory']['examples'] = array(
    array(
        'name' => 'Button',
        'url' => BASE_URL . 'button.php',
        'description' => ''
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Builder
 * ***************************************************************************** */

$menu['creational']['patterns']['builder']['examples'] = array(
    array(
        'name' => 'Pizzería',
        'url' => BASE_URL . 'pizzeria.php',
        'description' => 'En este ejemplo se tiene un Director (Pizzeria) quien se encarga de invocar al ConstructorConcreto (CuatroQuesosBuilder, CatupiriConPolloBuilder) para obtener el Producto requerido (Pizza).'
    ),
);