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