<?php

namespace Creational\AbstractFactory\Button;

/**
 * Description of WinFactory
 *
 * @author jardissone
 */
class OSXFactory implements GUIFactoryInterface
{

    public function createButton()
    {
        return new OSXButton();
    }

}