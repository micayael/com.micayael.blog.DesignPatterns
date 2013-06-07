<?php

namespace Creational\AbstractFactory\Button;

/**
 * Description of Application
 *
 * @author jardissone
 */
class Application
{

    public function __construct(GUIFactoryInterface $factory)
    {
        $button = $factory->createButton();
        $button->paint();
    }

}

?>
