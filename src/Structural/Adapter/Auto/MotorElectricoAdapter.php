<?php

namespace Structural\Adapter\Auto;

/**
 * Description of MotorElectricoAdapter
 *
 * @author jardissone
 */
class MotorElectricoAdapter implements MotorInterface
{

    private $motorElectrico;
    
    public function __construct()
    {
        $this->motorElectrico = new MotorElectrico();
    }
    
    public function encender()
    {
        $this->motorElectrico->conectar();
        $this->motorElectrico->activar();
    }

    public function acelerar()
    {
        $this->motorElectrico->moverMasRapido();
    }

    public function apagar()
    {
        $this->motorElectrico->desactivar();
        $this->motorElectrico->desconectar();
    }
    
    

}

?>
