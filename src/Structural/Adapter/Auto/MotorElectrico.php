<?php

namespace Structural\Adapter\Auto;

/**
 * Description of MotorElectrico
 *
 * @author jardissone
 */
class MotorElectrico
{

    private $conectado = false;

    public function conectar()
    {
        $this->conectado = true;
        echo 'conectando<br />';
    }

    public function activar()
    {
        if(!$this->conectado)
            throw new \Exception('No se puede activar ya que no está conectado');
        else
            echo 'activando<br />';
    }

    public function moverMasRapido()
    {
        echo 'moviendo más rápido<br />';
    }

    public function desactivar()
    {
        if(!$this->conectado)
            throw new \Exception('No se puede desactivar ya que no está conectado');
        else
            echo 'desactivando<br />';
    }

    public function desconectar()
    {
        echo 'desconectando<br />';
    }

}