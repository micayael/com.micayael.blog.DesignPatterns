<?php

/* * *****************************************************************************
 * EXAMPLES: Template Method
 * ***************************************************************************** */

$menu['behavioral']['patterns']['template-method']['examples'] = array(
    array(
        'name' => 'Parser',
        'url' => BASE_URL . 'parser.php',
        'description' => 'este ejemplo muestra un parseador de extractos bancarios que pueden venir como CSV o XML. El template método es el render() quién invoca a los métodos readData() y processData() definidos en las clases concretas.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Template Method
 * ***************************************************************************** */

$menu['behavioral']['patterns']['strategy']['examples'] = array(
    array(
        'name' => 'Calculator',
        'url' => BASE_URL . 'calculator.php',
        'description' => 'Con este ejemplo se puede ver que se utiliza un algoritmo diferente dependiendo de la necesidad en tiempo de ejecución..'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: State
 * ***************************************************************************** */

$menu['behavioral']['patterns']['state']['examples'] = array(
    array(
        'name' => 'MusicPlayer',
        'url' => BASE_URL . 'music_player.php',
        'description' => 'Con este ejemplo se puede ver que por medio de los distintos estados se ejecutan las acciones de play, pause y stop de un reproductor de musica.'
    ),
    array(
        'name' => 'MusicPlayer2',
        'url' => BASE_URL . 'music_player3.php',
        'description' => 'Este ejemplo es igual al anterior pero con la diferencia que la clase MusicPlayer encapsula el cambio de estados aunque las acciones en sí siguen ejecutandose encapsuladas dentro de cada estado.'
    ),
    array(
        'name' => 'AudioPlayer',
        'url' => BASE_URL . 'audio_player.php',
        'description' => 'Este ejemplo es un poco más complejo que los anteriores ya que es un aparato de audio que puede estar apagado, en modo mp3 y en modo radio (por medio de un boton se cambia entre estos estados) y tiene un boton de play que dependiendo de en que estado se encuentre cambia play mp3, pause mp3 o cambio de emisora.'
    ),
    array(
        'name' => 'ATM Machine',
        'url' => BASE_URL . 'atm_machine.php',
        'description' => 'Este ejemplo es aún más complejo ya que indica 4 estados de un cajero y permite tener una visión de que debería pasar por cada acción en cada estado.'
    ),
);

/* * *****************************************************************************
 * EXAMPLES: Observer
 * ***************************************************************************** */

$menu['behavioral']['patterns']['observer']['examples'] = array(
    array(
        'name' => 'Log',
        'url' => BASE_URL . 'log.php',
        'description' => 'Ejemplo basico por cambios de estado. Cuando se modifica el estado los observers reciben el mensaje.'
    ),
    array(
        'name' => 'Hospital',
        'url' => BASE_URL . 'hospital.php',
        'description' => 'Este ejemplo es bastante completo. Simula como en un hospital los médicos y las enfermeras pueden estar suscriptas a las notificaciones de urgencia de los pacientes. Se tiene en lugar de una interfaz para el Subject una clase abstracta para hacerla genérica y para hacer genérica la interfaz del Observer se crea una interfaz Event para implementarla y usarla para pasar el mensaje a los observers desde el subject.'
    ),
    array(
        'name' => 'PostOffice',
        'url' => BASE_URL . 'postoffice.php',
        'description' => 'Este ejemplo intenta simular un sistema de correo en donde los MailBox representan la casilla en donde los que entregan los correos son avisados para llevar los correos.'
    ),
    array(
        'name' => 'Stock',
        'url' => BASE_URL . 'stock.php',
        'description' => 'Este ejemplo tiene algo extra. Al crear Observer ya se asigna por el constructor el Subject que lo va a agregar y este proceso se hace dentro del Observer.'
    ),
);