<?php

namespace Creational\AbstractFactory\Button;

/**
 * Description of WinFactory
 *
 * @author jardissone
 */
class WinFactory implements GUIFactoryInterface
{

    public function createButton()
    {
        return new WinButton();
    }

}