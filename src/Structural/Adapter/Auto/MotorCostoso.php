<?php

namespace Structural\Adapter\Auto;

/**
 * Description of MotorEconomico
 *
 * @author jardissone
 */
class MotorCostoso implements MotorInterface
{

    public function acelerar()
    {
        echo 'acelerando<br />';
    }

    public function apagar()
    {
        echo 'apagando<br />';
    }

    public function encender()
    {
        echo 'encendiendo motor costoso<br />';
    }

}