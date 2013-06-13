<?php

$menu = array(
    'creational' => array(
        'name' => 'Patrones de Creación',
        'patterns' => array(
            'simple-factory' => array(
                'name' => 'Simple Factory',
                'description' => 'Entre los patrones de Factory este es el más sencillo. Por lo general se encuentran referencias similares entre el Simple Factory y el Factory Method. La diferencia es que el Factory Method delega a las subclases la decisión de la instancia a devolver mientras que el Simple Factory no delega esa resonsabilidad a ningún hijo.',
                'examples' => array()
            ),
            'factory-method' => array(
                'name' => 'Factory Method',
                'description' => 'A diferencia del Simple Factory, el Factory Method delega a sus subclases decidir cual objeto devolver. Esto permite tener clasificadas las familias de productos.',
                'examples' => array()
            ),
            'abstract-factory' => array(
                'name' => 'Abstract Factory',
                'examples' => array()
            ),
            'prototype' => array(
                'name' => 'Prototype',
                'examples' => array()
            ),
            'builder' => array(
                'name' => 'Builder',
                'description' => 'Este patrón de diseño permite construir objetos complejos. A diferencia de los Factory, este realiza operaciones para construir el objeto mientras que el factory directamente devuelve un objeto.',
                'examples' => array()
            ),
            'singleton' => array(
                'name' => 'Singleton',
                'examples' => array()
            ),
        ),
    ),
    'structural' => array(
        'name' => 'Patrones Estructurales',
        'patterns' => array(
            'adapter' => array(
                'name' => 'Adapter (Wrapper)',
                'description' => 'El patrón Adapter, también conocido como Wrapper, permite amoldar una implementación para adecuarse a una interfaz. Se suele tomar como una correción a no haber pensado bien en el análisis de arquitectura del software pero en realidad se utiliza para permitir nuevas implementaciones. Por ejemplo los Adapters de Android permiten que los desarrolladores puedan extender de ellos manteniendo una extructura ya que el framework utilizará esas implementaciones y por lo tanto deberían tener los métodos esperados. Este patrón es muy parecido el Builder pero la diferencia es el momento en que se utilizan. El Adpter permite amoldar un objeto para que pueda conectarse con otro mientras que el Builder está pensado antes como para mantener una estructura desde el comienzo. Hay básicamente dos tipos Class Adapter (heredando de la clase que quiere adaptar) y Object Adapter (el adapter tiene una instancia del objeto a adaptar dentro que puede crearse dentro o recibirse en el constructor)',
                'examples' => array()
            ), 
            'facade' => array(
                'name' => 'Facade',
                'description' => 'Este patrón permite ser una interfaz para acceder a funcionalidades relacionadas sin tener que conocer su procesamientos internos.',
                'examples' => array()
            ),
            'proxy' => array(
                'name' => 'Proxy (Surrogate)',
                'description' => 'Proporciona un sustituto o placeholder para otro objeto para controlar el acceso a él. Hay varios tipos http://www.oodesign.com/proxy-pattern.html. Puede ser por razones de seguridad, se crean objetos pesados, como cache o son accedidos desde una ubicación remota. Es parecido a un Adapter pero el Proxy implementa la misma interface que el objeto a quién se quiere sustituir.',
                'examples' => array()
            ),
            'bridge' => array(
                'name' => 'Bridge',
                'description' => 'El patrón Bridge permite desacoplar una abstracción de su implementación para que puedan variar independientemente. El patrón Adapter es aplicado a sistemas después de haber sido diseñados (Wrapper) mientras que le patrón Bridge es usado desde el principio para que la abstracción y la implementación puedan ir de manera diferente. En el ejemplo de Colores hay un link que muestra como cambiar una idea para utilizar este patrón.',
                'examples' => array()
            ),
            'decorator' => array(
                'name' => 'Decorator',
                'description' => 'El patrón Decorator permite añadir funcionalidades de acuerdo al Decorador especificado.',
                'examples' => array()
            ),
            'flyweight' => array(
                'name' => 'Flyweight',
                'description' => 'Este patrón intenta reducir la cantidad de objetos creados. Intenta reutilizar objetos existentes guardándolos para no tener que realizar otra instancia.',
                'examples' => array()
            ),
            'composite' => array(
                'name' => 'Composite',
                'examples' => array()
            ),
        ),
    ),
    'behavioral' => array(
        'name' => 'Patrones de Comportamiento',
        'patterns' => array(
            'template-method' => array(
                'name' => 'Template Method',
                'examples' => array()
            ),
            'strategy' => array(
                'name' => 'Strategy',
                'examples' => array()
            ),
            'observer' => array(
                'name' => 'Observer',
                'examples' => array()
            ),
            'mediator' => array(
                'name' => 'Mediator',
                'examples' => array()
            ),
            'state' => array(
                'name' => 'State',
                'examples' => array()
            ),
            'interpreter' => array(
                'name' => 'Interpreter',
                'examples' => array()
            ),
            'visitor' => array(
                'name' => 'Visitor',
                'examples' => array()
            ),
            'command' => array(
                'name' => 'Command',
                'examples' => array()
            ),
            'iterator' => array(
                'name' => 'Iterator',
                'examples' => array()
            ),
            'memento' => array(
                'name' => 'Memento',
                'examples' => array()
            ),
            'chain-of-responsability' => array(
                'name' => 'Chain of Responsability',
                'examples' => array()
            ),
        ),
    ),
);