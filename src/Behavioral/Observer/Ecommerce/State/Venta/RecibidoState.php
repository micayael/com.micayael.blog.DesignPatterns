<?php

namespace Behavioral\Observer\Ecommerce\State\Venta;

/**
 * Description of InactivoState
 *
 * @author jardissone
 */
class RecibidoState implements VentaStateInterface
{

    public function __toString()
    {
        return 'Venta recibida';
    }

    public function enviarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta)
    {
        throw new \Exception('Esta venta ya ha sido recibida');
    }

    public function recepcionarVenta(\Behavioral\Observer\Ecommerce\Entity\Venta $venta)
    {
        throw new \Exception('Esta venta ya ha sido recibida');
    }

}

?>
