<?php

/* * *****************************************************************************
 * EXAMPLES: Adapter
 * ***************************************************************************** */

$menu['structural']['patterns']['adapter']['examples'] = array(
    array(
        'name' => 'FileManager',
        'url' => BASE_URL . 'filemanager.php',
        'description' => 'Con este ejemplo se utiliza un Class Adapter extendiendo la clase a la cual quiere adaptar.'
    ),
    array(
        'name' => 'Auto',
        'url' => BASE_URL . 'auto.php',
        'description' => 'Con este ejemplo, el Adapter (Object Adapter) no extiende de la clase a la que quiere adaptar sino que tiene una propiedad de este tipo. Esta me parece mejor ya que si se extiende como el ejemplo anterior, los métodos de la clase a adaptar (clase padre) figuran como métodos de la propia clase Adapter por la herencia. '
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
        'description' => 'Con este ejemplo podemos ver como el Circulo (Abstracción) puede vivir separado de su implementación (DrawingAPI1 y DrawingAPI2) y por medio del cliente se solicita la creación de un circulo con la API1 o API2.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Decorator
 * ***************************************************************************** */

$menu['structural']['patterns']['decorator']['examples'] = array(
    array(
        'name' => 'LogoutLink',
        'url' => BASE_URL . 'logoutlink.php',
        'description' => 'Es ejemplo es bastante claro y muestra bien como decorar un Component con uno o varios Decorators. Aquí se puede ver como cada Decorator tiene una composición de la clase Component (AbstractHtmlLink). Esto también se podría hacer un Decorador Abstracto y heredar a sus hijos.'
    ),
    array(
        'name' => 'File Read Write',
        'url' => BASE_URL . 'file_read_write.php',
        'description' => 'Poder ver en este ejemplo como la funcionalidad básica del lector y escritor de archivos puede tener mayor funcionalidad si lo decoramos con un Decorator. Al igual que el ejemplo anterior los decoradores son dos y no tienen un padre decorador como si se muestra en el ejemplo Logger.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Facade
 * ***************************************************************************** */

$menu['structural']['patterns']['facade']['examples'] = array(
    array(
        'name' => 'BankAccountFacade',
        'url' => BASE_URL . 'bank_account.php',
        'description' => 'Se puede notar en este ejemplo como el cliente accede al Facade utilizando sus métodos públicos, sin saber que se tiene que hacer internamente para lograr los resultados.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Proxy
 * ***************************************************************************** */

$menu['structural']['patterns']['proxy']['examples'] = array(
    array(
        'name' => 'Cache',
        'url' => BASE_URL . 'cache.php',
        'description' => 'En este ejemplo se usa el proxy como un cache. Para no tener que estar ejecutando un proceso pesado siempre.'
    ),
    array(
        'name' => 'ImageViewer',
        'url' => BASE_URL . 'image_viewer.php',
        'description' => 'En este ejemplo se puede notar que si uso el objeto HighResPhoto, por cada imagen hace el loding y termina mostrando solo la que quiero, mientras que si uso el Proxy, por más que haya creado tres imágenes solo se carga la que tenga que ser mostrada al usuario. Esto permite ahorro de performance. Este es un ejemplo de Virtual Proxy: Retrasa la creación e inacialización de objecto pesados hasta que sean necesitados.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Flyweight
 * ***************************************************************************** */

$menu['structural']['patterns']['flyweight']['examples'] = array(
    array(
        'name' => 'Circles',
        'url' => BASE_URL . 'circles.php',
        'description' => 'Con este ejemplo vemos como por medio de un Factory vamos guardando instancias de un mismo objeto para intentar reutilizarlo (Circle) y no tener que instanciarlo cada vez.'
    ),
);