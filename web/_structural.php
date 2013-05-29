<?php

/* * *****************************************************************************
 * EXAMPLES: Adapter
 * ***************************************************************************** */

$menu['structural']['patterns']['adapter']['examples'] = array(
    array(
        'name' => 'FileManager',
        'url' => BASE_URL . 'filemanager.php',
        'description' => 'Con este ejemplo se utiliza un Adapter extendiendo la clase a la cual quiere adaptar. '
    ),
    array(
        'name' => 'Auto',
        'url' => BASE_URL . 'auto.php',
        'description' => 'Con este ejemplo, el Adapter no extiende de la clase a la que quiere adaptar sino que tiene una propiedad de este tipo. Esta me parece mejor ya que si se extiende como el ejemplo anterior, los métodos de la clase a adaptar (clase padre) figuran como métodos de la propia clase Adapter por la herencia. '
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Bridge
 * ***************************************************************************** */

$menu['structural']['patterns']['bridge']['examples'] = array(
    array(
        'name' => 'Colores',
        'url' => BASE_URL . 'colores.php',
        'description' => 'Este ejemplo aunque poco práctico por tener dos clases que representen colores permite mostrar como funciona el patrón. Y el artículo muestra como cambiar una escen a otra utilizando el patrón. '
    ),
    array(
        'name' => 'DrawingAPI',
        'url' => BASE_URL . 'drawingapi.php',
        'description' => ''
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Decorator
 * ***************************************************************************** */

$menu['structural']['patterns']['decorator']['examples'] = array(
    array(
        'name' => 'LogoutLink',
        'url' => BASE_URL . 'logoutlink.php',
        'description' => 'Es ejemplo es bastante claro y muestra bien como decorar un Component con uno o varios Decorators '
    ),
    array(
        'name' => 'File Read Write',
        'url' => BASE_URL . 'file_read_write.php',
        'description' => ''
    ),
);